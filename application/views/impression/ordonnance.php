<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 

$info = $this->md_parametre->info_structure(); 
$ord = $this->md_patient->recup_ordonnance($id); 
$element = $this->md_patient->element_ordonnance($id);
$med = $this->md_personnel->recup_personnel_hospitalisation();
$ord_hospitalisation = $this->md_patient->recup_ordonnance_hospitalisation($id);

// var_dump($ord, $id, $element, $med);
// die();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ordonnance</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0;font-family:'helvetica', sans-serif;font-size:10pt}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }
			.corps td{padding:5px 5px;}

		</style>
		<!--<script type="text/javascript" src="assets/js/imprimer.js')"></script>-->
	</head>
	
	<body>
		<div style="padding:0px 30px 0px 30px" >
			<!-- En-tête du reçu -->
			<table style="width:100%; height:120px" >
				<tr>
					<td  align="left"  style="width:25%">
						<div align="center">
							<span style="font-weight:bold;font-size:3pt">ARMEE DU SALUT<span></br>
							<span>**************</span></br>
							<span style="font-size:2pt">Service de sante</span></br>
							<span >****************<span></br>
							<span style="font-size:2pt"><?php echo $info->str_sEnseigne  ;?></span>
						</div>
					</td>
					<td  align="right" ><img src="<?php echo base_url($info->str_sLogo) ;?>" width="100px" height="100px" /></td>
					
				</tr>
			</table>
			<table style="margin-top:40px">
				<?php if(!is_null($ord)): ?>
					<tr>
						<td align="left" style="font-weight:bold"><?php echo $ord->per_sTitre.' '.$ord->per_sNom.' '.$ord->per_sPrenom  ;?></td>
					</tr>
				<?php else: ?>
					<tr>
						<td align="left" style="font-weight:bold"><?php echo $med->per_sTitre.' '.$med->per_sNom.' '.$med->per_sPrenom  ;?></td>
					</tr>
				<?php endif; ?>
				<tr><td align="left" style="font-weight:bold">Médecin généraliste</td></tr>
			</table>
			<table style="width:100%;">
				<?php if(!is_null($ord)): ?>
					<tr>
						<td style="width:100%;" align="right"><?php echo $ord->ord_dDate ;?></td>
					</tr>
				<?php else: ?>
					<tr>
						<td style="width:100%;" align="right"><?php echo $ord_hospitalisation->ord_dDate ;?></td>
					</tr>
				<?php endif; ?>
			</table>
			<table style="width:100%;margin-top:20px">
				<?php if(!is_null($ord)): ?>
					<tr>
						<td align="right" colspan="2" style="margin-top:2pt;font-weight:bold">Patient : <?php echo $ord->pat_sNom.' '.$ord->pat_sPrenom  ;?></td>
					</tr>
				<?php else: ?>
					<tr>
						<td align="right" colspan="2" style="margin-top:2pt;font-weight:bold">Patient : <?php echo $ord_hospitalisation->pat_sNom.' '.$ord_hospitalisation->pat_sPrenom  ;?></td>
					</tr>
				<?php endif; ?>
			</table>
			<table style="width:100%;margin:40px 0 50px 0">
				<tr> 
					<td style="font-weight:500;font-size:15pt" align="center">ORDONNANCE MEDICALE</td>
				</tr>
				<?php if(!is_null($ord)): ?>
					<tr>
						<td style="width:30%;font-weight:500" align="center">N°: <?php echo $ord->ord_id ;?></td>
					</tr>
				<?php else: ?>
					<tr>
						<td style="width:30%;font-weight:500" align="center">N°: <?php echo $ord_hospitalisation->ord_id ;?></td>
					</tr>
				<?php endif; ?>
			</table>

			<!-- Corps de reçu -->
			<table style="width:100%;" class="corps">
				<thead align="left">
					<th>Produit prescrit</th>
					<th style="">Qté</th>
					<th style="">Posologie</th>
					<th style="">Durée</th>
				</thead>
				<tbody align="left">
					<?php foreach($element AS $e){?>
					<tr>
						<td><?php echo $e->elo_sProduit ;?></td>
						<td><?php echo $e->elo_iQuantite ;?></td>
						<td><?php echo $e->elo_sPosologie ;?></td>
						<td><?php echo $e->elo_iDuree ;?> jour(s)</td>
					</tr>
					<?php }?>
					
				</tbody>
			</table>
			<table>
				<tr>
					<td  align="left" style="width:100%; height:100px">Signature du médecin : 
					</td>
				</tr>
			</table>
		 
			
			<!-- footer -->
			<table class="footer" style="width:100%;font-weight:bold;">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><u><?php echo $info->str_sAdresse;?> / <?php echo $info->str_sVille   ;?>,  <?php echo $info->str_iBp   ;?></u></span></span>
					</td>
				</tr>
				<tr>
					<td align="center" style="">Tel: <?php echo $info->str_sTel;?></td>
				</tr>
			
			</table>
				
		</div>
	</body>
</html>