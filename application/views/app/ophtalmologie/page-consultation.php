
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php include(dirname(__FILE__) . '/../includes/init.php'); var_dump($consultation_ophta);?>




<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Consultation sur l'acte médical : <?php echo $acm->lac_sLibelle; ?></h2>
            <small class="text-muted" style="text-transform:uppercase"><?php $reste = $this->md_config->joursRestantDateTime($acm->acm_dDateExp); echo $reste;?></small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="<?php echo base_url($patient->pat_sAvatar);?>" class="img-fluid" alt="">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>À PROPOS DU PATIENT</h2>
                    </div>
                    <div class="body">
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
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="font-size:14px">
                            <li class="nav-item"><a class="nav-link active"data-toggle="tab" href="#rapport"><b>Dossier patient</b></a></li>
							<!-- Nav tabs
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#constante"><b>Constante vitale</b></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#complement"><b>Antécédents</b></a></li> -->
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" id="cc" href="#consultation"><b>Consultation</b></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" id="or" href="#ordonnance"><b> Ordonnance</b></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hospitalisation"><b>Hospitalisation</b></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#labo"><b> Examen laboratoire</b></a></li>
							<!-- Nav tabs
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#soins" id="so"><b>Soins infirmiers</b></a></li> -->
                        </ul>
						 <!-- Nav tabs<ul class="nav nav-tabs" role="tablist" style="font-size:14px">
                            
							
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#imagerie" id="in"><b>Examen imagerie</b></a></li> -->
							
							<!-- Nav tabs
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reeducation"><b>Rééducation</b></a></li>
                             <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exploration"><b>Exploration fonctionnelle</b></a></li>
                        </ul>	 -->
						<!-- Nav tabs
						<ul class="nav nav-tabs" role="tablist" style="font-size:13.5px;border-bottom:none">
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#avis"><b>Avis de spécialiste</b></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#diagnostic"><b>Maladie(s) diagnostiquée(s)</b></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rdv"><b>Programmer le prochain Rendez-vous</b></a></li>
                            <?php if($patient->pat_sSexe!="H"){?>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#femme"><b <?php if($patient->pat_iFemme==1){echo 'style="color:red"';}else{echo '';} ;?>><?php if($patient->pat_iFemme==1){echo 'Femme enceinte';}else{echo 'Déclaration femme enceinte';} ;?></b></a></li>
							<?php }?>
                        </ul>			
						<ul class="nav nav-tabs" role="tablist" style="font-size:13.5px">
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ne"><b>Déclaration Nouveau né</b></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#enfant"><b <?php if($patient->pat_iEnfant==1){echo 'style="color:red"';}else{echo '';} ;?>><?php if($patient->pat_iEnfant==1){echo 'Enfant malnutri(e)';}else{echo 'Déclaration enfant malnutri(e)';} ;?></b></a></li>
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#deces"><b>Déclaration de Decès</b></a></li>
						</ul> -->
						
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
							
							<a href="#dossier" class="btn btn-raised bg-blue-grey" style="color:white; font-size:13px"><i class="fa fa-folder-open"></i> Voir les consultations du patient</a>
                            <?php if(!empty($liste)){?>
							<a href="<?php echo site_url("impression/dossier_medical_passage/".$acm->pat_id); ?>" class="btn btn-raised bg-blue-grey" style="color:white; font-size:13px"><i class="fa fa-print"></i> Imprimer le dossier médical</a>
							<?php } ?>		
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
													$consultation_ophta_sejour = $this->md_patient->consultation_ophta_sejour($l->sea_id);
													
													
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
                                                    $avis = $this->md_patient->avis_sejour($l->sea_id);
                                                    $rdv_sej = $this->md_rdv->rdv_sejour($l->sea_id);
												?>
												<tr>
													<td>Le <?php echo $this->md_config->affDateFrNum($l->sea_dDate); ?></td>
													<td colspan="2">
														<table style="width:100%;padding:0">
															
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
															<?php if($consultation_ophta_sejour){ ?>
															<tr>
																<td>Consultation ophtalmologique</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info consu_ophta_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
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
																<td>Protocole des soins</td>
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

                                                            <?php if($avis){ ?>
                                                                <tr>
                                                                    <td>Avis de spécialiste</td>
                                                                    <td style="width:17.6%">
                                                                        <a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info avis_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
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

                                                            <?php if($rdv_sej){ ?>
                                                                <tr>
                                                                    <td>Rendez-vous programmé</td>
                                                                    <td style="width:17.6%">
                                                                        <a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info rdv_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
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
															<?php if($deces){ ?>
															<tr>
																<td>Cas de décès</td>
																<td style="width:17.6%">
																	<a href="javascript:();" rel="<?php echo $l->sea_id;  ?>" class="text-info deces_sej" style="color:#fff"><i class="fa fa-arrow-right pull-right" style="font-size:25px"></i></a>
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
							
                            <div role="tabpanel" class="tab-pane" id="constante">
								
                                <div class="header" style="margin-top:45px">
									<h2>prise des constantes <small>renseignez tous les champs marqués par des (*)</small> </h2>
									
								</div>
								
								<div class="body">
									
									<form id="form-constante">
										<div class="row clearfix">
											<div class="col-sm-12 retour-const"></div>
											<div class="col-sm-12 retour-constFinal"></div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Température (° C)</label>
														<input type="number" value="<?php if(!is_null($constante)){echo $constante->con_iTemperature;}?>" name="temperature" class="form-control temperature">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label style="color:#000">Tension arterielle (mmHg)</label>
													<div class="row clearfix">
														<div class="col-sm-6">
															<div class="form-line">
															<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_iTensionSys;}?>" name="sys" class="form-control sys" placeholder="Systole">
															</div>
														</div>
														<div class="col-sm-6">
															<div class="form-line">
															<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_iTensionDia;}?>" name="dia" class="form-control dia" placeholder="Diastole">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Poids (Kg)</label>
														<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_fPoids;}?>" name="poids" class="form-control poids">
													</div>
												</div>
											</div>
											<div class="col-sm-2">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Taille (cm)</label>
														<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_fTaille;}?>" name="taille" class="form-control taille">
														<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
													</div>
												</div>
											</div>											
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Pouls (pulsation/mn)</label>
														<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_fPoulsation;}?>" name="poul" class="form-control poul">
													</div>
												</div>
											</div>							
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Saturation (%)</label>
														<input type="text" value="<?php if(!is_null($constante)){echo $constante->con_fSaturation;}?>" name="saturation" class="form-control saturation">
													</div>
												</div>
											</div>											
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Duérèse</label>
														<textarea style="height:100px" name="dierese"  class="form-control dierese"><?php if(!is_null($constante)){echo $constante->con_fDierese;}?></textarea>
													</div>
												</div>
											</div>									
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Evaluation</label>
														<textarea style="height:100px" name="evaluation" class="form-control evaluation"><?php if(!is_null($constante)){echo $constante->con_fEvaluation;}?></textarea>
													</div>
												</div>
											</div>
										</div>
										
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<button type="submit" class="btn btn-raised bg-blue-grey" id="enregistrerConstante">Enregistrer</button>
											</div>
										</div>
									</form>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="complement">
                                <form id="form-complement">
									<div class="col-sm-12 retour-complement"></div>
									<div class="row clearfix">
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Activités quotidiennes</label>
													<textarea class='edit' name="quotidien" style="margin-top: 30px;" placeholder="Saissez les ici"><?php if($information){echo $information->inc_sActQ ;}?></textarea>
													<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
													<input type="hidden" value="<?php echo $acm->pat_id; ?>" name="pat">
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Groupe Sanguin</label>
													<select name="sang" class="form-control obligatoire">
														<option value="">Choisir</option>
														<option value="O +">O +</option>
														<option value="A +">A +</option>
														<option value="B +">B +</option>
														<option value="O -">O -</option>
														<option value="A -">A -</option>
														<option value="AB +">AB +</option>
														<option value="B -">B -</option>
														<option value="AB -">AB -</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Antécédents personnels</label>
													<table class="table table-bordered table-striped table-hover">
														<thead>
															<tr>
																<th style="width:95%">Liste des antécédeents personnels</th>
																<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
															</tr>
															<tr>
																<td>
																	<span class="retour-lan"></span>
																	<select id="lan" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectAnte">
																		<option value=""> Choisir * </option>
																		<?php foreach($perso AS $p){?>
																		<option value="<?php echo $p->lan_id; ?>-/-<?php echo $p->lan_sLibelle; ?>"> <?php echo $p->lan_sLibelle; ?> </option>
																		<?php } ?>
																	</select>
																</td>
													
																<td class="text-center">
																	<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLan"><i class="fa fa-plus"></i></a>
																</td>
															</tr>
														</thead>
													   
														<tbody id="tbodyLan"></tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Antécédents familiaux</label>
													<table class="table table-bordered table-striped table-hover">
														<thead>
															<tr>
																<th style="width:95%">Liste des antécédeents familiaux</th>
																<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
															</tr>
															<tr>
																<td>
																	<span class="retour-laf"></span>
																	<select id="laf" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectAnte">
																		<option value=""> Choisir * </option>
																		<?php foreach($fam AS $f){?>
																		<option value="<?php echo $f->laf_id; ?>-/-<?php echo $f->laf_sLibelle; ?>"> <?php echo $f->laf_sLibelle; ?> </option>
																		<?php } ?>
																	</select>
																</td>
													
																<td class="text-center">
																	<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLaf"><i class="fa fa-plus"></i></a>
																</td>
															</tr>
														</thead>
													   
														<tbody id="tbodyLaf"></tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Allergies connues</label>
													<table class="table table-bordered table-striped table-hover">
														<thead>
															<tr>
																<th style="width:95%">Liste des allergies</th>
																<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
															</tr>
															<tr>
																<td>
																	<span class="retour-lia"></span>
																	<select id="lia" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectAlle">
																		<option value=""> Choisir * </option>
																		<?php foreach($aller AS $a){?>
																		<option value="<?php echo $a->lia_id; ?>-/-<?php echo $a->lia_sLibelle; ?>"> <?php echo $a->lia_sLibelle; ?> </option>
																		<?php } ?>
																	</select>
																</td>
													
																<td class="text-center">
																	<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLia"><i class="fa fa-plus"></i></a>
																</td>
															</tr>
														</thead>
													   
														<tbody id="tbodyLia"></tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<div class="form-line">
													<label style="color:#000">Activités professionnelles</label>
													<table class="table table-bordered table-striped table-hover">
														<thead>
															<tr>
																<th style="width:95%">Liste des activité professionnelles</th>
																<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
															</tr>
															<tr>
																<td>
																	<span class="retour-lap"></span>
																	<select id="lap" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectAlle">
																		<option value=""> Choisir * </option>
																		<?php foreach($prof AS $pr){?>
																		<option value="<?php echo $pr->lap_id; ?>-/-<?php echo $pr->lap_sLibelle; ?>"> <?php echo $pr->lap_sLibelle; ?> </option>
																		<?php } ?>
																	</select>
																</td>
													
																<td class="text-center">
																	<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLap"><i class="fa fa-plus"></i></a>
																</td>
															</tr>
														</thead>
													   
														<tbody id="tbodyLap"></tbody>
													</table>
												</div>
											</div>
										</div>
										
									</div>
									
									<div class="row clearfix">
										
										<div class="col-sm-12">
											<button type="submit" class="btn btn-raised bg-blue-grey" id="enregistrerInformation">Enregistrer</button>
										</div>
									</div>
								</form>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="consultation">
                                <div class="header" style="margin-top:45px">
									<h2>Faire une consultation <small>renseignez tous les champs marqués par des (*)</small> </h2>
								</div>
								<div class="body">
									<form id="form-ophta">
										<div class="retour-ophta"></div>
										<div class="row clearfix">
											<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
												<center><h5 style="font-weight:bold;font-size:15px;">Acuité visuelle</h5></center>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Gauche *</label>
																<input type="text" name="AVG" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sAVGauche;}?>" />
																<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Droite *</label>
																<input type="text" name="AVD" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sAVDroite;}?>" />
															</div>
														</div>
													</div>
												</div>
												<center><h5 style="font-weight:bold;font-size:15px;">skiascopie</h5></center>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Gauche *</label>
																<input type="text" name="SKG" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sSKGauche;}?>" />
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Droite *</label>
																<input type="text" name="SKD" class="form-control obligatoire"  value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sSKDroite;}?>"/>
															</div>
														</div>
													</div>
												</div>
												
												<center><h5 style="font-weight:bold;font-size:15px;">Sphérique</h5></center>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Gauche *</label>
																<input type="text" name="SPG" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sSPGauche;}?>"/>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Droite *</label>
																<input type="text" name="SPD" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sSPDroite;}?>"/>
															</div>
														</div>
													</div>
												</div>
												
												<center><h5 style="font-weight:bold;font-size:15px;">Cylindre</h5></center>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Gauche *</label>
																<input type="text" name="CYG" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sCYGauche;}?>"/>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<div class="form-line">
																<label style="color:#000">Droite *</label>
																<input type="text" name="CYD" class="form-control obligatoire" value="<?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sCYDroite;}?>"/>
															</div>
														</div>
													</div>
												</div>
												
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Diagnostique *</label>
														<textarea class="form-control obligatoire" rows="10" style='height:100px;' name="dia"><?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sDiagnostique;}?></textarea>
													</div>	
												</div>
												
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Observation *</label>
														<textarea class="form-control obligatoire" style='height:100px;' rows="10" name="obs"><?php if(!is_null($consultation_ophta)){echo $consultation_ophta->cso_sObservation;}?></textarea>
													</div>	
												</div>
											</div>
										</div>
									</form>
									<div class="row clearfix">
										<div class="col-sm-12">
											<a href="javascript:void();" class="btn btn-raised bg-blue-grey" id="addOphta">Enregistrer</a>
										</div>
									</div>
								</div>
                            </div>
							<!--<div role="tabpanel" class="tab-pane" id="consultation">
                                  <div class="header" style="margin-top:45px">
									<h2>Faire une consultation <small>renseignez tous les champs marqués par des (*)</small> </h2>
								</div>
								<div class="body">
									<form id="">
										<div class="col-sm-12 retour"></div>
										<div class="row clearfix">
											<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
												<div class="panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
													
													<div class="panel panel-primary">
														<div class="panel-heading" role="tab" id="headingTwo_1">
															<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTen_1" aria-expanded="false"
																aria-controls="collapseTen_1"> <strong>Examen ophtalmologie 01</strong> </a> </h4>
														</div>
														<div id="collapseTen_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
															<div class="panel-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="form-group">
																		<div class="form-line">
																			<label style="color:#000">Objet de la visite *</label>
																			<textarea class="form-control obligatoire" rows="10" name=""></textarea>
																		</div>	
																	</div>	
																	</div>										
																</div>		
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">OD *</label>
																				
																				<select name="" class="form-control  obligatoire">
																					<option value="">--------------Tension oculaire--------------</option>
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4">4</option>
																					<option value="5">5</option>
																					<option value="6">6</option>
																					<option value="7">7</option>
																					<option value="8">8</option>
																					<option value="9">9</option>
																					<option value="10">10</option>
																				</select>
																			</div>
																		</div>
																	</div>	
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">OG *</label>
																				
																				<select name="" class="form-control  obligatoire">
																					<option value="">--------------Tension oculaire--------------</option>
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4">4</option>
																					<option value="5">5</option>
																					<option value="6">6</option>
																					<option value="7">7</option>
																					<option value="8">8</option>
																					<option value="9">9</option>
																					<option value="10">10</option>
																				</select>
																			</div>
																		</div>
																	</div>																																		
																</div>											
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-check">
																				<input type="checkbox" class="form-check-input position-static" id="checkbox_1" name="checkbox">
																				<label for="checkbox_1"> NP OU > 3ans</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_2" name="checkbox">
																				<label for="checkbox_2"> SO</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_3" name="checkbox">
																				<label for="checkbox_3"> Consult</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_4" name="checkbox">
																				<label for="checkbox_4"> FU EP</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_5" name="checkbox">
																				<label for="checkbox_5"> Préop</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_6" name="checkbox">
																				<label for="checkbox_6"> Postop</label>
																			</div>
																		</div>
																	</div>
																												
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Type de visite</label>
																				<input type="text" name="sensibilite" class="form-control  obligatoire ">
																			</div>
																		</div>
																	</div>												
																</div>
																
																<strong>Acuité visuelle avant et après correction</strong><br>
																<center><h5 style="font-weight:bold;font-size:15px;">Vision de loin</h5></center>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Acuité visuelle avant correction OD * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Acuité visuelle avant correction OG * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Après correction OD * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Après correction OG * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<center><h5 style="font-weight:bold;font-size:15px;">Vision de près</h5></center>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Acuité visuelle avant correction OD * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Acuité visuelle avant correction OG * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Après correction OD * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																				<select name="" class="form-control  obligatoire">
																					<option value="">-------------- Après correction OG * --------------</option>
																					<option value="00/10">00/10</option>
																					<option value="01/10">01/10</option>
																					<option value="02/10">02/10</option>
																					<option value="03/10">03/10</option>
																					<option value="04/10">04/10</option>
																					<option value="05/10">04/10</option>
																					<option value="05/10">05/10</option>
																					<option value="06/10">06/10</option>
																					<option value="07/10">07/10</option>
																					<option value="08/10">08/10</option>
																					<option value="09/10">09/10</option>
																					<option value="10/10">10/10</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-12">
																		<div class="form-group">
																			<div class="form-inline">
																				<label style="color:#000;">Interprétations * </label>
																				<textarea class="form-control obligatoire" rows="10" name=""></textarea>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="panel panel-primary">
														<div class="panel-heading" role="tab" id="headingOne_1">
															<h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseNine_1" aria-expanded="true" aria-controls="collapseNine_1"> <strong>Examen ophtalmologie 02</strong> </a> </h4>
														</div>
														<div id="collapseNine_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
															<div class="panel-body"> 
																<h5 style="font-size:20px;font-weight:bold;font-family:Roboto;text-align:center;">Formulaire des corrections acuités</h5>
																<h5 style="font-size:18px;font-weight:bold;font-family:Roboto;text-align:center;">VISION DE LOIN</h5>
																<h5 style="text-align:center;font-weight:bold;">REFRACTION</h5>
																<h6 style="font-size:13px;font-weight:bold;font-family:Roboto;">Correction visuelle</h6>
																<strong>Oeil Droit</strong><br>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Sphère *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0">0</option>
																					<option value="05">05</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																				
																			</div>
																		</div>
																	</div>												
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Cylindre *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0">0</option>
																					<option value="05">05</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																			</div>
																		</div>
																	</div>											
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Axe *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0°">0°</option>
																					<option value="5°">5°</option>
																					<option value="10°">10°</option>
																					<option value="15°">15°</option>
																					<option value="20°">20°</option>
																					<option value="25°">25°</option>
																					<option value="30°">30°</option>
																					<option value="35°">35°</option>
																					<option value="40°">40°</option>
																					<option value="45°">45°</option>
																					<option value="50°">50°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Addition *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="+0,25">+0,25</option>
																					<option value="+0,50">+0,50</option>
																					<option value="+0,75">+0,75</option>
																					<option value="+1">+1</option>
																					<option value="+,25">+1,25</option>
																					<option value="+1,50">+1,50</option>
																					<option value="+1,75">+1,75</option>
																					<option value="+2">+2</option>
																					<option value="+2,25">+2,25</option>
																					<option value="+2,50">+2,50</option>
																					<option value="+2,75">+2,75</option>
																					<option value="+3">+3</option>
																				</select>
																			</div>
																		</div>
																	</div>	
																</div>
																
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Prisme *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0 D</option>
																					<option value="2 D">2 D</option>
																					<option value="4 D">4 D</option>
																					<option value="6 D">6 D</option>
																					<option value="8 D">8 D</option>
																					<option value="10 D">10 D</option>
																					<option value="12 D">12 D</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Base *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0°</option>
																					<option value="2 D">2°</option>
																					<option value="4 D">6°</option>
																					<option value="6 D">8°</option>
																					<option value="8 D">10°</option>
																					<option value="10 D">12°</option>
																					<option value="12 D">14°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Ecart pupillaire OD *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0 mm">0 mm</option>
																					<option value="2 mm">2 mm</option>
																					<option value="4 mm">4 mm</option>
																					<option value="6 mm">6 mm</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Ecart pupillaire OG *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0 mm">0 mm</option>
																					<option value="2 mm">2 mm</option>
																					<option value="4 mm">4 mm</option>
																					<option value="6 mm">6 mm</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<strong>Besoins visuels *</strong><br>
																			<div class="form-check">
																				<input type="checkbox" class="form-check-input position-static" id="checkbox_01" name="checkbox">
																				<label for="checkbox_01">Vision de loin</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_02" name="checkbox">
																				<label for="checkbox_02">Vision de près</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_03" name="checkbox">
																				<label for="checkbox_03">Ordinateur</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_04" name="checkbox">
																				<label for="checkbox_04">Bifocaux</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_05" name="checkbox">
																				<label for="checkbox_05">Sports</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_06" name="checkbox">
																				<label for="checkbox_06">Lunettes soleil / Polarisé</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_07" name="checkbox">
																				<label for="checkbox_07">Professionnel</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Traitement besoins visuels</label>
																				<input type="text" name="" class="form-control obligatoire">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<strong>Caractéristiques du verre *</strong><br>
																			<div class="form-check">
																				<input type="checkbox" class="form-check-input position-static" id="checkbox_001" name="checkbox">
																				<label for="checkbox_001">Protection anti-UV</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_002" name="checkbox">
																				<label for="checkbox_002">Résistance au rayage</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_003" name="checkbox">
																				<label for="checkbox_003">Anti-réflection</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_004" name="checkbox">
																				<label for="checkbox_004">Polycarbonate</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_005" name="checkbox">
																				<label for="checkbox_005">Haut indice</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_006" name="checkbox">
																				<label for="checkbox_006">Progréssif</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_007" name="checkbox">
																				<label for="checkbox_007">Asphérique</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_008" name="checkbox">
																				<label for="checkbox_008">Photo chrome</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Traitement caractéristiques du verre *</label>
																				<input type="text" name="" class="form-control obligatoire">
																			</div>
																		</div>
																	</div>
																</div>
																
																<strong>Oeil Gauche</strong><br>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Sphère *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0">0</option>
																					<option value="05">05</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																				
																			</div>
																		</div>
																	</div>												
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Cylindre *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0">0</option>
																					<option value="05">05</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																			</div>
																		</div>
																	</div>											
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Axe *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0°">0°</option>
																					<option value="5°">5°</option>
																					<option value="10°">10°</option>
																					<option value="15°">15°</option>
																					<option value="20°">20°</option>
																					<option value="25°">25°</option>
																					<option value="30°">30°</option>
																					<option value="35°">35°</option>
																					<option value="40°">40°</option>
																					<option value="45°">45°</option>
																					<option value="50°">50°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Addition *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="+0,25">+0,25</option>
																					<option value="+0,50">+0,50</option>
																					<option value="+0,75">+0,75</option>
																					<option value="+1">+1</option>
																					<option value="+,25">+1,25</option>
																					<option value="+1,50">+1,50</option>
																					<option value="+1,75">+1,75</option>
																					<option value="+2">+2</option>
																					<option value="+2,25">+2,25</option>
																					<option value="+2,50">+2,50</option>
																					<option value="+2,75">+2,75</option>
																					<option value="+3">+3</option>
																				</select>
																			</div>
																		</div>
																	</div>	
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Prisme *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0 D</option>
																					<option value="2 D">2 D</option>
																					<option value="4 D">4 D</option>
																					<option value="6 D">6 D</option>
																					<option value="8 D">8 D</option>
																					<option value="10 D">10 D</option>
																					<option value="12 D">12 D</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Base *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0°</option>
																					<option value="2 D">2°</option>
																					<option value="4 D">6°</option>
																					<option value="6 D">8°</option>
																					<option value="8 D">10°</option>
																					<option value="10 D">12°</option>
																					<option value="12 D">14°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															<div class="panel-body"> 
																<h5 style="font-size:18px;font-weight:bold;font-family:Roboto;text-align:center;">VISION DE PRES</h5>
																<h5 style="text-align:center;font-weight:bold;">PRESBYTIE</h5>
																<h6 style="font-size:13px;font-weight:bold;font-family:Roboto;">Correction visuelle</h6>
																<strong>Oeil Droit</strong><br>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Sphère *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																				
																			</div>
																		</div>
																	</div>												
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Cylindre *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																			</div>
																		</div>
																	</div>											
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Axe *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="5°">5°</option>
																					<option value="10°">10°</option>
																					<option value="15°">15°</option>
																					<option value="20°">20°</option>
																					<option value="25°">25°</option>
																					<option value="30°">30°</option>
																					<option value="35°">35°</option>
																					<option value="40°">40°</option>
																					<option value="45°">45°</option>
																					<option value="50°">50°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Addition *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="+0,50">+0,50</option>
																					<option value="+0,75">+0,75</option>
																					<option value="+1">+1</option>
																					<option value="+,25">+1,25</option>
																					<option value="+1,50">+1,50</option>
																					<option value="+1,75">+1,75</option>
																					<option value="+2">+2</option>
																					<option value="+2,25">+2,25</option>
																					<option value="+2,50">+2,50</option>
																					<option value="+2,75">+2,75</option>
																					<option value="+3">+3</option>
																				</select>
																			</div>
																		</div>
																	</div>	
																</div>
																
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Prisme *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0 D</option>
																					<option value="2 D">2 D</option>
																					<option value="4 D">4 D</option>
																					<option value="6 D">6 D</option>
																					<option value="8 D">8 D</option>
																					<option value="10 D">10 D</option>
																					<option value="12 D">12 D</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Base *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0°</option>
																					<option value="2 D">2°</option>
																					<option value="4 D">6°</option>
																					<option value="6 D">8°</option>
																					<option value="8 D">10°</option>
																					<option value="10 D">12°</option>
																					<option value="12 D">14°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Ecart pupillaire OD *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0 mm">0 mm</option>
																					<option value="2 mm">2 mm</option>
																					<option value="4 mm">4 mm</option>
																					<option value="6 mm">6 mm</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Ecart pupillaire OG *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0 mm">0 mm</option>
																					<option value="2 mm">2 mm</option>
																					<option value="4 mm">4 mm</option>
																					<option value="6 mm">6 mm</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<strong>Besoins visuels *</strong><br>
																			<div class="form-check">
																				<input type="checkbox" class="form-check-input position-static" id="checkbox_01" name="checkbox">
																				<label for="checkbox_01">Vision de loin</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_02" name="checkbox">
																				<label for="checkbox_02">Vision de près</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_03" name="checkbox">
																				<label for="checkbox_03">Ordinateur</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_04" name="checkbox">
																				<label for="checkbox_04">Bifocaux</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_05" name="checkbox">
																				<label for="checkbox_05">Sports</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_06" name="checkbox">
																				<label for="checkbox_06">Lunettes soleil / Polarisé</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_07" name="checkbox">
																				<label for="checkbox_07">Professionnel</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Traitement besoins visuels</label>
																				<input type="text" name="" class="form-control obligatoire">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<strong>Caractéristiques du verre *</strong><br>
																			<div class="form-check">
																				<input type="checkbox" class="form-check-input position-static" id="checkbox_001" name="checkbox">
																				<label for="checkbox_001">Protection anti-UV</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_002" name="checkbox">
																				<label for="checkbox_002">Résistance au rayage</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_003" name="checkbox">
																				<label for="checkbox_003">Anti-réflection</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_004" name="checkbox">
																				<label for="checkbox_004">Polycarbonate</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_005" name="checkbox">
																				<label for="checkbox_005">Haut indice</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_006" name="checkbox">
																				<label for="checkbox_006">Progréssif</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_007" name="checkbox">
																				<label for="checkbox_007">Asphérique</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_008" name="checkbox">
																				<label for="checkbox_008">Photo chrome</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Traitement caractéristiques du verre *</label>
																				<input type="text" name="" class="form-control obligatoire">
																			</div>
																		</div>
																	</div>
																</div>
																
																<strong>Oeil Gauche</strong><br>
																<div class="row">
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Sphère *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																				
																			</div>
																		</div>
																	</div>												
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Cylindre *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="0,50">0,50</option>
																					<option value="0,75">0,75</option>
																					<option value="1">1</option>
																					<option value="1,25">1,25</option>
																					<option value="1,50">1,50</option>
																					<option value="1,75">1,75</option>
																					<option value="2,25">2</option>
																					<option value="2,50">2,25</option>
																					<option value="2,75">2,50</option>
																				</select>
																			</div>
																		</div>
																	</div>											
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Axe *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="5°">5°</option>
																					<option value="10°">10°</option>
																					<option value="15°">15°</option>
																					<option value="20°">20°</option>
																					<option value="25°">25°</option>
																					<option value="30°">30°</option>
																					<option value="35°">35°</option>
																					<option value="40°">40°</option>
																					<option value="45°">45°</option>
																					<option value="50°">50°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Addition *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir la valeur -----</option>
																					<option value="+0,50">+0,50</option>
																					<option value="+0,75">+0,75</option>
																					<option value="+1">+1</option>
																					<option value="+,25">+1,25</option>
																					<option value="+1,50">+1,50</option>
																					<option value="+1,75">+1,75</option>
																					<option value="+2">+2</option>
																					<option value="+2,25">+2,25</option>
																					<option value="+2,50">+2,50</option>
																					<option value="+2,75">+2,75</option>
																					<option value="+3">+3</option>
																				</select>
																			</div>
																		</div>
																	</div>	
																</div>
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Prisme *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0 D</option>
																					<option value="2 D">2 D</option>
																					<option value="4 D">4 D</option>
																					<option value="6 D">6 D</option>
																					<option value="8 D">8 D</option>
																					<option value="10 D">10 D</option>
																					<option value="12 D">12 D</option>
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<label style="color:#000">Base *</label>
																				<select name="" class="form-control  obligatoire">
																					<option value="">----- Choisir -----</option>
																					<option value="0 D">0°</option>
																					<option value="2 D">2°</option>
																					<option value="4 D">6°</option>
																					<option value="6 D">8°</option>
																					<option value="8 D">10°</option>
																					<option value="10 D">12°</option>
																					<option value="12 D">14°</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="panel panel-primary">
														<div class="panel-heading" role="tab" id="headingOne_1">
															<h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseeight_1" aria-expanded="true" aria-controls="collapseeight_1"> <strong>Examen ophtalmologie 03</strong> </a> </h4>
														</div>
														<div id="collapseeight_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
															<div class="panel-body">
																<h5 style="font-weight:bold;">Anterieur Segment</h5>
																<div class="row">
																	
																	<div class="col-sm-3">
																		<div class="form-group">
																			<span>OD<br>WNL</span>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_08" name="checkbox">
																				<label for="checkbox_08">Marge de la paupière OD:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_09" name="checkbox">
																				<label for="checkbox_09">Puncta-Schirmer-FCT:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_10" name="checkbox">
																				<label for="checkbox_10">Conjonctive:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_11" name="checkbox">
																				<label for="checkbox_11">Cornea-TBUT-RB:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_12" name="checkbox">
																				<label for="checkbox_12">AC:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_13" name="checkbox">
																				<label for="checkbox_13">IRIS:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_14" name="checkbox">
																				<label for="checkbox_14">Lentilles:</label>
																			</div>
																		</div>
																	</div>

																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-1">
																		<div class="form-group">
																			<span>OS<br>WNL</span>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_15" name="checkbox">
																				<label for="checkbox_15"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_16" name="checkbox">
																				<label for="checkbox_16"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_17" name="checkbox">
																				<label for="checkbox_17"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_18" name="checkbox">
																				<label for="checkbox_18"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_19" name="checkbox">
																				<label for="checkbox_19"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_20" name="checkbox">
																				<label for="checkbox_20"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_21" name="checkbox">
																				<label for="checkbox_21"></label>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-5">
																		<div class="form-group">
																			<div class="form-line">
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																			</div>
																		</div>
																	</div>
																</div>
																
																<h5 style="font-weight:bold;">Posterior Segment</h5>
																<div class="row">
																	
																	<div class="col-sm-3">
																		<div class="form-group">
																			<span>OD<br>WNL</span>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_08" name="checkbox">
																				<label for="checkbox_08">Marge de la paupière OD:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_09" name="checkbox">
																				<label for="checkbox_09">Puncta-Schirmer-FCT:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_10" name="checkbox">
																				<label for="checkbox_10">Conjonctive:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_11" name="checkbox">
																				<label for="checkbox_11">Cornea-TBUT-RB:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_12" name="checkbox">
																				<label for="checkbox_12">AC:</label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_13" name="checkbox">
																				<label for="checkbox_13">IRIS:</label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_14" name="checkbox">
																				<label for="checkbox_14">Lentilles:</label>
																			</div>
																		</div>
																	</div>

																	<div class="col-sm-3">
																		<div class="form-group">
																			<div class="form-line">
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-1">
																		<div class="form-group">
																			<span>OS<br>WNL</span>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_15" name="checkbox">
																				<label for="checkbox_15"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_16" name="checkbox">
																				<label for="checkbox_16"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_17" name="checkbox">
																				<label for="checkbox_17"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_18" name="checkbox">
																				<label for="checkbox_18"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_19" name="checkbox">
																				<label for="checkbox_19"></label>
																				
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_20" name="checkbox">
																				<label for="checkbox_20"></label>
																			</div>
																			<div class="form-check">
																				<input type="checkbox" id="checkbox_21" name="checkbox">
																				<label for="checkbox_21"></label>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-5">
																		<div class="form-group">
																			<div class="form-line">
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																				<input type="text" name=""><br><br>
																			</div>
																		</div>
																	</div>
																</div>
																
																<div class="row">
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-line">
																				<div class="form-control">
																					<label for="">Dilatation Temps: </label>
																					<input type="text" name="" id="">
																				</div>
																				
																				<div class="form-control">
																					<label for="">Médicaments utilisés: </label>
																					<input type="text" name="" id="">
																				</div>
																				
																				<div class="form-check">
																					<input type="checkbox" id="checkbox_22" name="checkbox">
																					<label for="checkbox_22">Dilaté ?</label>
																				</div>
																				
																				<div class="form-control">
																					<label for="">Non Dilaté (Pourquoi?) Valeur: </label>
																					<input type="text" name="" id="">
																				</div>
																				
																				<div class="form-control">
																					<label for="">Infection traumatique ches l'enfant: </label>
																					<input type="text" name="" id="">
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="col-sm-6">
																		<div class="form-group">
																			<div class="form-control">
																				<label for="">Temps IOP prix: </label>
																				<input type="text" name="" id="">
																			</div>
																				
																			<div class="form-control">
																				<label for="">Gonioscopy WNL OU </label>
																				<input type="text" name="" id="">
																			</div>
																				
																			<div class="form-control">
																				<label for="">Gonio OD</label>
																				<input type="text" name="" id="">
																			</div>
																			
																			<div class="form-control">
																				<label for="">Gonio OD</label>
																				<input type="text" name="" id="">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												
												</div>
											</div>
										</div>
										<div class="row clearfix">
											<div class="col-sm-12">
												<a class="btn btn-raised bg-blue-grey" id="">Enregistrer</a>
											</div>
										</div>
									</form>
								</div>
                            </div>-->
							<div role="tabpanel" class="tab-pane" id="ordonnance">
								<div class="header" style="">
									<h2>Établir une ordonnance <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="row clearfix">
										<div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
											<div class="panel-group" id="accordion_17" role="tablist" aria-multiselectable="true">
												<div class="panel panel-col-grey">
													<div class="panel-heading" role="tab" id="headingOne_17">
														<h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseOne_17" aria-expanded="true" aria-controls="collapseOne_17" style="font-size:14px"><b>OPTION 1</b> </a> </h4>
													</div>
													<div id="collapseOne_17" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_17">
														<div class="panel-body"> 
															<div class="body">
																<div class="table-responsive">
																	<form id="form-ord">
																		<div class="retour-ord"></div>
																		<table class="table table-bordered table-striped table-hover" style="font-size:12px">
																			<thead>
																				<tr>
																					<th style="width:20%">Produit</th>
																					<th style="width:20%">stock</th>
																					<th style="width:10%">Qte</th>
																					<th style="width:10%">Posologie</th>
																					<th style="width:10%">Durée</th>
																					<th style="width:10%">Renouvelable</th>
																					<th style="width:10%">Frequence</th>
																					<th style="width:10%"  class="text-center"><i class="fa fa-wrench"></i></th>
																				</tr>
																				<tr>
																					<td style="padding:0;width:20%;">
																						<select id="med" class="selectProduit selectord" <?php //echo 'onChange="groupe();"'; ?> style="width:100%;padding-bottom:5px;padding-top:5px;margin-bottom:10px">
																							<option value="">----- Prescription * -----</option>
																							 <?php foreach($listeMed AS $l){ ?>
																							<option value="<?php echo $l->med_id.'-/-'.$l->med_sNc;?>"><?php echo  $l->med_sNc;?></option>
																							 <?php } ?>
																							<!-- <option value="autre">Autre</option>-->
																						</select>
																						<div id="bloc" class="cacher">
																							<input type="text" id="medi" style="width:58%" placeholder="nom du produit"/>
																							<input type="text" id="forme" style="width:25%" placeholder="forme"/>
																							<input type="text" id="dosage" style="width:15%" placeholder="dosage"/>
																						</div>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="text" min="1" readonly id="stock" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="qte" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="pos" style="width:55%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																						<select id="typePos" style="width:40%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="Cp">Cp</option>
																							<option value="Inj">Inj</option>
																							<option value="Amp">Amp</option>
																							<option value="Clt">Clt</option>
																							<option value="UI">UI</option>
																						</select>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="duree" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																					</td>														
																					<td style="padding:0;width:10%;">
																						<select id="typeRenew" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="NON">NON</option>
																							<option value="OUI">OUI</option>
																						</select>
																					</td>														
																					<td style="padding:0;width:10%;">
																						<select id="typeFreq" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="Matin-Midi-Soir">M-M-S</option>
																							<option value="Matin">Matin</option>
																							<option value="Midi">Midi</option>
																							<option value="Soir">Soir</option>
																							<option value="Matin-Midi">Matin-Midi</option>
																							<option value="Matin-Soir">Matin-Soir</option>
																							<option value="Midi-Soir">Midi-Soir</option>
																						</select>
																					</td>
																					<td class="text-center" style="padding:0;width:10%;">
																						<a href="javascript:();" class="btn btn-xs waves-effect bg-blue-grey" id="addOrd"><i class="fa fa-plus"></i></a>
																					</td>
																				</tr>
																			</thead>
																			<tbody id="tbodyOrd"></tbody>
																		</table>
																		<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
																		<input type="hidden" value="<?php echo $acm->pat_id; ?>" name="pat">
																	
																	<button type="submit" class="btn btn-success waves-effect pull-right addOrd" style="color:#fff"><i class="fa fa-check"></i>Valider l'ordonnance</button>
																	</form>
																	<a href="#or" class="cacher cliqueOrd">clique</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="panel panel-col-blue-grey">
													<div class="panel-heading" role="tab" id="headingTwo_17">
														<h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_17" href="#collapseTwo_17" aria-expanded="false"
																   aria-controls="collapseTwo_17" style="font-size:14px"> <b> OPTION 2</b></a> </h4>
													</div>
													<div id="collapseTwo_17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_17">
														<div class="panel-body"> 
															<div class="body">
																<div class="table-responsive">
																	<form id="form-ord2">
																		<div class="retour-ord"></div>
																		<table class="table table-bordered table-striped table-hover" style="font-size:12px">
																			<thead>
																				<tr>
																					<th style="width:20%">Produit</th>
																					<th style="width:10%">Qte</th>
																					<th style="width:10%">Posologie</th>
																					<th style="width:10%">Durée</th>
																					<th style="width:10%">Renouvelable</th>
																					<th style="width:10%">Frequence</th>
																					<th style="width:10%"  class="text-center"><i class="fa fa-wrench"></i></th>
																				</tr>
																				<tr>
																					<td style="padding:0;width:20%;">
																						<!-- <select id="med" class="selectProduit selectord" onChange="groupe();" style="width:100%;padding-bottom:5px;padding-top:5px;margin-bottom:10px">
																							<option value="">----- Prescription * -----</option>
																							 <?php foreach($listeMed AS $l){ ?>
																							<option value="<?php echo $l->med_sNc;?>"><?php echo  $l->med_sNc;?></option>
																							 <?php } ?>
																							<option value="autre">Autre</option>
																						</select>-->
																						<input type="text" id="medi2" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px" placeholder="nom du produit"/>
																						<div id="bloc" class="cacher">
																							<!-- <input type="text" id="medi" style="width:58%" placeholder="nom du produit"/>-->
																							<input type="text" id="forme2" style="width:25%" placeholder="forme"/>
																							<input type="text" id="dosage2" style="width:15%" placeholder="dosage"/>
																						</div>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="qte2" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="pos2" style="width:55%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																						<select id="typePos2" style="width:40%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="Cp">Cp</option>
																							<option value="Inj">Inj</option>
																							<option value="Amp">Amp</option>
																							<option value="Clt">Clt</option>
																							<option value="UI">UI</option>
																						</select>
																					</td>
																					<td style="padding:0;width:10%;">
																						<input type="number" min="1" id="duree2" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px"/>
																					</td>														
																					<td style="padding:0;width:10%;">
																						<select id="typeRenew2" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="NON">NON</option>
																							<option value="OUI">OUI</option>
																						</select>
																					</td>														
																					<td style="padding:0;width:10%;">
																						<select id="typeFreq2" style="width:100%;height:36px;border:1px solid #ccc;border-radius:5px">
																							<option value="Matin-Midi-Soir">M-M-S</option>
																							<option value="Matin">Matin</option>
																							<option value="Midi">Midi</option>
																							<option value="Soir">Soir</option>
																							<option value="Matin-Midi">Matin-Midi</option>
																							<option value="Matin-Soir">Matin-Soir</option>
																							<option value="Midi-Soir">Midi-Soir</option>
																						</select>
																					</td>
																					<td class="text-center" style="padding:0;width:10%;">
																						<a href="javascript:();" class="btn btn-xs waves-effect bg-blue-grey" id="addOrd2"><i class="fa fa-plus"></i></a>
																					</td>
																				</tr>
																			</thead>
																			<tbody id="tbodyOrd2"></tbody>
																		</table>
																		<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
																		<input type="hidden" value="<?php echo $acm->pat_id; ?>" name="pat">
																	
																	<button type="submit" class="btn btn-success waves-effect pull-right addOrd2" style="color:#fff"><i class="fa fa-check"></i>Valider l'ordonnance</button>
																	</form>
																	<!--<form id="form-ord2">
																		<div class="retour-ord"></div>
																		<table class="table table-bordered table-striped table-hover" style="font-size:12px">
																			<thead>
																				<tr>
																					<th style="">Définir les produits à prescrire</th>
																				</tr>
																					<td style="padding:0">
																						<textarea id="ordo" name="ordo" rows="20" style="height:155px;width:100%;border:1px solid #ccc;border-radius:5px" placeholder="Saisissez ici..."></textarea>
																					</td>
																				</tr>
																			</thead>
																		</table>
																		<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
																		<input type="hidden" value="<?php echo $acm->pat_id; ?>" name="pat">
																	<button type="button" class="btn btn-success waves-effect pull-right addOrd2" style="color:#fff"><i class="fa fa-check"></i>Valider l'ordonnance</button>
																	</form>-->
																</div>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>						
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="soins">
                                <div class="header" style="margin-top:45px">
									<h2>Prescription des soins infirmiers <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-soins">
											<div class="retour-soins"></div>
											<table class="table table-bordered table-striped table-hover" style="font-size:12px">
												<thead>
													<tr>
														<th style="width:50%">Actes soins</th>
														<th style="width:45px">Qte</th>
														<th style="width:50px">Heure</th>
														<th style="width:35%">Consigne</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_soins" style="width:100%;padding-bottom:5px;padding-top:5px" class="select2">
																<option value=""> Prescription * </option>
																<?php $listeActSoins = $this->md_parametre->liste_prescription(21); foreach($listeActSoins AS $li){?>
																<option value="<?php echo $li->lac_id; ?>-/-<?php echo $li->lac_sLibelle; ?>-/-<?php echo $li->uni_id; ?>-/-<?php echo $li->lac_iDure; ?>"> <?php echo $li->lac_sLibelle; ?> </option>
																<?php } ?>
															</select>
														</td>
														<td>
															<input type="number" id="qte_soins" style="width:45px"/>
															
														</td>
														<td>
															<input type="time" id="heure_soins" style="width:50px"/>
														</td>
														<td>
															<textarea id="cons" style="width:100%"></textarea>
															
														</td>
														
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addSoins"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodySoins"></tbody>
											</table>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addSoins" style="color:#fff"><i class="fa fa-check"></i>Valider la prescription</a>
										<a href="#so" class="cacher cliqueSoins">clique</a>
									</div>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="hospitalisation">
                                 <div class="header" style="margin-top:45px">
									<h2>prescription d'Hospitalisation <small>renseignez tous les champs marqués par des (*)</small> </h2>
									
								</div>
								
								<div class="body">
									<form id="form-demande">
										<div class="row clearfix">
											<div class="col-sm-12 retour-demande"></div>
											<div class="col-sm-12 retour-demandeFinal"></div>
											<div class="col-sm-6">
												<div class="form-line">
													<label style="color:#000"><b>Unité *</b></label>
													<div class="form-group drop-custum">
														<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
														<input type="hidden" value="<?php echo $user->per_id; ?>" name="med">
														<select name="uni" style="width:100%;padding-bottom:5px;padding-top:5px" class="form-control unitePresc obligatoire show-tick selectUni">
															<option value="">------------ Choisir l'unité --------------</option>
															<?php 
																//$unites = $this->md_parametre->liste_unite_services_actifs($user->ser_id);
																$unites = $this->md_parametre->liste_unites_Dep_actifs();
																 foreach($unites AS $u){ 
															?>
																<option value="<?php echo $u->uni_id; ?>"><?php echo $u->uni_sLibelle; ?></option>
															<?php } ?>
														</select>
													</div>
													
												</div>
											</div>
										</div>
										<br>
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<button type="submit" class="btn btn-raised bg-blue-grey" id="enregistrerDemande">DEMANDE D'HOSPITALISATION</button>
											</div>
										</div>
									</form>
									<!--<form id="form-hos">
										<div class="row clearfix">
											<div class="col-sm-12 retour-hos"></div>
											<div class="col-sm-12 retour-hostFinal"></div>
											<div class="col-sm-6">
												<div class="form-line">
													<label style="color:#000"><b>Unité *</b></label>
													<div class="form-group drop-custum">
														<select name="uni" class="form-control unitePresc obligatoire show-tick">
															<option value="">------------ Choisir l'unité --------------</option>
															<?php $unites = $this->md_parametre->liste_unite_services_actifs($user->ser_id);foreach($unites AS $u){?>
																<option value="<?php echo $u->uni_id; ?>"><?php echo $u->uni_sLibelle; ?></option>
															<?php } ?>
														</select>
													</div>
													
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-line">
													<label style="color:#000"><b>Chambre *</b></label>
													<div class="form-group drop-custum">
														<select name="cha" class="form-control chambrePresc obligatoire show-tick">
															<option value="">-- Choisir la chambre --</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-line">
													<label style="color:#000"><b>Lit *</b></label>
													<div class="form-group drop-custum">
														<select name="lit" class="form-control litPresc obligatoire show-tick">
															<option value="">-- Choisir le lit --</option>
															
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000"><b>Type d'hospitalisation *</b></label>
														<select name="type" class="form-control obligatoire show-tick">
															<option value="Standard">Standard</option>
															<option value="Patient en isolation">Patient en isolation</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000"><b>Mode d'entrée *</b></label>
														<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
                                                        <select name="motif" class="form-control obligatoire">
                                                            <option value="">-- Choisir le mode --</option>
                                                            <option value="référé">Référé</option>
                                                            <option value="auto référé">Auto Référé</option>
                                                            <option value="contre référé">Contre référé</option>
                                                        </select>
													</div>
												</div>
											</div>
										</div>
										<br>
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<button type="submit" class="btn btn-raised bg-blue-grey" id="enregistrerHospi">DEMANDE D'HOSPITALISATION</button>
											</div>
										</div>
									</form>-->
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="imagerie">
                                <div class="header" style="margin-top:45px">
									<h2>Prescription imagerie <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-imagerie">
											<div class="retour-imagerie"></div>
											<table class="table table-bordered table-striped table-hover">
												<thead>
													<tr>
														<th style="width:95%">Actes imagerie</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_imagerie" style="width:100%;padding-bottom:5px;padding-top:5px" class="select2">
																<option value=""> Prescription * </option>
																<?php $listeActSoins = $this->md_parametre->liste_prescription(25); foreach($listeActSoins AS $li){?>
																<option value="<?php echo $li->lac_id; ?>-/-<?php echo $li->lac_sLibelle; ?>-/-<?php echo $li->uni_id; ?>-/-<?php echo $li->lac_iDure; ?>"> <?php echo $li->lac_sLibelle; ?> </option>
																<?php } ?>
															</select>
														</td>
											
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addImagerie"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodyImagerie"></tbody>
											</table>
											<br><label style="color:#000;margin-left:10px"><b>Indication</b></label>
											<textarea id="indication" name="indication" style="width:100%"></textarea>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_imagerie">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addImagerie" style="color:#fff"><i class="fa fa-check"></i>Valider la prescription</a>
										<a href="#in" class="cacher cliqueImagerie">clique</a>
									</div>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="labo">
                                <div class="header" style="margin-top:45px">
									<h2>Prescription examen laboratoire <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-labo">
											<div class="retour-labo"></div>
											<table class="table table-bordered table-striped table-hover">
												<thead>
													<tr>
														<th style="width:95%">Examen(s) à faire</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_labo" style="width:100%;padding-bottom:5px;padding-top:5px" class="select2">
																<option value=""> Sélectionner * </option>
																<?php foreach($listeActeLabo AS $lm){?>
																<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																<?php } ?>
															</select>
															
														</td>														
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addLabo"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodyLabo"></tbody>
											</table>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addLabo" style="color:#fff"><i class="fa fa-check"></i>Valider</a>
										<a href="#in" class="cacher cliqueLabo">clique</a>
									</div>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="reeducation">
                                 <div class="header" style="margin-top:45px">
									<h2>Prescription en réeducation <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-reeducation">
											<div class="retour-reeducation"></div>
											<table class="table table-bordered table-striped table-hover">
												<thead>
													<tr>
														<th style="width:95%">Actes réeducation</th>
														<th style="width:95%">Nombre de seances</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_reeducation" style="width:100%;padding-bottom:5px;padding-top:5px" class="select2">
																<option value=""> Prescription * </option>
																<?php $listeActSoins = $this->md_parametre->liste_prescription(30); foreach($listeActSoins AS $li){?>
																<option value="<?php echo $li->lac_id; ?>-/-<?php echo $li->lac_sLibelle; ?>-/-<?php echo $li->uni_id; ?>-/-<?php echo $li->lac_iDure; ?>"> <?php echo $li->lac_sLibelle; ?> </option>
																<?php } ?>
															</select>
														</td>														
														
														<td>
															<input type="number" id="nombre" name="nombre" />
														</td>
											
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addReeducation"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodyReeducation"></tbody>
											</table>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addReeducation" style="color:#fff"><i class="fa fa-check"></i>Valider la prescription</a>
										<a href="#in" class="cacher cliqueReeducation">clique</a>
									</div>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="exploration">
                                <div class="header" style="margin-top:45px">
									<h2>Exploration fonctionnelle <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-exp">
											<div class="retour-exp"></div>
											<table class="table table-bordered table-striped table-hover">
												<thead>
													<tr>
														<th style="width:95%">Actes exploration</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_exp" style="width:100%;padding-bottom:5px;padding-top:5px" class="select2">
																<option value=""> Prescription * </option>
																<?php/*<?php $listeActSoins = $this->md_parametre->liste_prescription_exploration(37,38); foreach($listeActSoins AS $li){?>
																<option value="<?php echo $li->lac_id; ?>-/-<?php echo $li->lac_sLibelle; ?>-/-<?php echo $li->uni_id; ?>-/-<?php echo $li->lac_iDure; ?>"> <?php echo $li->lac_sLibelle; ?> </option>
																<?php } ?>*/?>
																<optgroup label="Cardiologie">
																	<?php foreach($listeExamenCardio AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
																<optgroup label="Rhumatologie">
																	<?php foreach($listeExamenRhum AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
																<optgroup label="Gynécologie">
																	<?php foreach($listeExamenGyne AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
																<optgroup label="Gynécologie obstétricienne">
																	<?php foreach($listeExamenGyneObs AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
																<optgroup label="Neurologie">
																	<?php foreach($listeExamenGyneNeuro AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
																<optgroup label="Pneumonie">
																	<?php foreach($listeExamenGynePneu AS $lm){?>
																	<option value="<?php echo $lm->lac_id; ?>-/-<?php echo $lm->lac_sLibelle; ?>-/-<?php echo $lm->uni_id; ?>-/-<?php echo $lm->lac_iDure; ?>"> <?php echo $lm->lac_sLibelle; ?> </option>
																	<?php } ?>
																</optgroup>
															</select>
														</td>
											
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addExp"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodyExp"></tbody>
											</table>
											<br><label style="color:#000;margin-left:10px"><b>Indication</b></label>
											<textarea id="indication" name="indication" style="width:100%"></textarea>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addexp" style="color:#fff"><i class="fa fa-check"></i>Valider la prescription</a>
										<a href="#in" class="cacher cliqueExp">clique</a>
									</div>
								</div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="avis">
                                <div class="header" style="margin-top:45px">
                                    <h2>Soliciter un avis de spécialiste <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
                                </div>

                                <div class="body">
                                    <div class="table-responsive">
                                        <form id="form-avis">
                                            <div class="retour-avis"></div>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width:55%">Avis d'un spécialiste en</th>
                                                    <th style="width:40%">Motif d'avis</th>
                                                    <th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select id="specialite" style="width:100%;padding-bottom:5px;padding-top:5px">
                                                            <option value=""> Liste des spécialités * </option>
                                                            <option value="4-/-Cardiologie"> Cardiologie </option>
                                                            <option value="42-/-Rumatologie"> Rumatologie </option>
                                                            <option value="32-/-Gynécologie"> Gynécologie </option>
                                                            <option value="47-/-Gynécologie obstétrique"> Gynécologie obstétrique </option>
                                                            <option value="43-/-Neurologie"> Neurologie </option>
                                                            <option value="46-/-Pneumonie"> Pneumonie </option>
                                                            <option value="2-/-Anestésie"> Anestésie </option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select id="motifs" style="width:100%;padding-bottom:5px;padding-top:5px">
                                                            <option value=""> Motif * </option>
                                                            <option value="Hospitalisation"> Hospitalisation </option>
                                                            <option value="Opération"> Opération </option>
                                                        </select>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addAvis"><i class="fa fa-plus"></i></a>
                                                    </td>
                                                </tr>
                                                </thead>

                                                <tbody id="tbodyAvis"></tbody>
                                            </table>
                                            <input type="hidden" value="<?php echo $acm_id; ?>" name="id">
                                            <input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
                                        </form>
                                        <a href="javascript:();" class="btn btn-success waves-effect pull-right addAvis" style="color:#fff"><i class="fa fa-check"></i>Valider la prescription</a>
                                        <a href="#in" class="cacher cliqueImagerie">clique</a>
                                    </div>
                                </div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="diagnostic">
                                <div class="header" style="margin-top:45px">
									<h2>Ajouter les maladies diagnostiquées <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
								</div>
								
								<div class="body">
									<div class="table-responsive">
										<form id="form-maladie">
											<table class="table table-bordered table-striped table-hover">
												<thead>
													<tr>
														<th style="width:95%">Maladie diagnostiquée</th>
														<th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
													</tr>
													<tr>
														<td>
															<select id="act_maladie" style="width:100%;padding-bottom:5px;padding-top:5px" class="selectDia">
																<option value=""> Sélectionner * </option>
																<?php foreach($listeMaladie AS $lm){?>
																<option value="<?php echo $lm->mal_id; ?>-/-<?php echo $lm->mal_sLibelle; ?>"> <?php echo $lm->mal_sLibelle; ?> </option>
																<?php } ?>
															</select>
															<div class="retour-maladie"></div>
														</td>														
														<td class="text-center">
															<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addMaladie"><i class="fa fa-plus"></i></a>
														</td>
													</tr>
												</thead>
											   
												<tbody id="tbodyMaladie"></tbody>
											</table>
											<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
											<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
										</form>
										<a href="javascript:();" class="btn btn-success waves-effect pull-right addMaladie" style="color:#fff"><i class="fa fa-check"></i>Valider</a>
										<a href="#in" class="cacher cliqueReeducation">clique</a>
									</div>
								</div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="rdv">
                                <div class="header" style="margin-top:45px">
                                    <h2>Programmer un futur Rendez-vous au patient <small>Ajoutez les éléments dans la liste et puis validez</small> </h2>
                                </div>

                                <div class="body">
                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                        <div class="card m-t-20">
                                            <form id="cal">
                                                <?php foreach($rdv AS $r){?>
                                                    <input type="hidden" name="couleurRdv" class="couleurRdv" value="<?php if($r->dir_dDate == $odij AND $r->dir_tHeure_arrive<=$heure){echo "b-l b-2x b-success";}elseif($r->dir_dDate == $odij AND $r->dir_tHeure_arrive>$heure){echo "b-l b-2x b-success bg-warning";}elseif($r->dir_dDate < $odij AND $r->dir_tHeure_arrive<=$heure){echo "b-l b-2x b-lightred";}elseif($r->dir_dDate < $odij AND $r->dir_tHeure_arrive>$heure){echo "b-l b-2x b-lightred bg-warning";}elseif($r->dir_dDate > $odij){echo "bg-cyan";} ?>"/>
                                                    <input type="hidden" name="dateHeureRdv" class="dateHeureRdv" value="<?php echo $r->dir_dDate; ?>T<?php echo $r->dir_tHeure; ?>"/>
                                                    <input type="hidden" name="objetRdv" class="objetRdv" value="<?php echo $r->per_sTitre." ".$r->per_sNom." ".$r->per_sPrenom; ?> / Rendez-vous avec <?php echo $r->dir_sNom." ".$r->dir_sPrenom; ?> <?php if($r->dir_sObjet){echo " pour ".$r->dir_sObjet;} ?>"/>
                                                <?php } ?>
                                            </form>
                                            <div class="body">
                                                <button class="btn btn-raised btn-success btn-sm m-r-0 m-t-0" id="change-view-today">Aujourd'hui</button>
                                                <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-day" >Jour</button>
                                                <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-week">Semaine</button>
                                                <button class="btn btn-raised btn-default btn-sm m-r-0 m-t-0" id="change-view-month">Mois</button>
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <form id="form-rdv">
                                            <div class="retour-rdv"></div>
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th style="width:20%">Date</th>
                                                    <th style="width:15%">Heure</th>
                                                    <th style="width:60%">Objet du Rendez-vous</th>
                                                    <th style="width:20px"  class="text-center"><i class="fa fa-wrench"></i></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" id="dateRdv" class="datepicker" width="100%">
                                                    </td>
                                                    <td>
                                                        <input type="time" id="heureRdv" class="" width="100%">
                                                    </td>
                                                    <td>
                                                        <textarea id="motifRdv" cols="32" width="100%"></textarea>
                                                    </td>

                                                    <td class="text-center">
                                                        <a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="addRdv"><i class="fa fa-plus"></i></a>
                                                    </td>
                                                </tr>
                                                </thead>

                                                <tbody id="tbodyRdv"></tbody>
                                            </table>
                                            <input type="hidden" value="<?php echo $acm_id; ?>" name="id">
                                            <input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
                                        </form>
                                        <a href="javascript:();" class="btn btn-success waves-effect pull-right addRdv" style="color:#fff"><i class="fa fa-check"></i>Valider le Rendez-vous</a>
                                    </div>
                                </div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="femme">
                                <div class="header" style="margin-top:45px">
									<h2>Déclaration femme enceinte <small></small> </h2>
								</div>
								
								<div class="body">
									
									<form id="form-femme">
										<div class="col-sm-12 retour-femme"></div>
										<div class="row clearfix">											
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">Selectionner l'état de la femme *</label>
														<select name="femme" class="form-control obligatoire">
															<option value="">------ Selectionner -------</option>
															<option value="1">Enceinte</option>
															<option value="0">Pas enceinte</option>
														</select>
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">Selectionner le nombre de mois *</label>
														<select name="mois" class="form-control obligatoire">
															<option value="">------ Selectionner -------</option>
															<option value="0">0 Mois</option>
															<option value="1">1 Mois</option>
															<option value="2">2 Mois</option>
															<option value="3">3 Mois</option>
															<option value="4">4 Mois</option>
															<option value="5">5 Mois</option>
															<option value="6">6 Mois</option>
															<option value="7">7 Mois</option>
															<option value="8">8 Mois</option>
															<option value="9">9 Mois</option>
														</select>
														<input type="hidden" value="<?php echo $acm->acm_id; ?>" name="acm">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<a class="btn btn-raised bg-blue-grey" id="AddFemme">Enregistrer</a>
											</div>
										</div>
									</form>
								</div>
                            </div>			
							<div role="tabpanel" class="tab-pane" id="ne">
                                <div class="header" style="margin-top:45px">
									<h2>Déclaration nouveau né <small>renseignez tous les champs marqués par des (*)</small> </h2>
								</div>
								
								<div class="body">
									
									<form id="form-nouveau-ne">
									<div class="col-sm-12 retour-new-ne"></div>
										<div class="row clearfix">
											<div class="col-sm-4">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Date naissance *</label>
														<input type="text" name="datenaiss" class="form-control datepicker obligatoire">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Heure naissance *</label>
														<input type="time" name="heureDate" class="form-control obligatoire">
														<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
													</div>
												</div>
											</div>											
											<div class="col-sm-4">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">Sexe du nouveau né *</label>
														<select name="sexe" class="form-control obligatoire">
															<option value="">------ Selectionner -------</option>
															<option value="M">Masculin</option>
															<option value="F">Féminin</option>
														</select>
													</div>
												</div>
											</div>
											<div style="color:red" class="col-sm-12 retour-nouveau-ne"></div>
										</div>
										
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<a class="btn btn-raised bg-blue-grey" id="AddNouveauNe">Enregistrer</a>
											</div>
										</div>
									</form>
								</div>
                            </div>
							
							<div role="tabpanel" class="tab-pane" id="enfant">
                                <div class="header" style="margin-top:45px">
									<h2>Déclaration enfant malnutri(e) <small></small> </h2>
								</div>
								
								<div class="body">
									
									<form id="form-enfant">
										<div class="col-sm-12 retour-enfant"></div>
										<div class="row clearfix">											
											<div class="col-sm-12">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">selectionner l'état de l'enfant *</label>
														<select name="enfant" class="form-control obligatoire">
															<option value="">------ Selectionner -------</option>
															<option value="1">Malnutri(e)</option>
															<option value="0">Pas malnutri(e)</option>
														</select>
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<a class="btn btn-raised bg-blue-grey" id="AddEnfant">Enregistrer</a>
											</div>
										</div>
									</form>
								</div>
                            </div>
							<div role="tabpanel" class="tab-pane" id="deces">
                                <div class="header" style="margin-top:45px">
									<h2>Déclaration de décès <small>renseignez tous les champs marqués par des (*)</small> </h2>
								</div>
								
								<div class="body">
									
									<form id="form-deces">
									<div class="col-sm-12 retour-new-deces"></div>
										<div class="row clearfix">
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Date décès *</label>
														<input type="text" name="datedeces" class="form-control datepicker obligatoire">
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<div class="form-line">
														<label style="color:#000">Heure décès *</label>
														<input type="time" name="heuredeces" class="form-control obligatoire">
														<input type="hidden" value="<?php echo $acm_id; ?>" name="id">
														<input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat_soins">
													</div>
												</div>
											</div>											
											<div class="col-sm-6">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">Unité *</label>
														<select name="unite" class="form-control obligatoire">
															<option value="">--------- Selectionner ----------</option>
															<?php foreach($listeUnite AS $lu){ ?>
																<option value="<?=$lu->uni_id?>"><?=$lu->uni_sLibelle?></option>
															<?php }; ?>
														</select>
													</div>
												</div>
											</div>											
											<div class="col-sm-12">
												<div class="form-group">
													<div class="form-line">
													<label style="color:#000">Cause *</label>
														<textarea class="form-control obligatoire" rows="10" name="cause"></textarea>
													</div>
												</div>
											</div>
											<div style="color:red" class="col-sm-12 retour-deces"></div>
										</div>
										
										<div class="row clearfix">
											
											<div class="col-sm-12">
												<a class="btn btn-raised bg-blue-grey" id="AddDeces">Enregistrer</a>
											</div>
										</div>
									</form>
								</div>
                            </div>																				
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Liste des passages du patient</h2>
					</div>
					<div class="body table-responsive" id="dossier">
						<table id="example" class="table table-bordered table-striped table-hover">
							<thead>
								<tr>
									<th>N° Matricule</th>
									<th>Nom</th>
									<th>Prénom</th>
									<th>Acte médical</th>
									<th>jours</th>
									<th style="width:60px">Action</th>
								</tr>
							</thead>
						   
							<tbody>
							<?php foreach($listeEncours AS $le){ ?>
								<tr>
									<td><?php echo $le->pat_sMatricule; ?></td>
									<td><?php echo $le->pat_sNom; ?></td>
									<td><?php echo $le->pat_sPrenom; ?></td>
									<td><?php echo $le->lac_sLibelle; ?></td>
									<td>Le <?php echo $this->md_config->affDateFrNum($le->fac_dDatePaie);?></td>
									<td class="text-center">
										<?php if(is_null($le->hos_id)){ ?>
										<a href="<?php echo site_url("gynecologie/voir/".$le->acm_id); ?>"><b>Voir</b></a> 
										<?php }else{ ?>
										<a href="<?php echo site_url("hospitalisation/voir/".$le->hos_id); ?>"><b>Voir</b></a>
										<?php } ?>
										 |									
										<a href="<?php echo site_url("impression/dossier_medical_passage/".$le->acm_id); ?>"><b>Imprimer</b></a>
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


 
<script type="text/javascript">
        'use strict';
		
		
		/*function groupe(){
			 var med = document.getElementById('med').value;
			 if(med == "autre"){
				 document.getElementById('bloc').classList.remove("cacher");
			 }
			 else{
				 document.getElementById('bloc').classList.add("cacher");
			 }
		}*/
		
        var listeOrd = document.querySelector('#tbodyOrd');
        var addOrd = document.querySelector('#addOrd');
        var annuaire;
        annuaire = new Array();

        function removeOrdMed(index) {
            annuaire.splice(index,1);
            showListeOrdMed();	
        }
		
		function removeOrdAutre(index) {
            annuaire.splice(index,1);
            showListeOrdAutre();	
        }

        function addDetailOrd() 
        {
            var med 	            = document.getElementById('med').value;
            var qte 	            = document.getElementById('qte').value;
            var stock 	            = document.getElementById('stock').value;
            var duree 	            = document.getElementById('duree').value;
            var pos 	            = document.getElementById('pos').value;
            var typePos 	        = document.getElementById('typePos').value;
            var medi 	            = document.getElementById('medi').value;
            var forme 	            = document.getElementById('forme').value;
            var dosage 	            = document.getElementById('dosage').value;
            var typeRenew 	        = document.getElementById('typeRenew').value;
            var typeFreq 	        = document.getElementById('typeFreq').value;
			// alert(qte);
			if(med !="autre"){
				if(med == '' || qte == ''|| duree == ''|| pos == ''|| typeRenew == ''|| typeFreq == '') {
					alert('Veuillez renseigner le champs.');	
				}
				else {
					if(qte <= stock){
						var contact = new Object();
						contact.med	       	    = med;
						contact.qte	    		= qte;
						contact.duree	        = duree;
						contact.pos	        	= pos;
						contact.typePos	        = typePos;
						contact.typeRenew	    = typeRenew;
						contact.typeFreq	    = typeFreq;
						annuaire.push(contact);
						showListeOrdMed();	
						document.getElementById('qte').value="";
						document.getElementById('duree').value="";
						document.getElementById('pos').value="";
					}else{
						alert('Ce produit ne peut être ajouté car le stock est insuffisant');
					}
					
				}
			}
			else{
				if(medi == '' || forme == '' || dosage == '' || qte == ''|| duree == ''|| pos == '' || typeRenew == ''|| typeFreq == ''){
					alert('Veuillez renseigner le champs.');	
				}
				else {
					if(qte <= stock){
						var contact = new Object();
						contact.medi	       	= medi;
						contact.forme	       	= forme;
						contact.dosage	        = dosage;
						contact.qte	    		= qte;
						contact.duree	        = duree;
						contact.pos	        	= pos;
						contact.typePos	        = typePos;
						contact.typeRenew	    = typeRenew;
						contact.typeFreq	    = typeFreq;
						annuaire.push(contact);
						showListeOrdAutre();	
						document.getElementById('medi').value="";
						document.getElementById('forme').value="";
						document.getElementById('dosage').value="";
						document.getElementById('qte').value="";
						document.getElementById('duree').value="";
						document.getElementById('pos').value="";
					}else{
						alert('Ce produit ne peut être ajouté car le stock est insuffisant');
					}
					
				}
			}
        }

        addOrd.addEventListener('click', addDetailOrd);

        function showListeOrdMed() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				var tabMed="";
				tabMed =annuaire[i].med.split("-/-");
				alert(tabMed[1]);
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="medid[]" value="'+ tabMed[0]+'"/><input type="hidden" name="med[]" value="'+ tabMed[1]+'"/>' +tabMed[1] + '</td>';
				contenu += '<td><input type="hidden" name="qte[]" value="'+ annuaire[i].qte+'"/>' + annuaire[i].qte + '</td>';
				contenu += '<td><input type="hidden" name="pos[]" value="'+ annuaire[i].pos+ ' ' + annuaire[i].typePos+' /jour"/>' + annuaire[i].pos + ' ' + annuaire[i].typePos + ' /jour</td>';
				contenu += '<td><input type="hidden" name="duree[]" value="'+ annuaire[i].duree+'"/>' + annuaire[i].duree + '</td>';
				contenu += '<td><input type="hidden" name="renew[]" value="'+ annuaire[i].typeRenew+'"/>'+ annuaire[i].typeRenew + '</td>';
				contenu += '<td><input type="hidden" name="freq[]" value="'+ annuaire[i].typeFreq+'"/>'+ annuaire[i].typeFreq + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeOrdMed(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeOrd.innerHTML = contenu;
			// alert(contenu);
        }
    
        function showListeOrdAutre() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				var jour="";
				if(annuaire[i].duree >1){
					jour ="jours";
				}
				else{
					jour ="jour";
				}
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="medid[]" value=""/><input type="hidden" name="med[]" value="'+annuaire[i].medi + ' '+annuaire[i].forme + ' '+annuaire[i].dosage +'"/>' +annuaire[i].medi + ' '+annuaire[i].forme + ' '+annuaire[i].dosage + '</td>';
				contenu += '<td><input type="hidden" name="qte[]" value="'+ annuaire[i].qte+'"/>' + annuaire[i].qte + '</td>';
				contenu += '<td><input type="hidden" name="pos[]" value="'+ annuaire[i].pos+ ' ' + annuaire[i].typePos+' /jour"/>' + annuaire[i].pos + ' ' + annuaire[i].typePos + ' /jour</td>';
				contenu += '<td><input type="hidden" name="duree[]" value="'+ annuaire[i].duree+'"/>' + annuaire[i].duree + ' '+jour+'</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeOrdAutre(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeOrd.innerHTML = contenu;
			// alert(contenu);
        }
    
    </script>

<script type="text/javascript">
        'use strict';
		
		
		/*function groupe(){
			 var med = document.getElementById('med2').value;
			 if(med == "autre"){
				 document.getElementById('bloc2').classList.remove("cacher");
			 }
			 else{
				 document.getElementById('bloc2').classList.add("cacher");
			 }
		}*/
		
		
        var listeOrd2 = document.querySelector('#tbodyOrd2');
        var addOrd2 = document.querySelector('#addOrd2');
        var annuaire;
        annuaire = new Array();

        function removeOrdMed2(index) {
            annuaire.splice(index,1);
            showListeOrdMed2();	
        }
		
		function removeOrdAutre2(index) {
            annuaire.splice(index,1);
            showListeOrdAutre2();	
        }
		
        function addDetailOrd2() 
        {
			//alert(1);
            //var med 	            = document.getElementById('med2').value;
            var qte 	            = document.getElementById('qte2').value;
            var duree 	            = document.getElementById('duree2').value;
            var pos 	            = document.getElementById('pos2').value;
            var typePos 	        = document.getElementById('typePos2').value;
            var medi 	            = document.getElementById('medi2').value;
            var forme 	            = document.getElementById('forme2').value;
            var dosage 	            = document.getElementById('dosage2').value;
            var typeRenew 	        = document.getElementById('typeRenew2').value;
            var typeFreq 	        = document.getElementById('typeFreq2').value;
			//alert(qte);
			if(med !="autre"){
				if(medi == '' || qte == ''|| duree == ''|| pos == ''|| typeRenew == ''|| typeFreq == '') {
					alert('Veuillez renseigner le champs.');	
				}
				else {
					var contact = new Object();
					contact.medi	       	    = medi;
					contact.qte	    		= qte;
					contact.duree	        = duree;
					contact.pos	        	= pos;
					contact.typePos	        = typePos;
					contact.typeRenew	    = typeRenew;
					contact.typeFreq	    = typeFreq;
					annuaire.push(contact);
					showListeOrdMed2();	
					document.getElementById('qte2').value="";
					document.getElementById('duree2').value="";
					document.getElementById('pos2').value="";
				}
			}
			else{
				if(medi == '' || forme == '' || dosage == '' || qte == ''|| duree == ''|| pos == '' || typeRenew == ''|| typeFreq == ''){
					alert('Veuillez renseigner le champs.');	
				}
				else {
					var contact = new Object();
					contact.medi	       	= medi;
					contact.forme	       	= forme;
					contact.dosage	        = dosage;
					contact.qte	    		= qte;
					contact.duree	        = duree;
					contact.pos	        	= pos;
					contact.typePos	        = typePos;
					contact.typeRenew	    = typeRenew;
					contact.typeFreq	    = typeFreq;
					annuaire.push(contact);
					showListeOrdAutre2();	
					document.getElementById('medi2').value="";
					document.getElementById('forme2').value="";
					document.getElementById('dosage2').value="";
					document.getElementById('qte2').value="";
					document.getElementById('duree2').value="";
					document.getElementById('pos2').value="";
				}
			}
        }

        addOrd2.addEventListener('click', addDetailOrd2);

        function showListeOrdMed2() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="medid[]" value=""/><input type="hidden" name="med[]" value="'+ annuaire[i].medi+'"/>' +annuaire[i].medi + '</td>';
				contenu += '<td><input type="hidden" name="qte[]" value="'+ annuaire[i].qte+'"/>' + annuaire[i].qte + '</td>';
				contenu += '<td><input type="hidden" name="pos[]" value="'+ annuaire[i].pos+ ' ' + annuaire[i].typePos+' /jour"/>' + annuaire[i].pos + ' ' + annuaire[i].typePos + ' /jour</td>';
				contenu += '<td><input type="hidden" name="duree[]" value="'+ annuaire[i].duree+'"/>' + annuaire[i].duree + '</td>';
				contenu += '<td><input type="hidden" name="renew[]" value="'+ annuaire[i].typeRenew+'"/>'+ annuaire[i].typeRenew + '</td>';
				contenu += '<td><input type="hidden" name="freq[]" value="'+ annuaire[i].typeFreq+'"/>'+ annuaire[i].typeFreq + '</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeOrdMed2(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeOrd2.innerHTML = contenu;
			// alert(contenu);
        }
    
        function showListeOrdAutre2() 
        {
            var contenu="";
            var tailleTableau = annuaire.length;            
                
            for(var i = 0; i < tailleTableau; i++) {
				var jour="";
				if(annuaire[i].duree >1){
					jour ="jours";
				}
				else{
					jour ="jour";
				}
                contenu += '<tr>';
                contenu += '<td><input type="hidden" name="medid[]" value=""/><input type="hidden" name="med[]" value="'+annuaire[i].medi + ' '+annuaire[i].forme + ' '+annuaire[i].dosage +'"/>' +annuaire[i].medi + ' '+annuaire[i].forme + ' '+annuaire[i].dosage + '</td>';
				contenu += '<td><input type="hidden" name="qte[]" value="'+ annuaire[i].qte+'"/>' + annuaire[i].qte + '</td>';
				contenu += '<td><input type="hidden" name="pos[]" value="'+ annuaire[i].pos+ ' ' + annuaire[i].typePos+' /jour"/>' + annuaire[i].pos + ' ' + annuaire[i].typePos + ' /jour</td>';
				contenu += '<td><input type="hidden" name="duree[]" value="'+ annuaire[i].duree+'"/>' + annuaire[i].duree + ' '+jour+'</td>';
                contenu += '<td class="text-center"><a href="javascript:();" onClick="removeOrdAutre2(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenu += '</tr>';
            }

            listeOrd2.innerHTML = contenu;
			// alert(contenu);
        }
    
    </script>

 <script type="text/javascript">
        'use strict';
		
        var listeSoins = document.querySelector('#tbodySoins');
        var addSoins = document.querySelector('#addSoins');
        var annuaireSoins;
        annuaireSoins = new Array();

        function removeSoins(index) {
            annuaireSoins.splice(index,1);
            showListeSoins();	
        }

        function addDetailSoins() 
        {
            var act_soins 	            = document.getElementById('act_soins').value;
            var qte_soins 	            = document.getElementById('qte_soins').value;
            var heure_soins 	            = document.getElementById('heure_soins').value;
            var cons 	            = document.getElementById('cons').value;
			
            if(act_soins == '' || qte_soins == ''|| heure_soins == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contactSoins = new Object();
                contactSoins.act_soins	       	    = act_soins;
                contactSoins.qte_soins	    		= qte_soins;
                contactSoins.heure_soins	        = heure_soins;
                contactSoins.cons	        	= cons;
                annuaireSoins.push(contactSoins);
                showListeSoins();	
				document.getElementById('heure_soins').value="";
				document.getElementById('qte_soins').value="";
				document.getElementById('cons').value="";
            }
        }

        addSoins.addEventListener('click', addDetailSoins);

        function showListeSoins() 
        {
            var contenuSoins="";
            var tailleTableauSoins = annuaireSoins.length;            
                
            for(var i = 0; i < tailleTableauSoins; i++) {
				
				var tabSoins = annuaireSoins[i].act_soins.split("-/-");
				
                contenuSoins += '<tr>';
                contenuSoins += '<td><input type="hidden" name="act_soins[]" value="'+ tabSoins[0]+'"/><input type="hidden" name="uni_soins[]" value="'+ tabSoins[2]+'"/>' + tabSoins[1] + '<input type="hidden" name="duree_soins[]" value="'+ tabSoins[3]+'"/> </td>';
				 contenuSoins += '<td><input type="hidden" name="qte_soins[]" value="'+ annuaireSoins[i].qte_soins+'"/>X ' + annuaireSoins[i].qte_soins + '</td>';
				 contenuSoins += '<td><input type="hidden" name="heure_soins[]" value="'+ annuaireSoins[i].heure_soins+'"/> à ' + annuaireSoins[i].heure_soins +'</td>';
				 contenuSoins += '<td><input type="hidden" name="cons[]" value="'+ annuaireSoins[i].cons+'"/>' + annuaireSoins[i].cons + '</td>';
                contenuSoins += '<td class="text-center"><a href="javascript:();" onClick="removeSoins(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuSoins += '</tr>';
            }

            listeSoins.innerHTML = contenuSoins;
			// alert(contenu);
        }
    
        </script>
		
		
		
 <script type="text/javascript">
        'use strict';
		
        var listeImagerie = document.querySelector('#tbodyImagerie');
        var addImagerie = document.querySelector('#addImagerie');
        var annuaireImagerie;
        annuaireImagerie = new Array();

        function removeImagerie(index) {
            annuaireImagerie.splice(index,1);
            showListeImagerie();	
        }

        function addDetailImagerie() 
        {
            var act_imagerie	            = document.getElementById('act_imagerie').value;
			
            if(act_imagerie == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contactImagerie = new Object();
                contactImagerie.act_imagerie	       	    = act_imagerie;
                annuaireImagerie.push(contactImagerie);
                showListeImagerie();	
            }
        }

        addImagerie.addEventListener('click', addDetailImagerie);

        function showListeImagerie() 
        {
            var contenuImagerie="";
            var tailleTableauImagerie = annuaireImagerie.length;            
                
            for(var i = 0; i < tailleTableauImagerie; i++) {
				
				var tabImagerie = annuaireImagerie[i].act_imagerie.split("-/-");
				
                contenuImagerie += '<tr>';
                contenuImagerie += '<td><input type="hidden" name="act_imagerie[]" value="'+ tabImagerie[0]+'"/><input type="hidden" name="uni_imagerie[]" value="'+ tabImagerie[2]+'"/><input type="hidden" name="duree_imagerie[]" value="'+ tabImagerie[3]+'"/>' + tabImagerie[1] + '</td>';
                contenuImagerie += '<td class="text-center"><a href="javascript:();" onClick="removeImagerie(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuImagerie += '</tr>';
            }

            listeImagerie.innerHTML = contenuImagerie;
			// alert(contenu);
        }
    
 </script>

		
 <script type="text/javascript">
        'use strict';
		
        var listeExp = document.querySelector('#tbodyExp');
        var addExp = document.querySelector('#addExp');
        var annuaireExp;
        annuaireExp = new Array();

        function removeExp(index) {
            annuaireExp.splice(index,1);
            showListeExp();	
        }

        function addDetailExp() 
        {
            var act_exp	            = document.getElementById('act_exp').value;
			
            if(act_exp == '') {
                alert('Veuillez renseigner le champs.');	
            }
            else {
                var contactExp = new Object();
                contactExp.act_exp	       	    = act_exp;
                annuaireExp.push(contactExp);
                showListeExp();	
            }
        }

        addExp.addEventListener('click', addDetailExp);

        function showListeExp() 
        {
            var contenuExp="";
            var tailleTableauExp = annuaireExp.length;            
                
            for(var i = 0; i < tailleTableauExp; i++) {
				
				var tabExp = annuaireExp[i].act_exp.split("-/-");
				
                contenuExp += '<tr>';
                contenuExp += '<td><input type="hidden" name="act_exp[]" value="'+ tabExp[0]+'"/><input type="hidden" name="uni[]" value="'+ tabExp[2]+'"/><input type="hidden" name="duree[]" value="'+ tabExp[3]+'"/>' + tabExp[1] + '</td>';
                contenuExp += '<td class="text-center"><a href="javascript:();" onClick="removeExp(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuExp += '</tr>';
            }

            listeExp.innerHTML = contenuExp;
			// alert(contenu);
        }
    
        </script>

			
		 <script type="text/javascript">
        'use strict';
		
        var listeReeducation = document.querySelector('#tbodyReeducation');
        var addReeducation = document.querySelector('#addReeducation');
        var annuaireReeducation;
        annuaireReeducation = new Array();

        function removeReeducation(index) {
            annuaireReeducation.splice(index,1);
            showListeReeducation();	
        }

        function addDetailReeducation() 
        {
            var act_reeducation	            = document.getElementById('act_reeducation').value;
            var nombre	            = document.getElementById('nombre').value;
			
            if(act_reeducation == '' || nombre == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-reeducation")[0].innerHTML='<span style="color:red">Veuillez renseigner tous les champs</span>';
            }
            else {
                var contactReeducation = new Object();
                contactReeducation.act_reeducation	       	    = act_reeducation;
                contactReeducation.nombre	       	    = nombre;
                annuaireReeducation.push(contactReeducation);
                showListeReeducation();	
				document.getElementById('nombre').value="";
            }
        }

        addReeducation.addEventListener('click', addDetailReeducation);

        function showListeReeducation() 
        {
            var contenuReeducation="";
            var tailleTableauReeducation = annuaireReeducation.length;            
                
            for(var i = 0; i < tailleTableauReeducation; i++) {
				
				var tabReeducation = annuaireReeducation[i].act_reeducation.split("-/-");
				
                contenuReeducation += '<tr>';
                contenuReeducation += '<td><input type="hidden" name="act_reeducation[]" value="'+ tabReeducation[0]+'"/><input type="hidden" name="uni_reeducation[]" value="'+ tabReeducation[2]+'"/><input type="hidden" name="duree_reeducation[]" value="'+ tabReeducation[3]+'"/>' + tabReeducation[1] + '</td>';
                contenuReeducation += '<td><input type="hidden" name="nombre[]" value="'+ annuaireReeducation[i].nombre+'"/>' + annuaireReeducation[i].nombre + '</td>';
				contenuReeducation += '<td class="text-center"><a href="javascript:();" onClick="removeReeducation(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuReeducation += '</tr>';
            }

            listeReeducation.innerHTML = contenuReeducation;
			 // alert(contenuReeducation);
        }
    
        </script>

		
		
		<script type="text/javascript">
        'use strict';
		
        var listeMaladie = document.querySelector('#tbodyMaladie');
        var addMaladie = document.querySelector('#addMaladie');
        var annuaireMaladie;
        annuaireMaladie = new Array();

        function removeMaladie(index) {
            annuaireMaladie.splice(index,1);
            showListeMaladie();	
        }

        function addDetailMaladie() 
        {
            var act_maladie	            = document.getElementById('act_maladie').value;
			
            if(act_maladie == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-maladie")[0].innerHTML='<span style="color:red">Veuillez sélectionner une maladie</span>';
            }
            else {
				document.getElementsByClassName("retour-maladie")[0].innerHTML='';
                var contactMaladie = new Object();
                contactMaladie.act_maladie	       	    = act_maladie;
                annuaireMaladie.push(contactMaladie);
                showListeMaladie();	
            }
        }

        addMaladie.addEventListener('click', addDetailMaladie);

        function showListeMaladie() 
        {
            var contenuMaladie="";
            var tailleTableauMaladie = annuaireMaladie.length;            
                
            for(var i = 0; i < tailleTableauMaladie; i++) {
				
				var tabMaladie = annuaireMaladie[i].act_maladie.split("-/-");
				
                contenuMaladie += '<tr>';
                contenuMaladie += '<td><input type="hidden" name="nom[]" value="'+ tabMaladie[0]+'"/>' + tabMaladie[1] + '</td>';
				contenuMaladie += '<td class="text-center"><a href="javascript:();" onClick="removeMaladie(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuMaladie += '</tr>';
            }

            listeMaladie.innerHTML = contenuMaladie;
			 // alert(contenuMaladie);
        }
    
        </script>		
		<script type="text/javascript">
        'use strict';
		
        var listeLabo = document.querySelector('#tbodyLabo');
        var addLabo = document.querySelector('#addLabo');
        var annuaireLabo;
        annuaireLabo = new Array();

        function removeLabo(index) {
            annuaireLabo.splice(index,1);
            showListeLabo();	
        }

        function addDetailLabo() 
        {
            var act_labo	            = document.getElementById('act_labo').value;
			
            if(act_labo == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-labo")[0].innerHTML='<span style="color:red">Veuillez sélectionner un acte</span>';
            }
            else {
				document.getElementsByClassName("retour-labo")[0].innerHTML='';
                var contactLabo = new Object();
                contactLabo.act_labo       	    = act_labo;
                annuaireLabo.push(contactLabo);
                showListeLabo();	
            }
        }

        addLabo.addEventListener('click', addDetailLabo);

        function showListeLabo() 
        {
            var contenuLabo="";
            var tailleTableauLabo = annuaireLabo.length;            
                
            for(var i = 0; i < tailleTableauLabo; i++) {
				
				var tabLabo = annuaireLabo[i].act_labo.split("-/-");
				
                contenuLabo += '<tr>';
                contenuLabo += '<td><input type="hidden" name="act_labo[]" value="'+ tabLabo[0]+'"/><input type="hidden" name="uni[]" value="'+ tabLabo[2]+'"/><input type="hidden" name="duree[]" value="'+ tabLabo[3]+'"/>' + tabLabo[1] + '</td>';
				contenuLabo += '<td class="text-center"><a href="javascript:();" onClick="removeLabo(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuLabo += '</tr>';
            }

            listeLabo.innerHTML = contenuLabo;
			 // alert(contenuMaladie);
        }
    
        </script>

		
				<script type="text/javascript">
        'use strict';
		
        var listeLan = document.querySelector('#tbodyLan');
        var addLan = document.querySelector('#addLan');
        var annuaireLan;
        annuaireLan = new Array();

        function removeLan(index) {
            annuaireLan.splice(index,1);
            showListeLan();	
        }

        function addDetailLan() 
        {
            var lan	            = document.getElementById('lan').value;
			
            if(lan == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-lan")[0].innerHTML='<span style="color:red">Veuillez sélectionner</span>';
            }
            else {
				document.getElementsByClassName("retour-lan")[0].innerHTML='';
                var contactLan = new Object();
                contactLan.lan      	    = lan;
                annuaireLan.push(contactLan);
                showListeLan();	
            }
        }

        addLan.addEventListener('click', addDetailLan);

        function showListeLan() 
        {
            var contenuLan="";
            var tailleTableauLan = annuaireLan.length;            
                
            for(var i = 0; i < tailleTableauLan; i++) {
				
				var tabLan = annuaireLan[i].lan.split("-/-");
				
                contenuLan += '<tr>';
                contenuLan += '<td><input type="hidden" name="lan[]" value="'+ tabLan[0]+'"/>' + tabLan[1] + '</td>';
				contenuLan += '<td class="text-center"><a href="javascript:();" onClick="removeLan(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuLan += '</tr>';
            }

            listeLan.innerHTML = contenuLan;
			 // alert(contenuMaladie);
        }
    
        </script>
		
		
	<script type="text/javascript">
        'use strict';
		
        var listeLaf = document.querySelector('#tbodyLaf');
        var addLaf = document.querySelector('#addLaf');
        var annuaireLaf;
        annuaireLaf = new Array();

        function removeLaf(index) {
            annuaireLaf.splice(index,1);
            showListeLaf();	
        }

        function addDetailLaf() 
        {
            var laf	            = document.getElementById('laf').value;
			
            if(laf == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-laf")[0].innerHTML='<span style="color:red">Veuillez sélectionner</span>';
            }
            else {
				document.getElementsByClassName("retour-laf")[0].innerHTML='';
                var contactLaf = new Object();
                contactLaf.laf      	    = laf;
                annuaireLaf.push(contactLaf);
                showListeLaf();	
            }
        }

        addLaf.addEventListener('click', addDetailLaf);

        function showListeLaf() 
        {
            var contenuLaf="";
            var tailleTableauLaf = annuaireLaf.length;            
                
            for(var i = 0; i < tailleTableauLaf; i++) {
				
				var tabLaf = annuaireLaf[i].laf.split("-/-");
				
                contenuLaf += '<tr>';
                contenuLaf += '<td><input type="hidden" name="laf[]" value="'+ tabLaf[0]+'"/>' + tabLaf[1] + '</td>';
				contenuLaf += '<td class="text-center"><a href="javascript:();" onClick="removeLaf(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuLaf += '</tr>';
            }

            listeLaf.innerHTML = contenuLaf;
			 // alert(contenuMaladie);
        }
    
        </script>
		
	<script type="text/javascript">
        'use strict';
		
        var listeLia = document.querySelector('#tbodyLia');
        var addLia = document.querySelector('#addLia');
        var annuaireLia;
        annuaireLia = new Array();

        function removeLia(index) {
            annuaireLia.splice(index,1);
            showListeLia();	
        }

        function addDetailLia() 
        {
            var lia	            = document.getElementById('lia').value;
			
            if(lia == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-lia")[0].innerHTML='<span style="color:red">Veuillez sélectionner</span>';
            }
            else {
				document.getElementsByClassName("retour-lia")[0].innerHTML='';
                var contactLia = new Object();
                contactLia.lia      	    = lia;
                annuaireLia.push(contactLia);
                showListeLia();	
            }
        }

        addLia.addEventListener('click', addDetailLia);

        function showListeLia() 
        {
            var contenuLia="";
            var tailleTableauLia = annuaireLia.length;            
                
            for(var i = 0; i < tailleTableauLia; i++) {
				
				var tabLia = annuaireLia[i].lia.split("-/-");
				
                contenuLia += '<tr>';
                contenuLia += '<td><input type="hidden" name="lia[]" value="'+ tabLia[0]+'"/>' + tabLia[1] + '</td>';
				contenuLia += '<td class="text-center"><a href="javascript:();" onClick="removeLia(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuLia += '</tr>';
            }

            listeLia.innerHTML = contenuLia;
        }
    
        </script>

		
	<script type="text/javascript">
        'use strict';
		
        var listeLap = document.querySelector('#tbodyLap');
        var addLap = document.querySelector('#addLap');
        var annuaireLap;
        annuaireLap = new Array();

        function removeLap(index) {
            annuaireLap.splice(index,1);
            showListeLap();	
        }

        function addDetailLap() 
        {
            var lap	            = document.getElementById('lap').value;
			
            if(lap == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-lap")[0].innerHTML='<span style="color:red">Veuillez sélectionner</span>';
            }
            else {
				document.getElementsByClassName("retour-lap")[0].innerHTML='';
                var contactLap = new Object();
                contactLap.lap      	    = lap;
                annuaireLap.push(contactLap);
                showListeLap();	
            }
        }

        addLap.addEventListener('click', addDetailLap);

        function showListeLap() 
        {
            var contenuLap="";
            var tailleTableauLap = annuaireLap.length;            
                
            for(var i = 0; i < tailleTableauLap; i++) {
				
				var tabLap = annuaireLap[i].lap.split("-/-");
				
                contenuLap += '<tr>';
                contenuLap += '<td><input type="hidden" name="lap[]" value="'+ tabLap[0]+'"/>' + tabLap[1] + '</td>';
				contenuLap += '<td class="text-center"><a href="javascript:();" onClick="removeLia(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuLap += '</tr>';
            }

            listeLap.innerHTML = contenuLap;
        }
        </script>
		
		<script type="text/javascript">
        'use strict';
		
        var listeCardio = document.querySelector('#tbodyCardio');
        var addCardio = document.querySelector('#addCardio');
        var annuaireCardio;
        annuaireCardio = new Array();

        function removeCardio(index) {
            annuaireCardio.splice(index,1);
            showListeCardio();	
        }

        function addDetailCardio() 
        {
            var act_cardio	            = document.getElementById('act_cardio').value;
			
            if(act_cardio == '') {
                // alert('Veuillez renseigner les tous les champs.');	
				document.getElementsByClassName("retour-cardio")[0].innerHTML='<span style="color:red">Veuillez sélectionner l\'examen cardiologique</span>';
            }
            else {
				document.getElementsByClassName("retour-cardio")[0].innerHTML='';
                var contactCardio = new Object();
                contactCardio.act_cardio	       	    = act_cardio;
                annuaireCardio.push(contactCardio);
                showListeCardio();	
            }
        }

        addCardio.addEventListener('click', addDetailCardio);

        function showListeCardio() 
        {
            var contenuCardio="";
            var tailleTableauCardio = annuaireCardio.length;            
                
            for(var i = 0; i < tailleTableauCardio; i++) {
				
				var tabCardio = annuaireCardio[i].act_cardio.split("-/-");
				
                contenuCardio += '<tr>';
                contenuCardio += '<td><input type="hidden" name="act_cardio[]" value="'+ tabCardio[0]+'"/><input type="hidden" name="uni[]" value="'+ tabCardio[2]+'"/><input type="hidden" name="duree[]" value="'+ tabCardio[3]+'"/>' + tabCardio[1] + '</td>';
				contenuCardio += '<td class="text-center"><a href="javascript:();" onClick="removeCardio(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuCardio += '</tr>';
            }

            listeCardio.innerHTML = contenuCardio;
			 // alert(contenuMaladie);
        }
    
    </script>

    <script type="text/javascript">
        'use strict';

        var listeAvis = document.querySelector('#tbodyAvis');
        var addAvis = document.querySelector('#addAvis');
        var annuaireAvis;
        annuaireAvis = new Array();

        function removeAvis(index) {
            annuaireAvis.splice(index,1);
            showListeAvis();
        }

        function addDetailAvis()
        {
            var specialite	            = document.getElementById('specialite').value;
            var motifs	            = document.getElementById('motifs').value;

            if(specialite == '' || motifs=='') {
                alert('Veuillez renseigner les tous les champs.');
                // document.getElementsByClassName("retour-cardio")[0].innerHTML='<span style="color:red">Veuillez sélectionner l\'examen cardiologique</span>';
            }
            else {
                // document.getElementsByClassName("retour-cardio")[0].innerHTML='';
                var contactAvis = new Object();
                contactAvis.specialite	       	    = specialite;
                contactAvis.motifs	       	    	= motifs;
                annuaireAvis.push(contactAvis);
                showListeAvis();
            }
        }

        addAvis.addEventListener('click', addDetailAvis);

        function showListeAvis()
        {
            var contenuAvis="";
            var tailleTableauAvis = annuaireAvis.length;

            for(var i = 0; i < tailleTableauAvis; i++) {

                var tabAvis = annuaireAvis[i].specialite.split("-/-");

                contenuAvis += '<tr>';
                contenuAvis += '<td><input type="hidden" name="specialite[]" value="'+ tabAvis[0]+'"/>' + tabAvis[1] + '</td>';
                contenuAvis += '<td><input type="hidden" name="motif[]" value="'+ annuaireAvis[i].motifs+'"/>' + annuaireAvis[i].motifs + '</td>';
                contenuAvis += '<td class="text-center"><a href="javascript:();" onClick="removeAvis(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuAvis += '</tr>';
            }

            listeAvis.innerHTML = contenuAvis;
            // alert(contenuMaladie);
        }

    </script>

    <script type="text/javascript">
        'use strict';

        var listeRdv = document.querySelector('#tbodyRdv');
        var addRdv = document.querySelector('#addRdv');
        var annuaireRdv;
        annuaireRdv = new Array();

        function removeRdv(index) {
            annuaireRdv.splice(index,1);
            showListeRdv();
        }

        function addDetailRdv()
        {
            var motifRdv	            = document.getElementById('motifRdv').value;
            var heureRdv	            = document.getElementById('heureRdv').value;
            var dateRdv	            = document.getElementById('dateRdv').value;

            if(motifRdv == '' || heureRdv == '' || dateRdv == '') {
                alert('Veuillez renseigner le champs.');
            }
            else {
                var contactRdv = new Object();
                contactRdv.motifRdv	       	    = motifRdv;
                contactRdv.heureRdv	       	    = heureRdv;
                contactRdv.dateRdv	       	    = dateRdv;
                annuaireRdv.push(contactRdv);
                showListeRdv();
            }
        }

        addRdv.addEventListener('click', addDetailRdv);

        function showListeRdv()
        {
            var contenuRdv="";
            var tailleTableauRdv = annuaireRdv.length;

            for(var i = 0; i < tailleTableauRdv; i++) {


                contenuRdv += '<tr>';
                contenuRdv += '<td><input type="hidden" name="dateRdv[]" value="'+ annuaireRdv[i].dateRdv+'"/>' + annuaireRdv[i].dateRdv + '</td>';
                contenuRdv += '<td><input type="hidden" name="heureRdv[]" value="'+ annuaireRdv[i].heureRdv+'"/>' + annuaireRdv[i].heureRdv + '</td>';
                contenuRdv += '<td><input type="hidden" name="motifRdv[]" value="'+ annuaireRdv[i].motifRdv+'"/>' + annuaireRdv[i].motifRdv + '</td>';
                contenuRdv += '<td class="text-center"><a href="javascript:();" onClick="removeRdv(' + i + ')" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a></td>';
                contenuRdv += '</tr>';
            }

            listeRdv.innerHTML = contenuRdv;
            // alert(contenu);
        }

    </script>


<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>