
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php //$listeRub = $this->md_parametre->liste_rubrique_actifs(); ?>



<?php $liste = $this->md_parametre->liste_quotes_parts_actifs(); ?>


<?php $liste = $this->md_parametre->liste_quotes_parts_100(); ?>


<?php $NBquotepartes = $this->md_parametre->nb_quotes_parts_actifs()->nb; ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Liste des quotes parts du personnel (<?php echo $NBquotepartes ;?>)</h2>
						 <br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
						<button style="" type="button" class="btn bg-blue-grey waves-effect ajout_quotes pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter un nouveau</b></button>
                        
                    </div>
                    <div class="body table-responsive liste_quotes_parts"> 
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr><th style="width:10%">Titre</th>
									<th style="width:40%">Nom</th>
									<th style="width:25%">Prenom</th>
									<th style="width:30%">Quote part(%)</th>
									<th style="width:10%">Actions</th>
								</tr>
							</thead>
						   
							<tbody class="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_Tqp3<?php echo $l->tqp_id ?>"><?php echo $l->per_sTitre; ?></span>
										<form id='form-edit-Tqp3<?php echo $l->tqp_id ;?>'>
										<textarea class="cacher input_Tqp2<?php echo $l->tqp_id ?>" style='width:100%' name='titre' readonly ><?php echo $l->per_sTitre; ?></textarea>
											<input type="hidden" value="<?php echo $l->per_sTitre; ?>" name="titre1"/>
										</form>
									</td>
									<td>
										<span class="champs_Tqp<?php echo $l->tqp_id ?>"><?php echo $l->per_sNom; ?></span>
										<form id='form-edit-Tqp<?php echo $l->tqp_id ;?>'>
											<textarea class="cacher input_Tqp<?php echo $l->tqp_id ?>" style='width:100%' name='nom' readonly><?php echo $l->per_sNom; ?></textarea>
											<input type="hidden" value="<?php echo $l->tqp_id ;?>" name="id"/>
											<input type="hidden" value="<?php echo $l->per_sNom; ?>" name="nom1"/>
										</form>
									</td>									
									<td>
										<span class="champs_Tqp2<?php echo $l->tqp_id ?>"><?php echo $l->per_sPrenom; ?></span>
										<form id='form-edit-Tqp2<?php echo $l->tqp_id ;?>'>
											<textarea class="cacher input_Tqp2<?php echo $l->tqp_id ?>" style='width:100%' name='prenom' readonly ><?php echo $l->per_sPrenom; ?></textarea>
											<input type="hidden" value="<?php echo $l->per_sPrenom; ?>" name="prenom1" />
										</form>
									</td>									
									
									<td>
										<span class="champs_Tqp4<?php echo $l->tqp_id ?>"><?php echo $l->tqp_iPourcentage; ?></span>
										<form id='form-edit-Tqp4<?php echo $l->tqp_id ;?>'>
											<textarea class="cacher input_Tqp4<?php echo $l->tqp_id; ?>" style='width:100%' name='pourcentage' ><?php echo $l->tqp_iPourcentage; ?></textarea>
											<input type="hidden" value="<?php echo $l->tqp_iPourcentage; ?>" name="pourcentage1"/>
										</form>
									</td>								
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->tqp_id; ?>" class="editTqpFinal confirm_Tqp<?php echo $l->tqp_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->tqp_id; ?>" class="editTqpAnnule annule_Tqp<?php echo $l->tqp_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->tqp_id; ?>" class="editTqp clique_Tqp<?php echo $l->tqp_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer ?')" href="<?php echo site_url("parametre/supprimer_quota_part/".$l->tqp_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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
							<form id="form-Tqp">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:30%">Medecin</th>
											<th style="width:30%">Pourcentage(%)</th>
											<th style="width:10%"  class="text-center"><i class="fa fa-wrench"></i></th>
										</tr>
										<tr>
																				
											<td>
											<?php $listepms = $this->md_personnel->liste_personnel_medical_sante();?>
												<select id="Medecin" style="width:100%" class="selectmedecin">
												<option value="">--Selectionnez le medecin--</option>
												<?php foreach($listepms as $l){ ?>
												<option value="<?php echo $l->per_id."-/-".$l->per_sNom." ".$l->per_sPrenom; ?>"><?php echo $l->per_sNom." ".$l->per_sPrenom;?></option>
												<?php } ?>
												</select>
											</td>	
											<td>
												<input type="text"  id="Pourcentage" style="width:100%" placeholder="Saisissez le Pourcentage"/>
											</td>	
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addTqp"><i class="fa fa-plus"></i></a>
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
                <a href="javascript:();" class="btn btn-success waves-effect addTqp" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
            <div class="modal-body text-center"> Quote part(s) attribué avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listeTqp = document.querySelector('#tbody');
        var addTqp = document.querySelector('#addTqp');
        var annuaire;
        annuaire = new Array();

        function removeTqp(index) {
            annuaire.splice(index,1);
            showListeTqp();	
        }

        function addDetailTqp() 
        {
            var Medecin 	            = document.getElementById('Medecin').value;
            var PourTqp 	            = document.getElementById('Pourcentage').value;
            if(Medecin == '' || PourTqp == '') {
                alert('Veuillez renseigner tous les champs.');	
            }
            else {
				//alert(1);
                var contact = new Object();
                contact.Medecin       = Medecin;
                contact.PourTqp	    = PourTqp;
                annuaire.push(contact);
                showListeTqp();	
				document.getElementById('Medecin').value="";
				document.getElementById('Pourcentage').value="";
            }
        }

        addTqp.addEventListener('click', addDetailTqp);

        function showListeTqp() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
            var Tab	="";
            for(var i = 0; i < tailleTableau; i++) {
				//alert(annuaire[i].Medecin);
				Tab=annuaire[i].Medecin.split("-/-");
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="medecin[]" value="'+ Tab[0]+'"/>' + Tab[1] + '</td>';
                contenu += '<td><input type="hidden" name="pourTqp[]" value="'+ annuaire[i].PourTqp+'"/>' + annuaire[i].PourTqp + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeTqp(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeTqp.innerHTML = contenu;
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
					url: recherche_quotes_parts_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".liste_quotes_parts").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_quotes_parts").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_quotes_parts_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".liste_quotes_parts").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_quotes_parts").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>