<?php 
	include(dirname(__FILE__) . '/../includes/header.php');


	$date = new DateTime();
    $premier = $date->format('Y-m-01');
	$dernier = $date->format('Y-m-t');

	$data = $this->input->post();
		
	if (!empty($data['dernierJour']) || !empty($data['premierJour'])) {
		$premier = $data['premierJour'];
		$dernier = $data['dernierJour'];
	}
	

?>
<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>Compteur des actes médicaux</h2>
            <small class="text-muted"></small>
			<?php //var_dump($liste);?>
        </div>
		
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Période</h2>
					</div>
					<div class="body">
						<form id="form-compteur" action="<?php echo site_url('impression/cptActes') ;?>" method="post">
							<div class="row clearfix">
								<div class="col-sm-10 retour"></div>
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
									<button type="submit" class="btn btn-raised bg-blue-grey" id="cptAct">Valider</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
            
        </div> 
        
	</div>

</section>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>