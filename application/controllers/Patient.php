<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	 //Raby
	 public function liste_dossier_patient()
	{
		$this->load->view('app/medecin_generaliste/page-liste-patient');
	}
	//RABY
	public function nouveau()
	{
		$this->load->view('app/accueil/page-nouveau-patient');
	}	
	
	public function liste_modifier_patient()
	{
		$this->load->view('app/accueil/page-liste-modifier-patient');
	}
	
	
	public function liste()
	{
		$this->load->view('app/accueil/page-liste-patient');
	}
	
	
	public function deces()
	{
		$this->load->view('app/accueil/page-liste-patient-deces');
	}
	
	
	public function complement($id)
	{
		$this->load->view('app/accueil/page-complement-patient',array("id"=>$id));
	}
	
	public function accueil($id)
	{
		$this->load->view('app/accueil/page-accueil-patient',array("id"=>$id));
	}
	
	public function voir($id)
	{
		$this->load->view('app/accueil/page-detail-patient',array("id"=>$id));
	}
	
	public function modifier($id)
	{
		$this->load->view('app/accueil/page-modifier-patient',array("id"=>$id));
	}
	
	//Raby
	
	
	public function soldePrescripteur(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		//var_dump($premier,$dernier);
		$pre = $this->md_parametre->liste_prescripteur_actifs();
		//$montant = $this->md_patient->montant($premier,$dernier);
		/*$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); */
		
		
		echo '<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Ristourne des médecins Prescripteurs</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Titre</th>
										<th>Médecin</th>
										<th>Solde (fcfa)</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>';
									$Total =0;
									foreach($pre AS $a){
									$montant = $this->md_patient->solde_prescripteur_actifs($a->pre_id,$premier,$dernier);
									//var_dump($a->pre_id,$montant);
									$Total +=$montant->montant;
									echo '<tr>
										<td>'.$a->pre_sTitre.'</td>
										<td>'.$a->pre_sNom.' '.$a->pre_sPrenom.'</td>
										<th>'.number_format($montant->montant,0,",",".").'</th>
										<th class="text-center"><a href="'.site_url("statistique/detail_ristourne/".$a->pre_id).'?>"><i class="fa fa-eye"></i></a></th>
									</tr>';
									 } 
								echo '</tbody>
								<tfoot>
									<tr>
										<th ></th>
										<th ><strong>Total</strong></th>
										<th ><strong>'.$Total.'FCFA</strong></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
		
		
	}
	
	public function prescripteur_Actes(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		//var_dump($premier,$dernier);
		$pre = $this->md_parametre->recup_prescripteur_actif($data["id"]);
		//$montant = $this->md_patient->montant($premier,$dernier);
		/*$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); */
		
		
		echo '
				<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>'.$pre->pre_sTitre." ".$pre->pre_sNom." ".$pre->pre_sPrenom.'</h2>
						(<a href="'.site_url("Impression/ristourne/".$pre->pre_id."--".$premier."--".$dernier).'" align="right" type="submit" class=" m-1">Imprimer</a>)
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Prescription</th>
										<th>Date</th>
										<th>Montant</th>
										<th>Ristourne(%)</th>
									</tr>
								</thead>
								<tbody>';
									
									$montant = $this->md_patient->solde_prescripteur_actifs($pre->pre_id,$premier,$dernier);
									$liste = $this->md_patient->liste_prescriptions($pre->pre_id,$premier,$dernier);
									//var_dump($a->pre_id,$montant);
									$montant_presc=0;
									if(count($liste) > 0){
										foreach($liste as $l){
											$montant_presc +=$l->fac_iMontant;
									echo '<tr>
										<td>'.$l->lac_sLibelle.'</td>
										<td>'.$l->fac_dDatePaie.'</td>
										<td>'.$l->fac_iMontant.'</td>
										<th>'.$l->pre_iPourcentage.'</th>
									</tr>';
										}
									}else{
										echo '<tr>
												<td colspan="4"><i>Accune prescription</i></td>
											</tr>';
									}
								echo '</tbody>';
								if(count($liste) > 0){
								echo '<tfoot>
									<tr>
										<th ></th>
										<th ></th>
										<th >Total :</th>
										<th>'.$montant_presc.' FCFA</th>
									</tr>
									<tr>
										<th ></th>
										<th ></th>
										<th ><strong>Ristourne :</strong></th>
										<th>'.number_format($montant->montant,0,",",".").' FCFA</th>
									</tr>
								</tfoot>';
								}
							echo '</table>
						</div>
					</div>
				</div>
				
			</div>';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
		
		
	}	
	
	
	public function prescription_Actes_madecin(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		//var_dump($premier,$dernier);
		$per = $this->md_parametre->recup_medecin($data["id"]);
		//var_dump(count($per));
		//$montant = $this->md_patient->montant($premier,$dernier);
		/*$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); */
		
		echo '
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>'.$per->per_sTitre." ".$per->per_sNom.' '.$per->per_sPrenom.'</h2>
						(<a href="'.site_url("Impression/quotes_parts/".$per->per_id."--".$per->tqp_iPourcentage."--".$premier."--".$dernier).'" align="right" type="submit" class=" m-1">Imprimer</a>)
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Prescription</th>
										<th>Date</th>
										<th>Montant</th>
										<th>Quote part(%)</th>
									</tr>
								</thead>
								<tbody>';
									
									 //$montant = $this->md_patient->solde_prescripteur_actifs($a->pre_id,date("Y-m-d"),date("Y-m-d"));
									 $montant = $this->md_patient->solde_qoute_part_imagerie_actifs($per->per_id,$per->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59"); 
									 $montant1 = $this->md_patient->solde_qoute_part_laboratoire_actifs($per->per_id,$per->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59");
									 $montant2 = $this->md_patient->solde_qoute_part_reeducation_actifs($per->per_id,$per->tqp_iPourcentage,$premier,$dernier); 
									 $montant3 = $this->md_patient->solde_qoute_part_exploration_actifs($per->per_id,$per->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59"); 
									 //var_dump($montant,$montant1,$montant2,$montant3); 
									 $liste = $this->md_patient->liste_prescription_imagerie($per->per_id,$premier." 00:00:00",$dernier." 23:59:59"); 
									 $liste1 = $this->md_patient->liste_prescription_laboratoire($per->per_id,$premier." 00:00:00",$dernier." 23:59:59"); 
									 $liste2 = $this->md_patient->liste_prescription_reeducation($per->per_id,$premier,$dernier); 
									 $liste3 = $this->md_patient->liste_prescription_exploration($per->per_id,$premier." 00:00:00",$dernier." 23:59:59"); 
									 
									 $Total = 0; 
									 if( count($liste) > 0 AND  count($liste1) > 0 AND  count($liste2) > 0 AND  count($liste3) > 0){ 
										foreach($liste as $l){ 
											$Total += $l->lac_iCout; 
											 echo'<tr>
												<td>'.$l->lac_sLibelle.'</td>
												<td>'.$this->md_config->dateTimeEN2FR($l->img_dDate).'</td>
												<td>'.$l->lac_iCout.'</td>
												<th>'.$per->tqp_iPourcentage.'</th>
											</tr>';
										 } 
										 
										 foreach($liste1 as $l1){ 
											$Total += $l1->lac_iCout; 
											echo '<tr>
												<td>'.$l1->lac_sLibelle.'</td>
												<td>'.$this->md_config->dateTimeEN2FR($l1->lab_dDate).'</td>
												<td>'.$l1->lac_iCout.'</td>
												<th>'.$per->tqp_iPourcentage.'</th>
											</tr>';
										}
										
										foreach($liste2 as $l2){ 
											$Total += $l2->lac_iCout; 
											echo '<tr>
												<td>'.$l2->lac_sLibelle.'</td>
												<td>'.$this->md_config->dateEN2FR($l2->ree_dDate).'</td>
												<td>'.$l2->lac_iCout.'</td>
												<th>'.$per->tqp_iPourcentage.'</th>
											</tr>';
										} 
										
										foreach($liste3 as $l3){ 
											$Total += $l3->lac_iCout;
											echo '<tr>
												<td>'.$l3->lac_sLibelle.'</td>
												<td>'.$this->md_config->dateTimeEN2FR($l3->efc_dDate).'</td>
												<td>'.$l3->lac_iCout.'</td>
												<th>'.$per->tqp_iPourcentage.'</th>
											</tr>';
										}
									
									}else{
										echo '<tr>
												<td colspan="4"><i>Accune prescription</i></td>
											</tr>';
									}
								echo '</tbody>';
								 if( count($liste) > 0 AND  count($liste1) > 0 AND  count($liste2) > 0 AND  count($liste3) > 0){ 
								echo '<tfoot>
									<tr>
										<th ></th>
										<th ></th>
										<th >Total :</th>
										<th>'.$Total.' FCFA</th>
									</tr>
									<tr>
										<th ></th>
										<th ></th>
										<th >Ristourne :</th>
										<th>'.number_format($montant->montant+$montant1->montant+$montant2->montant+$montant3->montant,0,",",".").' FCFA</th>
									</tr>
								</tfoot>';
								}
							echo '</table>
						</div>
					</div>
				</div>
			</div>';
		 
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
		
		
	}	
	
	
	public function solde_Quote_part(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		//var_dump($premier,$dernier);
		$pre = $this->md_parametre->liste_medecin_ayant_quote_part_actifs();
		//$montant = $this->md_patient->montant($premier,$dernier);
		/*$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); */
		
		
		echo '<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Quote part des medecins</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th style="width:10%;">Titre</th>
										<th style="width:40%;">Médecin</th>
										<th style="width:20%;">Montant</th>
										<th style="width:20%;">Quote part(%)</th>
										<th style="width:15%;">Action</th>
									</tr>
								</thead>
								<tbody>';
									$Total=0;
									foreach($pre AS $a){
									 $montant = $this->md_patient->solde_qoute_part_imagerie_actifs($a->per_id,$a->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59"); 
									 $montant1 = $this->md_patient->solde_qoute_part_laboratoire_actifs($a->per_id,$a->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59");
									 $montant2 = $this->md_patient->solde_qoute_part_reeducation_actifs($a->per_id,$a->tqp_iPourcentage,$premier,$dernier); 
									 $montant3 = $this->md_patient->solde_qoute_part_exploration_actifs($a->per_id,$a->tqp_iPourcentage,$premier." 00:00:00",$dernier." 23:59:59"); 
									 //var_dump($a->pre_id,$montant);
									$Total +=$montant->montant+$montant1->montant+$montant2->montant+$montant3->montant;
									echo '<tr>
										<td>'.$a->per_sTitre.'</td>
										<td>'.$a->per_sNom.' '.$a->per_sPrenom.'</td>
										<th>'.number_format($montant->montant+$montant1->montant+$montant2->montant+$montant3->montant,0,",",".").'</th>
										<td class="text-center">'.$a->tqp_iPourcentage.'</td>
										<td class="text-center"><a href="'.site_url("statistique/detail_quotes_parts/".$a->per_id).'"><i class="fa fa-eye"></i></a></td>
									</tr>';
									 } 
								echo '</tbody>
								<tfoot>
									<tr>
										<th ></th>
										<th ><strong>Total</strong></th>
										<th ><strong>'.$Total.' FCFA</strong></th>
										<th ></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
		
		
	}	
	
	
	public function recherche_patient()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->recherche_patient($data["search"]);
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td>'.$r->pat_sNom.'</td>
							<td>'.$r->pat_sPrenom.'</td>
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.='<i>Non renseigné</i>';}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sOtherPhone)){$liste.=$r->pat_sOtherPhone;}else{$liste.='<i>Non renseigné</i>';} 
							$liste.='</td>
							<td><a style="margin:0px" rel="'.$r->pat_id.'" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey patientconcerne" id=""><i class="fa fa-plus"></i></a></td>
						</tr>';
					
			}
			$liste.='<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo $liste;
		}
	}
	
	public function recherche_patient_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->liste_patient_100();
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td>'.$r->pat_sNom.'</td>
							<td>'.$r->pat_sPrenom.'</td>
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.='<i>Non renseigné</i>';}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sOtherPhone)){$liste.=$r->pat_sOtherPhone;}else{$liste.='<i>Non renseigné</i>';} 
							$liste.='</td>
							<td><a style="margin:0px" rel="'.$r->pat_id.'" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey patientconcerne" id=""><i class="fa fa-plus"></i></a></td>
						</tr>';
					
			}
			$liste.='<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo $liste;
		}
	}
	
	public function recherche_patient_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->recherche_patient($data["search"]);
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td><a href="#" class="p-profile-pix"><img src="'.base_url($r->pat_sAvatar).'" width="40" height="40" alt="user" class="img-thumbnail img-fluid"></a></td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sNom.'</a> </td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sPrenom.'</a> </td>
							<!--<td><?php //$ageAnnee= $this->md_config->ageAnnee($l->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($l->pat_dDateNaiss)." mois";} ?></td>-->
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.="<i>Non renseigné</i>";}
							$liste.='</td>
							<td>'; 
							if(!is_null($r->pat_sOtherPhone)){ $liste.=$r->pat_sOtherPhone;}else{$liste.= "<i>Non renseigné</i>";}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sAdresse)){$liste.=$r->pat_sAdresse;}else{$liste.="<i>Non renseignée</i>";}
							$liste.='</td>
							<td><a href="'.site_url("patient/accueil/".$r->pat_id).'" class="btn bg-blue-grey waves-effect btn-sm" style="color:#fff">Orienter</a></td>
						</tr>';
			}
			echo $liste;
		}
	}
	
	
	public function recherche_patient_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->liste_patient_100();
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td><a href="#" class="p-profile-pix"><img src="'.base_url($r->pat_sAvatar).'" width="40" height="40" alt="user" class="img-thumbnail img-fluid"></a></td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sNom.'</a> </td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sPrenom.'</a> </td>
							<!--<td><?php //$ageAnnee= $this->md_config->ageAnnee($l->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($l->pat_dDateNaiss)." mois";} ?></td>-->
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.="<i>Non renseigné</i>";}
							$liste.='</td>
							<td>'; 
							if(!is_null($r->pat_sOtherPhone)){ $liste.=$r->pat_sOtherPhone;}else{$liste.= "<i>Non renseigné</i>";}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sAdresse)){$liste.=$r->pat_sAdresse;}else{$liste.="<i>Non renseignée</i>";}
							$liste.='</td>
							<td><a href="'.site_url("patient/accueil/".$r->pat_id).'" class="btn bg-blue-grey waves-effect btn-sm" style="color:#fff">Orienter</a></td>
						</tr>';
			}
			echo $liste;
		}
	}
	
	
	
	
	public function recherche_patient_Mod()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->recherche_patient($data["search"]);
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td><a href="#" class="p-profile-pix"><img src="'.base_url($r->pat_sAvatar).'" width="40" height="40" alt="user" class="img-thumbnail img-fluid"></a></td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sNom.'</a> </td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sPrenom.'</a> </td>
							<!--<td><?php //$ageAnnee= $this->md_config->ageAnnee($l->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($l->pat_dDateNaiss)." mois";} ?></td>-->
							<td>'.$ageAnnee= $this->md_config->ageAnnee($r->pat_dDateNaiss);
							if($ageAnnee>1){ $liste.=$ageAnnee." ans";}else if($ageAnnee ==1){$liste.=$ageAnnee." an";}else{$liste.=$this->md_config->ageMois($r->pat_dDateNaiss)." mois";}$liste.='</td>
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.="<i>Non renseigné</i>";}
							$liste.='</td>
							<td>'; 
							if(!is_null($r->pat_sOtherPhone)){ $liste.=$r->pat_sOtherPhone;}else{$liste.= "<i>Non renseigné</i>";}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sAdresse)){$liste.=$r->pat_sAdresse;}else{$liste.="<i>Non renseignée</i>";}
							$liste.='</td>
							<td>
								<a onclick="';
							$liste.=' return confirm("Confirmez-vous la suppression de ce patient ?");';
							$liste.='" href="'.site_url("patient/supprimer_patient/".$r->pat_id).'" class=""><i class="zmdi zmdi-delete text-danger"></i></a>
								&nbsp;&nbsp; 
									<a href="'.site_url("patient/modifier/".$r->pat_id).'" class="" title="Modifier"><i class="zmdi zmdi-edit"></i></a> 
								&nbsp;&nbsp;
								<a href="'.site_url("patient/voir/".$r->pat_id).'" class="" title="Voir détails"><i class="fa fa-eye text-success"></i></a>
							</td>
						</tr>';
			}
			echo $liste;
		}
	}
	
	
	public function recherche_patient_Mod_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->liste_patient_100();
			$liste="";
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td><a href="#" class="p-profile-pix"><img src="'.base_url($r->pat_sAvatar).'" width="40" height="40" alt="user" class="img-thumbnail img-fluid"></a></td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sNom.'</a> </td>
							<td><a href="'.site_url("patient/voir/".$r->pat_id).'">'.$r->pat_sPrenom.'</a> </td>
							<!--<td><?php //$ageAnnee= $this->md_config->ageAnnee($l->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($l->pat_dDateNaiss)." mois";} ?></td>-->
							<td>'.$ageAnnee= $this->md_config->ageAnnee($r->pat_dDateNaiss);
							if($ageAnnee>1){ $liste.=$ageAnnee." ans";}else if($ageAnnee ==1){$liste.=$ageAnnee." an";}else{$liste.=$this->md_config->ageMois($r->pat_dDateNaiss)." mois";}$liste.='</td>
							<td>';
							if(!is_null($r->pat_sTel)){$liste.=$r->pat_sTel;}else{$liste.="<i>Non renseigné</i>";}
							$liste.='</td>
							<td>'; 
							if(!is_null($r->pat_sOtherPhone)){ $liste.=$r->pat_sOtherPhone;}else{$liste.= "<i>Non renseigné</i>";}
							$liste.='</td>
							<td>';
							if(!is_null($r->pat_sAdresse)){$liste.=$r->pat_sAdresse;}else{$liste.="<i>Non renseignée</i>";}
							$liste.='</td>
							<td>
								<a onclick="';
							$liste.=' return confirm("Confirmez-vous la suppression de ce patient ?");';
							$liste.='" href="'.site_url("patient/supprimer_patient/".$r->pat_id).'" class=""><i class="zmdi zmdi-delete text-danger"></i></a>
								&nbsp;&nbsp; 
									<a href="'.site_url("patient/modifier/".$r->pat_id).'" class="" title="Modifier"><i class="zmdi zmdi-edit"></i></a> 
								&nbsp;&nbsp;
								<a href="'.site_url("patient/voir/".$r->pat_id).'" class="" title="Voir détails"><i class="fa fa-eye text-success"></i></a>
							</td>
						</tr>';
			}
			echo $liste;
		}
	}
	
	
	public function recherche_element_caisse()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		//var_dump($data);
		if(empty($data)){
			return redirect();
			
		}
		else{
			$resultat=$this->md_patient->recherche_element_caisse($data["search"]);
			$liste="";
			$user = $this->md_connexion->personnel_connect();
			foreach($resultat as $r){
				$liste.='<tr>
							<td>';
							if($user->per_iCnx==1){
								$liste.='<input type="hidden" name="pat" value="'.$r->pat_id.'"/>';
							}
								$liste.='<div class="switch">
									<label>
										<input type="checkbox" class="checkPatient" name="id[]" value="'.$r->acm_id . "-/-" .$r->pat_id.'">
										<span class="lever"></span>
									</label>
								</div>
							</td>
							<td>
								'.$this->md_config->affDateTimeFr($r->acm_dDate).'
							</td>
							<td>
								'.$r->pat_sMatricule.'
							</td>
							<td>
								'.$r->pat_sNom.' '.$r->pat_sPrenom.'
							</td>
							<td>';
								
								if(is_null($r->acm_sDent)){
									$liste.=$dent = "";
								}
								else{
									$liste.=$dent = " - ".$r->acm_sDent;
								} 
								$liste.=$r->lac_sLibelle.$dent ; 
							
							$liste.='</td>
							<td>
								'.number_format($r->lac_iCout,0,",",".").'
							</td>
						</tr>';
						
			}
			$liste.='<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo $liste;
		}
	}
	
	
	public function recherche_element_caisse_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->liste_element_caisse(date("Y-m-d H:i:s"));
			$liste="";
			$user = $this->md_connexion->personnel_connect();
			foreach($resultat as $r){
				$liste.='<tr>
							<td>';
							if($user->per_iCnx==1){
								$liste.='<input type="hidden" name="pat" value="'.$r->pat_id.'"/>';
							}
								$liste.='<div class="switch">
									<label>
										<input type="checkbox" class="checkPatient" name="id[]" value="'.$r->acm_id . "-/-" .$r->pat_id.'">
										<span class="lever"></span>
									</label>
								</div>
							</td>
							<td>
								'.$this->md_config->affDateTimeFr($r->acm_dDate).'
							</td>
							<td>
								'.$r->pat_sMatricule.'
							</td>
							<td>
								'.$r->pat_sNom.' '.$r->pat_sPrenom.'
							</td>
							<td>';
								
								if(is_null($r->acm_sDent)){
									$liste.=$dent = "";
								}
								else{
									$liste.=$dent = " - ".$r->acm_sDent;
								} 
								$liste.=$r->lac_sLibelle.$dent ; 
							
							$liste.='</td>
							<td>
								'.number_format($r->lac_iCout,0,",",".").'
							</td>
						</tr>';
			}
			$liste.='<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo $liste;
		}
	}
	
	public function recherche_patient_hos_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		//var_dump($data);
		if(empty($data)){
			return redirect();
			
		}
		else{
			$resultat=$this->md_patient->recherche_patient_hos_list($data["search"]);
			$liste="";
			$user = $this->md_connexion->personnel_connect();
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td>'. $r->pat_sNom.'</td>
							<td>'.$r->pat_sPrenom.'</td>
							<td>
								'.$r->ser_sLibelle.'
							</td>
							<td>
								'.$r->uni_sLibelle.'
							</td>
							<td>
								'.$r->cha_sLibelle.'
							</td>
							<td>
								'. $r->lit_sLibelle.'
							</td>
							<td>'.$r->hos_sType.'</td>
							<td class="text-center">'.$this->md_config->affDateTimeFr($r->hos_dDate).'</td>
							<td class="text-center"><a style="margin:0px" title="Imprission facture d\'admission" rel="" href="'.site_url("impression/facuture_admission/".$r->pat_id).'" class="btn btn-sm waves-effect bg-blue-grey" id="" ><i class="fa fa-print mb-2" ></i></a></td>
						</tr>';
						
			}
			
			echo $liste;
		}
	}
	
	
	public function recherche_patient_hos_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_patient->liste_hospitalisation_100();
			$liste="";
			$user = $this->md_connexion->personnel_connect();
			foreach($resultat as $r){
				$liste.='<tr>
							<td>'.$r->pat_sMatricule.'</td>
							<td>'. $r->pat_sNom.'</td>
							<td>'.$r->pat_sPrenom.'</td>
							<td>
								'.$r->ser_sLibelle.'
							</td>
							<td>
								'.$r->uni_sLibelle.'
							</td>
							<td>
								'.$r->cha_sLibelle.'
							</td>
							<td>
								'. $r->lit_sLibelle.'
							</td>
							<td>'.$r->hos_sType.'</td>
							<td class="text-center">'.$this->md_config->affDateTimeFr($r->hos_dDate).'</td>
							<td class="text-center"><a style="margin:0px" title="Imprission facture d\'admission" rel="" href="'.site_url("impression/facuture_admission/".$r->pat_id).'" class="btn btn-sm waves-effect bg-blue-grey" id="" ><i class="fa fa-print mb-2" ></i></a></td>
						</tr>';
			}
			echo $liste;
		}
	}
	
	//Raby
	
	public function ajoutPatient()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("patient/nouveau");
			// var_dump($data);
		}
		else{
			if(trim($data["prenom"]) == ""){
				$prenom=NULL;
			}
			else{
				$prenom=ucwords(trim($data["prenom"]));
			}
			
			if(trim($data["adresse"]) == ""){
				$adresse=NULL;
			}
			else{
				$adresse=trim($data["adresse"]);
			}			
			
			if(trim($data["natio"]) == ""){
				$natio=NULL;
			}
			else{
				$natio=trim($data["natio"]);
			}
			
			if(trim($data["date_naiss"]) == ""){
				$date_naiss=NULL;
			}
			else{
				$date_naiss = $this->md_config->recupDateTime($data["date_naiss"]);
			}			
			
			// if(trim($data["dateEnr"]) == ""){
				// $dateEnr=NULL;
			// }
			// else{
				// $dateEnr1 = $this->md_config->recupDateTime($data["dateEnr"]);
				// $dateEnr = $dateEnr1.date("H:i:s");
			// }
			
			if(trim($data["profession"]) == ""){
				$data["profession"]=NULL;
			}			
			
			// if(trim($data["cpa"]) == ""){
				// $data["cpa"]=0;
			// }
			
			if($data["genre"]=="H"){
				$avatar = "assets/images/patients/avatar-homme.png";
				$civilite = 'M.';
			}else{
				$avatar = "assets/images/patients/avatar-femme.png";
				$civilite = 'Mme';
			}	
			
			if($data["otherPhone"]==""){
				$data["otherPhone"] == NULL;
			}elseif(!is_numeric($data["otherPhone"])){
				echo "Ceci n'est pas un numéro de téléphone valide";
				return;
			}else{
				$formatTel = $this->md_config->formatPhoneCongo(trim($data["otherPhone"]));
				if($formatTel == false){
					echo "Ce numéro de téléphone n'est pas valide en république du Congo";
					return;
				}else{
					$data["otherPhone"] = "+242".$formatTel;
				}
			}
			
			if(trim($data["tel"]) !="" AND $_FILES["photo"]["name"]==""){
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{

						$verifPhone = $this->md_patient->verif_tel("+242".$formatTel);
						if(!$verifPhone){
								
							$donnees = array(
								"pat_iSta"=>1,
								"pat_sNom"=>strtoupper(trim($data["nom"])),
								"pat_sPrenom"=>$prenom,
								"pat_sAdresse"=>$adresse,
								"pat_sSexe"=>$data["genre"],
								"pat_sTel"=>"+242".$formatTel,
								"pat_sOtherPhone"=>$data["otherPhone"],
								"pat_sCivilite"=>$civilite,
								"pat_sNatio"=>$data["natio"],
								"pat_sSituationMat"=>$data["situation"],
								"pat_sProfession"=>ucfirst(trim($data["profession"])),
								"pat_dDateNaiss"=>$date_naiss,
								"cpa_id"=>0,
								"pat_iFemme"=>0,
								"pat_iEnfant"=>0,
								"pat_sAvatar"=>$avatar,
								"pat_dDateEnreg"=>date("Y-m-d H:i:s")
							);
							$ajout=$this->md_patient->ajout_patient($donnees);
							
							if($ajout){
								$log = array(
									"log_iSta"=>0,
									"per_id"=>$this->md_config->get_session(),
									"log_sTable"=>"t_patients_pat",
									"log_sIcone"=>"nouveau patient",
									"log_sAction"=>"a ajouté un nouveau patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
									"log_dDate"=>date("Y-m-d H:i:s")
								);
								$this->md_connexion->rapport($log);
								echo $ajout;
							}
						}
						else{
							echo "Ce numéro de téléphone est déja enregistré pour un autre patient";
						}
						
					}
				}
					
				
			}
			else if(trim($data["tel"]) !="" AND $_FILES["photo"]["name"]!=""){
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{

						$verifPhone = $this->md_patient->verif_tel("+242".$formatTel);
						if(!$verifPhone){
							$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
							if(!$verifTaille){
								echo "La taille de l'image ne doit pas dépasser les 150 Ko";
							}
							else{
								$config["upload_path"] =  './assets/images/patients/';
								$config["allowed_types"] = 'jpg|png|jpeg';
								$nomImage= time()."-".$_FILES["photo"]["name"];
								$config["file_name"] = $nomImage; 
								$verifImage = $this->md_config->uploadImage($_FILES["photo"]);
								
								if(!$verifImage){
									echo "Les formats de l'image autorisés sont .jpg, .jpeg, .png";
								}
								else{
									$this->load->library('upload',$config);
								
									if($this->upload->do_upload("photo")){
										$image=$this->upload->data();
										$data["photo"]="assets/images/patients/".$image['file_name'];
									}
									else{
										$data["photo"]=$avatar;
									}

									$donnees = array(
										"pat_iSta"=>1,
										"pat_sNom"=>strtoupper(trim($data["nom"])),
										"pat_sPrenom"=>$prenom,
										"pat_sAdresse"=>$adresse,
										"pat_sSexe"=>$data["genre"],
										"pat_sAvatar"=>$data["photo"],
										"pat_sTel"=>"+242".$formatTel,
										"pat_sOtherPhone"=>$data["otherPhone"],
										"pat_sCivilite"=>$civilite,
										"pat_sSituationMat"=>$data["situation"],
										"pat_sProfession"=>ucfirst(trim($data["profession"])),
										"pat_dDateNaiss"=>$date_naiss,
										"cpa_id"=>0,
										"pat_iFemme"=>0,
										"pat_iEnfant"=>0,
										"pat_sAvatar"=>$data["photo"],
										"pat_dDateEnreg"=>date("Y-m-d H:i:s")
									);
									$ajout=$this->md_patient->ajout_patient($donnees);
									
									if($ajout){
										$log = array(
											"log_iSta"=>0,
											"per_id"=>$this->md_config->get_session(),
											"log_sTable"=>"t_patients_pat",
											"log_sIcone"=>"nouveau patient",
											"log_sAction"=>"a ajouté un nouveau patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
											"log_dDate"=>date("Y-m-d H:i:s")
										);
										$this->md_connexion->rapport($log);
										echo $ajout;
									}
								}
							}
						}
						else{
							echo "Ce numéro de téléphone est déja enregistré pour un autre patient";
						}
						
					}
				}
	
			}
			else if(trim($data["tel"]) =="" AND $_FILES["photo"]["name"]!=""){

				$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
				if(!$verifTaille){
					echo "La taille de l'image ne doit pas dépasser les 150 Ko";
				}
				else{
					$config["upload_path"] =  './assets/images/patients/';
					$config["allowed_types"] = 'jpg|png|jpeg';
					$nomImage= time()."-".$_FILES["photo"]["name"];
					$config["file_name"] = $nomImage; 
					$verifImage = $this->md_config->uploadImage($_FILES["photo"]);
					
					if(!$verifImage){
						echo "Les formats de l'image autorisés sont .jpg, .jpeg, .png";
					}
					else{
						$this->load->library('upload',$config);
					
						if($this->upload->do_upload("photo")){
							$image=$this->upload->data();
							$data["photo"]="assets/images/patients/".$image['file_name'];
						}
						else{
							$data["photo"]="assets/images/patients/inconnu.jpg";
						}

						$donnees = array(
							"pat_iSta"=>1,
							"pat_sNom"=>strtoupper(trim($data["nom"])),
							"pat_sPrenom"=>$prenom,
							"pat_sAdresse"=>$adresse,
							"pat_sSexe"=>$data["genre"],
							"pat_sAvatar"=>$data["photo"],
							"pat_sOtherPhone"=>$data["otherPhone"],
							"pat_sCivilite"=>$civilite,
							"pat_sSituationMat"=>$data["situation"],
							"pat_sProfession"=>ucfirst(trim($data["profession"])),
							"pat_dDateNaiss"=>$date_naiss,
							"cpa_id"=>0,
							"pat_iFemme"=>0,
							"pat_iEnfant"=>0,
							"pat_sAvatar"=>$data["photo"],
							"pat_dDateEnreg"=>date("Y-m-d H:i:s")
						);
						$ajout=$this->md_patient->ajout_patient($donnees);
						
						if($ajout){
							$log = array(
								"log_iSta"=>0,
								"per_id"=>$this->md_config->get_session(),
								"log_sTable"=>"t_patients_pat",
								"log_sIcone"=>"nouveau patient",
								"log_sAction"=>"a ajouté un nouveau patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
								"log_dDate"=>date("Y-m-d H:i:s")
							);
							$this->md_connexion->rapport($log);
							echo $ajout;
						}
					}
				}
						
			}
			else{
				$donnees = array(
					"pat_iSta"=>1,
					"pat_sNom"=>strtoupper(trim($data["nom"])),
					"pat_sPrenom"=>$prenom,
					"pat_sAdresse"=>$adresse,
					"pat_sSexe"=>$data["genre"],
					"pat_sCivilite"=>$civilite,
					"pat_sOtherPhone"=>$data["otherPhone"],
					"pat_sSituationMat"=>$data["situation"],
					"pat_sProfession"=>ucfirst(trim($data["profession"])),
					"pat_dDateNaiss"=>$date_naiss,
					"cpa_id"=>0,
					"pat_iFemme"=>0,
					"pat_iEnfant"=>0,
					"pat_sAvatar"=>$avatar,
					"pat_dDateEnreg"=>date("Y-m-d H:i:s")
				);
				$ajout=$this->md_patient->ajout_patient($donnees);	
				
				
				if($ajout){
						$log = array(
							"log_iSta"=>0,
							"per_id"=>$this->md_config->get_session(),
							"log_sTable"=>"t_patients_pat",
							"log_sIcone"=>"nouveau patient",
							"log_sAction"=>"a ajouté un nouveau patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
							"log_dDate"=>date("Y-m-d H:i:s")
						);
						$this->md_connexion->rapport($log);
						echo $ajout;
					}
			}
			
			// if($ajout){
				// $log = array(
					// "log_iSta"=>0,
					// "per_id"=>$this->md_config->get_session(),
					// "log_sTable"=>"t_patients_pat",
					// "log_sIcone"=>"nouveau patient",
					// "log_sAction"=>"a ajouté un nouveau patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
					// "log_dDate"=>date("Y-m-d H:i:s")
				// );
				// $this->md_connexion->rapport($log);
				// echo $ajout;
			// }
			
		}
	}
	
	
	public function modifierPatient()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("patient/liste");
			// var_dump($data);
		}
		else{
			if(trim($data["prenom"]) == ""){
				$prenom=NULL;
			}
			else{
				$prenom=ucwords(trim($data["prenom"]));
			}
			
			if(trim($data["adresse"]) == ""){
				$adresse=NULL;
			}
			else{
				$adresse=trim($data["adresse"]);
			}			
			
			if(trim($data["natio"]) == ""){
				$natio=NULL;
			}
			else{
				$natio=trim($data["natio"]);
			}
			
			// if(trim($data["cpa"]) == ""){
				// $data["cpa"]=0;
			// }
			
			if(trim($data["date_naiss"]) == ""){
				$date_naiss=NULL;
			}
			else{
				// $date_naiss = $this->md_config->recupDateTime($data["date_naiss"]);/*Avant*/
				$date_naiss = $data["date_naiss"]; /*après*/
			}
			
			if($data["genre"]=="H"){
				$civilite = 'M.';
			}else{
				$civilite = 'Mme';
			}
			
			
			if($data["otherPhone"]==""){
				$data["otherPhone"] == NULL;
			}elseif(!is_numeric($data["otherPhone"])){
				echo "Ceci n'est pas un numéro de téléphone valide";
				return;
			}else{
				$formatTel = $this->md_config->formatPhoneCongo(trim($data["otherPhone"]));
				if($formatTel == false){
					echo "Ce numéro de téléphone n'est pas valide en république du Congo";
					return;
				}else{
					$data["otherPhone"] = "+242".$formatTel;
				}
			}
			
			
			if(trim($data["tel"]) !="" AND $_FILES["photo"]["name"]==""){
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{

						$verifPhone = $this->md_patient->verif_tel_edit("+242".$formatTel,$data["id"]);
						if(!$verifPhone){
								
							$donnees = array(
								"pat_sNom"=>strtoupper(trim($data["nom"])),
								"pat_sPrenom"=>$prenom,
								"pat_sAdresse"=>$adresse,
								"pat_sSexe"=>$data["genre"],
								"pat_sTel"=>"+242".$formatTel,
								"pat_sCivilite"=>$civilite,
								"pat_sNatio"=>$natio,
								"cpa_id"=>0,
								"pat_sOtherPhone"=>$data["otherPhone"],
								"pat_sSituationMat"=>$data["situation"],
								"pat_sProfession"=>ucfirst(trim($data["profession"])),
								"pat_dDateNaiss"=>$date_naiss
							);
							$modifier=$this->md_patient->maj_patient($donnees,$data["id"]);
						}
						else{
							echo "Ce numéro de téléphone est déja enregistré pour un autre patient";
						}
						
					}
				}
					
				
			}
			else if(trim($data["tel"]) !="" AND $_FILES["photo"]["name"]!=""){
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{

						$verifPhone = $this->md_patient->verif_tel_edit("+242".$formatTel,$data["id"]);
						if(!$verifPhone){
							$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
							if(!$verifTaille){
								echo "La taille de l'image ne doit pas dépasser les 150 Ko";
							}
							else{
								$config["upload_path"] =  './assets/images/patients/';
								$config["allowed_types"] = 'jpg|png|jpeg';
								$nomImage= time()."-".$_FILES["photo"]["name"];
								$config["file_name"] = $nomImage; 
								$verifImage = $this->md_config->uploadImage($_FILES["photo"]);
								
								if(!$verifImage){
									echo "Les formats de l'image autorisés sont .jpg, .jpeg, .png";
								}
								else{
									$this->load->library('upload',$config);
								
									if($this->upload->do_upload("photo")){
										$image=$this->upload->data();
										$data["photo"]="assets/images/patients/".$image['file_name'];
									}
									else{
										$data["photo"]=$data["photo2"];
									}

									$donnees = array(
										"pat_sNom"=>strtoupper(trim($data["nom"])),
										"pat_sPrenom"=>$prenom,
										"pat_sAdresse"=>$adresse,
										"pat_sSexe"=>$data["genre"],
										"pat_sAvatar"=>$data["photo"],
										"pat_sTel"=>"+242".$formatTel,
										"pat_sCivilite"=>$civilite,
										"pat_sNatio"=>$natio,
										"cpa_id"=>0,
										"pat_sOtherPhone"=>$data["otherPhone"],
										"pat_sSituationMat"=>$data["situation"],
										"pat_sProfession"=>ucfirst(trim($data["profession"])),
										"pat_dDateNaiss"=>$date_naiss,
										"pat_sAvatar"=>$data["photo"]
									);
									$modifier=$this->md_patient->maj_patient($donnees,$data["id"]);
									
									if($modifier){	
										$log = array(
											"log_iSta"=>0,
											"per_id"=>$this->md_config->get_session(),
											"log_sTable"=>"t_patients_pat",
											"log_sIcone"=>"modification",
											"log_sAction"=>"a modifié le patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
											"log_dDate"=>date("Y-m-d H:i:s")
										);
										$this->md_connexion->rapport($log);
										echo "ok";
									}
								}
							}
						}
						else{
							echo "Ce numéro de téléphone est déja enregistré pour un autre patient";
						}
						
					}
				}
	
			}
			else if(trim($data["tel"]) =="" AND $_FILES["photo"]["name"]!=""){

				$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
				if(!$verifTaille){
					echo "La taille de l'image ne doit pas dépasser les 150 Ko";
				}
				else{
					$config["upload_path"] =  './assets/images/patients/';
					$config["allowed_types"] = 'jpg|png|jpeg';
					$nomImage= time()."-".$_FILES["photo"]["name"];
					$config["file_name"] = $nomImage; 
					$verifImage = $this->md_config->uploadImage($_FILES["photo"]);
					
					if(!$verifImage){
						echo "Les formats de l'image autorisés sont .jpg, .jpeg, .png";
					}
					else{
						$this->load->library('upload',$config);
					
						if($this->upload->do_upload("photo")){
							$image=$this->upload->data();
							$data["photo"]="assets/images/patients/".$image['file_name'];
						}
						else{
							$data["photo"]=$data["photo2"];
						}

						$donnees = array(
							"pat_sNom"=>strtoupper(trim($data["nom"])),
							"pat_sPrenom"=>$prenom,
							"pat_sAdresse"=>$adresse,
							"pat_sSexe"=>$data["genre"],
							"pat_sAvatar"=>$data["photo"],
							"pat_sCivilite"=>$civilite,
							"pat_sNatio"=>$natio,
							"cpa_id"=>0,
							"pat_sOtherPhone"=>$data["otherPhone"],
							"pat_sSituationMat"=>$data["situation"],
							"pat_sProfession"=>ucfirst(trim($data["profession"])),
							"pat_dDateNaiss"=>$date_naiss,
							"pat_sAvatar"=>$data["photo"]
						);
						$modifier=$this->md_patient->maj_patient($donnees,$data["id"]);
						
						if($modifier){	
							$log = array(
								"log_iSta"=>0,
								"per_id"=>$this->md_config->get_session(),
								"log_sTable"=>"t_patients_pat",
								"log_sIcone"=>"modification",
								"log_sAction"=>"a modifié le patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
								"log_dDate"=>date("Y-m-d H:i:s")
							);
							$this->md_connexion->rapport($log);
							echo "ok";
						}
					}
				}
						
			}
			else{
				$donnees = array(
					"pat_sNom"=>strtoupper(trim($data["nom"])),
					"pat_sPrenom"=>$prenom,
					"pat_sAdresse"=>$adresse,
					"pat_sSexe"=>$data["genre"],
					"pat_sCivilite"=>$civilite,
					"pat_sSituationMat"=>$data["situation"],
					"pat_sNatio"=>$natio,
					"cpa_id"=>0,
					"pat_sOtherPhone"=>$data["otherPhone"],
					"pat_sProfession"=>ucfirst(trim($data["profession"])),
					"pat_dDateNaiss"=>$date_naiss
				);
				$modifier=$this->md_patient->maj_patient($donnees,$data["id"]);	
				
				if($modifier){	
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_patients_pat",
						"log_sIcone"=>"modification",
						"log_sAction"=>"a modifié le patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					echo "ok";
				}
			}
			
			// if($modifier){	
				// $log = array(
					// "log_iSta"=>0,
					// "per_id"=>$this->md_config->get_session(),
					// "log_sTable"=>"t_patients_pat",
					// "log_sIcone"=>"modification",
					// "log_sAction"=>"a modifié le patient : ".strtoupper(trim($data["nom"]))." ".$prenom,
					// "log_dDate"=>date("Y-m-d H:i:s")
				// );
				// $this->md_connexion->rapport($log);
				// echo "ok";
			// }
			
		}
	}
	
	
	
	public function ajoutOrientation(){
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("patient/liste");
		}
		else{
			for($i=0;$i<count($data["acte"]) AND $i<count($data["uni"]) AND $i<count($data["ser"]) AND $i<count($data["perIdMed"]);$i++){
				$fait = date("Y-m-d H:i:s");
				$maDate = strtotime($fait."+ 30 days");
				// $delai = date("Y-m-d H:i:s",$maDate). "\n";/*Ancien*/
				$delai = date("Y-m-d H:i:s",$maDate);/*Nouveau*/
				$donnees = array(
					"acm_iSta"=>1,
					"lac_id"=>$data["acte"][$i],
					"pat_id"=>$data["id"],
					"uni_id"=>$data["uni"][$i],
					"acm_iHos"=>0,/*Ajout avec initialisation 0*/
					"acm_iFin"=>0,/*Ajout avec initialisation 0*/
					"recep_iPer"=>$data["perIdMed"][$i],
					"acm_dDate"=>$fait,
					"acm_dDateDelai"=>$delai
				);
				$insert = $this->md_patient->ajout_orientation($donnees);
				// var_dump($data);
				$patient = $this->md_patient->recup_patient($data["id"]);
				$acte = $this->md_parametre->recup_act($data["acte"][$i]);
				if($insert){
					$recupAct = $this->md_patient->recup_last_acte_medical();
					if($data["flt"][$i]==6){
						$don = array(
							"img_iSta"=>1,
							"img_dDate"=>$fait
						);
						$insertImg = $this->md_patient->ajout_imagerie($don);
						$donneeImagerie = array(
							"acm_id"=>$recupAct->acm_id,
							"img_id"=>$insertImg->img_id,
							"aci_iSta"=>1
						);
						
						$this->md_patient->ajout_prescription_imagerie($donneeImagerie);
					}
					elseif($data["flt"][$i]==7){
						$don = array(
							"lab_iSta"=>1,
							"lab_dDate"=>$fait
						);
						$insertLab = $this->md_patient->ajout_laboratoire($don);
						$donneeExp = array(
							"acm_id"=>$recupAct->acm_id,
							"lab_id"=>$insertLab->lab_id,
							"ala_iSta"=>1
						);
						
						$this->md_patient->ajout_prescription_laboratoire($donneeExp);
					}
					elseif($data["flt"][$i]==8){
						$donneeReeducation = array(
							"ree_iSta"=>1,
							"acm_id"=>$recupAct->acm_id,
							"ree_iNombre"=>1,
							"ree_iNbPrinscrit"=>1,
							"ree_dDate"=>$fait
						);
						
						$this->md_patient->ajout_prescription_reeducation($donneeReeducation);
					}
					
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_acte_medical_acm",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a fait une orientation",
						"log_sActionDetail"=>"a orienté le patient vers un acte médical payant : <strong style='text-decoration:underline'>".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.") - ".$acte->lac_sLibelle."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			} 
		}
	}
	
	
	
	public function supprimer_patient($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("patient/liste_modifier_patient");
		}
		else{
			$donnees = array(
				"pat_iSta"=>2
			);
			$supprimer = $this->md_patient->maj_patient($donnees,$id);
			$patient = $this->md_patient->recup_patient($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_patients_pat",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un patient",
					"log_sActionDetail"=>"a supprimé le patient : <strong style='text-decoration:underline'>".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.")</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("patient/liste_modifier_patient");
			}
		}
	}
	
	
	public function ajoutComplement()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("patient/complement");
		}
		else{
			$patient = $this->md_patient->recup_patient($data["id"]);
			if($data["confirmAnt"]=="Oui"){
				for($i=0;$i<count($data['libAnt']) AND $i<count($data['typeAnt']);$i++){
					$verif = $this->md_patient->verif_antecedents(ucfirst(trim($data['libAnt'][$i])),$data['typeAnt'][$i],$data["id"]);
					if(!$verif){
						$donnees = array(
						"ant_sType"=>$data['typeAnt'][$i],
						"ant_sLibelle"=>ucfirst(trim($data['libAnt'][$i])),
						"pat_id"=>$data["id"],
						"ant_iSta"=>1
						);
						$this->md_patient->ajout_antecedents($donnees);
						$log = array(
							"log_iSta"=>0,
							"per_id"=>$this->md_config->get_session(),
							"log_sTable"=>"t_antecedants_ant",
							"log_sIcone"=>"nouveau membre",
							"log_sAction"=>"a ajouté un antécédent médical",
							"log_sActionDetail"=>"a ajouté un antécédent médical : <strong style='text-decoration:underline'>".ucfirst(trim($data['libAnt'][$i])).", de type : ".$data['typeAnt'][$i]." au patient ".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.")</strong>",
							"log_dDate"=>date("Y-m-d H:i:s")
						);
						$this->md_connexion->rapport($log);
					}
				}
			}
			
			if($data["confirmAll"]=="Oui"){
				for($i=0;$i<count($data['libAll']) AND $i<count($data['typeAll']);$i++){
					$verif = $this->md_patient->verif_allergies(ucfirst(trim($data['libAll'][$i])),$data['typeAll'][$i],$data["id"]);
					if(!$verif){
						$donnees = array(
						"tal_id"=>$data['typeAll'][$i],
						"all_sLibelle"=>ucfirst(trim($data['libAll'][$i])),
						"pat_id"=>$data["id"],
						"all_iSta"=>1
						);
						$this->md_patient->ajout_allergies($donnees);
						$log = array(
							"log_iSta"=>0,
							"per_id"=>$this->md_config->get_session(),
							"log_sTable"=>"t_allergies_all",
							"log_sIcone"=>"nouveau membre",
							"log_sAction"=>"a ajouté une allergie",
							"log_sActionDetail"=>"a ajouté une allergie : <strong style='text-decoration:underline'>".ucfirst(trim($data['libAll'][$i])).", de type : ".$data['typeAll'][$i]." au patient ".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.")</strong>",
							"log_dDate"=>date("Y-m-d H:i:s")
						);
						$this->md_connexion->rapport($log);
					}
				}
			}
			
			if($data["confirmPer"]=="Oui"){
				for($i=0;$i<count($data['nom']) AND $i<count($data['lien']) AND count($data['adresse']) AND $i<count($data['prenom'])  AND $i<count($data['tel']);$i++){
					// à  revoir
					$donnees = array(
					"pec_sAdresse"=>trim($data['adresse'][$i]),
					"pec_sTelephone"=>$data["tel"][$i],
					"pec_sLien"=>ucfirst(trim($data['lien'][$i])),
					"pec_sPrenom"=>ucfirst(trim($data['prenom'][$i])),
					"pec_sNom"=>strtoupper(trim($data['nom'][$i])),
					"pat_id"=>$data["id"],
					"pec_iSta "=>1
					);
					$this->md_patient->ajout_personnes_contact($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_personnes_contacts_pec",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un contact pour le patient",
						"log_sActionDetail"=>"a ajouté une personne à  contacter en cas de problème : <strong style='text-decoration:underline'>".strtoupper(trim($data['nom'][$i]))." ".ucfirst(trim($data['prenom'][$i]))." - : ".$data['tel'][$i]." pour le patient ".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.")</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}

			echo "ok";
			
		}
	
	}
	
	
	public function statCaisseParMedecinDansDir(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); 
		echo '	
			
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par médecin</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Médecin</th>
										<th>Montant généré</th>
									</tr>
								</thead>
								<tbody>';
									foreach($acte AS $a){ 
								echo '<tr>
										<td>'.$a->per_sTitre.''.$a->per_sNom.' '.$a->per_sPrenom.'</td>
										<th>'.number_format($a->montant,0,",",".").'<small>fcfa</small></th>
									</tr>';
									} 
							echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
	}	
	
	
	public function statCaisseParActeDansDir(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_acte($premier,$dernier); 
		echo '	
			
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par acte</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Acte médical</th>
										<th>Montant généré</th>
									</tr>
								</thead>
								<tbody>';
									foreach($acte AS $a){ 
								echo '<tr>
										<td>'.$a->lac_sLibelle.'</td>
										<th>'.number_format($a->montant,0,",",".").'<small>fcfa</small></th>
									</tr>';
									} 
							echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
	}	
	
	
	public function statCaisseDansDir(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$montant_service = $this->md_patient->montant_service($premier,$dernier);
		$depose =$montant->paye;
		echo '
			
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par service</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Service</th>
										<th>Montant généré (fcfa)</th>
									</tr>
								</thead>
								<tbody>';
									foreach($montant_service AS $l){ 
								echo '<tr>
										<td>'.$l->ser_sLibelle.'</td>
										<th>'.number_format($l->montant,0,",",".").'</th>
									</tr>';
									} 
							echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>			

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
	}	
	
	
	public function statCaisseParMedecin(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_medecin($premier,$dernier); 
		echo '
			<!--<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blue-grey">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">Montant encaissé</div>
                        <div class="number">'.number_format($depose,0,",",".").' <small>FCFA</small></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-green">
                    <div class="icon"> </div>
                    <div class="content">
						<div class="icon"><a href="javascript:();" class="clic-assurance"> <i class="fa fa-arrow-right"></i></a> </div>
                        <div class="text">Montant pour les assurances</div>
                        <div class="number">
							'.number_format($mtAssurance,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="info-box-4 hover-zoom-effect bg-red">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">Pertes (Réduction)</div>
                        <div class="number">
							 '.number_format($montant->perte ,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>-->
			
			';
			
			/*<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blush">
                    <div class="icon"><a href="'.site_url("facture/impaye").'"> <i class="fa fa-arrow-right"></i></a> </div>
                    <div class="content">
                        <div class="text">Nombre de factures impayés</div>
                        <div class="number">'.count($this->md_patient->liste_facture_impaye()).'</div>
                    </div>
                </div>
            </div>
			
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blush">
                    <div class="icon"> </div>
                    <div class="content">
						<div class="icon"><a href="javascript:();" class="clic-patient"> <i class="fa fa-arrow-right"></i></a> </div>
                        <div class="text">Montant à recouvrir chez les patients</div>
                        <div class="number">
							'.number_format($montant->reste,2,",",".").'<small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>*/		
			
			echo '
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par médecin</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Médecin</th>
										<th>Montant généré</th>
									</tr>
								</thead>
								<tbody>';
								$Total=0;
									foreach($acte AS $a){ 
									$Total +=$a->montant;
								echo '<tr>
										<td>'.$a->per_sTitre.''.$a->per_sNom.' '.$a->per_sPrenom.'</td>
										<th>'.number_format($a->montant,0,",",".").'<small>fcfa</small></th>
									</tr>';
									} 
							echo '</tbody>
								<tfoot>
									<tr>
										<th ></th>
										<th class="text-right"><strong>Total : '.$Total.' FCFA</strong></th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
		
		
	}	
	
	
	public function statCaisseParActeNumCpt(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_acte_recette($premier,$dernier); 
	
		echo '	
			
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par acte & par Numéro de compte</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th style="width:130px">Numéro de compte</th>
										<th>Acte médical</th>
										<th>Montant généré</th>
									</tr>
								</thead>
								<tbody>';
									foreach($acte AS $a){ ?>
									<tr>
										<td><strong><?php if($a->cpt_id==NULL){echo '<em>Pas renseigné</em>';}else{$actesous = $this->md_patient->montant_par_acte_recette_sous($a->cpt_id,$premier,$dernier); $rep = $this->md_recette->recup_lib_compte_recette($a->cpt_id); echo $rep->cpt_iNumero;}; ?></strong></td>
										<td><?php if(isset($rep)){ if($rep->cpt_iNumero==70619){echo '<strong>Actes Chirurgicaux : <a title="voir les détails des actes chirurgicaux" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine"> voir détails </a></strong>';
										
										echo '<div class="" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div id="collapseNine" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
													<div class="panel-body"> 
														<div class="row">';	
												foreach($actesous AS $as){ 
										echo '
												<li style="width:100%;margin-left:4%;margin-right:4%;"><span style="color:#4f7ca0">'.$as->lac_sLibelle.' : '.'</span><span style="float:right;color:#4f7ca0;color:#4f7ca0">'.number_format($as->montant,0,",",".").' Fcfa'.'</span></li>
											';
											};
										echo '			</div>		
													</div>
												</div>
										</div>';
											}elseif($rep->cpt_iNumero==70618){echo '<strong>Actes Stomatologiques : <a role="button" data-toggle="collapse" data-parent="#accordion_1" title="voir les détails des actes stomatologiques" href="#collapseNine_1" aria-expanded="true" aria-controls="collapseNine_1"> voir détails </a></strong>';
											
											echo '<div class="" id="accordion_1" role="tablist" aria-multiselectable="true">

												<div id="collapseNine_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_1">
													<div class="panel-body"> 
														<div class="row">';
											
											foreach($actesous AS $as){ 
										echo '
												<li style="width:100%;margin-left:4%;margin-right:4%;"><span style="color:#4f7ca0">'.$as->lac_sLibelle.' : '.'</span><span style="float:right;color:#4f7ca0">'.number_format($as->montant,0,",",".").' Fcfa'.'</span></li> 
											';
											};
										echo '				</div>		
													</div>
												</div>
										
										</div>';
											}
										
										else{ echo '<strong>'.$a->lac_sLibelle.'<strong>';};}else{echo '<strong>'.$a->lac_sLibelle.'<strong>';}; ?></td>
										<th><?php echo number_format($a->montant,0,",","."); ?> <small> Fcfa</small></th>
									</tr>
									<?php }
							echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		';
		
		{ ?>

		<script src="<?php echo base_url('assets/plugins/jquery-datatable/datatables.min.js');?>"></script><!-- Jquery DataTable Plugin Js -->
		<script src="<?php echo base_url('assets/js/pages/tables/data-table.js');?>"></script>
		<?php }
	}	
	
	
	
	public function statCaisseParActe(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		
		$montant = $this->md_patient->montant($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		$acte = $this->md_patient->montant_par_acte($premier,$dernier); 
		echo '
			<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blue-grey">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">Montant encaissé</div>
                        <div class="number">'.number_format($depose,0,",",".").' <small>FCFA</small></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-green">
                    <div class="icon"> </div>
                    <div class="content">
						<div class="icon"><a href="javascript:();" class="clic-assurance"> <i class="fa fa-arrow-right"></i></a> </div>
                        <div class="text">Montant pour les assurances</div>
                        <div class="number">
							'.number_format($mtAssurance,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
                <div class="info-box-4 hover-zoom-effect bg-red">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">Pertes (Réduction)</div>
                        <div class="number">
							 '.number_format($montant->perte ,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>
			';
				
			
			echo '
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par acte</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Acte médical</th>
										<th>Montant généré</th>
									</tr>
								</thead>
								<tbody>';
									foreach($acte AS $a){ 
								echo '<tr>
										<td>'.$a->lac_sLibelle.'</td>
										<th>'.number_format($a->montant,0,",",".").'<small>fcfa</small></th>
									</tr>';
									} 
							echo '</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		
	}		
	
	
	public function statCaisse(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		// $montant = $this->md_patient->montant($premier,$dernier);
		// $montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		
		// $mtAssurance = 0;
		// foreach($montant_assurance AS $as){
			// $mtAssurance += $as->mtAssurance;
		// }
		// $montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$montant_service = $this->md_patient->montant_service($premier,$dernier);
		// $depose =$montant->paye;
		
		
		$montant = $this->md_patient->montant_cprincipal($premier,$dernier);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		$mtAssurance = 0;
		foreach($montant_assurance AS $as){
			$mtAssurance += $as->mtAssurance;
		}
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		$depose =$montant->paye;
		
		$diminueencaisse = $this->md_patient->diminue_encaisse_total_parubrique($premier,$dernier);
		if(!is_null($diminueencaisse->diminueencaisse)){
			$resultat = number_format($depose,0,",",".").' - '.number_format(abs($diminueencaisse->diminueencaisse),0,",",".").' = '.number_format($depose + $diminueencaisse->diminueencaisse,0,",",".");
		}else{
			$resultat = number_format($depose,0,",",".");
		}
		echo '
		
		
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blue-grey">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL GÉNÉRAL</div>
                        <div class="number">'.number_format($montant->montant,0,",",".").' <small>FCFA</small></div>
                    </div>
                </div>
            </div>			
			
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-green">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL ENCAISSÉ</div>
                        <div class="number">'.$resultat.' <small>FCFA</small></div>
                    </div>
                </div>
            </div>

			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-red">
                    <div class="icon"> </div>
                    <div class="content">
                        <div class="text">TOTAL REMISE</div>
                        <div class="number">
							 '.number_format($montant->perte + $montant->assurance,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="info-box-4 hover-zoom-effect bg-orange">
                    <div class="icon"> </div>
                    <div class="content">
						<div class="icon"><a href="javascript:();" class="clic-assurance"> <i class="fa fa-arrow-right"></i></a> </div>
                        <div class="text">Montant pour les assurances</div>
                        <div class="number">
							'.number_format($mtAssurance,0,",",".").' <small>FCFA</small>
						</div>
                    </div>
                </div>
			</div>
			';
			
			echo '<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blush">
                    <div class="icon"><a href="'.site_url("facture/impaye").'"> <i class="fa fa-arrow-right"></i></a> </div>
                    <div class="content">
                        <div class="text">Nombre de factures impayés</div>
                        <div class="number">'.count($this->md_patient->liste_facture_impaye()).'</div>
                    </div>
                </div>
            </div>
			
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blush">
                    <div class="icon"> </div>
                    <div class="content">
						<div class="icon"><a href="javascript:();" class="clic-patient"> <i class="fa fa-arrow-right"></i></a> </div>
                        <div class="text">Montant à recouvrir chez les patients</div>
                        <div class="number">
							'.number_format($montant->reste,2,",",".").'<small>FCFA</small>
						</div>
                    </div>
                </div>
            </div>';
			echo '
			<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Point de caisse par service</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table id="example" class="table table-hover">
								<thead>
									<tr>
										<th>Service</th>
										<th>Montant généré (fcfa)</th>
									</tr>
								</thead>
								<tbody>';
								$Total=0;
									foreach($montant_service AS $l){ 
										$Total+= $l->montant;
								echo '<tr>
										<td>'.$l->ser_sLibelle.'</td>
										<th>'.number_format($l->montant,0,",",".").'</th>
									</tr>';
									} 
							echo '</tbody>
								<tfoot>
									<tr>
										<th>
											<strong allign="right">Total</strong>
										</th>
										<th>
											<strong>'.$Total.' FCFA</strong>
										</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>			

		';
		
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
	}
	
	
	//RABY
	
	public function liste_recouvrement_assurance()
	{
		$data = $this->input->post();
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($data)){
			return redirect();
		}
		else{
			$debut=$data["premierJour"];
			$fin=$data["dernierJour"];
			$id=$data["assureur"];
			
			$liste=$this->md_patient->liste_recouvrement_assurance($id,$this->md_config->recupDateTime($debut),$this->md_config->recupDateTime($fin));
			$total=$this->md_patient->nb_recouvrement_assurance($id,$this->md_config->recupDateTime($debut),$this->md_config->recupDateTime($fin));
			
			echo '
					
                    <div class="body table-responsive"> 
					
						<table id="example" class="table table-bordered table-striped table-hover">
						   
							<thead>
								<tr>
									<th>#</th>
									<th>Assureur</th>
									<th>Type d\'assurance</th>
									<th>Patient</th>
									<th>Montant</th>
									<th>Date</th>
									<th>Statut</th>
									<th style="width:60px">Action</th>
								</tr>
							</thead>';
							
							echo '<tbody>';

								foreach($liste AS $lr){ 
								echo '<tr align="center">
									<td>
										<div class="switch">
											<label>
												<input type="checkbox" checked class="checkRECOU" name="id[]" value="'.$lr->fac_id.'">
												<span class="lever"></span>
											</label>
										</div>
										<input type="hidden" class="champs'.$lr->fac_id.'"  value="'.$lr->fac_iMontantAss.'">
									</td>
									<td>'.$lr->ass_sLibelle.'</td>
									<td>'.$lr->tas_iTaux.'%</td>
									<td>'.$lr->pat_sNom." ".$lr->pat_sPrenom.'</td>
									<td>'.number_format($lr->fac_iMontantAss,0,",",".").'<small>Fcfa</small></td>
									<td>'.$this->md_config->affDateFrNum($lr->fac_dDatePaie).'</td>
									<td>';
									if($lr->fac_iSituationAss == 0){
										echo "<i class='text-danger'>Facture non payée</i>";
										}else{
											echo "<i class='text-primary'>Facture payée</i> <i class='fa fa-check text-success' style='font-size:20px'></i>";
											}  
										echo '</td>
									<td>';	
										 if($lr->fac_iSituationAss == 0){ 
										echo '<a onClick="return confirm("Êtes-vous sûr de pouvoir valider le paiement de l\'assureur ?")" href="'.site_url("caisse/payeFactureAssurance/".$lr->fac_id).'" class="delete" title="annuler">Payé<br><i class="fa fa-check text-success" style="font-size:20px"></i></a>';
										 } 
								echo'	</td>
								
								</tr>';
								} 
								echo'<tr>
									<td colspan="8" align="right"><strong>Total:</strong> <span class="total">'.$total->montant.'</span> FCFA</td>
								</tr>';
								echo '
							</tbody>
						</table>
                    </div>
                ';
			echo '<script>
					var value="";
						var check = $("input[type=checkbox]:checked");
					//alert(check.length);
					value="";
					var i=0;
					check.each(function(){
						i++;
						value=value+$(this).val();
						if(i< check.length){
							value=value+"-";
						}
						
					});
					//alert(value);
					if(check.length >= 1){
						//$("#enssembleExam").removeClass("cacher");
						
						$("#showRecouvrement").attr("href","/epiphanie_hgdev/index.php/impression/recouvrement_assureur/"+value);
						
					}else{
						$("#showRecouvrement").attr("href","#");
					}
			</script>';
			echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
			echo '<script src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
			//var_dump($total);
			}
	
	}
	//RABY
	
	public function statCaissePatient(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		$montant_patient = $this->md_patient->montant_patient($premier,$dernier);
		
		echo '
				<div class="row">';
					foreach($montant_patient AS $m){ 
					echo '<div class="col-md-5">'.$m->pat_sNom." ".$m->pat_sPrenom.'</div>';
					echo '<div class="col-md-6">('.$m->pat_sMatricule.')<span class="pull-right">'.number_format($m->dette,2,",",".").' <small>FCFA</small></span></div>';
					echo '<div class="col-md-1"><a href="'.site_url("caisse/recouvrementPatient/".$m->pat_id).'"><i class="fa fa-arrow-right"></i></a></div>';
					echo '<hr>';
					} 
			echo '</div>
					
		';
		
	}
	
	
	public function statCaisseAssurance(){
		$data = $this->input->post();
		
		$premier = $this->md_config->recupDateTime($data["premierJour"]);
		$dernier = $this->md_config->recupDateTime($data["dernierJour"]);
		$montant_assurance = $this->md_patient->montant_assurance($premier,$dernier,0);
		
		echo '
				<div class="row">';
					foreach($montant_assurance AS $m){ 
					echo '<div class="col-md-10">'.$m->ass_sLibelle.'<span class="pull-right">'.number_format($m->mtAssurance,2,",",".").' <small>FCFA</small></span></div>';
					echo '<div class="col-md-2"><a href="'.site_url("caisse/recouvrementAssurance/".$m->ass_id).'"><i class="fa fa-arrow-right"></i></a></div>';
					} 
			echo '</div>
					
		';
		
	}
	
	
	
	public function recupStats()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$premierJour = $this->md_config->recupDateTime($data["premierJour"]);
		$dernierJour = $this->md_config->recupDateTime($data["dernierJour"]);
		
		if($data["ageMinimal"]!=""){
			$ageMinimal= $this->md_config->date_de_naissance($data["ageMinimal"]);
		}		
		
		if($data["ageMaximal"]!=""){
			$ageMaximal=$this->md_config->date_de_naissance($data["ageMaximal"]);
		}
		
		
		$genre=trim($data["genre"]);
		
		if($data["ageMinimal"]=="" && $data["ageMaximal"]=="" && $genre=="" ){
		//$text = 'pour tester';
		
			$NbrePatPer  = $this->md_patient->liste_stats_patient_encours($premierJour,$dernierJour);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_encours($premierJour,$dernierJour);
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques($premierJour,$dernierJour);
			$statService = $this->md_patient->stats_services($premierJour,$dernierJour);
		}
		else if($data["ageMinimal"]!="" && $data["ageMaximal"]=="" && $genre=="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_ageMinimal($premierJour,$dernierJour,$ageMinimal);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_ageMinimal($premierJour,$dernierJour,$ageMinimal);
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_ageMinimal($premierJour,$dernierJour,$ageMinimal);
			$statService = $this->md_patient->stats_services_ageMinimal($premierJour,$dernierJour,$ageMinimal);
			
		}else if($data["ageMinimal"]!="" && $data["ageMaximal"]!="" && $genre=="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_intervale($premierJour,$dernierJour,$ageMinimal,$ageMaximal);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_intervale($premierJour,$dernierJour,$ageMinimal,$ageMaximal);
			// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_intervale($premierJour,$dernierJour,$ageMinimal,$ageMaximal);
			$statService = $this->md_patient->stats_services_intervale($premierJour,$dernierJour,$ageMinimal,$ageMaximal);
			
		}else if($data["ageMinimal"]!="" && $data["ageMaximal"]!="" && $genre!="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_inter_genre($premierJour,$dernierJour,$ageMinimal,$ageMaximal,$genre);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_inter_genre($premierJour,$dernierJour,$ageMinimal,$ageMaximal,$genre);
			// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_inter_genre($premierJour,$dernierJour,$ageMinimal,$ageMaximal,$genre);
			$statService = $this->md_patient->stats_services_inter_genre($premierJour,$dernierJour,$ageMinimal,$ageMaximal,$genre);
			
		}else if($data["ageMinimal"]=="" && $data["ageMaximal"]!="" && $genre=="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_ageMaximal($premierJour,$dernierJour,$ageMaximal);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_ageMaximal($premierJour,$dernierJour, $ageMaximal);
			// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_ageMaximal($premierJour,$dernierJour, $ageMaximal);
			$statService = $this->md_patient->stats_services_ageMaximal($premierJour,$dernierJour,$ageMaximal);
			
		}else if($data["ageMinimal"]=="" && $data["ageMaximal"]!="" && $genre!="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_max_genre($premierJour,$dernierJour,$ageMaximal,$genre);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_max_genre($premierJour,$dernierJour,$ageMaximal,$genre);
			// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_max_genre($premierJour,$dernierJour,$ageMaximal,$genre);
			$statService = $this->md_patient->stats_services_max_genre($premierJour,$dernierJour,$ageMaximal,$genre);
			
		}else if($data["ageMinimal"]!="" && $data["ageMaximal"]=="" && $genre!="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_min_genre($premierJour,$dernierJour,$ageMinimal,$genre);
			// $NbrePatPerEntre  = $this->md_patient->liste_stats_patient($a, $b);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_min_genre($premierJour,$dernierJour,$ageMinimal,$genre);
			// $NbrePatDecEntre  = $this->md_patient->stats_nombre_deces($a, $b);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_min_genre($premierJour,$dernierJour,$ageMinimal,$genre);
			$statService = $this->md_patient->stats_services_min_genre($premierJour,$dernierJour,$ageMinimal,$genre);
			
		}else if($data["ageMinimal"]=="" && $data["ageMaximal"]=="" && $genre!="" ){
			$NbrePatPer  = $this->md_patient->liste_stats_patient_genre($premierJour,$dernierJour,$genre);
			$NbrePatDec  = $this->md_patient->stats_nombre_deces_genre($premierJour,$dernierJour,$genre);
			
			$NbrePatNais  = $this->md_patient->stats_nombre_naissance_encours($premierJour,$dernierJour);
			$diagnostique = $this->md_patient->stats_diagnostiques_genre($premierJour,$dernierJour,$genre);
			$statService = $this->md_patient->stats_services_genre($premierJour,$dernierJour,$genre);
			
		}
		echo '
			 <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="info-box-4 hover-zoom-effect bg-blue-grey">

                    <div class="content">
                        <div class="text">Nombre de patients reçu</div>
                        <div class="number">'.count($NbrePatPer).'</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-blush">
                    <div class="content">
                        <div class="text">nombre de cas de décès</div>
                        <div class="number">'.$NbrePatDec->nb.'</div>
                    </div>
                </div>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect bg-green">
                    <div class="content">
                        <div class="text">nombre de naissance déclarée</div>
                        <div class="number">'.$NbrePatNais->nb.'</div>
                    </div>
                </div>
            </div>
			<div class="col-lg-6 col-md-6 col-sm-6" style="height:auto">
                <div class="info-box-4 hover-zoom-effect" style="height:auto">
                    <div class="content">
                        <div class="text">Nombre d\'actes enregistrés à la caisse</div>';
						 foreach ($statService AS $s) {
							echo '<div class="text">'.$s->ser_sLibelle.'<span class="pull-right">'.$s->nb.'</span></div>';
						 } 
                    echo '</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="height:auto">
                <div class="info-box-4 hover-zoom-effect" style="height:auto; width:100%">
                    <div class="content">
                        <div class="text">statistique des diagnostiques</div>';
						foreach ($diagnostique AS $d) {
						echo '	<div class="text">'.$d->mal_sLibelle.' <span class="pull-right">'. $d->nb.'</span></div>';
						 } 
                   echo ' </div>
                </div>
            </div> 
			';
			
		echo '<script src="'.base_url('assets/js/pages/ui/modals.js').'"></script>';
		echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
		echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';

	}
	
	
}
