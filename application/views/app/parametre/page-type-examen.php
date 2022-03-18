﻿
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $listeActeLabo = $this->md_parametre->liste_acts_laboratoires_actifs(); ?>


<?php //$liste = $this->md_parametre->liste_type_examen_actifs(); ?>

<?php $liste = $this->md_parametre->liste_type_examen_100(); ?>

<?php $NBtypeExamen = $this->md_parametre->nb_type_examen_actifs()->nb; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">liste des type d'examen(<?php echo $NBtypeExamen; ?>) </h2>
						 <br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
						<button style="" type="button" class="btn bg-blue-grey waves-effect ajout_service pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter un nouveau</b></button>
                        
                    </div>
                    <div class="body table-responsive liste_type_examen"> 
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th>Type d'examen</th>
									<th style="width:80px;">Action</th>
								</tr>
							</thead>
						   
							<tbody class="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_ser<?php echo $l->tex_id ?>"><?php echo $l->tex_sLibelle; ?></span>
										<form id='form-type-examen<?php echo $l->tex_id ?>'>
											<textarea class="cacher input_ser<?php echo $l->tex_id ?>" style='width:100%' name='lib'><?php echo $l->tex_sLibelle; ?></textarea>
											<input type="hidden" value="<?php echo $l->tex_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->tex_sLibelle ?>" name="nom"/>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->tex_id; ?>" class="editTypeExamenFinal confirm_ser<?php echo $l->tex_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->tex_id; ?>" class="editTypeExamenAnnule annule_ser<?php echo $l->tex_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->tex_id; ?>" class="editTypeExamen clique_ser<?php echo $l->tex_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer ce type d'examen ?')" href="<?php echo site_url("parametre/supprimer_type_examen/".$l->tex_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px; max-width:30%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>nouveau type d'examen</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-ser">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:48%">Type d'examen</th>
										</tr>
										<tr>
											<td>
												<input type="text" name="lib" class="obligatoire" style="width:100%"  placeholder="Saisissez le type d'examen"/>
											</td>
										</tr>
									</thead>
								</table>
							</form>
							
						</div>
					</div>
				</div>
			
			</div>
            <div class="modal-footer">
                <a href="javascript:();" class="btn btn-success waves-effect addTypeExamen" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
                <h4 class="modal-title" style="margin-left:70px" id="defaultModalLabel">SERVICE DES RESSOURCES HUMAINES</h4>
            </div>
            <div class="modal-body text-center"> Type d'examen(s) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>



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
					url: recherche_type_examen_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".liste_type_examen").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_type_examen").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_type_examen_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".liste_type_examen").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_type_examen").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>