<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rapport</title>
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
			
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:25px; height:20px; font-weight:bold" align="center">RAPPORT MENSUEL SNIS</td>
				</tr>
			</table>
			<br>
		 <!-- Corps de reçu -->
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:15px; height:16px; font-weight:bold" align="center">7.1- MATERIEL LOURD</td> 
				</tr>
			</table>
			<br>
			<table style="width:100%; font-size:12px" border="1" cellspacing="0">
				<thead>
					<tr> 
						<th rowspan="2">Désignation</th>
						<th class="text-center" colspan="3">Quantité</th>
						<th rowspan="2">Total</th>
					</tr>
					<tr> 
						<th>Bon</th>
						<th>En panne</th>
						<th>Hors d'usage</th>
					</tr>
				</thead>
				<tbody class="corps">
					<?php
					$eqLourd = $this->md_patient->liste_materiel_par_type("Matériel Lourd",$premier,$dernier); 
					foreach($eqLourd AS $eq) {?>
					<tr> 
						<td><?php echo $eq->mat_sLib; ?></td>
						<td align="center"><?php $Eq1 = $this->md_patient->nbEquipement($eq->mat_sLib,"Bon"); echo $Eq1->nb; ?></td>
						<td align="center"><?php $Eq2 = $this->md_patient->nbEquipement($eq->mat_sLib,"En panne"); echo $Eq2->nb; ?></td>
						<td align="center"><?php $Eq3 = $this->md_patient->nbEquipement($eq->mat_sLib,"Hors d'usage"); echo $Eq3->nb; ?></td>
						<td align="center"><?php echo $Eq1->nb + $Eq2->nb + $Eq3->nb; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<table class="footer" style="width:100%; font-weight:bold; font-size:12px">
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