<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure();
$user = $this->md_connexion->personnel_connect();

$acm = $this->md_patient->acm_patient($id);
$patient = $this->md_patient->recup_patient($id);
$patient_conventionne = $this->md_patient->patient_conventionne($patient->cpa_id); 
$ord = $this->md_patient->recup_ordonnance($id); 
$diagnostique = $this->md_patient->diagnostic($id);
$deces = $this->md_patient->cas_deces_dossier_medical($id);
$operation = $this->md_patient->operation_sejour($id);
$abdominal = $this->md_patient->examen_abdominal_dossier_medical($id);
$perineal = $this->md_patient->examen_perineal_dossier_medical($id);
$exam_vaginal = $this->md_patient->examen_vaginal_dossier_medical($id);
$listeHyd = $this->md_patient->recup_hypothese($id);
$listeRed = $this->md_patient->recup_diagnostic_retenue($id);
$actes_medicaux_patient = $this->md_patient->liste_actes_medicaux_patient($id);


/* foreach($actes_medicaux_patient AS $id_sejours)
{
	// $identifiants_sejours = $id_sejours->sea_id;
	// var_dump($id_sejours->sea_id);
	// $element = $this->md_patient->element_ordonnance_sejour($id_sejours->sea_id);
	// $gyne_obs_e = $this->md_patient->gyneco_e_dossier_medical($id_sejours->sea_id);
	// $soins = $this->md_patient->soins_infirmiers_sejour($id_sejours->sea_id);
	// $reeducation = $this->md_patient->reeducation_sejour_dossier_medical($id_sejours->sea_id);
	// $hospitalisation = $this->md_patient->hospitalisation_sejour_dossier_medical($id_sejours->sea_id);
	// $constantes = $this->md_patient->constante_sejour_dossier_medical($id_sejours->sea_id);
	// $laboratoire = $this->md_patient->laboratoire_sejour($id_sejours->sea_id);
	// $consultation = $this->md_patient->consultation_sejour_dossier_medical($id_sejours->sea_id);
	// $imagerie = $this->md_patient->acte_imagerie_sejour_dossier_medical($id_sejours->sea_id);
	// $exploration = $this->md_patient->acte_exploration_sejour_dossier_medical($id_sejours->sea_id);
	// $nouveau_ne = $this->md_patient->nouveau_sejour_dossier_medical($id_sejours->sea_id);
	// $exam_rectal = $this->md_patient->examen_rectal_dossier_medical($id_sejours->sea_id);
	// $pelvien = $this->md_patient->examen_pelvien_sejour($id_sejours->sea_id);
	// $echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
	// $chirurgie = $this->md_chirurgie->operation_planifiee_dossier_medical($id_sejours->sea_id);
	// var_dump($id_sejours->sea_id, $element, $soins, $c);
	$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
	
	foreach($senologie as $ese) {
		var_dump($ese);
	}
	
	
} 

die(); */

$antecedent = $this->md_patient->antecedent_patient($id);
$identifiant;

if(is_object($antecedent)){
	$identifiant = $antecedent->pat_id;
}else{
	$identifiant = 0;
}
$liste_1 = $this->md_patient->liste_antecedant_personnel_patient($identifiant);
$liste_2 = $this->md_patient->liste_antecedant_familial_patient($identifiant); 
$liste_3 = $this->md_patient->liste_allergie_patient($identifiant); 
$liste_4 = $this->md_patient->liste_activite_professionnelle_patient($identifiant);

// var_dump($antecedent, $liste_1, $liste_2, $liste_3, $liste_4);
// die();


?>

<?php /*femme*/ ?>
<?php //$info_conjoint = $this->md_smi->recup_patient_conjoint($id); ?>
<?php //$gestation = $this->md_smi->recup_patient_info_gestation($id); ?>
<?php //$intero = $this->md_smi->recup_patient_info_interogatoire($id); ?>
<?php //$premier = $this->md_smi->recup_patient_info_premiere_examen($id); ?>
<?php //$facteur = $this->md_smi->recup_patient_info_facteur_de_risque($id); ?>
<?php //$planning = $this->md_smi->recup_patient_planning_familliale($id); ?>
<?php //$antecedents = $this->md_smi->recup_patient_antecedants_obstetricaux($id); ?>
<?php //$source = $this->md_smi->recup_patient_source($id); ?>
<?php //$suivi_femme = $this->md_smi->list_suivi_femme($id); ?>
<?php //$vaccination = $this->md_smi->suivi_vaccinal_femme($id); ?>

<?php /*Enfant*/ ?>
<?php $info_Nais = $this->md_smi->recup_Info_Nais($id); ?>
<?php $observation = $this->md_smi->liste_Observations($id); ?>
<?php $vaccinationE = $this->md_smi->list_VaccinationEnfant($id); ?>





