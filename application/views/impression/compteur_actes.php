<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure(); 

	$liste = $this->md_patient->compteur_liste($premier, $dernier);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Compteur actes médicaux</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0;font-family:'helvetica', sans-serif;font-size:10pt}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }
			table{border-collapse:collapse;}
		</style>
		<!--<script type="text/javascript" src="assets/js/imprimer.js')"></script>-->
	</head>
	<body>
		<div style="padding-left:30px; padding-right:30px;" >
			<!-- En-tête du reçu -->
			
			<table style="width:100%;">
				
				<tr>
					<!-- Liste des medecins -->
					   
					<td style="width:100%;">
						<table style="width:100%; padding-top:40px;">
							<tr>
								<td  align="center" >
									<img src="<?php echo base_url($info->str_sLogo) ;?>" width="200px" height="100px" />
									<br><span style="font-weight:bold;font-size:18pt"><?php echo $info->str_sEnseigne  ;?><span>
								</td>
							</tr>
							<tr>
								<td align="right" style="padding-top:15px;">
									Brazzaville, le <?php echo $this->md_config->affDateFrNum( date('Y-m-d')) ;?>
								</td>
							</tr>
							<tr><td style="font-size:20pt;font-weight:500;padding-top:80px;text-decoration:underline" align="center">COMPTEUR DES CONTACTS MEDICAUX</td></tr>
							<tr>
								<td  style="font-weight:bold;padding-top:30px" align="center">Période du <?php echo $this->md_config->affDateFrNum($premier) ;?> au  <?php echo $this->md_config->affDateFrNum($dernier) ;?></td>
							</tr>
							<tr>
								<td  style="font-weight:bold;padding-top:30px" align="center"><?php echo count($liste);?> comptabilisé(s)</td>
							</tr>
						</table>
						<table border="1" style="width:100%;padding-top:30px;" cellspacing="0">
							<thead align="center">
								<tr>
									<th>PERSONNEL DE CAISSE</th>
									<th>PATIENT</th>
									<th>ACTE</th>
									<th>DATE ET HEURE</th>
								</tr>
							</thead>
							<tbody align="center">
							<?php if($liste==false){ echo '<br><br><br><br><br><br><br><br><th colspan="5"><em>Aucune donnée disponible pour la période indiquée!</em></th>'; }else{foreach($liste AS $l){?>
								<tr>  
									<td><?=$l->per_sMatricule;?></td>
									<td><?=$l->pat_sMatricule;?></td>
									<td><?=$l->lac_sLibelle;?></td>
									<td><?php echo $this->md_config->affDateFrNum($l->fac_dDatePaie);?></td>
								</tr>
							<?php } ?>
							<?php } ?>
							</tbody>	
							<?php if($liste!=false){ ?>
							<tfoot>
								<tr> 
									<th colspan="4">TOTAL : 
										<span style="text-align: right"><?php echo count($liste) * 100;?> FCFA</span>
									</th>
								</tr>
							</tfoot>
							<?php } ?>
						</table>
					</td>
				</tr>
				
			</table>
			
			
				
			<!-- Pied de page-->
			<table class="footer" style="width:100%;font-weight:bold; font-size:12px">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u>contact@it-techweb.fr</u></i></span></span>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px" align="center">Tél: (+242)06 810 7423 / 05 305 2652</td>
				</tr>
			
			</table>
				
		</div>
	</body>
</html>