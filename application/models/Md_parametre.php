<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_parametre extends CI_Model {
		
	protected $tableDep = "armee.t_departement_dep";
	protected $tablePst = "armee.t_postes_pst";
	protected $tableSpt = "armee.t_specialites_spt";
	protected $tableFct = "armee.t_fonctions_fct";
	protected $tableSer = "armee.t_services_ser";
	protected $tableUni = "armee.t_unite_uni";
	protected $tableTpe = "armee.t_type_personnel_tpe";
	protected $tableLac = "armee.t_liste_act_lac";
	protected $tableAcm = "armee.t_acte_medical_acm";
	protected $tableAss = "armee.t_assureurs_ass";
	protected $tableTas = "armee.t_type_assurance_tas";
	protected $tableCas = "armee.t_couverture_assurance_cas";
	protected $tableStr = "armee.t_structure_str";
	protected $tableCat = "armee.t_categories_cat";
	protected $tableFam = "armee.t_famille_fam";
	protected $tableFor = "armee.t_forme_for";
	protected $tableTfr = "armee.t_type_fournisseur_tfr";
	protected $tableSal = "armee.t_salles_sal";
	protected $tableArm = "armee.t_armoires_arm";
	protected $tableLig = "armee.t_lignes_lig";
	protected $tableCol = "armee.t_colonnes_col";
	protected $tableCel = "armee.t_cellules_cel";
	protected $tablePay = "armee.t_pays_pay";
	protected $tableVil = "armee.t_ville_vil";
	protected $tableFrs = "armee.t_fournisseurs_frs";
	protected $tableCha = "armee.t_chambre_cha";
	protected $tableLit = "armee.t_lit_lit";
	protected $tableTir = "armee.t_titre_rapport_tir";
	protected $tableSot = "armee.t_sous_titre_sot";
	protected $tableNul = "armee.t_numero_liste_nul";
	protected $tableTex = "armee.t_type_examen_tex";
	protected $tableEla = "armee.t_element_analyse_ela";
	protected $tableAcc = "armee.t_accessoire_acc";
	protected $tableRea = "armee.t_reactif_rea";
	protected $tableRex= "armee.t_reactif_examen_rex";
	protected $tableEre= "armee.t_entree_reactif_ere";
	protected $tableHre= "armee.t_historique_reactif_hre";
	protected $tableRes= "armee.t_reactif_stock_res";
	protected $tableSor= "armee.t_sortie_reactif_sor";
	protected $tablePer= "armee.t_personnel_per";
	protected $tableTco = "armee.t_type_courrier_tco";
	protected $tableImg = "armee.t_imagerie_img";
	protected $tableSea = "armee.t_sejour_acte_sea";
	
	protected $tableApp = "armee.t_appareil_app";
	protected $tableLan = "armee.t_liste_antecedants_lan";
	protected $tableLaf = "armee.t_liste_antecedents_familiaux_laf";
	protected $tableLia = "armee.t_liste_allergies_lia";
	protected $tableLap = "armee.t_liste_activite_professionnelle_lap";
	protected $tableBop = "armee.t_bloc_operatoire_bop";
	protected $tableSop = "armee.t_salle_operation_sop";
	
	protected $tableMod = "armee.t_motif_reduction_mod";
	
	
	protected $tableFma = "armee.t_famille_maladie_fma";
	protected $tableMal = "armee.t_maladie_mal";
	protected $tableSma = "armee.t_specification_maladie_sma";
	
	protected $tableCpa = "armee.t_convention_patient_cpa";
	protected $tableBnq = "armee.t_banque_bnq";
	
	protected $tableCpt = "armee.t_compte_cpt";
	protected $tableScp = "armee.t_sous_compte_scp";
	protected $tableSlc = "armee.t_sous_libelle_compte_slc";
	protected $tableFcp = "armee.t_fonctionnement_compte_fcp";
	protected $tableSfc = "armee.t_sous_fonct_compte_sfc";
	protected $tableRec = "armee.t_recette_rec";
	
	protected $tableFdi = "armee.t_frais_divers_fdi";
	protected $tableLoc = "armee.t_locataire_loc";
	protected $tableApr = "armee.t_approvisionnement_apr";
	protected $tableCes = "armee.t_cession_ces";
	
	protected $tableFlt = "armee.t_fonctionalite_flt";
	protected $tableTya = "armee.t_type_acte_tya";
	
	protected $tableAnf = "armee.t_annulation_facture_anf";
	protected $tablePas = "armee.t_passation_pas";
	
	protected $tableRub = "armee.t_rubrique_rub";
	protected $tableQpt = "armee.t_quotepart_qpt";
	
	protected $tableAja = "armee.t_ajout_acte_aja";
	//RABY
	protected $tabledDgq = "armee.t_diagnostique_dgq";
	protected $tableCom = "armee.t_comorbidite_com";
	protected $tableCmp = "armee.t_complication_cmp";
	protected $tableAci = "armee.t_acte_imagerie_aci";
	
	protected $tableTyr = "armee.t_tyroide_tyr";
	protected $tableHyp = "armee.t_hypophyse_hyp";
	protected $tablePre = "armee.t_prescripteur_pre";
	protected $tableTqp = "armee.t_quotepart_personnel_tqp";
	protected $tableMfh = "armee.t_motif_fin_hospitalisation_mfh";
	protected $tableChp = "armee.t_chapitre_chp";
	protected $tableCla = "armee.t_classe_maladie_cla";
	protected $tableSm1 = "armee.t_sous_maladie_niveau1_sm1";
	protected $tableSm2 = "armee.t_sous_maladie_niveau2_sm2";
	protected $tableCou = "armee.t_courbe_cou";
	
	//RABY
	




	//RABY
	
	
	public function nb_quotes_parts_actifs()
	{
		return $this->db
		->select("COUNT(tqp_id) as nb")
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
		->where("tqp_iSta",1)
		->get($this->tableTqp)->row();
	}
	
	
	public function liste_quotes_parts_100()
	{
		return $this->db
		->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
		->limit(100)
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
		->where("tqp_iSta",1)
		->get($this->tableTqp)->result();
	}
	
	public function recherche_quotes_parts($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
					->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
					->like("per_sNom",$search,'after')
					->where("tqp_iSta",1)
					->get($this->tableTqp)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
					->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
					->like("per_sPrenom",$search,'after')
					->where("tqp_iSta",1)
					->get($this->tableTqp)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
					->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
					->like("per_sTitre",$search,'after')
					->where("tqp_iSta",1)
					->get($this->tableTqp)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
					->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
					->like("tqp_iPourcentage",$search,'after')
					->where("tqp_iSta",1)
					->get($this->tableTqp)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_prescripteur_actifs()
	{
		return $this->db
		->select("COUNT(pre_id) as nb")
		->where("Pre_iSta",1)
		//->order_by("Pre_sNom","asc")
		->get($this->tablePre)->row();
	}
	public function liste_prescripteur_100()
	{
		return $this->db->select("pre_id,pre_sNom,pre_sPrenom,pre_sTitre,pre_iPourcentage")
		->limit(100)
		->where("Pre_iSta",1)
		->order_by("Pre_sNom","asc")
		->get($this->tablePre)->result();
	}
	
	public function recherche_prescripteur($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("pre_id,pre_sNom,pre_sPrenom,pre_sTitre,pre_iPourcentage")
					->where("Pre_iSta",1)
					->like("pre_sNom",$search,'after')
					->order_by("Pre_sNom","asc")
					->get($this->tablePre)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("pre_id,pre_sNom,pre_sPrenom,pre_sTitre,pre_iPourcentage")
					->where("Pre_iSta",1)
					->like("pre_sPrenom",$search,'after')
					->order_by("Pre_sNom","asc")
					->get($this->tablePre)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("pre_id,pre_sNom,pre_sPrenom,pre_sTitre,pre_iPourcentage")
					->where("Pre_iSta",1)
					->like("pre_sTitre",$search,'after')
					->order_by("Pre_sNom","asc")
					->get($this->tablePre)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("pre_id,pre_sNom,pre_sPrenom,pre_sTitre,pre_iPourcentage")
					->where("Pre_iSta",1)
					->like("pre_iPourcentage",$search,'after')
					->order_by("Pre_sNom","asc")
					->get($this->tablePre)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	public function nb_typeacte_actifs()
	{
		return $this->db
		->select("COUNT(tya_id) as nb")
		->where("tya_iSta",1)
		//->order_by($this->tableTya.".tya_sLib","asc")
		->get($this->tableTya)->row();
	}
	public function liste_typeacte_100()
	{
		return $this->db->select("tya_id,tya_sLib,tya_iSer,tya_iAdm")
		->limit(100)
		->where("tya_iSta",1)
		->order_by($this->tableTya.".tya_sLib","asc")
		->get($this->tableTya)->result();
	}
	
	public function recherche_typeacte($search)
	{
		return $this->db->select("tya_id,tya_sLib,tya_iSer,tya_iAdm")
					->distinct("tya_id")
					->like("tya_sLib",$search,'after')
					->where("tya_iSta",1)
					->order_by($this->tableTya.".tya_sLib","asc")
					->get($this->tableTya)->result();
	}
	
	
	public function nb_rubrique_actifs()
	{
		return $this->db
		->select("COUNT(rub_id) as nb")
		->where("rub_iSta",1)
		//->order_by("rub_sLib","asc")
		->get($this->tableRub)->row();
	}
	
	
	public function liste_rubrique_100()
	{
		return $this->db->select("rub_id,rub_sLib")
		->limit(100)
		->where("rub_iSta",1)
		->order_by("rub_sLib","asc")
		->get($this->tableRub)->result();
	}
	
	public function recherche_rubrique($search)
	{  
		return $this->db->select("rub_id,rub_sLib")
					->distinct("rub_id")
					->like("rub_sLib",$search,'after')
					->where("rub_iSta",1)
					->order_by("rub_sLib","asc")
					->get($this->tableRub)->result();
	}
	
	
	public function nb_fonctionnalite_actifs()
	{
		return $this->db
		->select("COUNT(flt_id) as nb")
		->where("flt_iSta",1)
		//->order_by("flt_sLib","asc")
		->get($this->tableFlt)->row();
	}
	
	
	public function liste_fonctionnalite_100()
	{
		return $this->db->select("flt_id,flt_sLib")
		->limit(100)
		->where("flt_iSta",1)
		->order_by("flt_sLib","asc")
		->get($this->tableFlt)->result();
	}
	
	public function recherche_fonctionnalite($search)
	{  
		return $this->db->select("flt_id,flt_sLib")
					->distinct("flt_id")
					->like("flt_sLib",$search,'after')
					->where("flt_iSta",1)
					->order_by("flt_sLib","asc")
					->get($this->tableFlt)->result();
	}
	
	public function nb_entreprise_convention_actifs()
	{
		return $this->db
		->select("COUNT(cpa_id) as nb")
		->where($this->tableCpa.".cpa_iSta",1)
		//->order_by($this->tableCpa.".cpa_sEnseigne","asc")
		->get($this->tableCpa)->row();
	}
	
	
	public function liste_entreprise_convention_100()
	{
		return $this->db->select("cpa_id,cpa_sEnseigne")
		->limit(100)
		->where($this->tableCpa.".cpa_iSta",1)
		->order_by($this->tableCpa.".cpa_sEnseigne","asc")
		->get($this->tableCpa)->result();
	}
	
	public function recherche_entreprise_convention($search)
	{  
		return $this->db->select("cpa_id,cpa_sEnseigne")
					->distinct("fma_id")
					->like("cpa_sEnseigne",$search,'after')
					->where($this->tableCpa.".cpa_iSta",1)
					->order_by($this->tableCpa.".cpa_sEnseigne","asc")
					->get($this->tableCpa)->result();
	}
	
	
	public function nb_specification_actifs()
	{
		return $this->db
		->select("COUNT(".$this->tableSma.".sma_id) as nb")
		->join($this->tableMal, $this->tableSma.'.mal_id='.$this->tableMal.'.mal_id','inner')
		->where("sma_iSta",1)
		->where("mal_iSta",1)
		//->order_by($this->tableSma.".sma_sLibelle","asc")
		->get($this->tableSma)->row();
	}
	public function liste_specification_100()
	{
		return $this->db->select($this->tableSma.".sma_id,".$this->tableMal.".mal_id,sma_sLibelle,mal_sLibelle")
		->limit(100)
		->join($this->tableMal, $this->tableSma.'.mal_id='.$this->tableMal.'.mal_id','inner')
		->where("sma_iSta",1)
		->where("mal_iSta",1)
		->order_by($this->tableSma.".sma_sLibelle","asc")
		->get($this->tableSma)->result();
	}
	
	public function recherche_specification($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select($this->tableSma.".sma_id,".$this->tableMal.".mal_id,sma_sLibelle,mal_sLibelle")
					->join($this->tableMal, $this->tableSma.'.mal_id='.$this->tableMal.'.mal_id','inner')
					->where("sma_iSta",1)
					->where("mal_iSta",1)
					->like("sma_sLibelle",$search,'after')
					->order_by($this->tableSma.".sma_sLibelle","asc")
					->get($this->tableSma)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select($this->tableSma.".sma_id,".$this->tableMal.".mal_id,sma_sLibelle,mal_sLibelle")
					->join($this->tableMal, $this->tableSma.'.mal_id='.$this->tableMal.'.mal_id','inner')
					->where("sma_iSta",1)
					->where("mal_iSta",1)
					->like("mal_sLibelle",$search,'after')
					->order_by($this->tableSma.".sma_sLibelle","asc")
					->get($this->tableSma)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_maladie_actifs()
	{
		return $this->db
		->select("COUNT(".$this->tableMal.".cla_id) as nb")
		->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
		->where("mal_iSta",1)
		->where("cla_iSta",1)
		//->order_by($this->tableMal.".mal_sLibelle","asc")
		->get($this->tableMal)->row();
	}
	public function liste_maladie_100()
	{
		return $this->db->select($this->tableMal.".mal_id,".$this->tableCla.".cla_id,cla_sLibelle,mal_sLibelle,mal_sCode")
		->limit(100)
		->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
		->where("mal_iSta",1)
		->where("cla_iSta",1)
		->order_by($this->tableMal.".mal_sLibelle","asc")
		->get($this->tableMal)->result();
	}
	
	public function recherche_maladie($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select($this->tableMal.".mal_id,".$this->tableCla.".cla_id,cla_sLibelle,mal_sLibelle,mal_sCode")
					->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
					->where("mal_iSta",1)
					->where("cla_iSta",1)
					->like("cla_sLibelle",$search,'after')
					->order_by($this->tableMal.".mal_sLibelle","asc")
					->get($this->tableMal)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select($this->tableMal.".mal_id,".$this->tableCla.".cla_id,cla_sLibelle,mal_sLibelle,mal_sCode")
					->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
					->where("mal_iSta",1)
					->where("cla_iSta",1)
					->like("mal_sLibelle",$search,'after')
					->order_by($this->tableMal.".mal_sLibelle","asc")
					->get($this->tableMal)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select($this->tableMal.".mal_id,".$this->tableCla.".cla_id,cla_sLibelle,mal_sLibelle,mal_sCode")
					->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
					->where("mal_iSta",1)
					->where("cla_iSta",1)
					->like("mal_sCode",$search,'after')
					->order_by($this->tableMal.".mal_sLibelle","asc")
					->get($this->tableMal)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	
	public function nb_famille_maladie_actifs()
	{
		return $this->db
		->select("COUNT(fma_id) as nb")
		->where("fma_iSta",1)
		//->order_by("fma_id","desc")
		->get($this->tableFma)->row();
	}
	
	
	public function liste_famille_maladie_100()
	{
		return $this->db->select("fma_id,fma_sLibelle")
		->limit(100)
		->where("fma_iSta",1)
		->order_by("fma_id","desc")
		->get($this->tableFma)->result();
	}
	
	public function recherche_famille_maladie($search)
	{  
		return $this->db->select("fma_id,fma_sLibelle")
					->distinct("fma_id")
					->like("fma_sLibelle",$search,'after')
					->where("fma_iSta",1)
					->order_by("fma_id","desc")
					->get($this->tableFma)->result();
	}
	
	
	public function nb_motifs_actifs()
	{
		return $this->db
		->select("COUNT(mod_id) as nb")
		->where("mod_iSta",1)
		//->order_by("mod_iTaux","asc")
		->get($this->tableMod)->row();
	}
	public function liste_motifs_100()
	{
		return $this->db->select("mod_id,mod_sLibelle,mod_iTaux")
		->limit(100)
		->where("mod_iSta",1)
		->order_by("mod_iTaux","asc")
		->get($this->tableMod)->result();
	}
	
	public function recherche_motifs($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("mod_id,mod_sLibelle,mod_iTaux")
					->where("mod_iSta",1)
					->order_by("mod_iTaux","asc")
					->like("mod_sLibelle",$search,'after')
					->get($this->tableMod)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("mod_id,mod_sLibelle,mod_iTaux")
					->where("mod_iSta",1)
					->order_by("mod_iTaux","asc")
					->like("mod_iTaux",$search,'after')
					->get($this->tableMod)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	public function nb_activite_professionnelle_actifs()
	{
		return $this->db
		->select("COUNT(lap_id) as nb")
		->where("lap_iSta",1)
		//->order_by("lap_sLibelle","asc")
		->get($this->tableLap)->row();
	}
	
	
	public function liste_activite_professionnelle_100()
	{
		return $this->db->select("lap_id,lap_sLibelle")
		->limit(100)
		->where("lap_iSta",1)
		->order_by("lap_sLibelle","asc")
		->get($this->tableLap)->result();
	}
	
	public function recherche_activite_professionnelle($search)
	{  
		return $this->db->select("lap_id,lap_sLibelle")
					->distinct("lap_id")
					->like("lap_sLibelle",$search,'after')
					->where("lap_iSta",1)
					->order_by("lap_sLibelle","asc")
					->get($this->tableLap)->result();
	}
	
	public function nb_allergie_actifs()
	{
		return $this->db
		->select("COUNT(lia_id) as nb")
		->where("lia_iSta",1)
		//->order_by("lia_id","desc")
		->get($this->tableLia)->row();
	}
	
	
	public function liste_allergie_100()
	{
		return $this->db->select("lia_id,lia_sLibelle")
		->limit(100)
		->where("lia_iSta",1)
		->order_by("lia_sLibelle","asc")
		->get($this->tableLia)->result();
	}
	
	public function recherche_allergie($search)
	{  
		return $this->db->select("lia_id,lia_sLibelle")
					->distinct("lia_id")
					->like("lia_sLibelle",$search,'after')
					->where("lia_iSta",1)
					->order_by("lia_sLibelle","asc")
					->get($this->tableLia)->result();
	}
	
	
	
	public function nb_antecedent_familial_actifs()
	{
		return $this->db
		->select("COUNT(laf_id) as nb")
		->where("laf_iSta",1)
		//->order_by("laf_id","desc")
		->get($this->tableLaf)->row();
	}
	
	
	public function liste_antecedent_familial_100()
	{
		return $this->db->select("laf_id,laf_sLibelle")
		->limit(100)
		->where("laf_iSta",1)
		->order_by("laf_sLibelle","asc")
		->get($this->tableLaf)->result();
	}
	
	public function recherche_antecedent_familial($search)
	{  
		return $this->db->select("laf_id,laf_sLibelle")
					->distinct("laf_id")
					->like("laf_sLibelle",$search,'after')
					->where("laf_iSta",1)
					->order_by("laf_sLibelle","asc")
					->get($this->tableLaf)->result();
	}
	
	
	public function nb_antecedent_personnel_actifs()
	{
		return $this->db
		->select("COUNT(lan_id) as nb")
		->where("lan_iSta",1)
		//->order_by("lan_id","desc")
		->get($this->tableLan)->row();
	}
	
	
	public function liste_antecedent_personnel_100()
	{
		return $this->db->select("lan_id,lan_sLibelle")
		->limit(100)
		->where("lan_iSta",1)
		->order_by("lan_sLibelle","asc")
		->get($this->tableLan)->result();
	}
	
	public function recherche_antecedent_personnel($search)
	{  
		return $this->db->select("lan_id,lan_sLibelle")
					->distinct("app_id")
					->like("lan_sLibelle",$search,'after')
					->where("lan_iSta",1)
					->order_by("lan_sLibelle","asc")
					->get($this->tableLan)->result();
	}
	
	
	public function nb_appareil_actifs()
	{
		return $this->db
		->select("COUNT(app_id) as nb")
		->where($this->tableApp.".app_iSta",1)
		//->order_by($this->tableApp.".app_sLibelle","asc")
		->get($this->tableApp)->row();
	}
	
	
	public function liste_appareil_100()
	{
		return $this->db->select("app_id,app_sLibelle")
		->limit(100)
		->where($this->tableApp.".app_iSta",1)
		->order_by($this->tableApp.".app_sLibelle","asc")
		->get($this->tableApp)->result();
	}
	
	public function recherche_appareil($search)
	{  
		return $this->db->select("app_id,app_sLibelle")
					->distinct("app_id")
					->like("app_sLibelle",$search,'after')
					->where($this->tableApp.".app_iSta",1)
					->order_by($this->tableApp.".app_sLibelle","asc")
					->get($this->tableApp)->result();
	}
	
	public function nb_reactif_actifs()
	{
		return $this->db
		->select("COUNT(rea_id) as nb")
		->where("rea_iSta",1)
		//->order_by("rea_sLibelle","asc")
		->get($this->tableRea)->row();
	}
	
	
	public function liste_reactif_100()
	{
		return $this->db->select("rea_id,rea_iNb,rea_sLibelle")
		->limit(100)
		->where("rea_iSta",1)
		->order_by("rea_sLibelle","asc")
		->get($this->tableRea)->result();
	}
	
	public function recherche_reactif($search)
	{  
		return $this->db->select("rea_id,rea_iNb,rea_sLibelle")
					->distinct("rea_id")
					->like("rea_sLibelle",$search,'after')
					->where("rea_iSta",1)
					->order_by("rea_sLibelle","asc")
					->get($this->tableRea)->result();
	}
	
	
	public function nb_accessoire_actifs()
	{
		return $this->db
		->select("COUNT(acc_id) as nb")
		->where("acc_iSta",1)
		//->order_by("acc_sLibelle","asc")
		->get($this->tableAcc)->row();
	}
	
	
	public function liste_accessoire_100()
	{
		return $this->db->select("acc_id,acc_sLibelle")
		->limit(100)
		->where("acc_iSta",1)
		->order_by("acc_sLibelle","asc")
		->get($this->tableAcc)->result();
	}
	
	public function recherche_accessoire($search)
	{  
		return $this->db->select("acc_id,acc_sLibelle")
					->distinct("acc_id")
					->like("acc_sLibelle",$search,'after')
					->where("acc_iSta",1)
					->order_by("acc_sLibelle","asc")
					->get($this->tableAcc)->result();
	}
	
	public function nb_element_analyse_actifs()
	{
		return $this->db
		->select("COUNT(".$this->tableEla.".ela_id) as nb")
		->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
		->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
		->where($this->tableEla.".ela_iSta",1)
		//->order_by($this->tableEla.".ela_sLibelle","asc")
		->get($this->tableEla)->row();
	}
	public function liste_element_analyse_100()
	{
		return $this->db->select($this->tableTex.".tex_id,".$this->tableEla.".ela_id,ela_sLibelle,tex_sLibelle,lac_sLibelle,ela_iValMin,ela_iValMax,ela_sUnite")
		->limit(100)
		->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
		->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
		->where($this->tableEla.".ela_iSta",1)
		->order_by($this->tableEla.".ela_sLibelle","asc")
		->get($this->tableEla)->result();
	}
	
	public function recherche_element_analyse($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select($this->tableTex.".tex_id,".$this->tableEla.".ela_id,ela_sLibelle,tex_sLibelle,lac_sLibelle,ela_iValMin,ela_iValMax,ela_sUnite")
					->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
					->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
					->where($this->tableEla.".ela_iSta",1)
					->like("tex_sLibelle",$search,'after')
					->order_by($this->tableEla.".ela_sLibelle","asc")
					->get($this->tableEla)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select($this->tableTex.".tex_id,".$this->tableEla.".ela_id,ela_sLibelle,tex_sLibelle,lac_sLibelle,ela_iValMin,ela_iValMax,ela_sUnite")
					->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
					->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
					->where($this->tableEla.".ela_iSta",1)
					->like("lac_sLibelle",$search,'after')
					->order_by($this->tableEla.".ela_sLibelle","asc")
					->get($this->tableEla)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select($this->tableTex.".tex_id,".$this->tableEla.".ela_id,ela_sLibelle,tex_sLibelle,lac_sLibelle,ela_iValMin,ela_iValMax,ela_sUnite")
					->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
					->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
					->where($this->tableEla.".ela_iSta",1)
					->like("ela_sLibelle",$search,'after')
					->order_by($this->tableEla.".ela_sLibelle","asc")
					->get($this->tableEla)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_type_examen_actifs()
	{
		return $this->db
		->select("COUNT(tex_id) as nb")
		->where($this->tableTex.".tex_iSta",1)
		//->order_by($this->tableTex.".tex_sLibelle","asc")
		->get($this->tableTex)->row();
	}
	public function liste_type_examen_100()
	{
		return $this->db->select("tex_id,tex_sLibelle")
		->limit(100)
		->where($this->tableTex.".tex_iSta",1)
		->order_by($this->tableTex.".tex_sLibelle","asc")
		->get($this->tableTex)->result();
	}
	
	public function recherche_type_examen($search)
	{
		
		return $this->db->select("tex_id,tex_sLibelle")
					->distinct("tex_id")
					->like("tex_sLibelle",$search,'after')
					->where($this->tableTex.".tex_iSta",1)
					->order_by($this->tableTex.".tex_sLibelle","asc")
					->get($this->tableTex)->result();
	}
	
	public function nb_chambre_actifs()
	{
		return $this->db
		->select("COUNT(cha_id) as nb")
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableCha.".cha_iSta",1)
		//->order_by($this->tableCha.".cha_sLibelle","asc")
		->get($this->tableCha)->row();
	}
	public function liste_chambre_100()
	{
		return $this->db->select("cha_id,cha_sLibelle,cha_iPrixLit,uni_sLibelle,ser_sLibelle")
		->limit(100)
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableCha.".cha_iSta",1)
		->order_by($this->tableCha.".cha_sLibelle","asc")
		->get($this->tableCha)->result();
	}
	
	public function recherche_chambre($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("cha_id,cha_sLibelle,cha_iPrixLit,uni_sLibelle,ser_sLibelle")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->where($this->tableCha.".cha_iSta",1)
					->like("cha_sLibelle",$search,'after')
					->order_by($this->tableCha.".cha_sLibelle","asc")
					->get($this->tableCha)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("cha_id,cha_sLibelle,cha_iPrixLit,uni_sLibelle,ser_sLibelle")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->where($this->tableCha.".cha_iSta",1)
					->like("cha_iPrixLit",$search,'after')
					->order_by($this->tableCha.".cha_sLibelle","asc")
					->get($this->tableCha)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("cha_id,cha_sLibelle,cha_iPrixLit,uni_sLibelle,ser_sLibelle")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->where($this->tableCha.".cha_iSta",1)
					->like("uni_sLibelle",$search,'after')
					->order_by($this->tableCha.".cha_sLibelle","asc")
					->get($this->tableCha)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("cha_id,cha_sLibelle,cha_iPrixLit,uni_sLibelle,ser_sLibelle")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->where($this->tableCha.".cha_iSta",1)
					->like("ser_sLibelle",$search,'after')
					->order_by($this->tableCha.".cha_sLibelle","asc")
					->get($this->tableCha)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_salle_actifs()
	{
		return $this->db
		->select("COUNT(sal_id) as nb")
		->where("sal_iSta",1)
		//->order_by("sal_id","desc")
		->get($this->tableSal)->row();
	}
	public function liste_salle_100()
	{
		return $this->db->select("sal_id,sal_sLibelle")
		->limit(100)
		->where("sal_iSta",1)
		->order_by("sal_id","desc")
		->get($this->tableSal)->result();
	}
	
	public function liste_motifs_fin_hospitalisation_100()
	{
		return $this->db->select("mfh_id,mfh_sLibelle")
		->limit(100)
		->where("mfh_iSta",1)
		->order_by("mfh_id","desc")
		->get($this->tableMfh)->result();
	}
	
	public function nb_motifs_fin_hospitalisation()
	{
		return $this->db->select("COUNT(mfh_id) as nb")
		->where("mfh_iSta",1)
		->get($this->tableMfh)->row();
	}
	
	public function recherche_salle($search)
	{
		
		return $this->db->select("sal_id,sal_sLibelle")
					->distinct("sal_id")
					->like("sal_sLibelle",$search,'after')
					->where("sal_iSta",1)
					->order_by("sal_id","desc")
					->get($this->tableSal)->result();
	}
	public function recherche_motifs_fin_hospitalisation($search)
	{
		
		return $this->db->select("mfh_id,mfh_sLibelle")
					->distinct("mfh_id")
					->like("mfh_sLibelle",$search,'after')
					->where("mfh_iSta",1)
					->order_by("mfh_id","desc")
					->get($this->tableMfh)->result();
	}
	public function nb_acte_divers_actifs()
	{
		return $this->db
		->select("COUNT(lac_id) as nb")
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_iCout",0)
		->where($this->tableLac.".lac_iDure",0)
		->where($this->tableLac.".lac_sSta !=",NULL)
		//->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->row();
	}
	public function liste_acte_divers_100()
	{
		return $this->db->select("lac_id,lac_sLibelle,lac_sSta,tya_sLib,uni_sLibelle,
		".$this->tableTya.".tya_id,".$this->tableUni.".uni_id,".$this->tableSer.".ser_id")
		->limit(100)
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_iCout",0)
		->where($this->tableLac.".lac_iDure",0)
		->where($this->tableLac.".lac_sSta !=",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function recherche_acte_divers($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("lac_id,lac_sLibelle,lac_sSta,tya_sLib,uni_sLibelle,
					".$this->tableTya.".tya_id,".$this->tableUni.".uni_id,".$this->tableSer.".ser_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_iCout",0)
					->where($this->tableLac.".lac_iDure",0)
					->where($this->tableLac.".lac_sSta !=",NULL)
					->like("lac_sLibelle",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_sSta,tya_sLib,uni_sLibelle,
					".$this->tableTya.".tya_id,".$this->tableUni.".uni_id,".$this->tableSer.".ser_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_iCout",0)
					->where($this->tableLac.".lac_iDure",0)
					->where($this->tableLac.".lac_sSta !=",NULL)
					->like("lac_sSta",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_sSta,tya_sLib,uni_sLibelle,
					".$this->tableTya.".tya_id,".$this->tableUni.".uni_id,".$this->tableSer.".ser_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_iCout",0)
					->where($this->tableLac.".lac_iDure",0)
					->where($this->tableLac.".lac_sSta !=",NULL)
					->like("tya_sLib",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_sSta,tya_sLib,uni_sLibelle,
					".$this->tableTya.".tya_id,".$this->tableUni.".uni_id,".$this->tableSer.".ser_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_iCout",0)
					->where($this->tableLac.".lac_iDure",0)
					->where($this->tableLac.".lac_sSta !=",NULL)
					->like("uni_sLibelle",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_type_fournisseur_actifs()
	{
		return $this->db
		->select("COUNT(tfr_id) as nb")
		->where("tfr_iSta",1)
		//->order_by("tfr_id","desc")
		->get($this->tableTfr)->row();
	}
	public function liste_type_fournisseur_100()
	{
		return $this->db->select("tfr_id,tfr_sLibelle")
		->limit(100)
		->where("tfr_iSta",1)
		->order_by("tfr_id","desc")
		->get($this->tableTfr)->result();
	}
	
	public function recherche_type_fournisseur($search)
	{
		
		return $this->db->select("tfr_id,tfr_sLibelle")
					->distinct("tfr_id")
					->like("tfr_sLibelle",$search,'after')
					->where("tfr_iSta",1)
					->order_by("tfr_id","desc")
					->get($this->tableTfr)->result();
	}
	
	public function nb_forme_produit_actifs()
	{
		return $this->db
		->select("COUNT(for_id) as nb")
		->where("for_iSta",1)
		//->order_by("for_id","desc")
		->get($this->tableFor)->row();
	}
	public function liste_forme_produit_100()
	{
		return $this->db->select("for_id,for_sLibelle")
		->limit(100)
		->where("for_iSta",1)
		->order_by("for_id","desc")
		->get($this->tableFor)->result();
	}
	
	public function recherche_forme_produit($search)
	{
		
		return $this->db->select("for_id,for_sLibelle")
					->distinct("for_id")
					->like("for_sLibelle",$search,'after')
					->where("for_iSta",1)
					->order_by("for_id","desc")
					->get($this->tableFor)->result();
	}
	
	
	public function nb_famille_produit_actifs()
	{
		return $this->db
		->select("COUNT(fam_id) as nb")
		->where("fam_iSta",1)
		//->order_by("fam_id","desc")
		->get($this->tableFam)->row();
	}
	public function liste_famille_produit_100()
	{
		return $this->db->select("fam_id,fam_sLibelle")
		->limit(100)
		->where("fam_iSta",1)
		->order_by("fam_id","desc")
		->get($this->tableFam)->result();
	}
	
	public function recherche_famille_produit($search)
	{
		
		return $this->db->select("fam_id,fam_sLibelle")
					->distinct("fam_id")
					->where("fam_iSta",1)
					->like("fam_sLibelle",$search,'after')
					->order_by("fam_id","desc")
					->get($this->tableFam)->result();
	}
	
	
	public function nb_couverture_actifs()
	{
		return $this->db
		->select("COUNT(tas_id) as nb")
		->where("tas_iSta",1)
		//->order_by("tas_iTaux","asc")
		->get($this->tableTas)->row();
	}
	public function liste_couverture_100()
	{
		return $this->db->select("tas_id,tas_sLibelle,tas_iTaux")
		->limit(100)
		->where("tas_iSta",1)
		->order_by("tas_iTaux","asc")
		->get($this->tableTas)->result();
	}
	
	public function recherche_couverture($search)
	{
		
		return $this->db->select("tas_id,tas_sLibelle,tas_iTaux")
					->distinct("tas_id")
					->where("tas_iSta",1)
					->like("tas_sLibelle",$search,'after')
					->order_by("tas_iTaux","asc")
					->get($this->tableTas)->result();
	}
	
	
	public function nb_assurance_actifs()
	{
		return $this->db
		->select("COUNT(ass_id) as nb")
		->where("ass_iSta",1)
		//->order_by("ass_sLibelle","asc")
		->get($this->tableAss)->row();
	}
	public function liste_assurance_100()
	{
		return $this->db->select("ass_id,ass_sLibelle")
		->limit(100)
		->where("ass_iSta",1)
		->order_by("ass_sLibelle","asc")
		->get($this->tableAss)->result();
	}
	
	public function recherche_assurance($search)
	{
		
		return $this->db->select("ass_id,ass_sLibelle")
					->distinct("ass_id")
					->where("ass_iSta",1)
					->like("ass_sLibelle",$search,'after')
					->order_by("ass_sLibelle","asc")
					->get($this->tableAss)->result();
	}
	
	public function nb_postes_actifs()
	{
		return $this->db
		->select("COUNT(pst_id) as nb")
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("pst_iSta",1)
		//->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->row();
	}
	public function liste_postes_100()
	{
		return $this->db->select("pst_id,pst_sLibelle,tpe_sLibelle,".$this->tableTpe.".tpe_id")
		->limit(100)
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("pst_iSta",1)
		->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->result();
	}
	
	public function recherche_postes($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("pst_id,pst_sLibelle,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("pst_iSta",1)
					->like("pst_sLibelle",$search,'after')
					->order_by("pst_sLibelle","asc")
					->get($this->tablePst)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("pst_id,pst_sLibelle,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("pst_iSta",1)
					->like("tpe_sLibelle",$search,'after')
					->order_by("pst_sLibelle","asc")
					->get($this->tablePst)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	/*public function nb_fonctions_actifs()
	{
		return $this->db
		->select("COUNT(fct_id) as nb")
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("fct_iSta",1)
		//->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->row();
	}*/
	public function liste_actes_medicaux_100()
	{
		return $this->db
		->limit(100)
		// ->order_by($this->tableLac.".lac_id","asc")
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function recherche_actes_medicaux($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("lac_sLibelle",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("lac_iCout",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("lac_iDure",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("uni_sLibelle",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("ser_sLibelle",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("lac_id,lac_sLibelle,lac_iCout,lac_iDure,uni_sLibelle,".$this->tableUni.".uni_id,ser_sLibelle,".$this->tableSer.".ser_id,tya_sLib,".$this->tableTya.".tya_id")
					->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
					->where($this->tableLac.".lac_iSta",1)
					->where($this->tableLac.".lac_sSta",NULL)
					->like("tya_sLib",$search,'after')
					->order_by($this->tableLac.".lac_sLibelle","asc")
					->get($this->tableLac)->result();
		$tab = array_merge($tab, $res);
		
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	public function nb_fonctions_actifs()
	{
		return $this->db
		->select("COUNT(fct_id) as nb")
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("fct_iSta",1)
		//->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->row();
	}
	public function liste_fonctions_100()
	{
		return $this->db->select("fct_id,fct_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
		->limit(100)
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("fct_iSta",1)
		->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->result();
	}
	
	public function recherche_fonctions($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("fct_id,fct_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("fct_iSta",1)
					->like("fct_sLibelle",$search,'after')
					->order_by("fct_sLibelle","asc")
					->get($this->tableFct)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("fct_id,fct_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("fct_iSta",1)
					->like("pst_sLibelle",$search,'after')
					->order_by("fct_sLibelle","asc")
					->get($this->tableFct)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("fct_id,fct_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("fct_iSta",1)
					->like("tpe_sLibelle",$search,'after')
					->order_by("fct_sLibelle","asc")
					->get($this->tableFct)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	
	public function nb_specialites_actifs()
	{
		return $this->db
		->select("COUNT(spt_id) as nb")
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("spt_iSta",1)
		//->order_by("spt_sLibelle","asc")
		->get($this->tableSpt)->row();
	}
	public function liste_specialites_100()
	{
		return $this->db->select("spt_id,spt_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
		->limit(100)
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("spt_iSta",1)
		->order_by("spt_sLibelle","asc")
		->get($this->tableSpt)->result();
	}
	
	public function recherche_specialites($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("spt_id,spt_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("spt_iSta",1)
					->like("spt_sLibelle",$search,'after')
					->order_by("spt_sLibelle","asc")
					->get($this->tableSpt)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("spt_id,spt_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("spt_iSta",1)
					->like("pst_sLibelle",$search,'after')
					->order_by("spt_sLibelle","asc")
					->get($this->tableSpt)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("spt_id,spt_sLibelle,pst_sLibelle,".$this->tablePst.".pst_id,tpe_sLibelle,".$this->tableTpe.".tpe_id")
					->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
					->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
					->where("spt_iSta",1)
					->like("tpe_sLibelle",$search,'after')
					->order_by("spt_sLibelle","asc")
					->get($this->tableSpt)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function nb_unite_actifs()
	{
		return $this->db
		->select("COUNT(uni_id) as nb")
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where("uni_iSta",1)
		//->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->row();
	}
	public function liste_unites_100()
	{
		return $this->db->select("uni_id,uni_sLibelle,ser_sLibelle,".$this->tableSer.".ser_id,dep_sLibelle,".$this->tableDep.".dep_id")
		->limit(100)
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where("uni_iSta",1)
		->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->result();
	}
	
	public function recherche_unites($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("uni_id,uni_sLibelle,ser_sLibelle,".$this->tableSer.".ser_id,dep_sLibelle,".$this->tableDep.".dep_id")
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->where("uni_iSta",1)
					->like("uni_sLibelle",$search,'after')
					->order_by($this->tableUni.".uni_sLibelle","asc")
					->get($this->tableUni)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("uni_id,uni_sLibelle,ser_sLibelle,".$this->tableSer.".ser_id,dep_sLibelle,".$this->tableDep.".dep_id")
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->where("uni_iSta",1)
					->like("ser_sLibelle",$search,'after')
					->order_by($this->tableUni.".uni_sLibelle","asc")
					->get($this->tableUni)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("uni_id,uni_sLibelle,ser_sLibelle,".$this->tableSer.".ser_id,dep_sLibelle,".$this->tableDep.".dep_id")
					->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->where("uni_iSta",1)
					->like("dep_sLibelle",$search,'after')
					->order_by($this->tableUni.".uni_sLibelle","asc")
					->get($this->tableUni)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	
	public function liste_services_100()
	{
		
		return $this->db->select("ser_id,ser_sLibelle,dep_sLibelle,".$this->tableDep.".dep_id,flt_sLib,".$this->tableFlt.".flt_id")
		->limit(100)
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where("ser_iSta",1)
		->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	public function recherche_service($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("ser_id,ser_sLibelle,dep_sLibelle,".$this->tableDep.".dep_id,flt_sLib,".$this->tableFlt.".flt_id")
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
					->where("ser_iSta",1)
					->like("ser_sLibelle",$search,'after')
					->get($this->tableSer)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("ser_id,ser_sLibelle,dep_sLibelle,".$this->tableDep.".dep_id,flt_sLib,".$this->tableFlt.".flt_id")
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
					->where("ser_iSta",1)
					->like("dep_sLibelle",$search,'after')
					->get($this->tableSer)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("ser_id,ser_sLibelle,dep_sLibelle,".$this->tableDep.".dep_id,flt_sLib,".$this->tableFlt.".flt_id")
					->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
					->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
					->where("ser_iSta",1)
					->like("flt_sLib",$search,'after')
					->get($this->tableSer)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	
	public function liste_quotes_parts_actifs()
	{
		return $this->db
		->select("per_sNom,per_sPrenom,per_sTitre,tqp_id,tqp_iPourcentage")
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
		->where("tqp_iSta",1)
		->get($this->tableTqp)->result();
	}
	
	public function liste_prescripteur_actifs()
	{
		return $this->db
		->where("Pre_iSta",1)
		->order_by("Pre_sNom","asc")
		->get($this->tablePre)->result();
	}
	
	public function recup_prescripteur_actif($id)
	{
		return $this->db
		->where("pre_iSta",1)
		->where("pre_id",$id)
		->get($this->tablePre)->row();
	}
	
	public function liste_medecin_ayant_quote_part_actifs()
	{
		return $this->db
		->select($this->tablePer.".per_id,tqp_iPourcentage,per_sNom,per_sPrenom,per_sTitre")
		->join($this->tableTqp, $this->tableTqp.'.per_id='.$this->tablePer.'.per_id','inner')
		->where("Per_iSta",1)
		->where("tqp_iSta",1)
		//->order_by("Pre_sNom","asc")
		->get($this->tablePer)->result();
	}
	
	public function recup_medecin($id)
	{
		return $this->db
		->select($this->tablePer.".per_id,tqp_iPourcentage,per_sNom,per_sPrenom,per_sTitre")
		->join($this->tableTqp, $this->tableTqp.'.per_id='.$this->tablePer.'.per_id','inner')
		->where("per_iSta",1)
		->where($this->tablePer.".per_id",$id)
		->where("tqp_iSta",1)
		//->order_by("Pre_sNom","asc")
		->get($this->tablePer)->row();
	}
	
	
	public function liste_hypophyse_actifs()
	{
		return $this->db
		->where("hyp_iSta",1)
		->order_by($this->tableHyp.".hyp_sLib","asc")
		->get($this->tableHyp)->result();
	}	
	
	public function recupHypophyse($id){
		
		return $this->db
		->where("hyp_iSta",1)
		->where("hyp_id",$id)
		->get($this->tableHyp)->row();
	}	
	
	public function liste_thyroide_actifs()
	{
		return $this->db
		->where("tyr_iSta",1)
		->order_by($this->tableTyr.".tyr_sLib","asc")
		->get($this->tableTyr)->result();
	}	
	
	public function recupThyroide($id){
		
		return $this->db
		->where("tyr_iSta",1)
		->where("tyr_id",$id)
		->get($this->tableTyr)->row();
	}	
	
	public function liste_diagnostique_actifs()
	{
		return $this->db
		->where("dgq_iSta",1)
		->order_by($this->tabledDgq.".dgq_sLib","asc")
		->get($this->tabledDgq)->result();
	}	
	
	public function recupDiagnostique($id){
		
		return $this->db
		->where("dgq_iSta",1)
		->where("dgq_id",$id)
		->get($this->tabledDgq)->row();
	}
	
	public function liste_comorbidite_actifs()
	{
		return $this->db
		->where("com_iSta",1)
		->order_by($this->tableCom.".com_sLib","asc")
		->get($this->tableCom)->result();
	}	
	
	public function recupComordite($id){
		
		return $this->db
		->where("com_iSta",1)
		->where("com_id",$id)
		->get($this->tableCom)->row();
	}
	
	public function liste_complication_actifs()
	{
		return $this->db
		->where("cmp_iSta",1)
		->order_by($this->tableCmp.".cmp_sLib","asc")
		->get($this->tableCmp)->result();
	}
	
		
	public function recupComplication($id){
		
		return $this->db
		->where("cmp_iSta",1)
		->where("cmp_id",$id)
		->get($this->tableCmp)->row();
	}
	
	public function liste_cardiologiques_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",85)
		->where($this->tableFlt.".flt_id",15)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	public function liste_rhumatologies_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",90)
		->where($this->tableFlt.".flt_id",14)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function liste_gynecologies_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",98)
		->where($this->tableFlt.".flt_id",21)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	public function liste_rgynecologies_obs_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",93)
		->where($this->tableFlt.".flt_id",20)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function liste_neurologies_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",86)
		->where($this->tableFlt.".flt_id",16)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	public function liste_pneumonies_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",87)
		->where($this->tableFlt.".flt_id",19)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	public function liste_acts_laboratoires_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableFlt.".flt_id",7)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	//RABY
	
	public function liste_ajaou_actes_aja($id)
	{
		return $this->db
		->where("id",$id)
		->get($this->tableAja)->row();
	}
	
	
	public function ajout_quotepart($donnees){
		return $this->db->insert($this->tableQpt,$donnees);
	}
	
	
	/***** ajout passation*********/
	
	public function ajout_passation($data){
		return $this->db->insert($this->tablePas,$data);
	}
	
	public function recupCumulPassation($date1, $date2){
		
		return $this->db
		
			->select("SUM(pas_iEsp - pas_iMontant) AS cumulPass")
			->where("pas_dDate >=",$date1)
			->where("pas_dDate <=",$date2)
			->where("pas_iSta",1)
			->order_by("cumulPass","desc")
			->get($this->tablePas)->row();
	}
	
	
		
	public function recup_liste_passation_caissier($per, $date1, $date2)
	{
		return $this->db
		->where("pas_iSta",1)
		->where('pas_iAuteur', $per)
		->where("pas_dDate >=",$date1)
		->where("pas_dDate <=",$date2)
		->order_by("pas_id","asc")
		->get($this->tablePas)->result();
	}	
		
	public function recup_liste_annulation_caissier($per, $date1, $date2)
	{
		return $this->db
		->where("anf_iSta",0)
		->where('per_id', $per)
		->where("anf_dDate >=",$date1)
		->where("anf_dDate <=",$date2)
		->order_by("anf_id","desc")
		->get($this->tableAnf)->result();
	}
	
	
	
	/***** Rubrique *********/
	public function liste_rubrique_actifs()
	{
		return $this->db
		->where("rub_iSta",1)
		->order_by("rub_sLib","asc")
		->get($this->tableRub)->result();
	}
	
	public function liste_rubrique_supprimes()
	{
		return $this->db
		->where("rub_iSta",2)
		->order_by("rub_sLib","asc")
		->get($this->tableRub)->result();
	}
	
	
	public function verif_rubrique($rub)
	{
		return $this->db
		->where("rub_sLib",$rub)
		->get($this->tableRub)->row();
	}
	
	public function recup_rubrique($id)
	{
		return $this->db
		->where("rub_id",$id)
		->where("rub_iSta",1)
		->get($this->tableRub)->row();
	}
	
	public function verif_rubrique_modif($dep,$id)
	{
		return $this->db
		->where("rub_sLib",$dep)
		->where("rub_id !=",$id)
		->get($this->tableRub)->row();
	}	
	
	public function ajout_rubrique($donnees){
		return $this->db->insert($this->tableRub,$donnees);
	}
	
	public function maj_rubrique($donnees,$id){
		return $this->db->where("rub_id",$id)->update($this->tableRub,$donnees);
	}	
	
	
	
	
	
	
		/***** Type actes correspond aux actes groupés*********/
		
		
			/*********** actes groupés **********/
	public function liste_acte_groupe_actifs()
	{
		return $this->db
		->where("tya_iSta",1)
		->order_by($this->tableTya.".tya_sLib","asc")
		->get($this->tableTya)->result();
	}
	
	
	public function liste_acte_groupe_supprimes()
	{
		return $this->db
		->join($this->tableRub, $this->tableRub.'.rub_id='.$this->tableTya.'.rub_id','inner')
		->where("tya_iSta",2)
		->order_by($this->tableTya.".tya_sLib","asc")
		->get($this->tableTya)->result();
	}
	
	public function verif_acte_groupe($tya)
	{
		return $this->db
		->where("tya_sLib",$tya)
		->get($this->tableTya)->row();
	}
	
	
	//RABY
	public function verif_prescripteur($nom,$prenom,$titre,$pour)
	{
		return $this->db
		->where("pre_sNom",$nom)
		->where("pre_sPrenom",$prenom)
		->where("pre_stitre",$titre)
		->where("pre_iPourcentage",$pour)
		->get($this->tablePre)->row();
	}
	
	public function recup_prescripteur($id)
	{
		return $this->db
		//->join($this->tableRub, $this->tableRub.'.rub_id='.$this->tableTya.'.rub_id','inner')
		->where($this->tablePre.".pre_id",$id)
		->get($this->tablePre)->row();
	}
	
	public function recup_detail_quote_part($id)
	{
		return $this->db
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableTqp.'.per_id','inner')
		->where($this->tableTqp.".per_id",$id)
		->get($this->tableTqp)->row();
	}
	
	//RABY
	
	public function recup_acte_groupe($id)
	{
		return $this->db
		->join($this->tableRub, $this->tableRub.'.rub_id='.$this->tableTya.'.rub_id','inner')
		->where($this->tableTya.".tya_id",$id)
		->get($this->tableTya)->row();
	}
	
	public function verif_acte_groupe_modif($tya,$ser,$adm,$id)
	{
		return $this->db
		->where("tya_sLib",$tya)
		->where("tya_iSer",$ser)
		->where("tya_iAdm",$adm)
		->where("tya_id !=",$id)
		->get($this->tableTya)->row();
	}
	
	//RABY
	
	public function verif_prescripteur_modif($nom,$prenom,$titre,$pour,$id)
	{
		return $this->db
		->where("pre_sNom",$nom)
		->where("pre_sPrenom",$prenom)
		->where("pre_stitre",$titre)
		->where("pre_iPourcentage",$pour)
		->where("pre_id !=",$id)
		->get($this->tablePre)->row();
	}
	//RABY
	
	
	public function ajout_acte_groupe($donnees){
		return $this->db->insert($this->tableTya,$donnees);
	}
	
	
	//RABY
	public function ajout_prescripteur($donnees){
		return $this->db->insert($this->tablePre,$donnees);
	}
	
	public function ajout_quote_part($donnees){
		return $this->db->insert($this->tableTqp,$donnees);
	}
	
	public function maj_prescripteur($donnees,$id){
		return $this->db->where("pre_id",$id)->update($this->tablePre,$donnees);
	}
	
	public function maj_quote_part($donnees,$id){
		return $this->db->where("tqp_id",$id)->update($this->tableTqp,$donnees);
	}
	//RABY
	
	
	public function maj_acte_groupe($donnees,$id){
		return $this->db->where("tya_id",$id)->update($this->tableTya,$donnees);
	}
		
		
		
		
	public function liste_typeacte_actifs()
	{
		return $this->db
		->where("tya_iSta",1)
		->order_by("tya_sLib","asc")
		->get($this->tableTya)->result();
	}
	
	public function liste_typeacte_supprimes()
	{
		return $this->db
		->where("tya_iSta",2)
		->order_by("tya_sLib","asc")
		->get($this->tableTya)->result();
	}
	
	
	public function verif_typeacte($flt)
	{
		return $this->db
		->where("tya_sLib",$flt)
		->get($this->tableTya)->row();
	}
	
	public function recup_typeacte($id)
	{
		return $this->db
		->where("tya_id",$id)
		->where("tya_iSta",1)
		->get($this->tableTya)->row();
	}
	
	public function verif_typeacte_modif($dep,$id)
	{
		return $this->db
		->where("tya_sLib",$dep)
		->where("tya_id !=",$id)
		->get($this->tableTya)->row();
	}	
	
	public function ajout_typeacte($donnees){
		return $this->db->insert($this->tableTya,$donnees);
	}
	
	public function maj_typeacte($donnees,$id){
		return $this->db->where("tya_id",$id)->update($this->tableTya,$donnees);
	}	
		
		
		
		/***** Fonctionnalité *********/
	public function liste_fonctionnalite_actifs()
	{
		return $this->db
		->where("flt_iSta",1)
		->order_by("flt_sLib","asc")
		->get($this->tableFlt)->result();
	}
	
	public function liste_fonctionnalite_supprimes()
	{
		return $this->db
		->where("flt_iSta",2)
		->order_by("flt_sLib","asc")
		->get($this->tableFlt)->result();
	}
	
	
	public function verif_fonctionnalite($flt)
	{
		return $this->db
		->where("flt_sLib",$flt)
		->get($this->tableFlt)->row();
	}
	
	public function recup_fonctionnalite($id)
	{
		return $this->db
		->where("flt_id",$id)
		->get($this->tableFlt)->row();
	}
	
	public function verif_fonctionnalite_modif($dep,$id)
	{
		return $this->db
		->where("flt_sLib",$dep)
		->where("flt_id !=",$id)
		->get($this->tableFlt)->row();
	}	
	
	public function ajout_fonctionnalite($donnees){
		return $this->db->insert($this->tableFlt,$donnees);
	}
	
	public function maj_fonctionnalite($donnees,$id){
		return $this->db->where("flt_id",$id)->update($this->tableFlt,$donnees);
	}
	
	public function annulation_passation($donnees,$id){
		return $this->db
		->where("pas_iAuteur",$id)
		->where("pas_iSta",0)
		->update($this->tablePas,$donnees);	
	}
	
	
	

	
	
	/***** Courbe de croissance*********/
	public function recup_courbe()
	{
		return $this->db
		->where("cou_iSta",1)
		->order_by("cou_iMois","asc")
		->get($this->tableCou)->result();
	}
	
	public function verif_element_courbe($mois)
	{
		return $this->db
		->where("cou_iSta",1)
		->where("cou_iMois",$mois)
		->get($this->tableCou)->row();
	}	
	
	public function ajout_courbe($donnees){
		return $this->db->insert($this->tableCou,$donnees);
	}
	
	public function maj_courbe($donnees,$id){
		return $this->db->where("cou_id",$id)->update($this->tableCou,$donnees);
	}
	
	/***** Cession*********/
	
	public function ajout_cession($data){
		return $this->db->insert($this->tableCes,$data);
	}
	
	public function annulation_cession($donnees,$id){
		return $this->db
		->where("per_id",$id)
		->where("ces_iSta",0)
		->update($this->tableCes,$donnees);	
	}
	
	public function maj_passation($donnees,$id){
		return $this->db->where("pas_id",$id)->update($this->tablePas,$donnees);
	}	
	
	public function maj_cession($donnees,$id){
		return $this->db->where("ces_id",$id)->update($this->tableCes,$donnees);
	}
	
	
	public function recupCumulCession($date1, $date2){
		
		return $this->db
		
			->select("SUM(ces_iEsp - ces_iMontant) AS cumulCess")
			->where("ces_dDateNoTime >=",$date1)
			->where("ces_dDateNoTime <=",$date2)
			->where("ces_iSta",1)
			->order_by("cumulCess","desc")
			->get($this->tableCes)->row();
	}
	
	
	
	
	public function recup_liste_cession_caissier($per, $date1, $date2)
	{
		return $this->db
		->where("ces_iSta",1)
		->where('per_id', $per)
		->where("ces_dDateNoTime >=",$date1)
		->where("ces_dDateNoTime <=",$date2)
		->order_by($this->tableCes.".ces_id","asc")
		->get($this->tableCes)->result();
	}	
	
	
	public function validation_historique_passation($req, $id)
	{
		if($req == 'validation'){
			return $this->db
			->join($this->tablePer, $this->tablePas.'.pas_iAuteur='.$this->tablePer.'.per_id','inner')
			->where("pas_iRecep",$id)
			->where("pas_iSta ",0)
			->order_by("pas_id","desc")
			->get($this->tablePas)->result();
		}else{
			return $this->db
			->limit(10)
			->join($this->tablePer, $this->tablePas.'.pas_iAuteur='.$this->tablePer.'.per_id','inner')
			->where("pas_iRecep",$id)
			->where("pas_iSta !=",0)
			->order_by("pas_id","desc")
			->get($this->tablePas)->result();
		}	
	}	
	
	public function liste_cession($id)
	{
		if($id == NULL){
			return $this->db
			->join($this->tablePer, $this->tableCes.'.per_id='.$this->tablePer.'.per_id','inner')
			->where("ces_iSta ",0)
			->order_by("ces_id","desc")
			->get($this->tableCes)->result();
		}
		
		return $this->db
		->limit(10)
		->where("per_id",$id)
		->order_by("ces_id","desc")
		->get($this->tableCes)->result();
	}
	
	public function recup_state_last_passation($id)
	{
		return $this->db
		->order_by("pas_id","desc")
		->where($this->tablePas.".pas_iAuteur",$id)
		->get($this->tablePas)->row();
	}	
	
	public function recup_state_last_cession($id)
	{
		return $this->db
		->order_by("ces_id","desc")
		->where($this->tableCes.".per_id",$id)
		->get($this->tableCes)->row();
	}
	
	public function liste_cession_validee()
	{
		return $this->db
		->limit(10)
		->join($this->tablePer, $this->tableCes.'.per_id='.$this->tablePer.'.per_id','inner')
		->where("ces_iSta ",1)
		->order_by("ces_id","desc")
		->get($this->tableCes)->result();
	}	
	
	public function recup_cession($id)
	{
		return $this->db
		->where("ces_id",$id)
		->get($this->tableCes)->row();
	}
	
	
	public function mes_passations()
	{
		return $this->db
		->limit(10)
		->where("pas_iAuteur",$this->session->armee)
		// ->where("pas_iSta ",0)
		->order_by("pas_id","desc")
		->get($this->tablePas)->result();
	}
	
	public function recup_passation($id)
	{
		return $this->db
		->where("pas_id",$id)
		->get($this->tablePas)->row();
	}
	
	

	

	

	
	// public function verif_approvisionnement()
	// {
		// return $this->db
		// ->where("apr_iSta",0)
		// ->where("per_id",$this->session->armee)
		// ->where("apr_dDateValide >",date("Y-m-d"))
		// ->get($this->tableApr)->row();
	// }	
	
	/***** Approvisionnement*********/
	
	
		
	public function recup_approvisionnement($id)
	{
		return $this->db
		->where("apr_id",$id)
		->get($this->tableApr)->row();
	}
		
	public function liste_appro_accord_cprincipal()
	{
		return $this->db
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableApr.'.per_id','inner')
		->where("apr_iSta",1)
		->order_by("apr_id", "desc")
		->get($this->tableApr)->result();
	}		
	
	public function liste_appro_cprincipal()
	{
		return $this->db
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableApr.'.per_id','inner')
		->where("apr_iSta",0)
		->where("apr_dDateValide >",date("Y-m-d"))
		->order_by("apr_id", "desc")
		->get($this->tableApr)->result();
	}
		
		
	public function recup_montant_appro($id)
	{
		return $this->db
		->where("apr_id",$id)
		->get($this->tableApr)->row();
	}
	
	
	public function maj_approvisionnement($donnees,$id){
		return $this->db->where("apr_id",$id)->update($this->tableApr,$donnees);
	}
	
	public function liste_approvisionnement()
	{
		return $this->db
		->limit(5)
		->where("apr_iSta !=",3)
		->where("per_id",$this->session->armee)
		->order_by("apr_id","desc")
		->get($this->tableApr)->result();
	}
	
	public function ajout_approvisionnement($data){
		return $this->db->insert($this->tableApr,$data);
	}
	
	public function verif_approvisionnement()
	{
		return $this->db
		->where("apr_iSta",0)
		->where("per_id",$this->session->armee)
		->where("apr_dDateValide >",date("Y-m-d"))
		->get($this->tableApr)->row();
	}		
	
	/***** Locataire*********/
	
	public function verif_locataire_modif($loc,$id)
	{
		return $this->db
		->where("loc_sLib",$loc)
		->where("loc_id !=",$id)
		->get($this->tableLoc)->row();
	}	
	
	public function liste_locataire_supprimes()
	{
		return $this->db
		->where("loc_iSta",2)
		->order_by("loc_sLib","asc")
		->get($this->tableLoc)->result();
	}
	
	public function recup_locataire($id)
	{
		return $this->db
		->where("loc_id",$id)
		->get($this->tableLoc)->row();
	}
	
	public function maj_locataire($donnees,$id){
		return $this->db->where("loc_id",$id)->update($this->tableLoc,$donnees);
	}
	
	public function ajout_locataire($donnees){
		return $this->db->insert($this->tableLoc,$donnees);
	}
	
	public function verif_locataire($nom, $tel)
	{
		return $this->db
		->where("loc_sLib",$nom)
		->where("loc_sTel",$tel)
		->get($this->tableLoc)->row();
	}
	
	
	public function liste_locataire_actifs()
	{
		return $this->db
		->where("loc_iSta",1)
		->order_by("loc_sLib","asc")
		->get($this->tableLoc)->result();
	}	
	
	
	
	/***** Actes divers*********/
	
			
	public function recup_last_acte_medical()
	{
		return $this->db
		->order_by("acm_id","desc")
		->where($this->tableAcm.".acm_iDivers",0)/*Pour recupérer le dernier frais divers*/
		->get($this->tableAcm)->row();
	}
	
	public function liste_acts_divers_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_iCout",0)
		->where($this->tableLac.".lac_iDure",0)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function verif_acte_divers_modif($acte,$id)
	{
		return $this->db
		->where("fdi_sLib",$acte)
		->where("fdi_id !=",$id)
		->get($this->tableFdi)->row();
	}	
	
	public function liste_actes_divers_supprimes()
	{
		return $this->db
		->where("fdi_iSta",2)
		->order_by("fdi_sLib","asc")
		->get($this->tableFdi)->result();
	}
	
	public function recup_acte_divers($id)
	{
		return $this->db
		->where("fdi_id",$id)
		->get($this->tableFdi)->row();
	}
	
	public function maj_acte_divers($donnees,$id){
		return $this->db->where("fdi_id",$id)->update($this->tableFdi,$donnees);
	}
	
	public function ajout_acte_divers($donnees){
		return $this->db->insert($this->tableFdi,$donnees);
	}
	
	public function verif_acte_divers($acte)
	{
		return $this->db
		->where("fdi_sLib",$acte)
		->get($this->tableFdi)->row();
	}
	
	
	public function liste_frais_divers_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_iCout",0)
		->where($this->tableLac.".lac_iDure",0)
		->where($this->tableLac.".lac_sSta !=",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	
	public function recup_motif_reduction_taux($taux)
	{
		return $this->db
		->where("mod_iTaux",$taux)
		->get($this->tableMod)->row();
	}	
	
	public function recup_motif_reduction($id)
	{
		return $this->db
		->where("mod_id",$id)
		->get($this->tableMod)->row();
	}
	
	public function maj_compte_recet($donnees,$id){
		return $this->db->where("rec_id",$id)->update($this->tableRec,$donnees);
	}
	
	public function recup_compte_recet($id)
	{
		return $this->db
		->where($this->tableRec.".rec_id",$id)
		->get($this->tableRec)->row();
	}
	
	public function ajout_compte_recette($donnees){
		$this->db->insert($this->tableRec,$donnees);
		$recup = $this->db->order_by("rec_id","desc")->get($this->tableRec)->row();
		return $recup->rec_sLibelle;
	}
	
	public function compte_nb_compte_recette($lib){
		return $this->db
		->select("COUNT($this->tableRec.rec_id) AS nb")
		->where($this->tableRec.".rec_sLibelle", $lib)
		->where($this->tableRec.".rec_iSta",1)
		->get($this->tableRec)->row();
	}
	
	public function liste_recette_actifs()
	{
		return $this->db

		->join($this->tableCpt, $this->tableCpt.'.cpt_id='.$this->tableRec.'.cpt_id','inner')
		->where($this->tableCpt.".cpt_iSta",1)
		->where($this->tableRec.".rec_iSta",1)
		->order_by($this->tableRec.".rec_id","desc")
		->get($this->tableRec)->result();
	}
	
	
	public function maj_sous_fonct($donnees,$id){
		return $this->db->where("sfc_id",$id)->update($this->tableSfc,$donnees);
	}
	
	public function recup_sous_fonct($id)
	{
		return $this->db
		->where($this->tableSfc.".sfc_id",$id)
		->get($this->tableSfc)->row();
	}
	
	public function liste_sous_compte_fonct_actifs()
	{
		return $this->db

		->join($this->tableFcp, $this->tableFcp.'.fcp_id='.$this->tableSfc.'.fcp_id','inner')
		->join($this->tableCpt, $this->tableCpt.'.cpt_id='.$this->tableFcp.'.cpt_id','inner')
		->where($this->tableSfc.".sfc_iSta",1)
		->order_by($this->tableSfc.".sfc_id","desc")
		->get($this->tableSfc)->result();
	}
	
	public function nb_sous_compte_fonct($lib){
		return $this->db
		->select("COUNT($this->tableSfc.sfc_id) AS nb")
		->where($this->tableSfc.".sfc_sLibelle", $lib)
		->get($this->tableSfc)->row();
	}
	
	public function ajout_lib_sous_compte_fonct($donnees){
		$this->db->insert($this->tableSfc,$donnees);
		$recup = $this->db->order_by("sfc_id","desc")->get($this->tableSfc)->row();
		return $recup->sfc_sLibelle;
	}
	
	
	public function maj_compte_fonct($donnees,$id){
		return $this->db->where("fcp_id",$id)->update($this->tableFcp,$donnees);
	}
	
	public function recup_compte_fonct($id)
	{
		return $this->db
		->where($this->tableFcp.".fcp_id",$id)
		->get($this->tableFcp)->row();
	}
	
	
	public function ajout_compte_fonctionnement($donnees){
		$this->db->insert($this->tableFcp,$donnees);
		$recup = $this->db->order_by("fcp_id","desc")->get($this->tableFcp)->row();
		return $recup->fcp_sLibelle;
	}
	
	
	public function compte_nb_compte_fonctionnement($lib){
		return $this->db
		->select("COUNT($this->tableFcp.fcp_id) AS nb")
		->where($this->tableFcp.".fcp_sLibelle", $lib)
		->where($this->tableFcp.".fcp_iSta",1)
		->get($this->tableFcp)->row();
	}
	
	
	public function liste_compte_fonctionnement_actifs()
	{
		return $this->db

		->join($this->tableCpt, $this->tableCpt.'.cpt_id='.$this->tableFcp.'.cpt_id','inner')
		->where($this->tableCpt.".cpt_iSta",1)
		->where($this->tableFcp.".fcp_iSta",1)
		->order_by($this->tableFcp.".fcp_id","desc")
		->get($this->tableFcp)->result();
	}
		
	public function ajout_lib_sous_compte($donnees){
		$this->db->insert($this->tableSlc,$donnees);
		$recup = $this->db->order_by("slc_id","desc")->get($this->tableSlc)->row();
		return $recup->slc_sLibelle;
	}
		
	public function nb_sous_compte($lib){
		return $this->db
		->select("COUNT($this->tableSlc.slc_id) AS nb")
		->where($this->tableSlc.".slc_sLibelle", $lib)
		->get($this->tableSlc)->row();
	}
		
		
	public function liste_libelle_sous_compte_actifs()
	{
		return $this->db

		->join($this->tableScp, $this->tableScp.'.scp_id='.$this->tableSlc.'.scp_id','inner')
		->join($this->tableCpt, $this->tableCpt.'.cpt_id='.$this->tableScp.'.cpt_id','inner')
		->where($this->tableCpt.".cpt_iSta",1)
		->where($this->tableScp.".scp_iSta",1)
		->where($this->tableSlc.".slc_iSta",1)
		->order_by($this->tableSlc.".slc_id","desc")
		->get($this->tableSlc)->result();
	}
		
	public function maj_sous_compte($donnees,$id){
		return $this->db->where("scp_id",$id)->update($this->tableScp,$donnees);
	}
	
	public function recup_sous_compte($id)
	{
		return $this->db
		->where($this->tableScp.".scp_id",$id)
		->get($this->tableScp)->row();
	}
		
	public function ajout_sous_compte($donnees){
		$this->db->insert($this->tableScp,$donnees);
		$recup = $this->db->order_by("scp_id","desc")->get($this->tableScp)->row();
		return $recup->scp_sLibelle;
	}
		
	public function compte_nb_sous_compte($lib){
		return $this->db
		->select("COUNT($this->tableScp.scp_id) AS nb")
		->where($this->tableScp.".scp_sLibelle", $lib)
		->get($this->tableScp)->row();
	}
		
	public function liste_sous_compte_actifs()
	{
		return $this->db
		->join($this->tableCpt, $this->tableCpt.'.cpt_id='.$this->tableScp.'.cpt_id','inner')
		->where($this->tableCpt.".cpt_iSta",1)
		->where($this->tableScp.".scp_iSta",1)
		->order_by($this->tableScp.".cpt_id","desc")
		->get($this->tableScp)->result();
	}
	
		
		
	public function maj_compte($donnees,$id){
		return $this->db->where("cpt_id",$id)->update($this->tableCpt,$donnees);
	}
	
	public function recup_compte($id)
	{
		return $this->db
		->where($this->tableCpt.".cpt_id",$id)
		->get($this->tableCpt)->row();
	}
		
	public function ajout_compte($donnees){
		$this->db->insert($this->tableCpt,$donnees);
		$recup = $this->db->order_by("cpt_id","desc")->get($this->tableCpt)->row();
		return $recup->cpt_iNumero;
	}
	
	public function compte_nb_compte($cpt){
		return $this->db
		->select("COUNT($this->tableCpt.cpt_id) AS nb")
		->where($this->tableCpt.".cpt_iNumero", $cpt)
		->where($this->tableCpt.".cpt_iSta",1)
		->get($this->tableCpt)->row();
	}
	
	public function liste_compte_actifs()
	{
		return $this->db
		->where($this->tableCpt.".cpt_iSta",1)
		->order_by($this->tableCpt.".cpt_id","asc")
		->get($this->tableCpt)->result();
	}
	
	public function maj_banque($donnees,$id){
		return $this->db->where("bnq_id",$id)->update($this->tableBnq,$donnees);
	}
	
	public function recup_banque($id)
	{
		return $this->db
		->where($this->tableBnq.".bnq_id",$id)
		->get($this->tableBnq)->row();
	}

	public function compte_nb_banque($banque){
		return $this->db
		->select("COUNT($this->tableBnq.bnq_id) AS nb")
		->where($this->tableBnq.".bnq_sEnseigne", $banque)
		->get($this->tableBnq)->row();
	}		
	
	public function ajout_banque($donnees){
		$this->db->insert($this->tableBnq,$donnees);
		$recup = $this->db->order_by("bnq_id","desc")->get($this->tableBnq)->row();
		return $recup->bnq_sEnseigne;
	}
	
	public function liste_banque_actifs()
	{
		return $this->db
		->where($this->tableBnq.".bnq_iSta",1)
		->order_by($this->tableBnq.".bnq_id","desc")
		->get($this->tableBnq)->result();
	}
	
	
	public function maj_convention_entreprise($donnees,$id){
		return $this->db->where("cpa_id",$id)->update($this->tableCpa,$donnees);
	}
	
	public function recup_convention_entreprise($id)
	{
		return $this->db
		->where($this->tableCpa.".cpa_id",$id)
		->get($this->tableCpa)->row();
	}
	
	
	public function ajout_convention_entreprise($donnees){
		return $this->db->insert($this->tableCpa,$donnees);
	}
	
	public function liste_entreprise_convention_actifs()
	{
		return $this->db
		->where($this->tableCpa.".cpa_iSta",1)
		->order_by($this->tableCpa.".cpa_sEnseigne","asc")
		->get($this->tableCpa)->result();
	}
	
	
	public function liste_famille_maladie_actifs()
	{
		return $this->db
		->where("fma_iSta",1)
		->order_by("fma_id","desc")
		->get($this->tableFma)->result();
	}
	
	
	public function verif_famille_maladie($fma)
	{
		return $this->db
		->where("fma_sLibelle",$fma)
		->get($this->tableFma)->row();
	}
	
	public function ajout_famille_maladie($donnees){
		return $this->db->insert($this->tableFma,$donnees);
	}
	
	public function maj_famille_maladie($donnees,$id){
		return $this->db->where("fma_id",$id)->update($this->tableFma,$donnees);
	}
	
	public function recup_famille_maladie($id)
	{
		return $this->db
		->where("fma_id",$id)
		->get($this->tableFma)->row();
	}
	
	public function verif_famille_maladie_modif($fma,$id)
	{
		return $this->db
		->where("fma_sLibelle",$fma)
		->where("fma_id !=",$id)
		->get($this->tableFma)->row();
	}	
	
	public function liste_maladie_actifs()
	{
		return $this->db
		->join($this->tableCla, $this->tableMal.'.cla_id='.$this->tableCla.'.cla_id','inner')
		->where("mal_iSta",1)
		->where("cla_iSta",1)
		->order_by($this->tableMal.".mal_sLibelle","asc")
		->get($this->tableMal)->result();
	}

	public function liste_maladie()
	{
		return $this->db
		->join($this->tableCla, $this->tableCla.'.cla_id='.$this->tableMal.'.cla_id','inner')
		->get($this->tableMal)->result();
	}
	
	public function recup_sm1_maladie($id)
	{
		return $this->db
		->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
		->where($this->tableMal.".mal_id",$id)
		->get($this->tableSm1)->result();
	}
	
	public function recup_sm2_sm1($id)
	{
		return $this->db
		->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
		->where($this->tableSm1.".sm1_id",$id)
		->get($this->tableSm2)->result();
	}
	
	public function verif_maladie($mal,$fma)
	{
		return $this->db
		->where("mal_sLibelle",$mal)
		->where("cla_id",$fma)
		->get($this->tableMal)->row();
	}
	
	public function ajout_maladie($donnees){
		$this->db->insert($this->tableMal,$donnees);
		return $this->db->order_by("mal_id","desc")->get($this->tableMal)->row();
	}
	
	public function maj_maladie($donnees,$id){
		return $this->db->where("mal_id",$id)->update($this->tableMal,$donnees);
	}
	
	public function recup_maladie($id)
	{
		return $this->db
		->join($this->tableCla, $this->tableCla.'.cla_id='.$this->tableMal.'.cla_id','inner')
		->where($this->tableMal.".mal_id",$id)
		->get($this->tableMal)->row();
	}
	
	public function verif_maladie_modif($mal,$fma,$id)
	{
		return $this->db
		->where("mal_sLibelle",$mal)
		->where("cla_id",$fma)
		->where("mal_id !=",$id)
		->get($this->tableMal)->row();
	}
	
	public function liste_specification_maladie_actifs()
	{
		return $this->db
		->join($this->tableMal, $this->tableSma.'.mal_id='.$this->tableMal.'.mal_id','inner')
		->where("sma_iSta",1)
		->where("mal_iSta",1)
		->order_by($this->tableSma.".sma_sLibelle","asc")
		->get($this->tableSma)->result();
	}
	

	public function verif_specification_maladie($sma,$mal)
	{
		return $this->db
		->where("sma_sLibelle",$sma)
		->where("mal_id",$mal)
		->get($this->tableSma)->row();
	}
	
	public function ajout_specification_maladie($donnees){
		$this->db->insert($this->tableSma,$donnees);
		return $this->db->order_by("sma_id","desc")->get($this->tableSma)->row();
	}
	
	public function maj_specification_maladie($donnees,$id){
		return $this->db->where("sma_id",$id)->update($this->tableSma,$donnees);
	}
	
	public function recup_specification_maladie($id)
	{
		return $this->db
		->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSma.'.mal_id','inner')
		->where($this->tableSma.".sma_id",$id)
		->get($this->tableSma)->row();
	}
	
	public function verif_specification_maladie_modif($sma,$mal,$id)
	{
		return $this->db
		->where("sma_sLibelle",$sma)
		->where("mal_id",$mal)
		->where("sma_id !=",$id)
		->get($this->tableSma)->row();
	}
	
	
	
	
	
	
	public function sortie_reactif($donnees){
		return $this->db->insert($this->tableSor,$donnees);
	}
	
	public function liste_destock_reactif(){
		return $this->db
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableRes.'.ere_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableRes.".res_iSta",2)
		->get($this->tableRes)->result();
	}
	
	public function destock_reactif($data, $id){
		return $this->db->where("res_id",$id)->update($this->tableRes,$data);
	}
	
	
	public function liste_stock_reactif(){
		return $this->db
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableRes.'.ere_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		// ->where($this->tableRea.".rea_iSta",1)
		->where($this->tableRes.".res_iSta !=",2)
		->get($this->tableRes)->result();
	}		
	
	public function liste_stock_reactif_selection($id){
		return $this->db
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableRes.'.ere_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableRes.".res_id",$id)
		->get($this->tableRes)->row();
	}		
	
	
	public function liste_historique_reactif(){
		return $this->db
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableHre.'.ere_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableRea.".rea_iSta",1)
		->get($this->tableHre)->result();
	}		
	
	
	public function liste_entree_reactif(){
		return $this->db
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableRea.".rea_iSta",1)
		->where($this->tableEre.".ere_iSta",1)
		->get($this->tableEre)->result();
	}	
	
	public function ajout_entree_reactif($donnees){
		return $this->db->insert($this->tableRes,$donnees);
	}	
	
	public function entree_detail_stock($donnees){
		return $this->db->insert($this->tableHre,$donnees);
	}
	
	
	public function entree_stock_reactif($donnees){
		$this->db->insert($this->tableEre,$donnees);
		return $this->db
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->order_by($this->tableEre.".ere_id","desc")
		->get($this->tableEre)->row();
	}	
	
	
	public function verif_entree_reactif($id)
	{
		return $this->db
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableEre.".rea_id",$id)
		->get($this->tableEre)->row();
	}
	
	public function reactif_en_stock($id)
	{
		return $this->db
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->where($this->tableEre.".ere_id",$id)
		->get($this->tableEre)->row();
	}
	
	public function verif_reactif($rea)
	{
		return $this->db
		->where("rea_sLibelle",$rea)
		->get($this->tableRea)->row();
	}
	
	public function ajout_reactif($donnees){
		$this->db->insert($this->tableRea,$donnees);
		return  $this->db->order_by("rea_id","desc")->get($this->tableRea)->row();
	}
	
	
	public function verif_existe_reactif($rea,$ela)
	{
		return $this->db
		->where("rea_id",$rea)
		->where("ela_id",$ela)
		->get($this->tableRex)->row();
	}
	
	public function ajout_reactif_examen($donnees){
		return $this->db->insert($this->tableRex,$donnees);
	}
	
	public function recup_reactif_actifs($id)
	{
		return $this->db
		->where("rea_id",$id)
		->get($this->tableRea)->row();
	}	
	
	public function liste_reactif_actifs()
	{
		return $this->db
		->where("rea_iSta",1)
		->order_by("rea_sLibelle","asc")
		->get($this->tableRea)->result();
	}
	
	
	public function liste_examen_reactif_actifs($rea)
	{
		return $this->db
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableRex.'.lac_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableRex.'.rea_id','inner')
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->where($this->tableRex.".rea_id",$rea)
		->get($this->tableRex)->result();
	}	
		
	
	public function liste_examen_reactif_nu_actifs($lac,$res)
	{
		return $this->db
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableSor.'.lac_id','inner')
		->where($this->tableSor.".lac_id",$lac)
		->where($this->tableSor.".res_id",$res)
		->get($this->tableSor)->row();
	}
	
	public function liste_examen_reactif_sortie($res)
	{
		return $this->db
		->where($this->tableSor.".res_id",$res)
		->where($this->tableSor.".res_dDateRetour IS NOT NULL")
		->order_by($this->tableSor.".sor_id","desc")
		->get($this->tableSor)->row();
	}
	
	public function liste_sorties_reactif()
	{
		return $this->db
		->join($this->tableRes, $this->tableRes.'.res_id='.$this->tableSor.'.res_id','inner')
		->join($this->tableApp, $this->tableApp.'.app_id='.$this->tableSor.'.app_id','left')
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableRes.'.ere_id','inner')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableSor.'.res_iDest','inner')
		->get($this->tableSor)->result();
	}
	
	public function recup_sorties_reactif($id)
	{
		return $this->db
		->join($this->tableEla, $this->tableEla.'.ela_id='.$this->tableSor.'.ela_id','inner')
		->join($this->tableTex, $this->tableTex.'.tex_id='.$this->tableEla.'.tex_id','inner')
		->join($this->tableRes, $this->tableRes.'.res_id='.$this->tableSor.'.res_id','inner')
		->join($this->tableEre, $this->tableEre.'.ere_id='.$this->tableRes.'.ere_id','inner')
		->join($this->tableApp, $this->tableApp.'.app_id='.$this->tableSor.'.app_id','left')
		->join($this->tableRea, $this->tableRea.'.rea_id='.$this->tableEre.'.rea_id','inner')
		->join($this->tablePer, $this->tablePer.'.per_id='.$this->tableSor.'.res_iDest','inner')
		->where($this->tableSor.".sor_id",$id)
		->get($this->tableSor)->row();
	}
	
	public function maj_reactif($donnees,$id){
		return $this->db->where("rea_id",$id)->update($this->tableRea,$donnees);
	}
	
	public function recup_reactif($id)
	{
		return $this->db
		->where("rea_id",$id)
		->get($this->tableRea)->row();
	}
	
	
	public function liste_accessoire_actifs()
	{
		return $this->db
		->where("acc_iSta",1)
		->order_by("acc_sLibelle","asc")
		->get($this->tableAcc)->result();
	}
	
	public function ajout_accessoire($donnees){
		return $this->db->insert($this->tableAcc,$donnees);
	}
	
	public function maj_accessoire($donnees,$id){
		return $this->db->where("acc_id",$id)->update($this->tableAcc,$donnees);
	}
	
	public function recup_accessoire($id)
	{
		return $this->db
		->where("acc_id",$id)
		->get($this->tableAcc)->row();
	}
	
	
	public function ajout_element_analyse($donnees){
		return $this->db->insert($this->tableEla,$donnees);
	}	
	
	public function ajout_type_examen($donnees){
		return $this->db->insert($this->tableTex,$donnees);
	}
	
	public function maj_element_analyse($donnees,$id){
		return $this->db->where("ela_id",$id)->update($this->tableEla,$donnees);
	}	
	
	public function maj_type_examen($donnees,$id){
		return $this->db->where("tex_id",$id)->update($this->tableTex,$donnees);
	}
	
	public function recup_type_examen($id)
	{
		return $this->db
		->where($this->tableTex.".tex_id",$id)
		->get($this->tableTex)->row();
	}	
	
	public function verif_type_examen($lib)
	{
		return $this->db
		->where($this->tableTex.".tex_sLibelle",$lib)
		->get($this->tableTex)->row();
	}	
	
	public function recup_element_analyse($id)
	{
		// return $this->db
		// ->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		// ->where($this->tableSer.".ser_id",$id)
		// ->get($this->tableSer)->row();
	}
	
	public function maj_type_exam($donnees,$id){
		return $this->db->where("tex_id",$id)->update($this->tableTex,$donnees);
	}
	
	public function liste_element_analyse_actifs()
	{
		return $this->db
		->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
		->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
		->where($this->tableEla.".ela_iSta",1)
		->order_by($this->tableEla.".ela_sLibelle","asc")
		->get($this->tableEla)->result();
	}
	
	public function element_analyse_examen_actifs($lac)
	{
		return $this->db
		->join($this->tableTex, $this->tableEla.'.tex_id='.$this->tableTex.'.tex_id','inner')
		->join($this->tableLac, $this->tableEla.'.lac_id='.$this->tableLac.'.lac_id','inner')
		->where($this->tableEla.".ela_iSta",1)
		->where($this->tableEla.".lac_id",$lac)
		->get($this->tableEla)->result();
	}
	
	
	
	public function liste_appareils_actifs()
	{
		return $this->db
		->where($this->tableApp.".app_iSta",1)
		->order_by($this->tableApp.".app_sLibelle","asc")
		->get($this->tableApp)->result();
	}
	
	public function verif_appareil($lib)
	{
		return $this->db
		->where($this->tableApp.".app_sLibelle",$lib)
		->get($this->tableApp)->row();
	}
	
	public function ajout_appareil($donnees){
		return $this->db->insert($this->tableApp,$donnees);
	}
	
	
	public function maj_appareil($donnees,$id){
		return $this->db->where("app_id",$id)->update($this->tableApp,$donnees);
	}
	
	public function recup_appareil($id)
	{
		return $this->db
		->where($this->tableApp.".app_id",$id)
		->get($this->tableApp)->row();
	}	
	
	
	public function verif_appareil_modif($lib,$id)
	{
		return $this->db
		->where("app_sLibelle",$lib)
		->where("app_id !=",$id)
		->get($this->tableApp)->row();
	}
	
	
	public function liste_types_courrier()
	{
		return $this->db->where($this->tableTco.".tco_iSta",1)->order_by("tco_id","asc")->get($this->tableTco)->result();
	}
	
	
	public function element_analyse_actifs($lac)
	{
		return $this->db
		->join($this->tableTex, $this->tableTex.'.tex_id='.$this->tableEla.'.tex_id','inner')
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableTex.'.lac_id','inner')
		->where($this->tableEla.".ela_iSta",1)
		->where($this->tableTex.".lac_id",$lac)
		->order_by($this->tableEla.".ela_sLibelle","asc")
		->get($this->tableEla)->result();
	}
	
	
	public function liste_type_examen_actifs()
	{
		return $this->db
		->where($this->tableTex.".tex_iSta",1)
		->order_by($this->tableTex.".tex_sLibelle","asc")
		->get($this->tableTex)->result();
	}
	
	
	
	
	public function liste_chambre_supprimes()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableCha.".cha_iSta",2)
		->order_by($this->tableCha.".cha_sLibelle","asc")
		->get($this->tableCha)->result();
	}	
	
	public function maj_chambre($donnees,$id){
		return $this->db->where("cha_id",$id)->update($this->tableCha,$donnees);
	}
	
	public function recup_chambre($id)
	{
		return $this->db
		->where("cha_id",$id)
		->get($this->tableCha)->row();
	}
	
	
	public function ajout_lit($donnees){
		$this->db->insert($this->tableLit,$donnees);
	}	
	
	public function ajout_chambre($donnees){
		$this->db->insert($this->tableCha,$donnees);
		$recup = $this->db->order_by("cha_id","desc")->get($this->tableCha)->row();
		return $recup->cha_id;
	}
	
	
	public function liste_chambre_unite($id)
	{
		$recup = $this->db->where("uni_id",$id)->order_by("uni_sLibelle","asc")->get($this->tableUni)->row();
		return $recup->uni_sLibelle;
	}	
	
	public function liste_unite_service($id)
	{
		$recup = $this->db->where("ser_id",$id)->order_by("ser_sLibelle","asc")->get($this->tableSer)->row();
		return $recup->ser_sLibelle;
	}	
	
	public function liste_lit_chambre($id)
	{
		return $this->db
		->where("cha_id",$id)
		->order_by("lit_sLibelle","asc")
		->get($this->tableLit)->result();
	}
	
	public function liste_chambre_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableCha.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableCha.".cha_iSta",1)
		->order_by($this->tableCha.".cha_sLibelle","asc")
		->get($this->tableCha)->result();
	}
		
	public function liste_chambre_unite_dispo($id)
	{
		return $this->db
		->where($this->tableCha.".uni_id",$id)
		->where($this->tableCha.".cha_iSta",1)
		->order_by($this->tableCha.".cha_sLibelle","asc")
		->get($this->tableCha)->result();
	}
			
	public function liste_lit_chambre_dispo($id)
	{
		return $this->db
		->where($this->tableLit.".cha_id",$id)
		->where($this->tableLit.".lit_iOccupe",0)
		->order_by($this->tableLit.".lit_sLibelle","asc")
		->get($this->tableLit)->result();
	}
				
	public function liste_salle_dispo($id)
	{
		return $this->db
		->where("bop_id",$id)
		// ->where("sop_iOccupe",0)
		->order_by("sop_sLibelle","asc")
		->get($this->tableSop)->result();
	}
		
	public function verif_chambre($lib,$id)
	{
		return $this->db
		->where("cha_sLibelle",$lib)
		->where("uni_id",$id)
		->get($this->tableCha)->row();
	}
	
	
	public function info_structure()
	{
		return $this->db
		->get($this->tableStr)->row();
	}
	
	public function liste_type_personnel()
	{
		return $this->db
		->order_by("tpe_sLibelle","asc")
		->get($this->tableTpe)->result();
	}
	
	
	/***** Assureur *********/
	public function liste_assureurs_actifs()
	{
		return $this->db
		->where("ass_iSta",1)
		->order_by("ass_sLibelle","asc")
		->get($this->tableAss)->result();
	}
	
	public function liste_assureurs_supprimes()
	{
		return $this->db
		->where("ass_iSta",2)
		->order_by("ass_sLibelle","asc")
		->get($this->tableAss)->result();
	}
	
	
	public function verif_assureur($ass)
	{
		return $this->db
		->where("ass_sLibelle",$ass)
		->get($this->tableAss)->row();
	}
	
	public function recup_assureur($id)
	{
		return $this->db
		->where("ass_id",$id)
		->get($this->tableAss)->row();
	}
	
	public function verif_assureur_modif($ass,$id)
	{
		return $this->db
		->where("ass_sLibelle",$ass)
		->where("ass_id !=",$id)
		->get($this->tableAss)->row();
	}	
	
	public function ajout_assureur($donnees){
		return $this->db->insert($this->tableAss,$donnees);
	}
	
	public function maj_assureur($donnees,$id){
		return $this->db->where("ass_id",$id)->update($this->tableAss,$donnees);
	}
	
	/***** Type couverture d'assurance *********/
	public function liste_type_couverture_assurance_actifs()
	{
		return $this->db
		->where("tas_iSta",1)
		->order_by("tas_iTaux","asc")
		->get($this->tableTas)->result();
	}
	
	public function liste_type_assurance_supprimes()
	{
		return $this->db
		->where("tas_iSta",2)
		->order_by("tas_sLibelle","asc")
		->get($this->tableTas)->result();
	}
	
	
	public function verif_type_assurance($tas)
	{
		return $this->db
		->where("tas_sLibelle",$tas)
		->get($this->tableTas)->row();
	}
	
	public function recup_type_assurance($id)
	{
		return $this->db
		->where("tas_id",$id)
		->get($this->tableTas)->row();
	}
	
	public function recup_acte_couvert($lac,$tas)
	{
		return $this->db
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableCas.'.lac_id','inner')
		->join($this->tableTas, $this->tableTas.'.tas_id='.$this->tableCas.'.tas_id','inner')
		->where($this->tableCas.".tas_id",$tas)
		->where($this->tableCas.".lac_id",$lac)
		->get($this->tableCas)->row();
	}
	
	public function verif_type_assurance_modif($tas,$id)
	{
		return $this->db
		->where("tas_sLibelle",$tas)
		->where("tas_id !=",$id)
		->get($this->tableTas)->row();
	}	
	
	public function ajout_type_assurance($donnees){
		$this->db->insert($this->tableTas,$donnees);
		return  $this->db->order_by("tas_id","desc")->get($this->tableTas)->row();
	}
	
	public function maj_type_assurance($donnees,$id){
		return $this->db->where("tas_id",$id)->update($this->tableTas,$donnees);
	}
	
	
	/***** couverture d'assurance *********/
	public function liste_couverture_assurance_actifs($tas)
	{
		return $this->db
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableCas.'.lac_id','inner')
		->join($this->tableTas, $this->tableTas.'.tas_id='.$this->tableCas.'.tas_id','inner')
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->where($this->tableCas.".tas_id",$tas)
		->get($this->tableCas)->result();
	}
	
	
	public function verif_couverture_assurance($tas,$lac)
	{
		return $this->db
		->where("tas_id",$tas)
		->where("lac_id",$lac)
		->get($this->tableCas)->row();
	}
	
	public function recup_couverture_assurance($id)
	{
		return $this->db
		->join($this->tableLac, $this->tableLac.'.lac_id='.$this->tableCas.'.lac_id','inner')
		->join($this->tableTas, $this->tableTas.'.tas_id='.$this->tableCas.'.tas_id','inner')
		->where($this->tableCas.".cas_id",$id)
		->get($this->tableCas)->row();
	}
	
	public function verif_couverture_assurance_modif($tas,$lac,$id)
	{
		return $this->db
		->where("tas_id",$tas)
		->where("lac_id",$lac)
		->where("cas_id !=",$id)
		->get($this->tableCas)->row();
	}	
	
	public function ajout_couverture_assurance($donnees){
		return $this->db->insert($this->tableCas,$donnees);
	}
	
	public function maj_couverture_assurance($donnees,$id){
		return $this->db->where("cas_id",$id)->update($this->tableCas,$donnees);
	}
	
	
	/***** Direction *********/
	public function liste_departements_actifs()
	{
		return $this->db
		->where("dep_iSta",1)
		->order_by("dep_sLibelle","asc")
		->get($this->tableDep)->result();
	}
	
	public function liste_departements_supprimes()
	{
		return $this->db
		->where("dep_iSta",2)
		->order_by("dep_sLibelle","asc")
		->get($this->tableDep)->result();
	}
	
	
	public function verif_departement($dep)
	{
		return $this->db
		->where("dep_sLibelle",$dep)
		->get($this->tableDep)->row();
	}
	
	public function recup_direction($id)
	{
		return $this->db
		->where("dep_id",$id)
		->get($this->tableDep)->row();
	}
	
	public function verif_departement_modif($dep,$id)
	{
		return $this->db
		->where("dep_sLibelle",$dep)
		->where("dep_id !=",$id)
		->get($this->tableDep)->row();
	}	
	
	public function ajout_departement($donnees){
		return $this->db->insert($this->tableDep,$donnees);
	}
	
	public function maj_direction($donnees,$id){
		return $this->db->where("dep_id",$id)->update($this->tableDep,$donnees);
	}
	
	
	/*********** Service **********/
	public function liste_services_actifs()
	{
		return $this->db
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where("ser_iSta",1)
		->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	
	public function nb_services_actifs()
	{
		return $this->db
		->select("COUNT(ser_id) as nb")
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where("ser_iSta",1)
		//->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->row();
	}
	
	
	
	
	public function liste_services($nb,$pageActuelle)
	{
		$articleParPage = $nb;
		$pageDepart = ($pageActuelle - 1)*$articleParPage;
		return $this->db
		->limit($articleParPage, $pageDepart)
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where("ser_iSta",1)
		->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	
	
	public function liste_services_acte_actifs()
	{
		return $this->db
		->select($this->tableSer.".ser_sLibelle, ".$this->tableSer.".ser_id")
		->join($this->tableUni, $this->tableUni.'.ser_id='.$this->tableSer.'.ser_id','inner')
		->join($this->tableLac, $this->tableLac.'.uni_id='.$this->tableUni.'.uni_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where($this->tableSer.".ser_iSta",1)
		// ->where($this->tableSer.".ser_id !=",2)
		// ->where($this->tableSer.".ser_id !=",21)
		->where($this->tableSer.".ser_sLibelle !=",'Frais divers')
		->group_by($this->tableSer.".ser_id")
		->group_by($this->tableSer.".ser_sLibelle")/*Ajout dans la clause group_by*/
		->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	public function liste_services_supprimes()
	{
		return $this->db
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where("ser_iSta",2)
		->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	public function liste_services_direction_actifs($dir)
	{
		return $this->db
		// ->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where("ser_iSta",1)
		->where("dep_id",$dir)
		->order_by("ser_sLibelle","asc")
		->get($this->tableSer)->result();
	}
	
	public function verif_service($ser,$dep)
	{
		return $this->db
		->where("ser_sLibelle",$ser)
		->where("dep_id",$dep)
		->get($this->tableSer)->row();
	}
	
	public function recup_service($id)
	{
		return $this->db
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','left')
		->where($this->tableSer.".ser_id",$id)
		->get($this->tableSer)->row();
	}
	
	public function recup_service_par_departement($id)
	{
		return $this->db->select("ser_id,ser_sLibelle")
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where($this->tableDep.".dep_id",$id)
		->get($this->tableSer)->result();
	}
	
	public function verif_service_modif($ser,$dep,$id)
	{
		return $this->db
		->where("ser_sLibelle",$ser)
		->where("dep_id",$dep)
		->where("ser_id !=",$id)
		->get($this->tableSer)->row();
	}
	
	
	public function ajout_service($donnees){
		return $this->db->insert($this->tableSer,$donnees);
	}
	
	public function maj_service($donnees,$id){
		return $this->db->where("ser_id",$id)->update($this->tableSer,$donnees);
	}
	
	/******** chapitre *********/
	public function nb_chapitre_actifs()
	{
		return $this->db
		->select("COUNT(chp_id) as nb")
		->where("chp_iSta",1)
		//->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableChp)->row();
	}
	public function recup_chapitre($id)
	{
		return $this->db
		->where($this->tableChp.".chp_id",$id)
		->get($this->tableChp)->row();
	}
	
	public function recherche_chapitre($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("chp_id,chp_sLibelle,chp_sCode")
				->where("chp_iSta",1)
				->like("chp_sLibelle",$search,'after')
				->get($this->tableChp)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("chp_id,chp_sLibelle,chp_sCode")
			->where("chp_iSta",1)
			->like("chp_sCode",$search,'after')
			->get($this->tableChp)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	public function liste_chapitre_100()
	{
		return $this->db
		->limit(100)
		->where("chp_iSta",1)
		->order_by($this->tableChp.".chp_sLibelle","asc")
		->get($this->tableChp)->result();
	}
	public function liste_chapitre_actif()
	{
		return $this->db
		->where("chp_iSta",1)
		->order_by($this->tableChp.".chp_sLibelle","asc")
		->get($this->tableChp)->result();
	}
	public function verif_chapitre_modif($chp,$id)
	{
		return $this->db
		->where("chp_sLibelle",$chp)
		->where("chp_id !=",$id)
		->get($this->tableChp)->row();
	}
	public function verif_chapitre($chp)
	{
		return $this->db
		->where("chp_sLibelle",$chp)
		->get($this->tableChp)->row();
	}
	public function ajout_chapitre($donnees){
		return $this->db->insert($this->tableChp,$donnees);
	}
	public function maj_chapitre($donnees,$id){
		return $this->db->where("chp_id",$id)->update($this->tableChp,$donnees);
	}

	
	/******** classe *********/
	public function nb_classe_actifs()
	{
		return $this->db
		->select("COUNT(cla_id) as nb")
		->where("cla_iSta",1)
		//->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableCla)->row();
	}
	public function recup_classe($id)
	{
		return $this->db
		->where($this->tableCla.".cla_id",$id)
		->get($this->tableCla)->row();
	}
	
	public function recherche_classe($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("cla_id,cla_sLibelle,cla_sCode,".$this->tableChp.".chp_id,chp_sLibelle")
				->join($this->tableChp, $this->tableChp.'.chp_id='.$this->tableCla.'.chp_id','inner')
				->where("cla_iSta",1)
				->like("cla_sLibelle",$search,'after')
				->get($this->tableCla)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("cla_id,cla_sLibelle,cla_sCode,".$this->tableChp.".chp_id,chp_sLibelle")
			->join($this->tableChp, $this->tableChp.'.chp_id='.$this->tableCla.'.chp_id','inner')
			->where("cla_iSta",1)
			->like("cla_sCode",$search,'after')
			->get($this->tableCla)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("cla_id,cla_sLibelle,cla_sCode,".$this->tableChp.".chp_id,chp_sLibelle")
			->join($this->tableChp, $this->tableChp.'.chp_id='.$this->tableCla.'.chp_id','inner')
			->where("cla_iSta",1)
			->like("chp_sLibelle",$search,'after')
			->get($this->tableCla)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	public function liste_classe_100()
	{
		return $this->db
		->limit(100)
		->join($this->tableChp, $this->tableChp.'.chp_id='.$this->tableCla.'.chp_id','inner')
		->where("cla_iSta",1)
		->order_by($this->tableCla.".cla_sLibelle","asc")
		->get($this->tableCla)->result();
	}
	public function liste_classe_actif()
	{
		return $this->db
		->join($this->tableChp, $this->tableChp.'.chp_id='.$this->tableCla.'.chp_id','inner')
		->where("cla_iSta",1)
		->order_by($this->tableCla.".cla_sLibelle","asc")
		->get($this->tableCla)->result();
	}
	public function verif_classe_modif($cla,$chap,$id)
	{
		return $this->db
		->where("cla_sLibelle",$cla)
		->where("chp_id !=",$chap)
		->where("cla_id !=",$id)
		->get($this->tableCla)->row();
	}
	public function verif_classe($cla)
	{
		return $this->db
		->where("cla_sLibelle",$cla)
		->get($this->tableCla)->row();
	}
	public function ajout_classe($donnees){
		return $this->db->insert($this->tableCla,$donnees);
	}
	public function maj_classe($donnees,$id){
		return $this->db->where("cla_id",$id)->update($this->tableCla,$donnees);
	}
	/******** SousMaladie1 *********/
	public function nb_SousMaladie1_actifs()
	{
		return $this->db
		->select("COUNT(sm1_id) as nb")
		->where("sm1_iSta",1)
		//->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSm1)->row();
	}
	public function recup_SousMaladie1($id)
	{
		return $this->db
		->where($this->tableSm1.".sm1_id",$id)
		->get($this->tableSm1)->row();
	}
	
	public function recherche_SousMaladie1($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("sm1_id,sm1_sLibelle,sm1_sCode,".$this->tableMal.".mal_id,mal_sLibelle")
			->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
			->where("sm1_iSta",1)
			->like("sm1_sLibelle",$search,'after')
			->get($this->tableSm1)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("sm1_id,sm1_sLibelle,sm1_sCode,".$this->tableMal.".mal_id,mal_sLibelle")
			->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
			->where("sm1_iSta",1)
			->like("sm1_sCode",$search,'after')
			->get($this->tableSm1)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("sm1_id,sm1_sLibelle,sm1_sCode,".$this->tableMal.".mal_id,mal_sLibelle")
			->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
			->where("sm1_iSta",1)
			->like("mal_sLibelle",$search,'after')
			->get($this->tableSm1)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}
	public function liste_SousMaladie1_100()
	{
		return $this->db
		->limit(100)
		->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
		->where("sm1_iSta",1)
		->order_by($this->tableSm1.".sm1_sLibelle","asc")
		->get($this->tableSm1)->result();
	}
	public function liste_SousMaladie1_actif()
	{
		return $this->db
		->join($this->tableMal, $this->tableMal.'.mal_id='.$this->tableSm1.'.mal_id','inner')
		->where("sm1_iSta",1)
		->order_by($this->tableSm1.".sm1_sLibelle","asc")
		->get($this->tableSm1)->result();
	}
	public function verif_SousMaladie1_modif($sm1,$mal,$id)
	{
		return $this->db
		->where("sm1_sLibelle",$sm1)
		->where("mal_id !=",$mal)
		->where("sm1_id !=",$id)
		->get($this->tableSm1)->row();
	}
	public function verif_SousMaladie1($cla)
	{
		return $this->db
		->where("sm1_sLibelle",$cla)
		->get($this->tableSm1)->row();
	}
	public function ajout_SousMaladie1($donnees){
		return $this->db->insert($this->tableSm1,$donnees);
	}
	public function maj_SousMaladie1($donnees,$id){
		return $this->db->where("sm1_id",$id)->update($this->tableSm1,$donnees);
	}

	/******** SousMaladie2 *********/
	public function nb_SousMaladie2_actifs()
	{
		return $this->db
		->select("COUNT(sm2_id) as nb")
		->where("sm2_iSta",1)
		//->order_by($this->tableSer.".ser_sLibelle","asc")
		->get($this->tableSm2)->row();
	}
	public function recup_SousMaladie2($id)
	{
		return $this->db
		->where($this->tableSm2.".sm2_id",$id)
		->get($this->tableSm2)->row();
	}
	
	public function recherche_SousMaladie2($search)
	{
		$tab=array();
		$res=array();
		$res= $this->db->select("sm2_id,sm2_sLibelle,sm2_sCode,".$this->tableSm1.".sm1_id,sm1_sLibelle")
			->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
			->where("sm2_iSta",1)
			->like("sm2_sLibelle",$search,'after')
			->get($this->tableSm2)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("sm2_id,sm2_sLibelle,sm2_sCode,".$this->tableSm1.".sm1_id,sm1_sLibelle")
			->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
			->where("sm2_iSta",1)
			->like("sm2_sCode",$search,'after')
			->get($this->tableSm2)->result();
		$tab = array_merge($tab, $res);
		$res= $this->db->select("sm2_id,sm2_sLibelle,sm2_sCode,".$this->tableSm1.".sm1_id,sm1_sLibelle")
			->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
			->where("sm2_iSta",1)
			->like("sm1_sLibelle",$search,'after')
			->get($this->tableSm2)->result();
		$tab = array_merge($tab, $res);
		return array_unique($tab,SORT_REGULAR);
	}


	public function liste_SousMaladie2_100()
	{
		return $this->db
		->limit(100)
		->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
		->where("sm2_iSta",1)
		->order_by($this->tableSm2.".sm2_sLibelle","asc")
		->get($this->tableSm2)->result();
	}
	public function liste_SousMaladie2_actif()
	{
		return $this->db
		->join($this->tableSm1, $this->tableSm1.'.sm1_id='.$this->tableSm2.'.sm1_id','inner')
		->where("sm2_iSta",1)
		->order_by($this->tableSm2.".sm2_sLibelle","asc")
		->get($this->tableSm2)->result();
	}
	public function verif_SousMaladie2_modif($sm1,$mal,$id)
	{
		return $this->db
		->where("sm2_sLibelle",$sm1)
		->where("sm1_id !=",$mal)
		->where("sm2_id !=",$id)
		->get($this->tableSm2)->row();
	}
	public function verif_SousMaladie2($cla)
	{
		return $this->db
		->where("sm2_sLibelle",$cla)
		->get($this->tableSm2)->row();
	}
	
	public function ajout_SousMaladie2($donnees){
		return $this->db->insert($this->tableSm2,$donnees);
	}

	public function maj_SousMaladie2($donnees,$id){
		return $this->db->where("sm2_id",$id)->update($this->tableSm2,$donnees);
	}


	/*********** Unité **********/
	public function liste_unites_actifs()
	{
		return $this->db
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where("uni_iSta",1)
		->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->result();
	}

	public function liste_unites_Dep_actifs()
	{
		return $this->db
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where($this->tableFlt.".flt_id !=",45)
		->where("uni_iSta",1)
		->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->result();
	}

	// Liste des unités dans lesquelles il peut avoir un éventuel décès
	public function liste_unites_actifs_deces()
	{
		$unites_exclues = array(2, 12, 13, 15, 18, 19, 20, 21, 22, 24, 26, 27, 28, 29, 31, 32, 34, 37, 38, 39, 51, 55, 57, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 81, 86, 89, 90, 91, 93, 94, 95);
		return $this->db
			->join($this->tableSer, $this->tableSer . '.ser_id=' . $this->tableUni . '.ser_id', 'inner')
			->join($this->tableDep, $this->tableDep . '.dep_id=' . $this->tableSer . '.dep_id', 'inner')
			->where_not_in("uni_id", $unites_exclues)
			->order_by($this->tableUni . ".uni_sLibelle", "asc")
			->get($this->tableUni)->result();
	}

	public function liste_unite_services_actifs($ser)
	{
		return $this->db
		->where("ser_id",$ser)
		->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->result();
	}
	
	
	public function liste_unites_supprimees()
	{
		return $this->db
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where("uni_iSta",2)
		->order_by($this->tableUni.".uni_sLibelle","asc")
		->get($this->tableUni)->result();
	}
	
	public function verif_unite($uni,$ser)
	{
		return $this->db
		->where("uni_sLibelle",$uni)
		->where("ser_id",$ser)
		->get($this->tableUni)->row();
	}
	
	public function recup_unite($id)
	{
		return $this->db
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->where($this->tableUni.".uni_id",$id)
		->get($this->tableUni)->row();
	}
	
	public function verif_unite_modif($uni,$ser,$id)
	{
		return $this->db
		->where("uni_sLibelle",$uni)
		->where("ser_id",$ser)
		->where("uni_id !=",$id)
		->get($this->tableUni)->row();
	}
	
	
	public function ajout_unite($donnees){
		return $this->db->insert($this->tableUni,$donnees);
	}
	
	public function maj_unite($donnees,$id){
		return $this->db->where("uni_id",$id)->update($this->tableUni,$donnees);
	}
	
	
	/********* Domaine **********************/
	public function liste_postes_actifs()
	{
		return $this->db
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("pst_iSta",1)
		->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->result();
	}
	
	public function liste_postes_supprimes()
	{
		return $this->db
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("pst_iSta",2)
		->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->result();
	}
	
	
	public function liste_domaine_type_actifs($tpe)
	{
		return $this->db
		->where("pst_iSta",1)
		->where("tpe_id",$tpe)
		->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->result();
	}
	
	
	public function verif_poste($pst,$tpe)
	{
		return $this->db
		->where("pst_sLibelle",$pst)
		->where("tpe_id",$tpe)
		->get($this->tablePst)->row();
	}
	
	public function recup_poste($id)
	{
		return $this->db
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where($this->tablePst.".pst_id",$id)
		->get($this->tablePst)->row();
	}
	
	public function verif_poste_modif($pst,$tpe,$id)
	{
		return $this->db
		->where("pst_sLibelle",$pst)
		->where("tpe_id",$tpe)
		->where("pst_id !=",$id)
		->get($this->tablePst)->row();
	}
	
	
	public function ajout_poste($donnees){
		return $this->db->insert($this->tablePst,$donnees);
	}
	
	public function maj_poste($donnees,$id){
		return $this->db->where("pst_id",$id)->update($this->tablePst,$donnees);
	}
	
	
	/********* specialités **********************/
	public function liste_specialites_actifs()
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("spt_iSta",1)
		->order_by("spt_sLibelle","asc")
		->get($this->tableSpt)->result();
	}
		
	public function liste_specialites_supprimees()
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("spt_iSta",2)
		->order_by("spt_sLibelle","asc")
		->get($this->tableSpt)->result();
	}
	
	public function liste_poste_type_actifs($tpe)
	{
		return $this->db
		->where("pst_iSta",1)
		->where("tpe_id",$tpe)
		->order_by("pst_sLibelle","asc")
		->get($this->tablePst)->result();
	}
	
	
	public function liste_specialites_poste_actifs($pos)
	{
		return $this->db
		->where("spt_iSta",1)
		->where("pst_id",$pos)
		->order_by("spt_sLibelle","asc")
		->get($this->tableSpt)->result();
	}
	
	
	public function verif_specialite($spt,$pst)
	{
		return $this->db
		->where("spt_sLibelle",$spt)
		->where("pst_id",$pst)
		->get($this->tableSpt)->row();
	}
	
	public function recup_specialite($id)
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableSpt.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where($this->tableSpt.".spt_id",$id)
		->get($this->tableSpt)->row();
	}
	
	public function verif_specialite_modif($spt,$pst,$id)
	{
		return $this->db
		->where("spt_sLibelle",$spt)
		->where("pst_id",$pst)
		->where("spt_id !=",$id)
		->get($this->tableSpt)->row();
	}
	
	
	public function ajout_specialite($donnees){
		return $this->db->insert($this->tableSpt,$donnees);
	}
	
	public function maj_specialite($donnees,$id){
		return $this->db->where("spt_id",$id)->update($this->tableSpt,$donnees);
	}
	
	
	/********* fonctions **********************/
	public function liste_fonctions_actifs()
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("fct_iSta",1)
		->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->result();
	}	
	
	public function liste_fonctions_supprimees()
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where("fct_iSta",2)
		->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->result();
	}
	
	public function liste_fonction_poste_actifs($pst)
	{
		return $this->db
		->where("fct_iSta",1)
		->where("pst_id",$pst)
		->order_by("fct_sLibelle","asc")
		->get($this->tableFct)->result();
	}
	
	
	public function verif_fonction($fct,$pst)
	{
		return $this->db
		->where("fct_sLibelle",$fct)
		->where("pst_id",$pst)
		->get($this->tableFct)->row();
	}
	
	public function recup_fonction($id)
	{
		return $this->db
		->join($this->tablePst, $this->tablePst.'.pst_id='.$this->tableFct.'.pst_id','inner')
		->join($this->tableTpe, $this->tableTpe.'.tpe_id='.$this->tablePst.'.tpe_id','inner')
		->where($this->tableFct.".fct_id",$id)
		->get($this->tableFct)->row();
	}
	
	public function verif_fonction_modif($fct,$pst,$id)
	{
		return $this->db
		->where("fct_sLibelle",$fct)
		->where("pst_id",$pst)
		->where("fct_id !=",$id)
		->get($this->tableFct)->row();
	}
	
	
	public function ajout_fonction($donnees){
		return $this->db->insert($this->tableFct,$donnees);
	}
	
	public function maj_fonction($donnees,$id){
		return $this->db->where("fct_id",$id)->update($this->tableFct,$donnees);
	}	
	
	public function modif_structure($donnees,$id){
		return $this->db->where("str_id",$id)->update($this->tableStr,$donnees);
	}
	
	
	/********* Actes médicaux **********************/
	public function liste_acts_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	// public function liste_personnel_non_medical($nb,$pageActuelle)
	// {
		// $articleParPage = $nb;
		// $pageDepart = ($pageActuelle - 1)*$articleParPage;
		
		// return $this->db
		// ->limit($articleParPage, $pageDepart)
		// ->order_by($this->tablePer.".per_id","desc")
		// ->join($this->tableDep, $this->tableDep.".dep_id=".$this->tablePer.".dep_id", "inner")
		// ->join($this->tablePst, $this->tablePst.".pst_id=".$this->tablePer.".pst_id", "inner")
		// ->join($this->tableSpt, $this->tableSpt.".spt_id=".$this->tablePer.".spt_id", "inner")
		// ->join($this->tableTpe, $this->tableTpe.".tpe_id=".$this->tablePst.".tpe_id", "inner")
		// ->where($this->tablePer.".per_iSta !=",2)
		// ->where($this->tablePst.".tpe_id",2)->get($this->tablePer)->result();
	// }
	
	
	// public function liste_acts_actifs()
	// {
		// return $this->db
		// ->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		// ->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		// ->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		// ->where($this->tableLac.".lac_iSta",1)
		// ->where($this->tableLac.".lac_sSta",NULL)
		// ->order_by($this->tableLac.".lac_sLibelle","asc")
		// ->get($this->tableLac)->result();
	// }	
	
	
	
	public function nb_acte_medical()
	{
	
		return $this->db->select("COUNT(lac_id) as nb")
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		//->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->row();
	}
	
	
	public function liste_actes_medicaux($nb,$pageActuelle)
	{
		$articleParPage = $nb;
		$pageDepart = ($pageActuelle - 1)*$articleParPage;
		
		return $this->db
		->limit($articleParPage, $pageDepart)
		// ->order_by($this->tableLac.".lac_id","asc")
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	
	
	
	
	
	
	
	public function liste_acts_actifs_lotOne()
	{
		return $this->db
		->limit(3)
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	public function liste_acts_actifs_lotTwo()
	{
		return $this->db
		->limit(3)
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_sSta",NULL)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function service_dun_acte($lac)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_id",$lac)
		->get($this->tableLac)->row();
	}	
	
	
	
	public function liste_acts_divers_service_actifs($ser)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_iCout ",0)
		->where($this->tableSer.".ser_id",$ser)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	
	public function liste_acts_service_actifs($ser)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','left')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableLac.".lac_id !=",64)
		->where($this->tableLac.".lac_iCout !=",0)/*Pour ne pas afficher les frais divers au niveau de l'accueil*/
		// ->where($this->tableLac.".lac_id !=",80)
		->where($this->tableSer.".ser_id",$ser)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	

	// Permet de retenir que la consultation chirurgicale de tous les actes chirurgicaux
	public function listeActsServiceActifs($ser)
	{
		return $this->db
			->join($this->tableUni, $this->tableUni . '.uni_id=' . $this->tableLac . '.uni_id', 'inner')
			->join($this->tableSer, $this->tableSer . '.ser_id=' . $this->tableUni . '.ser_id', 'inner')
			->join($this->tableTya, $this->tableTya.'.tya_id='.$this->tableLac.'.tya_id','inner')
			->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
			->where($this->tableLac . ".lac_iSta", 1)
			->not_like($this->tableLac . ".lac_sLibelle", 'Salle')
			->where($this->tableSer . ".ser_id", $ser)
			->order_by($this->tableLac . ".lac_sLibelle", "asc")
			->get($this->tableLac)->result();
	}
	
	public function liste_acts_services_actifs($ser)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableSer.".ser_id",$ser)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}	
	
	
	public function liste_unite_acte($acte)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableDep, $this->tableDep.'.dep_id='.$this->tableSer.'.dep_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_id",$acte)
		->get($this->tableLac)->row();
	}	
	
	public function liste_prescription($fonc)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableFlt.".flt_id",$fonc)
		->get($this->tableLac)->result();
	}	
	
	public function liste_prescription_exploration($valeur1,$valeur2)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableUni.".uni_id='$valeur1' OR ".$this->tableUni.".uni_id = '$valeur2'")
		->get($this->tableLac)->result();
	}	
	
	public function liste_acts_supprimees()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where("lac_iSta",2)
		->order_by("lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	
	public function verif_act($act,$uni)
	{
		return $this->db
		->where("lac_sLibelle",$act)
		->where("uni_id",$uni)
		->get($this->tableLac)->row();
	}
	
	public function recup_act($id)
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->where($this->tableLac.".lac_id",$id)
		->get($this->tableLac)->row();
	}

	
	public function recup_act_hospitalisation($id,$nom)
	{
		return $this->db
		->where($this->tableLac.".lac_sLibelle",$nom)
		->where($this->tableLac.".uni_id",$id)
		->get($this->tableLac)->row();
	}

	
	public function verif_act_modif($act,$uni,$id)
	{
		return $this->db
		->where("lac_sLibelle",$act)
		->where("uni_id",$uni)
		->where("lac_id !=",$id)
		->get($this->tableLac)->row();
	}
	
	
	public function ajout_act($donnees){
		return $this->db->insert($this->tableLac,$donnees);
	}
	
	public function maj_act($donnees,$id){
		return $this->db->where("lac_id",$id)->update($this->tableLac,$donnees);
	}
	
	
	
	/**** Catégorie produit*****/

	public function liste_categorie_produit_actifs()
	{
		return $this->db
		->where("cat_iSta",1)
		->order_by("cat_id","desc")
		->get($this->tableCat)->result();
	}	
		
	
	public function liste_categories_produits_supprimes()
	{
		return $this->db
		->where("cat_iSta",2)
		->order_by("cat_sLibelle","asc")
		->get($this->tableCat)->result();
	}
	
	
	public function verif_categorie_produit($cat)
	{
		return $this->db
		->where("cat_sLibelle",$cat)
		->get($this->tableCat)->row();
	}
	
	public function recup_categorie_produit($id)
	{
		return $this->db
		->where("cat_id",$id)
		->get($this->tableCat)->row();
	}
	
	public function verif_categorie_produit_modif($cat,$id)
	{
		return $this->db
		->where("cat_sLibelle",$cat)
		->where("cat_id !=",$id)
		->get($this->tableCat)->row();
	}	
	
	public function ajout_categorie_produit($donnees){
		return $this->db->insert($this->tableCat,$donnees);
	}
	
	public function maj_categorie_produit($donnees,$id){
		return $this->db->where("cat_id",$id)->update($this->tableCat,$donnees);
	}	
	
	
	/**** famille produit*****/
	
	public function liste_famille_produit_actifs()
	{
		return $this->db
		->where("fam_iSta",1)
		->order_by("fam_id","desc")
		->get($this->tableFam)->result();
	}
	
	public function liste_familles_produits_supprimes()
	{
		return $this->db
		->where("fam_iSta",2)
		->order_by("fam_sLibelle","asc")
		->get($this->tableFam)->result();
	}
	
	
	public function verif_famille_produit($fam)
	{
		return $this->db
		->where("fam_sLibelle",$fam)
		->get($this->tableFam)->row();
	}
	
	public function recup_famille_produit($id)
	{
		return $this->db
		->where("fam_id",$id)
		->get($this->tableFam)->row();
	}
	
	public function verif_famille_produit_modif($fam,$id)
	{
		return $this->db
		->where("fam_sLibelle",$fam)
		->where("fam_id !=",$id)
		->get($this->tableFam)->row();
	}	
	
	public function ajout_famille_produit($donnees){
		return $this->db->insert($this->tableFam,$donnees);
	}
	
	public function maj_famille_produit($donnees,$id){
		return $this->db->where("fam_id",$id)->update($this->tableFam,$donnees);
	}
	
	
	
	/**** forme produit*****/
	
	public function liste_forme_produit_actifs()
	{
		return $this->db
		->where("for_iSta",1)
		->order_by("for_id","desc")
		->get($this->tableFor)->result();
	}
	
	public function liste_formes_produits_supprimes()
	{
		return $this->db
		->where("for_iSta",2)
		->order_by("for_sLibelle","asc")
		->get($this->tableFor)->result();
	}
	
	
	public function verif_forme_produit($for)
	{
		return $this->db
		->where("for_sLibelle",$for)
		->get($this->tableFor)->row();
	}
	
	public function recup_forme_produit($id)
	{
		return $this->db
		->where("for_id",$id)
		->get($this->tableFor)->row();
	}
	
	public function verif_forme_produit_modif($for,$id)
	{
		return $this->db
		->where("for_sLibelle",$for)
		->where("for_id !=",$id)
		->get($this->tableFor)->row();
	}	
	
	public function ajout_forme_produit($donnees){
		return $this->db->insert($this->tableFor,$donnees);
	}
	
	public function maj_forme_produit($donnees,$id){
		return $this->db->where("for_id",$id)->update($this->tableFor,$donnees);
	}	
	
	
	/**** type fournisseur*****/
	
	public function liste_type_fournisseur_actifs()
	{
		return $this->db
		->where("tfr_iSta",1)
		->order_by("tfr_id","desc")
		->get($this->tableTfr)->result();
	}
	
	public function liste_types_fournisseurs_supprimes()
	{
		return $this->db
		->where("tfr_iSta",2)
		->order_by("tfr_sLibelle","asc")
		->get($this->tableTfr)->result();
	}
	
	
	public function verif_type_fournisseur($tfr)
	{
		return $this->db
		->where("tfr_sLibelle",$tfr)
		->get($this->tableTfr)->row();
	}
	
	public function recup_type_fournisseur($id)
	{
		return $this->db
		->where("tfr_id",$id)
		->get($this->tableTfr)->row();
	}
	
	public function verif_type_fournisseur_modif($tfr,$id)
	{
		return $this->db
		->where("tfr_sLibelle",$tfr)
		->where("tfr_id !=",$id)
		->get($this->tableTfr)->row();
	}	
	
	public function ajout_type_fournisseur($donnees){
		return $this->db->insert($this->tableTfr,$donnees);
	}
	
	public function maj_type_fournisseur($donnees,$id){
		return $this->db->where("tfr_id",$id)->update($this->tableTfr,$donnees);
	}
	
	
	/**** salle *****/
	
	public function liste_salle_actifs()
	{
		return $this->db
		->where("sal_iSta",1)
		->order_by("sal_id","desc")
		->get($this->tableSal)->result();
	}
	
	public function liste_motif_fin_hospitalisation()
	{
		return $this->db
		->where("mfh_iSta",1)
		->order_by("mfh_id","desc")
		->get($this->tableMfh)->result();
	}
	
	public function liste_salle_supprimes()
	{
		return $this->db
		->where("sal_iSta",2)
		->order_by("sal_sLibelle","asc")
		->get($this->tableSal)->result();
	}
	
	
	public function verif_salle($sal)
	{
		return $this->db
		->where("sal_sLibelle",$sal)
		->get($this->tableSal)->row();
	}
	
	public function verif_Motif_Fin_Hos($sal)
	{
		return $this->db
		->where("mfh_sLibelle",$sal)
		->get($this->tableMfh)->row();
	}
	
	public function recup_salle($id)
	{
		return $this->db
		->where("sal_id",$id)
		->get($this->tableSal)->row();
	}
	
	public function recup_motif_fin_hospitalisation($id)
	{
		return $this->db
		->where("mfh_id",$id)
		->get($this->tableMfh)->row();
	}
	
	public function verif_salle_modif($sal,$id)
	{
		return $this->db
		->where("sal_sLibelle",$sal)
		->where("sal_id !=",$id)
		->get($this->tableSal)->row();
	}	
	
	public function ajout_Motif_Fin_Hos($donnees){
		return $this->db->insert($this->tableMfh,$donnees);
	}
	
	public function ajout_salle($donnees){
		return $this->db->insert($this->tableSal,$donnees);
	}
	
	public function maj_salle($donnees,$id){
		return $this->db->where("sal_id",$id)->update($this->tableSal,$donnees);
	}
	
	public function maj_motif_fin_hospitalisation($donnees,$id){
		return $this->db->where("mfh_id",$id)->update($this->tableMfh,$donnees);
	}
	
	
	
	/**** Bloc opératoire *****/
	
	public function liste_bloc_actifs()
	{
		return $this->db
		->join($this->tableUni." uni","uni.uni_id=bop.uni_id","inner")
		->join($this->tableSer." ser","ser.ser_id=uni.ser_id","inner")
		->where("bop.bop_iSta",1)
		->order_by("bop.bop_sLibelle","asc")
		->get($this->tableBop." bop")->result();
	}
	
	public function liste_bloc_supprimes()
	{
		return $this->db
		->join($this->tableUni." uni","uni.uni_id=bop.uni_id","inner")
		->join($this->tableSer." ser","ser.ser_id=uni.ser_id","inner")
		->where("bop.bop_iSta",2)
		->order_by("bop.bop_sLibelle","asc")
		->get($this->tableBop." bop")->result();
	}
	
	
	public function verif_bloc($bop)
	{
		return $this->db
		->where("bop_sLibelle",$bop)
		->get($this->tableBop)->row();
	}
	
	public function recup_bloc($id)
	{
		return $this->db
		->where("bop_id",$id)
		->get($this->tableBop)->row();
	}
	
	public function verif_bloc_modif($bop,$id)
	{
		return $this->db
		->where("bop_sLibelle",$bop)
		->where("bop_id !=",$id)
		->get($this->tableBop)->row();
	}	
	
	public function ajout_bloc($donnees){
		 $this->db->insert($this->tableBop,$donnees);
		 $recup = $this->db->order_by("bop_id","desc")->get($this->tableBop)->row();
		 return $recup->bop_id;
	}
	
	public function maj_bloc($donnees,$id){
		return $this->db->where("bop_id",$id)->update($this->tableBop,$donnees);
	}
	
	/**** salle d'opération *****/
	
	public function liste_salle_operation_actifs()
	{
		return $this->db
		->where("sop_iSta",1)
		->order_by("sop_sLibelle","asc")
		->get($this->tableSop)->result();
	}
	
	public function liste_salle_operation_supprimes()
	{
		return $this->db
		->where("sop_iSta",2)
		->order_by("sop_sLibelle","asc")
		->get($this->tableSop)->result();
	}
	
	
	public function verif_salle_operation($sop)
	{
		return $this->db
		->where("sop_sLibelle",$sop)
		->get($this->tableSop)->row();
	}
	
	public function liste_salle_bloc($bop)
	{
		return $this->db
		->where("bop_id",$bop)
		->get($this->tableSop)->result();
	}
	
	public function recup_salle_operation($id)
	{
		return $this->db
		->where("sop_id",$id)
		->get($this->tableSop)->row();
	}
	
	public function verif_salle_operation_modif($sop,$id)
	{
		return $this->db
		->where("sop_sLibelle",$sop)
		->where("sop_id !=",$id)
		->get($this->tableSop)->row();
	}	
	
	public function ajout_salle_operation($donnees){
		return $this->db->insert($this->tableSop,$donnees);
	}
	
	public function maj_salle_operation($donnees,$id){
		return $this->db->where("sop_id",$id)->update($this->tableSop,$donnees);
	}
	
	
	/**** Antécedents personnel *****/
	
	public function liste_antecedent_personnel_actifs()
	{
		return $this->db
		->where("lan_iSta",1)
		->order_by("lan_id","desc")
		->get($this->tableLan)->result();
	}
	
	public function liste_antecedent_personnel_supprimes()
	{
		return $this->db
		->where("lan_iSta",2)
		->order_by("lan_sLibelle","asc")
		->get($this->tableLan)->result();
	}
	
	
	public function verif_antecedent_personnel($sal)
	{
		return $this->db
		->where("lan_sLibelle",$sal)
		->get($this->tableLan)->row();
	}
	
	public function recup_antecedent_personnel($id)
	{
		return $this->db
		->where("lan_id",$id)
		->get($this->tableLan)->row();
	}
	
	public function verif_antecedent_personnel_modif($sal,$id)
	{
		return $this->db
		->where("lan_sLibelle",$sal)
		->where("lan_id !=",$id)
		->get($this->tableLan)->row();
	}	
	
	public function ajout_antecedent_personnel($donnees){
		return $this->db->insert($this->tableLan,$donnees);
	}
	
	public function maj_antecedent_personnel($donnees,$id){
		return $this->db->where("lan_id",$id)->update($this->tableLan,$donnees);
	}
	
	
	/**** Antécedents familiaux *****/
	
	public function liste_antecedent_familial_actifs()
	{
		return $this->db
		->where("laf_iSta",1)
		->order_by("laf_id","desc")
		->get($this->tableLaf)->result();
	}
	
	public function liste_antecedent_familial_supprimes()
	{
		return $this->db
		->where("laf_iSta",2)
		->order_by("laf_sLibelle","asc")
		->get($this->tableLaf)->result();
	}
	
	
	public function verif_antecedent_familial($sal)
	{
		return $this->db
		->where("laf_sLibelle",$sal)
		->get($this->tableLaf)->row();
	}
	
	public function recup_antecedent_familial($id)
	{
		return $this->db
		->where("laf_id",$id)
		->get($this->tableLaf)->row();
	}
	
	public function verif_antecedent_familial_modif($sal,$id)
	{
		return $this->db
		->where("laf_sLibelle",$sal)
		->where("laf_id !=",$id)
		->get($this->tableLaf)->row();
	}	
	
	public function ajout_antecedent_familial($donnees){
		return $this->db->insert($this->tableLaf,$donnees);
	}
	
	public function maj_antecedent_familial($donnees,$id){
		return $this->db->where("laf_id",$id)->update($this->tableLaf,$donnees);
	}
	
	/**** Allergies connues *****/
	
	public function liste_allergie_actifs()
	{
		return $this->db
		->where("lia_iSta",1)
		->order_by("lia_id","desc")
		->get($this->tableLia)->result();
	}
	
	public function liste_allergie_supprimes()
	{
		return $this->db
		->where("lia_iSta",2)
		->order_by("lia_sLibelle","asc")
		->get($this->tableLia)->result();
	}
	
	
	public function verif_allergie($sal)
	{
		return $this->db
		->where("lia_sLibelle",$sal)
		->get($this->tableLia)->row();
	}
	
	public function recup_allergie($id)
	{
		return $this->db
		->where("lia_id",$id)
		->get($this->tableLia)->row();
	}
	
	public function verif_allergie_modif($sal,$id)
	{
		return $this->db
		->where("lia_sLibelle",$sal)
		->where("lia_id !=",$id)
		->get($this->tableLia)->row();
	}	
	
	public function ajout_allergie($donnees){
		return $this->db->insert($this->tableLia,$donnees);
	}
	
	public function maj_allergie($donnees,$id){
		return $this->db->where("lia_id",$id)->update($this->tableLia,$donnees);
	}
	
	
	/**** Activité professionnelle *****/
	
	public function liste_activite_professionnelle_actifs()
	{
		return $this->db
		->where("lap_iSta",1)
		->order_by("lap_sLibelle","asc")
		->get($this->tableLap)->result();
	}
	
	public function liste_motifs_reduction()
	{
		return $this->db
		->where("mod_iSta",1)
		->order_by("mod_iTaux","asc")
		->get($this->tableMod)->result();
	}
	
	public function activite_professionnelle_supprimes()
	{
		return $this->db
		->where("lap_iSta",2)
		->order_by("lap_sLibelle","asc")
		->get($this->tableLap)->result();
	}
	
	
	public function verif_activite_professionnelle($sal)
	{
		return $this->db
		->where("lap_sLibelle",$sal)
		->get($this->tableLap)->row();
	}
	
	public function verif_motif_reduction($mod)
	{
		return $this->db
		->where("mod_sLibelle",$mod)
		->get($this->tableMod)->row();
	}
	
	public function ajout_motif_reduction($donnees){
		return $this->db->insert($this->tableMod,$donnees);
	}
	
	public function maj_motif_reduction($donnees,$id){
		return $this->db->where("mod_id",$id)->update($this->tableMod,$donnees);
	}
	
	public function verif_motif_reduction_modif($mod,$id)
	{
		return $this->db
		->where("mod_sLibelle",$mod)
		->where("mod_id !=",$id)
		->get($this->tableMod)->row();
	}	
	
	public function maj_motif_reduction_modif($donnees,$id){
		return $this->db->where("mod_id",$id)->update($this->tableMod,$donnees);
	}
	
	public function recup_activite_professionnelle($id)
	{
		return $this->db
		->where("lap_id",$id)
		->get($this->tableLap)->row();
	}
	
	public function verif_activite_professionnelle_modif($sal,$id)
	{
		return $this->db
		->where("lap_sLibelle",$sal)
		->where("lap_id !=",$id)
		->get($this->tableLap)->row();
	}	
	
	public function ajout_activite_professionnelle($donnees){
		return $this->db->insert($this->tableLap,$donnees);
	}
	
	public function maj_activite_professionnelle($donnees,$id){
		return $this->db->where("lap_id",$id)->update($this->tableLap,$donnees);
	}
	
	
	
	/**** armoire *****/
	
	public function liste_rapport_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableTir.'.uni_id','inner')
		->where("tir_iSta",1)
		->order_by($this->tableTir.".tir_sLibelle","asc")
		->get($this->tableTir)->result();
	}
		
	public function liste_armoire_actifs()
	{
		return $this->db
		->join($this->tableSal, $this->tableSal.'.sal_id='.$this->tableArm.'.sal_id','inner')
		->where("arm_iSta",1)
		->order_by($this->tableArm.".arm_sLibelle","asc")
		->get($this->tableArm)->result();
	}
	
	public function liste_armoire_supprimes()
	{
		return $this->db
		->join($this->tableSal, $this->tableSal.'.sal_id='.$this->tableArm.'.sal_id','inner')
		->where("arm_iSta",2)
		->order_by($this->tableArm.".arm_sLibelle","asc")
		->get($this->tableArm)->result();
	}	
	
	public function liste_fournisseurs_supprimes()
	{
		return $this->db
		->where("frs_iSta",2)
		->get($this->tableFrs)->result();
	}
	
	
	public function liste_armoire_salle($sal)
	{
		return $this->db
		->join($this->tableSal, $this->tableSal.'.sal_id='.$this->tableArm.'.sal_id','inner')
		->where($this->tableArm.".arm_iSta",1)
		->where($this->tableArm.".sal_id",$sal)
		->order_by($this->tableArm.".arm_sLibelle","asc")
		->get($this->tableArm)->result();
	}
	
	
	public function liste_ligne_armoire($arm)
	{
		return $this->db
		->where("arm_id",$arm)
		->get($this->tableLig)->result();
	}	
	
	public function liste_colonne_armoire($arm)
	{
		return $this->db
		->where("arm_id",$arm)
		->get($this->tableCol)->result();
	}
	
	public function liste_cellule_armoire($arm)
	{
		return $this->db
		->where("arm_id",$arm)
		->get($this->tableCel)->result();
	}
	
	
	public function verif_armoire($arm,$sal)
	{
		return $this->db
		->where("arm_sLibelle",$arm)
		->where("sal_id",$sal)
		->get($this->tableArm)->row();
	}
	
	public function recup_armoire($id)
	{
		return $this->db
		->where("arm_id",$id)
		->get($this->tableArm)->row();
	}	
	
	public function recup_fournisseur($id)
	{
		return $this->db
		->where("frs_id",$id)
		->get($this->tableFrs)->row();
	}
	
	public function verif_armoire_modif($arm,$sal,$id)
	{
		return $this->db
		->where("arm_sLibelle",$arm)
		->where("sal_id",$sal)
		->where("arm_id !=",$id)
		->get($this->tableArm)->row();
	}	
	
	public function ajout_armoire($donnees){
		$this->db->insert($this->tableArm,$donnees);
		return $this->db->order_by("arm_id","desc")->get($this->tableArm)->row();
	}
	
	public function ajout_ligne($donnees){
		$this->db->insert($this->tableLig,$donnees);
		$recup = $this->db->order_by("lig_id","desc")->get($this->tableLig)->row();
		return $recup->lig_sLibelle;
	}
	
	public function ajout_colonne($donnees){
		$this->db->insert($this->tableCol,$donnees);
		$recup = $this->db->order_by("col_id","desc")->get($this->tableCol)->row();
		return $recup->col_sLibelle;
	}
	public function ajout_cellule($donnees){
		$this->db->insert($this->tableCel,$donnees);
	}
	
	public function maj_armoire($donnees,$id){
		return $this->db->where("arm_id",$id)->update($this->tableArm,$donnees);
	}	
	
	public function maj_fournisseur($donnees,$id){
		return $this->db->where("frs_id",$id)->update($this->tableFrs,$donnees);
	}
	
	public function maj_lit($donnees,$id){
		return $this->db->where("lit_id",$id)->update($this->tableLit,$donnees);
	}
	
	public function maj_entree_stock_reactif($donnees,$id){
		return $this->db->where("ere_id",$id)->update($this->tableEre,$donnees);
	}
	
	public function maj_sortie($donnees,$id){
		return $this->db->where("res_id",$id)->update($this->tableSor,$donnees);
	}
	
	public function delete_ligne($id){
		return $this->db->where("arm_id",$id)->delete($this->tableLig);
	}	
	
	public function delete_colonne($id){
		return $this->db->where("arm_id",$id)->delete($this->tableCol);
	}	
	
	public function delete_cellule($id){
		return $this->db->where("arm_id",$id)->delete($this->tableCel);
	}
	
	public function liste_pays_actifs()
	{
		return $this->db
		->where("pay_iSta",1)
		->order_by("pay_sLib","asc")
		->get($this->tablePay)->result();
	}	
	
	public function liste_ville_actifs($id)
	{
		return $this->db
		->where("pay_id",$id)
		->order_by("vil_sLib","asc")
		->get($this->tableVil)->result();
	}		
	
	public function type_fournisseur_courant($id)
	{
		return $this->db
		->where("tfr_id",$id)
		->get($this->tableTfr)->row();
	}	
	
	public function liste_cellule_armoire_actifs($id)
	{
		return $this->db
		->where("arm_id",$id)
		->order_by("cel_sLibelle","asc") 
		->get($this->tableCel)->result();
	}		
	
	
	public function liste_armoire_salle_actifs($id)
	{
		return $this->db
		->where("arm_iSta",1)
		->where("sal_id",$id)
		->order_by("arm_sLibelle","asc")
		->get($this->tableArm)->result();
	}		
	
	
	public function liste_ville_pays_actifs($id)
	{
		return $this->db
		->where("vil_iSta",1)
		->where("pay_id",$id)
		->order_by("vil_sLib","asc")
		->get($this->tableVil)->result();
	}
	
	
	public function liste_acts_chirurgie_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableFlt.".flt_id",9)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}

	public function liste_acts_radiologie_actifs()
	{
		return $this->db
		->join($this->tableUni, $this->tableUni.'.uni_id='.$this->tableLac.'.uni_id','inner')
		->join($this->tableSer, $this->tableSer.'.ser_id='.$this->tableUni.'.ser_id','inner')
		->join($this->tableFlt, $this->tableFlt.'.flt_id='.$this->tableSer.'.flt_id','inner')
		->where($this->tableLac.".lac_iSta",1)
		->where($this->tableFlt.".flt_id",6)
		->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableLac)->result();
	}
	
	public function nb_examen_imagerie($id,$dateDepart,$dateFinal)
	{
		return $this->db
		->select('COUNT('.$this->tableImg.'.img_id) AS nb ')
		->join($this->tableAci, $this->tableAci.'.img_id='.$this->tableImg.'.img_id','inner')
		->join($this->tableAcm, $this->tableAcm.'.acm_id='.$this->tableAci.'.acm_id','inner')
		->where($this->tableAcm.".lac_id",$id)
		->where($this->tableImg.".img_dDate >=",$dateDepart)
		->where($this->tableImg.".img_dDate <=",$dateFinal)
		//->where($this->tableSer.".ser_id",25)
		//->order_by($this->tableLac.".lac_sLibelle","asc")
		->get($this->tableImg)->row();
	}
	
}
