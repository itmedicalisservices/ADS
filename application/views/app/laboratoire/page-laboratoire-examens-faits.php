<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	
	$listeEncours = $this->md_patient->liste_acm_laboratoire(date("Y-m-d H:i:s"),$user->ser_id);
	$listeTube = $this->md_patient->liste_rapport_laboratoire($user->ser_id);

 ?>
<section class="content home">
    <div class="container-fluid">
       
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Prélèvements laboratoires</h2>
							</div>
							<div class="body table-responsive">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane in active" id="profile"> <b>Effectuer un rapport</b>
										<table id="example1" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Patient</th>
													<th>Acte labo</th>
													<th>Prescripteur</th>
													<th>Prélévement</th>
													<th>Impression</th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($listeTube AS $le){ ?>
												<tr>
													<td><?php echo '<b>'.$le->pat_sPrenom.' '.$le->pat_sNom .'<br></b> ('.$le->pat_sMatricule.')'; ?></td>
													<td><?php echo $le->lac_sLibelle ; ?></td>
													<td class="text-center" style="font-size:13px">
														<?php if(is_null($le->per_sAvatar)){ ?>
															<i>La prescription est externe de l'hôpitale</i><br><br>
															<?php echo $le->ala_sTitre." ".$le->ala_sNom." ".$le->ala_sPrenom; ?>
															<br><br>
															<?php if(!is_null($le->ala_sPrescription)){ ?><a href="<?php echo base_url($le->ala_sPrescription); ?>" target="_blank"><i class="fa fa-download"></i> Télécharger</a>
															<?php }}else{echo "<b>".$le->per_sNom.'</b> '.$le->per_sPrenom;} ?>
													</td>
													<td class="">
														<table>
															<tr>
																<th>Elément analyse</th>
																<th>Type examen</th>
																<th>Numéro</th>
																<th>Code à barre</th>
																<th>Valeur</th>
															</tr>
															<?php $list = $this->md_laboratoire->liste_element_exament_tube($le->ala_id); foreach($list AS $l){?>
															<?php if($l->tan_iSta==3){?>
																<tr>
																	<td><?=$l->ela_sLibelle;?></td>
																	<td><?=$l->tex_sLibelle;?></td>
																	<td><?=$l->tan_sNum;?></td>
																	<td><img src="<?php echo base_url($l->tan_sImg) ;?>" style="width:50%"/></td>
																	<td><?php echo $l->tan_iValeur;?></td>
																</tr>
															<?php };?>
															<?php };?>
														</table>
													</td>
													<td><a title="imprimer le rapport" rel="" id="" class=""  href="<?php echo site_url('impression/rapportLabo/'.$le->ala_id);?>"><i class="fa fa-print" style="font-size:30px"></i></a></td>
												</tr>
											<?php } ?>
											</tbody>
											
										</table>
									</div>
								</div>
								
							</div>
						</div>
                        
                    </div>
					
                </div>
                          
            </div>
                 
        </div>
    </div>
</section>
<!-- Large Size -->
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>
