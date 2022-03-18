<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $liste = $this->md_parametre->liste_specification_maladie_actifs(); 

//var_dump($valeur);
$Tab=explode("--",$valeur);
$id=$Tab[0];
$debut=$Tab[1];
$fin=$Tab[2];
$info = $this->md_parametre->info_structure(); 
$pre = $this->md_parametre->recup_prescripteur_actif($id); 
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
			
			<table style="width:100%;">
				<tr style="width:100%;">
					<td  align="left"><strong>Titre :</strong><?php echo $pre->pre_sTitre;?> </br><strong>Nom :</strong> <?php echo $pre->pre_sNom;?> </br><strong>Prenom : </strong><?php echo $pre->pre_sPrenom;?></td>
					<td  align="right">le : <?php echo date("d-m-Y");?></td>
				</tr>
				
			</table>
			<table style="width:100%;">
				<tr style="width:100%;">
					<td>
						<table class="table" style="width:100%;padding-top:20px;" cellspacing="0" border="1">
							
							<tr>
								<th>Prescription</th>
								<th>Date</th>
								<th>Montant</th>
								<th>Ristourne(%)</th>
							</tr>
							
							<?php $montant = $this->md_patient->solde_prescripteur_actifs($id,$debut,$fin); ?>
							<?php $liste = $this->md_patient->liste_prescriptions($id,$debut,$fin); ?>
							
							<?php $montant_presc=0; ?>
							<?php if(count($liste) > 0){ ?>
							<?php foreach($liste as $l){ ?>
							<?php $montant_presc +=$l->fac_iMontant; ?>
							<tr>
								 
								<td><?php echo $l->lac_sLibelle; ?></td>
								<td><?php echo $l->fac_dDatePaie; ?></td>
								<td><?php echo $l->fac_iMontant; ?></td>
								<th><?php echo $l->pre_iPourcentage; ?></th>
							</tr>
							<?php } ?>
							
							<?php }else{ ?>
							<tr>
								<td colspan="4"><i>Accune prescription</i></td>
							</tr>
							<?php } ?>
								
						</table>
					</td>
				</tr>
				
				<tr style="width:100%;">
					<td>
						<table class="table" style="width:100%;" cellspacing="0">
							<?php if(count($liste) > 0){ ?>
							<tr style="width:100%;">
								<td  align="right"><strong>Total :</strong> <?php echo number_format($montant_presc,0,",","."); ?> FCFA</td>
							</tr>
							<tr style="width:100%;">
								<td  align="right"><strong>Ristourne :</strong> <?php echo number_format($montant->montant,0,",","."); ?> FCFA</td>
							</tr>
							<?php } ?>
						</table>
					</td>
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