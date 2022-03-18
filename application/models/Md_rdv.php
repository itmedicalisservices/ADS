<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_rdv extends CI_Model {
		
	protected $tableDir = "armee.t_disponibilite_rdv_dir";
	protected $tablePer = "armee.t_personnel_per";
	protected $tablePat = "armee.t_patients_pat";
	protected $tableAcm = "armee.t_acte_medical_acm";
	protected $tableLac = "armee.t_liste_act_lac";
	protected $tableSea = "armee.t_sejour_acte_sea";
	
	
	public function insert_rendez_vous($data){
		$this->db->insert($this->tableDir,$data);
	} 
	
	
	public function liste_des_rdv(){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta",1)
		->get($this->tableDir)
		->result();
		
	}
	public function liste_de_mes_rdv(){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta !=",2)
		->where($this->tableDir.".dir_sDestinataire",$this->session->armee)
		->get($this->tableDir)
		->result();
		
	}
	
	public function rdv_sejour($sea){
		return $this->db
		// ->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->join($this->tableSea,$this->tableSea.".sea_id=".$this->tableDir.".sea_id")
		->where($this->tableDir.".dir_iSta !=",2)
		->where($this->tableDir.".sea_id",$sea)
		->get($this->tableDir)
		->result();
		
	}
	
	public function liste_de_mes_rdv_programme($date){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta !=",2)
		->where($this->tableDir.".dir_dDate >=",$date)
		->where($this->tableDir.".dir_sDestinataire",$this->session->armee)
		->get($this->tableDir)
		->result();
	}
	
	public function nb_de_mes_rdv_programme($date1,$date2){
		return $this->db
		->where($this->tableDir.".dir_iSta !=",2)
		->where($this->tableDir.".dir_dDate >=",$date1)
		->where($this->tableDir.".dir_dDate <=",$date2)
		->where($this->tableDir.".dir_sDestinataire",$this->session->armee)
		->get($this->tableDir)
		->result();
	}
	
	public function liste_de_tous_les_rdv(){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta !=",2)
		->get($this->tableDir)
		->result();
		
	}
	public function liste_des_rdv_annules(){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta",0)
		->get($this->tableDir)
		->result();
		
	}
	public function liste_des_rdv_valides(){
		return $this->db
		->join($this->tablePer,$this->tablePer.".per_id=".$this->tableDir.".dir_sDestinataire")
		->where($this->tableDir.".dir_iSta",0)
		->get($this->tableDir)
		->result();
		
	}
	
	
	public function annulerRdv($dir_id) 
	{ 
		return $this->db->where('dir_id',$dir_id)->delete($this->tableDir); 
	}
	
	
	public function maj_rdv($donnees,$id){
		return $this->db->where("dir_id",$id)->update($this->tableDir,$donnees);
	}	
}

?>