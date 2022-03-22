<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_smi extends CI_Model {
		
	
	protected $tableLso = "armee.t_list_source_lso";
	protected $tableLob = "armee.t_liste_antecedants_obstetricaux_lob";
	protected $tableInc = "armee.t_information_conjoint_inc";
	protected $tableGes = "armee.t_gestation_anterieur_ges";
	protected $tableInt = "armee.t_interogatoire_int";
	protected $tablePre = "armee.t_premier_examen_pre";
	protected $tableFar = "armee.t_facteur_risque_far";
	protected $tablePfa = "armee.t_Planning_familiale_pfa";
	protected $tableObs = "armee.t_antecedent_obstetricaux_obs";
	protected $tableSou = "armee.t_source_sou";
	protected $tableSup = "armee.t_suivie_prenatal_sup";
	protected $tableSea = "armee.t_sejour_acte_sea";
	protected $tableAcm = "armee.t_acte_medical_acm";
	protected $tableLiv = "armee.t_liste_vaccins_liv";
	protected $tableVap = "armee.t_vaccination_prenatal_vap";
	protected $tableIna = "armee.t_information_Nais_ina";
	protected $tableObc = "armee.t_observation_clinique_obc";
	protected $tableVac = "armee.t_vaccination_vac";
	protected $tableLac = "armee.t_liste_act_lac";
	protected $tablePer = "armee.t_personnel_per";
	protected $tableExa = "armee.t_Examen_clinique_exa";
	protected $tablePar = "armee.t_partogramme_par";
	protected $tableIcg = "armee.t_information_complementaire_gestation_icg";
	
	
	public function nb_antecedant_lob()
	{
		return $this->db
		->select("COUNT(lob_id) as nb")
		->where("lob_iSta",1)
		->get($this->tableLob)->row();
	}
	
	public function nb_source_info()
	{
		return $this->db
		->select("COUNT(li_id) as nb")
		->where("lso_iSta",1)
		->get($this->tableLso)->row();
	}
	public function nb_vaccin_info()
	{
		return $this->db
		->select("COUNT(liv_id) as nb")
		->where("liv_iSta",1)
		->get($this->tableLiv)->row();
	}
	
	
	/** liste vaccin **/
	public function ajout_vaccin($donnees){
		return $this->db->insert($this->tableLiv,$donnees);
	}
	
	public function maj_vaccin($donnees,$id){
		return $this->db->where("liv_id",$id)->update($this->tableLiv,$donnees);
	}
	public function verif_vaccin($lob)
	{
		return $this->db
		->where("liv_sLib",$lob)
		->get($this->tableLiv)->row();
	}
	
	public function recup_vaccin($id)
	{
		return $this->db
		->where("liv_id",$id)
		->where("liv_iSta",1)
		->get($this->tableLiv)->row();
	}
	
	public function verif_vaccin_modif($dep,$id)
	{
		return $this->db
		->where("liv_sLib",$dep)
		->where("liv_id !=",$id)
		->get($this->tableLiv)->row();
	}
	
	public function liste_vaccin_actifs()
	{
		return $this->db
		->where("liv_iSta",1)
		->order_by("liv_sLib","asc")
		->get($this->tableLiv)->result();
	}
	
	/** Source d'information **/
	public function ajout_source_info($donnees){
		return $this->db->insert($this->tableLso,$donnees);
	}
	
	public function maj_source_info($donnees,$id){
		return $this->db->where("lso_id",$id)->update($this->tableLso,$donnees);
	}
	public function verif_source_info($lob)
	{
		return $this->db
		->where("lso_sLib",$lob)
		->get($this->tableLso)->row();
	}
	
	public function recup_source_info($id)
	{
		return $this->db
		->where("lso_id",$id)
		->where("lso_iSta",1)
		->get($this->tableLso)->row();
	}
	
	public function verif_source_info_modif($dep,$id)
	{
		return $this->db
		->where("lso_sLib",$dep)
		->where("lso_id !=",$id)
		->get($this->tableLso)->row();
	}
	
	public function liste_source_info_actifs()
	{
		return $this->db
		->where("lso_iSta",1)
		->order_by("lso_sLib","asc")
		->get($this->tableLso)->result();
	}
	
	public function liste_source_info_100()
	{
		return $this->db->select("lso_id,lso_sLib")
		->limit(100)
		->where("lso_iSta",1)
		->order_by("lso_sLib","asc")
		->get($this->tableLso)->result();
	}
	
	public function recherche_source_info($search)
	{  
		return $this->db->select("lso_id,lso_sLib")
					->like("lso_sLib",$search,'after')
					->where("lso_iSta",1)
					->order_by("lso_sLib","asc")
					->get($this->tableLso)->result();
	}
	
	
	
	/** antecedants obstetricaux **/
	public function ajout_AntecedentObs($donnees){
		return $this->db->insert($this->tableLob,$donnees);
	}
	
	public function maj_AntecedentObs($donnees,$id){
		return $this->db->where("lob_id",$id)->update($this->tableLob,$donnees);
	}
	public function verif_AntecedentObs($lob)
	{
		return $this->db
		->where("lob_sLib",$lob)
		->get($this->tableLob)->row();
	}
	
	public function recup_AntecedentObs($id)
	{
		return $this->db
		->where("lob_id",$id)
		->where("lob_iSta",1)
		->get($this->tableLob)->row();
	}
	
	public function verif_AntecedentObs_modif($dep,$id)
	{
		return $this->db
		->where("lob_sLib",$dep)
		->where("lob_id !=",$id)
		->get($this->tableLob)->row();
	}
	
	
	public function liste_antecedent_Obstetricaux_100()
	{
		return $this->db->select("lob_id,lob_sLib")
		->limit(100)
		->where("lob_iSta",1)
		->order_by("lob_sLib","asc")
		->get($this->tableLob)->result();
	}
	
	public function liste_antecedent_Obstetricaux_actifs()
	{
		return $this->db
		->where("lob_iSta",1)
		->order_by("lob_sLib","asc")
		->get($this->tableLob)->result();
	}
	
	public function recherche_antecedent_Obstetricaux($search)
	{  
		return $this->db->select("lob_id,lob_sLib")
					->like("lob_sLib",$search,'after')
					->where("lob_iSta",1)
					->order_by("lob_sLib","asc")
					->get($this->tableLob)->result();
	}
	
	
	/**information du conjoint**/
	
	public function ajout_conjoint($donnees){
		return $this->db->insert($this->tableInc,$donnees);
	}
	
	public function maj_conjoint($donnees,$id){
		return $this->db->where("inc_id",$id)->update($this->tableInc,$donnees);
	}
	
	public function verif_conjoint($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableInc)->row();
	}
	
	
	public function recup_conjoint($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInc.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableInc.".inc_id","desc")
		->get($this->tableInc)->row();
	}
	
	public function recup_patient_conjoint($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableInc.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInc.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableInc)->result();
	}
	
	/**Gestation antérieur**/
	
	public function ajout_gestation($donnees){
		return $this->db->insert($this->tableGes,$donnees);
	}
	
	public function maj_gestation($donnees,$id){
		return $this->db->where("ges_id",$id)->update($this->tableGes,$donnees);
	}
	
	public function verif_gestation($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableGes)->row();
	}
	
	
	public function recup_info_gestation($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableGes.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableGes.".ges_id","desc")
		->get($this->tableGes)->row();
	}
	
	public function recup_patient_info_gestation($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableGes.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableGes)->result();
	}
	
	
	/**Intérogatoire**/
	
	public function ajout_interogatoire($donnees){
		return $this->db->insert($this->tableInt,$donnees);
	}
	
	public function maj_interogatoire($donnees,$id){
		return $this->db->where("int_id",$id)->update($this->tableInt,$donnees);
	}
	
	public function verif_interogatoire($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableInt)->row();
	}
	
	
	public function recup_info_interogatoire($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInt.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableInt.".int_id","desc")
		->get($this->tableInt)->row();
	}
	
	public function recup_patient_info_interogatoire($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInt.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableInt)->row();
	}
	
	/**Premier Examen**/
	
	public function ajout_premiere_examen($donnees){
		return $this->db->insert($this->tablePre,$donnees);
	}
	
	public function maj_premiere_examen($donnees,$id){
		return $this->db->where("pre_id",$id)->update($this->tablePre,$donnees);
	}
	
	public function verif_premiere_examen($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tablePre)->row();
	}
	
	
	public function recup_info_premiere_examen($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePre.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tablePre.".pre_id","desc")
		->get($this->tablePre)->row();
	}
	public function recup_patient_info_premiere_examen($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePre.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tablePre)->row();
	}
	
	/**Facteur de risque greossesse actuel**/
	
	public function ajout_facteur_de_risque($donnees){
		return $this->db->insert($this->tableFar,$donnees);
	}
	
	public function maj_facteur_de_risque($donnees,$id){
		return $this->db->where("far_id",$id)->update($this->tableFar,$donnees);
	}
	
	public function verif_facteur_de_risque($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableFar)->row();
	}
	
	
	public function recup_info_facteur_de_risque($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableFar.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableFar.".far_id","desc")
		->get($this->tableFar)->row();
	}
	
	public function recup_patient_info_facteur_de_risque($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableFar.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableFar)->row();
	}
	
	/**Planning familliale**/
	
	public function ajout_planning_familliale($donnees){
		return $this->db->insert($this->tablePfa,$donnees);
	}
	
	public function maj_planning_familliale($donnees,$id){
		return $this->db->where("pfa_id",$id)->update($this->tablePfa,$donnees);
	}
	
	public function verif_planning_familliale($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tablePfa)->row();
	}
	
	
	public function recup_planning_familliale($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePfa.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tablePfa.".pfa_id","desc")
		->get($this->tablePfa)->row();
	}
	
	public function recup_patient_planning_familliale($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePfa.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tablePfa)->row();
	}
	
	
	/** PARTOGRAMME **/
	
	public function ajout_Partogramme($donnees){
		return $this->db->insert($this->tablePar,$donnees);
	}
	
	public function maj_Partogramme($donnees,$id){
		return $this->db->where("par_id",$id)->update($this->tablePar,$donnees);
	}
	
	public function verif_Partogramme($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tablePar)->row();
	}
	
	
	public function recup_Partogramme($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePar.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->get($this->tablePar)->row();
	}
	
	public function recup_patient_Partogramme($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePar.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tablePar)->row();
	}
	public function liste_element_Partogramme($id)
	{
		return $this->db
		
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePar.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->get($this->tablePar)->result();
	}
	
	/** Information complementaire sur la gestation de la femme **/
	
	public function ajout_Info_gestation($donnees){
		return $this->db->insert($this->tableIcg,$donnees);
	}
	
	public function maj_Info_gestation($donnees,$id){
		return $this->db->where("icg_id",$id)->update($this->tableIcg,$donnees);
	}
	
	public function verif_Info_gestation($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableIcg)->row();
	}
	
	
	public function recup_Info_comp_gestation($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableIcg.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->get($this->tableIcg)->row();
	}
	
	public function recup_patient_Info_comp_gestation($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableIcg.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableIcg)->row();
	}
	
	
	/**Examen clinique**/
	
	public function ajout_Examen_clinique($donnees){
		return $this->db->insert($this->tableExa,$donnees);
	}
	
	public function maj_Examen_clinique($donnees,$id){
		return $this->db->where("exa_id",$id)->update($this->tableExa,$donnees);
	}
	
	public function verif_Examen_clinique($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableExa)->row();
	}
	
	
	public function recup_Examen_clinique($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableExa.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by("exa_id","desc")
		->get($this->tableExa)->row();
	}
	
	public function recup_patient_Examen_clinique($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableExa.'.sea_id ','inner')
		->where("pat_id",$id)
		->get($this->tableExa)->row();
	}
	
	/**Antécedents**/
	
	public function ajout_antecedants_obstetricaux($donnees){
		return $this->db->insert($this->tableObs,$donnees);
	}
	
	public function maj_antecedants_obstetricaux($donnees,$id){
		return $this->db->where("obs_id",$id)->update($this->tableObs,$donnees);
	}
	
	public function verif_antecedants_obstetricaux($id)
	{
		return $this->db
		->where("lob_id",$id)
		->get($this->tableObs)->row();
	}
	
	
	public function recup_antecedants_obstetricaux($id)
	{
		return $this->db
		
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObs.'.sea_id ','inner')
		->join($this->tableLob, $this->tableLob.'.lob_id ='.$this->tableObs.'.lob_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->get($this->tableObs)->result();
	}
	
	public function recup_patient_antecedants_obstetricaux($id)
	{
		return $this->db
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObs.'.sea_id ','inner')
		->join($this->tableLob, $this->tableLob.'.lob_id ='.$this->tableObs.'.lob_id ','inner')
		->where($this->tableAcm.".pat_id",$id)
		->get($this->tableObs)->result();
	}
	
	/**Source d'information **/
	
	public function ajout_source($donnees){
		return $this->db->insert($this->tableSou,$donnees);
	}
	
	public function maj_source($donnees,$id){
		return $this->db->where("sou_id",$id)->update($this->tableSou,$donnees);
	}
	
	public function verif_source($id)
	{
		return $this->db
		->where("lso_id",$id)
		->get($this->tableSou)->row();
	}
	
	
	public function recup_source($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSou.'.sea_id ','inner')
		->join($this->tableLso, $this->tableLso.'.lso_id ='.$this->tableSou.'.lso_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->get($this->tableSou)->result();
	}
	public function recup_patient_source($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSou.'.sea_id ','inner')
		->join($this->tableLso, $this->tableLso.'.lso_id ='.$this->tableSou.'.lso_id ','inner')
		->where("pat_id",$id)
		->get($this->tableSou)->result();
	}
	
	/**Suivi de la femme enciente **/
	
	public function ajout_suivi_femme($donnees){
		return $this->db->insert($this->tableSup,$donnees);
	}
	
	public function maj_suivi_femme($donnees,$sea){
		return $this->db->where("sup_id",$sea)->update($this->tableSup,$donnees);
	}
	
	public function verif_suivi_femme($id,$date)
	{
		return $this->db
		->where("sea_id",$id)
		->where("sup_dDate",$date)
		->get($this->tableSup)->row();
	}
	
	
	public function recup_suivi_femme($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSup.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableSup.".sup_id","desc")
		->get($this->tableSup)->row();
	}
	
	public function list_suivi_femme($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSup.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableSup.".sup_id","desc")
		->get($this->tableSup)->result();
	}
	
	
	/**Vaccination femme **/
	
	public function ajout_vaccination_femme($donnees){
		return $this->db->insert($this->tableVap,$donnees);
	}
	
	public function maj_vaccination_femme($donnees,$sea){
		return $this->db->where("vap_id",$sea)->update($this->tableVap,$donnees);
	}
	
	public function verif_vaccination_femme($id,$date)
	{
		return $this->db
		->where("sea_id",$id)
		->where("vap_dDate",$date)
		->get($this->tableVap)->row();
	}
	
	
	public function recup_vaccination_femme($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVap.'.liv_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableVap.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableVap.".vap_id","desc")
		->get($this->tableVap)->row();
	}
	
	public function suivi_vaccinal_femme($id)
	{
		return $this->db
		->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVap.'.liv_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableVap.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableVap.".vap_id","desc")
		->get($this->tableVap)->result();
	}
	
	
	
	/***** Enfant *****/
	
	
	/**Information de naissance de l'enfant**/
	
	public function ajout_Info_Nais($donnees){
		return $this->db->insert($this->tableIna,$donnees);
	}
	
	public function maj_Info_Nais($donnees,$id){
		return $this->db->where("ina_id",$id)->update($this->tableIna,$donnees);
	}
	
	public function verif_Info_Nais($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableIna)->row();
	}
	
	
	public function recup_Info_Nais($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableIna.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableIna.".ina_id","desc")
		->get($this->tableIna)->row();
	}
	
	/**Observations cliniques**/
	
	public function ajout_Observations($donnees){
		return $this->db->insert($this->tableObc,$donnees);
	}
	
	public function maj_Observations($donnees,$id){
		return $this->db->where("obc_id",$id)->update($this->tableObc,$donnees);
	}
	
	public function verif_Observations($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableObc)->row();
	}
	
	
	public function recup_Observations($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObc.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableObc.".obc_id","desc")
		->get($this->tableObc)->row();
	}
	
	public function listeobservations($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObc.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableObc.".obc_id","asc")
		->get($this->tableObc)->result();
	}
	
	public function liste_Observations($id)
	{
		return $this->db
		->where($this->tableObc.".sea_id",$id)
		->order_by($this->tableObc.".obc_id","desc")
		->get($this->tableObc)->result();
	}
	/**Vaccination enfant**/
	
	public function ajout_VaccinationEnfant($donnees){
		return $this->db->insert($this->tableVac,$donnees);
	}
	
	public function maj_VaccinationEnfant($donnees,$id){
		return $this->db->where("vac_id",$id)->update($this->tableVac,$donnees);
	}
	
	public function verif_VaccinationEnfant($id)
	{
		return $this->db
		->where("sea_id",$id)
		->get($this->tableVac)->row();
	}
	
	
	public function recup_VaccinationEnfant($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVac.'.liv_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableVac.'.sea_id ','inner')
		->where($this->tableSea.".acm_id",$id)
		->order_by($this->tableVac.".vac_id","desc")
		->get($this->tableVac)->row();
	}
	
	public function list_VaccinationEnfant($id)
	{
		return $this->db
		->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVac.'.liv_id ','inner')
		->where($this->tableVac.".sea_id",$id)
		->order_by($this->tableVac.".vac_id","desc")
		->get($this->tableVac)->result();
	}
	
	
	
	
	
	
	
	public function recup_conjoint_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInc.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableInc.".sea_id",$id)
		->order_by($this->tableInc.".inc_id","desc")
		->get($this->tableInc)->row();
	}
	
	
	/*** Examen clinique ***/
	public function recup_examen_clinique_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableExa.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableExa.".sea_id",$id)
		->order_by($this->tableExa.".exa_id","desc")
		->get($this->tableExa)->row();
	}
	
	public function recup_info_gestation_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableGes.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableGes.".sea_id",$id)
		->order_by($this->tableGes.".ges_id","desc")
		->get($this->tableGes)->row();
	}
	
	public function recup_info_interogatoire_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableInt.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableInt.".sea_id",$id)
		->order_by($this->tableInt.".int_id","desc")
		->get($this->tableInt)->row();
	}
	public function recup_Partogramme_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePar.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tablePar.".sea_id",$id)
		->order_by($this->tablePar.".par_id","desc")
		->get($this->tablePar)->result();
	}
	public function recup_InfoGestation_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableIcg.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableIcg.".sea_id",$id)
		->order_by($this->tableIcg.".icg_id","desc")
		->get($this->tableIcg)->result();
	}
	
	
	public function recup_info_premiere_examen_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePre.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tablePre.".sea_id",$id)
		->order_by($this->tablePre.".pre_id","desc")
		->get($this->tablePre)->row();
	}
	
	public function recup_info_facteur_de_risque_sejour($id)
	{
		return $this->db
		->limit(1)
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableFar.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableFar.".sea_id",$id)
		->order_by($this->tableFar.".far_id","desc")
		->get($this->tableFar)->row();
	}
	
	public function recup_planning_familliale_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tablePfa.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tablePfa.".sea_id",$id)
		->order_by($this->tablePfa.".pfa_id","desc")
		->get($this->tablePfa)->row();
	}
	public function recup_antecedants_obstetricaux_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObs.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableObs.".sea_id",$id)
		->order_by($this->tableObs.".obs_id","desc")
		->get($this->tableObs)->row();
	}
	public function recup_source_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSou.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableSou.".sea_id",$id)
		->order_by($this->tableSou.".sou_id","desc")
		->get($this->tableSou)->row();
	}
	public function recup_suivi_femme_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableSup.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableSup.".sea_id",$id)
		->order_by($this->tableSup.".sup_id","desc")
		->get($this->tableSup)->row();
	}
	public function recup_vaccination_femme_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableVap.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableVap.".sea_id",$id)
		->order_by($this->tableVap.".vap_id","desc")
		->get($this->tableVap)->row();
	}
	public function recup_Info_Nais_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableIna.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableIna.".sea_id",$id)
		->order_by($this->tableIna.".ina_id","desc")
		->get($this->tableIna)->row();
	}
	
	public function recup_Observations_sejour($id)
	{
		return $this->db
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableObc.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableObc.".sea_id",$id)
		->order_by($this->tableObc.".obc_id","desc")
		->get($this->tableObc)->result();
	}
	
	public function recup_VaccinationEnfant_sejour($id)
	{
		return $this->db
		->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVac.'.liv_id ','inner')
		->join($this->tableSea, $this->tableSea.'.sea_id ='.$this->tableVac.'.sea_id ','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
		->where($this->tableVac.".sea_id",$id)
		->get($this->tableVac)->result();
	}
	
	
	
	
	public function planning_familiale_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tablePfa. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tablePfa . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tablePfa)->result();
	}
	
	
	public function interogatoire_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableInt. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableInt . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableInt)->result();
	}
	
	public function gestation_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableGes. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableGes . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableGes)->result();
	}
	public function conjoint_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableInc. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableInc . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableInc)->result();
	}
	public function observation_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableObc. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableObc . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableObc)->result();
	}
	
	
	public function Vaccination_prenatal_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableVap. '.sea_id ', 'inner')
			->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVap.'.liv_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableVap . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableVap)->result();
	}
	public function Vaccination_enfant_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableVac. '.sea_id ', 'inner')
			->join($this->tableLiv, $this->tableLiv.'.liv_id ='.$this->tableVac.'.liv_id ','inner')
			->join($this->tablePer, $this->tablePer.'.per_id ='.$this->tableVac.'.per_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableVac . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableVac)->result();
	}
	
	public function Suivi_prenatal_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableSup. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableSup . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableSup)->result();
	}
	
	
	public function Information_Nais_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableIna. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableIna . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableIna)->result();
	}
	
	
	public function Source_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableSou. '.sea_id ', 'inner')
			->join($this->tableLso, $this->tableLso.'.lso_id ='.$this->tableSou.'.lso_id ','inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableSou . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableSou)->result();
	}
	
	
	public function Antecedants_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tableObs. '.sea_id ', 'inner')
			->join($this->tableLob, $this->tableLob.'.lob_id ='.$this->tableObs.'.lob_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableObs . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableObs)->result();
	}
	
	public function facteur_de_risque_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id ='. $this->tableFar. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tableFar . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tableFar)->result();
	}
	
	public function premier_examen_sejour_dossier_medical($id)
	{
		return $this->db
			->join($this->tableSea, $this->tableSea . '.sea_id =' . $this->tablePre. '.sea_id ', 'inner')
			// ->join($this->tableAcm, $this->tableAcm.'.acm_id ='.$this->tableSea.'.acm_id ','inner')
			// ->join($this->tableLac, $this->tableLac.'.lac_id ='.$this->tableAcm.'.lac_id ','inner')
			->where($this->tablePre . ".sea_id", $id)
			// ->order_by($this->tableCon.".con_id","desc")
			->get($this->tablePre)->result();
	}
}
