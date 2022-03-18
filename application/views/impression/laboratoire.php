<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure(); 
$user = $this->md_connexion->personnel_connect();
$patient = $this->md_patient->rapport_laboratoire($id,7);
$list = $this->md_laboratoire->liste_element_exament_tube($patient->ala_id);
$per = $this->md_personnel->liste_personnel_medical(7,1);
//var_dump($patient,$id);
//die();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Prescription imagerie</title>
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
		<div style="padding:10px 30px 0px 30px" >
			<!-- En-tête du reçu -->
			<table style="width:100%;padding-top:30px;clear: both;">
				<tr>
					<td  align="left"  style="width:25%">
						<div align="center">
							<span style="font-weight:bold;font-size:10pt">ARMEE DU SALUT<span></br>
							<span>**************</span></br>
							<span style="font-size:5pt">Service de sante</span></br>
							<span >****************<span></br>
							<span style="font-size:5pt"><?php echo $info->str_sEnseigne  ;?></span>
						</div>
					</td>
					<td  align="center" style="width:50%"></td>
					<td  align="right" style="width:25%"><img src="<?php echo base_url($info->str_sLogo) ;?>" width="150px" height="100px" /></td>
				</tr>
			</table>
			<table style="width:100%;padding-top:30px;clear: both;">
				<tr>
					<!-- Liste des medecins 
					<td style="width:40%">
						<table style="width:100%;">
							<?php foreach ($per as $k): ?>
							<tr>
								<td style="font-weight:700"><?php echo $k->per_sTitre .' '. $k->per_sNom .' '.$k->per_sPrenom;?></td>
							</tr>
							<tr>
								<td><?php echo $k->spt_sLibelle;?></td>
							</tr>
							<tr>
								<td style="padding-bottom:10px;">Tel: <?php echo $k->per_sTel;?></td>
							</tr>
							<?php  endforeach ;?>
						</table>
					</td>-->
					
					<td style="width:100%;">
						<table style="width:100%;" align="right">
							<tr><td colspan="2" style="font-size:20pt;font-weight:500;padding-top:40px" align="center">BULLETIN D'EXAMEN</td></tr>
							<tr>
								<td >
									<span >
										<span style="font-weight:bold;padding-top:40px">Nom : </span><?php echo $patient->pat_sNom; ?>
									</span></br>
									<span >
										<span style="font-weight:bold;padding-top:40px">Prenom : </span><?php echo $patient->pat_sPrenom; ?>
									</span></br>
									<span >
										<span style="font-weight:bold;padding-top:40px">Age : </span><?php echo  date_diff(date_create($patient->pat_dDateNaiss), date_create(date('Y-m-d')))->format('%y'); ?>
									</span>
									
								</td>
								<td style="font-weight:bold;padding-top:40px" align="right">Prescripteur: <?php echo $patient->per_sTitre .' '. $patient->per_sNom .' '. $patient->per_sPrenom ?></td>
							</tr>
						</table>
						<?php foreach($list as $l): ?>
						<table class="table" style="width:100%;padding-top:200px;clear:both;" align="right" cellspacing="0">
							<thead style="paddind:50px;" align="left">
								<tr style="height:25px;">
									<td colspan="3">Type d'examen: <span style="font-weight:bold"><?php echo $l->tex_sLibelle; ?></span></td>
								</tr>
								<tr><td colspan="3" style="height:10px"></td></tr>
								<tr style="height:25px;" align="center">
									<th style="border:1px solid #000">Rubrique</th>
									<th style="border:1px solid #000">Valeur</th>
									<th style="border:1px solid #000">Unité</th>
									<th style="border:1px solid #000">Norme</th>
								</tr>
							</thead>
							<tbody>
								<tr style="height:50px;">  
									<td style="border:1px solid #000"><?=$l->ela_sLibelle;?></td>
									<td style="border:1px solid #000;" align="center"><?=$l->tan_iValeur;?></td>
									<?php if (!empty($l->ela_sUnite)): ?>
									<td style="border:1px solid #000;" align="center"><?=$l->ela_sUnite;?></td>
									<?php else: ?>
									<td style="border:1px solid #000;" align="center">/</td>
									<?php endif ?>
									<td style="border:1px solid #000;" align="center"><?=$l->ela_iValMin;?> - <?=$l->ela_iValMax;?></td>
								</tr>
							</tbody>
							<tr><td colspan="4" style="width:100%;height:10px;border-top:1px solid #000"></td></tr>
							<thead align="left">
								<tr>
									<th>Conclusion:</th>
								</tr>
							</thead>
							<tr><td><?=$l->tan_sRapport;?></td></tr>
						</table>
						<table style="width:100%;padding-bottom:160px;clear:both;border:1px solid #000;"></table>
						<?php endforeach ?>
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