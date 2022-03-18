<?php 
	
	$listeEncours = $this->md_patient->liste_demande();
	//$listeExpire = $this->md_patient->liste_acm_expire(date("Y-m-d H:i:s"),$this->md_config->get_session());

 ?>
<section class="content home">
    <div class="container-fluid">
       
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Demande d'hospitalisation en attentes de validation</h2>
							</div>
							<div class="body table-responsive">
								<table id="example1" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>Medecin</th>
											<th>Patient</th>
											<th>Unite</th>
											<th>Date de la demande</th>
											<th style="width:60px">Action</th>
										</tr>
									</thead>
								   
									<tbody>
									<?php foreach($listeEncours AS $le){ ?>
										<tr>
											<td><?php echo $le->per_sNom." ".$le->per_sPrenom; ?></td>
											<td><?php echo $le->pat_sNom." ".$le->pat_sPrenom; ?></td>
											<td><?php echo $le->uni_sLibelle; ?></td>
											<td><?php echo $this->md_config->affDateTimeFr($le->dem_dDate); ?></td>
											<td class="text-center">
												<a href="<?php echo site_url("admission/hospitalisation/".$le->dem_id); ?>" class="btn bg-blue-grey waves-effect btn-sm" style="color:#fff"><b>Hospitaliser</b></a>
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