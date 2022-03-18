
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>


<?php //$liste = $this->md_parametre->liste_antecedent_personnel_actifs(); ?>


<?php $liste = $this->md_smi->liste_vaccin_actifs(); ?>

<?php $NBVaccin = $this->md_smi->nb_vaccin_info()->nb; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-6 col-md-6 col-sm-12">
				<div class="card">
                    <div class="header">
                        <h2>Ajoutez des vaccins</h2>
                        
                    </div>
                    <div class="body table-responsive">
						<form id="form-liv">
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
											<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLiv"><i class="fa fa-plus"></i></a>
										</td>
									</tr>
								</thead>
							   
								<tbody id="tbody"></tbody>
							</table>
						</form>
						<a href="javascript:();" class="btn btn-success waves-effect addLiv" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
                    </div>
                </div>
			</div>
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>liste des antécédents personnels(<?php echo $NBVaccin; ?>)</h2>
                        <br><br><input type="text" name="search" id="search1" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
						<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
						
                    </div>
                    <div class="body table-responsive liste_source_info"> 
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
										<span class="champs<?php echo $l->liv_id ?>"><?php echo $l->liv_sLib; ?></span>
										<form id='form-edit-liv<?php echo $l->liv_id ?>'>
											<textarea class="cacher input<?php echo $l->liv_id ?>" style='width:100%' name='lib'><?php echo $l->liv_sLib; ?></textarea>
											<input type="hidden" value="<?php echo $l->liv_id ?>" name="id"/>
											<input type="hidden" value="<?php echo $l->liv_sLib ?>" name="nom"/>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->liv_id; ?>" class="editLIVFinal confirm<?php echo $l->liv_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->liv_id; ?>" class="editLIVAnnule annule<?php echo $l->liv_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->liv_id; ?>" class="editLIV clique<?php echo $l->liv_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer cet vaccin ?')" href="<?php echo site_url("parametre/supprimer_Vaccin/".$l->liv_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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
            <div class="modal-body text-center"> source(s) d'information(s) enregisté(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listeLiv = document.querySelector('#tbody');
        var addLiv = document.querySelector('#addLiv');
        var annuaire;
        annuaire = new Array();

        function removeLiv(index) {
            annuaire.splice(index,1);
            showListeLiv();	
        }

        function addDetailLiv() 
        {
            var lib 	            = document.getElementById('lib').value;
            if(lib == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                annuaire.push(contact);
                showListeLiv();	
				document.getElementById('lib').value="";
            }
        }

        addLiv.addEventListener('click', addDetailLiv);

        function showListeLiv() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeLiv(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeLiv.innerHTML = contenu;
			// alert(contenu);
        }
    
        </script>


<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>