<?php 
	include(dirname(__FILE__) . '/../includes/header.php');
	$fait = date("Y-m-d");
	$maDate = strtotime($fait."- 120 days");
	$delai = date("Y-m-d",$maDate). "\n";

	$date = new DateTime();
    $premier = $date->format('Y-m-01');
	$dernier = $date->format('Y-m-t');

	$data = $this->input->post();
		
	if (!empty($data['dernierJour']) || !empty($data['premierJour'])) {
		$premier = $data['premierJour'];
		$dernier = $data['dernierJour'];
	}

   // $liste = $this->md_pharmacie->liste_entrees_avec_parametre($premier,$dernier);
    $liste = $this->md_pharmacie->Liste_medicaments();
?>
<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>Gestion des medicaments</h2>
            <small class="text-muted"></small>
        </div>
		
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Rapport SNIS</h2>
						
					</div>
					<div class="body">
						<form id="rapport-epidem" action="" method="post">
							<div class="row clearfix">
								<div class="col-sm-10 retour">
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Du<input type="date" name="premierJour" value="<?php if(!empty($premier)){echo $premier;} ?>" class="form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								<div class="col-sm-5">
									<div class="form-group">
										Au<input type="date" name="dernierJour" value="<?php if(!empty($dernier)){echo $dernier;} ?>" class="form-control obligatoire" placeholder="Sélectionner la date">
									</div>
								</div>
								
								<div class="col-sm-2">
								<br><br>
									<button type="submit" class="btn btn-raised bg-blue-grey" id="epidem">Valider</button>
								</div>
							</div>
						</form>
                        <h2 class="header h4"><a class="small" href="<?php echo site_url("impression/gestion_des_medicaments/$premier/$dernier"); ?>">Imprimer</a></h2>

                        <div class="body table-responsive"> 
                            <div class="text-center" style="color:red"></div>
                                <table id="example" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr> 
                                            <th>Médicaments et dispositifs médicaux (1)</th>
                                            <th>Nombre de jours de rupture (2)</th>
                                            <th>Observation (3)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="corps">
                                        <?php 
                                        $Total=0;/*$som_1=0; $som_2=0;
										$origin = new DateTime('2010-10-13');
										$target = new DateTime('2009-10-13');
										$interval = $origin->diff($target);
										var_dump($interval);*/
                                        foreach($liste as $l) {
                                       
											
										?>
                                        <tr> 
                                            <td><?php echo $l->med_sNc.' '.$l->med_iDosage.' '.$l->med_sUnite.' '.$l->for_sLibelle ?></td>
											<?php 	
												$listeRupture = $this->md_pharmacie->nb_jours_rupture($l->med_id,$premier,$dernier);
												foreach($listeRupture as $lr) {
														if(!is_null($lr->his_dDateFinRup)){
															$Total += $lr->his_dDateFinRup->diff($lr->his_dDateDebutRup)->days;
														}else{
															$Total += date("Y-m-d")->diff($lr->his_dDateDebutRup)->days;
														}
												}
											?>
												
											<td class="center"><?php echo $Total; ?></td>
                                            <td class="center"></td>
                                        </tr>
                                        <?php 
											}
										?>
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

</section>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>