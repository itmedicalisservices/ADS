
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $listeCla = $this->md_parametre->liste_classe_actif(); ?>


<?php //$liste = $this->md_parametre->liste_maladie_actifs(); ?>


<?php $liste = $this->md_parametre->liste_maladie_100(); ?>
<?php $NBmaladie = $this->md_parametre->nb_maladie_actifs()->nb; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Classification des maladies par famille(<?php echo $NBmaladie; ?>)  </h2>
						<br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
						<button style="" type="button" class="btn bg-blue-grey waves-effect ajout_maladie pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b>Ajouter</b></button>
                        
                    </div>
                    <div class="body table-responsive liste_maladie"> 
						<table class="table table-bordered table-striped table-hover " id="example">
						   
							<thead>
								<tr>
									<th>Classe</th>
									<th>Maladie</th>
									<th>Code d'identification</th>
									<th style="width:80px">Action</th>
								</tr>
							</thead>
						   
							<tbody class="">
							<?php foreach($liste AS $l){ ?>
								<tr>
									<td>
										<span class="champs_dep<?php echo $l->mal_id ?>"><?php echo $l->cla_sLibelle; ?></span>
										<form id='form-edit_dep<?php echo $l->mal_id ?>'>
											<select class="cacher input_dep<?php echo $l->mal_id ?>" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">
												<?php foreach($listeCla AS $f){ ?>
												<option value="<?php echo $f->cla_id; ?>-/-<?php echo $f->cla_sLibelle; ?>" <?php if($f->cla_id == $l->cla_id){echo "selected='selected'";} ?>><?php echo $f->cla_sLibelle; ?></option>
												<?php } ?>
											</select>
										</form>
									</td>
									<td>
										<span class="champs_ser<?php echo $l->mal_id ?>"><?php echo $l->mal_sLibelle; ?></span>
										<form id='form-edit-ser<?php echo $l->mal_id ?>'>
											<textarea class="cacher input_ser<?php echo $l->mal_id ?>" style='width:100%' name='lib'><?php echo $l->mal_sLibelle; ?></textarea>
											<input type="hidden" value="<?php echo $l->mal_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->mal_sLibelle ?>" name="nom"/>
										</form>
									</td>
									<td>
										<span class="champs_code<?php echo $l->mal_id ?>"><?php echo $l->mal_sCode; ?></span>
										<form id='form-edit-code<?php echo $l->mal_id ?>'>
											<textarea class="cacher input_code<?php echo $l->mal_id ?>" style='width:100%' name='code'><?php echo $l->mal_sCode; ?></textarea>
											<input type="hidden" value="<?php echo $l->mal_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->mal_sCode ?>" name="nom"/>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->mal_id; ?>" class="editMaladieFinal confirm_ser<?php echo $l->mal_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->mal_id; ?>" class="editMaladieAnnule annule_ser<?php echo $l->mal_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->mal_id; ?>" class="editMaladie clique_ser<?php echo $l->mal_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer cette maladie ?')" href="<?php echo site_url("parametre/supprimer_maladie/".$l->mal_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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
							<h2>Enregistrer les maladies</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-ser">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:40%">CLasse *</th>
											<th style="width:40%">Maladie *</th>
											<th style="width:10%">Code d'identification</th>
											<th style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
										</tr>
										<tr>
											<td>
												<select id="dep" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectdep">
													<option value="">----- Choisissez la classe * -----</option>
													<?php foreach($listeCla AS $f){ ?>
													<option value="<?php echo $f->cla_id; ?>-/-<?php echo $f->cla_sLibelle; ?>"><?php echo $f->cla_sLibelle; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<input type="text" id="lib" style="width:100%" placeholder="Saisissez dans ce champs"/>
												
											</td>
											<td>
												<input type="text" id="code" style="width:100%" placeholder="Saisissez dans ce champs"/>
												
											</td>
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addSer"><i class="fa fa-plus"></i></a>
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
                <a href="javascript:();" class="btn btn-success waves-effect addMal" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
            <div class="modal-body text-center"> maladie(s) enregistée(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listeSer = document.querySelector('#tbody');
        var addSer = document.querySelector('#addSer');
        var annuaire;
        annuaire = new Array();

        function removeSer(index) {
            annuaire.splice(index,1);
            showListeSer();	
        }

        function addDetailSer() 
        {
            var lib 	            = document.getElementById('lib').value;
            var dep 	            = document.getElementById('dep').value;
            var code 	            = document.getElementById('code').value;
            if(lib == '' || dep == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                contact.dep	        = dep;
                contact.code	        = code;
                annuaire.push(contact);
                showListeSer();	
				document.getElementById('lib').value="";
            }
        }

        addSer.addEventListener('click', addDetailSer);

        function showListeSer() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				
				var tabDep = annuaire[i].dep.split("-/-");
				
                contenu += '<tr>';
				contenu += '<td><input type="hidden" name="dep[]" value="'+ tabDep[0]+'"/>' + tabDep[1] + '</td>';
                contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td><input type="hidden" name="code[]" value="'+ annuaire[i].code+'"/>' + annuaire[i].code + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeSer(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeSer.innerHTML = contenu;
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
					url: recherche_maladie_list,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".liste_maladie").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_maladie").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search1").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_maladie_100,
					data:"search="+$("#search1").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".liste_maladie").html('<tr><td colspan="4"><em>Aucune specialite trouver</em></td></tr>');
					}else{
						$(".liste_maladie").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>