<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $liste = $this->md_patient->liste_recouvrement_assuranceTous($ass,date("Y-m-d"),date("Y-m-d")); ?>
<?php $total = $this->md_patient->nb_recouvrement_assurance($ass,date("Y-m-d"),date("Y-m-d")); ?>



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Recherche</h2>
						
					</div>
					<div class="body">
						<form id="form-recouvrement-assureur">
							<div class="row clearfix">
								<div class="col-sm-5">
									<div class="form-group">
										Du<input type="text" name="premierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Au<input type="text" name="dernierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
										<input type="hidden" name="assureur" class=" form-control" value="<?php echo $ass;?>"/>
									</div>
								</div>
								
								<div class="col-sm-2">
								<br><br>
									<button type="submit" class="btn btn-raised bg-blue-grey" id="showAssureur">Valider</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <div class="row clearfix ">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Montant à recouvrer à l'assurance  </h2>
						(<a href="#" align="right" type="submit" class=" m-1" id="showRecouvrement">Imprimer</a>)
                    </div>
					
					<div class="Liste_recouvrement_assurance">
                    <div class="body table-responsive "> 
					
						<table id="example" class="table table-bordered table-striped table-hover">
						   
							<thead>
								<tr>
									<th>#</th>
									<th>Assureur</th>
									<th>Type d'assurance</th>
									<th>Patient</th>
									<th>Montant</th>
									<th>Date</th>
									<th>Statut</th>
									<th style="width:60px">Action</th>
								</tr>
							</thead>
							<?php  //var_dump($liste)?>
							<tbody>

								<?php foreach($liste AS $lr){ ?>
								<tr align="center">
									<td>
										<div class="switch">
											<label>
												<input type="checkbox" class="checkRECOU" checked name="id[]" rel="<?php echo $lr->fac_id; ?>" value="<?php echo $lr->fac_id; ?>">
												<span class="lever"></span>
											</label>
										</div>
										<input type="hidden" class="champs<?php echo $lr->fac_id;?>"  value="<?php echo $lr->fac_iMontantAss; ?>">
									</td>
									<td><?php echo $lr->ass_sLibelle;?></td>
									<td><?php echo $lr->tas_iTaux;?>%</td>
									<td><?php echo $lr->pat_sNom." ".$lr->pat_sPrenom;?></td>
									<td><?php echo number_format($lr->fac_iMontantAss,0,",",".");?> <small>Fcfa</small></td>
									<td><?php echo $this->md_config->affDateFrNum($lr->fac_dDatePaie);?></td>
									<td><?php if($lr->fac_iSituationAss == 0){echo "<i class='text-danger'>Facture non payée</i>";}else{echo "<i class='text-primary'>Facture payée</i> <i class='fa fa-check text-success' style='font-size:20px'></i>";}  ?></td>
									<td>	
										<?php if($lr->fac_iSituationAss == 0){ ?>
										<a onClick="return confirm('Êtes-vous sûr de pouvoir valider le paiement de l\'assureur ?')" href="<?php echo site_url("caisse/payeFactureAssurance/".$lr->fac_id); ?>" class="delete" title="annuler">Payé<br><i class="fa fa-check text-success" style="font-size:20px"></i></a>
										<?php } ?>
									</td>
								</tr>
								<?php } ?>
								<tr>
									<td colspan="8" align="right"><strong>Total:</strong> <span class="total"><?php echo $total->montant;?></span> FCFA</td>
								</tr>
							</tbody>
						</table>
                    </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>