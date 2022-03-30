
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>


<?php //$liste = $this->md_parametre->liste_antecedent_personnel_actifs(); ?>


<?php $listeCourbe = $this->md_parametre->recup_courbe(1); ?>

<?php $NBVaccin = $this->md_smi->nb_vaccin_info()->nb; ?>
<?php $NBVaccin = $this->md_smi->nb_vaccin_info()->nb; ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Courbe de croissance</h2>
                        <br><br>
						<button type="button" class="btn btn-raised bg-blue-grey pull-right" style="color:white; font-size:13px" data-toggle="modal" data-target="#largeModalMax"><i class="fa fa-plus"></i>  Ajouter</button>
						
                    </div>
                    <div class="body table-responsive liste_source_info"> 
						<table class="table table-bordered table-striped table-hover " >
						   
							<thead>
								<tr>
									<th>Mois</th>
									<th>Poids maximal</th>
									<th>poids miimal</th>
									<th style="width:10px">Actions</th>
								</tr>
							</thead>	
						   
							<tbody class="">
							<?php foreach($listeCourbe AS $l){ ?>
								<tr>
									<td>
										<span ><?=$l->cou_iMois;?></span>
									</td>
									<td>
										
										<span class="champs_poidsmax<?php echo $l->cou_id ?>"><?=$l->cou_fPoidsMax;?> Kg</span>
										<form id='form-edit-poidsmax<?php echo $l->cou_id ?>'>
											<textarea class="cacher input_poidsmax<?php echo $l->cou_id ?>" style='width:100%' name='poidsmax'><?php echo $l->cou_fPoidsMax; ?></textarea>
											<input type="hidden" value="<?php echo $l->cou_id ?>" name="id"/>
										</form>
									</td>
									<td>
										
										<span class="champs_poidsmin<?php echo $l->cou_id ?>"><?=$l->cou_fPoidsMin;?> Kg</span>
										<form id='form-edit-poidsmin<?php echo $l->cou_id ?>'>
											<textarea class="cacher input_poidsmin<?php echo $l->cou_id ?>" style='width:100%' name='poidsmin'><?php echo $l->cou_fPoidsMin; ?></textarea>
										</form>
									</td>
									<td class="text-center">
										<a href="javascript:();" rel="<?php echo $l->cou_id; ?>" class="editCourbeFinal confirm_cou<?php echo $l->cou_id; ?> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
										<a href="javascript:();" rel="<?php echo $l->cou_id; ?>" class="editCourbeAnnule annule_cou<?php echo $l->cou_id; ?> text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
										<a href="javascript:();" rel="<?php echo $l->cou_id; ?>" class="editCourbe clique_cou<?php echo $l->cou_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a>
										<a onClick="return confirm('Êtes-vous sûr de supprimer cette valeur ?')" href="<?php echo site_url("parametre/supprimer_element_courbe/".$l->cou_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
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



<div class="modal fade" id="largeModalMax" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Courbe de croissance</h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="col-sm-12 retour-Courbe"></div>
					<div class="card">
						<form id="form-Courbe">
							<div class="body table-responsive" >
								<table id="" class="table table-bordered ">
									<thead>
										<tr>
											<th>Mois</th>
											<th>Poids maximal</th>
											<th>Poids minimal</th>
											<th style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
										</tr>
										<tr>
											<td>
												<select style="border:1px solid" class="form-control" id="moismax">
													<option value="">---Selectionnez---</option>
													<option value="1">1<sup>ere</sup> Mois</option>
													<option value="2">2<sup>éme</sup> Mois</option>
													<option value="3">3<sup>éme</sup> Mois</option>
													<option value="4">4<sup>éme</sup> Mois</option>
													<option value="5">5<sup>éme</sup> Mois</option>
													<option value="6">6<sup>éme</sup> Mois</option>
													<option value="7">7<sup>éme</sup> Mois</option>
													<option value="8">8<sup>éme</sup> Mois</option>
													<option value="9">9<sup>éme</sup> Mois</option>
													<option value="10">10<sup>éme</sup> Mois</option>
													<option value="11">11<sup>éme</sup> Mois</option>
													<option value="12">12<sup>éme</sup> Mois</option>
													<option value="13">13<sup>éme</sup> Mois</option>
													<option value="14">14<sup>éme</sup> Mois</option>
													<option value="15">15<sup>éme</sup> Mois</option>
													<option value="16">16<sup>éme</sup> Mois</option>
													<option value="17">17<sup>éme</sup> Mois</option>
													<option value="18">18<sup>éme</sup> Mois</option>
													<option value="19">19<sup>éme</sup> Mois</option>
													<option value="20">20<sup>éme</sup> Mois</option>
													<option value="21">21<sup>éme</sup> Mois</option>
													<option value="22">22<sup>éme</sup> Mois</option>
													<option value="23">23<sup>éme</sup> Mois</option>
													<option value="24">24<sup>éme</sup> Mois</option>
													<option value="25">25<sup>éme</sup> Mois</option>
													<option value="26">26<sup>éme</sup> Mois</option>
													<option value="27">27<sup>éme</sup> Mois</option>
													<option value="28">28<sup>éme</sup> Mois</option>
													<option value="29">29<sup>éme</sup> Mois</option>
													<option value="30">30<sup>éme</sup> Mois</option>
													<option value="31">31<sup>éme</sup> Mois</option>
													<option value="32">32<sup>éme</sup> Mois</option>
													<option value="33">33<sup>éme</sup> Mois</option>
													<option value="34">34<sup>éme</sup> Mois</option>
													<option value="35">35<sup>éme</sup> Mois</option>
													<option value="36">36<sup>éme</sup> Mois</option>
												</select>
											</td>
											
											
											<td>
												<input type="text" id="poidsmax" style="border:1px solid" class="form-control" placeholder="Saisissez dans ce champs"/>
											</td>
											<td>
												<input type="text" id="poidsmin" style="border:1px solid" class="form-control" placeholder="Saisissez dans ce champs"/>
											</td>
											
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="Btnmax"><i class="fa fa-plus"></i></a>
											</td>
										</tr>
									</thead>
								   
									<tbody class="listeCourbe">
										
									</tbody>
								</table>
							</div>	
							<button type="button" class="btn btn-raised bg-blue-grey" id="addCourbe">Enregistrer</button>
						</form>
					</div>
				</div>
			
			</div>
          
        </div>
    </div>
</div>




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
		
        var listeCourbe = document.querySelector('.listeCourbe');
        var addElement = document.querySelector('#Btnmax');
        var annuaire;
        annuaire = new Array();

        function removeCourbe(index) {
            annuaire.splice(index,1);
            showListeCourbe();	
        }

        function addDetailCourbe() 
        {
			
            var mois 	            = document.getElementById('moismax').value;
            var poidsMax 	            = document.getElementById('poidsmax').value;
            var poidsMin	            = document.getElementById('poidsmin').value;
            if(mois == '' || poidsMax == '' || poidsMin == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.mois	        = mois;
                contact.poidsMax	        = poidsMax;
                contact.poidsMin	        = poidsMin;
                annuaire.push(contact);
                showListeCourbe();	
				document.getElementById('moismax').value="";
				document.getElementById('poidsmax').value="";
				document.getElementById('poidsmin').value="";
            }
        }

        addElement.addEventListener('click', addDetailCourbe);

        function showListeCourbe() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
              
            for(var i = 0; i < tailleTableau; i++) {
				
                contenu += '<tr>';
				if(annuaire[i].mois == 1 ){
					contenu += '<td><input type="hidden" name="mois[]" value="'+ annuaire[i].mois+'"/>' + annuaire[i].mois + '<sup>er</sup></td>';
				}else{
					contenu += '<td><input type="hidden" name="mois[]" value="'+ annuaire[i].mois+'"/>' + annuaire[i].mois + '<sup>éme</sup></td>';
				}
                contenu += '<td><input type="hidden" name="poidsMax[]" value="'+ annuaire[i].poidsMax+'"/>' + annuaire[i].poidsMax + ' Kg</td>';
                contenu += '<td><input type="hidden" name="poidsMin[]" value="'+ annuaire[i].poidsMin+'"/>' + annuaire[i].poidsMin + ' Kg</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeCourbe(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
			
            }
			
            listeCourbe.innerHTML = contenu;
			
        }
    
