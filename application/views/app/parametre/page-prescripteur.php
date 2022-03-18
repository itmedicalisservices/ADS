
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php //$listeRub = $this->md_parametre->liste_rubrique_actifs(); ?>


<?php //$liste = $this->md_parametre->liste_prescripteur_actifs(); ?>



<?php $liste = $this->md_parametre->liste_prescripteur_100(); ?>


<?php $NBprescripteur = $this->md_parametre->nb_prescripteur_actifs()->nb; ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Liste des prescripteurs (<?php echo $NBprescripteur ;?>)</h2>
						 <br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
						<button style="" type="button" class="btn bg-blue-grey waves-effect ajout_service pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter un nouveau</b></button>
                        
                    </div>
                    <div class="body table-responsive liste_prescripteur"> 
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th style="width:40%">Nom</th>
									<th style="width:25%">Prenom</th>
									<th style="width:25%">Titre</th>
									<th style="width:25%">Pourcentage(%)</th>
									<th style="width:10%">Actions</th>
								</tr>
							</thead>
						   
							<tbody class="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_Pre<?php echo $l->pre_id ?>"><?php echo $l->pre_sNom; ?></span>
										<form id='form-edit-Pre<?php echo $l->pre_id ;?>'>
											<textarea class="cacher input_Pre<?php echo $l->pre_id ?>" style='width:100%' name='nom'><?php echo $l->pre_sNom; ?></textarea>
											<input type="hidden" value="<?php echo $l->pre_id ;?>" name="id"/>
											<input type="hidden" value="<?php echo $l->pre_sNom; ?>" name="nom1"/>
										</form>
									</td>									
									<td>
										<span class="champs_Pre2<?php echo $l->pre_id ?>"><?php echo $l->pre_sPrenom; ?></span>
										<form id='form-edit-Pre2<?php echo $l->pre_id ;?>'>
											<textarea class="cacher input_Pre2<?php echo $l->pre_id ?>" style='width:100%' name='prenom'><?php echo $l->pre_sPrenom; ?></textarea>
											<input type="hidden" value="<?php echo $l->pre_sPrenom; ?>" name="prenom1"/>
										</form>
									</td>									
									<td>
										<span class="champs_Pre3<?php echo $l->pre_id ?>"><?php echo $l->pre_sTitre; ?></span>
										<form id='form-edit-Pre3<?php echo $l->pre_id ;?>'>
											<select class="cacher input_Pre3<?php echo $l->pre_id ?>" name="titre">
												<option <?php if($l->pre_sTitre="Sans titre"){ ?>selected<?php } ?> value="Sans titre">Sans titre</option>
												<option <?php if($l->pre_sTitre="Docteur"){ ?>selected<?php } ?> value="Docteur">Docteur</option>
												<option <?php if($l->pre_sTitre="Professeur"){ ?>selected<?php } ?> value="Professeur">Professeur</option>
											</select>
											<input type="hidden" value="<?php echo $l->pre_sTitre; ?>" name="titre1"/>
										</form>
									</td>
									<td>
										<span class="champs_Pre4<?php echo $l->pre_id ?>"><?php echo $l->pre_iPourcentage; ?></span>
										<form id='form-edit-Pre4<?php echo $l->pre_id ;?>'>
											<textarea class="cacher input_Pre3<?php echo $l->pre_id ?>" style='width:100%' name='pourcentage' ><?php echo $l->pre_iPourcentage; ?></textarea>
											<input type="hidden" value="<?php echo $l->pre_iPourcentage; ?>" name="pourcentage1"/>
										</form>
									</td>								
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->pre_id; ?>" class="editPreFinal confirm_Pre<?php echo $l->pre_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->pre_id; ?>" class="editPreAnnule annule_Pre<?php echo $l->pre_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->pre_id; ?>" class="editPre clique_Pre<?php echo $l->pre_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer ?')" href="<?php echo site_url("parametre/supprimer_prescripteur/".$l->pre_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px; max-width:80%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Ajoutez des Libellés & quotes-parts</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-Pre">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:30%">Nom</th>
											<th style="width:30%">Prénom</th>
											<th style="width:30%">Titre</th>
											<th style="width:30%">Pourcentage(%)</th>
											<th style="width:10%"  class="text-center"><i class="fa fa-wrench"></i></th>
										</tr>
										<tr>
											<td>
												<input type="text" id="Nom" style="width:100%" placeholder="Saisissez le Nom"/>
											</td>										
											<td>
												<input type="text"  id="Prenom" style="width:100%" placeholder="Saisissez le Prénom"/>
											</td>										
											<td>
												<select id="Titre" style="width:100%">
												<option value="">Selectionnez</option>
												<option value="Sans titre">Sans titre</option>
												<option value="Docteur">Docteur</option>
												<option value="Professeur">Professeur</option>
											</select>
											</td>	
											<td>
												<input type="text"  id="Pourcentage" style="width:100%" placeholder="Saisissez le Pourcentage"/>
											</td>	
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addPre"><i class="fa fa-plus"></i></a>
											</td>
										</tr>
									</thead>
								   
									<tbody id="tbody"></tbody>
								</table>
							</form>
							
						</div>
					</div>
				</div>
			
			</div>
            <div class="modal-footer">
                <a href="javascript:();" class="btn btn-success waves-effect addPre" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<button style="display:none" type="button" class="btn bg-blue-grey waves-effect finish" id="finish">BLUE GREY</button>
