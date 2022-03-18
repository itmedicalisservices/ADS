
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>


<?php //$liste = $this->md_parametre->liste_antecedent_personnel_actifs(); ?>


<?php $liste = $this->md_smi->liste_antecedent_Obstetricaux_100(); ?>

<?php $NBantecedentlob = $this->md_smi->nb_antecedant_lob()->nb; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-6 col-md-6 col-sm-12">
				<div class="card">
                    <div class="header">
                        <h2>Ajoutez des antécédents obstetricaux</h2>
                        
                    </div>
                    <div class="body table-responsive">
						<form id="form-lob">
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>Désignation</th>
										<th style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
									</tr>
									<tr>
										<td>
											<input type="text" id="lib" style="width:100%" placeholder="Saisissez dans ce champs"/>
										</td>
										<td class="text-center">
											<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addObs"><i class="fa fa-plus"></i></a>
										</td>
									</tr>
								</thead>
							   
								<tbody id="tbody"></tbody>
							</table>
						</form>
						<a href="javascript:();" class="btn btn-success waves-effect addAnteObs" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
                    </div>
                </div>
			</div>
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>liste des antécédents obstetricaux(<?php echo $NBantecedentlob; ?>)</h2>
                        <br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
                    </div>
                    <div class="body table-responsive liste_antecedent_Obstetricaux"> 
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th>Désignation</th>
									<th style="width:80px">Action</th>
								</tr>
							</thead>
						   
							<tbody class="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs<?php echo $l->lob_id ?>"><?php echo $l->lob_sLib; ?></span>
										<form id='form-edit-lob<?php echo $l->lob_id ?>'>
											<textarea class="cacher input<?php echo $l->lob_id ?>" style='width:100%' name='lib'><?php echo $l->lob_sLib; ?></textarea>
											<input type="hidden" value="<?php echo $l->lob_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->lob_sLib ?>" name="nom"/>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->lob_id; ?>" class="editAnteObsFinal confirm<?php echo $l->lob_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->lob_id; ?>" class="editAnteObsAnnule annule<?php echo $l->lob_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->lob_id; ?>" class="editAnteObs clique<?php echo $l->lob_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer cet antécédent personnel ?')" href="<?php echo site_url("parametre/supprimer_AntecedentObs/".$l->lob_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
		<button style="display:none" type="button" class="btn bg-blue-grey waves-effect finish" id="finish">BLUE GREY</button>
    </div>
</section>

<!-- For Material Design Colors -->
<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left:70px" id="defaultModalLabel">SERVICE D'ADMINISTRATION APP</h4>
            </div>
            <div class="modal-body text-center"> antécédents(s) obstetrique(caux) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listeObs = document.querySelector('#tbody');
        var addObs = document.querySelector('#addObs');
        var annuaire;
        annuaire = new Array();

        function removeObs(index) {
            annuaire.splice(index,1);
            showListeObs();	
        }

        function addDetailObs() 
        {
            var lib 	            = document.getElementById('lib').value;
            if(lib == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                annuaire.push(contact);
                showListeObs();	
				document.getElementById('lib').value="";
            }
        }

        addObs.addEventListener('click', addDetailObs);

        function showListeObs() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeObs(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeObs.innerHTML = contenu;
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
					url: recherche_antecedent_Obstetricaux,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".liste_antecedent_Obstetricaux").html('<tr><td colspan="4"><em>Aucune antécédents obstetricaux trouver</em></td></tr>');
					}else{
						$(".liste_antecedent_Obstetricaux").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: liste_antecedent_Obstetricaux_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".liste_antecedent_Obstetricaux").html('<tr><td colspan="4"><em>Aucune antécédents obstetricaux trouver</em></td></tr>');
					}else{
						$(".liste_antecedent_Obstetricaux").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>