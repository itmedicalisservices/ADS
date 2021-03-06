<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {

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
	public function activite()
	{
		$this->load->view('app/direction_generale/page-activite');
	
	}
	
	
	public function finances_par_type_cprincipal()
	{
		$this->load->view('app/caisse/finances-type-cprincipal');
	}
	public function finances_par_rubrique_cprincipal()
	{
		$this->load->view('app/caisse/finances-rubrique-cprincipal');
	}
	
	
	public function finance_par_acte_cprincipal()
	{
		$this->load->view('app/caisse/finances-acte-cprincipal');
	}	
	
	public function finances_service_cprincipal()
	{
		$this->load->view('app/caisse/finances-service-cprincipal');
	}
	
	
	
	public function personnel()
	{
		$this->load->view('app/direction_generale/page-personnel');
	
	}
	
	public function finances_dans_directeur()
	{
		$this->load->view('app/direction_generale/page-finances-dans-directeur');
	
	}	
	
	public function finance_par_medecin_dans_directeur()
	{
		$this->load->view('app/direction_generale/page-finances-par-medecin-dans-directeur');
	
	}		
	
	public function finance_par_acte_dans_directeur()
	{
		$this->load->view('app/direction_generale/page-finances-par-acte-dans-directeur');
	
	}	
	
	public function finances()
	{
		$this->load->view('app/direction_generale/page-finances');
	
	}	
	
	public function finance_par_medecin()
	{
		$this->load->view('app/direction_generale/page-finances-par-medecin');
	}
	
	
	//RABY
	public function ristourne_des_medecin()
	{
		$this->load->view('app/direction_generale/page-ristourne-des-medecin');
	}
	
	public function detail_ristourne($id)
	{
		$this->load->view('app/direction_generale/page-detail-ristourne',array("id"=>$id));
	}
	
	public function detail_quotes_parts($id)
	{
		$this->load->view('app/direction_generale/page-detail-quotes-parts',array("id"=>$id));
	}
	
	public function ristourne_par_medecin()
	{
		$this->load->view('app/direction_generale/page-ristourne-par-medecin');
	}
	
	public function quotes_parts_medecins()
	{
		$this->load->view('app/direction_generale/page-quotes-parts-medecins');
	}
	
	public function quotes_parts_par_medecins()
	{
		$this->load->view('app/direction_generale/page-quotes-parts-par-medecins');
	}
	
	//RABY
	
	
	public function finance_par_acte()
	{
		$this->load->view('app/direction_generale/page-finances-par-acte');
	}
	
	public function pharmacie()
	{
		$this->load->view('app/direction_generale/page-pharmacie');
	
	}
	
	
	public function laboratoire()
	{
		$this->load->view('app/direction_generale/page-laboratoire');
	
	}
	
	
	
	
}