<!DOCTYPE html>
<html>
	<head>
		<title>Dossier m??dical</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0px;}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }

		</style>
		<!--<script type="text/javascript" src="assets/js/imprimer.js')"></script>-->
	</head>
	
	<body style="font-family:verdana">
		<div style="padding:5px 30px 0px 30px" >
			<!-- En-t??te du re??u -->
			<table style="width:100%; height:50px" >
				<tr>
					<td  align="left" ><img src="<?php echo base_url($info->str_sLogo) ;?>" style="width:100px; height:60px" border="0" /></td>
					<td  align="right" ><img src="<?php echo base_url($patient->pat_sAvatar);?>" style="width:40px; height:40px" border="0" /></td>
				</tr>	
			</table>
			
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:25px; height:20px; font-weight:bold" align="center">DOSSIER MEDICAL</td>
				</tr>
			</table>
			
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:20px; height:20px; font-weight:bold" align="center">
						<?php if(!is_null($patient_conventionne)): ?>
							Patient conventionn??(e) par : <?= $patient_conventionne->cpa_sEnseigne ?>
						<?php else: ?>
							<? = '' ?>
						<?php endif; ?>
					</td>
				</tr>
			</table>
		 <!-- Corps de re??u -->
			<table style="width:100%; height:50px; font-size:12px">
				<tr>
					<td style="width:30%">Dossier N?? : <?= $patient->pat_sMatricule ?></td>
					<td style="width:70%" align="right">Date : <?php echo substr($this->md_config->affDateTimeFr($patient->pat_dDateEnreg),0,20); ?></td>
				</tr>
			</table>
		 
			<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
				<thead style="background-color:rgb(11, 172, 244)">
					<th colspan=2>Civilit??</th>
					
				</thead>
				<tbody>
					<tr>
						<td>Nom(s): <b> <?php echo $patient->pat_sNom;?> </b></td>
						<td>Pr??nom : <b><?php echo $patient->pat_sPrenom;?></b></td>
					</tr>
					<tr>
						<td>sexe : <b><?php echo $patient->pat_sSexe;?></b></td>
						<td>ID : <?php echo $patient->pat_sMatricule;?></td>
					</tr>
					<tr>
						<td>Date de naissance : <b> <?php echo $this->md_config->dateEN2FR($patient->pat_dDateNaiss);?></b> </td>
						<td>Profession : <?php echo $patient->pat_sProfession;?> </td>
					</tr>
					<tr>
						<td>Situation familiale : <b><?php echo $patient->pat_sSituationMat;?></b> </td>
						<td>T??l??phone : <b><?php echo $patient->pat_sTel;?></b> </td>
					</tr>
					<tr>
						<td colspan=2>Adresse : <?php echo $patient->pat_sAdresse;?></td>
					</tr>
					<tr>
						<td colspan=2>Profession : <?php echo $patient->pat_sProfession;?></td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
				<div style="width:100%;" >
					<table style="height:15px">
						<tr><strong><br>ACTES MEDICAUX</strong></tr>
					</table>
					
					<?php
						/* foreach($actes_medicaux_patient AS $id_sejours) {
							if(!empty()) { ?>
								
							<?php }
						} */
					?>
					<?php if($patient->pat_sSexe == "F") { ?>
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="5">Information du conjoint</th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Nom </strong></td>
								<td align="center"><strong>Pr??nom</strong></td>
								<td align="center"><strong>Telephone</strong></td>
								<td align="center"><strong>Adresse</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$info_conjoint = $this->md_smi->conjoint_sejour_dossier_medical($id_sejours->sea_id);
										foreach($info_conjoint AS $c) { ?>
											<tr>
												<td align="center"><?php echo $c->inc_dDate ; ?></td>
												<td align="center"><?php echo $c->inc_sNom ; ?></td>
												<td align="center"><?php echo $c->inc_sPrenom; ?></td>
												<td align="center"><?php echo $c->inc_sTelephone; ?></td>
												<td align="center"><?php echo $c->inc_sAdresse; ?></td>
												
											</tr>
										<?php }?>
									<?php }?>
						</tbody>
					</table>
					<br><br>
					
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="10">Gestation ant??rieur</th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Nb de grossesse </strong></td>
								<td align="center"><strong>Nb fausse-couches </strong></td>
								<td align="center"><strong>Nb enfant vivant </strong></td>
								<td align="center"><strong>Nb enfant d??c??d??s </strong></td>
								<td align="center"><strong>Parit?? </strong></td>
								<td align="center"><strong>Antecedents obst??tricaux</strong></td>
								<td align="center"><strong>Antecedents m??dicaux</strong></td>
								<td align="center"><strong>Antecedents chirurgicaux</strong></td>
								<td align="center"><strong>Antecedents gyn??cologiques</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$gestation = $this->md_smi->gestation_sejour_dossier_medical($id_sejours->sea_id);
										foreach($gestation AS $c) { ?>
											<tr>
												<td align="center"><?php echo $c->ges_dDate ; ?></td>
												<td align="center"><?php echo $c->ges_iNb_igrossesse ; ?></td>
												<td align="center"><?php echo $c->ges_iNb_fausse_couche; ?></td>
												<td align="center"><?php echo $c->ges_iNb_enfant_vavant; ?></td>
												<td align="center"><?php echo $c->ges_iNb_enfant_dec??des; ?></td>
												<td align="center"><?php echo $c->ges_sAnt_Obstetricaux; ?></td>
												<td align="center"><?php echo $c->ges_sAnt_Medicaux; ?></td>
												<td align="center"><?php echo $c->ges_sAnt_Chirurgicaux; ?></td>
												<td align="center"><?php echo $c->ges_sAnt_Gynecologique; ?></td>
												
											</tr>
										<?php }?>
									<?php }?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="10">Int??rogatoire</th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Derniers regles </strong></td>
								<td align="center"><strong>Terme prevu </strong></td>
								<td align="center"><strong>Evolution avant premier visite</strong></td>
								<td align="center"><strong>Hemoragie </strong></td>
								<td align="center"><strong>Douleur abdominales </strong></td>
								<td align="center"><strong>Leucorrh??es</strong></td>
								<td align="center"><strong>Vomissements gravidiques</strong></td>
								<td align="center"><strong>Fi??vre</strong></td>
								<td align="center"><strong>PV</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$intero = $this->md_smi->interogatoire_sejour_dossier_medical($id_sejours->sea_id);
										foreach($intero AS $c) { ?>
											<tr>
												<td align="center"><?php echo $c->int_dDate ; ?></td>
												<td align="center"><?php echo $c->int_dDate_regle ; ?></td>
												<td align="center"><?php echo $c->int_dTerme; ?></td>
												<td align="center"><?php echo $c->int_sEvolution; ?></td>
												<td align="center"><?php echo $c->int_sHemorragie; ?></td>
												<td align="center"><?php echo $c->int_sDouleur; ?></td>
												<td align="center"><?php echo $c->int_sVomissement; ?></td>
												<td align="center"><?php echo $c->int_sLeucorrhes; ?></td>
												<td align="center"><?php echo $c->int_sFievre; ?></td>
												<td align="center"><?php echo $c->int_sPV; ?></td>
												
											</tr>
										<?php }?>
									<?php }?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="17">Premier Examen </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Taille </strong></td>
								<td align="center"><strong>Poids (Kg)  </strong></td>
								<td align="center"><strong>TA </strong></td>
								<td align="center"><strong>Conjonctives </strong></td>
								<td align="center"><strong>Coeur </strong></td>
								<td align="center"><strong>Poumons </strong></td>
								<td align="center"><strong>Seins </strong></td>
								<td align="center"><strong>Vulve </strong></td>
								<td align="center"><strong>Sp??culum </strong></td>
								<td align="center"><strong>Col </strong></td>
								<td align="center"><strong>Annexes  </strong></td>
								<td align="center"><strong>Taille de l'ut??rus</strong></td>
								<td align="center"><strong>Forme</strong></td>
								<td align="center"><strong>Bassin promontoire</strong></td>
								<td align="center"><strong>Ogive pub</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$premier = $this->md_smi->premier_examen_sejour_dossier_medical($id_sejours->sea_id);
													
										foreach($premier AS $c) { ?>
											<tr>
												<td align="center"><?php echo $c->pre_dDate ; ?></td>
												<td align="center"><?php echo $c->pre_iTaille ; ?></td>
												<td align="center"><?php echo $c->pre_iPoids; ?></td>
												<td align="center"><?php echo $c->pre_sTA; ?></td>
												<td align="center"><?php echo $c->pre_sConjonctives; ?></td>
												<td align="center"><?php echo $c->pre_sCoeur; ?></td>
												<td align="center"><?php echo $c->pre_sPoumon; ?></td>
												<td align="center"><?php echo $c->pre_sSeins; ?></td>
												<td align="center"><?php echo $c->pre_sVulve; ?></td>
												<td align="center"><?php echo $c->pre_sSpeculum; ?></td>
												<td align="center"><?php echo $c->pre_sCol; ?></td>
												<td align="center"><?php echo $c->pre_sAnnexes; ?></td>
												<td align="center"><?php echo $c->pre_iTaille_uterus; ?></td>
												<td align="center"><?php echo $c->pre_sForme; ?></td>
												<td align="center"><?php echo $c->pre_sBassin; ?></td>
												<td align="center"><?php echo $c->pre_sSciat; ?></td>
												<td align="center"><?php echo $c->pre_sOgive; ?></td>
											</tr>
										<?php }?>
									<?php }?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="17">Facteur de risque </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Type de grossesse </strong></td>
								<td align="center"><strong>Age</strong></td>
								<td align="center"><strong>TA </strong></td>
								<td align="center"><strong>Pr??sentation si??ge</strong></td>
								<td align="center"><strong>Bassin </strong></td>
								<td align="center"><strong>Taille  </strong></td>
								<td align="center"><strong>Poids </strong></td>
								<td align="center"><strong>TA </strong></td>
								<td align="center"><strong>Celibataire </strong></td>
								<td align="center"><strong>Grossesse avec</strong></td>
								<td align="center"><strong>Perte de sang </strong></td>
								<td align="center"><strong>Conjonctives pales</strong></td>
								<td align="center"><strong>O??demes + albuminerie</strong></td>
								<td align="center"><strong>Cerclage du col</strong></td>
								<td align="center"><strong>Pr??sentation transverse ?? 17 moins ou plus</strong></td>
								<td align="center"><strong>Terme d??pass??</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$facteur = $this->md_smi->facteur_de_risque_sejour_dossier_medical($id_sejours->sea_id);
													
										foreach($facteur AS $c) { ?>
									<tr>
										<td align="center"><?php echo $c->far_dDate ; ?></td>
										<td align="center"><?php echo $c->far_iType_grossesse ; ?></td>
										<td align="center"><?php echo $c->far_iAge; ?></td>
										<td align="center"><?php echo $c->far_sPresentation_siege; ?></td>
										<td align="center"><?php echo $c->far_iBassin; ?></td>
										<td align="center"><?php echo $c->far_iTaille; ?></td>
										<td align="center"><?php echo $c->far_iPoids; ?></td>
										<td align="center"><?php echo $c->far_sTA; ?></td>
										<td align="center"><?php echo $c->far_sCelibataire; ?></td>
										<td align="center"><?php echo $c->far_sGrossesse; ?></td>
										<td align="center"><?php echo $c->far_sPertes; ?></td>
										<td align="center"><?php echo $c->far_sConjonctive; ?></td>
										<td align="center"><?php echo $c->far_sOedemes; ?></td>
										<td align="center"><?php echo $c->far_sCerclage; ?></td>
										<td align="center"><?php echo $c->far_sTransverse; ?></td>
										<td align="center"><?php echo $c->far_sTerme; ?></td>
										
									</tr>
									<?php }?>
							<?php }?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="3">Planning Familliale </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Methodes contraceptives adopt??es </strong></td>
								<td align="center"><strong>Remarques</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$planning = $this->md_smi->planning_familiale_sejour_dossier_medical($id_sejours->sea_id);
													
										foreach($planning AS $c) { ?>
									<tr>
										<td align="center"><?php echo $c->pfa_dDate ; ?></td>
										<td align="center"><?php echo $c->pfa_sMethode ; ?></td>
										<td align="center"><?php echo $c->pfa_sRemarque; ?></td>
										
									</tr>
									<?php } ?>
							<?php } ?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="">Ant??c??dents</th>
						</thead>		
						<tbody>
							<tr>
								
								<td align="center"><strong>Libell??</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$Antecedents = $this->md_smi->Antecedants_sejour_dossier_medical($id_sejours->sea_id);
										foreach($Antecedents AS $c) { ?>
							<tr>
								<td align="center">
									<?php echo $c->lob_sLib ; ?>
								</td>
							</tr>
							<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="">Sources d'informations </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Libell??</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$source = $this->md_smi->Source_sejour_dossier_medical($id_sejours->sea_id);
										foreach($source AS $c) { ?>
							<tr>
								<td align="center">
									<?php echo $c->lob_sLib ; ?>
								</td>
							</tr>
							<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="3">Vaccination de la femme </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Vaccin </strong></td>
								<td align="center"><strong>Lot </strong></td>
								<td align="center"><strong>Date du prochain rendez-vous</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$vaccinationF = $this->md_smi->Vaccination_prenatal_sejour_dossier_medical($id_sejours->sea_id);
											foreach($vaccinationF AS $c) { ?>
								<tr>
									<td align="center">
										<?php echo $c->liv_sLib ; ?>
									</td>
									<td align="center">
										<?php echo $c->vap_sLot ; ?>
									</td>
									<td align="center">
										<?php echo $c->vap_dDate_rdv ; ?>
									</td>
									
								</tr>
								<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="10">Surveillance de la femme enciente </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date </strong></td>
								<td align="center"><strong>Semaine  </strong></td>
								<td align="center"><strong>HU </strong></td>
								<td align="center"><strong>BF </strong></td>
								<td align="center"><strong>Pr??sentation </strong></td>
								<td align="center"><strong>TA </strong></td>
								<td align="center"><strong>Poids  </strong></td>
								<td align="center"><strong>A/S </strong></td>
								<td align="center"><strong>Remarque - Traitements </strong></td>
								<td align="center"><strong>RV </strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$suiviF = $this->md_smi->Suivi_prenatal_sejour_dossier_medical($id_sejours->sea_id);
											foreach($suiviF AS $c) { ?>
								<tr>
									<td align="center">
										<?php echo $c->sup_dDate ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_iSemaine ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sHU ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sBF ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sPresentation ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sTA ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_iPoids ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sAS ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sRemarque ; ?>
									</td>
									<td align="center">
										<?php echo $c->sup_sRV ; ?>
									</td>
									
								</tr>
								<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					<?php } ?>
					<?php /****  Enfant ***/?>
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="17">Information de naissance de l'enfant </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"  rowspan="2"><strong>Date  </strong></td>
								<td align="center"  rowspan="2"><strong>Centre  </strong></td>
								<td align="center"  rowspan="2"><strong>N?? d'ordre  </strong></td>
								<td align="center"  rowspan="2"><strong>Lieu de Naissance </strong></td>
								<td align="center"  rowspan="2"><strong>D??roulement de la grossesse</strong></td>
								<td align="center"  rowspan="2"><strong>Accouchement  </strong></td>
								<td align="center" colspan="5"><strong>P??re </strong></td>
								<td align="center" colspan="5" ><strong>M??re  </strong></td>
								<td align="center" rowspan="2"><strong>Nombre de fr??re</strong></td>
								<td align="center" rowspan="2"><strong>Nombre de fr??re d??c??d??s</strong></td>
							</tr>
							<tr>
								<td align="center"><strong>Nom</strong></td>
								<td align="center"><strong>Pr??nom</strong></td>
								<td align="center"><strong>Profession</strong></td>
								<td align="center"><strong>T??l??phone</strong></td>
								<td align="center"><strong>Adresse</strong></td>
								<td align="center"><strong>Nom</strong></td>
								<td align="center"><strong>Pr??nom</strong></td>
								<td align="center"><strong>Profession</strong></td>
								<td align="center"><strong>T??l??phone</strong></td>
								<td align="center"><strong>Adresse</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$info_Nais = $this->md_smi->Information_Nais_sejour_dossier_medical($id_sejours->sea_id);
											foreach($info_Nais AS $c) { ?>
								<tr>
									<td align="center">
										<?php echo $c->ina_sCentre ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_dDate ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sOrdre ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sLieu_Nais ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sDeroulement ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sAccouchement ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sNom_pere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sPrenom_pere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sProf_pere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sPhone_pere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sNom_mere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sPrenom_mere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sProf_mere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sPhone_mere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_sAdresse_pere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_iNb_ifrere ; ?>
									</td>
									<td align="center">
										<?php echo $c->ina_Nb_idecede ; ?>
									</td>
									
								</tr>
								<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="7">Observations cliniques </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Date  </strong></td>
								<td align="center"><strong>Age   </strong></td>
								<td align="center"><strong>Poids  </strong></td>
								<td align="center"><strong>Taille  </strong></td>
								<td align="center"><strong>pc </strong></td>
								<td align="center"><strong>PB </strong></td>
								<td align="center"><strong>Examen clinique </strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$Obs = $this->md_smi->observation_sejour_dossier_medical($id_sejours->sea_id);
											foreach($Obs AS $c) { ?>
								<tr>
									<td align="center">
										<?php echo $c->obc_dDate ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_iAge ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_iPoids ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_iTaille ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_iPC ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_iPB ; ?>
									</td>
									<td align="center">
										<?php echo $c->obc_sExamen_clinique ; ?>
									</td>
								</tr>
								<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="5">Vaccination de l'enfant </th>
						</thead>		
						<tbody>
							<tr>
								<td align="center"><strong>Vaccin  </strong></td>
								<td align="center"><strong>Lot    </strong></td>
								<td align="center"><strong>Dose  </strong></td>
								<td align="center"><strong>Medecin  </strong></td>
								<td align="center"><strong>Date du prochain rendez-vous  </strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$vaccinationE = $this->md_smi->Vaccination_enfant_sejour_dossier_medical($id_sejours->sea_id);
											foreach($vaccinationE AS $c) { ?>
								<tr>
									<td align="center">
										<?php echo $c->liv_sLib ; ?>
									</td>
									<td align="center">
										<?php echo $c->vac_sLot ; ?>
									</td>
									<td align="center">
										<?php echo $c->vac_iDose ; ?>
									</td>
									<td align="center">
										<?php echo $c->per_sNom.' '. $c->per_sPrenom ; ?>
									</td>
									<td align="center">
										<?php echo $c->vac_dDate_rdv ; ?>
									</td>
								</tr>
								<?php } ?>		
							<?php } ?>		
						</tbody>
					</table>
					<br><br>
					
					
					
					
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="9">Constantes vitales</th>
						</thead>			
						<tbody>
							<tr>
								<td align="center"><strong>Date</strong></td>
								<td align="center"><strong>Temp??rature</strong></td>
								<td align="center"><strong>Tension arterielle</strong></td>
								<td align="center"><strong>Poids</strong></td>
								<td align="center"><strong>Taille</strong></td>
								<td align="center"><strong>Pulsations</strong></td>
								<td align="center"><strong>Saturation</strong></td>
								<td align="center"><strong>Diur??se</strong></td>
								<td align="center"><strong>Evaluation</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours) {
										$constantes = $this->md_patient->constante_sejour_dossier_medical($id_sejours->sea_id);
													
										foreach($constantes AS $c) {?>
											<tr>
												<td align="center"><?php echo substr($this->md_config->affDateTimeFr($c->con_dDate),0,20); ?></td>
												<td align="center"><?php echo $c->con_iTemperature . '??'; ?></td>
												<td align="center"><?php echo $c->con_iTensionSys; ?>/<?php echo $c->con_iTensionDia . ' mmHg'; ?></td>
												<td align="center"><?php echo $c->con_fPoids . ' Kg'; ?></td>
												<td align="center">
													<?php if($c->con_fTaille < 100): ?>
														<?php echo $c->con_fTaille . ' cm'; ?>
													<?php elseif(is_null($c->con_fTaille)): ?>
														<?= '' ?>
													<?php else: ?>
														<?php echo $c->con_fTaille/100 . ' m'; ?>
													<?php endif; ?>
															</td>
												<td align="center">
													<?php if(!is_null($c->con_fPoulsation)): ?>
														<?php echo $c->con_fPoulsation . ' bpm'; ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
												<td align="center">
													<?php if(!is_null($c->con_fSaturation)): ?>
														<?php echo $c->con_fSaturation . ' %'; ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
												<td align="center">
													<?php if(!is_null($c->con_fDierese)): ?>
														<?php echo $c->con_fDierese . ' ml'; ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
												<td align="center">
													<?php if(!is_null($c->con_fEvaluation)): ?>
														<?php echo $c->con_fEvaluation; ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
											</tr>
													<?php }
													
												}
							?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="7">Consultation</th>
						</thead>
						<tbody>
							<tr>
								<td align="center"><strong>Date</strong></td>
								<td align="center"><strong>Motifs de consultation</strong></td>
								<td align="center"><strong>Examen(s) clinique(s)</strong></td>
								<td align="center"><strong>Anamn??se</strong></td>
								<td align="center"><strong>Hypoth??se de diagnostic</strong></td>
								<td align="center"><strong>Diagnostic Retenu</strong></td>
								<td align="center"><strong>R??sum?? syndronique</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
									{
										$consultation = $this->md_patient->consultation_sejour_dossier_medical($id_sejours->sea_id);
												
										foreach($consultation AS $cons) { ?>
											<tr>
												<td align="center"><?php echo substr($this->md_config->affDateTimeFr($cons->csl_dDate),0,20); ?></td>
												<td><?= $cons->csl_sMotif ?></td>
												<td>
													<?php if(!is_null($cons->csl_sObservation)): ?>
														<?= $cons->csl_sObservation ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
												<td>
													<?php if(!is_null($cons->csl_sAnamnese)): ?>
														<?= $cons->csl_sAnamnese; ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
												<td align="center">
													<ul>
														<?php foreach($listeHyd AS $hyd): ?>
															<?php if($hyd->sm2_sLibelle !=NULL){ ?>
																<li><?= $hyd->sm2_sLibelle; ?></li>
															<?php }elseif($hyd->sm1_sLibelle !=NULL){ ?>
																<li><?= $hyd->sm1_sLibelle; ?></li>
															<?php }elseif($hyd->mal_sLibelle !=NULL){ ?>
																<li><?= $hyd->mal_sLibelle; ?></li>
															<?php } ?>
														<?php endforeach; ?>
													</ul>
												</td>
												<td align="center">
													<ul>
														<?php foreach($listeRed AS $diagnostic): ?>
														<?php if($diagnostic->sm2_sLibelle !=NULL){ ?>
															<li><?= $diagnostic->sm2_sLibelle; ?></li>
														<?php }elseif($diagnostic->sm1_sLibelle !=NULL){ ?>
															<li><?= $diagnostic->sm1_sLibelle; ?></li>
														<?php }elseif($diagnostic->mal_sLibelle !=NULL){ ?>
															<li><?= $diagnostic->mal_sLibelle; ?></li>
														<?php } ?>
															
														<?php endforeach; ?>
													</ul>
												</td>
												<td>
													<?php if(!is_null($cons->csl_sResume)): ?>
														<?= $cons->csl_sResume ?>
													<?php else: ?>
														<?= '' ?>
													<?php endif; ?>
												</td>
											</tr>
												<?php }
												
											}
										?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
							<thead align="center" style="background-color:rgb(167,206,0)">
								<th colspan="3">Ant??c??dents</th>
							</thead>
							<tbody>
								<tr>
									<td align="center"><strong>Date</strong></td>
									<td align="center"><strong>Activit??(s) quotidienne(s)</strong></td>
									<td align="center"><strong>Groupe sanguin :</strong></td>
								</tr>
								<?php if (!empty($antecedent)) { ?>
								<tr>
									<td align="center"><?php echo substr($this->md_config->affDateTimeFr($antecedent->inc_dDate),0,20); ?></td>
									<td>
										<?php if (isset($antecedent)) : ?>
											<?php echo $antecedent->inc_sActQ ;?>
										<?php else: ?>
										    <?php echo ''; ?>
										<?php endif; ?>
									</td>
									<td align="center">
										<?php if (isset($antecedent)) : ?>
											<?php echo $antecedent->inc_sSang ;?>
										<?php else: ?>
										    <?php echo ''; ?>
										<?php endif; ?>
									</td>
								</tr>
								<?php } ?>
								<?php if (!empty($liste_1)) {?>
									<tr>
										<td colspan="3">
											<strong>Liste des ant??c??dents personnels</strong>
											<ul>
											<?php foreach($liste_1 AS $l){?>
												<li><?=$l->lan_sLibelle;?></li>
											<?php };?>
											</ul>
										</td>
									</tr>
								<?php }?>								
								
								<?php if (!empty($liste_2)) {?>
								<tr>
									<td colspan="3">
									<strong>Liste des ant??c??dents familiaux</strong>
										<ul>
										<?php foreach($liste_2 AS $l){?>
											<li><?=$l->laf_sLibelle;?></li>
										<?php };?>
										</ul>
									</td>
								</tr>
								<?php }?>								
								
								<?php if (!empty($liste_3)) {?>
								<tr>
									<td colspan="3">
									<strong>Liste des allergies</strong>
										<ul>
										<?php foreach($liste_3 AS $l){?>
											<li><?=$l->lia_sLibelle;?></li>
										<?php };?>
										</ul>
									</td>
								</tr>
								<?php }?>								
								
								<?php if(!empty($liste_4)){?>
								<tr>
									<td colspan="3">
									<strong>Liste des activit??s professionnelles</strong>
										<ul>
										<?php foreach($liste_4 AS $l){?>
											<li><?=$l->lap_sLibelle;?></li>
										<?php };?>
										</ul>
									</td>
								</tr>
								<?php }?>
							</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="5">Ordonnance</th>
						</thead>
						<tbody>
							<tr>
								<td align="center"><strong>Date</strong></td>
								<td align="center"><strong>Produit</strong></td>
								<td align="center"><strong>Qt??</strong></td>
								<td align="center"><strong>Posologie</strong></td>
								<td align="center"><strong>Dur??e</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
									{
										$element = $this->md_patient->element_ordonnance_sejour($id_sejours->sea_id);
													
										foreach($element AS $e) { ?>
											<tr>
												<td align="center"><?php echo substr($this->md_config->affDateTimeFr($e->ord_dDate),0,20); ?></td>
												<td align="center"><?php echo $e->elo_sProduit ;?></td>
												<td align="center"><?php echo $e->elo_iQuantite ;?></td>
												<td align="center"><?php echo $e->elo_sPosologie ;?></td>
												<td align="center"><?php echo $e->elo_iDuree ;?></td>
											</tr>
											<?php }
													
									}
							?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="5">Soins infirmiers</th>
						</thead>
						<tbody>
							<tr>
								<td align="center"><strong>Date</strong></td>
								<td align="center"><strong>Actes des soins</strong></td>
								<td align="center"><strong>Service/unit??</strong></td>
								<td align="center"><strong>Infirmier(e) traitant(s)</strong></td>
								<td align="center"><strong>Observations</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
									{
										$soins = $this->md_patient->soins_infirmiers_sejour($id_sejours->sea_id);
													
										foreach($soins AS $s) { ?>
											<tr>
												<td align="center"><?php echo substr($this->md_config->affDateTimeFr($s->soi_dDateFait),0,20) ; ?></td>
												<td align="center"><?php echo $s->lac_sLibelle; ?></td>
												<td><?php echo $s->ser_sLibelle; ?> / <?php echo $s->uni_sLibelle; ?></td>
												<td align="center"><?php echo $s->per_sNom . ' ' . $s->per_sPrenom . '<br>'; ?></td>
												<td><?php echo $s->soi_sObservation; ?></td>
											</tr>
											<?php }
													
									}
							?>
						</tbody>
					</table>
					<br><br>
					
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="7">Hospitalisation</th>
						</thead>
						<tbody>
							<tr>
								<td align="center"><strong>Date d'hospitalisation</strong></td>
								<td align="center"><strong>Service</strong></td>
								<td align="center"><strong>Unit??s</strong></td>
								<td align="center"><strong>Salle</strong></td>
								<td align="center"><strong>Lit</strong></td>
								<td align="center"><strong>Type d'hospitalisation</strong></td>
								<td align="center"><strong>Mode d'??ntr??e</strong></td>
								
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
									{
										$hospitalisation = $this->md_patient->hospitalisation_sejour_dossier_medical($id_sejours->sea_id);
												
										foreach($hospitalisation AS $hos) { ?>
											<tr>
												<td align="center"><?php echo $this->md_config->affDateTimeFr($hos->hos_dDate) ; ?></td>
												<td align="center"><?php echo $hos->ser_sLibelle; ?></td>
												<td align="center"><?php echo $hos->uni_sLibelle; ?></td>
												<td align="center"><?php echo $hos->cha_sLibelle; ?></td>
												<td align="center"><?php echo $hos->lit_sLibelle; ?></td>
												<td align="center"><?php echo $hos->hos_sType; ?></td>
												<td align="center"><?php echo $hos->hos_sMotif; ?></td>
											</tr>
										<?php }
												
									}
							?>
						</tbody>
					</table>
					<br><br>
					<?php if($patient->pat_sSexe == "F") { ?>
						<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
							<thead align="center" style="background-color:rgb(167,206,0)">
								<th colspan="11">Consultation ophtalmologique</th>
							</thead>
							<tbody>
								<tr>
									<td align="center" rowspan="2"><strong>Date</strong></td>
									<td align="center" colspan="2"><strong>Acuit?? visuelle</strong></td>
									<td align="center" colspan="2"><strong>skiascopie</strong></td>
									<td align="center" colspan="2"><strong>Sph??rique</strong></td>
									<td align="center" colspan="2"><strong>Cylindre</strong></td>
									<td align="center" rowspan="2"><strong>Diagnostique </strong></td>
									<td align="center" rowspan="2"><strong>Observation </strong></td>
									
								</tr>
								<tr>
									<td align="center"><strong>OG</strong></td>
									<td align="center"><strong>OD</strong></td>
									<td align="center"><strong>OG</strong></td>
									<td align="center"><strong>OD</strong></td>
									<td align="center"><strong>OG</strong></td>
									<td align="center"><strong>OD </strong></td>
									<td align="center"><strong>OG </strong></td>
									<td align="center"><strong>OD </strong></td>
								</tr>
								<?php
									foreach($actes_medicaux_patient AS $id_sejours)
										{
											$consultation_ophta = $this->md_patient->consultation_ophta_sejour_dossier_medical($id_sejours->sea_id);
													
											foreach($consultation_ophta AS $C) { ?>
												<tr>
													<td align="center"><?php echo $this->md_config->dateEN2FR($C->cso_dDate) ; ?></td>
													<td align="center"><?php echo $C->cso_sAVGauche; ?></td>
													<td align="center"><?php echo $C->cso_sAVDroite; ?></td>
													<td align="center"><?php echo $C->cso_sSKGauche; ?></td>
													<td align="center"><?php echo $C->cso_sSKDroite; ?></td>
													<td align="center"><?php echo $C->cso_sSPGauche; ?></td>
													<td align="center"><?php echo $C->cso_sSPDroite; ?></td>
													<td align="center"><?php echo $C->cso_sCYGauche; ?></td>
													<td align="center"><?php echo $C->cso_sCYDroite; ?></td>
													<td align="center"><?php echo $C->cso_sDiagnostique; ?></td>
													<td align="center"><?php echo $C->cso_sObservation; ?></td>
												</tr>
											<?php }
													
										}
								?>
							</tbody>
						</table>
						<br><br>
					<?php } ?>
					<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<!-- <th>Examen laboratiore</th> -->
							<th colspan="6">Laboratoire</th>
						</thead>
						<tbody>
							<!-- <tr>
									<td align="center"><strong>Examen(s) ?? faire</strong></td>
								</tr> -->
							<!-- <tr><td colspan="4" style="height:10px"></td></tr> -->
							<tr style="height:25px;" align="center">
								<th>Date</th>
								<th>Acte de laboratiore</th>
								<th>El??ments analys??s</th>
								<th>Valeurs</th>
								<th>Normes</th>
								<th>Observations</th>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
									{
										$laboratoire = $this->md_patient->laboratoire_sejour($id_sejours->sea_id);
												
										foreach($laboratoire AS $lab) {
											$resultats_examens_labo = $this->md_laboratoire->liste_element_exament_tube_dossier_medical($lab->ala_id);
													
											foreach($resultats_examens_labo AS $labo) { ?>
												<tr style="height:50px;">
													<td align="center"><?php echo ($this->md_config->dateEN2FR($labo->tan_dDateRapport)); ?></td>
													<td align="center"><?=$labo->lac_sLibelle;?></td>
													<td align="center"><?=$labo->ela_sLibelle;?></td>
													<td align="center"><?= $labo->tan_iValeur . ' ' . $labo->ela_sUnite ;?>
													<td align="center"><?=$labo->ela_iValMin;?> - <?=$labo->ela_iValMax;?></td>
													<td><?=$labo->tan_sRapport;?></td>
												</tr>
													<?php }
												}
												// var_dump($hospitalisation);
												
											}
										?>
										<?php // if(!empty($laboratiore)): ?>
											<?php // foreach($laboratoire AS $e){ ?>
												<!-- <tr style="height:30px">  
													<td><?php // echo $e->mal_sLibelle; ?></td>
												</tr> -->
											<?php // }	?>
										<?php // else: ?>
											<?php // echo ''; ?>
										<?php // endif; ?>
						</tbody>
					</table>
					<br><br><br>
					
					<!--<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="5">R????ducation</th>
						</thead>
							<tbody>
								<tr>
									<td align="center"><strong>Acte de r????ducation</strong></td>
									<td align="center"><strong>Date de prescription</strong></td>
									<td align="center"><strong>Nombre de sc??ance(s)</strong></td>
									<td align="center"><strong>Date de r????ducation</strong></td>
									<td align="center"><strong>Observations</strong></td>
								</tr>
								<?php
									foreach($actes_medicaux_patient AS $id_sejours)
										{
											$reeducation = $this->md_patient->reeducation_sejour_dossier_medical($id_sejours->sea_id);
												
											foreach($reeducation AS $red) { ?>
												<tr style="height:30px">  
													<td><?php echo $red->lac_sLibelle; ?></td>
													<td align="center"><?php echo $this->md_config->dateEN2FR($red->sea_dDate); ?></td>
													<?php if($red->ree_iNbPrinscrit == 1): ?>
														<td align="center"><?php echo $red->ree_iNbPrinscrit; ?></td>
													<?php else: ?>
														<td align="center"><?php echo $red->ree_iNbPrinscrit / $red->ree_iNbPrinscrit; ?></td>
													<?php endif; ?>
														<td align="center"><?php echo $this->md_config->dateEN2FR($red->sre_dJour); ?></td>
														<td><?php echo $red->sre_sObservation; ?></td>
												</tr>
											<?php	}
												
											}
										?>
							</tbody>
					</table>
					<br><br>
						-->
					
					<!-- <table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
							<thead align="center" style="background-color:rgb(167,206,0)">
								<th colspan="3">Maladie(s) diagnostiqu??e(s)</th>
							</thead>
							<tbody>
								<?php // if(!empty($diagnostique)): ?>
									<?php // foreach($diagnostique AS $e){ ?>
										<tr>  
											<td><?php // echo $e->mal_sLibelle; ?></td>
										</tr>
									<?php // } ?>
								<?php // endif; ?>
							</tbody>
					</table>
					<br><br> -->
					
					<?php
						foreach($actes_medicaux_patient AS $id_sejours) {
							$exploration = $this->md_patient->acte_exploration_sejour_dossier_medical($id_sejours->sea_id);
							if(!empty($exploration)) { ?>
								<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="6">Examen exploration</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="6"><strong><u>Indications</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Acte d'exploration</strong></td>
											<td align="center"><strong>M??decin</strong></td>
											<td align="center"><strong>Date de r??alisation</strong></td>
											<td align="center"><strong>Images(s)</strong></td>
											<td align="center"><strong>Compte Rendu</strong></td>
											<td align="center"><strong>Conclusion</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exploration = $this->md_patient->acte_exploration_sejour_dossier_medical($id_sejours->sea_id);
												
												foreach($exploration AS $exp) { ?>
													<tr>  
														<td align="center"><?php echo $exp->lac_sLibelle; ?></td>
														<td align="center">
															<?= $exp->per_sNom !== null ? $exp->per_sNom : ''?>
															<?= $exp->per_sPrenom !== null ? $exp->per_sPrenom : '' ?> (<?= $exp->per_sMatricule !== null ? $exp->per_sMatricule : '' ?>)
														</td>
														<td align="center">
															<?= $exp->aef_dDate !== null ? $this->md_config->affDateTimeFr($exp->aef_dDate) : ''?>
														</td>
														<td style="width:88px;">
															<?php if(!is_null($exp->aef_sImage)): ?>
																<img src="<?php echo base_url($exp->aef_sImage) ;?>" width="287px" height="185px"/>
															<?php else: ?>
																<?php echo ''; ?>
															<?php endif; ?>
														</td>
														<td>
															<?= $exp->aef_sCompteRendu !== null ? $exp->aef_sCompteRendu : ''?>
														</td>
														<td>
															<?= $exp->aef_sConclusion !== null ? $exp->aef_sConclusion : ''?>
														</td>
													</tr>
												<?php }
												
											}
										?>
									</tbody>
								</table>
								<br><br>
							<?php }
						}
					?>
					
					<?php
						if($patient->pat_iFemme == 1 && $patient->pat_sSexe == "F") { ?>
							<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="1">D??claration femme enceinte</th>
									</thead>
									
									<tbody> 
										<tr>
											<td align="center"><strong>Enceinte</strong></td>
										</tr>
										<tr>
											<td align="center"><strong>Oui</strong></td>
										</tr>
									</tbody>
							</table>
							<br><br>
						<?php }
					?>
					<?php
						/* foreach($actes_medicaux_patient AS $id_sejours) {
							if(!empty()) { ?>
								
							<?php }
						} */
					?>
					<?php
						foreach($actes_medicaux_patient AS $id_sejours) {
							$nouveau_ne = $this->md_patient->nouveau_sejour_dossier_medical($id_sejours->sea_id);
							if(!empty($nouveau_ne) && $patient->pat_sSexe == "F") { ?>
								<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="3">D??claration du nouveau n??</th>
									</thead>
									<tbody>
										<tr>
											<td align="center"><strong>Date de naissance</strong></td>
											<td align="center"><strong>Heure de naissance</strong></td>
											<td align="center"><strong>Sexe</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$nouveau_ne = $this->md_patient->nouveau_sejour_dossier_medical($id_sejours->sea_id);
													
												foreach($nouveau_ne AS $nouv) { ?>
													<tr>  
														<td align="center"><?php echo $this->md_config->affDateFrNum($nouv->nne_dDateNaiss); ?></td>
														<td align="center"><?php echo $nouv->nne_tHeureNaiss; ?></td>
														<td align="center"><?php echo $nouv->nne_sSexe; ?></td>
													</tr>
												<?php }
													
												}
											?>
									</tbody>
								</table>
								<br><br>
							<?php }
						}
					?>	
					
					<?php
						if($patient->pat_iEnfant == 1) { ?>
							<!-- Tab panes <table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="2">D??claration enfant malnutri(e)</th>
									</thead>
									
									<tbody> 
										<tr>
											<td align="center"><strong>Enfant malnutri(e)</strong></td>
											<td align="center"><strong>Observations</strong></td>
										</tr>
										<tr>
											<td align="center"><strong>Oui</strong></td>
											<td>Ici, ??num??rez les diff??rentes obser les observations</td>
										</tr>
									</tbody>
							</table>
							<br><br> -->
						<?php }
					?>
					 
					<?php if($patient->pat_sSexe == "F") { ?>
						
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
						 <!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="7">Examen pelvien</th>
								</thead>
								<tbody>
									<tr>
										<td colspan="7"><strong><u>Indications</u></strong>:</td> 
									</tr>
									<tr>
										<td align="center"><strong>Date</strong></td>
										<td align="center"><strong>Aspect</strong></td>
										<td align="center"><strong>Zone de jonction entre la muqueuse de l???endocol et celle de l???exocol</strong></td>
										<td align="center"><strong>Glaire cervicale</strong></td>
										<td align="center"><strong>Hyst??rom??trie</strong></td>
										<td align="center"><strong>Calibrage du col</strong></td>
										<td align="center"><strong>Inspection du vagin </strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$pelvien = $this->md_patient->examen_pelvien_sejour($id_sejours->sea_id);
											
											foreach($pelvien AS $pel) { ?>
												<tr>
													<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($pel->pee_dDate),0,20); ?></td>
													<td><?= $pel->pee_sAspect ?></td>
													<td><?= $pel->pee_sZone ?></td>
													<td><?= $pel->pee_sGlaire ?></td>
													<td align="center"><?= $pel->pee_sHyst . ' mm' ?></td>
													<td><?= $pel->pee_sCalibrage ?></td>
													<td><?= $pel->pee_sVagin ?></td>
												</tr>
											<?php }
											
										} 
									?>
								</tbody>
						</table>
						<br><br>-->
						<?php }
					?>
					 
					<?php if($patient->pat_sSexe == "F") { ?>
							 <!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="6">Examen abdominal</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="6"><strong><u>Masse abdominale</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Si??ge</strong></td>
											<td align="center"><strong>Volume</strong></td>
											<td align="center"><strong>Mobilit??</strong></td>
											<td align="center"><strong>Consistance</strong></td>
											<td align="center"><strong>Sensibilit??</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$abdominal = $this->md_patient->examen_abdominal_dossier_medical($id_sejours->sea_id);
												
												foreach($abdominal AS $abd) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($abd->abe_dDate),0,20); ?></td>
														<td><?= $abd->abe_sSiege ?></td>
														<td><?= $abd->abe_sVolume ?></td>
														<td><?= $abd->abe_sMobilite ?></td>
														<td align="center"><?= $abd->abe_sConsistance . ' cm' ?></td>
														<td><?= $abd->abe_sSensibilite ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="6"><strong><u>Douleurs abdomino-pelviennes</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Localisation </strong></td>
											<td align="center"><strong>Intensit?? </strong></td>
											<td align="center"><strong>Irradiation </strong></td>
											<td align="center"><strong>D??fense </strong></td>
											<td align="center"><strong>Contracture abdominale </strong></td>
											
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$abdominal = $this->md_patient->examen_abdominal_dossier_medical($id_sejours->sea_id);
												
												foreach($abdominal AS $abd) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($abd->abe_dDate),0,20); ?></td>
														<td><?= $abd->abe_sLocalisation ?></td>
														<td><?= $abd->abe_sIntensite ?></td>
														<td><?= $abd->abe_sIrradiation ?></td>
														<td><?= $abd->abe_sDefence ?></td>
														<td><?= $abd->abe_sContracture ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br> -->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
						 <!-- Tab panes 	<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="6">Examen p??rin??al</th>
									</thead>
									<tbody>
										<tr>
											<td align="center"><strong>Date </strong></td>
											<td align="center"><strong>Pilosit?? </strong></td>
											<td align="center"><strong>Pigmentation </strong></td>
											<td align="center" colspan="2"><strong>S??quelles obst??tricales</strong></td>
											<td align="center"><strong>Distance ano-vulvaire</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$perineal = $this->md_patient->examen_perineal_dossier_medical($id_sejours->sea_id);
												
												foreach($perineal AS $peri) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($peri->exp_dDate),0,20); ?></td>
														<td><?= $peri->exp_sPilo ?></td>
														<td><?= $peri->exp_sPig ?></td>
														<td colspan="2"><?= $peri->exp_sSequelle ?></td>
														<td><?= $peri->exp_sDistance ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="6" style="height:5px;"></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date </strong></td>
											<td align="center"><strong>Infections cutan??o-muqueuses</strong></td>
											<td align="center"><strong>Infection bartholinite</strong></td>
											<td align="center"><strong>L??sions traumatiques </strong></td>
											<td align="center"><strong>Infections des glandes cutan??o-muqueuses  </strong></td>
											<td align="center"><strong>D??veloppement des grandes l??vres, petites l??vres et clitoris </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$perineal = $this->md_patient->examen_perineal_dossier_medical($id_sejours->sea_id);
												
												foreach($perineal AS $peri) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($peri->exp_dDate),0,20); ?></td>
														<td><?= $peri->exp_sInfec_1 ?></td>
														<td><?= $peri->exp_sInfec_2 ?></td>
														<td><?= $peri->exp_sLesion ?></td>
														<td><?= $peri->exp_sInfec_3 ?></td>
														<td><?= $peri->exp_sDev ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="8">Toucher vaginal</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="8"><strong><u>Vagin</u></strong>:</td>
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Cloison recto-vaginale</strong></td>
											<td align="center"><strong>Cloison v??sico-vaginale</strong></td>
											<td align="center"><strong>Culs de sac vaginaux </strong></td>
											<td align="center" colspan="2"><strong>Cul de sac vaginal posterieur</strong></td>
											<td align="center" colspan="2"><strong>Nodule</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exam_vaginal = $this->md_patient->examen_vaginal_dossier_medical($id_sejours->sea_id);
												
												foreach($exam_vaginal AS $vag) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($vag->eva_dDate),0,20); ?></td>
														<td><?= $vag->eva_sCloison_1 ?></td>
														<td><?= $vag->eva_sCloison_2 ?></td>
														<td><?= $vag->eva_sCul_1 ?></td>
														<td colspan="2"><?= $vag->eva_sCul_2 ?></td>
														<td colspan="2"><?= $vag->eva_sNodule ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="8"><strong><u>Col ut??rin</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Forme</strong></td>
											<td align="center"><strong>Longueur</strong></td>
											<td align="center"><strong>Volume</strong></td>
											<td align="center"><strong>Ouverture</strong></td>
											<td align="center"><strong>Consistance</strong></td>
											<td align="center"><strong>Mobilit?? </strong></td>
											<td align="center"><strong>Sensibilit??  </strong></td>
											
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exam_vaginal = $this->md_patient->examen_vaginal_dossier_medical($id_sejours->sea_id);
												
												foreach($exam_vaginal AS $vag) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($vag->eva_dDate),0,20); ?></td>
														<td><?= $vag->eva_sForme ?></td>
														<td align="center"><?= $vag->eva_sLongueur . ' mm' ?></td>
														<td align="center"><?= $vag->eva_sVolume_1 . ' mm??' ?></td>
														<td><?= $vag->eva_sOuver ?></td>
														<td><?= $vag->eva_sConsis_1 ?></td>
														<td><?= $vag->eva_sMob_1 ?></td>
														<td><?= $vag->eva_sSensis_1 ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="8"><strong><u>Corps ut??rin</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Position de l'ut??rus</strong></td>
											<td align="center"><strong>Volume</strong></td>
											<td align="center"><strong>Consistance </strong></td>
											<td align="center" colspan="2"><strong>Mobilit??</strong></td>
											<td align="center" colspan="2"><strong>Sensibilit?? </strong></td>
											
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exam_vaginal = $this->md_patient->examen_vaginal_dossier_medical($id_sejours->sea_id);
												
												foreach($exam_vaginal AS $vag) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($vag->eva_dDate),0,20); ?></td>
														<td><?= $vag->eva_sPosis ?></td>
														<td align="center"><?= $vag->eva_sVolume_2 . ' mm??' ?></td>
														<td><?= $vag->eva_sConsis_2?></td>
														<td colspan="2"><?= $vag->eva_sMob_2 ?></td>
														<td colspan="2"><?= $vag->eva_sSensis_2 ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="8"><strong><u>Annexes</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Masse pelvienne</strong></td>
											<td align="center" colspan="2"><strong>Ovaires</strong></td>
											<td align="center" colspan="2"><strong>Plancher pelvien</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exam_vaginal = $this->md_patient->examen_vaginal_dossier_medical($id_sejours->sea_id);
												
												foreach($exam_vaginal AS $vag) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($vag->eva_dDate),0,20); ?></td>
														<td colspan="2"><?= $vag->eva_sMasse ?></td>
														<td colspan="2"><?= $vag->eva_sOvaire ?></td>
														<td colspan="2"><?= $vag->eva_sPelvien ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br> -->
						<?php }
					?>
					
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="5">Echographie</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Echographie gyn??cologique<br>Renseignements g??n??raux:</u></strong></td>
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>DDR</strong></td>
											<td align="center"><strong>Contexte gyn??cologique</strong></td>
											<td align="center"><strong>Conditions de r??alisation  </strong></td>
											<td align="center"><strong>Voie d'examen</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td><?= $this->md_config->dateEN2FR($ech->eec_sDdr) ?></td>
														<td><?= $ech->eec_sContexte ?></td>
														<td><?= $ech->eec_sRealisation ?></td>
														<td><?= $ech->eec_sExamen ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Indications</u></strong>:</td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Ut??rus</strong></td>
											<td align="center"><strong>Annexes</strong></td>
											<td align="center"><strong>Autres</strong></td>
											<td align="center"><strong>Texte libre</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td><?= $ech->eec_sUterus ?></td>
														<td><?= $ech->eec_sAnnexe ?></td>
														<td><?= $ech->eec_sAutres ?></td>
														<td><?= $ech->eec_sTexte ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Ut??rus<br>Dimensions: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Longueur Ut??rus</strong></td>
											<td align="center"><strong>Largeur Ut??rus</strong></td>
											<td align="center" colspan="2"><strong>Hauteur Ut??rus </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center"><?= $ech->eec_iLongueur . ' mm' ?></td>
														<td align="center"><?= $ech->eec_iLargeur . ' mm' ?></td>
														<td align="center" colspan="2"><?= $ech->eec_iHauteur . ' mm'?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Anatomie: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Position</strong></td>
											<td align="center"><strong>Contours</strong></td>
											<td align="center" colspan="2"><strong>Structure myom??tre </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center"><?= $ech->eec_sPosition ?></td>
														<td align="center"><?= $ech->eec_sContour ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sMyometre ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Endom??tre: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Endom??tre</strong></td>
											<td align="center" colspan="2"><strong>Epaisseur de l'endom??tre</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sEndometre ?></td>
														<td align="center" colspan="2"><?= $ech->eec_iEpaisseur . ' mm' ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Cavit??: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Cavit??</strong></td>
											<td align="center" colspan="2"><strong>DIU</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sCavite ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sDiu ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Autres<br>Ovaires: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Ovaire droit</strong></td>
											<td align="center"><strong>Grand axe ovaire droit</strong></td>
											<td align="center"><strong>Ovaire gauche </strong></td>
											<td align="center"><strong>Grand axe ovaire gauche </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center"><?= $ech->eec_sOvaireDroit ?></td>
														<td align="center"><?= $ech->eec_sOvaireDroitGrand . ' mm' ?></td>
														<td align="center"><?= $ech->eec_sOvaireGauche ?></td>
														<td align="center"><?= $ech->eec_sOvaireGaucheGrand . ' mm'?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Culs de sac: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Culs de sac lat??raux</strong></td>
											<td align="center" colspan="2"><strong>Douglas</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sCul ?></td>
														<td align="center" colspan="2"><?= $ech->eec_sDouglas ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Doppler A. ut??rines: </u></strong></td> 
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>AUD IR</strong></td>
											<td align="center"><strong>AUD IP</strong></td>
											<td align="center"><strong>AUG IR </strong></td>
											<td align="center"><strong>AUG IP </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center"><?= $ech->eec_sAudir ?></td>
														<td align="center"><?= $ech->eec_sAudip ?></td>
														<td align="center"><?= $ech->eec_sAugir ?></td>
														<td align="center"><?= $ech->eec_sAugip ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Trompes: </u></strong></td> 
										</tr>
										
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Description</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td align="center" colspan="3"><?= $ech->eec_sTrompes ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Conclusion </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$echographie = $this->md_patient->examen_echographique_dossier_medical($id_sejours->sea_id);
												
												foreach($echographie AS $ech) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ech->eec_dDate),0,20); ?></td>
														<td colspan="3"><?= $ech->eec_sConclusion ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br> -->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="5">S??nologie</th>
									</thead>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Inspection:</u></strong></td>
										</tr>
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Anomalies cutann??es</strong></td>
											<td align="center"><strong>Dissym??tries</strong></td>
											<td align="center"><strong>Anomalies de l'ar??ole</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td><?= $ese->ese_sAnomalieCutanee ?></td>
														<td><?= $ese->ese_sDissymetries ?></td>
														<td><?= $ese->ese_sAnomaliesAreole ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Palpation des nodules</u></strong>:</td> 
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td><?= $ese->ese_sPalpationNodules_1 ?></td>
														<td><?= $ese->ese_sPalpationNodules_2 ?></td>
														<td><?= $ese->ese_sPalpationNodules_3 ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Distance mamelonnaire</strong></td>
											<td align="center"><strong>Taille</strong></td>
											<td align="center"><strong>Sensibilit??</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= $ese->ese_iDistanceMamelonnaire ?></td>
														<td align="center"><?= $ese->ese_iTaille ?></td>
														<td align="center"><?= $ese->ese_sSensibilite ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Mobilit??</strong></td>
											<td align="center" colspan="2"><strong>Evolution de la tumeur</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= $ese->ese_sMobilite ?></td>
														<td align="center" colspan="2"><?= $ese->ese_sEvolutionTumeur ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td align="center" colspan="5"><strong>Forme</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= $ese->ese_sForme_1 ?></td>
														<td align="center"><?= $ese->ese_sForme_2 ?></td>
														<td align="center"><?= $ese->ese_sForme_3 ?></td>
														<td align="center"><?= $ese->ese_sForme_4 ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td align="center" colspan="5"><strong>Consistance</strong></td>
										</tr>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Masse molle</strong></td>
											<td align="center"><strong>Ferme</strong></td>
											<td align="center"><strong>Elastique</strong></td>
											<td align="center"><strong>Douleur ?? la palpe</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= substr($ese->ese_sConsistance_1,12, 15) ;?></td>
														<td align="center"><?= substr($ese->ese_sConsistance_2,6,9) ;?></td>
														<td align="center"><?= substr($ese->ese_sConsistance_3,10,13) ;?></td>
														<td align="center"><?= substr($ese->ese_sConsistance_4,19,22) ;?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td colspan="5"><strong><u>Ecoulement mammmaire: </u></strong></td> 
										</tr>
										<tr>
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Expression du mamelon entre pouce et index</strong></td>
											<td align="center"><strong>Volume</strong></td>
											<td align="center"><strong>Consistance</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= $ese->ese_sExpression ?></td>
														<td align="center"><?= $ese->ese_iVolume ?></td>
														<td align="center"><?= $ese->ese_sConsistance ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									
									<tbody>
										<tr>
											<td align="center" colspan="5"><strong>Ecoulement</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center"><?= $ese->ese_sEcoulement_1 ?></td>
														<td align="center"><?= $ese->ese_sEcoulement_2 ?></td>
														<td align="center"><?= $ese->ese_sEcoulement_3 ?></td>
														<td align="center"><?= $ese->ese_sEcoulement_4 ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
									<tbody>
										<tr>
											<td align="center" colspan="5" style="height:10px;"></td>
										</tr>
										<tr>
											<td align="center" colspan="3"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Couleur</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$senologie = $this->md_patient->examen_senologique_dossier_medical($id_sejours->sea_id);
												
												foreach($senologie AS $ese) { ?>
													<tr>
														<td align="center" colspan="3"><?php echo substr($this->md_config->md_config->affDateTimeFr($ese->ese_dDate),0,20); ?></td>
														<td align="center" colspan="2"><?= $ese->ese_sCouleur ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
									<thead align="center" style="background-color:rgb(167,206,0)">
										<th colspan="4">Toucher rectal</th>
									</thead>
									<tbody>
										<tr>
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Cul de sac de douglas</strong></td>
											<td align="center"><strong>Noyau central du perin??e</strong></td>
											<td align="center"><strong>Cloison recto-vaginal</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$exam_rectal = $this->md_patient->examen_rectal_dossier_medical($id_sejours->sea_id);
												
												foreach($exam_rectal AS $rec) { ?>
													<tr>  
														<td align="center"><?php echo substr($this->md_config->affDateTimeFr($rec->exr_dDate),0,20); ?></td>
														<td align="center"><?php echo $rec->exr_sDouglas; ?></td>
														<td align="center"><?php echo $rec->exr_sNoyau; ?></td>
														<td align="center"><?php echo $rec->exr_sCloison; ?></td>
													</tr>
												<?php }
												
											}
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- <table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="8">Echographie < 12 SA</th>
								</thead>
								<tbody>
									<tr>
										<td align="center"><strong>Date</strong></td>
										<td align="center"><strong>Indication</strong></td>
										<td align="center"><strong>Voie d'examen</strong></td>
										<td align="center"><strong>Condition de r??alisation</strong></td>
										<td align="center"><strong>Nombre d'embryons</strong></td>
										<td align="center"><strong>Type de grossesse</strong></td>
										<td align="center" colspan="2"><strong>Membrane</strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
											foreach($gyne_obs_a as $go_a) { ?>
												<tr>  
													<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
													<td align="center"><?php echo $go_a->goa_sIndication; ?></td>
													<td align="center"><?php echo $go_a->goa_sVoie; ?></td>
													<td align="center"><?php echo $go_a->goa_sCondition; ?></td>
													<td align="center"><?php echo $go_a->goa_iNEmbre; ?></td>
													<td align="center"><?php echo $go_a->goa_sTypeGross; ?></td>
													<td align="center" colspan="2"><?php echo $go_a->goa_sMembrane; ?></td>
												</tr>
											<?php }
												
										}
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="8"><strong><u>Embryon A<br>Embryon: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Visibilit?? du foetus</strong></td>
											<td align="center"><strong>Sac gest : LCC -A</strong></td>
											<td align="center"><strong>Bip - A </strong></td>
											<td align="center"><strong>Activit?? cardiaque </strong></td>
											<td align="center"><strong>RCF - A</strong></td>
											<td align="center"><strong>Morphologie de l'extr??mit?? cephalique - A</strong></td>
											<td align="center"><strong>Morphologie des membres - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_a as $go_a) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
														<td align="center"><?= $go_a->goa_sVisibilite ?></td>
														<td align="center"><?= $go_a->goa_iLcc . ' mm' ?></td>
														<td align="center"><?= $go_a->goa_iBip . ' mm'?></td>
														<td align="center"><?= $go_a->goa_sActCard . ' mm'?></td>
														<td align="center"><?= $go_a->goa_iRcf . ' bpm'?></td>
														<td align="center"><?= $go_a->goa_sMorphoExt ?></td>
														<td align="center"><?= $go_a->goa_sMorphoMemb ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="8"><strong><u>Sac gestationnel:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Localisation</strong></td>
											<td align="center"><strong>Tonicit??</strong></td>
											<td align="center"><strong>Trophoblaste</strong></td>
											<td align="center" colspan="2"><strong>Diam??tre</strong></td>
											<td align="center" colspan="2"><strong>D??collement</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_a as $go_a) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
														<td align="center"><?= $go_a->goa_sLocalisation ?></td>
														<td align="center"><?= $go_a->goa_sToniocite ?></td>
														<td align="center"><?= $go_a->goa_sTrophoblaste ?></td>
														<td align="center" colspan="2"><?= $go_a->goa_iDiametre . ' mm' ?></td>
														<td align="center" colspan="2"><?= $go_a->goa_sDecollement ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="8"><strong><u>Foetus<br>Ovaire droit: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Taille</strong></td>
											<td align="center" colspan="3"><strong>Aspect</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_a as $go_a) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_a->goa_iOvDroit . 'mm ' ?></td>
														<td align="center" colspan="3"><?= $go_a->goa_sOvDroitAspect?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="8"><strong><u>Ovaire gauche: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Taille</strong></td>
											<td align="center" colspan="3"><strong>Aspect</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_a as $go_a) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_a->goa_iOvGauche . 'mm ' ?></td>
														<td align="center" colspan="3"><?= $go_a->goa_sOvGaucheAspect?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="8" style="height:10px;"><strong></strong></td>
										</tr>
										<tr>
											<td align="center" colspan="3"><strong>Date</strong></td>
											<td align="center" colspan="5"><strong>Conclusion</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_a = $this->md_patient->gyneco_a_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_a as $go_a) { ?>
													<tr>
														<td colspan="3"><?php echo substr($this->md_config->affDateTimeFr($go_a->goa_dEnreg),0,20); ?></td>
														<td colspan="5"><?= $go_a->goa_sConclusion ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>Tab panes-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="9">Echographie 1er trimestre</th>
								</thead>
								<tbody>
									<tr>
										<td align="center" colspan="2"><strong>Date</strong></td>
										<td align="center"><strong>Indication</strong></td>
										<td align="center"><strong>Voie d'examen</strong></td>
										<td align="center"><strong>Conditions de r??alisation</strong></td>
										<td align="center"><strong>Nombre de foetus</strong></td>
										<td align="center"><strong>Type de grossesse</strong></td>
										<td align="center" colspan="2"><strong>Membrane</strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$gyne_obs_b = $this->md_patient->gyneco_b_dossier_medical($id_sejours->sea_id);
												
											foreach($gyne_obs_b as $go_b) { ?>
												<tr>  
													<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_b->gob_dDateEnreg),0,20); ?></td>
													<td align="center"><?php echo $go_b->gob_sIndication; ?></td>
													<td align="center"><?php echo $go_b->gob_sVoie; ?></td>
													<td align="center"><?php echo $go_b->gob_sCondition; ?></td>
													<td align="center"><?php echo $go_b->gob_iNfoetus; ?></td>
													<td align="center"><?php echo $go_b->gob_sTypeGross; ?></td>
													<td align="center" colspan="2"><?php echo $go_b->gob_sMembrane; ?></td>
												</tr>
											<?php }
												
										}
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="9"><strong><u>Foetus</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center"><strong>Date</strong></td>
											<td align="center"><strong>Activit?? cardiaque - A</strong></td>
											<td align="center"><strong>RCF - A</strong></td>
											<td align="center"><strong>MAF - A </strong></td>
											<td align="center"><strong>LCC - A </strong></td>
											<td align="center"><strong>BIP - A</strong></td>
											<td align="center"><strong>PA - A</strong></td>
											<td align="center"><strong>Clart?? nuque - A</strong></td>
											<td align="center"><strong>F??rum - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_b = $this->md_patient->gyneco_b_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_b as $go_b) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_b->gob_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_b->gob_sActCardiaque ?></td>
														<td align="center"><?= $go_b->gob_iRcf . ' bpm' ?></td>
														<td align="center"><?= $go_b->gob_sMaf ?></td>
														<td align="center"><?= $go_b->gob_iLcc . ' mm'?></td>
														<td align="center"><?= $go_b->gob_iBip . ' mpm'?></td>
														<td align="center"><?= $go_b->gob_iPa . ' mm' ?></td>
														<td align="center"><?= $go_b->gob_iClarteNuque . ' mm' ?></td>
														<td align="center"><?= $go_b->gob_iFemur . ' mm' ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="9" style="height:10px;"><strong><u></u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" ><strong>Morpho de p??le c??phalique - A</strong></td>
											<td align="center"><strong>Abdomen - A</strong></td>
											<td align="center"><strong>Aspect des membranes - A</strong></td>
											<td align="center"><strong>Liquide amniotique - A</strong></td>
											<td align="center"><strong>Tropoblaste : localisation - A </strong></td>
											<td align="center"><strong>Tropoblaste : aspect - A </strong></td>
											<td align="center"><strong>D??collement - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_b = $this->md_patient->gyneco_b_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_b as $go_b) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_b->gob_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_b->gob_sMorphoExt ?></td>
														<td align="center"><?= $go_b->gob_sAbdomen ?></td>
														<td align="center"><?= $go_b->gob_sAspectMemb ?></td>
														<td align="center"><?= $go_b->gob_sLquide ?></td>
														<td align="center"><?= $go_b->gob_sLocalisation ?></td>
														<td align="center"><?= $go_b->gob_sAspect ?></td>
														<td align="center"><?= $go_b->gob_sDecollement ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td align="center" style="height:10px;" colspan="9"><strong></strong></td>
										</tr>
										<tr>
											<td align="center" colspan="4"><strong>Date</strong></td>
											<td align="center" colspan="5"><strong>Conclusion</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_b = $this->md_patient->gyneco_b_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_b as $go_b) { ?>
													<tr>
														<td colspan="4" align="center"><?php echo substr($this->md_config->affDateTimeFr($go_b->gob_dDateEnreg),0,20); ?></td>
														<td colspan="5" align="center"><?= $go_b->gob_sConclusion ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
						<!-- Tab panes	<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="7">Echographie 2??me trimestre</th>
								</thead>
								<tbody>
									<tr>
										<td align="center"><strong>Date</strong></td>
										<td align="center"><strong>Indication</strong></td>
										<td align="center"><strong>Voie d'examen</strong></td>
										<td align="center"><strong>Conditions de r??alisation</strong></td>
										<td align="center"><strong>Nombre de foetus</strong></td>
										<td align="center"><strong>Type de grossesse</strong></td>
										<td align="center"><strong>Membrane</strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
											foreach($gyne_obs_c as $go_c) { ?>
												<tr>  
													<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
													<td align="center"><?php echo $go_c->goc_sIndication; ?></td>
													<td align="center"><?php echo $go_c->goc_sVoie; ?></td>
													<td align="center"><?php echo $go_c->goc_sCondition; ?></td>
													<td align="center"><?php echo $go_c->goc_iNfoetus; ?></td>
													<td align="center"><?php echo $go_c->goc_sType; ?></td>
													<td align="center"><?php echo $go_c->goc_sMembrane; ?></td>
												</tr>
											<?php }
												
										}
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Foetus<br>Pr??sentation et vitalit??: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Pr??sentation - A</strong></td>
											<td align="center"><strong>Activit?? cardiaque - A</strong></td>
											<td align="center"><strong>RCF - A </strong></td>
											<td align="center" colspan="2"><strong>MAF - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_c->goc_sPresentation ?></td>
														<td align="center"><?= $go_c->goc_sActCardiaque ?></td>
														<td align="center"><?= $go_c->goc_iRcf . ' bpm'?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sMaf ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Biometrie:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>BIP - A</strong></td>
											<td align="center"><strong>PC - A</strong></td>
											<td align="center"><strong>PA - A</strong></td>
											<td align="center"><strong>F??mur - A </strong></td>
											<td align="center"><strong>Poids estim?? </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_c->goc_iBip . ' mm' ?></td>
														<td align="center"><?= $go_c->goc_iPc . ' mm' ?></td>
														<td align="center"><?= $go_c->goc_iPa . ' mm' ?></td>
														<td align="center"><?= $go_c->goc_iFemur . ' mm' ?></td>
														<td align="center"><?= $go_c->goc_iPoids . ' g' ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Morphologie:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Morphologie g??n??rale - A</strong></td>
											<td align="center" colspan="2"><strong>OGE - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_sMorpho ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sOge ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Annexes:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Liquide et cordon</strong></td>
											<td align="center"><strong>PGC - A</strong></td>
											<td align="center" colspan="2"><strong>Placenta - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sLiquide ?></td>
														<td align="center"><?= $go_c->goc_iPgc . ' mm' ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sPlacenta ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler ombilic:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ombilic IR - A</strong></td>
											<td align="center" colspan="2"><strong>Dop ombilic Flux en Dia - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_sDopIR ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sDopFlux ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler ACM:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Dop ACM IR - A</strong></td>
											<td align="center"><strong>Dop ACM Vitesse - A</strong></td>
											<td align="center" colspan="2"><strong>Dop ACM MoM - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sAcmIR ?></td>
														<td align="center"><?= $go_c->goc_iDopAcmVitesse . ' cm/s'?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sDopAcmMOM ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler Arantus:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop Arantus IR - A</strong></td>
											<td align="center" colspan="2"><strong>Dop Arantius onde A - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_sDopArantiusIR ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sDopArantiusOnde ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Ut??rus<br>Doppler ut??rus: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ut??rin Dt IR</strong></td>
											<td align="center" colspan="2"><strong>Dop ut??rin Dt Notch</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_sDopUterinDtIR ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sDopUterinDtNotch?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7" style="height:10px;"></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ut??rin G IR</strong></td>
											<td align="center" colspan="2"><strong>Dop ut??rin Dt Notch</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_sDopUterinGIR ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sDopUterinGNotch ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Col:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Longueur</strong></td>
											<td align="center" colspan="2"><strong>Entonnoir</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_c->goc_iColLongueur . ' mm' ?></td>
														<td align="center" colspan="2"><?= $go_c->goc_sColEntonnoir ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								
								<tbody>
										<tr>
											<td colspan="7" style="height:10px;"></td>
										</tr>
										<tr>
											<td align="center" colspan="3"><strong>Date</strong></td>
											<td align="center" colspan="4"><strong>Conclusion</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_c = $this->md_patient->gyneco_c_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_c as $go_c) { ?>
													<tr>
														<td colspan="3" align="center"><?php echo substr($this->md_config->affDateTimeFr($go_c->goc_dDateEnreg),0,20); ?></td>
														<td colspan="4" align="center"><?= $go_c->goc_sConclusion ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
						<!-- Tab panes	<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="7">Echographie 3??me trimestre</th>
								</thead>
								<tbody>
									<tr>
										<td align="center"><strong>Date</strong></td>
										<td align="center"><strong>Indication</strong></td>
										<td align="center"><strong>Voie d'examen</strong></td>
										<td align="center"><strong>Conditions de r??alisation</strong></td>
										<td align="center"><strong>Nombre de foetus</strong></td>
										<td align="center"><strong>Type de grossesse</strong></td>
										<td align="center"><strong>Membrane</strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
											foreach($gyne_obs_d as $go_d) { ?>
												<tr>  
													<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
													<td align="center"><?php echo $go_d->god_sIndication; ?></td>
													<td align="center"><?php echo $go_d->god_sVoie; ?></td>
													<td align="center"><?php echo $go_d->god_sCondition; ?></td>
													<td align="center"><?php echo $go_d->god_iNfoetus; ?></td>
													<td align="center"><?php echo $go_d->god_sType; ?></td>
													<td align="center"><?php echo $go_d->god_sMembrane; ?></td>
												</tr>
											<?php }
												
										}
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Foetus<br>Pr??sentation et vitalit??: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>Pr??sentation - A</strong></td>
											<td align="center"><strong>Activit?? cardiaque - A</strong></td>
											<td align="center"><strong>RCF - A </strong></td>
											<td align="center" colspan="2"><strong>MAF - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_d->god_sPresentation ?></td>
														<td align="center"><?= $go_d->god_sActCardiaque ?></td>
														<td align="center"><?= $go_d->god_iRcf . ' bpm'?></td>
														<td align="center" colspan="2"><?= $go_d->god_sMaf ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Biometrie:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center"><strong>BIP - A</strong></td>
											<td align="center"><strong>PC - A</strong></td>
											<td align="center"><strong>PA - A</strong></td>
											<td align="center"><strong>F??mur - A </strong></td>
											<td align="center"><strong>Poids estim?? </strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center"><?= $go_d->god_iBip . ' mm' ?></td>
														<td align="center"><?= $go_d->god_iPc . ' mm' ?></td>
														<td align="center"><?= $go_d->god_iPa . ' mm' ?></td>
														<td align="center"><?= $go_d->god_iFemur . ' mm' ?></td>
														<td align="center"><?= $go_d->god_iPoids . ' g' ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Morphologie:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Morphologie g??n??rale - A</strong></td>
											<td align="center" colspan="2"><strong>OGE - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_sMorpho ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sOge ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Annexes:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Liquide et cordon</strong></td>
											<td align="center"><strong>PGC - A</strong></td>
											<td align="center" colspan="2"><strong>Placenta - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sLiquide ?></td>
														<td align="center"><?= $go_d->god_iPgc . ' mm' ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sPlacenta ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler ombilic:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ombilic IR - A</strong></td>
											<td align="center" colspan="2"><strong>Dop ombilic Flux en Dia - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_sDopIR ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sDopFlux ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler ACM:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="2"><strong>Dop ACM IR - A</strong></td>
											<td align="center"><strong>Dop ACM Vitesse - A</strong></td>
											<td align="center" colspan="2"><strong>Dop ACM MoM - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sAcmIR ?></td>
														<td align="center"><?= $go_d->god_iDopAcmVitesse . ' cm/s'?></td>
														<td align="center" colspan="2"><?= $go_d->god_sDopAcmMOM ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Doppler Arantus:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop Arantus IR - A</strong></td>
											<td align="center" colspan="2"><strong>Dop Arantius onde A - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_sDopArantiusIR ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sDopArantiusOnde ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Ut??rus<br>Doppler ut??rus: </u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ut??rin Dt IR</strong></td>
											<td align="center" colspan="2"><strong>Dop ut??rin Dt Notch</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_sDopUterinDtIR ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sDopUterinDtNotch?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7" style="height:10px;"></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Dop ut??rin G IR</strong></td>
											<td align="center" colspan="2"><strong>Dop ut??rin Dt Notch</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_sDopUterinGIR ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sDopUterinGNotch ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Col:</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center" colspan="2"><strong>Date</strong></td>
											<td align="center" colspan="3"><strong>Longueur</strong></td>
											<td align="center" colspan="2"><strong>Entonnoir</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td align="center" colspan="2"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td align="center" colspan="3"><?= $go_d->god_iColLongueur . ' mm' ?></td>
														<td align="center" colspan="2"><?= $go_d->god_sColEntonnoir ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
								
								
								<tbody>
										<tr>
											<td colspan="7" style="height:10px;"></td>
										</tr>
										<tr>
											<td align="center" colspan="3"><strong>Date</strong></td>
											<td align="center" colspan="4"><strong>Conclusion</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_d = $this->md_patient->gyneco_d_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_d as $go_d) { ?>
													<tr>
														<td colspan="3" align="center"><?php echo substr($this->md_config->affDateTimeFr($go_d->god_dDateEnreg),0,20); ?></td>
														<td colspan="4" align="center"><?= $go_d->god_sConclusion ?></td>
													</tr>
												<?php }
												
											} 
										?>
									</tbody>
							</table>
							<br><br>-->
						<?php }
					?>
					
					<?php if($patient->pat_sSexe == "F") { ?>
							<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
								<thead align="center" style="background-color:rgb(167,206,0)">
									<th colspan="7">Issue de grossesse</th>
								</thead>
								<tbody>
									<tr>
										<td align="center" colspan="2"><strong>Date d'enregistrement</strong></td>
										<td align="center" colspan="2"><strong>Date d'accouchement</strong></td>
										<td align="center" colspan="2"><strong>Lieu</strong></td>
										<td align="center"><strong>Nombre de foetus</strong></td>
									</tr>
									<?php
										foreach($actes_medicaux_patient AS $id_sejours)
										{
											$gyne_obs_e = $this->md_patient->gyneco_e_dossier_medical($id_sejours->sea_id);
												
											foreach($gyne_obs_e as $go_e) { ?>
												<tr>
													<td colspan="2" align="center"><?php echo substr($this->md_config->affDateTimeFr($go_e->goe_dEnreg),0,20); ?></td>
													<td align="center" colspan="2"><?php echo ($this->md_config->dateEN2FR($go_e->goe_dDate)); ?></td>
													<td align="center" colspan="2"><?php echo $go_e->goe_sLieu; ?></td>
													<td align="center"><?php echo $go_e->goe_iNfoetus; ?></td>
												</tr>
											<?php }
												
										}
										?>
								</tbody>
								
								<tbody>
										<tr>
											<td colspan="7"><strong><u>Foetus</u></strong></td> 
										</tr>
										<tr>
											
											<td align="center"><strong>Date d'enregistrement</strong></td>
											<td align="center"><strong>Pr??nom - A</strong></td>
											<td align="center"><strong>sexe - A</strong></td>
											<td align="center"><strong>Poids - A  </strong></td>
											<td align="center"><strong>MAF - AMAF - A</strong></td>
											<td align="center"><strong>Etat de sant?? - A</strong></td>
											<td align="center"><strong>Terme - A</strong></td>
										</tr>
										<?php
											foreach($actes_medicaux_patient AS $id_sejours)
											{
												$gyne_obs_e = $this->md_patient->gyneco_e_dossier_medical($id_sejours->sea_id);
												
												foreach($gyne_obs_e as $go_e) { ?>
													<tr>
														<td align="center"><?php echo substr($this->md_config->affDateTimeFr($go_e->goe_dEnreg),0,20); ?></td>
														<td align="center"><?= $go_e->goe_sPrenom ?></td>
														<td align="center"><?= $go_e->goe_sSexe ?></td>
														<td align="center"><?= $go_e->goe_iPoids . ' g' ?></td>
														<td align="center"><?= $go_e->goe_sModalite ?></td>
														<td align="center"><?= $go_e->goe_sEtat ?></td>
														<td align="center"><?= $go_e->goe_sTerm ?></td>
													</tr>
												<?php }
												
											} 
										?>
								</tbody>
							</table>
							<br><br>
						<?php }
					?>
					
					<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
						<thead align="center" style="background-color:rgb(167,206,0)">
							<th colspan="7">Op??ration(s) chirurgicale(s)</th>
						</thead>
						<tbody>
							<tr>
								<td align="center"><strong>Acte chirurgical</strong></td>
								<td align="center"><strong>M??decin</strong></td>
								<td align="center"><strong>Date de l'op??ration</strong></td>
								<td align="center"><strong>Heure de d??but</strong></td>
								<td align="center"><strong>Heure de fin</strong></td>
								<td align="center"><strong>Bloc/Salle</strong></td>
								<td><strong>Compte rendu de l'op??ration</strong></td>
							</tr>
							<?php
								foreach($actes_medicaux_patient AS $id_sejours)
								{
									$chirurgie = $this->md_chirurgie->operation_planifiee_dossier_medical($id_sejours->sea_id);
									
									foreach($chirurgie AS $ch) { ?>
										<tr>
											<td><?= $ch->lac_sLibelle ?></td>
											<td align="center"><?= $ch->per_sNom . ' ' . $ch->per_sPrenom . '<br>' . '(' . $ch->per_sMatricule . ')' ?></td>
											<td align="center"><?php echo $this->md_config->dateEN2FR($ch->pop_dDate) ?></td>
											<td align="center"><?= $ch->pop_tHeureDebutOpe ?></td>
											<td align="center"><?= $ch->pop_tHeureFinOpe ?></td> 
											<td align="center"><?= $ch->bop_sLibelle . '/' . $ch->sop_sLibelle ?></td> 
											<td><?= $ch->pop_sCompteRendu ?></td>
										</tr>
									<?php }
									
								} 
							?>
						</tbody>
					</table>
					<br><br>-->
					
					<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
							<thead align="center" style="background-color:rgb(167,206,0)">
								<th colspan="5">Examen d'imag??rie</th>
							</thead>
							<tbody>
								<tr>
									<td colspan="5"><strong><u>Indications</u></strong>:</td> 
								</tr>
								<tr>
									<td align="center"><strong>Date de r??alisation</strong></td>
									<td align="center"><strong>Acte d'imag??rie</strong></td>
									<td align="center"><strong>M??decin radiologue</strong></td>
									
									<td align="center"><strong>Image(s)</strong></td>
									<td align="center"><strong>Compte Rendu</strong></td>
								</tr>
								<?php
									foreach($actes_medicaux_patient AS $id_sejours)
									{
										$imagerie = $this->md_patient->acte_imagerie_sejour_dossier_medical($id_sejours->sea_id);
										
										foreach($imagerie AS $imag) { ?>
											<tr>
												<td align="center">
													<?= $imag->aci_dDate !== null ? substr($this->md_config->affDateTimeFr($imag->aci_dDate),0,20) : ''?>
												</td>
												<td align="center"><?php echo $imag->lac_sLibelle; ?></td>
												<td align="center">
													<?= $imag->per_sNom !== null ? $imag->per_sNom : ''?>
													<?= $imag->per_sPrenom !== null ? $imag->per_sPrenom : '' ?> (<?= $imag->per_sMatricule !== null ? $imag->per_sMatricule : '' ?>)
												</td>
												<td style="width:88px;">
													<?php if(!is_null($imag->aci_sImage)): ?>
														<img src="<?php echo base_url($imag->aci_sImage) ;?>" width="287px" height="185px"/>
													<?php else: ?>
														<?php echo ''; ?>
													<?php endif; ?>
												</td>
												<td>
													<?= $imag->aci_sCompteRendu !== null ? $imag->aci_sCompteRendu : ''?>
												</td>
											</tr>
										<?php }
										
									}
								?>
							</tbody>
					</table>
					<br><br>-->
					
					<?php if($patient->pat_iSta == 0): ?>
						<!-- Tab panes<table style="width:100%; height:50px; font-size:12px" border="1" cellspacing="0">
							<thead align="center" style="background-color:rgb(167,206,0)">
								<th colspan="4">D??claration de d??c??s</th>
							</thead>
							<tbody>
								<tr>
									<td align="center"><strong>Date de d??c??s</strong></td>
									<td align="center"><strong>Heure de d??c??s</strong></td>
									<td align="center"><strong>Unit??</strong></td>
									<td align="center"><strong>Cause</strong></td>
								</tr>
								<?php if(!is_null($deces)): ?>
									<tr>
										<td align="center"><?php echo $this->md_config->affDateFrNum($deces->dec_dDateDeces); ?></td>
										<td align="center"><?php echo $deces->dec_tHeureDeces; ?></td>
										<td align="center"><?php echo $deces->uni_sLibelle; ?></td>
										<td><?php echo $deces->dec_sCause; ?></td>
									</tr>
								<?php endif; ?>
							</tbody>
					</table>-->
					<?php endif; ?>
					
				</div>	
				<table class="footer" style="width:100%; font-weight:bold; font-size:12px">
					<tr>
						<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u><?php echo $info->str_sEmail;?></u></i></span></span>
						</td>
					</tr>
					<tr>
						<td style="font-size:12px" align="center">tel:<?php echo $info->str_sTel;?></td>
					</tr>
				
				</table>
		</div>
	</body>
</html>