<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $liste = $this->md_parametre->liste_specification_maladie_actifs(); 

//var_dump($premier,$dernier);
$Tab=explode("-",$valeur);
$info = $this->md_parametre->info_structure(); 
//$total=$this->md_patient->nb_Impresion_recouvrement_assurance($id,$this->md_config->recupDateTime($debut),$this->md_config->recupDateTime($fin));

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Montant à recouvrer à l'assurance</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0px;}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }
		</style>
	</head>
	<body style="font-family:verdana">
		<div style="padding:10px 30px 0px 30px" >
			<!-- En-tête du reçu -->
			<table align="center">
				<tr>
					<td  align="center" ><img src="<?php echo base_url($info->str_sLogo) ;?>" width="100px" height="100px" /><br><span style="font-weight:bold;font-size:18pt"><?php echo $info->str_sEnseigne  ;?><span></td>
				</tr>
			</table>
			<table class="table" style="width:100%;padding-top:100px;clear:both;" align="right" cellspacing="0" border="1">
				
				<tr>
					<th>Assureur</th>
					<th>Type d'assurance</th>
					<th>Patient</th>
					<th>Montant</th>
					<th>Date</th>
				</tr>
				
				<?php  //var_dump($liste)?>
				<?php $montant=0; ?>
				<?php for($i=0;$i< count($Tab);$i++){ ?>
				<?php $liste=$this->md_patient->Impression_recouvrement_assurance($Tab[$i]); ?>
						<?php $montant +=$liste->fac_iMontantAss; ?>
						<tr >
							<td><?php echo $liste->ass_sLibelle;?></td>
							<td><?php echo $liste->tas_iTaux;?>%</td>
							<td><?php echo $liste->pat_sNom." ".$liste->pat_sPrenom;?></td>
							<td><?php echo number_format($liste->fac_iMontantAss,0,",",".");?> <small>Fcfa</small></td>
							<td><?php echo $this->md_config->affDateFrNum($liste->fac_dDatePaie);?></td>
							
						</tr>
					
				<?php } ?>
					
			</table>
			<table class="table" style="width:100%;padding-top:150px;clear:both;" align="right" cellspacing="0">
				<tr>
					
					<td  align="right"><br><br><strong>Total:</strong> <?php echo $montant;?> FCFA</td>
				</tr>
			</table>
			<!-- Pied de page-->
			<table class="footer" style="width:100%;font-weight:bold; font-size:12px">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u>magasin@medicalis.com</u></i></span></span>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px" align="center">tel:(+242) 06 839 20 56 / 06 888 52 88 / 06 598 58 87</td>
				</tr>
			
			</table>
				
		</div>
		
	</body>
</html>