</script>
<!--<script type="text/javascript">
        'use strict';
		
        var listeMin = document.querySelector('.listeMin');
        var addMin = document.querySelector('#Btnmin');
        var annuaire;
        annuaire = new Array();

        function removeMin(index) {
            annuaire.splice(index,1);
            showListeMin();	
        }

        function addDetailMin() 
        {
			
            var mois 	            = document.getElementById('moismin').value;
            var poids 	            = document.getElementById('poidsmin').value;
            if(mois == '' || poids == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.mois	        = mois;
                contact.poids	        = poids;
                annuaire.push(contact);
                showListeMin();	
				document.getElementById('moisBtnmin').value="";
				document.getElementById('poidsBtnmin').value="";
            }
        }

        addMin.addEventListener('click', addDetailMin);

        function showListeMin() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
              
            for(var i = 0; i < tailleTableau; i++) {
				
                contenu += '<tr>';
				if(annuaire[i].mois == 1 ){
                contenu += '<td><input type="hidden" name="mois[]" value="'+ annuaire[i].mois+'"/>' + annuaire[i].mois + '<sup>er</sup></td>';
				}else{
					contenu += '<td><input type="hidden" name="mois[]" value="'+ annuaire[i].mois+'"/>' + annuaire[i].mois + '<sup>éme</sup></td>';
				}
                contenu += '<td><input type="hidden" name="poids[]" value="'+ annuaire[i].poids+'"/>' + annuaire[i].poids + ' Kg</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeMin(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
			
            }
			
            listeMin.innerHTML = contenu;
			
        }
    
</script>-->


<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>