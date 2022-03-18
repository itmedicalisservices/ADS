
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	$articleParPage = 30;
	
	/* Personnel medical */
	$articleTotaux  = $this->md_parametre->nb_SousMaladie2_actifs();
	$pagesTotales  = ceil($articleTotaux->nb/$articleParPage);
	if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pagesTotales){
		$_GET['page'] = intval($_GET['page']);
		$pageActuelle  = $_GET['page'];
	}else{
		$pageActuelle  = 1;
	}
	
	
	//$liste = $this->md_parametre->liste_services($articleParPage,$pageActuelle);
	$maladie = $this->md_parametre->liste_SousMaladie1_actif();
	$liste = $this->md_parametre->liste_SousMaladie2_100();


 ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">liste des classes CM-10 (<?php echo $articleTotaux->nb ;?>)</h2><button style="" type="button" class="btn bg-blue-grey waves-effect ajout_service pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter un nouveau</b></button>
                        <!--<br><br><input type="text" name="search" id="search" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" />-->
						<br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
                    </div>
                    <div class="body table-responsive " style="overflow:auto;height:500px" id="liste_Sous1">
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th>Désignation Maladie</th>
									<th>Désignation sous maladie</th>
									<th>Code d'identification</th>
									<th style="width:10%">Action</th>
								</tr>
							</thead>
						   
							<tbody id="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_mal<?php echo $l->sm2_id ?>"><?php echo $l->sm1_sLibelle; ?></span>
										<form id='form-edit-mal<?php echo $l->sm2_id ?>'>
											<select class="cacher input_mal<?php echo $l->sm2_id ?>" name="mal" style="width:100%;padding-bottom:10px;padding-top:10px">
												<?php foreach($maladie AS $f){ ?>
												<option value="<?php echo $f->sm1_id; ?>-/-<?php echo $f->sm1_sLibelle; ?>" <?php if($f->sm1_id == $l->sm1_id){echo "selected='selected'";} ?>><?php echo $f->sm1_sLibelle; ?></option>
												<?php } ?>
											</select>
										</form>
									</td>
									<td>
										<span class="champs_sous2<?php echo $l->sm2_id ?>"><?php echo $l->sm2_sLibelle; ?></span>
										<form id='form-edit_sous2<?php echo $l->sm2_id ?>'>
										<textarea class="cacher input_sous2<?php echo $l->sm2_id ?>" style='width:100%' name='lib'><?php echo $l->sm2_sLibelle; ?></textarea>
										</form>
									</td>									
									<td>
										<span class="champs_code<?php echo $l->sm2_id ?>"><?php echo $l->sm2_sCode; ?></span>
										<form id='form-edit-code<?php echo $l->sm2_id ?>'>
											<textarea class="cacher input_code<?php echo $l->sm2_id ?>" style='width:100%' name='code'><?php echo $l->sm2_sCode; ?></textarea>
											<input type="hidden" value="<?php echo $l->sm2_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->sm2_sCode ?>" name="nom"/>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->sm2_id; ?>" class="editSousMaladie2Final confirm_sous2<?php echo $l->sm2_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->sm2_id; ?>" class="editSousMaladie2Annule annule_sous2<?php echo $l->sm2_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->sm2_id; ?>" class="editSousMaladie2 clique_sous2<?php echo $l->sm2_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer cette sous maladie ?')" href="<?php echo site_url("parametre/supprimer_SousMaladie2/".$l->sm2_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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
							<h2>Ajoutez de nouvelles sous maladies</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-sous2">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Désignation Maladie</th>
											<th>Désignation sous maladie</th>
											<th>Code d'identification</th>
											<th style="width:10%">Action</th>
										</tr>
										<tr>
											<td>
												<select  name="mal" style="width:100%" id="mal" class="selectDir">
													<option value="">----- Selectrionner ------</option>
													<?php foreach($maladie AS $c){ ?>
													<option value="<?php echo $c->sm1_id; ?>-/-<?php echo $c->sm1_sLibelle; ?>" ><?php echo $c->sm1_sLibelle; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" id="lib" style="width:100%" placeholder="Saisissez la designation sous maladie"/>
												
											</td>
											<td>
												<input type="text" id="code" style="width:100%" placeholder="Saisissez code d'identification"/>
												
											</td>
											
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addSous2"><i class="fa fa-plus"></i></a>
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
                <a href="javascript:();" class="btn btn-success waves-effect addSous2" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
            <div class="modal-body text-center"> Maladie(s) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
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
		
        var listeSous2 = document.querySelector('#tbody');
        var addSous2 = document.querySelector('#addSous2');
        var annuaire;
        annuaire = new Array();

        function removeSous2(index) {
            annuaire.splice(index,1);
            showListeSous2();	
        }

        function addDetailSous2() 
        {

            var lib 	            = document.getElementById('lib').value;
            var code 	            = document.getElementById('code').value;
            var mal 	            = document.getElementById('mal').value;
			
            if(lib == '' || mal == '') {
                alert('Veuillez renseigner les champs avec *.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                contact.code	        = code;
                contact.mal	        = mal;
                annuaire.push(contact);
                showListeSous2();	
				document.getElementById('lib').value="";
				document.getElementById('code').value="";
            }
        }

        addSous2.addEventListener('click', addDetailSous2);

        function showListeSous2() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;

            for(var i = 0; i < tailleTableau; i++) {

				var tabmal = annuaire[i].mal.split("-/-");
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="mal[]" value="'+ tabmal[0]+'"/>' + tabmal[1] + '</td>';
                contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td><input type="hidden" name="code[]" value="'+ annuaire[i].code+'"/>' + annuaire[i].code + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeSous2(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeSous2.innerHTML = contenu;
			//alert(contenu);
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
			//alert(1);
			if($("#search1").val() !=""){
				$.ajax({
					type:"POST",
					url: recherche_SousMaladie2_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					//alert(retour);
					if(retour == ""){
						$("#liste_Sous1").html('<tr><td colspan="4"><em>Aucun service trouver</em></td></tr>');
					}else{
						$("#liste_Sous1").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			//alert(2);
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_SousMaladie2_list_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$("#liste_Sous1").html('<tr><td colspan="4"><em>Aucun service trouver</em></td></tr>');
					}else{
						$("#liste_Sous1").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>