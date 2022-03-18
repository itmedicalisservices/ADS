
<?php 
	include(dirname(__FILE__) . '/../includes/header.php');
	$fait = date("Y-m-d");
	$maDate = strtotime($fait."- 120 days");
	$delai = date("Y-m-d",$maDate);

	$date = new DateTime();
    $premier = $date->format('Y-m-01');
	$dernier = $date->format('Y-m-t');

	$data = $this->input->post();
		
	if (!empty($data['dernierJour']) || !empty($data['premierJour'])) {
		$premier = $data['premierJour'];
		$dernier = $data['dernierJour'];
	}
	$NbrePatPer  = $this->md_patient->liste_stats_patient_encours($delai,date('Y-m-d'));
	// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
	$NbrePatDec  = $this->md_patient->stats_nombre_deces_encours($delai,date('Y-m-d'));
	$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($delai,date('Y-m-d'));
	// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
	$NbrePDiag  = $this->md_patient->stats_diagnostiques_encours($delai,date('Y-m-d'));
	$diagnostique = $this->md_patient->stats_diagnostiques($delai,date('Y-m-d'));
	$statService = $this->md_patient->stats_services($delai,date('Y-m-d'));
	$liste = $this->md_patient->liste_cause_deces();

	$aujourdhui = date("Y-m-d");

	$maDateMoinun = strtotime($aujourdhui."- 365 days");
	//var_dump($maDateMoinun);
	$moinsun = date("Y-m-d",$maDateMoinun);
	//var_dump($moinsun);
	$maDate15 = strtotime($aujourdhui."- 5475 days");
	$m15 = date("Y-m-d",$maDate15);

	$maDate1517 = strtotime($aujourdhui."- 6205 days");
	$m1517 = date("Y-m-d",$maDate1517);

	$maDate1835 = strtotime($aujourdhui."- 12775 days");
	$m1835 = date("Y-m-d",$maDate1835);

	$maDate36plus = strtotime($aujourdhui."- 13140 days");
	$m36plus = date("Y-m-d",$maDate36plus);
?>
<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>Mortalité maternelle par age et cause de deces</h2>
            <small class="text-muted"></small>
        </div>
		
		<!---->
		<!--<?php var_dump($resh) ;?>-->
		<!--<?php var_dump($hospitalise) ;?>-->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Rapport SNIS</h2>
						<?php //var_dump($liste) ;?>
					</div>
					<div class="body">
						<form id="malade-hos" action="" method="post">
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
									<button type="submit" class="btn btn-raised bg-blue-grey" id="malhos">Valider</button>
								</div>
							</div>
						</form>
					</div>
					<h2 class="header h4">2.10 MORTALITE MATERNELLE PAR AGE ET CAUSE DE DECES
						<br><a class="small" href="<?php echo site_url("impression/mortalite_maternelle/$premier/$dernier"); ?>">Imprimer</a></h2>

						<div class="table-responsive"> 
							<table id="example1" class="table table-bordered table-striped table-hover">
								<thead>
									<tr> 
										<th  class="text-center" style="background:rgb(255,149,149)" rowspan="2">Causes (1)</th>
										<th  class="text-center" rowspan="2">Code CIM (2)</th>
										<th  class="text-center"  colspan="4" >Décès par tranches d'âge (3)</th>
										<th  class="text-center" rowspan="2">Total (4)</th>
									</tr>
									<tr> 
										<th class="text-center" >-15 ans</th>
										<th class="text-center" >15 - 17 ans</th>
										<th class="text-center" >18 - 35 ans</th>
										<th class="text-center" >36 ans et +</th>
									</tr>
									
								</thead>
								<tbody class="corps">
									<?php $cpt=1; 
									$som_1=0;$som_2=0; $som_3=0;$som_4=0;$som_5=0;
									$som_6=0;$som_7=0; $som_8=0;$som_9=0;$som_10=0;
									$som_11=0;$som_12=0; $som_13=0;$som_14=0;$som_15=0;
									$som_16=0;$som_17=0; $som_18=0;$som_19=0;$som_20=0;$som_21=0;$som_22=0;

									foreach($liste AS $l) { ?>	
									<tr> 
										<?php // 44 c'est id de le fonctionalite ?>
										<td ><?php echo $l->dec_sCause; ?></td>
										<td  align="center"></td>
										<td align="center"><?php $RM15 = $this->md_patient->rapport_mortalite_moins_15(44,$l->dec_sCause,$m15,$premier,$dernier); echo $RM15->nb;$som_1=$som_1+$RM15->nb;?></td>
										<td align="center"><?php $RM1517 = $this->md_patient->rapport_mortalite_15_17(44,$l->dec_sCause,$m1517,$m15,$premier,$dernier); echo $RM1517->nb;$som_2=$som_2+$RM1517->nb;?></td>
										<td align="center"><?php $RM1835 = $this->md_patient->rapport_mortalite_18_35(44,$l->dec_sCause,$m1835,$m1517,$premier,$dernier); echo $RM1835->nb;$som_3=$som_3+$RM1835->nb;?></td>

										<td align="center"><?php $RM36plus = $this->md_patient->rapport_mortalite_36plus(44,$l->dec_sCause,$m36plus,$premier,$dernier); echo $RM36plus->nb;$som_4=$som_4+$RM36plus->nb;?></td>

										<td align="center"><?php echo $som_1+$som_2+$som_3+$som_4+$som_5; ?></td>
										
										
									</tr>
									<?php }?>
								</tbody>
								
							</table>
							
						</div>
						
				</div>
			</div>
			
		</div>
		
        </div>
        
	</div>

</section>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>