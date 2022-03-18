
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
	$pre = $this->md_parametre->recup_medecin($id);
	
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
						<h2>Quote part par medecins</h2>
						
					</div>
					<div class="body">
						<form id="stat-MedecincActe">
							<div class="row clearfix">
								<div class="col-sm-5">
									<div class="form-group">
										Du<input type="text" name="premierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Au<input type="text" name="dernierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
										<input type="hidden" name="id" value="<?php echo $pre->per_id;?>">
									</div>
								</div>
								
								<div class="col-sm-2">
								<br><br>
									<button type="submit" class="btn btn-raised bg-blue-grey" id="MedecincActe">Valider</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div >
       
			<div class="row clearfix" id="afficheMedecincActe">
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
				<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
					<div class="card">
						<div class="header">
							<h2><?php echo $pre->per_sTitre?> <?php echo $pre->per_sNom.' '.$pre->per_sPrenom; ?></h2>
							(<a href="<?php echo site_url("Impression/quotes_parts/".$pre->per_id."--".$pre->tqp_iPourcentage."--".date("Y-m-d")."--".date("Y-m-d"));?>" align="right" type="submit" class=" m-1">Imprimer</a>)
						</div>
						<div class="body">
							<div class="table-responsive">
								<table id="example" class="table table-hover">
									<thead>
										<tr>
											<th>Prescription</th>
											<th>Date</th>
											<th>Montant</th>
											<th>Quote part(%)</th>
										</tr>
									</thead>
									<tbody>
										
										<?php //$montant = $this->md_patient->solde_prescripteur_actifs($a->pre_id,date("Y-m-d"),date("Y-m-d")); ?>
										<?php $montant = $this->md_patient->solde_qoute_part_imagerie_actifs($pre->per_id,$pre->tqp_iPourcentage,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										<?php $montant1 = $this->md_patient->solde_qoute_part_laboratoire_actifs($pre->per_id,$pre->tqp_iPourcentage,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										<?php $montant2 = $this->md_patient->solde_qoute_part_reeducation_actifs($pre->per_id,$pre->tqp_iPourcentage,date("Y-m-d"),date("Y-m-d")); ?>
										<?php $montant3 = $this->md_patient->solde_qoute_part_exploration_actifs($pre->per_id,$pre->tqp_iPourcentage,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										<?php //var_dump($montant,$montant1,$montant2,$montant3); ?>
										<?php $liste = $this->md_patient->liste_prescription_imagerie($pre->per_id,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										<?php $liste1 = $this->md_patient->liste_prescription_laboratoire($pre->per_id,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										<?php $liste2 = $this->md_patient->liste_prescription_reeducation($pre->per_id,date("Y-m-d"),date("Y-m-d")); ?>
										<?php $liste3 = $this->md_patient->liste_prescription_exploration($pre->per_id,date("Y-m-d 00:00:00"),date("Y-m-d 23:59:59")); ?>
										
										<?php //var_dump($liste,$liste1,$liste2,$liste3); ?>
										<?php $Total = 0; ?>
										<?php if( count($liste) > 0 OR  count($liste1) > 0 OR  count($liste2) > 0 OR  count($liste3) > 0){ ?>
										
										<?php foreach($liste as $l){ ?>
										<?php $Total += $l->lac_iCout; ?>
										<tr>
											<td><?php echo $l->lac_sLibelle?></td>
											<td><?php echo $this->md_config->dateTimeEN2FR($l->img_dDate); ?></td>
											<td><?php echo $l->lac_iCout; ?></td>
											<td><?php echo $pre->tqp_iPourcentage; ?></td>
										</tr>
										<?php } ?>
										
										<?php foreach($liste1 as $l1){ ?>
										<?php $Total += $l1->lac_iCout; ?>
										<tr>
											<td><?php echo $l1->lac_sLibelle?></td>
											<td><?php echo $this->md_config->dateTimeEN2FR($l1->lab_dDate); ?></td>
											<td><?php echo $l1->lac_iCout; ?></td>
											<td><?php echo $pre->tqp_iPourcentage; ?></td>
										</tr>
										<?php } ?>
										
										<?php foreach($liste2 as $l2){ ?>
										<?php $Total += $l2->lac_iCout; ?>
										<tr>
											<td><?php echo $l2->lac_sLibelle?></td>
											<td><?php echo $this->md_config->dateEN2FR($l2->ree_dDate); ?></td>
											<td><?php echo $l2->lac_iCout; ?></td>
											<td><?php echo $pre->tqp_iPourcentage; ?></td>
										</tr>
										<?php } ?>
										
										<?php foreach($liste3 as $l3){ ?>
										<?php $Total += $l3->lac_iCout; ?>
										<tr>
											<td><?php echo $l3->lac_sLibelle?></td>
											<td><?php echo $this->md_config->dateTimeEN2FR($l3->efc_dDate); ?></td>
											<td><?php echo $l3->lac_iCout; ?></td>
											<td><?php echo $pre->tqp_iPourcentage; ?></td>
										</tr>
										<?php } ?>
										
										<?php }else{ ?>
											<tr>
												<td colspan="4">
													<i>Auccune prescription</i>
												</td>
											</tr>
										<?php } ?>
									</tbody>
									<?php if( count($liste) > 0 OR  count($liste1) > 0 OR  count($liste2) > 0 OR  count($liste3) > 0){ ?>
									<tfoot>
										<tr>
											<th ></th>
											<th ></th>
											<th >Total :</th>
											<th><?php echo $Total; ?> FCFA</th>
										</tr>
										<tr>
											<th ></th>
											<th ></th>
											<th >Ristourne :</th>
											<th><?php echo number_format($montant->montant+$montant1->montant+$montant2->montant+$montant3->montant,0,",","."); ?> FCFA</th>
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