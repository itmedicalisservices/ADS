<?php 
	
	$listeEncours = $this->md_patient->liste_acm_laboratoire(date("Y-m-d H:i:s"),$user->ser_id);
	$listeTube = $this->md_patient->liste_tube_laboratoire($user->ser_id);

 ?>
<section class="content home">
    <div class="container-fluid">
       
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Prelevements laboratoires</h2>
								
							</div>
							<div class="body table-responsive">
								  <!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">En attente</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Deja preleve</a></li>
								</ul>                        
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane in active" id="home"> <b>Contenu du prelevement en attente</b>
										<table id="example3" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Patient</th>
													<th>Acte laboratoire</th>
													<th>Medecin prescripteur</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
										   
											<tbody>
											<?php foreach($listeEncours AS $le){ ?>
												<tr>
													<td><?php echo '<b>'.$le->pat_sPrenom.' '.$le->pat_sNom .'</b> ('.$le->pat_sMatricule.')'; ?></td>
													<td><?php echo $le->lac_sLibelle ; ?></td>
													<td class="text-center" style="font-size:13px">
														<?php if(is_null($le->per_sAvatar)){ ?>
															<i>La prescription est externe de l'h?pitale</i><br>
															<span class="text-left" id="text_<?php echo $le->ala_id;?>">Joignez-la prescription</span>
														<?php }else{echo "<b>".$le->per_sNom.'</b> '.$le->per_sPrenom;} ?>
													</td>
													<td class="text-center">
														<?php if(is_null($le->per_sAvatar)){ ?>
															<a  href="<?php echo site_url("laboratoire/prelevement_tube/".$le->ala_id); ?>" class="ajout_service prelevement" rel="<?php echo $le->ala_id;?>"><b><i class="fa fa-flask" style="font-size:23px"></i><br>Editer un code ? barre</b></a>
														<?php }else{ ?>
															<a href="<?php echo site_url("laboratoire/prelevement_tube/".$le->ala_id); ?>"><b><i class="fa fa-flask" style="font-size:23px"></i><br>Editer un code ? barre</b></a>
														<?php } ?>
													</td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
									<div role="tabpanel" class="tab-pane" id="profile"> <b>Contenu du pr?l?vement d?j? effectu?</b>
										<table id="example9" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>
													<th>Patient</th>
													<th>Acte laboratoire</th>
													<th>M?d?cin prescripteur</th>
													<th>Pr?l?vement</th>
												</tr>
											</thead>
										   
											<tbody>
											<?php foreach($listeTube AS $le){ ?>
												<tr>
													<td><?php echo '<b>'.$le->pat_sPrenom.' '.$le->pat_sNom .'</b> ('.$le->pat_sMatricule.')'; ?></td>
													<td><?php echo $le->lac_sLibelle ; ?></td>
													<td class="text-center" style="font-size:13px">
														<?php if(is_null($le->per_sAvatar)){ ?>
															<i>La prescription est externe de l'h?pitale</i><br><br>
															<?php echo $le->ala_sTitre." ".$le->ala_sNom." ".$le->ala_sPrenom; ?>
															<br><br>
															<?php if(!is_null($le->ala_sPrescription)){ ?><a href="<?php echo base_url($le->ala_sPrescription); ?>" target="_blank"><i class="fa fa-download"></i> T?l?charger</a>
															<?php }}else{echo "<img src='".base_url($le->per_sAvatar)."' width='50' height='50'/><br><b>".$le->per_sNom.'</b> '.$le->per_sPrenom." <br>(".$le->per_sMatricule.")";} ?>
													</td>
													<td class="">
														<table>
															<tr>
																<th>El?ment analyse</th>
																<th>Type examen</th>
																<th>Num?ro</th>
																<th>Code ? barre</th>
															</tr>
															
															<?php $list = $this->md_laboratoire->liste_element_exament_tube($le->ala_id); foreach($list AS $l){?>
																<tr>
																	<td><?=$l->ela_sLibelle;?></td>
																	<td><?=$l->tex_sLibelle;?></td>
																	<td><?=$l->tan_sNum;?></td>
																	<td><img src="<?php echo base_url($l->tan_sImg) ;?>" style="width:50%"/></td>
																</tr>
															<?php };?>
														</table>
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
					
                </div>
                          
            </div>
                 
        </div>
    </div>
</section>

<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modals-default" role="document" style="margin-top:5px">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Compl?ter la prescription</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="prelev">
								<div class="retour"></div>
								<div>
									<label>Choisir titre *</label><br>
									<select name="titre" style="width:100%;padding:5px">
										<option value="Dr.">Docteur</option>
										<option value="Pr.">Professeur</option>
										<option value="">Pas de tire</option>
									</select>
									<br><br>
								</div>
								<div>
									<label>Nom du prescripteur *</label><br>
									<input type="text" class="obligatoire" name="nom" style="width:100%"/><br><br>
								</div>
								<div>
									<label>Pr?nom du prescripteur</label><br>
									<input type="text" class="" name="prenom" style="width:100%"/><br><br>
								</div>
								<div>
									<label>Joindre la prescription</label>
									<input type="file" name="prescrip" style="width:100%"/>
									<input type="hidden" name="id" id="id" value=""/>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			
			</div>
            <div class="modal-footer">
                <a href="javascript:();" class="btn btn-success waves-effect addPrelevement" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>