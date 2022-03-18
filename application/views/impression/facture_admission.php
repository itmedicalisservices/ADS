<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $liste = $this->md_parametre->liste_specification_maladie_actifs(); 

//var_dump($premier,$dernier);
$info = $this->md_parametre->info_structure();


$acmHos = $this->md_patient->liste_element_caisse_hos_patient($id);
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
					<td  align="center" ><img src="<?php echo base_url($info->str_sLogo) ;?>" width="120px" height="90px" /><br><span style="font-weight:bold;font-size:18pt"><?php echo $info->str_sEnseigne  ;?><span></td>
				</tr>
			</table>
			<table style="width:100%; height:20px;margin-top:20px;">
				<tr>
					<td  style="width:50%"><span style="font-weight:bold">Patient:</span> <?php echo $acmHos[0]->pat_sNom.' '.$acmHos[0]->pat_sPrenom  ;?></td>
					<td align="right" style="width:50%"><span style="font-weight:bold">Date:</span> <span style="text-align:right"><?php echo date("Y-m-d") ; ?></span></td>
				</tr>
				<tr>
					<td  style="width:50%;padding-top:-2px"><span style="font-weight:bold">Matricule:</span> <?php echo $acmHos[0]->pat_sMatricule ;?>  </td>	
					<td align="right"   style="width:50%;padding-top:-2px"><span style="font-weight:bold"></td>
				</tr>				
				
			</table>	
			<table class="table" style="width:100%;padding-top:20px;clear:both;" align="right" cellspacing="0" border="1">
				
				<tr>
					<th>Acte Medical</th>
					<th>Coût(FCFA)</th>
					<th>Date</th>
				</tr>
				
				<?php  //var_dump($liste)?>
				<?php $montant=0; ?>
				<?php foreach($acmHos as $ACM){ ?>
						<?php $montant +=$ACM->lac_iCout; ?>
						<tr>
							<td>
								<?php 
								if(is_null($ACM->acm_sDent)){
										$dent = "";
									}
									else{
										$dent = " - ".$ACM->acm_sDent;
									} echo $ACM->lac_sLibelle.$dent ; 
								?>
							</td>
							<td>
								<?php echo number_format($ACM->lac_iCout,0,",","."); ?>
							</td>
							<td>
								<?php echo $this->md_config->affDateTimeFr($ACM->acm_dDate); ?>
							</td>
						</tr>
				<?php } ?>
					
			</table>
			<table class="table" style="width:100%;padding-top:70px;clear:both;" align="right" cellspacing="0">
				<tr>
					
					<td  align="right"><br><br><strong>Total:</strong> <?php echo $montant;?> FCFA</td>
				</tr>
			</table>
			<!-- Pied de page
			<table class="footer" style="width:100%;font-weight:bold; font-size:12px">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u>magasin@medicalis.com</u></i></span></span>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px" align="center">tel:(+242) 06 839 20 56 / 06 888 52 88 / 06 598 58 87</td>
				</tr>
			
			</table>-->
				
		</div>
		
	</body>
</html>