<!-- For Material Design Colors -->
<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left:70px" id="defaultModalLabel">SERVICE ADMINISTRATION</h4>
            </div>
            <div class="modal-body text-center"> Prescripteur(s) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listePre = document.querySelector('#tbody');
        var addPre = document.querySelector('#addPre');
        var annuaire;
        annuaire = new Array();

        function removePre(index) {
            annuaire.splice(index,1);
            showListePre();	
        }

        function addDetailPre() 
        {
            var Nom 	            = document.getElementById('Nom').value;
            var Prenom 	            = document.getElementById('Prenom').value;
            var Titre 	            = document.getElementById('Titre').value;
            var PourPre 	            = document.getElementById('Pourcentage').value;
            if(Nom == '' || Titre == '' || PourPre == '') {
                alert('Veuillez renseigner tous les champs.');	
            }
            else {
				//alert(1);
                var contact = new Object();
                contact.Nom        = Nom;
                contact.Prenom	    = Prenom;
                contact.Titre	    = Titre;
                contact.PourPre	    = PourPre;
                annuaire.push(contact);
                showListePre();	
				document.getElementById('Nom').value="";
				document.getElementById('Prenom').value="";
				document.getElementById('Titre').value="";
				document.getElementById('PourPre').value="";
            }
        }

        addPre.addEventListener('click', addDetailPre);

        function showListePre() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
								
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="nom[]" value="'+ annuaire[i].Nom+'"/>' + annuaire[i].Nom + '</td>';
                contenu += '<td><input type="hidden" name="prenom[]" value="'+ annuaire[i].Prenom+'"/>' + annuaire[i].Prenom + '</td>';
                contenu += '<td><input type="hidden" name="titre[]" value="'+ annuaire[i].Titre+'"/>' + annuaire[i].Titre + '</td>';
                contenu += '<td><input type="hidden" name="pourPre[]" value="'+ annuaire[i].PourPre+'"/>' + annuaire[i].PourPre + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removePre(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listePre.innerHTML = contenu;
			// alert(contenu);
        }
    
        </script>


<script>
   /* $( document ).ready(function() {
        // console.log( "document loaded" );
		$('#search').keyup(function(){
			search_table($(this).val());
		});
		
		function search_table(value){
			$('#patient_table tr').each(function(){
				var found = 'false';
				$(this).each(function(){
					if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
					{
						found = 'true';
					}
				});
				if(found == 'true'){
					$(this).show();
				}else{	
					$(this).hide();
				}
			});
		}
    });*/
	
	
	
	
		function recherche(){
			
			if($("#search1").val() !=""){
				$.ajax({
					type:"POST",
					url: recherche_prescripteur_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".liste_prescripteur").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_prescripteur").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_prescripteur_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".liste_prescripteur").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_prescripteur").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>