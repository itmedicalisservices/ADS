<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure(); 
$acm = $this->md_patient->acm_patient($id);
$patient = $this->md_patient->recup_patient($acm->pat_id); 
$c = $this->md_patient->consultation_sejour($id);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Consultation</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0px;}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }

		</style>
		<!--<script type="text/javascript" src="assets/js/imprimer.js')"></script>-->
	</head>
	<body style="font-family:verdana">
		<div style="padding:10px 30px 0px 30px" >
			<!-- En-tête du reçu -->
			<table style="width:100%; height:100px" >
				<tr>
					<td  align="left" ><img src="<?php echo base_url($patient->pat_sAvatar);?>" style="width:40px; height:40px" border="0" /></td>
					<td  align="right" ><img src="<?php echo base_url($info->str_sLogo) ;?>" style="width:40px; height:40px" border="0" /></td>
				</tr>	
			</table>
			<table style="width:100%; height:50px; font-size:10px">
				<tr>
					<td  style="width:40%">Nom (s): <?php echo $patient->pat_sNom;?> </td>
				</tr>
				<tr>
					<td  style="width:40%">Prénom(s): <?php echo $patient->pat_sPrenom;?> </td>	
				</tr>
				<tr>
					<td  style="width:40%">ID: <?php echo $patient->pat_sMatricule;?></td>	
				</tr>
			</table>
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:25px; height:20px; font-weight:bold" align="center">Consultation</td>
				</tr>
				
			</table>
			<br>
		 <!-- Corps de reçu -->
			<h4>* Motif de consultation</h4>
			<div style="width:80%; border:2px solid black; padding:10px 5px 10px 5px; margin:0px 100px 0px 100px">
				<p><?php echo $c->csl_sMotif; ?></p>
			</div>
			
			<h4>* Examen clinique</h4>
			<div style="width:80%; border:2px solid black; padding:10px 5px 10px 5px; margin:0px 100px 0px 100px">
				<p><?php echo $c->csl_sObservation; ?></p>
			</div>
			
			<h4>* Anamnèse</h4>
			<div style="width:80%; border:2px solid black; padding:10px 5px 10px 5px; margin:0px 100px 0px 100px">
				<p><?php echo $c->csl_sAnamnese; ?></p>
			</div>
			
			
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