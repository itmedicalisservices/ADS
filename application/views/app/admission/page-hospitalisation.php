<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>

<?php $acm = $this->md_patient->acm_patient($demande->acm_id); ?>
<?php $patient = $this->md_patient->recup_patient($acm->pat_id); ?>

<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Demande d'hospitalisation du patient : <?php echo $demande->pat_sNom." ".$demande->pat_sPrenom; ?></h2>
            <small class="text-muted" style="text-transform:uppercas">
				<div class="row clearfix">
					
					<div class="col-lg-3 col-md-12 col-sm-12">
						Dans l'unité : <b><?php echo $demande->uni_sLibelle;?></b>
					</div>
					<div class="col-lg-3 col-md-12 col-sm-12">
						Par : <b><?php echo $demande->per_sNom." ".$demande->per_sPrenom;?>
					</div>
					
				</div>
			</small>
        </div>        
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
                        <div class="header" style="margin-top:45px">
                            <h2>prescription d'Hospitalisation <small>renseignez tous les champs marqués par des (*)</small> </h2>
                            
                        </div>
					<div class="body">
                    <?php if(is_null($demande->dem_iMaternite)){ ?>
                        <form id="form-hos">
                            <div class="row clearfix">
                                <div class="col-sm-12 retour-hos"></div>
                                <div class="col-sm-12 retour-hostFinal"></div>
                                <!--<div class="col-sm-6">
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
                                </div>-->
                                <div class="col-sm-3">
                                    <div class="form-line">
                                        <label style="color:#000"><b>Chambre *</b></label>
                                        
                                        <?php $liste_chambre = $this->md_parametre->liste_chambre_unite_dispo($demande->uni_id); ?>
                                        <div class="form-group drop-custum">
                                            <select name="cha" class="form-control chambrePresc obligatoire show-tick">
                                                <option value="">-- Choisir la chambre --</option>
                                                <?php foreach($liste_chambre as $l){ ?>
                                                    <option value="<?php echo $l->cha_id; ?>"><?= $l->cha_sLibelle; ?></option>
                                                <?php } ?>
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
                                            <input type="hidden" value="<?php echo $demande->dem_id; ?>" name="dem">
                                            <input type="hidden" value="<?php echo $demande->uni_id; ?>" name="uni">
                                            <input type="hidden" value="<?php echo $demande->acm_id; ?>" name="id">
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
                                    <button type="submit" class="btn btn-raised bg-blue-grey" id="enregistrerHospi">HOSPITALISER</button>
                                </div>
                            </div>
                        </form>
                    <?php }else{?>
                        <form id="form-hos">
                            <div class="row clearfix">
                                <div class="col-sm-12 retour-hos"></div>
                                <div class="col-sm-12 retour-hostFinal"></div>
                                <!--<div class="col-sm-6">
                                    <div class="form-line">
                                        <label style="color:#000"><b>Unit� *</b></label>
                                        <div class="form-group drop-custum">
                                            <select name="uni" class="form-control unitePresc obligatoire show-tick">
                                                <option value="">------------ Choisir l'unit� --------------</option>
                                                <?php $unites = $this->md_parametre->liste_unite_services_actifs($user->ser_id);foreach($unites AS $u){?>
                                                    <option value="<?php echo $u->uni_id; ?>"><?php echo $u->uni_sLibelle; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>-->
                                <div class="col-sm-4">
                                    <div class="form-line">
                                        <label style="color:#000"><b>Chambre *</b></label>
                                        <?php $liste_chambre = $this->md_parametre->liste_chambre_unite_dispo($demande->uni_id); ?>
                                        <div class="form-group drop-custum">
                                            <select name="cha" class="form-control chambrePresc obligatoire show-tick">
                                                <option value="">-- Choisir la chambre --</option>
                                                <?php foreach($liste_chambre as $l){ ?>
                                                    <option value="<?php echo $l->cha_id; ?>"><?= $l->cha_sLibelle; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-line">
                                        <label style="color:#000"><b>Lit *</b></label>
                                        <div class="form-group drop-custum">
                                            <select name="lit" class="form-control litPresc obligatoire show-tick">
                                                <option value="">-- Choisir le lit --</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
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
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label style="color:#000"><b>Motif *</b></label>
                                            <textarea name="motif" class="form-control obligatoire"></textarea>
                                            <input type="hidden" value="<?php echo $demande->dem_id; ?>" name="dem">
                                            <input type="hidden" value="<?php echo $demande->uni_id; ?>" name="uni">
                                            <input type="hidden" value="<?php echo $demande->acm_id; ?>" name="id">
                                            <input type="hidden" value="<?php echo $patient->pat_id; ?>" name="pat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row clearfix">
                                
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-raised bg-blue-grey" id="mat">MATERNER</button>
                                </div>
                            </div>
                        </form>
                    <?php }?>
				</div>
			</div>
        </div>
    </div>
</section>


<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>