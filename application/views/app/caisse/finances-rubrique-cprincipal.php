
<?php 
	include(dirname(__FILE__) . '/../includes/header.php');
	$fait = date("Y-m-d");
	$delai = NULL;
	$montant = $this->md_patient->montant_cprincipal($delai,$fait);
	$depose =$montant->paye;
	
	// $acte = $this->md_patient->montant_par_type_cprincipal($delai,$fait);
	// $rub = $this->md_patient->remise_parubrique($delai,$fait);
	$diminueencaisse = $this->md_patient->diminue_encaisse_total_parubrique($delai,$fait);
	$diminueencaissedujour = $this->md_patient->diminue_encaisse_total_parubrique_dujour();
	if(!is_null($diminueencaisse->diminueencaisse)){$resultat = $depose + $diminueencaisse->diminueencaisse;}else{$resultat = $depose;}
	if(!is_null($diminueencaissedujour->diminueencaissedujour)){$rep = $diminueencaissedujour->diminueencaissedujour;}else{$rep = 0;}
	
	$listerubactive = $this->md_patient->liste_rubrique_active(NULL, $fait); 
 ?>


	<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>FINANCES PAR RUBRIQUE</h2>
            <small class="text-muted"></small>
        </div>
		
		
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Statistiques de caisse</h2>
						<?php //var_dump($diminueencaisse->diminueencaisse);?>
					</div>
					<div class="body">
						<form id="stat-caissetypecp">
							<div class="row clearfix">
								<div class="col-sm-5">
									<div class="form-group">
										Du<input type="text" name="premierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Au<input type="text" name="dernierJour" class="datepicker form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								
								<div class="col-sm-2">
								<br><br>
									<button type="submit" class="btn btn-raised bg-blue-grey" id="parTypecp">Valider</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
        
        <div class="row clearfix" id="afficheMontanttypecp">
		
		    <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blue-grey">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL GÉNÉRAL</div>
                        <div class="number"><?php echo number_format($montant->montant,0,",","."); ?> <small>FCFA</small></div>
                    </div>
                </div>
            </div>	

			
		    <div class="col-lg-4 col-md-4 col-sm-6">
				<div class="info-box-4 hover-zoom-effect bg-green">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL ENCAISSÉ</div>
                        <div class="number"><?php echo number_format($resultat,0,",","."); ?> <small>FCFA</small></div>
                    </div>
                </div>
            </div>

			
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-red">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL REMISE</div>
                        <div class="number">
							<?php echo number_format($montant->perte + $montant->assurance ,0,",","."); ?> <small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>
		
		    <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body table-responsive"> 
					<div class="header">
						<h2>finances par rubrique du jour</h2>
						
					</div>
						<table id="" class="table table-bordered" >
						   
							<thead >
								<tr>
									<td align="center"><b>RUBRIQUE</b></td>
									<td align="center">
										<table id="" class="">
											<tbody>
												<tr>
													<td style="border:none" width="20%" align="center"><b>GROUPE D'ACTES</b></td>
													<td style="border:none" width="20%" align="center"><b>TOTAL GÉNÉRAL</b></td>
													<td style="border:none" width="20%" align="center"><b>REMISE</b></td>
													<td style="border:none" width="20%" align="center"><b>TOTAL ENCAISSÉ</b></td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</thead>
						   
							<tbody>
							<?php $tgle=0;$tremise=0; if(empty($listerubactive)){echo '<tr><td colspan="5"><em>Aucun mouvement enregistré</em></td></tr>';}else{ foreach($listerubactive AS $l){ ?>
								<tr>
									<td style="vertical-align:middle" align="center">
										<b><?php echo $l->rub_sLib; ?></b> 
									</td>									
									<td align="center">	
									<?php $rub = $this->md_patient->remise_parubrique($l->rub_id, $delai, $fait); ?>	
									<?php $total=0;$remise=0; foreach($rub AS $r){ ?>
										<table id="" class="table table-bordered table-striped table-hover" style="font-size:12px">							   
											<tbody>
												<tr>
													<td width="25%" align="center">
														<b><?php echo $r->tya_sLib; ?></b>
													</td>			
													<td width="25%" align="center">
														<b><?php echo number_format($r->total,0,",","."); ?></b>
													</td>	
													<td width="25%" align="center">
														<b><?php echo number_format($r->remise,0,",","."); ?></b>
													</td>													
													<td width="25%" align="center">
														<b><?php echo number_format(abs($r->total - $r->remise),0,",","."); ?></b>
													</td>												
												</tr>
											</tbody>
										</table>
									<?php $total+=$r->total;$remise+=$r->remise;} ?>
									<table id="" class="table table-bordered table-striped table-hover" style="font-size:12px">							   
											<tbody>
												<tr>
													<td width="25%" align="center">
														<b>SOUS TOTAL</b>
													</td>			
													<td width="25%" align="center">
														<b><?php echo number_format($total,0,",","."); ?></b>
													</td>	
													<td width="25%" align="center">
														<b><?php echo number_format($remise,0,",","."); ?></b>
													</td>													
													<td width="25%" align="center">
														<b><?php echo number_format(abs($total - $remise),0,",","."); ?></b>
													</td>												
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							<?php $tgle+=$total;$tremise+=$remise;}}  ?>
							</tbody>
							<tfoot>								
								<tr>
									<td align="right" colspan=""><b style="font-weight:900;text-decoration:underline"></b></td>
									<td align="center" colspan="">
										<table id="" class="table table-bordered table-striped table-hover" style="font-size:12px">							   
											<tbody>
												<tr style="font-weight:900;">
													<td width="25%" align="center">
														<b>TOTAL GÉNÉRAL</b>
													</td>			
													<td width="25%" align="center">
														<b><?php echo number_format($tgle,0,",","."); ?></b>
													</td>		
													<td width="25%" align="center">
														<b><?php echo number_format($tremise,0,",","."); ?></b>
													</td>
													<td width="25%" align="center">
														<b><?php echo number_format(($tgle - $tremise) + $rep,0,",","."); ?></b>
													</td>														
												</tr>
											</tbody>
										</table>
									</td>
								</tr>												
							</tfoot>
						</table>						
                    </div>
                </div>
            </div>
		
            
        </div>
        
	</div>

</section>




<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>