
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $listeDirect = $this->md_personnel->liste_departements_actifs(); ?>
<?php //$liste = $this->md_parametre->liste_services_actifs(); ?>
<?php $lflt = $this->md_parametre->liste_fonctionnalite_actifs(); ?>
<?php 
	$articleParPage = 30;
	
	/* Personnel medical */
	$articleTotaux  = $this->md_parametre->nb_chapitre_actifs();
	$pagesTotales  = ceil($articleTotaux->nb/$articleParPage);
	if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pagesTotales){
		$_GET['page'] = intval($_GET['page']);
		$pageActuelle  = $_GET['page'];
	}else{
		$pageActuelle  = 1;
	}
	
	
	//$liste = $this->md_parametre->liste_services($articleParPage,$pageActuelle);
	$liste = $this->md_parametre->liste_chapitre_100();


 ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">liste des chapitres CM-10 (<?php echo $articleTotaux->nb ;?>)</h2><button style="" type="button" class="btn bg-blue-grey waves-effect ajout_service pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter un nouveau</b></button>
                        <!--<br><br><input type="text" name="search" id="search" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" />-->
						<br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
                    </div>
                    <div class="body table-responsive " style="overflow:auto;height:500px" id="liste_chapitre">
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th>Désignation du Chapitre</th>
									<th>Code d'identification</th>
									<th style="width:10%">Action</th>
								</tr>
							</thead>
						   
							<tbody id="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_chap<?php echo $l->chp_id ?>"><?php echo $l->chp_sLibelle; ?></span>
										<form id='form-edit-chap<?php echo $l->chp_id ?>'>
											<textarea class="cacher input_chap<?php echo $l->chp_id ?>" style='width:100%' name='lib'><?php echo $l->chp_sLibelle; ?></textarea>
											<input type="hidden" value="<?php echo $l->chp_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->chp_sLibelle ?>" name="nom"/>
										</form>
									</td>
									<td>
										<span class="champs_code<?php echo $l->chp_id ?>"><?php echo $l->chp_sCode; ?></span>
										<form id='form-edit_code<?php echo $l->chp_id ?>'>
										<textarea class="cacher input_code<?php echo $l->chp_id ?>" style='width:100%' name='code'><?php echo $l->chp_sCode; ?></textarea>
										</form>
									</td>									
									
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->chp_id; ?>" class="editChapitreFinal confirm_chap<?php echo $l->chp_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->chp_id; ?>" class="editChapitreAnnule annule_chap<?php echo $l->chp_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->chp_id; ?>" class="editChapitre clique_chap<?php echo $l->chp_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer ce chapitre ?')" href="<?php echo site_url("parametre/supprimer_chapitre/".$l->chp_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
                    </div>
					<?php if($articleTotaux->nb >$articleParPage){ ?>
						<!--<div class="row clearfix">
							<div class="col-sm-12 text-center">
								<ul class="pagination">
									<?php
										for($i=1;$i<=$pagesTotales;$i++){
											if($i==$pageActuelle){
									?>
									<li class="page-item active"><a class="page-link" href="javascript:();"><?=$i?></a></li>
									<?php }else{  ?>
									 <li class="page-item"><a class="page-link" href="<?php echo site_url("parametre/service");?>/?page=<?=$i?>"><?=$i?></a></li>
									<?php } } ?>
								</ul>
							</div>
						</div>-->
					<?php } ?>
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
							<h2>Ajoutez de nouveaux chapitres</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-chap">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:48%">Désignation chapitre</th>
											<th style="width:48%">Code d'identification</th>
										</tr>
										<tr>
											<td>
												<input type="text" id="lib" style="width:100%" placeholder="Saisissez la designation du chapitre"/>
												
											</td>
											<td>
												<input type="text" id="code" style="width:100%" placeholder="Saisissez code d'identification"/>
												
											</td>
											
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addChap"><i class="fa fa-plus"></i></a>
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
                <a href="javascript:();" class="btn btn-success waves-effect addChap" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
                <h4 class="modal-title" style="margin-left:70px" id="defaultModalLabel">PARAMETRE</h4>
            </div>
            <div class="modal-body text-center"> Chapitre(s) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.min.js');?>"></script>
	
    <script>
    $( document ).ready(function() {
        // console.log( "document loaded" );
		$('#search').keyup(function(){
			search_table($(this).val());
		});
		
		function search_table(value){
			$('#service_table tr').each(function(){
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
    });
	</script>
    <script type="text/javascript">
        'use strict';
		
        var listeChap = document.querySelector('#tbody');
        var addChap = document.querySelector('#addChap');
        var annuaire;
        annuaire = new Array();

        function removeChap(index) {
            annuaire.splice(index,1);
            showListeChap();	
        }

        function addDetailChap() 
        {
			
            var lib 	            = document.getElementById('lib').value;
            var code 	            = document.getElementById('code').value;
            if(lib == '') {
                alert('Veuillez renseigner la designation.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                contact.code	        = code;
                annuaire.push(contact);
                showListeChap();	
				document.getElementById('lib').value="";
            }
        }

        addChap.addEventListener('click', addDetailChap);

        function showListeChap() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td><input type="hidden" name="code[]" value="'+ annuaire[i].code+'"/>' + annuaire[i].code + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeChap(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeChap.innerHTML = contenu;
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
					url: recherche_chapitre_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					//alert(retour);
					if(retour == ""){
						$("#liste_chapitre").html('<tr><td colspan="4"><em>Aucun service trouver</em></td></tr>');
					}else{
						$("#liste_chapitre").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_chapitre_list_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$("#liste_chapitre").html('<tr><td colspan="4"><em>Aucun service trouver</em></td></tr>');
					}else{
						$("#liste_chapitre").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>