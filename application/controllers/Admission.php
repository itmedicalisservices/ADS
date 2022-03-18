<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

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
	public function index()
	{
		$this->load->view('app/cardiologie/page-liste-consultation');
	}
	
	
	public function hospitalisation($dem)
	{
		$demande=$this->md_patient->recup_demande($dem);
		$this->load->view('app/admission/page-hospitalisation',array("demande"=>$demande));
	}

	
	public function liste_patient_hospitaliser()
	{
		$this->load->view('app/admission/page-liste-patient-hospitaliser');
	}

	
	public function liste_demande_hospitalition()
	{
		$this->load->view('app/admission/page-liste-demande-hospitalition');
	}

	
	
}
