
<?php 
	include(dirname(__FILE__) . '/../includes/header.php');
	/*$fait = date("Y-m-d");
	$delai = NULL;
	$montant = $this->md_patient->montant($delai,$fait);
	$montant_assurance = $this->md_patient->montant_assurance($delai,$fait,0);
	$mtAssurance = 0;
	foreach($montant_assurance AS $as){
		$mtAssurance += $as->mtAssurance;
	}
	$montant_patient = $this->md_patient->montant_patient($delai,$fait);
	$montant_service = $this->md_patient->montant_service($delai,$fait);
	$depose =$montant->paye;
	
	$acte = $this->md_patient->montant_par_medecin($delai,$fait);*/
	$pre = $this->md_parametre->recup_prescripteur_actif($id);
	
 ?>
<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>Résultats Financiers</h2>
            <small class="text-muted"></small>
        </div>
		
		
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Ristourne par médecin Prescripteur</h2>
						
					</div>
					<div class="body">
						<form id="stat-PrescActe">
							<div class="row clearfix">
								<div class="col-sm-5">
									<div class="form-group">
										Du<input type="text" name="premierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Au<input type="text" name="dernierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
										<input type="hidden" name="id" value="<?php echo $id; ?>">
									</div>
								</div>
								
								<div class="col-sm-2">
								<br><br>
									<button type="submit" class="btn btn-raised bg-blue-grey" id="PrescActe">Valider</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
       
		<div>
		
			<div class="row clearfix"  id="affichePrescActe">
			 <!--   <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="info-box-4 hover-zoom-effect bg-blue-grey">
						<div class="icon"> </div>
						<div class="content">
							<div class="text">Montant encaissé</div>
							<div class="number"><?php //echo number_format($depose,0,",","."); ?> <small>FCFA</small></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="info-box-4 hover-zoom-effect bg-green">
						<div class="icon"> </div>
						<div class="content">
							<div class="icon"><a href="javascript:();" class="clic-assurance"> <i class="fa fa-arrow-right"></i></a> </div>
							<div class="text">Montant des assurances</div>
							<div class="number">
								<?php //echo number_format($mtAssurance,0,",","."); ?> <small>FCFA</small>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="info-box-4 hover-zoom-effect bg-red">
						<div class="icon"> </div>
						<div class="content">
							<div class="text">Pertes (Réduction)</div>
							<div class="number">
								<?php //echo number_format($montant->perte ,0,",","."); ?> <small>FCFA</small>
							</div>
						</div>
					</div>
				</div>
				
				 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="info-box-4 hover-zoom-effect bg-blush">
						<div class="icon"><a href="<?php //echo  site_url("facture/impaye"); ?>"> <i class="fa fa-arrow-right"></i></a> </div>
						<div class="content">
							<div class="text">Nombre de factures impayés</div>
							<div class="number"><?php //echo count($this->md_patient->liste_facture_impaye()); ?></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="info-box-4 hover-zoom-effect bg-blush">
						<div class="icon"> </div>
						<div class="content">
							<div class="icon"><a href="javascript:();" class="clic-patient"> <i class="fa fa-arrow-right"></i></a> </div>
							<div class="text">Montant à recouvrir chez les patients</div>
							<div class="number">
								<?php //echo number_format($montant->reste,0,",","."); ?> <small>FCFA</small>
							</div>
						</div>
					</div>
				</div>
				-->
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2><?php echo $pre->pre_sTitre; ?> <?php echo $pre->pre_sNom.' '.$pre->pre_sPrenom; ?></h2>
							(<a href="<?php echo site_url("Impression/ristourne/".$pre->pre_id."--".date("Y-m-d")."--".date("Y-m-d"));?>" align="right" type="submit" class=" m-1">Imprimer</a>)
						</div>
						<div class="body">
							<div class="table-responsive">
								<table id="example" class="table table-hover">
									<thead>
										<tr>
											<th>Prescription</th>
											<th>Date</th>
											<th>Montant</th>
											<th>Ristourne(%)</th>
										</tr>
									</thead>
									<tbody>
										
										<?php $montant = $this->md_patient->solde_prescripteur_actifs($pre->pre_id,date("Y-m-d"),date("Y-m-d")); ?>
										<?php $liste = $this->md_patient->liste_prescriptions($pre->pre_id,date("Y-m-d"),date("Y-m-d")); ?>
										
										<?php $montant_presc=0; ?>
										<?php if(count($liste) > 0){ ?>
										<?php foreach($liste as $l){ ?>
										<?php $montant_presc +=$l->fac_iMontant; ?>
										<tr>
											
											<td><?php echo $l->lac_sLibelle; ?></td>
											<td><?php echo $this->md_config->dateEN2FR($l->fac_dDatePaie); ?></td>
											<td><?php echo $l->fac_iMontant; ?></td>
											<th><?php echo $l->pre_iPourcentage; ?></th>
										</tr>
										<?php } ?>
										
										<?php }else{ ?>
										<tr>
											<td colspan="4"><i>Accune prescription</i></td>
										</tr>
										<?php } ?>
									</tbody>
									<?php if(count($liste) > 0){ ?>
									<tfoot>
										<tr>
											<th ></th>
											<th ></th>
											<th >Total :</th>
											<th><?php echo $montant_presc; ?> FCFA</th>
										</tr>
										<tr>
											<th ></th>
											<th ></th>
											<th >Ristourne :</th>
											<th><?php echo number_format($montant->montant,0,",","."); ?> FCFA</th>
										</tr>
									</tfoot>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
        
	</div>

</section>


<!-- Large Size -->
<div class="modal fade" id="modalAssurance" tabindex="-1" role="dialog">
	<div class="modal-dialog default-modals" role="document" style="margin-top:20px;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="largeModalLabel"></h4>
			</div>
			<div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Voir s'il y a des montants à recouvrir aux assurances</h2>
							
						</div>
						<div class="body table-responsive" id="afficheMontantAss">
							<div class="row">
								<?php foreach($montant_assurance AS $m){ ?>
								<div class="col-md-10"><?php echo $m->ass_sLibelle; ?><span class="pull-right"><?php echo number_format($m->mtAssurance,0,",","."); ?> <small>FCFA</small></span></div>
								<div class="col-md-2"><a href="<?php echo site_url("caisse/recouvrementAssurance/".$m->ass_id); ?>"><i class="fa fa-arrow-right"></i></a></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<!-- Large Size -->
<div class="modal fade" id="clic-patient" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document" style="margin-top:20px;">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="largeModalLabel"></h4>
			</div>
			<div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Montant à recouvrir chez les clients</h2>
							
						</div>
						<div class="body table-responsive" id="afficheMontantPat">
							<div class="row">
								<?php foreach($montant_patient AS $m){ ?>
								<div class="col-md-5"><?php echo $m->pat_sNom." ".$m->pat_sPrenom; ?></div>
								<div class="col-md-6">(<?php echo $m->pat_sMatricule ?>)<span class="pull-right"><?php echo number_format($m->dette,0,",","."); ?> <small>FCFA</small></span></div>
								<div class="col-md-1"><a href="<?php echo site_url("caisse/recouvrementPatient/".$m->pat_id); ?>"><i class="fa fa-arrow-right"></i></a></div>
								<hr>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>