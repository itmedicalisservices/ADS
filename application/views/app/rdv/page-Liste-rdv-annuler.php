<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $listeRdv = $this->md_rdv->liste_des_rdv_annules(); ?>



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">Liste des rendez-vous annulés </h2>
                    </div>
					
					
                    <div class="body table-responsive"> 
					
						<table id="example" class="table table-bordered table-striped table-hover">
						   
							<thead>
								<tr>
									<th>Demandeur</th>
									<th>Date</th>
									<th>Heure</th>
									<th>Destinataire</th>
									<th>Objet</th>
								</tr>
							</thead>
							<?php  //var_dump($liste)?>
							<tbody>

								<?php foreach($listeRdv AS $lr){ ?>
								<tr>
									<td><?php echo $lr->dir_sNom;?>
									 <?php echo $lr->dir_sPrenom;?> </td>
									<td><?php echo $this->md_config->affDateFrNum($lr->dir_dDate);?></td>
									<td><?php echo $lr->dir_tHeure;?></td>
									<td><?php echo $lr->per_sNom;?> <?php echo $lr->per_sPrenom;?> </td>
									<td><?php echo $lr->dir_sObjet;?></td>
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

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>