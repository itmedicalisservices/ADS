﻿<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	
	$listeEncours = $this->md_patient->liste_acm_dossier(date("Y-m-d H:i:s"),$user->ser_id);

 ?>
<section class="content home">
    <div class="container-fluid">
       
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Historique des patients du service</h2>
							
							</div>
							<div class="body table-responsive">
								<table id="example" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>N° Matricule</th>
											<th>Nom</th>
											<th>Prénom</th>
											<th>Acte médical</th>
											<th>jours de consultation</th>
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
												<a href="<?php echo site_url("gynecologie/voir/".$le->acm_id); ?>"><b>Voir</b></a> | 
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
            
		           
        </div>
    </div>
</section>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>