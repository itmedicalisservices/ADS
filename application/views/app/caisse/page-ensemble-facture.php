
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	$liste = $this->md_patient->liste_ensemble_facture();
?>


<section class="content">

    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Ensemble des factures</h2>
                    </div>
                    <div class="body table-responsive"> 
						<table id="example" class="table  table-hover" style="font-size:12px">
						   
							<thead>
								<tr align="center">
									<td>Patient</td>
									<td>Total</td>
									<td>Payé</td>
									<td>Date Opération</td>
									<td>N° Facture</td>
									<td class="text-center"><b>Effectuée par :</b></td>
								</tr>
							</thead>
						   
							<tbody>
							<?php $Total=0; ?>
							<?php $Total1=0; ?>
							<?php foreach($liste AS $l){ ?>
								<?php if(date("Y-m-d") >= $l->fac_dDateValAnnul){?>
									<?php $Total +=$l->fac_iMontant; ?>
									<?php $Total1 +=$l->fac_iMontantPaye; ?>
									<tr align="center">
										<td>
											<?php echo $l->pat_sNom; ?> <?php echo $l->pat_sPrenom; ?>
										</td>
										<td>
											<?php echo $l->fac_iMontant; ?> <small>FCFA</small>
										</td>
										<td>
											<?php echo $l->fac_iMontantPaye; ?> <small>FCFA</small>
										</td>
										<td>
											<?php echo $this->md_config->affDateFrNum($l->fac_dDatePaie); ?>
										</td>								
										<td>
											<?php echo $l->fac_sNumero; ?>
										</td>									
										<?php if($user->flt_sLib == 'Comptabilite' || $user->per_iTypeCompte == 26){?>									
										<td>
											<b><?php $pers = $this->md_personnel->recup_personnel($l->per_id); echo $pers->per_sNom.' '.$pers->per_sPrenom; ?></b>
										</td>
										<?php }?>
								
									</tr>
								<?php }?>
							<?php }?>
							</tbody>
							<tfoot>
								<tr>
									<th ><strong>Total :</strong></th>
									<th ><strong><?php echo $Total; ?> FCFA </strong></th>
									<th ><strong><?php echo $Total1; ?> FCFA </strong></th>
									<th > </th>
									<th ></th>
									<th ></th>
								</tr>
							</tfoot>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px; max-width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Ajoutez des nouvelles spécialités hospitalières</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-spe">
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="width:32%">Type personnel</th>
											<th style="width:32%">Domaine</th>
											<th style="width:32%">Spécialité</th>
											<th style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
										</tr>
										<tr>
											<td>
												<select id="typePer" style="width:100%;padding-bottom:5px;padding-top:5px">
													<option value="">----- Choisissez le type de personnel * -----</option>
													<?php foreach($listeType AS $d){ ?>
													<option value="<?php echo $d->tpe_id; ?>-/-<?php echo $d->tpe_sLibelle; ?>"><?php echo $d->tpe_sLibelle; ?></option>
													<?php } ?>
												</select>
											</td>
											<td>
												<select id="domaine" style="width:100%;padding-bottom:5px;padding-top:5px">
													<option value="">----- Choisissez le domaine * -----</option>
													
												</select>
											</td>
											<td>
												<input type="text" id="lib" style="width:100%" placeholder="Saisissez le nom de la spécialté dans ce champs"/>
												
											</td>
											
											<td class="text-center">
												<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addSpe"><i class="fa fa-plus"></i></a>
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
                <a href="javascript:();" class="btn btn-success waves-effect addSpe" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
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
            <div class="modal-body text-center"> Spécialité(s) enregistée(s) avec succès <br><i style="font-size:40px" class="fa fa-hospital-o"></i></div>
            <div class="refresh"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        'use strict';
		
        var listeUni = document.querySelector('#tbody');
        var addSpe = document.querySelector('#addSpe');
        var annuaire;
        annuaire = new Array();

        function removeSpe(index) {
            annuaire.splice(index,1);
            showListeSpe();	
        }

        function addDetailSpe() 
        {
            var lib 	            = document.getElementById('lib').value;
            var domaine 	            = document.getElementById('domaine').value;
            var typePer 	            = document.getElementById('typePer').value;
			
            if(lib == '' || typePer == ''|| domaine == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contact = new Object();
                contact.lib	        = lib;
                contact.domaine	    = domaine;
                contact.typePer	        = typePer;
                annuaire.push(contact);
                showListeSpe();	
				document.getElementById('lib').value="";
            }
        }

        addSpe.addEventListener('click', addDetailSpe);

        function showListeSpe() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				
				var tabType = annuaire[i].typePer.split("-/-");
				var tabDom = annuaire[i].domaine.split("-/-");
				
                contenu += '<tr>';
                contenu += '<td>' + tabType[1] + '</td>';
                contenu += '<td><input type="hidden" name="pst[]" value="'+ tabDom[0]+'"/>' + tabDom[1] + '</td>';
				 contenu += '<td><input type="hidden" name="lib[]" value="'+ annuaire[i].lib+'"/>' + annuaire[i].lib + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeSpe(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeUni.innerHTML = contenu;
			// alert(contenu);
        }
    
        </script>


<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>