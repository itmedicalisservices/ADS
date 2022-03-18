
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure(); 
$sej = $this->md_patient->sejour($id);
$acm = $this->md_patient->acm_patient($sej->acm_id);
$patient = $this->md_patient->recup_patient($acm->pat_id); 
$elt = $this->md_patient->laboratoire_sejour($id);
//var_dump($acm,$id);
// die();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prescription examen laboratoire</title>
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
			<?php

// var_dump($elt);

?>
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
					<td style="font-size:25px; height:20px; font-weight:bold" align="center">Prescription examen laboratoire</td>
				</tr>
				
			</table>
			<br>
		 <!-- Corps de reçu -->
			
			<table style="width:70%; font-size:12px; margin-left:15%" border="1" cellspacing="0">
				<thead>
					<th>Examen(s) à faire</th>
				</thead>
				<tbody class="corps">
				<?php foreach($elt AS $e){ ?>
					<tr style="height:30px">  
						<td><?php echo $e->lac_sLibelle; ?></td>
					</tr>
				<?php }	?>
				</tbody>
			</table>
			
			<table class="footer" style="width:100%; font-weight:bold; font-size:12px">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u><?php echo $info->str_sEmail   ;?></u></i></span></span>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px" align="center">tel:<?php echo $info->str_sTel   ;?></td>
				</tr>
			
			</table>
				
		</div>
	</body>
</html>