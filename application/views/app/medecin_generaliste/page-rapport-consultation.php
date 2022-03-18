
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $acm = $this->md_patient->acm_patient($acm_id); ?>
<?php $patient = $this->md_patient->recup_patient($acm->pat_id); ?>
<?php $personnel = $this->md_personnel->recup_personnel($acm->per_id); ?>
<?php $constante = $this->md_patient->constante($acm_id); ?>
<?php $information = $this->md_patient->information($acm->pat_id); ?>
<?php $ListeConst = $this->md_patient->liste_constante($acm_id); ?>
<?php $consultation = $this->md_patient->consultation($acm_id); ?>
<?php $liste = $this->md_patient-> sejour_acm($acm_id); ?>
<?php $listeMed = $this->md_pharmacie->liste_medicament(); ?>
<?php $listeUnite = $this->md_parametre->liste_unites_actifs(); ?>
<?php $listeMaladie = $this->md_patient->liste_maladie_actifs(); ?>
<?php $listeActeLabo = $this->md_parametre->liste_acts_laboratoires_actifs(); ?>
<?php $patDeces = $this->md_patient->patient_decede($acm->pat_id); ?>
<?php $patHosp = $this->md_patient->patient_hospitalise($acm->pat_id); ?>


<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Consultation sur l'acte médical : <?php echo $acm->lac_sLibelle; ?></h2>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="<?php echo base_url($patient->pat_sAvatar);?>" class="img-fluid" alt="">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>À PROPOS DU PATIENT</h2>
                    </div>
                    <div class="body">
						<?php if($patDeces){ ?>
                        <strong class="text-danger">PATIENT DÉCÈDÉ</strong>
                        <p>le <?php echo $this->md_config->affDateFrNum($patDeces->dec_dDateDeces)." à ".$patDeces->dec_tHeureDeces; ?></p>
						
						<strong class="text-danger">CAUSE DE LA MORT</strong>
                        <p><?php echo $patDeces->dec_sCause; ?> en <?php echo $patDeces->lac_sLibelle; ?></p>
						<?php } ?>
						<strong>Code patient</strong>
                        <p><?php echo $patient->pat_sMatricule;?></p>
						<strong>Nom(s) et prénom(s)</strong>
                        <p><?php echo $patient->pat_sCivilite;?> <?php echo $patient->pat_sNom;?> <?php echo $patient->pat_sPrenom;?></p>
                        <strong>Âge</strong>
                        <p><?php $ageAnnee= $this->md_config->ageAnnee($patient->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($patient->pat_dDateNaiss)." mois";} ?></p>
						<strong>Genre</strong>
                        <p><?php if($patient->pat_sSexe=="H"){echo "Homme";}else{echo "Femme";}?></p>
						<strong>Profession</strong>
                        <p><?php echo $patient->pat_sProfession;?></p>
                        <strong>Situation familiale</strong>
                        <p><?php echo $patient->pat_sSituationMat	;?></p>
						<?php if(!is_null($patient->pat_sTel)){?>
                        <strong>Téléphone</strong>
                        <p><?php echo $patient->pat_sTel;?></p>
						<?php } ?>
						<?php if(!is_null($patient->pat_sAdresse)){?>
                        <strong>Adresse</strong>
                        <address><?php echo $patient->pat_sAdresse;?></address>
						<?php } ?>
						 <hr>
						<strong>Date d'enregistrement</strong>
                        <p><?php echo $this->md_config->affDateTimeFr($patient->pat_dDateEnreg);?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
						
						<div class="row clearfix">
							<?php if(!is_null($acm->per_id)){ ?>
						   <div class="col-lg-5 col-md-5 col-sm-12">
								<strong>Médecin traitant</strong>
								<p><?php echo $personnel->per_sTitre.' '.$personnel->per_sPrenom.' '.$personnel->per_sNom;?></p>
								<!--<p><img src="<?php //echo base_url($personnel->per_sAvatar);?>" class="img-fluid" width="150" alt="">  </p>	-->
								
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<strong>Spécialité</strong>
								<p><?php echo $personnel->spt_sLibelle;?></p>	
								
							</div>
							<?php } ?>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<?php if($patDeces){ ?>
								<img src="<?php echo base_url("assets/images/deces.jpg");?>" class="img-fluid"/>
								<?php } ?>
								<?php if($patHosp){ ?>
								<img src="<?php echo base_url("assets/images/hospitalise.jpg");?>" class="img-fluid"/>
								<?php } ?>
							</div>
							
						</div>
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
							
							<a href="javascript:;<?php echo site_url("impression/dossier_medical_passage/".$patient->pat_id); ?>" class="btn btn-raised bg-blue-grey" style="color:white; font-size:13px"><i class="fa fa-print"></i> Imprimer le dossier médical</a>	
							<div role="tabpanel" class="tab-pane in active" id="rapport">                              
							
								<div class="wrap-reset" style="margin-top:45px">
									
									<div class="table-responsive">
										
										<?php if(empty($liste)){echo "<span class='text-danger'>Aucune action n'a été faite sur les séjours de ce patient</span>";}else{?>
										
										<table class="table table-bordered table-striped table-hover">
										   
											<thead>
												<tr>
													<th>Date de séjour</th>
													<th>Opérations faites</th>
													<th style="width:75px">Résultat</th>
												</tr>
											</thead>
												<?php 
													foreach($liste AS $l){ 
													$info_conjoint_sejour = $this->md_smi->recup_conjoint_sejour($l->sea_id);
													$gestation_sejour = $this->md_smi->recup_info_gestation_sejour($l->sea_id);
													$intero_sejour = $this->md_smi->recup_info_interogatoire_sejour($l->sea_id);
													$premier_sejour = $this->md_smi->recup_info_premiere_examen_sejour($l->sea_id);
													$facteur_sejour = $this->md_smi->recup_info_facteur_de_risque_sejour($l->sea_id);
													$planning_sejour = $this->md_smi->recup_planning_familliale_sejour($l->sea_id);
													$antecedents_sejour = $this->md_smi->recup_antecedants_obstetricaux_sejour($l->sea_id);
													$source_sejour = $this->md_smi->recup_source_sejour($l->sea_id);
													$suivi_sejour = $this->md_smi->recup_suivi_femme_sejour($l->sea_id);
													$vaccination_sejour = $this->md_smi->recup_vaccination_femme_sejour($l->sea_id);
													
													
													$info_Nais_sejour = $this->md_smi->recup_Info_Nais_sejour($l->sea_id);
													$observations_sejour = $this->md_smi->recup_Observations_sejour($l->sea_id);
													$vaccination_sejour = $this->md_smi->recup_VaccinationEnfant_sejour($l->sea_id);
															
													$constante_sejour = $this->md_patient->constante_sejour($l->sea_id);
													$consultation_sejour = $this->md_patient->consultation_sejour($l->sea_id);
													$ordonnance_sejour = $this->md_patient->ordonnance_sejour($l->sea_id);
													$laboratoire_sejour = $this->md_patient->laboratoire_sejour($l->sea_id);
													$soins_infirmiers_sejour = $this->md_patient->soins_infirmiers_sejour($l->sea_id);
													$imagerie = $this->md_patient->imagerie_sejour($l->sea_id);
													$exploration = $this->md_patient->exploration_sejour($l->sea_id);
													$hospitalisation_sejour = $this->md_patient->hospitalisation_sejour($l->sea_id);
													$reeducation = $this->md_patient->reeducation_sejour($l->sea_id);
													$nouveau = $this->md_patient->nouveau_sejour($l->sea_id);
													$deces = $this->md_patient->cas_deces($l->sea_id);
													$diagnostic = $this->md_patient->diagnostic($l->sea_id);
												?>
												<tr>
													<td>Le <?php echo $this->md_config->affDateFrNum($l->sea_dDate);?> <?php echo $acm->acm_id;?></td>
													<td colspan="2">
														<table style="width:100%;padding:0">
														
															<?php if($info_Nais_sejour){ ?>
															<tr>
																<td>Information de naissance</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info info_Nais_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($observations_sejour){ ?>
															<tr>
																<td>Observations cliniques</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info observation_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($vaccination_sejour){ ?>
															<tr>
																<td>Vaccination</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info vaccinationE_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															<?php if($info_conjoint_sejour){ ?>
															<tr>
																<td>Information du conjoint</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info conjoint_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($gestation_sejour){ ?>
															<tr>
																<td>Gestation antérieure</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info gestation_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($intero_sejour){ ?>
															<tr>
																<td>Intérogatoire</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info intero_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($premier_sejour){ ?>
															<tr>
																<td>Premier Examen</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info premier_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($facteur_sejour){ ?>
															<tr>
																<td>Facteur de risque</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info facteur_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															<?php if($antecedents_sejour){ ?>
															<tr>
																<td>Antécédents</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info antecedents_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($planning_sejour){ ?>
															<tr>
																<td>Planning familiale</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info planning_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															<?php if($suivi_sejour){ ?>
															<tr>
																<td>Srurveillance de la femme enciente</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info suivi_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($vaccination_sejour){ ?>
															<tr>
																<td>vaccacination de la femme</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info vaccination_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($constante_sejour){ ?>
															<tr>
																<td>Constante vitale</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info const_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($consultation_sejour){ ?>
															<tr>
																<td>Consultation</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info consu_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($ordonnance_sejour){ ?>
															<tr>
																<td>Ordonnance</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info ordo_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($soins_infirmiers_sejour){ ?>
															<tr>
																<td>Soins infirmiers</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info soins_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($imagerie){ ?>
															<tr>
																<td>Imagerie médicale</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info imagerie_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($laboratoire_sejour){ ?>
															<tr>
																<td>Examen laboratoire</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info laboratoire_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($exploration){ ?>
															<tr>
																<td>Exploration fonctionnelle</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info exp_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($hospitalisation_sejour){ ?>
															<tr>
																<td>hospitalisation</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info hospitalisation_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($reeducation){ ?>
															<tr>
																<td>Rééducation</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info reeducation_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>
															
															<?php if($nouveau){ ?>
															<tr>
																<td>Nouveau né</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info nouveau_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>	
															<?php if($diagnostic){ ?>
															<tr>
																<td>Maladie(s) diagnostiquée(s)</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info diagnostic_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>														
															<?php if($deces){ ?>
															<tr>
																<td>Cas de décès</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info deces_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
																</td>
															</tr>
															<?php } ?>															
															
														</table>
													</td>
												</tr>
												<?php } ?>
											<tbody>
											
											</tbody>
										</table>
										<?php } ?>
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

<div class="modal fade" id="modalConsulte" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						
						<div class="body table-responsive">
							<div class="col-md-12" id="recepConsultation"></div>
						</div>
					</div>
				</div>
			
			</div>
          
        </div>
    </div>
</div>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>