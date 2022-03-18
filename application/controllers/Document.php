<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

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
	public function engagement()
	{
		$this->load->view('app/generique/page-engagement');
	
	}
	
	public function depot()
	{
		$this->load->view('app/generique/page-depot');
	
	}
	
	public function sortie()
	{
		$this->load->view('app/generique/page-sortie');
	
	}
	
	public function operer()
	{
		$this->load->view('app/generique/page-operer');
	
	}
	
	public function repos()
	{
		$this->load->view('app/generique/page-repos');
	
	}
	
	public function medical()
	{
		$this->load->view('app/generique/page-medical');
	
	}
	
	
	public function ajoutEngagement()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		// var_dump($data);
		
		if(empty($data)){
			return redirect("document/engagement");
		}
		else{
			
			if($data["pour"] == "moi"){
				$data["prenomP"] = $data["prenom"];
				$data["nomP"] = $data["nom"];
			}
			
			if(trim($data["parente"]) == ""){
				$data["parente"] = NULL;
			}
			
			$donnees = array(
				"enp_dDate"=>date("Y-m-d"),
				"enp_sNom"=>strtoupper($data["nom"]),
				"enp_sPrenom"=>ucwords($data["prenom"]),
				"enp_sAdresse"=>$data["adresse"],
				"enp_sNomP"=>strtoupper($data["nomP"]),
				"enp_sPrenomP"=>ucwords($data["prenomP"]),
				"enp_sAdresseP"=>$data["adresseP"],
				"enp_sLien"=>ucfirst($data["parente"])
			);
			$ajout = $this->md_patient->ajout_engagement_a_payer($donnees);
			
			$this->load->view('impression/engagement_a_payer', array("id"=>$ajout->enp_id));
		
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
			$this->dompdf->stream("engagement_a_payer".$ajout->enp_id.".pdf",array('attachment'=>0));
			
			return redirect("document/engagement");
			
		}
		
	
	}
	
		
	
	
}
