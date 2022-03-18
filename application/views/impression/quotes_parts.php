<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $liste = $this->md_parametre->liste_specification_maladie_actifs(); 

//var_dump($valeur);
$Tab=explode("--",$valeur);
$id=$Tab[0];
$pourcentage=$Tab[1];
$debut=$Tab[2];
$fin=$Tab[3];
$info = $this->md_parametre->info_structure(); 
$per = $this->md_personnel->recup_personnel($id); 
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
					<td  align="left"><strong>Titre :</strong><?php echo $per->per_sTitre;?> </br><strong>Nom :</strong> <?php echo $per->per_sNom;?> </br><strong>Prenom : </strong><?php echo $per->per_sPrenom;?></td>
					<td  align="right">le : <?php echo date("d-m-Y");?></td>
				</tr>
				
			</table>
			<table style="width:100%;">
				<?php //var_dump($pourcentage,$id,$debut,$fin); ?>
				<?php $montant = $this->md_patient->solde_qoute_part_imagerie_actifs($id,$pourcentage,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php $montant1 = $this->md_patient->solde_qoute_part_laboratoire_actifs($id,$pourcentage,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php $montant2 = $this->md_patient->solde_qoute_part_reeducation_actifs($id,$pourcentage,$debut,$fin); ?>
				<?php $montant3 = $this->md_patient->solde_qoute_part_exploration_actifs($id,$pourcentage,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php //var_dump($montant,$montant1,$montant2,$montant3); ?>
				<?php $liste = $this->md_patient->liste_prescription_imagerie($id,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php $liste1 = $this->md_patient->liste_prescription_laboratoire($id,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php $liste2 = $this->md_patient->liste_prescription_reeducation($id,$debut,$fin); ?>
				<?php $liste3 = $this->md_patient->liste_prescription_exploration($id,$debut." 00:00:00",$fin." 23:59:59"); ?>
				<?php //var_dump($liste,$liste1,$liste2,$liste3); ?>
				<?php $Total = 0; ?>
				
				
				<?php if( count($liste) > 0 OR  count($liste1) > 0 OR  count($liste2) > 0 OR  count($liste3) > 0){ ?>
				<tr style="width:100%;">
					<td>
						<table class="table" style="width:100%;padding-top:20px;" cellspacing="0" border="1">
							
							<tr>
								<th>Prescription</th>
								<th>Date</th>
								<th>Montant</th>
								<th>Quote part(%)</th>
							</tr>
							
							
							
							
							
							
							
							<?php foreach($liste as $l){ ?>
							<?php $Total += $l->lac_iCout; ?>
							<tr>
								<td><?php echo $l->lac_sLibelle?></td>
								<td><?php echo $this->md_config->dateTimeEN2FR($l->img_dDate); ?></td>
								<td><?php echo $l->lac_iCout; ?></td>
								<th><?php echo $pourcentage; ?></th>
							</tr>
							<?php } ?>
							
							<?php foreach($liste1 as $l1){ ?>
							<?php $Total += $l1->lac_iCout; ?>
							<tr>
								<td><?php echo $l1->lac_sLibelle?></td>
								<td><?php echo $this->md_config->dateTimeEN2FR($l1->lab_dDate); ?></td>
								<td><?php echo $l1->lac_iCout; ?></td>
								<th><?php echo $pourcentage; ?></th>
							</tr>
							<?php } ?>
							
							<?php foreach($liste2 as $l2){ ?>
							<?php $Total += $l2->lac_iCout; ?>
							<tr>
								<td><?php echo $l2->lac_sLibelle?></td>
								<td><?php echo $this->md_config->dateEN2FR($l2->ree_dDate); ?></td>
								<td><?php echo $l2->lac_iCout; ?></td>
								<th><?php echo $pourcentage; ?></th>
							</tr>
							<?php } ?>
							
							<?php foreach($liste3 as $l3){ ?>
							<?php $Total += $l3->lac_iCout; ?>
							<tr>
								<td><?php echo $l3->lac_sLibelle?></td>
								<td><?php echo $this->md_config->dateTimeEN2FR($l3->efc_dDate); ?></td>
								<td><?php echo $l3->lac_iCout; ?></td>
								<th><?php echo $pourcentage; ?></th>
							</tr>
							<?php } ?>
						</table>
					</td>
				</tr>
				<tr style="width:100%;">
					<td>
						<table class="table" style="width:100%;">
							
							<tr style="width:100%;">
								<td  align="right" colspan="4"><strong>Total :</strong> <?php echo $Total; ?> FCFA</td>
							</tr>
							<tr style="width:100%;">
								<td colspan="4" align="right"><strong>Quote part :</strong> <?php echo number_format($montant->montant+$montant1->montant+$montant2->montant+$montant3->montant,0,",","."); ?> FCFA</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php }else{ ?>
					<tr>
						<td colspan="4">
							<i>Auccune prescription</i>
						</td>
					</tr>
				<?php } ?>
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