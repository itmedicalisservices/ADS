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
	
$liste = $this->md_patient->liste_maladie_retenue($premier,$dernier); 
$liste2 = $this->md_patient->liste_hospitalisation1($premier,$dernier); 
$aujourdhui = date("Y-m-d");

$maDateMoinun = strtotime($aujourdhui."- 365 days");
//var_dump($maDateMoinun);
$moinsun = date("Y-m-d",$maDateMoinun);
//var_dump($moinsun);
$maDate14 = strtotime($aujourdhui."- 1460 days");
$m14 = date("Y-m-d",$maDate14);

$maDate514 = strtotime($aujourdhui."- 5110 days");
$m514 = date("Y-m-d",$maDate514);

$maDate1549 = strtotime($aujourdhui."- 17885 days");
$m1549 = date("Y-m-d",$maDate1549);

$maDate50plus = strtotime($aujourdhui."- 18250 days");
$m50plus = date("Y-m-d",$maDate50plus);

?>
<section class="content home" style="min-height:700px">
	
    <div class="container-fluid">
        <div class="block-header">
            <h2>Surveillance Epidemiologique de maladies cibles</h2>
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

                        <h2 class="header h4">Accouchements et Naissances
						<br><a class="small" href="<?php echo site_url("impression/rapport_epidemiologie/$premier/$dernier"); ?>">Imprimer</a></h2>

						<div class="table-responsive"> 
							<table id="example1" class="table table-bordered table-striped table-hover">
								<thead>
									<tr> 
										<th  class="text-center" style="background:rgb(255,149,149)" rowspan="3">STRUCTURES (1)</th>
										<th  class="text-center" colspan="3">Type d'accouchement (2)</th>
										<th  class="text-center"  rowspan="3" >A domicile (3)</th>
										<th  class="text-center" rowspan="3">Total (4)</th>
										<th  class="text-center" colspan="16">Naissances (5)</th>
										<th  class="text-center" rowspan="3">Observations (6)</th>
									</tr>
									<tr> 
										<th class="text-center" rowspan="2">Accouchement eutocique</th>
										<th class="text-center" rowspan="2">Accouchement dystocique</th>
										<th class="text-center" rowspan="2">Accouchement par césarien</th>
										<th class="text-center" colspan="2">Mono-foetal</th>
										<th class="text-center" colspan="2">Gémelaire</th>
										<th class="text-center" colspan="2">Enfant vivant(a)</th>
										<th class="text-center" colspan="2">Morts Nées(b)</th>
										<th class="text-center" colspan="2">Prémature (né entre 28 et 37 semaine)</th>
										<th class="text-center" colspan="2">Poids < 2500g</th>
										<th class="text-center" colspan="2">Décès</th>
										<th class="text-center" colspan="2">Total de naissances( a+b )</th>
									</tr>
									
									<tr> 
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
										<th>M</th>
										<th>F</th>
									</tr>
								</thead>
								<tbody class="corps">
									<?php $cpt=1; 
									$som_1=0;$som_2=0; $som_3=0;$som_4=0;$som_5=0;
									$som_6=0;$som_7=0; $som_8=0;$som_9=0;$som_10=0;
									$som_11=0;$som_12=0; $som_13=0;$som_14=0;$som_15=0;
									$som_16=0;$som_17=0; $som_18=0;$som_19=0;$som_20=0;$som_21=0;$som_22=0;

									foreach($liste AS $l) {?>
									<tr> 
										
										<td style="background:rgb(255,149,149)"></td>
										<td  align="center"><?php $NBACCOUEU = $this->md_patient->nb_accouchement(1,$premier,$dernier);echo $NBACCOUEU->nb;$som_1=$som_1+$NBACCOUEU->nb;?></td>
										<td align="center"><?php $NBACCOUDY = $this->md_patient->nb_accouchement(2,$premier,$dernier); echo $NBACCOUDY->nb;$som_2=$som_2+$NBACCOUDY->nb;?></td>
										<td align="center"><?php $NBACCOUCE = $this->md_patient->nb_accouchement(3,$premier,$dernier); echo $NBACCOUCE->nb;$som_3=$som_3+$NBACCOUCE->nb;?></td>
										<td align="center"><?php $NBACCOUDO = $this->md_patient->nb_accouchement_domicile($premier,$dernier); echo $NBACCOUDO->nb;$som_4=$som_4+$NBACCOUDO->nb;?></td>

										<td align="center"><?php echo $NBACCOUEU->nb + $NBACCOUDY->nb + $NBACCOUCE->nb + $NBACCOUDO->nb; $som_5=$som_5+($NBACCOUEU->nb + $NBACCOUDY->nb + $NBACCOUCE->nb + $NBACCOUDO->nb); ?></td>

										<td align="center"><?php $NBNAISSFOEM = $this->md_patient->nb_naissance_foetal("M",$premier,$dernier); echo $NBNAISSFOEM->nb;$som_7=$som_7+$NBNAISSFOEM->nb;?></td>
										<td align="center"><?php $NBNAISSFOEF = $this->md_patient->nb_naissance_foetal("F",$premier,$dernier); echo $NBNAISSFOEF->nb;$som_8=$som_8+$NBNAISSFOEF->nb;?></td>

										<td align="center"><?php $NBNAISSGEM = $this->md_patient->nb_naissance_gemelaire("M",$premier,$dernier); echo $NBNAISSGEM->nb;$som_9=$som_9+$NBNAISSGEM->nb;?></td>
										<td align="center"><?php $NBNAISSGEF = $this->md_patient->nb_naissance_gemelaire("F",$premier,$dernier); echo $NBNAISSGEF->nb;$som_10=$som_10+$NBNAISSGEF->nb;?></td>

										<td align="center"><?php $NBNAISSVIM = $this->md_patient->nb_naissance_vivant(1,"M",$premier,$dernier); echo $NBNAISSVIM->nb;$som_11=$som_11+$NBNAISSVIM->nb;?></td>
										<td align="center"><?php $NBNAISSVIF = $this->md_patient->nb_naissance_vivant(1,"F",$premier,$dernier); echo $NBNAISSVIF->nb;$som_12=$som_12+$NBNAISSVIF->nb;?></td>

										<td align="center"><?php $NBNAISSMOM = $this->md_patient->nb_naissance_vivant(2,"M",$premier,$dernier); echo $NBNAISSMOM->nb;$som_13=$som_13+$NBNAISSMOM->nb;?></td>
										<td align="center"><?php $NBNAISSMOF = $this->md_patient->nb_naissance_vivant(2,"F",$premier,$dernier); echo $NBNAISSMOF->nb;$som_14=$som_14+$NBNAISSMOF->nb;?></td>

										<td align="center"><?php $NBNAISSPREM = $this->md_patient->nb_naissance_prema("M",$premier,$dernier); echo $NBNAISSPREM->nb;$som_15=$som_15+$NBNAISSPREM->nb;?></td>
										<td align="center"><?php $NBNAISSPREF = $this->md_patient->nb_naissance_prema("F",$premier,$dernier); echo $NBNAISSPREF->nb;$som_16=$som_16+$NBNAISSPREF->nb;?></td>

										<td align="center"><?php $NBNAISSPOIM = $this->md_patient->nb_naissance_poids("M",$premier,$dernier); echo $NBNAISSPOIM->nb;$som_17=$som_17+$NBNAISSPOIM->nb;?></td>
										<td align="center"><?php $NBNAISSPOIF = $this->md_patient->nb_naissance_poids("F",$premier,$dernier); echo $NBNAISSPOIF->nb;$som_18=$som_18+$NBNAISSPOIF->nb;?></td>

										<td align="center"><?php $NBNAISSDECESM = $this->md_patient->nb_naissance_deces("M",$premier,$dernier); echo $NBNAISSDECESM->nb;$som_19=$som_19+$NBNAISSDECESM->nb;?></td>
										<td align="center"><?php $NBNAISSDECESF = $this->md_patient->nb_naissance_deces("F",$premier,$dernier); echo $NBNAISSDECESF->nb;$som_20=$som_20+$NBNAISSDECESF->nb;?></td>

										<td align="center"><?php echo $NBNAISSVIM->nb+$NBNAISSMOM->nb; $som_21=$som_21+$NBNAISSVIM->nb+$NBNAISSMOM->nb; ?></td>
										<td align="center"><?php  echo $NBNAISSVIF->nb+$NBNAISSMOF->nb; $som_22=$som_22+$NBNAISSVIF->nb+$NBNAISSMOF->nb; ?></td>
										
										
										<td align="center"></td>
										
									</tr>
									<?php }?>
								</tbody>
								<tfoot>
									<tr>
										<td style="font-size:11.5px;font-weight:bold;background:rgb(255,149,149)" >Total</td>
										<td align="center"><?php echo $som_1 ;?></td>
										<td align="center"><?php echo $som_2 ;?></td>
										<td align="center"><?php echo $som_3 ;?></td>
										<td align="center"><?php echo $som_4 ;?></td>
										<td align="center"><?php echo $som_5 ;?></td>
										<td align="center"><?php echo $som_7 ;?></td>
										<td align="center"><?php echo $som_8 ;?></td>
										<td align="center"><?php echo $som_9 ;?></td>
										<td align="center"><?php echo $som_10 ;?></td>
										<td align="center"><?php echo $som_11 ;?></td>
										<td align="center"><?php echo $som_12 ;?></td>
										<td align="center"><?php echo $som_13 ;?></td>
										<td align="center"><?php echo $som_14 ;?></td>
										<td align="center"><?php echo $som_15 ;?></td>
										<td align="center"><?php echo $som_16 ;?></td>
										<td align="center"><?php echo $som_17 ;?></td>
										<td align="center"><?php echo $som_18 ;?></td>
										<td align="center"><?php echo $som_19 ;?></td>
										<td align="center"><?php echo $som_20 ;?></td>
										<td align="center"><?php echo $som_21 ;?></td>
										<td align="center"><?php echo $som_22 ;?></td>
										<td align="center"></td>
										
									</tr>
								</tfoot>
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