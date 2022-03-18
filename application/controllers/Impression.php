
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impression extends CI_Controller {





	public function pass_caisse($id){
		date_default_timezone_set('Africa/Brazzaville');
				

	$this->load->view('impression/pass_caisse', array("id"=>$id));
	
	// return ;
	
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
		// $this->dompdf->setPaper('A4', 'portrait');//courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
		// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
		// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("pass_caisse".$id.".pdf",array('attachment'=>0));
	}

	

	public function cession_caisse($id){
		date_default_timezone_set('Africa/Brazzaville');
				

	$this->load->view('impression/cession_caisse', array("id"=>$id));
	
	// return ;
	
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
		// $this->dompdf->setPaper('A4', 'portrait');//courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
		// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
		// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("cession_caisse".$id.".pdf",array('attachment'=>0));
	}

	
	public function rapport_ticket($date1, $date2, $mvt)
	{

		$this->load->view('impression/rapport_ticket', array("date1"=>$date1, "date2"=>$date2, "mvt"=>$mvt));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		if($mvt == 0){
		$this->dompdf->setPaper('A4', 'landscape');
		}else{
		$this->dompdf->setPaper('A4', 'portrait');
		 }
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("rapport_ticket".$date1.".pdf",array('attachment'=>0));
	}

	public function journal_encaissement_facture_cp($date1, $date2, $acte=false)
	{

		$this->load->view('impression/liste_journal_facture_cp', array("date1"=>$date1, "date2"=>$date2, "acte"=>$acte));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'portrait');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_journal_facture_cp".$date1.".pdf",array('attachment'=>0));
	}

	
	public function situation_caisse_partype($date1, $date2)
	{
	
		$this->load->view('impression/liste_situation_caisse_partype', array("date1"=>$date1, "date2"=>$date2));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_situation_caisse_partype".$date1.".pdf",array('attachment'=>0));
	}



	public function etat_remise_cp($date1, $date2)
	{

		$this->load->view('impression/liste_remise_cp', array("date1"=>$date1, "date2"=>$date2));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_remise_cp".$date1.".pdf",array('attachment'=>0));
	}

	
	
	public function rapport_facture_annulee($date1, $date2, $acte=false)
	{

		$this->load->view('impression/rapport_annulee_fac', array("date1"=>$date1, "date2"=>$date2, "acte"=>$acte));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'portrait');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("rapport_annulee_fac".$date1.".pdf",array('attachment'=>0));
	}



	public function appro_caisse($id){
		date_default_timezone_set('Africa/Brazzaville');
				

	$this->load->view('impression/appro_caisse', array("id"=>$id));
	
	// return ;
	
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
		// $this->dompdf->setPaper('A4', 'portrait');//courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
		// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
		// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("appro_caisse".$id.".pdf",array('attachment'=>0));
	}


	public function mouvement_caisse_facture_cp($date1, $date2, $acte, $typemvt)
	{
		$this->load->view('impression/liste_mouvement_facture_cp', array("date1"=>$date1, "date2"=>$date2, "acte"=>$acte, "typemvt"=>$typemvt));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'portrait');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_mouvement_facture_cp".$date1.".pdf",array('attachment'=>0));
	}

	
	
	public function situation_caisse_parservice($date1, $date2)
	{
	
		$this->load->view('impression/liste_situation_caisse_parservice', array("date1"=>$date1, "date2"=>$date2));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'portrait');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_situation_caisse_parservice".$date1.".pdf",array('attachment'=>0));
	}	
	
	public function situation_caisse_paracte($date1, $date2)
	{
	
		$this->load->view('impression/liste_situation_caisse_paracte', array("date1"=>$date1, "date2"=>$date2));
		
		
		// return;
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'portrait');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("liste_situation_caisse_paracte".$date1.".pdf",array('attachment'=>0));
	}


	
	public function mouvement_caisse_acte($id, $date1, $date2)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/liste_mouvement_acte', array("id"=>$id, "date1"=>$date1, "date2"=>$date2));
			
			
			// return;
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("liste_mouvement_acte".$id.".pdf",array('attachment'=>0));
		}
	}
	
	
	public function mouvement_caisse_facture($id, $date1, $date2, $acte, $typemvt)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$donnees = array("id"=>$id, "date1"=>$date1, "date2"=>$date2, "acte"=>$acte, "typemvt"=>$typemvt);
			$this->load->view('impression/liste_mouvement_facture', $donnees);
			
			
			// return;
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("liste_mouvement_facture".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function mouvement_caisse($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/liste_mouvement_personnel', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("liste_mouvement_personnel".$id.".pdf",array('attachment'=>0));
		}
	}



	public function etat_caisse()
	{			
			$data = $this->input->post();
	
			$premier = $data['premierJour'];
			$dernier = $data['dernierJour'];
		
			$this->load->view('impression/etat_caisse', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("etat_caisse".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}


	
	public function recu_caisse($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/recu_caisse', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
			// $this->dompdf->setPaper('A4', 'portrait');//courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
			// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
			// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("reçu_de_caisse_".$id.".pdf",array('attachment'=>0));
		
		}
	}
	
	public function rapport_epidemiologique($id)
	{
		
		$data = $this->input->post();
		
		$dernierJour = $data['dernierJour'];
		$premierJour = $data['premierJour'];
		
		
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/rapport_epidemiliogique', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("dossier_medical".$id.".pdf",array('attachment'=>0));
		}
	}	
		
	
	public function dossier_medical_passage($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/dossier_medical', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("dossier_medical".$id.".pdf",array('attachment'=>0));
		}
	}

	public function constante_vitale($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/constante_vitale', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("constante_vitale".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function prise_en_charge($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prise_en_charge', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prise_en_charge".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescript_consultation($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescript_consultation', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("consultation_patient".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescription_soins_infirmiers($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_soins_infirmiers', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_soins_infirmiers".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescription_hospitalisation($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_hospitalisation', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_hospitalisation".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescription_imagerie($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_imagerie', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A5', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_imagerie".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescription_examen_laboratoire($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_examen_laboratoire', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A5', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_examen_laboratoire".$id.".pdf",array('attachment'=>0));
		}
	}

	
	public function prescription_reeducation($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_reeducation', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A5', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_reeducation".$id.".pdf",array('attachment'=>0));
			
		}
	}

	public function prescription_maladie_diagnostiquee($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_maladie_diagnostiquee', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_maladie_diagnostiquee".$id.".pdf",array('attachment'=>0));
		}
	}

	public function declaration_nouveau_ne($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/declaration_nouveau_ne', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("declaration_nouveau_ne".$id.".pdf",array('attachment'=>0));
		}
	}

	public function declaration_deces($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/declaration_deces', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("declaration_deces".$id.".pdf",array('attachment'=>0));
		}
	}

	public function prescription_exploration($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/prescription_exploration', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A5', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prescription_exploration".$id.".pdf",array('attachment'=>0));
			
		}
	}

	
	
	
	public function engagement($id)
	{
		if(!isset($id)){
			return redirect("document/engagement");
		}
		else{
			$this->load->view('impression/engagement_a_payer', array("id"=>$id));
		
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			// $this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
			$this->dompdf->setPaper('A4', 'portrait'); //courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
			// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
			// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("engagement_a_payer".$id.".pdf",array('attachment'=>0));
			
			return redirect("document/engagement");
		}
	}

	
		
	public function depot_objet($id)
	{
		if(!isset($id)){
			return redirect("document/depot");
		}
		else{
			$this->load->view('impression/depot_objet', array("id"=>$id));
		
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			// $this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
			$this->dompdf->setPaper('A4', 'portrait'); //courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
			// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
			// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("depot_objet".$id.".pdf",array('attachment'=>0));
			
			return redirect("document/depot");
		}
	}
		
	public function rapportLabo($id)
	{
		if(!isset($id)){
			return redirect("laboratoire/examens_faits");
		}
		else{
			$this->load->view('impression/laboratoire', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			// $this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
			$this->dompdf->setPaper('A4', 'portrait'); //courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
			// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
			// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("resultat_laboratoire".$id.".pdf",array('attachment'=>0));
			
			return redirect("laboratoire/examens_faits");
			
		}
	}

	public function rapportImagerie($id)
	{
		if(!isset($id)){
			return redirect("imagerie/clotures");
		}
		else{
			$this->load->view('impression/imagerie', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			// $this->dompdf->setPaper('A7', 'portrait');//recu_pharmacie
			$this->dompdf->setPaper('A4', 'portrait'); //courrier;dossier_medical;fiche_personnel;laboratoire;liste-inventaire-stock;hospitalisation
			// $this->dompdf->setPaper('A5', 'portrait');//ordonnance;acte_de_deces;acte_de_naissance;consultation;imagerie
			// $this->dompdf->setPaper('A5', 'portrait');//acte_de_naissance
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("resultat_imagerie".$id.".pdf",array('attachment'=>0));
			
			return redirect("imagerie/clotures");
			
		}
	}
	
	public function rapport_reeduction($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/rapport_reeduction', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A5', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("compte_rendu_reeducation_".$id.".pdf",array('attachment'=>0));
		}
	}
	
	
	
	public function surveillance_epidemiologique($premier,$dernier)
	{
		
		$this->load->view('impression/surveillance_epidemiologique', array("premier"=>$premier,"dernier"=>$dernier));
		
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("surveillance_epidemiologique_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		
	}

	public function rapport_epidemiologie($premier,$dernier)
	{
		
			$this->load->view('impression/rapport_epidemiliogique', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("rapport_epidemiologie_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}
	public function prise_en_charge_enfant_malnutri()
	{
		
			$this->load->view('impression/prise_en_charge_enfant_malnutri');
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("prise_en_charge_enfant_malnutri.pdf",array('attachment'=>0));
		// }
		
	}

	public function repartition_malade_hospitalises($premier,$dernier)
	{

		$this->load->view('impression/repartition_malade_hospitalises', array("premier"=>$premier,"dernier"=>$dernier));
		
		/*
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("repartition_malade_hospitalise_du_".$premier.' au '.$dernier.".pdf",array('attachment'=>0));
		// }
		*/
	}

	public function indicateur_hospitalier($premier,$dernier)
	{
		
		
			$this->load->view('impression/indicateur_hospitalier', array("$premier"=>$premier,"$dernier"=>$dernier));
			
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("indicateur_hospitalier_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}
	
	public function csi_pmae_hopitaus_de_base($premier,$dernier)
	{
		
		$this->load->view('impression/indicateur_hospitalie_csi_pmae_hopitaus_de_base', array("premier"=>$premier,"dernier"=>$dernier));
		
		
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("csi_pmae_hopitaus_de_base_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
	
	}

	public function consultation_externe($premier,$dernier)
	{
		
		$this->load->view('impression/indicateur_hospitalie_consultations_externes', array("premier"=>$premier,"dernier"=>$dernier));
			
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("consultation_externe_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
	// }
		
	}

	public function activite_chirurgie($premier,$dernier)
	{

		$this->load->view('impression/activites_de_chirurgie', array("premier"=>$premier,"dernier"=>$dernier));
		
		//chargement de HTML
		$html=$this->output->get_output();
		
		//chargement de la librairie pdf
		$this->load->library('pdf');
		
		//chargement du contenu HTML
		$this->dompdf->loadHTML($html);
		
		//setup paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');
		
		//render HTML as PDF
		$this->dompdf->render();
		
		//output PDF
		$this->dompdf->stream("activite_de_chirurgie_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		
	}

	public function activite_radiologie($premier,$dernier)
	{
		
			$this->load->view('impression/activites_de_radiologie', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("activites_de_radiologie".$premier.' au '.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}

	public function activite_laboratoire($premier,$dernier)
	{
			$this->load->view('impression/activites_de_laboratoire', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("activites_de_laboratoire".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}
	
	public function consultation_femme_enceintes($premier,$dernier)
	{
		
			$this->load->view('impression/consultation_femme_enceintes_malades_selon_leur_age_et_age_grossesse', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("consultation_femme_enceintes_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}

	public function mortalite_maternelle($premier,$dernier)
	{
		/*$data = $this->input->post();
		
		$premier = $data['premierJour'];
		$dernier = $data['dernierJour'];*/
		// $premier = "2019-02-02";
		// $dernier = "2019-02-02";
		
		// var_dump($premier);
		// if(!isset($id)){
			// return redirect();
		// }
		// else{
			$this->load->view('impression/mortalite_maternelle_par_age_et_cause_de_deces', array("premier"=>$premier,"dernier"=>$dernier));
			/*
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("repartition_malade_hospitalise_du_".$premier.' au '.$dernier.".pdf",array('attachment'=>0));
		// }
		*/
	}

	public function rapport_entree_medicaments($premier,$dernier)
	{
		
			$this->load->view('impression/rapport_entree_medicaments', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("rapport_entree_medicaments_du".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}

	public function consultation_femme_post_natal($premier,$dernier)
	{
		
			$this->load->view('impression/consultation_femme_post_natal_selon_age', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("consultation_femme_post_natal_selon_age_du".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}

	public function gestion_des_medicaments($premier,$dernier)
	{
		
			$this->load->view('impression/gestion_des_medicaments', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("repartition_malade_hospitalise_du_".$premier.' au '.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}

	public function gestion_du_personnel($premier,$dernier)
	{
		
			$this->load->view('impression/gestion_du_personnel', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'landscape');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("Gestion du Personnel.pdf",array('attachment'=>0));
		// }
		
	}
	
	public function examen_abdominal($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_abdominal', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_abdominal".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_pelvien($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_pelvien', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_pelvien".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_perineal($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_perineal', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_perineal".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_vaginal($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_vaginal', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_vaginal".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_rectal($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_rectal', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_rectal".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_echographique($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_echographique', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_echographique".$id.".pdf",array('attachment'=>0));
		}
	}

	public function examen_senologique($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_senologique', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_senologique".$id.".pdf",array('attachment'=>0));
		}
	}
	
	
		public function cptActes()
		{			
			$data = $this->input->post();
	
			$premier = $data['premierJour'];
			$dernier = $data['dernierJour'];
		
			$this->load->view('impression/compteur_actes', array("premier"=>$premier,"dernier"=>$dernier));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("compteur_du_".$premier.'_au_'.$dernier.".pdf",array('attachment'=>0));
		// }
		
	}
	
	
	
	/*
		Fabrice
	*/
	
		public function examen_echographique_1($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_echographique_1', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_echographique_1".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_echographique_2($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_echographique_2', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_echographique_2".$id.".pdf",array('attachment'=>0));
		}
	}
	
	public function examen_echographique_3($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/examen_echographique_3', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("examen_echographique_3".$id.".pdf",array('attachment'=>0));
		}
	}
	
	
	public function passage_hospitalisation($id)
	{
		if(!isset($id)){
			return redirect();
		}
		else{
			$this->load->view('impression/passage_hospitalisation', array("id"=>$id));
			
			//chargement de HTML
			$html=$this->output->get_output();
			
			//chargement de la librairie pdf
			$this->load->library('pdf');
			
			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);
			
			//setup paper size and orientation
			$this->dompdf->setPaper('A4', 'portrait');
			
			//render HTML as PDF
			$this->dompdf->render();
			
			//output PDF
			$this->dompdf->stream("passage_hospitalisation".$id.".pdf",array('attachment'=>0));
		}
	}

	public function resultat_echoa($id)
	{
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/resultat_echoa', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("resultat_echoa" . $id . ".pdf", array('attachment' => 0));
		}
	}

	public function resultat_echob($id)
	{
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/resultat_echob', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("resultat_echob" . $id . ".pdf", array('attachment' => 0));
		}
	}

	public function resultat_echoc($id)
	{
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/resultat_echoc', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("resultat_echoc" . $id . ".pdf", array('attachment' => 0));
		}
	}

	public function resultat_echod($id)
	{
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/resultat_echod', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("resultat_echod" . $id . ".pdf", array('attachment' => 0));
		}
	}

	public function resultat_echoe($id)
	{
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/resultat_echoe', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("resultat_echoe" . $id . ".pdf", array('attachment' => 0));
		}
	}
	
	public function recouvrement_assureur($valeur)
	{
		//$data = $this->input->post();
		if (!isset($valeur)) {
			return redirect();
		} else {
			$this->load->view('impression/recouvrement_assureur', array("valeur" => $valeur));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("recouvrement_assureur.pdf", array('attachment' => 0));
		}
	}
	public function ristourne($valeur)
	{
		//$data = $this->input->post();
		if (!isset($valeur)) {
			return redirect();
		} else {
			$this->load->view('impression/ristourne', array("valeur" => $valeur));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Ristourne.pdf", array('attachment' => 0));
		}
	}
	
	public function quotes_parts($valeur)
	{
		//$data = $this->input->post();
		if (!isset($valeur)) {
			return redirect();
		} else {
			$this->load->view('impression/quotes_parts', array("valeur" => $valeur));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("quotes_parts.pdf", array('attachment' => 0));
		}
	}
	public function facuture_admission($id)
	{
		//$data = $this->input->post();
		if (!isset($id)) {
			return redirect();
		} else {
			$this->load->view('impression/facture_admission', array("id" => $id));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Facture Admission.pdf", array('attachment' => 0));
		}
	}


	public function materiel_lourd($premier,$dernier)
	{
		//$data = $this->input->post();
		
			$this->load->view('impression/materiel_lourd', array("premier" => $premier,"dernier" => $dernier));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Materiel Lourd.pdf", array('attachment' => 0));
		
	}


	public function materiel_medico_technique($premier,$dernier)
	{
		//$data = $this->input->post();
		
			$this->load->view('impression/materiel_medico_technique', array("premier" => $premier,"dernier" => $dernier));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Materiel Medico-technique.pdf", array('attachment' => 0));
		
	}

	public function materiel_roulant($premier,$dernier)
	{
		//$data = $this->input->post();
		
			$this->load->view('impression/materiel_roulant', array("premier" => $premier,"dernier" => $dernier));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Materiel Roulant.pdf", array('attachment' => 0));
		
	}
	public function mobilier($premier,$dernier)
	{
		//$data = $this->input->post();
		
			$this->load->view('impression/mobilier', array("premier" => $premier,"dernier" => $dernier));

			//chargement de HTML
			$html = $this->output->get_output();

			//chargement de la librairie pdf
			$this->load->library('pdf');

			//chargement du contenu HTML
			$this->dompdf->loadHTML($html);

			//setup paper size and orientation

			$this->dompdf->setPaper('A4', 'portrait');

			//render HTML as PDF
			$this->dompdf->render();

			//output PDF
			$this->dompdf->stream("Mobilier.pdf", array('attachment' => 0));
		
	}
	
}

