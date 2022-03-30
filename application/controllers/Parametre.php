<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametre extends CI_Controller {

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
		$this->load->view('app/parametre/page-parametre');
	}
	
	
		
	public function rubrique()
	{
		$this->load->view('app/parametre/page-rubrique');
	}	
	//RABY

	public function classification_cim_10()
	{
		$this->load->view('app/parametre/page-classification-cim-10');
	}
	public function chapitre()
	{
		$this->load->view('app/parametre/page-chapitre');
	}
	public function classe()
	{
		$this->load->view('app/parametre/page-classe');
	}
	public function sous_maladie_1()
	{
		$this->load->view('app/parametre/page-sous-maladie-niveau1');
	}
	public function sous_maladie_2()
	{
		$this->load->view('app/parametre/page-sous-maladie-niveau2');
	}

	public function prescripteur()
	{
		$this->load->view('app/parametre/page-prescripteur');
	}
	
	public function quotes_parts()
	{
		$this->load->view('app/parametre/page-quotes-parts');
	}
	//RABY	
	public function typeacte()
	{
		$this->load->view('app/parametre/page-typeacte');
	}

	public function source()
	{
		$this->load->view('app/parametre/page-source');
	}
	public function vaccin()
	{
		$this->load->view('app/parametre/page-vaccin');
	}
	public function courbe()
	{
		$this->load->view('app/parametre/page-courbe-croissance');
	}
	
	
	public function antecedent_obs()
	{
		$this->load->view('app/parametre/page-antecedent-obs');
	}

	//RABY	
	public function fonctionnalite()
	{
		$this->load->view('app/parametre/page-fonctionnalite');
	}
	
	
	
	public function locataire()
	{
		$this->load->view('app/parametre/page-liste-locataire');
	}	
	
	public function actes_divers()
	{
		$this->load->view('app/parametre/page-act-divers');
	}
	
		
	public function nombre_complet_personnel()
	{
		$this->load->view('app/parametre/page-liste-personnel-complet');
	}
	
	
	public function editer($id)
	{
		$this->load->view('app/parametre/page-editer-personnel',array("id"=>$id));
	}
	
	
	public function new_recette()
	{
		$this->load->view('app/parametre/page-new-recette.php');
	}	
	
	public function new_sous_compte_fonctionnement()
	{
		$this->load->view('app/parametre/page-sous-compte-fonctionnement');
	}
	
	public function sous_libelle_compte()
	{
		$this->load->view('app/parametre/page-liste-libelle-sous-compte');
	}	
	
	public function new_compte_fonctionnement()
	{
		$this->load->view('app/parametre/page-compte-fonctionnement');
	}		
	public function new_sous_compte()
	{
		$this->load->view('app/parametre/page-liste-sous-compte');
	}	
	
	public function new_compte()
	{
		$this->load->view('app/parametre/page-liste-compte');
	}	
	
	public function new_banque()
	{
		$this->load->view('app/parametre/page-liste-banque');
	}	
	
	public function convention_patient()
	{
		$this->load->view('app/parametre/page-convention-entreprise');
	}
	
	
	public function specification_maladie()
	{
		$this->load->view('app/parametre/page-specification-maladie');
	}	
	
	public function famille_maladie()
	{
		$this->load->view('app/parametre/page-famille-maladie');
	}	
	
	public function maladie()
	{
		$this->load->view('app/parametre/page-maladie');
	}
	
	
	public function appareil()
	{
		$this->load->view('app/parametre/page-appareil');
	}	
	
	public function nouveau_reactif()
	{
		$this->load->view('app/parametre/page-nouveau-reactif');
	}
	
	
	
	public function type_courrier()
	{
		$this->load->view('app/parametre/page-type-courrier');
	}	
	

	public function accessoire()
	{
		$this->load->view('app/parametre/page-accessoire');
	}	
	
	public function categorie_produit()
	{
		$this->load->view('app/parametre/page-categorie-produit');
	}		
	
	public function element_analyse()
	{
		$this->load->view('app/parametre/page-element-analyse');
	}		
	
	public function type_examen()
	{
		$this->load->view('app/parametre/page-type-examen');
	}	
	
	public function rapport()
	{
		$this->load->view('app/parametre/page-rapport');
	}	
	
	public function famille_produit()
	{
		$this->load->view('app/parametre/page-famille-produit');
	}	
	
	public function forme_produit()
	{
		$this->load->view('app/parametre/page-forme-produit');
	}	
	
	public function type_fournisseur()
	{
		$this->load->view('app/parametre/page-type-fournisseur');
	}	
	
	public function salle()
	{
		$this->load->view('app/parametre/page-salle');
	}	
	
	public function motif_fin_hospitalisation()
	{
		$this->load->view('app/parametre/page-motifs-fin-hospitalisation');
	}	
	
	public function armoire()
	{
		$this->load->view('app/parametre/page-armoire');
	}		
	
	public function nouvelle_chambre()
	{
		$this->load->view('app/parametre/page-chambre');
	}	
	
	
	public function structure()
	{
		$this->load->view('app/parametre/page-structure');
	}	
	
	public function coordonnees()
	{
		$this->load->view('app/parametre/page-banque');
	}	
	
	public function direction()
	{
		$this->load->view('app/parametre/page-departement');
	}
	
	
	public function service()
	{
		$this->load->view('app/parametre/page-service');
	}
	
	
	public function unite()
	{
		$this->load->view('app/parametre/page-unite');
	}
	
	
	public function domaine()
	{
		$this->load->view('app/parametre/page-domaine');
	}
	
	
	public function specialite()
	{
		$this->load->view('app/parametre/page-specialite');
	}
	
	
	public function poste()
	{
		$this->load->view('app/parametre/page-poste');
	}
	
	
	public function acte_medical()
	{
		$this->load->view('app/parametre/page-act-medical');
	}
	
	
	
	public function activite_professionnelle()
	{
		$this->load->view('app/parametre/page-activite-professionnelle');
	}
	
	public function motifs_reduction()
	{
		$this->load->view('app/parametre/page-motifs-reduction');
	}
	
	
	public function allergie()
	{
		$this->load->view('app/parametre/page-allergie');
	}
	
	public function antecedent_personnel()
	{
		$this->load->view('app/parametre/page-antecedent-personnel');
	}
	
	
	public function antecedent_familial()
	{
		$this->load->view('app/parametre/page-antecedent-familial');
	}
	
	
	public function assureur()
	{
		$this->load->view('app/parametre/page-assureurs');
	}
	
	
	public function type_couverture()
	{
		$this->load->view('app/parametre/page-type-couverture-assurance');
	}
		
	public function bloc_operatoire()
	{
		$this->load->view('app/parametre/page-bloc-operatoire');
	}
		
	
	public function listeChambreUniteDispo()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Choisir la chambre --</option>";	
		}
		else{
			if($data['id']==""){
				echo "<option value=''>-- Choisir la chambre --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_chambre_unite_dispo($data['id']);
				if(empty($res)){
					echo "<option value=''>Cette unité n'a pas de chambre enregistré</option>";	
				}
				else{
					echo "<option value=''>-- Choisir la chambre --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->cha_id."'>".$resultat->cha_sLibelle."</option>";
					}
				}
			}
		}
		
	}
		
	public function listeLitChambreDispo()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Choisir le lit --</option>";	
		}
		else{
			if($data['id']==""){
				echo "<option value=''>-- Choisir le lit --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_lit_chambre_dispo($data['id']);
				if(empty($res)){
					echo "<option value=''>Pas de lit disponible</option>";	
				}
				else{
					echo "<option value=''>-- Choisir le lit --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->lit_id."'>".$resultat->lit_sLibelle."</option>";
					}
				}
			}
		}
		
	}
		
	public function recupSalleOperation()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Choisissez la salle --</option>";	
		}
		else{
			if($data['id']==""){
				echo "<option value=''>-- Choisissez la salle --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_salle_dispo($data['id']);
				if(empty($res)){
					echo "<option value=''>Pas de salle disponible</option>";	
				}
				else{
					echo "<option value=''>-- Choisissez la salle --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->sop_id."'>".$resultat->sop_sLibelle."</option>";
					}
				}
			}
		}
		
	}
		
	
	public function listeServiceDirection()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>----- Choisissez le service * -----</option>";	
		}
		else{
			if($data['idDir']==""){
				echo "<option value=''>----- Choisissez le service * -----</option>";	
			}
			else{
				$tab = explode('-/-', $data['idDir']);

				$res = $this->md_parametre->liste_services_direction_actifs($tab[0]);
				if(empty($res)){
					echo "<option value=''>Cette direction n'a pas de services</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez le service * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->ser_id."-/-".$resultat->ser_sLibelle."'>".$resultat->ser_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listeServiceDirection2()
	{
		$data = $this->input->post();
			
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>----- Choisissez le service * -----</option>";	
		}
		else{
			
			if($data['dir']==""){
				echo "<option value=''>----- Choisissez le service * -----</option>";	
			}
			else{
				$dir = explode("-/-",$data["dir"]);
				// echo "<option value=''>".$data["dir"]."</option>";
				$res = $this->md_parametre->liste_services_direction_actifs($dir[0]);
				if(empty($res)){
					echo "<option value=''>Cette direction n'a pas de services</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez le service * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->ser_id."-/-".$resultat->ser_sLibelle."'>".$resultat->ser_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listePosteType()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>----- Choisissez le domaine * -----</option>";	
		}
		else{
			if($data['tpe']==""){
				echo "<option value=''>----- Choisissez le domaine * -----</option>";	
			}
			else{
				$tpe = explode("-/-",$data["tpe"]);
				$res = $this->md_parametre->liste_domaine_type_actifs($tpe[0]);
				if(empty($res)){
					echo "<option value=''>Ce type de personnel n'a pas de domaine</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez le domaine * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->pst_id."-/-".$resultat->pst_sLibelle."'>".$resultat->pst_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listePosteType2()
	{
		$data = $this->input->post();
			
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>----- Choisissez le domaine * -----</option>";	
		}
		else{
			
			if($data['tpe']==""){
				echo "<option value=''>----- Choisissez le domaine * -----</option>";	
			}
			else{
				$tpe = explode("-/-",$data["tpe"]);
				// echo "<option value=''>".$data["tpe"]."</option>";
				$res = $this->md_parametre->liste_domaine_type_actifs($tpe[0]);
				if(empty($res)){
					echo "<option value=''>Cette direction n'a pas de services</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez le domaine * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->pst_id."-/-".$resultat->pst_sLibelle."'>".$resultat->pst_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listeCelluleArmoire()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Cellule * --</option>";	
		}
		else{
			if($data['idArmoire']==""){
				echo "<option value=''>-- Choisissez une armoire * --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_cellule_armoire_actifs($data['idArmoire']);
				if(empty($res)){
					echo "<option value=''>Cette armoire n'a pas de cellule </option>";	
				}
				else{
					echo "<option value=''>-- Cellule * --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->cel_id."'>".$resultat->cel_sLibelle."</option>";
					}
				}
			}
		}
		
	}	
	
	
	public function listeMedecinSer()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=\"0-/-Aucun\">-- Sélectionner le médecin --</option>";	
		}
		else{
			if($data['idlac']==""){
				echo "<option value=\"0-/-Aucun\">-- Sélectionner le médecin --</option>";	
			}
			else{
			
			$tab = explode('-/-', $data['idlac']);
			
				$ser = $this->md_parametre->service_dun_acte($tab[0]);
				$res = $this->md_personnel->medecin_dun_service($ser->ser_id);
				if(empty($res)){
					echo "<option value='0-/-Aucun'>Ce service n'a pas de médecin </option>";	
				}
				else{
					echo "<option value='0-/-Aucun'>-- Sélectionner le médecin --</option>";
					foreach($res as $l){
						echo "<option value='".$l->per_id ."-/-". $l->per_sNom." ".$l->per_sPrenom."'>".$l->per_sNom." ".$l->per_sPrenom."</option>";
						
					}
				}
			}
		}
		
	}	
	
	public function listeArmoireSalle()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Armoire * --</option>";	
		}
		else{
			if($data['idSalle']==""){
				echo "<option value=''>-- Choisissez une salle * --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_armoire_salle_actifs($data['idSalle']);
				if(empty($res)){
					echo "<option value=''>Cette salle n'a pas d'armoire </option>";	
				}
				else{
					echo "<option value=''>-- Armoire * --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->arm_id."'>".$resultat->arm_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	
	public function listeVillePays()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- ville * --</option>";	
		}
		else{
			if($data['idPays']==""){
				echo "<option value=''>-- Choisissez un pays * --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_ville_pays_actifs($data['idPays']);
				if(empty($res)){
					echo "<option value=''>Ce pays n\'a pas de ville </option>";	
				}
				else{
					echo "<option value=''>-- Ville * --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->vil_id."'>".$resultat->vil_sLib."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listeUniteService()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>----- Choisissez l'unité * -----</option>";	
		}
		else{
			if($data['ser']==""){
				echo "<option value=''>----- Choisissez l'unité * -----</option>";	
			}
			else{
				$tab = explode('-/-', $data['ser']);
				$res = $this->md_parametre->liste_unite_services_actifs($tab[0]);
				if(empty($res)){
					echo "<option value=''>Ce service n'a pas d'unité</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez l'unité * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->uni_id."-/-".$resultat->uni_sLibelle."'>".$resultat->uni_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	public function listeUniteService2()
	{
		$data = $this->input->post();
			
		if(empty($data)){
			echo "<option value=''>----- Choisissez l'unité * -----</option>";	
		}
		else{
			if($data['ser']==""){
				echo "<option value=''>----- Choisissez l'unité * -----</option>";	
			}
			else{
				$ser = explode("-/-",$data["ser"]);
				$res = $this->md_parametre->liste_unite_services_actifs($ser[0]);
				if(empty($res)){
					echo "<option value=''>Ce service n'a pas d'unité</option>";	
				}
				else{
					echo "<option value=''>----- Choisissez l'unité * -----</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->uni_id."-/-".$resultat->uni_sLibelle."'>".$resultat->uni_sLibelle."</option>";
					}
				}
			}
		}	
		
	}
	
	
	public function listeSpecialitePoste()
	{
		$data = $this->input->post();
		// var_dump($data);
		if(empty($data)){
			echo "<option value=''>-- Spécialité * --</option>";	
		}
		else{
			if($data['idPst']==""){
				echo "<option value=''>-- Spécialité * --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_specialites_poste_actifs($data['idPst']);
				if(empty($res)){
					echo "<option value=''>Choisissiez la spécialité du personnel</option>";	
				}
				else{
					echo "<option value=''>-- Spécialité * --</option>";
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->spt_id."'>".$resultat->spt_sLibelle."</option>";
					}
				}
			}
		}
		
	}
	
	
	
	public function listeFonctionPoste()
	{
		$data = $this->input->post();
		if(empty($data)){
			echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
		}
		else{
			if($data['idPst']==""){
				echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
			}
			else{
				$res = $this->md_parametre->liste_fonction_poste_actifs($data['idPst']);
				if(empty($res)){
					echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";		
				}
				else{
					echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->fct_id."'>".$resultat->fct_sLibelle."</option>";
					}
				}
			}
		}
		
	}
		
	public function listeFonctionPoste2()
	{
		$data = $this->input->post();
		if(empty($data)){
			echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
		}
		else{
			if($data['idPst']==""){
				echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
			}
			else{
				$pst = explode("-/-",$data["idPst"]);
				$res = $this->md_parametre->liste_fonction_poste_actifs($pst[2]);
				if(empty($res)){
					echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";		
				}
				else{
					echo "<option value=''>-- Poste occupé au sein de l'hopital * --</option>";	
					foreach($res as $key=>$resultat){
						echo "<option value='".$resultat->fct_id."-/-".$resultat->fct_sLibelle."'>".$resultat->fct_sLibelle."</option>";
					}
				}
			}
		}
		
	}
		
	public function listeUniteActe()
	{
		$data = $this->input->post();

		$tab = explode('-/-', $data['acte']);
		$res = $this->md_parametre->liste_unite_acte($tab[0]);
		$liste = $this->md_personnel->liste_affectation_personnel_unite($res->uni_id); 
		echo $res->ser_sLibelle.'-/-'.$res->uni_sLibelle.'-/-'.$res->uni_id.'-/-'.$res->lac_iCout.'-/-'.$res->ser_id.'-/-'.$res->flt_id; 
		
	}
	
	
	public function recupmodId()
	{
		$data = $this->input->post();
		if(empty($data)){
			echo "";	
		}
		else{
			$res = $this->md_parametre->recup_motif_reduction_taux($data['reduction']);
			echo $res->mod_iTaux;
		}
		
	}	
	
	public function listedetail()
	{
		$data = $this->input->post();
		if(empty($data)){
			echo "";	
		}
		else{
			if($data['acte']==""){
				echo "";	
			}
			else{
				$tab = explode('-/-', $data['acte']);
				$res = $this->md_parametre->liste_unite_acte($tab[0]);
				if(empty($res)){
					echo "";		
				}
				else{
					if($res->lac_iDure > 1){
						$jour = "jours";
					}
					else{
						$jour = "jour";
					}
					echo '<div class="form-group">';
						echo '<label> </label>';
						echo '<div class="form-line">';
							echo "<div class='header'><h2>Coût : <b><span>".number_format($res->lac_iCout,2,",",".")."</span> <span style='font-size:12px'>FCFA</span></b> pour une durée de ".$res->lac_iDure." ".$jour."</h2></div>";
						echo '</div>';
					echo '</div>';
					
				}
			}
		}
		
	}
	
	

	
	
	public function modifStructure()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("patient/nouveau");
			// var_dump($data);
		}
		else{
			if(trim($data["tel2"])==""){
				$data["tel2"] = NULL;
			}
			else{
				$formatTel2 = $this->md_config->formatPhoneCongo(trim($data["tel2"]));
				if($formatTel2){
					$data["tel2"] = $formatTel2;
				}
				else{
					$data["tel2"] = NULL;
				}
			}
			
			if(trim($data["tel3"])==""){
				$data["tel3"] = NULL;
			}
			else{
				$formatTel3 = $this->md_config->formatPhoneCongo(trim($data["tel3"]));
				if($formatTel3){
					$data["tel3"] = $formatTel3;
				}
				else{
					$data["tel3"] = NULL;
				}
			}
			
			if(trim($data["tel4"])==""){
				$data["tel4"] = NULL;
			}
			else{
				$formatTel4 = $this->md_config->formatPhoneCongo(trim($data["tel4"]));
				if($formatTel4){
					$data["tel4"] = $formatTel4;
				}
				else{
					$data["tel4"] = NULL;
				}
			}
			
			
			
			if($_FILES["photo"]["name"]!=""){
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{
							$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
							if(!$verifTaille){
								echo "La taille de l'image ne doit pas dépasser les 150 Ko";
							}
							else{
								$verifEmail = $this->md_config->verifMail(trim($data['email']));
								if($verifEmail == false){
									echo 'Format email incorrect';
								}
								else{
									$config["upload_path"] =  './assets/images/';
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
											$data["photo"]="assets/images/".$image['file_name'];
										}
										else{
											$data["photo"]=$data["photo1"];
										}

										$donnees = array(
											"str_sEnseigne"=>strtoupper(trim($data["structure"])),
											"str_sAdresse"=>$data["adresse"],
											"str_iBp"=>$data["bp"],
											"str_sTel"=>"+242".$formatTel,
											"str_sEmail"=>$data["email"],
											"str_sVille"=>$data["ville"],
											"str_sTel_2"=>$data["tel2"],
											"str_sTel_3"=>$data["tel3"],
											"str_sTel_4"=>$data["tel4"],
											"str_sLogo"=>$data["photo"]
										);
										$modif=$this->md_parametre->modif_structure($donnees, 1);
										if($modif){
											$log = array(
												"log_iSta"=>0,
												"per_id"=>$this->md_config->get_session(),
												"log_sTable"=>"t_structure_str",
												"log_sIcone"=>"modification",
												"log_sAction"=>"a modifié une structure",
												"log_sActionDetail"=>"a modifié les informations de la structure",
												"log_dDate"=>date("Y-m-d H:i:s")
											);
											echo 'ok';
										}
									}
								}
							}
						
						
					}
				}
	
			}
			else{
				if(!is_numeric($data["tel"])){
					echo "Ceci n'est pas un numéro de téléphone. Veuillez entrer SVP un numéro de téléphone";
				}
				else{
					$formatTel = $this->md_config->formatPhoneCongo(trim($data["tel"]));
					if($formatTel == false){
						echo "Ce numéro de téléphone n'est pas valable en république du Congo";
					}
					else{
							$verifTaille = $this->md_config->sizeImage($_FILES["photo"],150);
							if(!$verifTaille){
								echo "La taille de l'image ne doit pas dépasser les 150 Ko";
							}
							else{
								$verifEmail = $this->md_config->verifMail(trim($data['email']));
								if($verifEmail == false){
									echo 'Format email incorrect';
								}
								else{

										$donnees = array(
											"str_sEnseigne"=>strtoupper(trim($data["structure"])),
											"str_sAdresse"=>$data["adresse"],
											"str_iBp"=>$data["bp"],
											"str_sTel"=>"+242".$formatTel,
											"str_sEmail"=>$data["email"],
											"str_sTel_2"=>$data["tel2"],
											"str_sTel_3"=>$data["tel3"],
											"str_sTel_4"=>$data["tel4"],
											"str_sVille"=>$data["ville"]
										);
										$modif=$this->md_parametre->modif_structure($donnees, 1);
										if($modif){
											$log = array(
												"log_iSta"=>0,
												"per_id"=>$this->md_config->get_session(),
												"log_sTable"=>"t_structure_str",
												"log_sIcone"=>"modification",
												"log_sAction"=>"a modifié une structure",
												"log_sActionDetail"=>"a modifié les informations de la structure",
												"log_dDate"=>date("Y-m-d H:i:s")
											);
											echo 'ok';
										}
								}
							}
						
						
					}
				}
	
			}
			
		}
	}
	
	
	
	public function editBanque()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		
		$donnees = array(
			"str_sIban"=>trim($data['iban']),
			"str_iCodeBanque"=>trim($data['code_banque']),
			"str_iCle"=>trim($data['cle']),
			"str_sGuichet"=>trim($data['guichet']),
			"str_sBanque"=>trim($data['banque']),
			"str_iNumeroCompte"=>trim($data['numero'])
		);
		$modif = $this->md_parametre->modif_structure($donnees,1);
		if($modif){
			$log = array(
				"log_iSta"=>0,
				"per_id"=>$this->md_config->get_session(),
				"log_sTable"=>"t_structure_str",
				"log_sIcone"=>"modification",
				"log_sAction"=>"a modifié les coordonnées",
				"log_sActionDetail"=>"a modifié les coordonnées bancaires de l'hôpital",
				"log_dDate"=>date("Y-m-d H:i:s")
			);
			echo 'ok';
		}
	}
		
	
	/*********** Type assurance  ***************************/
	public function ajoutTypeAssurance()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/type_couverture");
		}
		else{
			if(!is_numeric(trim($data['taux']))){
				echo "Saisissez un nombre dans le champs Taux";
			}
			else{
				$verif = $this->md_parametre->verif_type_assurance(ucfirst(trim($data['lib'])),trim($data['taux']));
				if(!$verif){
					$donnees = array(
					"tas_sLibelle"=>ucfirst(trim($data['lib'])),
					"tas_iTaux"=>trim($data['taux']),
					"tas_iSta"=>1
					);
					$tas = $this->md_parametre->ajout_type_assurance($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_type_assurance_tas",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un type d'assurance",
						"log_sActionDetail"=>"a ajouté un nouveau type d'assurance : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				
					if(isset($_POST["lac"])){
						for($i=0;$i<count($data['lac']);$i++){
							$verifCouv = $this->md_parametre->verif_couverture_assurance($tas->tas_id,trim($data['lac'][$i]));
							if(!$verifCouv){
								$donneesCouv = array(
								"tas_id"=>$tas->tas_id,
								"lac_id"=>trim($data['lac'][$i])
								);
								$this->md_parametre->ajout_couverture_assurance($donneesCouv);
							}
						}
					}
					echo "ok";
				}
				else{
					echo "Ce type d'assurance est déjà enregistré. <br>Essayez un autre";
				}
				
			}
		}
	
	}
	
	public function supprimer_type_assurance($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/type_couverture");
		}
		else{
			$donnees = array(
				"tas_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_type_assurance($donnees,$id);
			$type = $this->md_parametre->recup_type_assurance($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_assurance_tas",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un type d'assurance",
					"log_sActionDetail"=>"a supprimé le type d'assurance : <strong style='text-decoration:underline'>".$type->tas_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/type_couverture");
			}
		}
	}
	
	
	public function modifierTypeAssurance()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_type_assurance_modif(ucfirst(trim($data['lib'])),trim($data['taux']),$data['id']);
		if(!$verif){
			$donnees = array(
				"tas_sLibelle"=>ucfirst(trim($data['lib'])),
				"tas_iTaux"=>trim($data['taux'])
			);
			$supprimer = $this->md_parametre->maj_type_assurance($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_assureurs_ass",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un type d'assurance",
					"log_sActionDetail"=>"a modifié le type d'assurance :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".trim($data['taux']);
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Assureurs  ***************************/
	public function ajoutAssureur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/assureur");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_assureur(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"ass_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"ass_iSta"=>1
					);
					$this->md_parametre->ajout_assureur($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_assureurs_ass",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un assureur",
						"log_sActionDetail"=>"a ajouté une agence d'assurance : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_assureur($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/assureur");
		}
		else{
			$donnees = array(
				"ass_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_assureur($donnees,$id);
			$assureur = $this->md_parametre->recup_assureur($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_assureurs_ass",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un assureur",
					"log_sActionDetail"=>"a supprimé l'assureur : <strong style='text-decoration:underline'>".$assureur->ass_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/assureur");
			}
		}
	}
	
	
	public function modifierAssureur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_assureur_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"ass_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_assureur($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_assureurs_ass",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un assureur",
					"log_sActionDetail"=>"a modifié le nom de l'assureur :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Direction  ***************************/
	public function ajoutDepartement()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/departement");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_departement(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"dep_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"dep_iSta"=>1
					);
					$this->md_parametre->ajout_departement($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_departement_dep",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une direction",
						"log_sActionDetail"=>"a ajouté la direction : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_direction($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/departement");
		}
		else{
			$donnees = array(
				"dep_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_direction($donnees,$id);
			$direction = $this->md_parametre->recup_direction($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_departement_dep",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une direction",
					"log_sActionDetail"=>"a supprimé la direction : <strong style='text-decoration:underline'>".$direction->dep_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/direction");
			}
		}
	}
	
	
	public function modifierDirection()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_departement_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"dep_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_direction($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_departement_dep",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une direction",
					"log_sActionDetail"=>"a modifié le nom de la direction :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Service  ***************************/
	public function ajoutService()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/service");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['dep']) AND count($data['flt']);$i++){
				$verif = $this->md_parametre->verif_service(ucfirst(trim($data['lib'][$i])),$data['dep'][$i]);
				if(!$verif){
					if(!$data['flt'][$i]){$data['flt'][$i] =NULL;}
					$donnees = array(
					"ser_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"dep_id"=>$data['dep'][$i],
					"flt_id"=>$data['flt'][$i],
					"ser_iSta"=>1
					);
					$this->md_parametre->ajout_service($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_services_ser",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un service",
						"log_sActionDetail"=>"a ajouté un nouveau service : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_service($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/service");
		}
		else{
			$donnees = array(
				"ser_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_service($donnees,$id);
			$service = $this->md_parametre->recup_service($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_services_ser",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un service",
					"log_sActionDetail"=>"a supprimé le service : <strong style='text-decoration:underline'>".$service->ser_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/service");
			}
		}
	}
	
	
	public function modifierService()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$dep = explode("-/-",$data["dep"]);
		$flt = explode("-/-",$data["flt"]);
		$verif = $this->md_parametre->verif_service_modif(ucfirst(trim($data['lib'])),$dep[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"ser_sLibelle"=>ucfirst(trim($data['lib'])),
				"flt_id"      =>$flt[0],
				"dep_id"      =>$dep[0]
			);
			$supprimer = $this->md_parametre->maj_service($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_services_ser",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un service",
					"log_sActionDetail"=>"a modifié le service :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$dep[1]."-/-".$flt[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	/*********** Chapitre  ***************************/
	public function ajoutChapitre()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/chapitre");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['code']);$i++){
				$verif = $this->md_parametre->verif_chapitre(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"chp_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"chp_sCode"=>$data['code'][$i],
					"chp_iSta"=>1
					);
					$this->md_parametre->ajout_chapitre($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_chapitre_chp",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un chapitre",
						"log_sActionDetail"=>"a ajouté un nouveau chapitre : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_Chapitre($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/chapitre");
		}
		else{
			$donnees = array(
				"chp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_chapitre($donnees,$id);
			$chapitre = $this->md_parametre->recup_chapitre($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_chapitre_chp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un chapitre",
					"log_sActionDetail"=>"a supprimé le chapitre : <strong style='text-decoration:underline'>".$chapitre->chp_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/chapitre");
			}
		}
	}
	
	
	public function modifierChapitre()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_chapitre_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"chp_sLibelle"=>ucfirst(trim($data['lib'])),
				"chp_sCode"      =>ucfirst(trim($data['code']))
			);
			$supprimer = $this->md_parametre->maj_chapitre($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_chapitre_chp",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un chapitre",
					"log_sActionDetail"=>"a modifié le chapitre :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".ucfirst(trim($data['code']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	/*********** Classe  ***************************/
	public function ajoutClasse()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/classe");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['code']);$i++){
				$verif = $this->md_parametre->verif_classe(ucfirst(trim($data['lib'][$i])),ucfirst(trim($data['chap'][$i])));
				if(!$verif){
					$donnees = array(
					"cla_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"cla_sCode"=>$data['code'][$i],
					"chp_id"=>$data['chap'][$i],
					"cla_iSta"=>1
					);
					$this->md_parametre->ajout_classe($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_classe_chp",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un classe",
						"log_sActionDetail"=>"a ajouté une nouvelle classe : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_Classe($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/classe");
		}
		else{
			$donnees = array(
				"cla_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_classe($donnees,$id);
			$chapitre = $this->md_parametre->recup_classe($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_classe_chp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un classe",
					"log_sActionDetail"=>"a supprimé le classe : <strong style='text-decoration:underline'>".$classe->cla_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/classe");
			}
		}
	}
	
	
	public function modifierClasse()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$chap = explode("-/-",$data["chap"]);
		$verif = $this->md_parametre->verif_classe_modif(ucfirst(trim($data['lib'])),$chap[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"cla_sLibelle"=>ucfirst(trim($data['lib'])),
				"chp_id"=>$chap[0],
				"cla_sCode"=>ucfirst(trim($data['code']))
			);
			$supprimer = $this->md_parametre->maj_classe($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_classe_chp",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un classe",
					"log_sActionDetail"=>"a modifié le classe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".ucfirst(trim($data['code']))."-/-".$chap[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	/*********** SousMaladie1  ***************************/
	public function ajoutSousMaladie1()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		//var_dump($data);
		if(empty($data)){
			return redirect("parametre/sous_maladie_1");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['code']) AND count($data['mal']) ;$i++){
				$verif = $this->md_parametre->verif_SousMaladie1(ucfirst(trim($data['lib'][$i])),ucfirst(trim($data['mal'][$i])));
				if(!$verif){
					$donnees = array(
					"sm1_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"sm1_sCode"=>$data['code'][$i],
					"mal_id"=>$data['mal'][$i],
					"sm1_iSta"=>1
					);
					$this->md_parametre->ajout_SousMaladie1($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_sous_maladie_niveau1_sm1",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une sous maladie",
						"log_sActionDetail"=>"a ajouté une nouvelle sous maladie : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_SousMaladie1($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/sous_maladie_1");
		}
		else{
			$donnees = array(
				"sm1_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_SousMaladie1($donnees,$id);
			$SousMaladie1 = $this->md_parametre->recup_SousMaladie1($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_maladie_niveau1_sm1",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un classe",
					"log_sActionDetail"=>"a supprimé le classe : <strong style='text-decoration:underline'>".$SousMaladie1->sm1_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/sous_maladie_1");
			}
		}
	}
	
	
	public function modifierSousMaladie1()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$mal = explode("-/-",$data["mal"]);
		$verif = $this->md_parametre->verif_SousMaladie1_modif(ucfirst(trim($data['lib'])),$mal[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"sm1_sLibelle"=>ucfirst(trim($data['lib'])),
				"mal_id"=>$mal[0],
				"sm1_sCode"=>ucfirst(trim($data['code']))
			);
			$supprimer = $this->md_parametre->maj_SousMaladie1($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_maladie_niveau1_sm1",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un classe",
					"log_sActionDetail"=>"a modifié le classe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".ucfirst(trim($data['code']))."-/-".$mal[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	public function ajoutSousMaladie2()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		//var_dump($data);
		if(empty($data)){
			return redirect("parametre/sous_maladie_2");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['code']) AND count($data['mal']) ;$i++){
				$verif = $this->md_parametre->verif_SousMaladie2(ucfirst(trim($data['lib'][$i])),ucfirst(trim($data['mal'][$i])));
				if(!$verif){
					$donnees = array(
					"sm2_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"sm2_sCode"=>$data['code'][$i],
					"sm1_id"=>$data['mal'][$i],
					"sm2_iSta"=>1
					);
					$this->md_parametre->ajout_SousMaladie2($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_sous_maladie_niveau2_sm2",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une sous maladie",
						"log_sActionDetail"=>"a ajouté une nouvelle sous maladie : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_SousMaladie2($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/sous_maladie_2");
		}
		else{
			$donnees = array(
				"sm2_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_SousMaladie2($donnees,$id);
			$SousMaladie2 = $this->md_parametre->recup_SousMaladie2($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_maladie_niveau2_sm2",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un classe",
					"log_sActionDetail"=>"a supprimé le classe : <strong style='text-decoration:underline'>".$SousMaladie2->sm2_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/sous_maladie_2");
			}
		}
	}
	
	
	public function modifierSousMaladie2()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$mal = explode("-/-",$data["mal"]);
		$verif = $this->md_parametre->verif_SousMaladie2_modif(ucfirst(trim($data['lib'])),$mal[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"sm2_sLibelle"=>ucfirst(trim($data['lib'])),
				"sm1_id"=>$mal[0],
				"sm2_sCode"=>ucfirst(trim($data['code']))
			);
			$supprimer = $this->md_parametre->maj_SousMaladie2($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_maladie_niveau2_sm2",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un classe",
					"log_sActionDetail"=>"a modifié le classe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".ucfirst(trim($data['code']))."-/-".$mal[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** antécédent personnel  ***************************/
	public function ajoutAntecedentPersonnel()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/antecedent_personnel");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_antecedent_personnel(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"lan_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"lan_iSta"=>1
					);
					$this->md_parametre->ajout_antecedent_personnel($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_antecedants_lan",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un nouveau antécédent",
						"log_sActionDetail"=>"a ajouté un nouveau antécédent : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_antecedent_personnel($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/antecedent_personnel");
		}
		else{
			$donnees = array(
				"lan_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_antecedent_personnel($donnees,$id);
			$antededent = $this->md_parametre->recup_antecedent_personnel($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_antecedants_lan",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un antécédent personnel",
					"log_sActionDetail"=>"a supprimé l'antécédent : <strong style='text-decoration:underline'>".$antecedent->lan_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/antecedent_personnel");
			}
		}
	}
	
	
	public function modifierAntecedentPersonnel()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_antecedent_personnel_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"lan_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_antecedent_personnel($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_antecedants_lan",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un antécédent personnel",
					"log_sActionDetail"=>"a modifié l'antécédent personnel :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	/*********** antécédent familial  ***************************/
	public function ajoutAntecedentFamilial()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/antecedent_familial");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_antecedent_familial(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"laf_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"laf_iSta"=>1
					);
					$this->md_parametre->ajout_antecedent_familial($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_antecedents_familiaux_laf",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un nouveau antécédent",
						"log_sActionDetail"=>"a ajouté un nouveau antécédent : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_antecedent_familial($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/antecedent_familial");
		}
		else{
			$donnees = array(
				"laf_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_antecedent_familial($donnees,$id);
			$antededent = $this->md_parametre->recup_antecedent_familial($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_antecedents_familiaux_laf",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un antécédent personnel",
					"log_sActionDetail"=>"a supprimé l'antécédent : <strong style='text-decoration:underline'>".$antecedent->lan_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/antecedent_familial");
			}
		}
	}
	
	
	public function modifierAntecedentFamilial()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_antecedent_familial_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"laf_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_antecedent_familial($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_antecedents_familiaux_laf",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un antécédent personnel",
					"log_sActionDetail"=>"a modifié l'antécédent personnel :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	/*********** allergies connues  ***************************/
	public function ajoutAllergie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/allergie");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_allergie(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"lia_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"lia_iSta"=>1
					);
					$this->md_parametre->ajout_allergie($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_allergies_lia",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une nouvelle allergie",
						"log_sActionDetail"=>"a ajouté une nouvelle allergie : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_allergie($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/allergie");
		}
		else{
			$donnees = array(
				"lia_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_allergie($donnees,$id);
			$antededent = $this->md_parametre->recup_allergie($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_allergies_lia",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une allergie",
					"log_sActionDetail"=>"a supprimé l'allergie : <strong style='text-decoration:underline'>".$antecedent->lan_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/allergie");
			}
		}
	}
	
	
	public function modifierAllergie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_allergie_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"lia_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_allergie($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_allergies_lia",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une allergie",
					"log_sActionDetail"=>"a modifié l'allergie :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
		
	
	/*********** activités professionnelles  ***************************/
	public function ajoutActiviteProfessionnelle()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/activite_professionnelle");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_activite_professionnelle(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"lap_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"lap_iSta"=>1
					);
					$this->md_parametre->ajout_activite_professionnelle($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_activite_professionnelle_lap",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une nouvelle activité",
						"log_sActionDetail"=>"a ajouté une nouvelle activité : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
		
	
	
	public function supprimer_activite_professionnelle($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/activite_professionnelle");
		}
		else{
			$donnees = array(
				"lap_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_activite_professionnelle($donnees,$id);
			$antededent = $this->md_parametre->recup_activite_professionnelle($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_activite_professionnelle_lap",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une activité",
					"log_sActionDetail"=>"a supprimé l'activité : <strong style='text-decoration:underline'>".$antecedent->lan_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/activite_professionnelle");
			}
		}
	}
	
	
	public function modifierActiviteProfessionnelle()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_activite_professionnelle_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"lap_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_activite_professionnelle($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_activite_professionnelle_lap",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une activité",
					"log_sActionDetail"=>"a modifié l'activité :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
/*********** Motifs de réduction  ***************************/
	public function ajoutMotifReduction()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/motifs_reduction");
		}
		else{

			for($i=0;$i<count($data['lib']) AND $i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_motif_reduction(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"mod_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"mod_iTaux"=>$data['taux'][$i],
					"mod_iSta"=>1
					);
					$this->md_parametre->ajout_motif_reduction($donnees);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_motif_reduction($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/motifs_reduction");
		}
		else{
			$donnees = array(
				"mod_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_motif_reduction($donnees,$id);
			return redirect("parametre/motifs_reduction");
			}
	}	
	
	
		public function modifierMotifReduction()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_motif_reduction_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"mod_sLibelle"=>ucfirst(trim($data['lib'])),
				"mod_iTaux"=>trim($data['taux'])
			);
			$supprimer = $this->md_parametre->maj_motif_reduction_modif($donnees,$data['id']);
			echo ucfirst(trim($data['lib']));
			echo "-/-";
			echo trim($data['taux']);
			
		}
		else{
			echo "echec";
		}
	}
	
	/*********** Unités  ***************************/
	public function ajoutUnite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/unite");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['ser']);$i++){
				$verif = $this->md_parametre->verif_unite(ucfirst(trim($data['lib'][$i])),$data['ser'][$i]);
				if(!$verif){
					$donnees = array(
					"uni_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"ser_id"=>$data['ser'][$i],
					"uni_iSta"=>1
					);
					$this->md_parametre->ajout_unite($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_unite_uni",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une unité",
						"log_sActionDetail"=>"a ajouté une nouvelle unité : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_unite($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/unite");
		}
		else{
			$donnees = array(
				"uni_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_unite($donnees,$id);
			$unite = $this->md_parametre->recup_unite($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_unite_uni",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une unite",
					"log_sActionDetail"=>"a supprimé l'unite : <strong style='text-decoration:underline'>".$unite->uni_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/unite");
			}
		}
	}
	
	
	public function modifierUnite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$ser = explode("-/-",$data["ser"]);
		$dep = explode("-/-",$data["dep"]);
		$verif = $this->md_parametre->verif_unite_modif(ucfirst(trim($data['lib'])),$ser[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"uni_sLibelle"=>ucfirst(trim($data['lib'])),
				"ser_id"      =>$ser[0]
			);
			$supprimer = $this->md_parametre->maj_unite($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_unite_uni",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une unité",
					"log_sActionDetail"=>"a modifié l'unité :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$ser[1]."-/-".$dep[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** domaine  ***************************/
	public function ajoutDomaine()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/domaine");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['tpe']);$i++){
				$verif = $this->md_parametre->verif_poste(ucfirst(trim($data['lib'][$i])),$data['tpe'][$i]);
				if(!$verif){
					$donnees = array(
					"pst_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"tpe_id"=>$data['tpe'][$i],
					"pst_iSta"=>1
					);
					$this->md_parametre->ajout_poste($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_postes_pst",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un domaine",
						"log_sActionDetail"=>"a ajouté un nouveau domaine : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_domaine($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/domaine");
		}
		else{
			$donnees = array(
				"pst_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_poste($donnees,$id);
			$poste = $this->md_parametre->recup_poste($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_postes_pst",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un domaine",
					"log_sActionDetail"=>"a supprimé le domaine : <strong style='text-decoration:underline'>".$poste->pst_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/domaine");
			}
		}
	}
	
	
	public function modifierDomaine()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$tpe = explode("-/-",$data["tpe"]);
		$verif = $this->md_parametre->verif_poste_modif(ucfirst(trim($data['lib'])),$tpe[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"pst_sLibelle"=>ucfirst(trim($data['lib'])),
				"tpe_id"      =>$tpe[0]
			);
			$supprimer = $this->md_parametre->maj_poste($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_postes_pst",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un domaine",
					"log_sActionDetail"=>"a modifié le domaine :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$tpe[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Spécialité  ***************************/
	public function ajoutSpecialite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/specialite");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['pst']);$i++){
				$verif = $this->md_parametre->verif_specialite(ucfirst(trim($data['lib'][$i])),$data['pst'][$i]);
				if(!$verif){
					$donnees = array(
					"spt_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"pst_id"=>$data['pst'][$i],
					"spt_iSta"=>1
					);
					$this->md_parametre->ajout_specialite($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_specialites_spt",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une spécialité",
						"log_sActionDetail"=>"a ajouté une nouvelle spécialité : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_specialite($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/specialite");
		}
		else{
			$donnees = array(
				"spt_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_specialite($donnees,$id);
			$specialite = $this->md_parametre->recup_specialite($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_specialites_spt",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une spécialité",
					"log_sActionDetail"=>"a supprimé la spécialité : <strong style='text-decoration:underline'>".$specialite->spt_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/specialite");
			}
		}
	}
	
	
	public function modifierSpecialite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$pst = explode("-/-",$data["pst"]);
		$tpe = explode("-/-",$data["tpe"]);
		$verif = $this->md_parametre->verif_specialite_modif(ucfirst(trim($data['lib'])),$pst[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"spt_sLibelle"=>ucfirst(trim($data['lib'])),
				"pst_id"      =>$pst[0]
			);
			$supprimer = $this->md_parametre->maj_specialite($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_specialites_spt",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une spécialité",
					"log_sActionDetail"=>"a modifié la spécialité :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$pst[1]."-/-".$tpe[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
		
	/*********** fonction/poste  ***************************/
	public function ajoutFonction()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/poste");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['pst']);$i++){
				$verif = $this->md_parametre->verif_fonction(ucfirst(trim($data['lib'][$i])),$data['pst'][$i]);
				if(!$verif){
					$donnees = array(
					"fct_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"pst_id"=>$data['pst'][$i],
					"fct_iSta"=>1
					);
					$this->md_parametre->ajout_fonction($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_fonctions_fct",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un poste",
						"log_sActionDetail"=>"a ajouté un nouveau poste : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_fonction($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/poste");
		}
		else{
			$donnees = array(
				"fct_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_fonction($donnees,$id);
			$fonction = $this->md_parametre->recup_fonction($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctions_fct",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un poste",
					"log_sActionDetail"=>"a supprimé le poste : <strong style='text-decoration:underline'>".$fonction->fct_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/poste");
			}
		}
	}
	
	
	public function modifierFonction()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$pst = explode("-/-",$data["pst"]);
		$tpe = explode("-/-",$data["tpe"]);
		$verif = $this->md_parametre->verif_fonction_modif(ucfirst(trim($data['lib'])),$pst[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"fct_sLibelle"=>ucfirst(trim($data['lib'])),
				"pst_id"      =>$pst[0]
			);
			$supprimer = $this->md_parametre->maj_fonction($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctions_fct",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un poste",
					"log_sActionDetail"=>"a modifié le poste :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$pst[1]."-/-".$tpe[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
			
	/*********** acte médical  ***************************/
	public function ajoutAct()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/acte_medical");
		}
		else{
			
			// var_dump($data);

			for($i=0;$i<count($data['lib']) AND count($data['uni']) AND count($data['cout']) AND count($data['duree']) AND count($data['tya']);$i++){
				$verif = $this->md_parametre->verif_act(ucfirst(trim($data['lib'][$i])),$data['uni'][$i]);
				if(!$verif){
					$donnees = array(
					"lac_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"uni_id"=>$data['uni'][$i],
					"cpt_id"=>$data['cpt'][$i],
					"tya_id"=>$data['tya'][$i],
					"lac_iCout"=>trim($data['cout'][$i]),
					"lac_iDure"=>trim($data['duree'][$i]),
					"lac_iSta"=>1
					);
					$this->md_parametre->ajout_act($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_act_lac",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un acte médical",
						"log_sActionDetail"=>"a ajouté un nouveau acte médical : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_act($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/acte_medical");
		}
		else{
			$donnees = array(
				"lac_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_act($donnees,$id);
			$act = $this->md_parametre->recup_act($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_act_lac",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un acte médical",
					"log_sActionDetail"=>"a supprimé l'acte médical : <strong style='text-decoration:underline'>".$act->lac_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/acte_medical");
			}
		}
	}
	
	
	public function modifierAct()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$uni = explode("-/-",$data["uni"]);
		$ser = explode("-/-",$data["ser"]);
		$tya = explode("-/-",$data["tya"]);

		$verif = $this->md_parametre->verif_act_modif(ucfirst(trim($data['lib'])),$uni[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"lac_sLibelle"=>ucfirst(trim($data['lib'])),
				"lac_iCout"=>trim($data['cout']),
				"lac_iDure"=>trim($data['duree']),
				"uni_id"      =>$uni[0],
				"tya_id"      =>$tya[0]
			);
			
			$supprimer = $this->md_parametre->maj_act($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_act_lac",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un acte médical",
					"log_sActionDetail"=>"a modifié l'acte médical :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$uni[1]."-/-".$ser[1]."-/-".number_format($data['cout'],2,",",".")."-/-".$data['duree']."-/-".$tya[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	/*********** Catégorie produit  ***************************/
	public function ajoutCategorieProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/categorie_produit");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_categorie_produit(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"cat_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"cat_iSta"=>1
					);
					$this->md_parametre->ajout_categorie_produit($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_categories_cat",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une catégorie",
						"log_sActionDetail"=>"a ajouté une nouvelle catégorie de produit : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_categorie_produit($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/categorie_produit");
		}
		else{
			$donnees = array(
				"cat_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_categorie_produit($donnees,$id);
			$categorie = $this->md_parametre->recup_categorie_produit($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_categories_cat",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une catégorie",
					"log_sActionDetail"=>"a supprimé une catégorie : <strong style='text-decoration:underline'>".$categorie->cat_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/categorie_produit");
			}
		}
	}
	
	
	public function modifierCategorieProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_categorie_produit_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"cat_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_categorie_produit($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_categories_cat",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une catégorie",
					"log_sActionDetail"=>"a modifié le nom de la catégorie :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Famille produit  ***************************/
	public function ajoutFamilleProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/famille_produit");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_famille_produit(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"fam_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"fam_iSta"=>1
					);
					$this->md_parametre->ajout_famille_produit($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_famille_fam",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une famille",
						"log_sActionDetail"=>"a ajouté une nouvelle famille de produit : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_famille_produit($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/famille_produit");
		}
		else{
			$donnees = array(
				"fam_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_famille_produit($donnees,$id);
			$famille = $this->md_parametre->recup_famille_produit($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_famille_fam",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une famille",
					"log_sActionDetail"=>"a supprimé une famille : <strong style='text-decoration:underline'>".$famille->fam_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/famille_produit");
			}
		}
	}
	
	
	public function modifierFamilleProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_famille_produit_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"fam_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_famille_produit($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_famille_fam",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une famille",
					"log_sActionDetail"=>"a modifié le nom de la famille :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Forme produit  ***************************/
		
	public function ajoutFormeProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/forme_produit");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_forme_produit(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"for_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"for_iSta"=>1
					);
					$this->md_parametre->ajout_forme_produit($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_forme_for",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une forme",
						"log_sActionDetail"=>"a ajouté une nouvelle forme de produit : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_forme_produit($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/forme_produit");
		}
		else{
			$donnees = array(
				"for_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_forme_produit($donnees,$id);
			$famille = $this->md_parametre->recup_forme_produit($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_forme_for",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une forme",
					"log_sActionDetail"=>"a supprimé une forme : <strong style='text-decoration:underline'>".$famille->for_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/forme_produit");
			}
		}
	}
	
	
	public function modifierFormeProduit()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_forme_produit_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"for_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_forme_produit($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_forme_for",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une forme",
					"log_sActionDetail"=>"a modifié le nom de la forme :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Type fournisseur  ***************************/
		
	public function ajoutTypeFournisseur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/type_fournisseur");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_type_fournisseur(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"tfr_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"tfr_iSta"=>1
					);
					$this->md_parametre->ajout_type_fournisseur($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_type_fournisseur_tfr",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un type fournisseur",
						"log_sActionDetail"=>"a ajouté un type fournisseur : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_type_fournisseur($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/type_fournisseur");
		}
		else{
			$donnees = array(
				"tfr_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_type_fournisseur($donnees,$id);
			$type = $this->md_parametre->recup_type_fournisseur($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_fournisseur_tfr",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un type de fournisseur",
					"log_sActionDetail"=>"a supprimé un type de fournisseur : <strong style='text-decoration:underline'>".$type->tfr_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/type_fournisseur");
			}
		}
	}
	
	
	public function modifierTypeFournisseur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_type_fournisseur_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"tfr_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_type_fournisseur($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_fournisseur_tfr",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un type de fournisseur",
					"log_sActionDetail"=>"a modifié le nom du type de fournisseur :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Salle  ***************************/
		
	public function ajoutSalle()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/salle");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_salle(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"sal_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"sal_iSta"=>1
					);
					$this->md_parametre->ajout_salle($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_salles_sal",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une salle",
						"log_sActionDetail"=>"a ajouté une nouvelle salle : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function ajoutMotif_Fin_Hos()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/salle");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_Motif_Fin_Hos(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"mfh_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"mfh_iSta"=>1
					);
					$this->md_parametre->ajout_Motif_Fin_Hos($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_motif_fin_hospitalisation_mfh",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un motif",
						"log_sActionDetail"=>"a ajouté une nouveau motif : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_salle($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/salle");
		}
		else{
			$donnees = array(
				"sal_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_salle($donnees,$id);
			$type = $this->md_parametre->recup_salle($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_salles_sal",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une salle",
					"log_sActionDetail"=>"a supprimé un : <strong style='text-decoration:underline'>".$type->sal_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/salle");
			}
		}
	}
	
	public function supprimer_motif_fin_hospitalisation($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/motif_fin_hospitalisation");
		}
		else{
			$donnees = array(
				"mfh_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_motif_fin_hospitalisation($donnees,$id);
			$type = $this->md_parametre->recup_motif_fin_hospitalisation($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_motif_fin_hospitalisation_mfh",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un motif de fin d'hospitalisation",
					"log_sActionDetail"=>"a supprimé un : <strong style='text-decoration:underline'>".$type->mfh_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/motif_fin_hospitalisation");
			}
		}
	}
	
	
	public function modifierSalle()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_salle_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"sal_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_salle($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_salles_sal",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une salle",
					"log_sActionDetail"=>"a modifié le nom de la salle :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Armoire  ***************************/
		
	public function ajoutArmoire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/armoire");
		}
		else{

			for($i=0;$i<count($data['lib']) AND $i<count($data['sal']) AND $i<count($data['colonne']) AND $i<count($data['ligne']);$i++){
				$verif = $this->md_parametre->verif_armoire(ucfirst(trim($data['lib'][$i])),$data['sal'][$i]);
				if(!$verif){
					$donnees = array(
					"arm_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"sal_id"=>$data['sal'][$i],
					"arm_iSta"=>1
					);
					$ajout = $this->md_parametre->ajout_armoire($donnees);
					if($ajout){
						$ligne = array();
						for($j=0;$j<$data['ligne'][$i];$j++){
							$dataLigne = array(
								'lig_sLibelle'=>$j+1,
								'arm_id'=>$ajout->arm_id
							);
							$ligne[] = $this->md_parametre->ajout_ligne($dataLigne);
						}						
						
						$valCol = 'A';
						$colonne = array();
						for($k=0;$k<$data['colonne'][$i];$k++){
							$dataColonne = array(
								'col_sLibelle'=>$valCol++ . PHP_EOL,
								'arm_id'=>$ajout->arm_id
							);
							$colonne[] = $this->md_parametre->ajout_colonne($dataColonne);
						}
						
						
						for($l=0;$l<count($ligne);$l++){
							for($m=0;$m<count($colonne);$m++){
								$cellule = $colonne[$m].$ligne[$l];
									$dataCellule = array(
									'cel_sLibelle'=>$cellule,
									'arm_id'=>$ajout->arm_id
								);
							 $this->md_parametre->ajout_cellule($dataCellule);
							}
						}
						
						if($data['ligne'][$i]>1){
							$ligne = $data['ligne'][$i]." lignes";
						}
						else{
							$ligne = $data['ligne'][$i]." ligne";
						}
						
						if($data['colonne'][$i]>1){
							$colonne = $data['colonne'][$i]." colonnes";
						}
						else{
							$colonne = $data['colonne'][$i]." colonne";
						}
						$log = array(
							"log_iSta"=>0,
							"per_id"=>$this->md_config->get_session(),
							"log_sTable"=>"t_armoires_arm",
							"log_sIcone"=>"nouveau membre",
							"log_sAction"=>"a ajouté une armoire",
							"log_sActionDetail"=>"a ajouté une nouvelle armoire : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong> avec ".$ligne." et ".$colonne,
							"log_dDate"=>date("Y-m-d H:i:s")
						);
						$this->md_connexion->rapport($log);
					}
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_armoire($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/armoire");
		}
		else{
			$donnees = array(
				"arm_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_armoire($donnees,$id);
			$type = $this->md_parametre->recup_armoire($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_armoires_arm",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une armoire",
					"log_sActionDetail"=>"a supprimé un : <strong style='text-decoration:underline'>".$type->arm_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/armoire");
			}
		}
	}
	
	
	public function modifierArmoire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$sal = explode("-/-",$data["sal"]);
		$verif = $this->md_parametre->verif_armoire_modif(ucfirst(trim($data['lib'])),$sal[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"arm_sLibelle"=>ucfirst(trim($data['lib'])),
				"sal_id"=>$sal[0]
			);
			$supprimer = $this->md_parametre->maj_armoire($donnees,$data['id']);
			if($supprimer){
				$this->md_parametre->delete_ligne($data['id']);
				$this->md_parametre->delete_colonne($data['id']);
				$this->md_parametre->delete_cellule($data['id']);
				$ligne = array();
				for($j=0;$j<$data['ligne'];$j++){
					$dataLigne = array(
						'lig_sLibelle'=>$j+1,
						'arm_id'=>$data['id']
					);
					$ligne[] = $this->md_parametre->ajout_ligne($dataLigne);
				}						
				
				$valCol = 'A';
				$colonne = array();
				for($k=0;$k<$data['colonne'];$k++){
					$dataColonne = array(
						'col_sLibelle'=>$valCol++ . PHP_EOL,
						'arm_id'=>$data['id']
					);
					$colonne[] = $this->md_parametre->ajout_colonne($dataColonne);
				}
				
				
				for($l=0;$l<count($ligne);$l++){
					for($m=0;$m<count($colonne);$m++){
						$cellule = $colonne[$m].$ligne[$l];
							$dataCellule = array(
							'cel_sLibelle'=>$cellule,
							'arm_id'=>$data['id']
						);
					 $this->md_parametre->ajout_cellule($dataCellule);
					}
				}
				
				$celluleListe = $this->md_parametre->liste_cellule_armoire($data['id']); 
				
				if($data['ligne']>1){
					$ligne = $data['ligne']." lignes";
				}
				else{
					$ligne = $data['ligne']." ligne";
				}
				
				if($data['colonne']>1){
					$colonne = $data['colonne']." colonnes";
				}
				else{
					$colonne = $data['colonne']." colonne";
				}
				
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_armoires_arm",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une armoire",
					"log_sActionDetail"=>"a modifié le nom de l\'armoire :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>) avec ".$ligne." et ".$colonne,
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$sal[1]."-/-".$data['ligne']."-/-".$data['colonne']."-/-";
				foreach($celluleListe AS $c){
					echo $c->cel_sLibelle."; ";
				}
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	/*********** Chambre  ***************************/
		
	public function ajoutChambre()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/chambre");
		}
		else{
			for($i=0;$i<count($data['lib']) AND $i< count($data['nb']) AND $i<count($data['uni']) AND $i<count($data['prix']);$i++){
				$verif = $this->md_parametre->verif_chambre($data['lib'][$i],$data['uni'][$i]);
				if(!$verif){	
					$donnees = array(
						'uni_id'=>$data['uni'][$i],
						'cha_iPrixLit'=>$data['prix'][$i],
						'cha_iSta'=>1,
						'cha_sLibelle '=>$data['lib'][$i]
					);
					$recup = $this->md_parametre->ajout_chambre($donnees);
					
					$nb = $data['nb'][$i];
					
					for($j=0;$j<$nb;$j++){
						$num = $j+1;
						$lit= "Lit ".$num;
						$donn = array(
							"lit_iOccupe"=>0,
							"lit_sLibelle"=>$lit,
							"cha_id"=>$recup
						);
						$this->md_parametre->ajout_lit($donn);
						$log = array(
							"log_iSta"=>0,
							"per_id"=>$this->md_config->get_session(),
							"log_sTable"=>"t_salles_sal",
							"log_sIcone"=>"nouveau membre",
							"log_sAction"=>"a ajouté une salle",
							"log_sActionDetail"=>"a ajouté une nouvelle salle : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
							"log_dDate"=>date("Y-m-d H:i:s")
						);
						$this->md_connexion->rapport($log);
					}
					echo "ok";
					
				}
			}
			
		}
	
	}
	
	
	/*********** Bloc opératoire  ***************************/
		
	public function ajoutBloc()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/bloc_operatoire");
		}
		else{
			for($i=0;$i<count($data['lib']) AND $i< count($data['nb']) AND $i<count($data['uni']);$i++){
				$verif = $this->md_parametre->verif_bloc($data['lib'][$i]);
				if(!$verif){	
					$donnees = array(
						'uni_id'=>$data['uni'][$i],
						'bop_iSta'=>1,
						'bop_sLibelle '=>$data['lib'][$i]
					);
					$recup = $this->md_parametre->ajout_bloc($donnees);
					
					$nb = $data['nb'][$i];
					
					for($j=0;$j<$nb;$j++){
						$num = $j+1;
						$salle= "Salle ".$num;
						$donn = array(
							"sop_iOccupe"=>0,
							"sop_sLibelle"=>$salle,
							"sop_iSta"=>1,
							"bop_id"=>$recup
						);
						$this->md_parametre->ajout_salle_operation($donn);
						// $log = array(
							// "log_iSta"=>0,
							// "per_id"=>$this->md_config->get_session(),
							// "log_sTable"=>"t_salles_sal",
							// "log_sIcone"=>"nouveau membre",
							// "log_sAction"=>"a ajouté une salle",
							// "log_sActionDetail"=>"a ajouté une nouvelle salle : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
							// "log_dDate"=>date("Y-m-d H:i:s")
						// );
						// $this->md_connexion->rapport($log);
					}
					echo "ok";
					
				}
			}
			
		}
	
	}
	
	
	/*********** type examen  ***************************/
	public function ajoutTypeExamen()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/type_examen");
		}
		else{


					$donnees = array(
					"tex_sLibelle"=>ucfirst(trim($data['lib'])),
					"tex_iSta"=>1
					);
					$this->md_parametre->ajout_type_examen($donnees);
					// $log = array(
						// "log_iSta"=>0,
						// "per_id"=>$this->md_config->get_session(),
						// "log_sTable"=>"t_type_examen_tex",
						// "log_sIcone"=>"nouveau type examen",
						// "log_sAction"=>"a ajouté un type d'examen",
						// "log_sActionDetail"=>"a ajouté un nouveau type d'examen : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						// "log_dDate"=>date("Y-m-d H:i:s")
					// );
					// $this->md_connexion->rapport($log);
			
			
		}
	
	}
	
	/*********** element analyse  ***************************/
	public function ajoutElementAnalyse()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/element_analyse");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['tex']) AND count($data['lac']) AND count($data['v1']) AND count($data['v2']) AND count($data['unite']);$i++){
				$donnees = array(
				"tex_id"=>trim($data['tex'][$i]),
				"lac_id"=>trim($data['lac'][$i]),
				"ela_sLibelle"=>ucfirst(trim($data['lib'][$i])),
				"ela_iValMax"=>$data['v2'][$i],
				"ela_iValMin"=>$data['v1'][$i],
				"ela_sUnite"=>$data['unite'][$i],
				"ela_iSta"=>1
				);
				$this->md_parametre->ajout_element_analyse($donnees);
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_element_analyse_ela",
					"log_sIcone"=>"nouvel element",
					"log_sAction"=>"a ajouté un element d'analyse",
					"log_sActionDetail"=>"a ajouté un nouvel element d'analyse : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
			}			
		}
	
	}
	
	
	
	public function supprimer_type_examen($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/type_examen");
		}
		else{
			$donnees = array(
				"tex_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_type_examen($donnees,$id);
			$service = $this->md_parametre->recup_type_examen($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_examen_tex",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un type d'examen",
					"log_sActionDetail"=>"a supprimé le type d'examen : <strong style='text-decoration:underline'>".$service->tex_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/type_examen");
			}
		}
	}
	
	public function modifierTypeExamen()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$dep = explode("-/-",$data["dep"]);
		$verif = $this->md_parametre->verif_service_modif(ucfirst(trim($data['lib'])),$dep[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"tex_sLibelle"=>ucfirst(trim($data['lib'])),
				"lac_id"      =>$dep[0]
			);
			$supprimer = $this->md_parametre->maj_type_exam($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_services_ser",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un service",
					"log_sActionDetail"=>"a modifié le service :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$dep[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	public function supprimer_element_analyse($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/element_analyse");
		}
		else{
			$donnees = array(
				"ela_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_element_analyse($donnees,$id);
			$service = $this->md_parametre->recup_element_analyse($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_examen_tex",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un element",
					"log_sActionDetail"=>"a supprimé un element : <strong style='text-decoration:underline'>".$service->tex_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/element_analyse");
			}
		}
	}
	
	
	
	public function ajoutAccessoire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/accessoire");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_salle(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"acc_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"acc_iSta"=>1
					);
					$this->md_parametre->ajout_accessoire($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_accessoire_acc",
						"log_sIcone"=>"nouvel accessoire",
						"log_sAction"=>"a ajouté un accessoire",
						"log_sActionDetail"=>"a ajouté un nouvel accessoire : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	
	public function supprimer_accessoire($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/accessoire");
		}
		else{
			$donnees = array(
				"acc_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_accessoire($donnees,$id);
			$type = $this->md_parametre->recup_accessoire($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_accessoire_acc",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un acce3",
					"log_sActionDetail"=>"a supprimé un : <strong style='text-decoration:underline'>".$type->acc_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/accessoire");
			}
		}
	}
	
	
	public function modifierAccessoire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_salle_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"acc_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_accessoire($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_accessoire_acc",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un accessoire",
					"log_sActionDetail"=>"a modifié l'accessoire :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** Création réactif  ***************************/
	public function ajoutReactif()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/nouveau_reactif");
		}
		else{
				$verif = $this->md_parametre->verif_reactif(ucfirst(trim($data['lib'])));
				if(!$verif){
					$donnees = array(
					"rea_sLibelle"=>ucfirst(trim($data['lib'])),
					"rea_iSta"=>1
					);
					$rea = $this->md_parametre->ajout_reactif($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_reactif_rea",
						"log_sIcone"=>"nouveau reactif",
						"log_sAction"=>"a ajouté un réactif",
						"log_sActionDetail"=>"a ajouté un nouveau réactif : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				
					if(isset($_POST["lac"])){
						$nbExamen = count($data['lac']);
						for($i=0;$i<count($data['lac']);$i++){
							$verifRea = $this->md_parametre->verif_existe_reactif($rea->rea_id,trim($data['lac'][$i]));
							if(!$verifRea){
								$donneesRea = array(
								"rea_id"=>$rea->rea_id,
								"lac_id"=>trim($data['lac'][$i])
								);
								$this->md_parametre->ajout_reactif_examen($donneesRea);
							}
						}
						
						$don = array('rea_iNb'=>$nbExamen);
						$update = $this->md_parametre->maj_reactif($don, $rea->rea_id);
					}
					echo "ok";
				}
				else{
					echo "Ce réactif est déjà enregistré. <br>Essayez un autre";
				}
		}
	
	}
	
	
	public function supprimer_reactif($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/nouveau_reactif");
		}
		else{
			$donnees = array(
				"rea_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_reactif($donnees,$id);
			$rea = $this->md_parametre->recup_reactif($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_reactif_rea",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un réactif",
					"log_sActionDetail"=>"a supprimé le réactif : <strong style='text-decoration:underline'>".$rea->rea_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/nouveau_reactif");
			}
		}
	}
	
	/*********** appareil  ***************************/
	public function ajoutAppareil()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/appareil");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_appareil(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"app_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"app_iSta"=>1
					);
					$this->md_parametre->ajout_appareil($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_appareil_app",
						"log_sIcone"=>"nouvel appareil",
						"log_sAction"=>"a ajouté un nouvel appareil",
						"log_sActionDetail"=>"a ajouté un nouvel appareil : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	
	public function supprimer_appareil($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/appareil");
		}
		else{
			$donnees = array(
				"app_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_appareil($donnees,$id);
			$service = $this->md_parametre->recup_appareil($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_appareil_app",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un appareil",
					"log_sActionDetail"=>"a supprimé l\'appareil : <strong style='text-decoration:underline'>".$service->app_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/appareil");
			}
		}
	}
	
	public function modifierAppareil()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_appareil_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"app_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_appareil($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_appareil_app",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un appareil",
					"log_sActionDetail"=>"a modifié l\'appareil :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	/*********** Famille maladie  ***************************/
		
	public function ajoutFamilleMaladie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/famille_maladie");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_famille_maladie(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"fma_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"fma_iSta"=>1
					);
					$this->md_parametre->ajout_famille_maladie($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_famille_maladie_fma",
						"log_sIcone"=>"nouvelle famille de maladie",
						"log_sAction"=>"a ajouté une famille de maladie",
						"log_sActionDetail"=>"a ajouté une nouvelle famille : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	
	public function supprimer_famille_maladie($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/famille_maladie");
		}
		else{
			$donnees = array(
				"fma_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_famille_maladie($donnees,$id);
			$service = $this->md_parametre->recup_famille_maladie($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_famille_maladie_fma",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une famille de maladies",
					"log_sActionDetail"=>"a supprimé la famille : <strong style='text-decoration:underline'>".$service->fma_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/famille_maladie");
			}
		}
	}
	
	public function modifierFma()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_famille_maladie_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"fma_sLibelle"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_famille_maladie($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_famille_maladie_fma",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une famille de maladie",
					"log_sActionDetail"=>"a modifié le nom de la maladie :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
		/*********** Maladie  ***************************/
	
	public function ajoutMaladie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/maladie");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['dep']);$i++){
				$verif = $this->md_parametre->verif_maladie(ucfirst(trim($data['lib'][$i])),$data['dep'][$i]);
				if(!$verif){
					$donnees = array(
					"mal_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"mal_sCode"=>ucfirst(trim($data['code'][$i])),
					"cla_id"=>$data['dep'][$i],
					"mal_iSta"=>1
					);
					$this->md_parametre->ajout_maladie($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_maladie_mal",
						"log_sIcone"=>"nouvelle maladie",
						"log_sAction"=>"a ajouté une maladie",
						"log_sActionDetail"=>"a ajouté une nouvelle maladie : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}	

	public function supprimer_maladie($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/maladie");
		}
		else{
			$donnees = array(
				"mal_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_maladie($donnees,$id);
			$service = $this->md_parametre->recup_maladie($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_maladie_mal",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une maladie",
					"log_sActionDetail"=>"a supprimé la maladie : <strong style='text-decoration:underline'>".$service->mal_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/maladie");
			}
		}
	}
	
	
	public function modifierMaladie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$dep = explode("-/-",$data["dep"]);
		//var_dump($data);
		$verif = $this->md_parametre->verif_maladie_modif(ucfirst(trim($data['lib'])),$dep[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"mal_sLibelle"=>ucfirst(trim($data['lib'])),
				"mal_sCode"=>ucfirst(trim($data['code'])),
				"cla_id"      =>$dep[0]
			);
			$supprimer = $this->md_parametre->maj_maladie($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_maladie_mal",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une maladie",
					"log_sActionDetail"=>"a modifié la maladie :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$dep[1]."-/-".ucfirst(trim($data['code']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	/*********** Spécification Maladie  ***************************/
	
	public function ajoutSpecificationMaladie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/specification_maladie");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['dep']);$i++){
				$verif = $this->md_parametre->verif_specification_maladie(ucfirst(trim($data['lib'][$i])),$data['dep'][$i]);
				if(!$verif){
					$donnees = array(
					"sma_sLibelle"=>ucfirst(trim($data['lib'][$i])),
					"mal_id"=>$data['dep'][$i],
					"sma_iSta"=>1
					);
					$this->md_parametre->ajout_specification_maladie($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_specification_maladie_sma",
						"log_sIcone"=>"nouvelle spécification maladie",
						"log_sAction"=>"a ajouté une spécification maladie",
						"log_sActionDetail"=>"a ajouté une nouvelle spécification maladie : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_specification_maladie($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/specification_maladie");
		}
		else{
			$donnees = array(
				"sma_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_specification_maladie($donnees,$id);
			$service = $this->md_parametre->recup_specification_maladie($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_maladie_mal",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une spécification maladie",
					"log_sActionDetail"=>"a supprimé la spécification de la maladie : <strong style='text-decoration:underline'>".$service->sma_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/specification_maladie");
			}
		}
	}
	
	public function modifierSpecificationMaladie()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$dep = explode("-/-",$data["dep"]);
		$verif = $this->md_parametre->verif_specification_maladie_modif(ucfirst(trim($data['lib'])),$dep[0],$data['id']);
		if(!$verif){
			$donnees = array(
				"sma_sLibelle"=>ucfirst(trim($data['lib'])),
				"mal_id"      =>$dep[0]
			);
			$supprimer = $this->md_parametre->maj_specification_maladie($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_specification_maladie_sma",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une spécification",
					"log_sActionDetail"=>"a modifié la spécification :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$dep[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
		/*********** Convention Entreprise  ***************************/
	public function ajoutConventionEntreprise()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/convention_patient");
		}
		else{


			$donnees = array(
			"cpa_sEnseigne"=>ucfirst(trim($data['lib'])),
			"cpa_dDate"=>date("Y-m-d H:i:s"),
			"cpa_iSta"=>1
			);
			$this->md_parametre->ajout_convention_entreprise($donnees);
			// $log = array(
				// "log_iSta"=>0,
				// "per_id"=>$this->md_config->get_session(),
				// "log_sTable"=>"t_type_examen_tex",
				// "log_sIcone"=>"nouveau type examen",
				// "log_sAction"=>"a ajouté un type d'examen",
				// "log_sActionDetail"=>"a ajouté un nouveau type d'examen : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
				// "log_dDate"=>date("Y-m-d H:i:s")
			// );
			// $this->md_connexion->rapport($log);			
		}
	}
	
	
	public function supprimer_convention_entreprise($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/convention_patient");
		}
		else{
			$donnees = array(
				"cpa_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_convention_entreprise($donnees,$id);
			$service = $this->md_parametre->recup_convention_entreprise($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_convention_patient_cpa",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une entreprise",
					"log_sActionDetail"=>"a supprimé l'entreprise : <strong style='text-decoration:underline'>".$service->cpa_sEnseigne."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/convention_patient");
			}
		}
	}
	
	
	public function ajoutBanque()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_banque");
		}
		else{
			$verif = $this->md_parametre->compte_nb_banque($data['banque']);
			if($verif->nb!=0){
				echo'Cette banque est déjà enregistrée';
			}else{
				if($_FILES["logo"]["name"]==""){
					$donnees = array(
						"bnq_iSta"=>1,
						"bnq_sEnseigne"=>strtoupper(trim($data["banque"])),
						"bnq_sLogo"=>"assets/images/logo/logo.jpg"
					);
					$ajout=$this->md_parametre->ajout_banque($donnees);
				}
				else{

					$verifTaille = $this->md_config->sizeImage($_FILES["logo"],150);
					if(!$verifTaille){
						echo "La taille de l'image ne doit pas dépasser les 150 Ko";
					}
					else{
						$config["upload_path"] =  './assets/images/logo/';
						$config["allowed_types"] = 'jpg|png|jpeg';
						$nomImage= time()."-".$_FILES["logo"]["name"];
						$config["file_name"] = $nomImage; 
						$verifImage = $this->md_config->uploadImage($_FILES["logo"]);
						if(!$verifImage){
							echo "Les formats de l'image autorisés sont .jpg, .jpeg, .png";
						}
						else{
							$this->load->library('upload',$config);
						
							if($this->upload->do_upload("logo")){
								$image=$this->upload->data();
					
								$data["logo"]="assets/images/logo/".$image['file_name'];
							}
							else{
								$data["logo"]="assets/images/logo/logo.jpg";
							}
							
							$donnees = array(
							"bnq_iSta"=>1,
							"bnq_sEnseigne"=>strtoupper(trim($data["banque"])),
							"bnq_sLogo"=>$data["logo"],
							"bnq_dDate"=>date("Y-m-d")
							);
							$ajout=$this->md_parametre->ajout_banque($donnees);
						}
					}
							
				}
				
				if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_banque_bnq",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté une nouvelle banque : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					echo $ajout;
				}
			}
		}
	}
	
	
	public function supprimer_banque($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_banque");
		}
		else{
			$donnees = array(
				"bnq_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_banque($donnees,$id);
			$type = $this->md_parametre->recup_banque($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_banque_bnq",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une banque",
					"log_sActionDetail"=>"a supprimé un : <strong style='text-decoration:underline'>".$type->bnq_sEnseigne."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_banque");
			}
		}
	}
	
	
	public function ajoutCompte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_compte");
		}
		else{
			$verif = $this->md_parametre->compte_nb_compte($data['numero']);
			if($verif->nb!=0){
				echo'Ce numéro de compte est déjà enregistré';
			}else{
					if($data['numero']<0){
						echo'Numéro de compte invalide';
					}else{	
						$donnees = array(
						"cpt_iSta"=>1,
						"cpt_iNumero"=>$data['numero'],
						"cpt_iType"=>$data['type'],
						"cpt_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_compte($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_compte_cpt",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau compte dont le numéro est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
				}
			}		
			}
		}
	
	
	public function supprimer_compte($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_compte");
		}
		else{
			$donnees = array(
				"cpt_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_compte($donnees,$id);
			$type = $this->md_parametre->recup_compte($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_compte_cpt",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un compte",
					"log_sActionDetail"=>"a supprimé le compte : <strong style='text-decoration:underline'>".$type->cpt_iNumero."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_compte");
			}
		}
	}
	
	
	public function ajoutSousCompte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_sous_compte");
		}
		else{
			$verif = $this->md_parametre->compte_nb_sous_compte($data['numero']);
			if($verif->nb!=0){
				echo'Libellé de sous compte déjà enregistré';
			}else{
					$donnees = array(
						"scp_iSta"=>1,
						"cpt_id"=>$data['compte'],
						"scp_sLibelle"=>$data["libelle"],
						"scp_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_sous_compte($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_sous_compte_scp",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau sous compte dont le libellé est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					}
				}		
			}
	}
	
	
	public function supprimer_sous_compte($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_sous_compte");
		}
		else{
			$donnees = array(
				"scp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_sous_compte($donnees,$id);
			$type = $this->md_parametre->recup_sous_compte($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_compte_scp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un sous compte",
					"log_sActionDetail"=>"a supprimé le sous compte : <strong style='text-decoration:underline'>".$type->scp_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_sous_compte");
			}
		}
	}	
	
	public function ajoutSousLibCompte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/sous_libelle_compte");
		}
		else{
			$verif = $this->md_parametre->nb_sous_compte($data['libelle']);
			if($verif->nb!=0){
				echo'Libellé de sous compte déjà enregistré';
			}else{
					$donnees = array(
						"slc_iSta"=>1,
						"scp_id"=>$data['compte'],
						"slc_sLibelle"=>$data["libelle"],
						"slc_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_lib_sous_compte($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_sous_libelle_compte_slc",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau sous compte dont le libellé est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					}
				}		
			}
	}
	
	
	public function supprimer_lib_sous_compte($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_sous_compte");
		}
		else{
			$donnees = array(
				"scp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_sous_compte($donnees,$id);
			$type = $this->md_parametre->recup_sous_compte($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_sous_compte_scp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un sous compte",
					"log_sActionDetail"=>"a supprimé le sous compte : <strong style='text-decoration:underline'>".$type->scp_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_sous_compte");
			}
		}
	}
	
	
	public function ajoutFoncCompte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_compte_fonctionnement");
		}
		else{
			$verif = $this->md_parametre->compte_nb_compte_fonctionnement($data['libelle']);
			if($verif->nb!=0){
				echo'Libellé de sous compte déjà enregistré';
			}else{
					$donnees = array(
						"fcp_iSta"=>1,
						"cpt_id"=>$data['compte'],
						"fcp_sLibelle"=>$data["libelle"],
						"fcp_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_compte_fonctionnement($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_fonctionnement_compte_fcp",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau compte de fonctionnement dont le libellé est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					}
				}		
			}
	}
	
	
	
	
	public function addCourbe()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/courbe");
		}
		else{
			for($i=0;$i<count($data['mois']) AND count($data['poidsMax']) AND count($data['poidsMin']);$i++){
				$verif = $this->md_parametre->verif_element_courbe(ucfirst(trim($data['mois'][$i])));
				if(!$verif){
					$donnees = array(
					"cou_iSta"=>1,
					"cou_iMois"=>ucfirst(trim($data['mois'][$i])),
					"cou_fPoidsMax"=>ucfirst(trim($data['poidsMax'][$i])),
					"cou_fPoidsMin"=>ucfirst(trim($data['poidsMin'][$i])),
					"cou_dDate"=>date("Y-m-d")
					);
					$this->md_parametre->ajout_courbe($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_courbe_cou",
						"log_sIcone"=>"Courbe de croissance",
						"log_sAction"=>"a ajouté une valeur dans la courbe de croissance",
						"log_sActionDetail"=>"a ajouté une nouvelle valeur dans la courbe de croissance",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}		
		}
	}
	
	
	
	public function supprimer_element_courbe($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/courbe");
		}
		else{
			$donnees = array(
				"cou_iSta"=>2
			);
			
			$supprimer = $this->md_parametre->maj_courbe($donnees,$id);
			
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_courbe_cou",
					"log_sIcone"=>"Courbe de croissance",
					"log_sAction"=>"a supprimer une valeur dans la courbe de croissance",
					"log_sActionDetail"=>"a ajouté une nouvelle valeur dans la courbe de croissance",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/courbe");
			}
		}
	}
	
	public function modifierCourbe(){
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(!isset($data)){
			return redirect("parametre/courbe");
		}
		else{
			$donnees = array(
				"cou_fPoidsMax"=>$data['poidsmax'],
				"cou_fPoidsMin"=>$data['poidsmin']
			);
			
			$supprimer = $this->md_parametre->maj_courbe($donnees,$data['id']);
			
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_courbe_cou",
					"log_sIcone"=>"Courbe de croissance",
					"log_sAction"=>"a modifé une valeur dans la courbe de croissance",
					"log_sActionDetail"=>"a modifé une nouvelle valeur dans la courbe de croissance",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['poidsmax'])).'-/-'.ucfirst(trim($data['poidsmin']));
			}
		}
	}
	
	
	
	
	public function supprimer_compte_sous_fonct($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_sous_compte_fonctionnement");
		}
		else{
			$donnees = array(
				"fcp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_compte_fonct($donnees,$id);
			$type = $this->md_parametre->recup_compte_fonct($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctionnement_compte_fcp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un compte de fonctionnement",
					"log_sActionDetail"=>"a supprimé le compte : <strong style='text-decoration:underline'>".$type->fcp_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_compte_fonctionnement");
			}
		}
	}	
	
	public function supprimer_compte_fonctionnement($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_compte_fonctionnement");
		}
		else{
			$donnees = array(
				"fcp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_compte_fonct($donnees,$id);
			$type = $this->md_parametre->recup_compte_fonct($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctionnement_compte_fcp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un compte de fonctionnement",
					"log_sActionDetail"=>"a supprimé le compte : <strong style='text-decoration:underline'>".$type->fcp_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_compte_fonctionnement");
			}
		}
	}
	
	
	
	public function ajoutSousLibCompteFonct()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_sous_compte_fonctionnement");
		}
		else{
			$verif = $this->md_parametre->nb_sous_compte_fonct($data['lib']);
			if($verif->nb!=0){
				echo'Libellé de sous compte déjà enregistré';
			}else{
					$donnees = array(
						"sfc_iSta"=>1,
						"fcp_id"=>$data['cpt'],
						"sfc_sLibelle"=>strtoupper($data["lib"]),
						"sfc_iMontant"=>NULL,
						"sfc_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_lib_sous_compte_fonct($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_sous_libelle_compte_slc",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau sous compte dont le libellé est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					}
				}		
			}
	}
	
	
	public function ajoutRecet()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/new_recette");
		}
		else{
			$verif = $this->md_parametre->compte_nb_compte_recette($data['libelle']);
			if($verif->nb!=0){
				echo'Libellé de compte déjà enregistré';
			}else{
					$donnees = array(
						"rec_iSta"=>1,
						"cpt_id"=>$data['compte'],
						"rec_sLibelle"=>$data["libelle"],
						"rec_dDate"=>date("Y-m-d")
						);
						$ajout=$this->md_parametre->ajout_compte_recette($donnees);
						
					if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_recette_rec",
						"log_sIcone"=>"nouveau",
						"log_sAction"=>"a ajouté un nouveau compte de recette dont le libellé est : ".$ajout,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					}
				}		
			}
	}
	
	
	public function supprimer_compte_recette($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/new_recette");
		}
		else{
			$donnees = array(
				"rec_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_compte_recet($donnees,$id);
			$type = $this->md_parametre->recup_compte_recet($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_recette_rec",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un compte de recette",
					"log_sActionDetail"=>"a supprimé le compte : <strong style='text-decoration:underline'>".$type->rec_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/new_recette");
			}
		}
	}
	
	
	
		
	public function editPass()
	{
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/nouveau");
			// var_dump($data);
		}
		else{

			if(trim($data["npass"]) == trim($data["cpass"])){

				date_default_timezone_set('Africa/Brazzaville');
				
				$donnees = array(
					"per_sPwd"=>$this->md_config->cryptPass($data["npass"])
				);
				
				$ajout=$this->md_personnel->modifier_personnel($donnees,$data["id"]);
				// var_dump($ajout);
				
				if($ajout){
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_personnel_per",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a crée un nouveau membre du personnel : ".strtoupper(trim($data["nom"]))." ".$prenom,
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					echo "Employé ajouté avec succès";
				}

							
					
			}
			else{
				echo "Les mots de passe ne sont pas identiques !";
			}
			
			
		}
	}
	
	
		
	/*********** Actes Divers  ***************************/
	
		public function ajoutFraisDivers()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/actes_divers");
		}
		else{

			

				$verif = $this->md_parametre->verif_act(ucfirst(trim($data['lib'])),$data['uni']);
				if(!$verif){
				
					// $tab = explode('-/-', $data['uni']);
					
					if($data['tya']=='NON'){$data['tya'] = NULL;}
				
					$donnees = array(
					"lac_sLibelle"=>ucfirst(trim($data['lib'])),
					"uni_id"=>$data['uni'],
					"cpt_id"=>NULL,
					"lac_iCout"=>0,
					"lac_iDure"=>0,
					"lac_iSta"=>1,
					"tya_id"=>$data['tya'],
					"lac_sSta"=>$data['check']
					);
					$this->md_parametre->ajout_act($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_act_lac",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un acte médical",
						"log_sActionDetail"=>"a ajouté un nouveau acte médical : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
					echo "ok";
				}else{
					echo "deja";
				}
			
			
		}
	
	}

	
	
		public function supprimer_acte_divers($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/actes_divers");
		}
		else{
			$donnees = array(
				"lac_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_act($donnees,$id);
			$act = $this->md_parametre->recup_act($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_act_lac",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un acte médical",
					"log_sActionDetail"=>"a supprimé l'acte médical : <strong style='text-decoration:underline'>".$act->lac_sLibelle."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/actes_divers");
			}
		}
	}
	
	
	
	
		
	
	public function modifierActedivers()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$uni = explode("-/-",$data["uni"]);
		$tya = explode("-/-",$data["tya"]);
		// $ser = explode("-/-",$data["ser"]);
		$verif = $this->md_parametre->verif_act_modif(ucfirst(trim($data['lib'])),$uni[0],$data['id']);
		if(!$verif){
			
			if($tya[0]=='NON'){$tya[0] = NULL;}
			
			$donnees = array(
				"lac_sLibelle"=>ucfirst(trim($data['lib'])),
				"lac_iCout"=>0,
				"lac_iDure"=>0,
				"lac_sSta"=>trim($data['duree']),
				"tya_id"      =>$tya[0],
				"uni_id"      =>$uni[0]
			);
			$supprimer = $this->md_parametre->maj_act($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_act_lac",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un acte médical",
					"log_sActionDetail"=>"a modifié l'acte médical :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$data['duree']."-/-".$uni[1]."-/-".$tya[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
		
	
	/*********** Locataire  ***************************/
	public function ajoutLocataire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/locataire");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['dep']);$i++){
				$verif = $this->md_parametre->verif_locataire(ucfirst(trim($data['lib'][$i])),$data['dep'][$i]);
				if(!$verif){
					$donnees = array(
					"loc_sLib"=>ucfirst(trim($data['lib'][$i])),
					"loc_sTel"=>$data['dep'][$i],
					"loc_iSta"=>1
					);
					$this->md_parametre->ajout_locataire($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_locataire_loc",
						"log_sIcone"=>"nouvelle enseigne",
						"log_sAction"=>"a ajouté une enseigne",
						"log_sActionDetail"=>"a ajouté une nouvelle enseigne : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
		
	public function supprimer_locataire($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/locataire");
		}
		else{
			$donnees = array(
				"loc_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_locataire($donnees,$id);
			$locataire = $this->md_parametre->recup_locataire($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_locataire_loc",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une enseigne",
					"log_sActionDetail"=>"a supprimé enseigne : <strong style='text-decoration:underline'>".$locataire->loc_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/locataire");
			}
		}
	}
	
	
	
	public function modifierLocataire()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		// $dep = explode("-/-",$data["dep"]);
		$verif = $this->md_parametre->verif_service_modif(ucfirst(trim($data['lib'])),ucfirst(trim($data['dep'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"loc_sLib"=>ucfirst(trim($data['lib'])),
				"loc_sTel"=>ucfirst(trim($data['dep']))
			);
			$supprimer = $this->md_parametre->maj_service($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_services_ser",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un service",
					"log_sActionDetail"=>"a modifié le service :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".$dep[1];
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	
	public function recuppatient()
	{
		$data = $this->input->post();
		$patient = $this->md_patient->recup_patient($data['idpat']);
		echo "<option value='".$patient->pat_id."'>".$patient->pat_sNom." ".$patient->pat_sPrenom." (".$patient->pat_sMatricule.")</option>";	
	}	
	
	
	public function recuppersonnel()
	{
		$data = $this->input->post();
		$personnel = $this->md_personnel->recup_personnel($data['idper']);
		echo $personnel->per_sNom." ".$personnel->per_sPrenom." (".$personnel->per_sTel.")";	
	}
	
	
	
	/*********** Fonctionnalité  ***************************/
	public function ajoutFonctionnalite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/fonctionnalite");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_fonctionnalite(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"flt_sLib"=>ucfirst(trim($data['lib'][$i])),
					"flt_iSta"=>1
					);
					$this->md_parametre->ajout_fonctionnalite($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_fonctionalite_flt",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté une direction",
						"log_sActionDetail"=>"a ajouté la direction : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_fonctionnalite($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/fonctionnalite");
		}
		else{
			$donnees = array(
				"flt_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_fonctionnalite($donnees,$id);
			$direction = $this->md_parametre->recup_fonctionnalite($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctionalite_flt",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une direction",
					"log_sActionDetail"=>"a supprimé la direction : <strong style='text-decoration:underline'>".$direction->flt_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/fonctionnalite");
			}
		}
	}
	
	
	public function modifierFonctionnalite()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_fonctionnalite_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"flt_sLib"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_fonctionnalite($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_fonctionalite_flt",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une direction",
					"log_sActionDetail"=>"a modifié le nom de la direction :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}	
	
	
	
	
	/*********** Type actes  correspond aux actes groupés***************************/
	public function ajoutTypeacte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/typeacte");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_typeacte(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"tya_sLib"=>ucfirst(trim($data['lib'][$i])),
					"tya_iSta"=>1
					);
					$this->md_parametre->ajout_typeacte($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_type_acte_tya",
						"log_sIcone"=>"nouveau membre",
						"log_sAction"=>"a ajouté un type acte",
						"log_sActionDetail"=>"a ajouté la direction : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_typeacte($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/typeacte");
		}
		else{
			$donnees = array(
				"tya_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_typeacte($donnees,$id);
			$direction = $this->md_parametre->recup_typeacte($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_acte_tya",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une direction",
					"log_sActionDetail"=>"a supprimé la direction : <strong style='text-decoration:underline'>".$direction->tya_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/typeacte");
			}
		}
	}
	
	
	public function modifierTypeacte()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_typeacte_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"tya_sLib"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_typeacte($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_acte_tya",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une direction",
					"log_sActionDetail"=>"a modifié le nom de la direction :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	
	
	/*********** rubriques  **************/
	public function ajoutRubrique()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/rubrique");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_parametre->verif_rubrique(strtoupper(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"rub_sLib"=>strtoupper(trim($data['lib'][$i])),
					"rub_iSta"=>1
					);
					$this->md_parametre->ajout_rubrique($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_rubrique_rub",
						"log_sIcone"=>"rubrique",
						"log_sAction"=>"a ajouté une nouvelle rubrique",
						"log_sActionDetail"=>"a ajouté la rubrique : <strong style='text-decoration:underline'>".strtoupper(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function supprimer_rubrique($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/rubrique");
		}
		else{
			$donnees = array(
				"rub_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_rubrique($donnees,$id);
			$rub = $this->md_parametre->recup_rubrique($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_rubrique_rub",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une rubrique",
					"log_sActionDetail"=>"a supprimé la rubrique : <strong style='text-decoration:underline'>".$rub->rub_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/rubrique");
			}
		}
	}
	
	
	public function modifierRubrique()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_rubrique_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"rub_sLib"=>ucfirst(trim($data['lib']))
			);
			$supprimer = $this->md_parametre->maj_rubrique($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_rubrique_rub",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une rubrique",
					"log_sActionDetail"=>"a modifié le nom de la rubrique :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** AntecedentObs  **************/
	public function ajoutAntecedentObs()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/antecedent_obs");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_smi->verif_AntecedentObs(strtoupper(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"lob_sLib"=>strtoupper(trim($data['lib'][$i])),
					"lob_iSta"=>1,
					"lob_dDate"=>date("Y-m-d"),
					);
					$this->md_smi->ajout_AntecedentObs($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"list_antecedant_obstetricaux_lob",
						"log_sIcone"=>"antecedant obstetricaux",
						"log_sAction"=>"a ajouté un nouveau antecedant obstetrique",
						"log_sActionDetail"=>"a ajouté l'antecedant obstetrique : <strong style='text-decoration:underline'>".strtoupper(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	}
	
	public function supprimer_AntecedentObs($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/antecedent_obs");
		}
		else{
			$donnees = array(
				"lob_iSta"=>2
			);
			$supprimer = $this->md_smi->maj_AntecedentObs($donnees,$id);
			$rub = $this->md_smi->recup_AntecedentObs($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"list_antecedant_obstetricaux_lob",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un antecedant obstetricaux",
					"log_sActionDetail"=>"a supprimé l'antecedant obstetrique : <strong style='text-decoration:underline'>".$rub->lob_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/antecedent_obs");
			}
		}
	}
	
	
	public function modifierAntecedentObs()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_smi->verif_AntecedentObs_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"lob_sLib"=>ucfirst(trim($data['lib'])),
				"lob_dDate"=>date("Y-m-d"),
			);
			$supprimer = $this->md_smi->maj_AntecedentObs($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"list_antecedant_obstetricaux_lob",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un antecedant obstetricaux",
					"log_sActionDetail"=>"a modifié l'antecedant obstetrique :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	/*********** Source d'informations  **************/
	public function ajoutSource()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/source");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_smi->verif_source_info(strtoupper(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"lso_sLib"=>strtoupper(trim($data['lib'][$i])),
					"lso_iSta"=>1,
					"lso_dDate"=>date("Y-m-d"),
					);
					$this->md_smi->ajout_source_info($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_source_sou",
						"log_sIcone"=>"antecedant obstetricaux",
						"log_sAction"=>"a ajouté un nouveau antecedant obstetrique",
						"log_sActionDetail"=>"a ajouté l'antecedant obstetrique : <strong style='text-decoration:underline'>".strtoupper(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	}
	
	public function supprimer_Source($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/source");
		}
		else{
			$donnees = array(
				"lso_iSta"=>2
			);
			$supprimer = $this->md_smi->maj_source_info($donnees,$id);
			$rub = $this->md_smi->recup_source_info($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_list_source_lso",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé une source d'information",
					"log_sActionDetail"=>"a supprimé la source d'information : <strong style='text-decoration:underline'>".$rub->sou_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/source");
			}
		}
	}
	
	
	public function modifierSource()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_smi->verif_source_info_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"lso_sLib"=>ucfirst(trim($data['lib'])),
				"lso_dDate"=>date("Y-m-d"),
			);
			$supprimer = $this->md_smi->maj_source_info($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_list_source_lso",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié une source d'information",
					"log_sActionDetail"=>"a modifié la source d'information:(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	/*********** vaccin  **************/
	public function ajoutVaccin()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/vaccin");
		}
		else{

			for($i=0;$i<count($data['lib']);$i++){
				$verif = $this->md_smi->verif_vaccin(strtoupper(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"liv_sLib"=>strtoupper(trim($data['lib'][$i])),
					"liv_iSta"=>1,
					"liv_dDate"=>date("Y-m-d"),
					);
					$this->md_smi->ajout_vaccin($donnees);
					$log = array(
						"log_iSta"=>0,
						"per_id"=>$this->md_config->get_session(),
						"log_sTable"=>"t_liste_vaccins_liv",
						"log_sIcone"=>"Vaccin",
						"log_sAction"=>"a ajouté un nouveau vaccin",
						"log_sActionDetail"=>"a ajouté le vaccin : <strong style='text-decoration:underline'>".strtoupper(trim($data['lib'][$i]))."</strong>",
						"log_dDate"=>date("Y-m-d H:i:s")
					);
					$this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	}
	
	public function supprimer_Vaccin($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/vaccin");
		}
		else{
			$donnees = array(
				"liv_iSta"=>2
			);
			$supprimer = $this->md_smi->maj_vaccin($donnees,$id);
			$rub = $this->md_smi->recup_vaccin($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_vaccins_liv",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un vaccin",
					"log_sActionDetail"=>"a supprimé le vaccin : <strong style='text-decoration:underline'>".$rub->liv_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/source");
			}
		}
	}
	
	
	public function modifierVaccin()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_smi->verif_vaccin_modif(ucfirst(trim($data['lib'])),$data['id']);
		if(!$verif){
			$donnees = array(
				"liv_sLib"=>ucfirst(trim($data['lib'])),
				"liv_dDate"=>date("Y-m-d"),
			);
			$supprimer = $this->md_smi->maj_vaccin($donnees,$data['id']);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_liste_vaccins_liv",
					"log_sIcone"=>"modification",
					"log_sAction"=>"a modifié un vaccin",
					"log_sActionDetail"=>"a modifié le vaccin(<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	
	/*********** actes groupés **************/
	public function ajoutActesgroupe()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/typeacte");
		}
		else{

			for($i=0;$i<count($data['lib']) AND count($data['PourSer']) AND count($data['PourAdm']);$i++){
				$verif = $this->md_parametre->verif_prescripteur(ucfirst(trim($data['lib'][$i])));
				if(!$verif){
					$donnees = array(
					"tya_sLib"=>ucfirst(trim($data['lib'][$i])),
					"tya_iSer"=>$data['PourSer'][$i],
					"tya_iAdm"=>$data['PourAdm'][$i],
					"tya_iSta"=>1
					);
					$this->md_parametre->ajout_acte_groupe($donnees);
					// $log = array(
						// "log_iSta"=>0,
						// "per_id"=>$this->md_config->get_session(),
						// "log_sTable"=>"t_type_acte_tya",
						// "log_sIcone"=>"new quote-part",
						// "log_sAction"=>"a ajouté un groupe des actes",
						// "log_sActionDetail"=>"a ajouté un nouveau groupe des actes : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						// "log_dDate"=>date("Y-m-d H:i:s")
					// );
					// $this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	/*********** Prescripteur **************/
	//RABY
	public function ajoutPrescripteur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/typeacte");
		}
		else{

			for($i=0;$i<count($data['nom']) AND count($data['prenom']) AND count($data['titre']) AND count($data['pourPre']);$i++){
				$verif = $this->md_parametre->verif_acte_groupe(ucfirst(trim($data['nom'][$i])),ucfirst(trim($data['prenom'][$i])),ucfirst(trim($data['titre'][$i])),$data['pourPre'][$i]);
				if(!$verif){
					$donnees = array(
					"pre_sNom"=>ucfirst(trim($data['nom'][$i])),
					"pre_sPrenom"=>ucfirst(trim($data['prenom'][$i])),
					"pre_sTitre"=>ucfirst(trim($data['titre'][$i])),
					"pre_iPourcentage"=>$data['pourPre'][$i],
					"pre_iSta"=>1
					);
					$this->md_parametre->ajout_prescripteur($donnees);
					// $log = array(
						// "log_iSta"=>0,
						// "per_id"=>$this->md_config->get_session(),
						// "log_sTable"=>"t_type_acte_tya",
						// "log_sIcone"=>"new quote-part",
						// "log_sAction"=>"a ajouté un groupe des actes",
						// "log_sActionDetail"=>"a ajouté un nouveau groupe des actes : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						// "log_dDate"=>date("Y-m-d H:i:s")
					// );
					// $this->md_connexion->rapport($log);
				}
			}
			echo "ok";
			
		}
	
	}
	
	public function ajout_quote_part()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect("parametre/quotes-parts");
		}
		else{

			for($i=0;$i<count($data['medecin']) AND count($data['pourTqp']);$i++){
				$verif = $this->md_parametre->verif_acte_groupe($data['medecin'][$i]);
				if(!$verif){
					$donnees = array(
					"tqp_dDateAttrib"=>date("Y-m-d"),
					"tqp_dDate"=>date("Y-m-d H:m:s"),
					"per_id"=>$data['medecin'][$i],
					"tqp_iPourcentage"=>$data['pourTqp'][$i],
					"tqp_iSta"=>1
					);
					$this->md_parametre->ajout_quote_part($donnees);
					// $log = array(
						// "log_iSta"=>0,
						// "per_id"=>$this->md_config->get_session(),
						// "log_sTable"=>"t_type_acte_tya",
						// "log_sIcone"=>"new quote-part",
						// "log_sAction"=>"a ajouté un groupe des actes",
						// "log_sActionDetail"=>"a ajouté un nouveau groupe des actes : <strong style='text-decoration:underline'>".ucfirst(trim($data['lib'][$i]))."</strong>",
						// "log_dDate"=>date("Y-m-d H:i:s")
					// );
					// $this->md_connexion->rapport($log);
				}else{
					echo 'deja';
				}
			}
			echo "ok";
			
		}
	
	}
	
	
	
	//RABY
	
	public function supprimer_acte_groupe($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/typeacte");
		}
		else{
			$donnees = array(
				"tya_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_acte_groupe($donnees,$id);
			$service = $this->md_parametre->recup_acte_groupe($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_type_acte_tya",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un groupe des actes",
					"log_sActionDetail"=>"a supprimé le groupe : <strong style='text-decoration:underline'>".$service->tya_sLib."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/typeacte");
			}
		}
	}
	
	//RABY
	public function supprimer_prescripteur($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/prescripteur");
		}
		else{
			$donnees = array(
				"pre_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_prescripteur($donnees,$id);
			$presc = $this->md_parametre->recup_prescripteur($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_prescripteur_pre",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a supprimé un groupe un prescripteur",
					"log_sActionDetail"=>"a supprimé le prescripteur : <strong style='text-decoration:underline'>".$presc->pre_sNom." ".$presc->pre_sPrenom."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/prescripteur");
			}
		}
	}
	
	public function supprimer_quota_part($id){
		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("parametre/quotes-parts");
		}
		else{
			$donnees = array(
				"tqp_iSta"=>2
			);
			$supprimer = $this->md_parametre->maj_quote_part($donnees,$id);
			$med = $this->md_parametre->recup_detail_quote_part($id);
			if($supprimer){
				$log = array(
					"log_iSta"=>0,
					"per_id"=>$this->md_config->get_session(),
					"log_sTable"=>"t_quotepart_personnel_tqp",
					"log_sIcone"=>"suppression",
					"log_sAction"=>"a retiré pourcentage de quote part",
					"log_sActionDetail"=>"a retiré pourcentage de quote part de : <strong style='text-decoration:underline'>".$med->per_sNom." ".$presc->per_sPrenom."</strong>",
					"log_dDate"=>date("Y-m-d H:i:s")
				);
				$this->md_connexion->rapport($log);
				return redirect("parametre/quotes-parts");
			}
		}
	}
	//RABY
	
	public function modifActesgroupe()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_acte_groupe_modif(ucfirst(trim($data['lib'])),trim($data['service']),trim($data['admin']),$data['id']);
		if(!$verif){
			$donnees = array(
				"tya_sLib"=>ucfirst(trim($data['lib'])),
				"tya_iSer"=>ucfirst(trim($data['service'])),
				"tya_iAdm"=>ucfirst(trim($data['admin']))
			);
			$supprimer = $this->md_parametre->maj_acte_groupe($donnees,$data['id']);
			if($supprimer){
				// $log = array(
					// "log_iSta"=>0,
					// "per_id"=>$this->md_config->get_session(),
					// "log_sTable"=>"t_type_acte_tya",
					// "log_sIcone"=>"modification",
					// "log_sAction"=>"a modifié un groupe des actes",
					// "log_sActionDetail"=>"a modifié le groupe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					// "log_dDate"=>date("Y-m-d H:i:s")
				// );
				// $this->md_connexion->rapport($log);
				echo ucfirst(trim($data['lib']))."-/-".trim($data['service'])."-/-".trim($data['admin']);
			}
		}
		else{
			echo "echec";
		}
	}
	
	//RABY
	public function modifPrescripteur()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		$verif = $this->md_parametre->verif_prescripteur_modif(ucfirst(trim($data['nom'])),ucfirst(trim($data['prenom'])),ucfirst(trim($data['titre'])),$data['pourcentage'],$data["id"]);
		if(!$verif){
			$donnees = array(
				"pre_sNom"=>ucfirst(trim($data['nom'])),
					"pre_sPrenom"=>ucfirst(trim($data['prenom'])),
					"pre_sTitre"=>ucfirst(trim($data['titre'])),
					"pre_iPourcentage"=>$data['pourcentage'],
					"pre_iSta"=>1
			);
			$supprimer = $this->md_parametre->maj_prescripteur($donnees,$data['id']);
			if($supprimer){
				// $log = array(
					// "log_iSta"=>0,
					// "per_id"=>$this->md_config->get_session(),
					// "log_sTable"=>"t_type_acte_tya",
					// "log_sIcone"=>"modification",
					// "log_sAction"=>"a modifié un groupe des actes",
					// "log_sActionDetail"=>"a modifié le groupe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					// "log_dDate"=>date("Y-m-d H:i:s")
				// );
				// $this->md_connexion->rapport($log);
				echo ucfirst(trim($data['nom']))."-/-".trim($data['prenom'])."-/-".trim($data['titre']."-/-".trim($data['pourcentage']));
			}
		}
		else{
			echo "echec";
		}
	}
	
	public function modif_quote_part()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		//$verif = $this->md_parametre->verif_prescripteur_modif(ucfirst(trim($data['nom'])),ucfirst(trim($data['prenom'])),ucfirst(trim($data['titre'])),$data['pourcentage'],$data["id"]);
		///if(!$verif){
			$donnees = array(
				"tqp_dDateAttrib"=>date("Y-m-d"),
				"tqp_iPourcentage"=>$data['pourcentage']
			);
			$supprimer = $this->md_parametre->maj_quote_part($donnees,$data['id']);
			if($supprimer){
				// $log = array(
					// "log_iSta"=>0,
					// "per_id"=>$this->md_config->get_session(),
					// "log_sTable"=>"t_type_acte_tya",
					// "log_sIcone"=>"modification",
					// "log_sAction"=>"a modifié un groupe des actes",
					// "log_sActionDetail"=>"a modifié le groupe :(<strong style='text-decoration:underline'>".$data['nom']."</strong>) Par (<strong style='text-decoration:underline'>".ucfirst(trim($data['lib']))."</strong>)",
					// "log_dDate"=>date("Y-m-d H:i:s")
				// );
				// $this->md_connexion->rapport($log);
				echo ucfirst(trim($data['nom']))."-/-".trim($data['prenom'])."-/-".trim($data['titre']."-/-".trim($data['pourcentage']));
			}
		/*}
		else{
			echo "echec";
		}*/
	}
	//RABY
	
	
	public function ajoutActesAja()
	{
	
		for($i=1;$i<=29;$i++){
			$select = $this->md_parametre->liste_ajaou_actes_aja($i);
			

			$recup = $this->md_parametre->recup_unite($select->uni_id);
			
			$donnees = array(
				"lac_sLibelle"=>'Frais d\'Hospitalisation ('.$recup->ser_sLibelle.')',
				"uni_id"=>$select->uni_id,
				"cpt_id"=>NULL,
				"tya_id"=>2,
				"lac_sSta"=>'OUI',
				"lac_iCout"=>0,
				"lac_iDure"=>0,
				"lac_iSta"=>1
				);
				$this->md_parametre->ajout_act($donnees);
		
		}
		return redirect("parametre/acte_medical");
	}
	
		public function gesUsers($id, $action){

		date_default_timezone_set('Africa/Brazzaville');
		if(!isset($id)){
			return redirect("app/utilisateur");
		}
		else{
			
			if($action == 'forcer'){
				$donnees = array(
					"per_iCnx"=>NULL,
					"per_iStaCnx"=>NULL
				);
				$maj = $this->md_personnel->maj_personnel($donnees,$id);
			}elseif($action == 'lock'){
				$donnees = array(
					"per_iSta"=>0,
					"per_iCnx"=>NULL,
					"per_iStaCnx"=>NULL
				);
				$maj = $this->md_personnel->maj_personnel($donnees,$id);
			}else{
				$donnees = array(
					"per_iSta"=>1
				);
				$maj = $this->md_personnel->maj_personnel($donnees,$id);
			}

				return redirect("app/utilisateur");
			}
		}
	
	
	//RABY
	public function recherche_service_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeDirect = $this->md_personnel->liste_departements_actifs();
			//$liste = $this->md_parametre->liste_services_actifs();
			$lflt = $this->md_parametre->liste_fonctionnalite_actifs();
			$resultat=$this->md_parametre->liste_services_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du service</th>
						<th>Direction</th>
						<th>Fonctionnalité</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
							<td>
								<span class="champs_ser'.$l->ser_id.'">'.$l->ser_sLibelle.'</span>
								<form id="form-edit-ser'.$l->ser_id.'">
									<textarea class="cacher input_ser'.$l->ser_id.'" style="width:100%" name="lib">'.$l->ser_sLibelle.'</textarea>
									<input type="hidden" value="'.$l->ser_id.'>" name="id"/>
									<input type="hidden" value="'.$l->ser_sLibelle.'" name="nom"/>
								</form>
							</td>
							<td>
								<span class="champs_dep'.$l->ser_id.'">'.$l->dep_sLibelle.'</span>
								<form id="form-edit_dep'.$l->ser_id.'">
									<select class="cacher input_dep'.$l->ser_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeDirect AS $d){
									echo '<option value="'.$d->dep_id.'-/-'.$d->dep_sLibelle.'" ';
									if($d->dep_id == $l->dep_id){echo 'selected';}
									echo '>'.$d->dep_sLibelle.'</option>';
								} 
								echo '</select>
								</form>
							</td>									
							<td>
								<span class="champs_flt'.$l->ser_id.'">'.$l->flt_sLib.'</span>
								<form id="form-edit_flt'.$l->ser_id.'">
									<select class="cacher input_flt'.$l->ser_id.'" name="flt" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($lflt AS $f){
									echo '<option value="'.$f->flt_id.'-/-'.$f->flt_sLib.'" ';
									if($f->flt_id == $l->flt_id){echo 'selected';}
									echo '>'.$f->flt_sLib.'</option>';
								} 
									echo '</select>
								</form>
							</td>
							<td class="text-center">
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editServiceFinal confirm_ser'.$l->ser_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editServiceAnnule annule_ser'.$l->ser_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editService clique_ser'.$l->ser_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
								<a onClick="return confirm("Êtes-vous sûr de supprimer ce service ?")" href="'.site_url("parametre/supprimer_service/".$l->ser_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
							</td>
						</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_service_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeDirect = $this->md_personnel->liste_departements_actifs();
			//$liste = $this->md_parametre->liste_services_actifs();
			$lflt = $this->md_parametre->liste_fonctionnalite_actifs();
					$resultat=$this->md_parametre->recherche_service($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du service</th>
						<th>Direction</th>
						<th>Fonctionnalité</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
							<td>
								<span class="champs_ser'.$l->ser_id.'">'.$l->ser_sLibelle.'</span>
								<form id="form-edit-ser'.$l->ser_id.'">
									<textarea class="cacher input_ser'.$l->ser_id.'" style="width:100%" name="lib">'.$l->ser_sLibelle.'</textarea>
									<input type="hidden" value="'.$l->ser_id.'>" name="id"/>
									<input type="hidden" value="'.$l->ser_sLibelle.'" name="nom"/>
								</form>
							</td>
							<td>
								<span class="champs_dep'.$l->ser_id.'">'.$l->dep_sLibelle.'</span>
								<form id="form-edit_dep'.$l->ser_id.'">
									<select class="cacher input_dep'.$l->ser_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeDirect AS $d){
									echo '<option value="'.$d->dep_id.'-/-'.$d->dep_sLibelle.'" ';
									if($d->dep_id == $l->dep_id){echo 'selected';}
									echo '>'.$d->dep_sLibelle.'</option>';
								} 
								echo '</select>
								</form>
							</td>									
							<td>
								<span class="champs_flt'.$l->ser_id.'">'.$l->flt_sLib.'</span>
								<form id="form-edit_flt'.$l->ser_id.'">
									<select class="cacher input_flt'.$l->ser_id.'" name="flt" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($lflt AS $f){
									echo '<option value="'.$f->flt_id.'-/-'.$f->flt_sLib.'" ';
									if($f->flt_id == $l->flt_id){echo 'selected';}
									echo '>'.$f->flt_sLib.'</option>';
								} 
									echo '</select>
								</form>
							</td>
							<td class="text-center">
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editServiceFinal confirm_ser'.$l->ser_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editServiceAnnule annule_ser'.$l->ser_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
								<a href="javascript:();" rel="'.$l->ser_id.'" class="editService clique_ser'.$l->ser_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
								<a onClick="return confirm("Êtes-vous sûr de supprimer ce service ?")" href="'.site_url("parametre/supprimer_service/".$l->ser_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
							</td>
						</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}


	public function recherche_chapitre_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->liste_chapitre_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du Chapitre</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
					<td>
						<span class="champs_chap'.$l->chp_id.'">'.$l->chp_sLibelle.'</span>
						<form id="form-edit-chap'.$l->chp_id.'">
							<textarea class="cacher input_chap'.$l->chp_id.'" style="width:100%" name="lib">'.$l->chp_sLibelle.'</textarea>
							<input type="hidden" value="'.$l->chp_id.'" name="id"/>
							<input type="hidden" value="'.$l->chp_sLibelle.'" name="nom"/>
						</form>
					</td>
					<td>
						<span class="champs_code'.$l->chp_id.'">'.$l->chp_sCode.'</span>
						<form id="form-edit_code'.$l->chp_id.'">
						<textarea class="cacher input_code'.$l->chp_id.'" style="width:100%" name="code">'.$l->chp_sCode.'</textarea>
						</form>
					</td>									
					
					<td class="text-center">
						<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitreFinal confirm_chap'.$l->chp_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
						<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitreAnnule annule_chap'.$l->chp_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
						<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitre clique_chap'.$l->chp_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
						<a onClick="return confirm("Êtes-vous sûr de supprimer ce chapitre ?")" href="'.site_url("parametre/supprimer_chapitre/".$l->chp_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
					</td>
				</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_chapitre_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_chapitre($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du Chapitre</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_chap'.$l->chp_id.'">'.$l->chp_sLibelle.'</span>
							<form id="form-edit-chap'.$l->chp_id.'">
								<textarea class="cacher input_chap'.$l->chp_id.'" style="width:100%" name="lib">'.$l->chp_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->chp_id.'" name="id"/>
								<input type="hidden" value="'.$l->chp_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_code'.$l->chp_id.'">'.$l->chp_sCode.'</span>
							<form id="form-edit_code'.$l->chp_id.'">
							<textarea class="cacher input_code'.$l->chp_id.'" style="width:100%" name="code">'.$l->chp_sCode.'</textarea>
							</form>
						</td>									
						
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitreFinal confirm_chap'.$l->chp_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitreAnnule annule_chap'.$l->chp_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->chp_id.'" class="editChapitre clique_chap'.$l->chp_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce chapitre ?")" href="'.site_url("parametre/supprimer_chapitre/".$l->chp_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_classe_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$chapitre = $this->md_parametre->liste_chapitre_actif();
			$resultat=$this->md_parametre->liste_classe_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du classe</th>
						<th>Code d\'identification</th>
						<th>Désignation du chapitre</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_clas'.$l->cla_id.'">'.$l->cla_sLibelle.'</span>
							<form id="form-edit-clas'.$l->cla_id.'">
								<textarea class="cacher input_clas'.$l->cla_id.'" style="width:100%" name="lib">'.$l->cla_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->cla_id.'" name="id"/>
								<input type="hidden" value="'.$l->cla_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_code'.$l->cla_id.'">'.$l->cla_sCode.'</span>
							<form id="form-edit_code'.$l->cla_id.'">
							<textarea class="cacher input_code'.$l->cla_id.'" style="width:100%" name="code">'.$l->cla_sCode.'</textarea>
							</form>
						</td>									
						<td>
							<span class="champs_chap'.$l->cla_id.'">'.$l->chp_sLibelle.'</span>
							<form id="form-edit_chap'.$l->cla_id.'">
								<select class="cacher input_chap'.$l->cla_id.'" name="chap" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($chapitre AS $f){
									echo'<option value="'.$f->chp_id.'-/-'.$f->chp_sLibelle.'"';
									if($f->chp_id == $l->chp_id){echo "selected='selected'";} 
									echo'>'.$f->chp_sLibelle.'</option>';
								}
								echo'</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->cla_id.'" class="editClasseFinal confirm_clas'.$l->cla_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->cla_id.'" class="editClasseAnnule annule_clas'.$l->cla_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->cla_id.'" class="editClasse clique_clas'.$l->cla_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette classe ?")" href="'.site_url("parametre/supprimer_classe/".$l->cla_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_SousMaladie1_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$maladie = $this->md_parametre->liste_maladie_actifs();
			$resultat=$this->md_parametre->liste_SousMaladie1_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation Maladie</th>
						<th>Désignation sous maladie</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_mal'.$l->sm1_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit-mal'.$l->sm1_id.'">
								<select class="cacher input_mal'.$l->sm1_id.'" name="mal" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($maladie AS $f){
									echo '<option value="'.$f->mal_id.'-/-'.$f->mal_sLibelle.'"';
									 if($f->mal_id == $l->mal_id){echo "selected='selected'";} echo'>'.$f->mal_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_sous1'.$l->sm1_id.'">'.$l->sm1_sLibelle.'</span>
							<form id="form-edit_sous1'.$l->sm1_id.'">
							<textarea class="cacher input_sous1'.$l->sm1_id.'" style="width:100%" name="lib">'.$l->sm1_sLibelle.'</textarea>
							</form>
						</td>									
						<td>
							<span class="champs_code'.$l->sm1_id.'">'.$l->sm1_sCode.'</span>
							<form id="form-edit-code'.$l->sm1_id.'">
								<textarea class="cacher input_code'.$l->sm1_id.'" style="width:100%" name="code">'.$l->sm1_sCode.'</textarea>
								<input type="hidden" value="'.$l->sm1_id.'" name="id"/>
								<input type="hidden" value="'.$l->sm1_sCode.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1Final confirm_sous1'.$l->sm1_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1Annule annule_sous1'.$l->sm1_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1 clique_sous1'.$l->sm1_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette sous maladie ?")" href="'.site_url("parametre/supprimer_SousMaladie1/".$l->sm1_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_SousMaladie1_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{

			$maladie = $this->md_parametre->liste_maladie_actifs();
			$resultat=$this->md_parametre->recherche_SousMaladie1($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation Maladie</th>
						<th>Désignation sous maladie</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_mal'.$l->sm1_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit-mal'.$l->sm1_id.'">
								<select class="cacher input_mal'.$l->sm1_id.'" name="mal" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($maladie AS $f){
									echo '<option value="'.$f->mal_id.'-/-'.$f->mal_sLibelle.'"';
									if($f->mal_id == $l->mal_id){echo "selected='selected'";} echo'>'.$f->mal_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_sous1'.$l->sm1_id.'">'.$l->sm1_sLibelle.'</span>
							<form id="form-edit_sous1'.$l->sm1_id.'">
							<textarea class="cacher input_sous1'.$l->sm1_id.'" style="width:100%" name="lib">'.$l->sm1_sLibelle.'</textarea>
							</form>
						</td>									
						<td>
							<span class="champs_code'.$l->sm1_id.'">'.$l->sm1_sCode.'</span>
							<form id="form-edit-code'.$l->sm1_id.'">
								<textarea class="cacher input_code'.$l->sm1_id.'" style="width:100%" name="code">'.$l->sm1_sCode.'</textarea>
								<input type="hidden" value="'.$l->sm1_id.'" name="id"/>
								<input type="hidden" value="'.$l->sm1_sCode.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1Final confirm_sous1'.$l->sm1_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1Annule annule_sous1'.$l->sm1_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sm1_id.'" class="editSousMaladie1 clique_sous1'.$l->sm1_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette sous maladie ?")" href="'.site_url("parametre/supprimer_SousMaladie1/".$l->sm1_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_SousMaladie2_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$maladie = $this->md_parametre->liste_SousMaladie1_actif();
			$resultat=$this->md_parametre->liste_SousMaladie2_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation Maladie</th>
						<th>Désignation sous maladie</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_mal'.$l->sm2_id.'">'.$l->sm1_sLibelle.'</span>
							<form id="form-edit-mal'.$l->sm2_id.'">
								<select class="cacher input_mal'.$l->sm2_id.'" name="mal" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($maladie AS $f){
									echo '<option value="'.$f->sm1_id.'-/-'.$f->sm1_sLibelle.'"';
									 if($f->sm1_id == $l->sm1_id){echo "selected='selected'";} echo'>'.$f->sm1_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_sous2'.$l->sm2_id.'">'.$l->sm2_sLibelle.'</span>
							<form id="form-edit_sous2'.$l->sm2_id.'">
							<textarea class="cacher input_sous2'.$l->sm2_id.'" style="width:100%" name="lib">'.$l->sm2_sLibelle.'</textarea>
							</form>
						</td>									
						<td>
							<span class="champs_code'.$l->sm2_id.'">'.$l->sm2_sCode.'</span>
							<form id="form-edit-code'.$l->sm2_id.'">
								<textarea class="cacher input_code'.$l->sm2_id.'" style="width:100%" name="code">'.$l->sm2_sCode.'</textarea>
								<input type="hidden" value="'.$l->sm2_id.'" name="id"/>
								<input type="hidden" value="'.$l->sm2_sCode.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2Final confirm_sous2'.$l->sm2_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2Annule annule_sous2'.$l->sm2_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2 clique_sous2'.$l->sm2_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette sous maladie ?")" href="'.site_url("parametre/supprimer_SousMaladie2/".$l->sm2_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_SousMaladie2_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{

			$maladie = $this->md_parametre->liste_SousMaladie1_actif();
			$resultat=$this->md_parametre->recherche_SousMaladie2($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation Maladie</th>
						<th>Désignation sous maladie</th>
						<th>Code d\'identification</th>
						<th style="width:10%">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_mal'.$l->sm2_id.'">'.$l->sm1_sLibelle.'</span>
							<form id="form-edit-mal'.$l->sm2_id.'">
								<select class="cacher input_mal'.$l->sm2_id.'" name="mal" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($maladie AS $f){
									echo '<option value="'.$f->sm1_id.'-/-'.$f->sm1_sLibelle.'"';
									if($f->sm1_id == $l->sm1_id){echo "selected='selected'";} echo'>'.$f->sm1_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_sous2'.$l->sm2_id.'">'.$l->sm2_sLibelle.'</span>
							<form id="form-edit_sous2'.$l->sm2_id.'">
							<textarea class="cacher input_sous2'.$l->sm2_id.'" style="width:100%" name="lib">'.$l->sm2_sLibelle.'</textarea>
							</form>
						</td>									
						<td>
							<span class="champs_code'.$l->sm2_id.'">'.$l->sm2_sCode.'</span>
							<form id="form-edit-code'.$l->sm2_id.'">
								<textarea class="cacher input_code'.$l->sm2_id.'" style="width:100%" name="code">'.$l->sm2_sCode.'</textarea>
								<input type="hidden" value="'.$l->sm2_id.'" name="id"/>
								<input type="hidden" value="'.$l->sm2_sCode.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2Final confirm_sous2'.$l->sm2_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2Annule annule_sous2'.$l->sm2_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sm2_id.'" class="editSousMaladie2 clique_sous2'.$l->sm2_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette sous maladie ?")" href="'.site_url("parametre/supprimer_SousMaladie2/".$l->sm2_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_unite_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeDirect = $this->md_personnel->liste_departements_actifs();
			//$liste = $this->md_parametre->liste_services_actifs();
			$listeSer = $this->md_parametre->liste_services_actifs();
			$resultat=$this->md_parametre->liste_unites_100();
			$liste="";
			echo'<table id="example" class="table table-bordered table-striped table-hover" >
			   
				<thead>
					<tr>
						<th>Désignation de l\'unité</th>
						<th>Service</th>
						<th>Direction</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_uni'.$l->uni_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit-uni'.$l->uni_id.'">
								<textarea class="cacher input_uni'.$l->uni_id.'" style="width:100%" name="lib">'.$l->uni_sLibelle.'</textarea>
								<input type="hidden" value="'. $l->uni_id.'>" name="id"/>
								<input type="hidden" value="'.$l->uni_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->uni_id.'>">'.$l->ser_sLibelle.'</span>
							<form id="form-edit_ser'.$l->uni_id.'">
								<select class="cacher input_ser'.$l->uni_id.'" name="ser" style="width:100%;padding-bottom:10px;padding-top:10px">';
								$lst = $this->md_parametre->liste_services_direction_actifs($l->dep_id); foreach($lst AS $ls){
									echo '<option value="'.$ls->ser_id.'-/-'.$ls->ser_sLibelle.'>"';
									if($ls->ser_id == $l->ser_id){echo "selected";}
									echo '>'.$ls->ser_sLibelle.'</option>';
									 } 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_dep'.$l->uni_id .'">'.$l->dep_sLibelle.'</span>
							<form id="form-edit_dep'.$l->uni_id.'">
								<select class="cacher clickDep input_dep'.$l->uni_id.'>" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->uni_id.'">';
								foreach($listeDirect AS $d){
									echo '<option value="'.$d->dep_id.'-/-'.$d->dep_sLibelle.'"';
									if($d->dep_id == $l->dep_id){echo "selected";}echo '>'.$d->dep_sLibelle.'</option>';
									}
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUniteFinal confirm_uni'.$l->uni_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUniteAnnule annule_uni'.$l->uni_id.'text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUnite clique_uni'.$l->uni_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette unité ?")" href="'.site_url("parametre/supprimer_unite/".$l->uni_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_unite_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeDirect = $this->md_personnel->liste_departements_actifs();
			//$liste = $this->md_parametre->liste_services_actifs();
			$listeSer = $this->md_parametre->liste_services_actifs();
					$resultat=$this->md_parametre->recherche_unites($data["search"]);
			$liste="";
			echo'<table id="example" class="table table-bordered table-striped table-hover" >
			   
				<thead>
					<tr>
						<th>Désignation de l\'unité</th>
						<th>Service</th>
						<th>Direction</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_uni'.$l->uni_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit-uni'.$l->uni_id.'">
								<textarea class="cacher input_uni'.$l->uni_id.'" style="width:100%" name="lib">'.$l->uni_sLibelle.'</textarea>
								<input type="hidden" value="'. $l->uni_id.'>" name="id"/>
								<input type="hidden" value="'.$l->uni_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->uni_id.'>">'.$l->ser_sLibelle.'</span>
							<form id="form-edit_ser'.$l->uni_id.'">
								<select class="cacher input_ser'.$l->uni_id.'" name="ser" style="width:100%;padding-bottom:10px;padding-top:10px">';
								$lst = $this->md_parametre->liste_services_direction_actifs($l->dep_id); foreach($lst AS $ls){
									echo '<option value="'.$ls->ser_id.'-/-'.$ls->ser_sLibelle.'>"';
									if($ls->ser_id == $l->ser_id){echo "selected";}
									echo '>'.$ls->ser_sLibelle.'</option>';
									 } 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_dep'.$l->uni_id .'">'.$l->dep_sLibelle.'</span>
							<form id="form-edit_dep'.$l->uni_id.'">
								<select class="cacher clickDep input_dep'.$l->uni_id.'>" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->uni_id.'">';
								foreach($listeDirect AS $d){
									echo '<option value="'.$d->dep_id.'-/-'.$d->dep_sLibelle.'"';
									if($d->dep_id == $l->dep_id){echo "selected";}echo '>'.$d->dep_sLibelle.'</option>';
									}
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUniteFinal confirm_uni'.$l->uni_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUniteAnnule annule_uni'.$l->uni_id.'text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->uni_id.'" class="editUnite clique_uni'.$l->uni_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette unité ?")" href="'.site_url("parametre/supprimer_unite/".$l->uni_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	
	public function recherche_specialite_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel(); 
			$listePst = $this->md_parametre->liste_postes_actifs();
			
			$resultat=$this->md_parametre->liste_specialites_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la spécialité</th>
						<th>Domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_spt'.$l->spt_id.'">'.$l->spt_sLibelle.'</span>
							<form id="form-edit-spt'.$l->spt_id.'">
								<textarea class="cacher input_spt'.$l->spt_id.'" style="width:100%" name="lib">'.$l->spt_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->spt_id.'" name="id"/>
								<input type="hidden" value="'.$l->spt_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_pst'.$l->spt_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit_pst'.$l->spt_id.'>">
								<select class="cacher input_pst'.$l->spt_id.'" name="pst" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listePst AS $ls){ 
									echo '<option value="'.$ls->pst_id.'-/-'.$ls->pst_sLibelle.'"';
								if($ls->pst_id == $l->pst_id){echo "selected";} echo '>'.$ls->pst_sLibelle.'</option>';
								} 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->spt_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->spt_id.'">
								<select class="cacher clickTpe input_tpe'.$l->spt_id .'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->spt_id.'">';
								foreach($listeType AS $d){ 
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'"'; 
									if($d->tpe_id == $l->tpe_id){echo "selected";} 
									echo '>'.$d->tpe_sLibelle.'</option>';
									} 
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->spt_id.'>" class="editSpecialiteFinal confirm_spt'.$l->spt_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->spt_id.'>" class="editSpecialiteAnnule annule_spt'.$l->spt_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->spt_id.'" class="editSpecialite clique_spt'.$l->spt_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette spécialité ?")" href="'.site_url("parametre/supprimer_specialite/".$l->spt_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_specialite_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel(); 
			$listePst = $this->md_parametre->liste_postes_actifs();
			
			$resultat=$this->md_parametre->recherche_specialites($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la spécialité</th>
						<th>Domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_spt'.$l->spt_id.'">'.$l->spt_sLibelle.'</span>
							<form id="form-edit-spt'.$l->spt_id.'">
								<textarea class="cacher input_spt'.$l->spt_id.'" style="width:100%" name="lib">'.$l->spt_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->spt_id.'" name="id"/>
								<input type="hidden" value="'.$l->spt_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_pst'.$l->spt_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit_pst'.$l->spt_id.'>">
								<select class="cacher input_pst'.$l->spt_id.'" name="pst" style="width:100%;padding-bottom:10px;padding-top:10px">';
								$lst = $this->md_parametre->liste_poste_type_actifs($l->tpe_id); foreach($lst AS $ls){ 
									echo '<option value="'.$ls->pst_id.'-/-'.$ls->pst_sLibelle.'"';
								if($ls->pst_id == $l->pst_id){echo "selected";} echo '>'.$ls->pst_sLibelle.'</option>';
								} 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->spt_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->spt_id.'">
								<select class="cacher clickTpe input_tpe'.$l->spt_id .'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->spt_id.'">';
								foreach($listeType AS $d){ 
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'"'; 
									if($d->tpe_id == $l->tpe_id){echo "selected";} 
									echo '>'.$d->tpe_sLibelle.'</option>';
									} 
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->spt_id.'>" class="editSpecialiteFinal confirm_spt'.$l->spt_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->spt_id.'>" class="editSpecialiteAnnule annule_spt'.$l->spt_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->spt_id.'" class="editSpecialite clique_spt'.$l->spt_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette spécialité ?")" href="'.site_url("parametre/supprimer_specialite/".$l->spt_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_fonction_list_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel();
			$listePst = $this->md_parametre->liste_postes_actifs();
			
			$resultat=$this->md_parametre->liste_fonctions_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du poste</th>
						<th>Domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_fct'.$l->fct_id.'">'.$l->fct_sLibelle.'</span>
							<form id="form-edit-fct'.$l->fct_id.'">
								<textarea class="cacher input_fct'.$l->fct_id.'" style="width:100%" name="lib">'.$l->fct_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fct_id.'" name="id"/>
								<input type="hidden" value="'.$l->fct_sLibelle.'>" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_pst'.$l->fct_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit_pst'.$l->fct_id.'">
								<select class="cacher input_pst'.$l->fct_id.'" name="pst" style="width:100%;padding-bottom:10px;padding-top:10px">';
								
								foreach($listePst AS $ls){
									echo '<option value="'.$ls->pst_id.'-/-'.$ls->pst_sLibelle.'"'; 
									if($ls->pst_id == $l->pst_id){echo "selected";} 
									echo '>'.$ls->pst_sLibelle.'</option>';
									} 
							echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->fct_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->fct_id.'">
								<select class="cacher clickTpe input_tpe'.$l->fct_id.'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->fct_id.'">';
								foreach($listeType AS $d){
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'"';
									if($d->tpe_id == $l->tpe_id){echo 'selected';} 
									echo '>'.$d->tpe_sLibelle.'</option>';
									}
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonctionFinal confirm_fct'.$l->fct_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonctionAnnule annule_fct'.$l->fct_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonction clique_fct'.$l->fct_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce poste ?")" href="'.site_url("parametre/supprimer_fonction/".$l->fct_id).'>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_fonction_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel();
			$listePst = $this->md_parametre->liste_postes_actifs();
			
			$resultat=$this->md_parametre->recherche_fonctions($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du poste</th>
						<th>Domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_fct'.$l->fct_id.'">'.$l->fct_sLibelle.'</span>
							<form id="form-edit-fct'.$l->fct_id.'">
								<textarea class="cacher input_fct'.$l->fct_id.'" style="width:100%" name="lib">'.$l->fct_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fct_id.'" name="id"/>
								<input type="hidden" value="'.$l->fct_sLibelle.'>" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_pst'.$l->fct_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit_pst'.$l->fct_id.'">
								<select class="cacher input_pst'.$l->fct_id.'" name="pst" style="width:100%;padding-bottom:10px;padding-top:10px">';
								
								foreach($listePst AS $ls){
									echo '<option value="'.$ls->pst_id.'-/-'.$ls->pst_sLibelle.'"'; 
									if($ls->pst_id == $l->pst_id){echo "selected";} 
									echo '>'.$ls->pst_sLibelle.'</option>';
								} 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->fct_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->fct_id.'">
								<select class="cacher clickTpe input_tpe'.$l->fct_id.'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px;" rel="'.$l->fct_id.'">';
								foreach($listeType AS $d){
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'"';
									if($d->tpe_id == $l->tpe_id){echo 'selected';} 
									echo '>'.$d->tpe_sLibelle.'</option>';
								}
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonctionFinal confirm_fct'.$l->fct_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonctionAnnule annule_fct'.$l->fct_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fct_id.'" class="editFonction clique_fct'.$l->fct_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce poste ?")" href="'.site_url("parametre/supprimer_fonction/".$l->fct_id).'>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_actes_medicaux_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeSer = $this->md_parametre->liste_services_actifs();
			$listeUni = $this->md_parametre->liste_unites_actifs(); 
			//$liste = $this->md_parametre->liste_acts_actifs(); 
			$listetype = $this->md_parametre->liste_typeacte_actifs(); 
			
			$resultat=$this->md_parametre->liste_actes_medicaux_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
						   
				<thead>
					<tr>
						<th>Acte</th>
						<th>Coût (<small>FCFA</small>)</th>
						<th>Durée(jrs)</th>
						<th>Unité</th>
						<th>Service</th>
						<th>Libellé quotes-parts</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>									
						<td>
							<span class="champs_lac'.$l->lac_id.'">'.$l->lac_sLibelle.'</span>
							<form id="form-edit-lac'.$l->lac_id.'">
								<textarea class="cacher input_lac'.$l->lac_id.'" style="width:100%" name="lib">'.$l->lac_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lac_id.'" name="id"/>
								<input type="hidden" value="'.$l->lac_sLibelle.'" name="nom"/>
							</form>
						</td>
						
						<td>
							<span class="champs_cout'.$l->lac_id.'">'.number_format($l->lac_iCout,0,",",".").' </span>
							<form id="form-edit-cout'.$l->lac_id.'">
								<input type="text" class="cacher input_cout'.$l->lac_id.'" style="width:100%" name="cout" value="'.$l->lac_iCout.'"/>
							</form>
						</td>
						
						<td>
							<span class="champs_duree'.$l->lac_id.'">'.$l->lac_iDure.' </span>
							<form id="form-edit-duree'.$l->lac_id.'">
								<input type="text" class="cacher input_duree'.$l->lac_id.'" style="width:100%" name="duree" value="'.$l->lac_iDure.'"/>
							</form>
						</td>

						<td>
							<span class="champs_uni'.$l->lac_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit_uni'.$l->lac_id.'">
								<select class="cacher input_uni'.$l->lac_id.'" name="uni" style="width:100%;padding-bottom:10px;padding-top:10px">';
								$lst = $this->md_parametre->liste_unite_services_actifs($l->ser_id); 
								foreach($lst AS $ls){
									echo '<option value="'.$ls->uni_id.'-/-'.$ls->uni_sLibelle.'"'; 
									if($ls->uni_id == $l->uni_id){echo "selected";} echo '>'.$ls->uni_sLibelle.'></option>';
									} 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->lac_id.'">'.$l->ser_sLibelle.'</span>
							<form id="form-edit_ser'.$l->lac_id.'">
								<select class="cacher clickSer input_ser'.$l->lac_id.'" name="ser" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->lac_id.'">';
								foreach($listeSer AS $d){ 
									echo '<option value="'.$d->ser_id.'-/-'.$d->ser_sLibelle.'"'; 
									if($d->ser_id == $l->ser_id){echo "selected";} echo '>'.$d->ser_sLibelle.'</option>';
									}
								echo '</select>
							</form>
						</td>									
						<td>
							<span class="champs_tya'.$l->lac_id.'">'.$l->tya_sLib.'</span>
							<form id="form-edit_tya'.$l->lac_id .'">
								<select class="cacher input_tya'.$l->lac_id.'" name="tya" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->lac_id.'>">';
								foreach($listetype AS $t){
									echo '<option value="'.$t->tya_id.'-/-'.$t->tya_sLib.'"';
									if($t->tya_id == $l->tya_id){echo "selected";} echo '>'.$t->tya_sLib.'></option>';
								} 
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeFinal confirm_lac'.$l->lac_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeAnnule annule_lac'.$l->lac_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActe clique_lac'.$l->lac_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet acte ?")" href="'.site_url("parametre/supprimer_act/".$l->lac_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_actes_medicaux_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeSer = $this->md_parametre->liste_services_actifs();
			$listeUni = $this->md_parametre->liste_unites_actifs(); 
			//$liste = $this->md_parametre->liste_acts_actifs(); 
			$listetype = $this->md_parametre->liste_typeacte_actifs(); 
			
			$resultat=$this->md_parametre->recherche_actes_medicaux($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
						   
				<thead>
					<tr>
						<th>Acte</th>
						<th>Coût (<small>FCFA</small>)</th>
						<th>Durée(jrs)</th>
						<th>Unité</th>
						<th>Service</th>
						<th>Libellé quotes-parts</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>									
						<td>
							<span class="champs_lac'.$l->lac_id.'">'.$l->lac_sLibelle.'</span>
							<form id="form-edit-lac'.$l->lac_id.'">
								<textarea class="cacher input_lac'.$l->lac_id.'" style="width:100%" name="lib">'.$l->lac_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lac_id.'" name="id"/>
								<input type="hidden" value="'.$l->lac_sLibelle.'" name="nom"/>
							</form>
						</td>
						
						<td>
							<span class="champs_cout'.$l->lac_id.'">'.number_format($l->lac_iCout,0,",",".").' </span>
							<form id="form-edit-cout'.$l->lac_id.'">
								<input type="text" class="cacher input_cout'.$l->lac_id.'" style="width:100%" name="cout" value="'.$l->lac_iCout.'"/>
							</form>
						</td>
						
						<td>
							<span class="champs_duree'.$l->lac_id.'">'.$l->lac_iDure.' </span>
							<form id="form-edit-duree'.$l->lac_id.'">
								<input type="text" class="cacher input_duree'.$l->lac_id.'" style="width:100%" name="duree" value="'.$l->lac_iDure.'"/>
							</form>
						</td>

						<td>
							<span class="champs_uni'.$l->lac_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit_uni'.$l->lac_id.'">
								<select class="cacher input_uni'.$l->lac_id.'" name="uni" style="width:100%;padding-bottom:10px;padding-top:10px">';
								$lst = $this->md_parametre->liste_unite_services_actifs($l->ser_id); 
								foreach($lst AS $ls){
									echo '<option value="'.$ls->uni_id.'-/-'.$ls->uni_sLibelle.'"'; 
									if($ls->uni_id == $l->uni_id){echo "selected";} echo '>'.$ls->uni_sLibelle.'></option>';
									} 
								echo '</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->lac_id.'">'.$l->ser_sLibelle.'</span>
							<form id="form-edit_ser'.$l->lac_id.'">
								<select class="cacher clickSer input_ser'.$l->lac_id.'" name="ser" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->lac_id.'">';
								foreach($listeSer AS $d){ 
									echo '<option value="'.$d->ser_id.'-/-'.$d->ser_sLibelle.'"'; 
									if($d->ser_id == $l->ser_id){echo "selected";} echo '>'.$d->ser_sLibelle.'</option>';
									}
								echo '</select>
							</form>
						</td>									
						<td>
							<span class="champs_tya'.$l->lac_id.'">'.$l->tya_sLib.'</span>
							<form id="form-edit_tya'.$l->lac_id .'">
								<select class="cacher input_tya'.$l->lac_id.'" name="tya" style="width:100%;padding-bottom:10px;padding-top:10px" rel="'.$l->lac_id.'>">';
								foreach($listetype AS $t){
									echo '<option value="'.$t->tya_id.'-/-'.$t->tya_sLib.'"';
									if($t->tya_id == $l->tya_id){echo "selected";} echo '>'.$t->tya_sLib.'></option>';
								} 
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeFinal confirm_lac'.$l->lac_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeAnnule annule_lac'.$l->lac_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActe clique_lac'.$l->lac_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet acte ?")" href="'.site_url("parametre/supprimer_act/".$l->lac_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_poste_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel();
			$resultat=$this->md_parametre->liste_postes_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dom'.$l->pst_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit-dom'.$l->pst_id.'">
								<textarea class="cacher input_dom'.$l->pst_id.'" style="width:100%" name="lib">'.$l->pst_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->pst_id.'" name="id"/>
								<input type="hidden" value="'.$l->pst_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->pst_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->pst_id.'">
								<select class="cacher input_tpe'.$l->pst_id.'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeType AS $d){
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'>"'; 
									if($d->tpe_id == $l->tpe_id){echo "selecte";} echo '>'.$d->tpe_sLibelle.'</option>';
								 }
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaineFinal confirm_dom'.$l->pst_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaineAnnule annule_dom'.$l->pst_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaine clique_dom'.$l->pst_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce domaine ?")" href="'.site_url("parametre/supprimer_domaine/".$l->pst_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_poste_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeType = $this->md_parametre->liste_type_personnel();
			
			$resultat=$this->md_parametre->recherche_postes($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation du domaine</th>
						<th>Type personnel</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dom'.$l->pst_id.'">'.$l->pst_sLibelle.'</span>
							<form id="form-edit-dom'.$l->pst_id.'">
								<textarea class="cacher input_dom'.$l->pst_id.'" style="width:100%" name="lib">'.$l->pst_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->pst_id.'" name="id"/>
								<input type="hidden" value="'.$l->pst_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_tpe'.$l->pst_id.'">'.$l->tpe_sLibelle.'</span>
							<form id="form-edit_tpe'.$l->pst_id.'">
								<select class="cacher input_tpe'.$l->pst_id.'" name="tpe" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeType AS $d){
									echo '<option value="'.$d->tpe_id.'-/-'.$d->tpe_sLibelle.'>"'; 
									if($d->tpe_id == $l->tpe_id){echo "selecte";} echo '>'.$d->tpe_sLibelle.'</option>';
								 }
								echo '</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaineFinal confirm_dom'.$l->pst_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaineAnnule annule_dom'.$l->pst_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->pst_id.'" class="editDomaine clique_dom'.$l->pst_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce domaine ?")" href="'.site_url("parametre/supprimer_domaine/".$l->pst_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_assurance_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_assurance_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la compagnie</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->ass_id.'">'.$l->ass_sLibelle.'</span>
							<form id="form-edit-ass'.$l->ass_id.'">
								<textarea class="cacher input'.$l->ass_id.'" style="width:100%" name="lib">'.$l->ass_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->ass_id.'>" name="id"/>
								<input type="hidden" value="'.$l->ass_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureurFinal confirm'.$l->ass_id.'> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureurAnnule annule'.$l->ass_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureur clique'.$l->ass_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet assureur ?")" href="'.site_url("parametre/supprimer_assureur/".$l->ass_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_assurance_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_assurance($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la compagnie</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->ass_id.'">'.$l->ass_sLibelle.'</span>
							<form id="form-edit-ass'.$l->ass_id.'">
								<textarea class="cacher input'.$l->ass_id.'" style="width:100%" name="lib">'.$l->ass_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->ass_id.'>" name="id"/>
								<input type="hidden" value="'.$l->ass_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureurFinal confirm'.$l->ass_id.'> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureurAnnule annule'.$l->ass_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->ass_id.'" class="editAssureur clique'.$l->ass_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet assureur ?")" href="'.site_url("parametre/supprimer_assureur/".$l->ass_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_couverture_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_couverture_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Type assurance</th>
						<th>Couverture</th>
						<th>Taux</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_tas'.$l->tas_id.'">'.$l->tas_sLibelle.'</span>
							<form id="form-edit-tas'.$l->tas_id.'">
								<textarea class="cacher input_tas'.$l->tas_id.'" style="width:100%" name="lib">'.$l->tas_sLibelle.'</textarea>
								<input type="hidden" value="'. $l->tas_id.'" name="id"/>
								<input type="hidden" value="'.$l->tas_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>';
							$couv = $this->md_parametre->liste_couverture_assurance_actifs($l->tas_id);
								if(empty($couv)){
									echo "<i class='text-danger' style='font-size:12px'>Pas de couverture hospitalière pour ce type d'assure</i>";
								}
								else{
									echo "<ul>";
									foreach($couv AS $c){
										echo "<li>".$c->lac_sLibelle."</li>";
									} 
									echo "</ul>";
								}
						echo '</td>
						<td>
							<span class="champs_taux'.$l->tas_id.'">'.$l->tas_iTaux.'%</span>
							<form id="form-edit-taux'.$l->tas_id .'">
								<input type="number" class="cacher input_taux'.$l->tas_id.'" style="width:100%" name="taux" value="'.$l->tas_iTaux.'" />
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tas_id.'" class="editTypeFinal confirm_tas'.$l->tas_id.'> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tas_id.'" class="editTypeAnnule annule_tas'.$l->tas_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tas_id.'>" class="editType clique_tas'.$l->tas_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce Type d\'assurance ?")" href="'.site_url("parametre/supprimer_type_assurance/".$l->tas_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_couverture_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_couverture($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Type assurance</th>
						<th>Couverture</th>
						<th>Taux</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_tas'.$l->tas_id.'">'.$l->tas_sLibelle.'</span>
							<form id="form-edit-tas'.$l->tas_id.'">
								<textarea class="cacher input_tas'.$l->tas_id.'" style="width:100%" name="lib">'.$l->tas_sLibelle.'</textarea>
								<input type="hidden" value="'. $l->tas_id.'" name="id"/>
								<input type="hidden" value="'.$l->tas_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>';
							$couv = $this->md_parametre->liste_couverture_assurance_actifs($l->tas_id);
								if(empty($couv)){
									echo "<i class='text-danger' style='font-size:12px'>Pas de couverture hospitalière pour ce type d'assure</i>";
								}
								else{
									echo "<ul>";
									foreach($couv AS $c){
										echo "<li>".$c->lac_sLibelle."</li>";
									} 
									echo "</ul>";
								}
						echo '</td>
						<td>
							<span class="champs_taux'.$l->tas_id.'">'.$l->tas_iTaux.'%</span>
							<form id="form-edit-taux'.$l->tas_id .'">
								<input type="number" class="cacher input_taux'.$l->tas_id.'" style="width:100%" name="taux" value="'.$l->tas_iTaux.'" />
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tas_id.'" class="editTypeFinal confirm_tas'.$l->tas_id.'> cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tas_id.'" class="editTypeAnnule annule_tas'.$l->tas_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tas_id.'>" class="editType clique_tas'.$l->tas_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce Type d\'assurance ?")" href="'.site_url("parametre/supprimer_type_assurance/".$l->tas_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	public function recherche_famille_produit_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_famille_produit_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la famille</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->fam_id.'">'.$l->fam_sLibelle.'</span>
							<form id="form-edit-fam'.$l->fam_id.'">
								<textarea class="cacher input'.$l->fam_id.'" style="width:100%" name="lib">'.$l->fam_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fam_id.'" name="id"/>
								<input type="hidden" value="'.$l->fam_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamilleFinal confirm'. $l->fam_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamilleAnnule annule'.$l->fam_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamille clique'.$l->fam_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette famille de produit ?")" href="'.site_url("parametre/supprimer_famille_produit/".$l->fam_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			// echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			// echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_famille_produit_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_famille_produit($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la famille</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->fam_id.'">'.$l->fam_sLibelle.'</span>
							<form id="form-edit-fam'.$l->fam_id.'">
								<textarea class="cacher input'.$l->fam_id.'" style="width:100%" name="lib">'.$l->fam_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fam_id.'" name="id"/>
								<input type="hidden" value="'.$l->fam_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamilleFinal confirm'. $l->fam_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamilleAnnule annule'.$l->fam_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fam_id.'" class="editFamille clique'.$l->fam_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette famille de produit ?")" href="'.site_url("parametre/supprimer_famille_produit/".$l->fam_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			// echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			// echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	public function recherche_forme_produit_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_forme_produit_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la forme</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->for_id.'">'.$l->for_sLibelle.'</span>
							<form id="form-edit-for'.$l->for_id.'">
								<textarea class="cacher input'.$l->for_id.'" style="width:100%" name="lib">'.$l->for_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->for_id.'" name="id"/>
								<input type="hidden" value="'.$l->for_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->for_id.'" class="editFormeFinal confirm'.$l->for_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->for_id.'" class="editFormeAnnule annule'.$l->for_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->for_id.'" class="editForme clique'.$l->for_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette forme de produit ?")" href="'.site_url("parametre/supprimer_forme_produit/".$l->for_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_forme_produit_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_forme_produit($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation de la forme</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->for_id.'">'.$l->for_sLibelle.'</span>
							<form id="form-edit-for'.$l->for_id.'">
								<textarea class="cacher input'.$l->for_id.'" style="width:100%" name="lib">'.$l->for_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->for_id.'" name="id"/>
								<input type="hidden" value="'.$l->for_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->for_id.'" class="editFormeFinal confirm'.$l->for_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->for_id.'" class="editFormeAnnule annule'.$l->for_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->for_id.'" class="editForme clique'.$l->for_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette forme de produit ?")" href="'.site_url("parametre/supprimer_forme_produit/".$l->for_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	public function recherche_type_fournisseur_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_type_fournisseur_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation type fournisseur</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->tfr_id.'">'.$l->tfr_sLibelle.'</span>
							<form id="form-edit-tfr'.$l->tfr_id.'">
								<textarea class="cacher input'.$l->tfr_id.'" style="width:100%" name="lib">'.$l->tfr_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->tfr_id.'" name="id"/>
								<input type="hidden" value="'.$l->tfr_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseurFinal confirm'. $l->tfr_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseurAnnule annule'.$l->tfr_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseur clique'.$l->tfr_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type de fournisseur ?")" href="'.site_url("parametre/supprimer_type_fournisseur/".$l->tfr_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_type_fournisseur_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_type_fournisseur($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation type fournisseur</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->tfr_id.'">'.$l->tfr_sLibelle.'</span>
							<form id="form-edit-tfr'.$l->tfr_id.'">
								<textarea class="cacher input'.$l->tfr_id.'" style="width:100%" name="lib">'.$l->tfr_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->tfr_id.'" name="id"/>
								<input type="hidden" value="'.$l->tfr_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseurFinal confirm'. $l->tfr_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseurAnnule annule'.$l->tfr_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tfr_id.'" class="editTypeFournisseur clique'.$l->tfr_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type de fournisseur ?")" href="'.site_url("parametre/supprimer_type_fournisseur/".$l->tfr_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_acte_divers_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_acte_divers_100();
			$liste="";
			
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th>Frais concerne les patients ?</th>
						<th>Libellé quotes-parts</th>
						<th>Unité</th>
						<!--<th>Service</th>-->
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				echo '<tr align="center">									
						<td>
							<span class="champs_lac2'.$l->lac_id.'">'.$l->lac_sLibelle.'</span>
							<form id="form-edit-lac2'.$l->lac_id.'">
								<textarea class="cacher input_lac2'.$l->lac_id.'" style="width:100%" name="lib">'.$l->lac_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lac_id.'" name="id"/>
								<input type="hidden" value="'.$l->lac_sLibelle.'" name="nom"/>
							</form>
						</td>
						
						<td>
							<span class="champs_duree'.$l->lac_id.'>">'.$l->lac_sSta.' </span>
							<form id="form-edit-duree'.$l->lac_id.'">
								<select class="cacher input_duree'.$l->lac_id.'" name="duree" style="width:100%;padding-bottom:10px;padding-top:10px" rel="">
									<option value="OUI"';
									if($l->lac_sSta=='OUI'){echo "selected";} echo'>OUI</option>
									<option value="NON"';
									if($l->lac_sSta=='NON'){echo "selected";} echo'>NON</option>
								</select>
							</form>
						</td>
						<td>
							<span class="champs_tya2'.$l->lac_id.'">';
							if(is_null($l->tya_id)){echo 'N/A';}else{ echo $l->tya_sLib;};
							echo'</span>
							<form id="form-edit_tya2'.$l->lac_id.'">
								<select class="cacher input_tya2'.$l->lac_id.'" name="tya" style="width:100%;padding-bottom:10px;padding-top:10px">
										<option value="NON-/-N/A"> N/A </option>';
								if(is_null($l->tya_id)){
										$lste = $this->md_parametre->liste_typeacte_actifs($l->tya_id); foreach($lste AS $lt){ 
										echo'<option value="'.$lt->tya_id.'-/-'.$lt->tya_sLib.'">'.$lt->tya_sLib.'</option>';
										}												
									}else{												
										$lste = $this->md_parametre->liste_typeacte_actifs($l->tya_id); foreach($lste AS $lt){
										echo'<option value="'.$lt->tya_id.'-/-'. $lt->tya_sLib.'"';
										if($lt->tya_id == $l->tya_id){echo "selected";} echo'>'.$lt->tya_sLib.'</option>';
										 } 
									} 
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_uni2'.$l->lac_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit_uni2'.$l->lac_id.'">
								<select class="cacher input_uni2'.$l->lac_id.'" name="uni" style="width:100%;padding-bottom:10px;padding-top:10px">';
									$lst = $this->md_parametre->liste_unite_services_actifs($l->ser_id); foreach($lst AS $ls){ 
									echo'<option value="'.$ls->uni_id.'-/-'.$ls->uni_sLibelle.'"';
									if($ls->uni_id == $l->uni_id){echo "selected";} echo'>'.$ls->uni_sLibelle.'</option>';
									 }
								echo'</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeFinal2 confirm_lac2'. $l->lac_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeAnnule2 annule_lac2'.$l->lac_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActe2 clique_lac2'.$l->lac_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet acte ?")" href="'.site_url("parametre/supprimer_acte_divers/".$l->lac_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_acte_divers_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_acte_divers($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
		   
			<thead>
				<tr>
					<th>Désignation</th>
					<th>Frais concerne les patients ?</th>
					<th>Libellé quotes-parts</th>
					<th>Unité</th>
					<!--<th>Service</th>-->
					<th style="width:80px">Action</th>
				</tr>
			</thead>
			<tbody>';
			foreach($resultat as $l){
				echo '<tr align="center">									
						<td>
							<span class="champs_lac2'.$l->lac_id.'">'.$l->lac_sLibelle.'</span>
							<form id="form-edit-lac2'.$l->lac_id.'">
								<textarea class="cacher input_lac2'.$l->lac_id.'" style="width:100%" name="lib">'.$l->lac_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lac_id.'" name="id"/>
								<input type="hidden" value="'.$l->lac_sLibelle.'" name="nom"/>
							</form>
						</td>
						
						<td>
							<span class="champs_duree'.$l->lac_id.'>">'.$l->lac_sSta.' </span>
							<form id="form-edit-duree'.$l->lac_id.'">
								<select class="cacher input_duree'.$l->lac_id.'" name="duree" style="width:100%;padding-bottom:10px;padding-top:10px" rel="">
									<option value="OUI"';
									if($l->lac_sSta=='OUI'){echo "selected";} echo'>OUI</option>
									<option value="NON"';
									if($l->lac_sSta=='NON'){echo "selected";} echo'>NON</option>
								</select>
							</form>
						</td>
						<td>
							<span class="champs_tya2'.$l->lac_id.'">';
							if(is_null($l->tya_id)){echo 'N/A';}else{ echo $l->tya_sLib;};
							echo'</span>
							<form id="form-edit_tya2'.$l->lac_id.'">
								<select class="cacher input_tya2'.$l->lac_id.'" name="tya" style="width:100%;padding-bottom:10px;padding-top:10px">
										<option value="NON-/-N/A"> N/A </option>';
								if(is_null($l->tya_id)){
										$lste = $this->md_parametre->liste_typeacte_actifs($l->tya_id); foreach($lste AS $lt){ 
										echo'<option value="'.$lt->tya_id.'-/-'.$lt->tya_sLib.'">'.$lt->tya_sLib.'</option>';
										}												
									}else{												
										$lste = $this->md_parametre->liste_typeacte_actifs($l->tya_id); foreach($lste AS $lt){
										echo'<option value="'.$lt->tya_id.'-/-'. $lt->tya_sLib.'"';
										if($lt->tya_id == $l->tya_id){echo "selected";} echo'>'.$lt->tya_sLib.'</option>';
										 } 
									} 
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_uni2'.$l->lac_id.'">'.$l->uni_sLibelle.'</span>
							<form id="form-edit_uni2'.$l->lac_id.'">
								<select class="cacher input_uni2'.$l->lac_id.'" name="uni" style="width:100%;padding-bottom:10px;padding-top:10px">';
									$lst = $this->md_parametre->liste_unite_services_actifs($l->ser_id); foreach($lst AS $ls){ 
									echo'<option value="'.$ls->uni_id.'-/-'.$ls->uni_sLibelle.'"';
									if($ls->uni_id == $l->uni_id){echo "selected";} echo'>'.$ls->uni_sLibelle.'</option>';
									 }
								echo'</select>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeFinal2 confirm_lac2'. $l->lac_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActeAnnule2 annule_lac2'.$l->lac_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lac_id.'" class="editActe2 clique_lac2'.$l->lac_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet acte ?")" href="'.site_url("parametre/supprimer_acte_divers/".$l->lac_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			// echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			// echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_salle_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_salle_100();
			$liste="";
			echo '<table class="table table-bordered table-striped table-hover " id="example">
				<thead>
					<tr>
						<th>Désignation de la salle</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				
				echo '<tr>
						<td>
							<span class="champs'.$l->sal_id.'">'.$l->sal_sLibelle.'</span>
							<form id="form-edit-sal'.$l->sal_id.'">
								<textarea class="cacher input'.$l->sal_id.'" style="width:100%" name="lib">'.$l->sal_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->sal_id.'" name="id"/>
								<input type="hidden" value="'.$l->sal_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sal_id.'" class="editSalleFinal confirm'.$l->sal_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'. $l->sal_id.'" class="editSalleAnnule annule'.$l->sal_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sal_id.'" class="editSalle clique'.$l->sal_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette salle ?")" href="'.site_url("parametre/supprimer_salle/".$l->sal_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
				</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_salle_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_salle($data["search"]);
			$liste="";
			echo '<table class="table table-bordered table-striped table-hover " id="example">
				<thead>
					<tr>
						<th>Désignation de la salle</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				
				echo '<tr>
						<td>
							<span class="champs'.$l->sal_id.'">'.$l->sal_sLibelle.'</span>
							<form id="form-edit-sal'.$l->sal_id.'">
								<textarea class="cacher input'.$l->sal_id.'" style="width:100%" name="lib">'.$l->sal_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->sal_id.'" name="id"/>
								<input type="hidden" value="'.$l->sal_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sal_id.'" class="editSalleFinal confirm'.$l->sal_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sal_id.'" class="editSalleAnnule annule'.$l->sal_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sal_id.'" class="editSalle clique'.$l->sal_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette salle ?")" href="'.site_url("parametre/supprimer_salle/".$l->sal_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
				</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	public function recherche_Motif_fin_hospitalisation_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_motifs_fin_hospitalisation_100();
			$liste="";
			echo '<table class="table table-bordered table-striped table-hover " id="example">
				<thead>
					<tr>
						<th>Libélle Motifs</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				
				echo '<tr>
						<td>
							<span class="champs'.$l->mfh_id.'">'.$l->mfh_sLibelle.'</span>
							<form id="form-edit-motif-fin-hos'.$l->mfh_id.'">
								<textarea class="cacher input'.$l->mfh_id.'" style="width:100%" name="lib">'.$l->mfh_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mfh_id.'" name="id"/>
								<input type="hidden" value="'.$l->mfh_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mfh_id.'" class="editSalleFinal confirm'.$l->mfh_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'. $l->mfh_id.'" class="editSalleAnnule annule'.$l->mfh_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mfh_id.'" class="editSalle clique'.$l->mfh_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette salle ?")" href="'.site_url("parametre/supprimer_motif_fin_hospitalisation/".$l->mfh_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
				</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_Motif_fin_hospitalisation_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_motifs_fin_hospitalisation($data["search"]);
			$liste="";
			echo '<table class="table table-bordered table-striped table-hover " id="example">
				<thead>
					<tr>
						<th>Libélle Motifs</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				
				echo '<tr>
						<td>
							<span class="champs'.$l->mfh_id.'">'.$l->mfh_sLibelle.'</span>
							<form id="form-edit-motif-fin-hos'.$l->mfh_id.'">
								<textarea class="cacher input'.$l->mfh_id.'" style="width:100%" name="lib">'.$l->mfh_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mfh_id.'" name="id"/>
								<input type="hidden" value="'.$l->mfh_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mfh_id.'" class="editSalleFinal confirm'.$l->mfh_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->mfh_id.'" class="editSalleAnnule annule'.$l->mfh_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mfh_id.'" class="editSalle clique'.$l->mfh_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette salle ?")" href="'.site_url("parametre/supprimer_motif_fin_hospitalisation/".$l->mfh_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
				</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_chambre_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_chambre_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Nom chambre</th>
						<th>Nombre de lit</th>
						<th>Prix du lit</th>
						<th>Unité</th>
						<th>service</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							'.$l->cha_sLibelle.'
						</td>									
						
						<td>
							'.count($this->md_parametre->liste_lit_chambre($l->cha_id)).'
						</td>									
						<td>
							'.$l->cha_iPrixLit.' Fcfa
						</td>
						<td>
							'. $l->uni_sLibelle.'
						</td>
						<td>
							'.$l->ser_sLibelle.'
						</td>
						<td class="text-center">
							
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_chambre_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_chambre($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Nom chambre</th>
						<th>Nombre de lit</th>
						<th>Prix du lit</th>
						<th>Unité</th>
						<th>service</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							'.$l->cha_sLibelle.'
						</td>									
						
						<td>
							'.count($this->md_parametre->liste_lit_chambre($l->cha_id)).'
						</td>									
						<td>
							'.$l->cha_iPrixLit.' Fcfa
						</td>
						<td>
							'. $l->uni_sLibelle.'
						</td>
						<td>
							'.$l->ser_sLibelle.'
						</td>
						<td class="text-center">
							
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_type_examen_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_type_examen_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
						   
				<thead>
					<tr>
						<th>Type d\'examen</th>
						<th style="width:80px;">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->tex_id.'">'. $l->tex_sLibelle.'</span>
							<form id="form-type-examen'.$l->tex_id.'">
								<textarea class="cacher input_ser'.$l->tex_id.'" style="width:100%" name="lib">'. $l->tex_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->tex_id.'" name="id"/>
								<input type="hidden" value="'.$l->tex_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamenFinal confirm_ser'.$l->tex_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamenAnnule annule_ser'.$l->tex_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamen clique_ser'.$l->tex_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type d\'examen ?")" href="'.site_url("parametre/supprimer_type_examen/".$l->tex_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_type_examen_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_type_examen($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
						   
				<thead>
					<tr>
						<th>Type d\'examen</th>
						<th style="width:80px;">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->tex_id.'">'. $l->tex_sLibelle.'</span>
							<form id="form-type-examen'.$l->tex_id.'">
								<textarea class="cacher input_ser'.$l->tex_id.'" style="width:100%" name="lib">'.$l->tex_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->tex_id.'" name="id"/>
								<input type="hidden" value="'.$l->tex_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamenFinal confirm_ser'.$l->tex_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamenAnnule annule_ser'.$l->tex_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tex_id.'" class="editTypeExamen clique_ser'.$l->tex_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type d\'examen ?")" href="'.site_url("parametre/supprimer_type_examen/".$l->tex_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_element_analyse_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_element_analyse_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Elément à analyser</th>
						<th>Type examen</th>
						<th>Acte médical</th>
						<th>Valeur minimale</th>
						<th>Valeur maximale</th>
						<th>Unité</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							'.$l->ela_sLibelle.'
						</td>
						<td>
							'.$l->tex_sLibelle.'
						</td>
						<td>
							'.$l->lac_sLibelle.'
						</td>				
						<td>
							'.$l->ela_iValMin.' 
						</td>									
						<td>
							'.$l->ela_iValMax.'
						</td>									
						<td>		
							'.$l->ela_sUnite.'
						</td>									
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamenFinal confirm_ser'.$l->ela_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamenAnnule annule_ser'.$l->ela_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamen clique_ser'.$l->ela_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet élément ?")" href="'.site_url("parametre/supprimer_element_analyse/".$l->ela_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_element_analyse_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_element_analyse($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Elément à analyser</th>
						<th>Type examen</th>
						<th>Acte médical</th>
						<th>Valeur minimale</th>
						<th>Valeur maximale</th>
						<th>Unité</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							'.$l->ela_sLibelle.'
						</td>
						<td>
							'.$l->tex_sLibelle.'
						</td>
						<td>
							'.$l->lac_sLibelle.'
						</td>				
						<td>
							'.$l->ela_iValMin.' 
						</td>									
						<td>
							'.$l->ela_iValMax.'
						</td>									
						<td>		
							'.$l->ela_sUnite.'
						</td>									
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamenFinal confirm_ser'.$l->ela_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamenAnnule annule_ser'.$l->ela_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->ela_id.'" class="editTypeExamen clique_ser'.$l->ela_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet élément ?")" href="'.site_url("parametre/supprimer_element_analyse/".$l->ela_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_accessoire_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_accessoire_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->acc_id.'">'.$l->acc_sLibelle.'</span>
							<form id="form-edit-sal'.$l->acc_id.'">
								<textarea class="cacher input'.$l->acc_id.'" style="width:100%" name="lib">'.$l->acc_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->acc_id.'" name="id"/>
								<input type="hidden" value="'.$l->acc_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoireFinal confirm'.$l->acc_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoireAnnule annule'.$l->acc_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoire clique'.$l->acc_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet accessoire ?")" href'.site_url("parametre/supprimer_accessoire/".$l->acc_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_accessoire_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_accessoire($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->acc_id.'">'.$l->acc_sLibelle.'</span>
							<form id="form-edit-sal'.$l->acc_id.'">
								<textarea class="cacher input'.$l->acc_id.'" style="width:100%" name="lib">'.$l->acc_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->acc_id.'" name="id"/>
								<input type="hidden" value="'.$l->acc_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoireFinal confirm'.$l->acc_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoireAnnule annule'.$l->acc_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->acc_id.'" class="editAccessoire clique'.$l->acc_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet accessoire ?")" href'.site_url("parametre/supprimer_accessoire/".$l->acc_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_reactif_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_reactif_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation réactif</th>
						<th>Nombre d\'utilisation</th>
						<th>Examens liés</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_tas'.$l->rea_id.'">'.$l->rea_sLibelle.'</span>
							<form id="form-edit-tas'.$l->rea_id.'">
								<textarea class="cacher input_tas'.$l->rea_id.'>" style="width:100%" name="lib">'.$l->rea_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->rea_id.'" name="id"/>
								<input type="hidden" value="'.$l->rea_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_taux'. $l->rea_id.'">'.$l->rea_iNb.'</span>
							<form id="form-edit-taux'.$l->rea_id.'>">
								<input type="number" class="cacher input_taux'.$l->rea_id.'" style="width:100%" name="taux" value="'.$l->rea_iNb.'" />
							</form>
						</td>
						<td>
							
							<ul>';
								
									$reactif = $this->md_parametre->liste_examen_reactif_actifs($l->rea_id);
									if(empty($reactif)){
										echo "<i class='text-danger' style='font-size:12px'>Pas d'examens liés à ce réactif</i>";
									}
									else{
										echo "<ul>";
										foreach($reactif AS $r){
											echo "<li>".$r->lac_sLibelle."</li>";
										} 
										echo "</ul>";
									}
							
							echo'</ul>
						
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="" class="editTypeFinal confirm_tas cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="" class="editTypeAnnule annule_tas text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="" class="editType clique_tas" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce réactif ?")" href="'.site_url("parametre/supprimer_reactif/".$l->rea_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_reactif_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_reactif($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation réactif</th>
						<th>Nombre d\'utilisation</th>
						<th>Examens liés</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_tas'.$l->rea_id.'">'.$l->rea_sLibelle.'</span>
							<form id="form-edit-tas'.$l->rea_id.'">
								<textarea class="cacher input_tas'.$l->rea_id.'>" style="width:100%" name="lib">'.$l->rea_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->rea_id.'" name="id"/>
								<input type="hidden" value="'.$l->rea_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champs_taux'. $l->rea_id.'">'.$l->rea_iNb.'</span>
							<form id="form-edit-taux'.$l->rea_id.'>">
								<input type="number" class="cacher input_taux'.$l->rea_id.'" style="width:100%" name="taux" value="'.$l->rea_iNb.'" />
							</form>
						</td>
						<td>
							
							<ul>';
								
									$reactif = $this->md_parametre->liste_examen_reactif_actifs($l->rea_id);
									if(empty($reactif)){
										echo "<i class='text-danger' style='font-size:12px'>Pas d'examens liés à ce réactif</i>";
									}
									else{
										echo "<ul>";
										foreach($reactif AS $r){
											echo "<li>".$r->lac_sLibelle."</li>";
										} 
										echo "</ul>";
									}
							
							echo'</ul>
						
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="" class="editTypeFinal confirm_tas cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="" class="editTypeAnnule annule_tas text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="" class="editType clique_tas" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce réactif ?")" href="'.site_url("parametre/supprimer_reactif/".$l->rea_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_appareil_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_appareil_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Appareil</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->app_id.'">'.$l->app_sLibelle.'</span>
							<form id="form-type-examen'.$l->app_id.'">
								<textarea class="cacher input_ser'.$l->app_id.'" style="width:100%"name="lib">'.$l->app_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->app_id.'" name="id"/>
								<input type="hidden" value="'.$l->app_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareilFinal confirm_ser'.$l->app_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareilAnnule annule_ser'.$l->app_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareil clique_ser'.$l->app_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type d\'examen ?")" href="'.site_url("parametre/supprimer_appareil/".$l->app_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_appareil_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_appareil($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Appareil</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->app_id.'">'.$l->app_sLibelle.'</span>
							<form id="form-type-examen'.$l->app_id.'">
								<textarea class="cacher input_ser'.$l->app_id.'" style="width:100%"name="lib">'.$l->app_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->app_id.'" name="id"/>
								<input type="hidden" value="'.$l->app_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareilFinal confirm_ser'.$l->app_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareilAnnule annule_ser'.$l->app_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->app_id.'" class="editAppareil clique_ser'.$l->app_id.'>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ce type d\'examen ?")" href="'.site_url("parametre/supprimer_appareil/".$l->app_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_antecedent_personnel_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_antecedent_personnel_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lan_id.'">'.$l->lan_sLibelle.'</span>
							<form id="form-edit-lan'.$l->lan_id.'">
								<textarea class="cacher input'.$l->lan_id.'" style="width:100%" name="lib">'.$l->lan_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lan_id.'" name="id"/>
								<input type="hidden" value="'.$l->lan_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePersoFinal confirm'.$l->lan_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePersoAnnule annule'. $l->lan_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePerso clique'.$l->lan_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet antécédent personnel ?")" href="'.site_url("parametre/supprimer_antecedent_personnel/".$l->lan_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_antecedent_personnel_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_antecedent_personnel($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lan_id.'">'.$l->lan_sLibelle.'</span>
							<form id="form-edit-lan'.$l->lan_id.'">
								<textarea class="cacher input'.$l->lan_id.'" style="width:100%" name="lib">'.$l->lan_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lan_id.'" name="id"/>
								<input type="hidden" value="'.$l->lan_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePersoFinal confirm'.$l->lan_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePersoAnnule annule'. $l->lan_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lan_id.'" class="editAntePerso clique'.$l->lan_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet antécédent personnel ?")" href="'.site_url("parametre/supprimer_antecedent_personnel/".$l->lan_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_antecedent_familial_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_antecedent_familial_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->laf_id.'">'.$l->laf_sLibelle.'</span>
							<form id="form-edit-laf'.$l->laf_id.'">
								<textarea class="cacher input'.$l->laf_id.'" style="width:100%" name="lib">'.$l->laf_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->laf_id.'" name="id"/>
								<input type="hidden" value="'.$l->laf_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFamFinal confirm'.$l->laf_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFamAnnule annule'.$l->laf_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFam clique'.$l->laf_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet antécédent familial ?")" href="'.site_url("parametre/supprimer_antecedent_familial/".$l->laf_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_antecedent_familial_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_antecedent_familial($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->laf_id.'">'.$l->laf_sLibelle.'</span>
							<form id="form-edit-laf'.$l->laf_id.'">
								<textarea class="cacher input'.$l->laf_id.'" style="width:100%" name="lib">'.$l->laf_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->laf_id.'" name="id"/>
								<input type="hidden" value="'.$l->laf_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFamFinal confirm'.$l->laf_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFamAnnule annule'.$l->laf_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->laf_id.'" class="editAnteFam clique'.$l->laf_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cet antécédent familial ?")" href="'.site_url("parametre/supprimer_antecedent_familial/".$l->laf_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_allergie_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_allergie_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lia_id.'">'.$l->lia_sLibelle.'</span>
							<form id="form-edit-lia'.$l->lia_id.'">
								<textarea class="cacher input'.$l->lia_id.'" style="width:100%" name="lib">'.$l->lia_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lia_id.'" name="id"/>
								<input type="hidden" value="'.$l->lia_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergieFinal confirm'.$l->lia_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergieAnnule annule'.$l->lia_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergie clique'.$l->lia_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette allergie ?")" href="'.site_url("parametre/supprimer_allergie/".$l->lia_id).'>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_allergie_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_allergie($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lia_id.'">'.$l->lia_sLibelle.'</span>
							<form id="form-edit-lia'.$l->lia_id.'">
								<textarea class="cacher input'.$l->lia_id.'" style="width:100%" name="lib">'.$l->lia_sLibelle.'></textarea>
								<input type="hidden" value="'.$l->lia_id.'" name="id"/>
								<input type="hidden" value="'.$l->lia_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergieFinal confirm'.$l->lia_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergieAnnule annule'.$l->lia_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lia_id.'" class="editAllergie clique'.$l->lia_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette allergie ?")" href="'.site_url("parametre/supprimer_allergie/".$l->lia_id).'>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_activite_professionnelle_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_activite_professionnelle_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lap_id.'">'.$l->lap_sLibelle.'</span>
							<form id="form-edit-lap'.$l->lap_id.'">
								<textarea class="cacher input'.$l->lap_id.'" style="width:100%" name="lib">'.$l->lap_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lap_id.'" name="id"/>
								<input type="hidden" value="'.$l->lap_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActiviteFinal confirm'.$l->lap_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActiviteAnnule annule'.$l->lap_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActivite clique'.$l->lap_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette activité professionnelle ?")" href="'.site_url("parametre/supprimer_activite_professionnelle/".$l->lap_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_activite_professionnelle_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_activite_professionnelle($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lap_id.'">'.$l->lap_sLibelle.'</span>
							<form id="form-edit-lap'.$l->lap_id.'">
								<textarea class="cacher input'.$l->lap_id.'" style="width:100%" name="lib">'.$l->lap_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->lap_id.'" name="id"/>
								<input type="hidden" value="'.$l->lap_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActiviteFinal confirm'.$l->lap_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActiviteAnnule annule'.$l->lap_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lap_id.'" class="editActivite clique'.$l->lap_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette activité professionnelle ?")" href="'.site_url("parametre/supprimer_activite_professionnelle/".$l->lap_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_motifs_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_motifs_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th>Taux de réduction(%)</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->mod_id.'">'.$l->mod_sLibelle.'</span>
							<form id="form-edit-mod'.$l->mod_id.'">
								<textarea class="cacher input'.$l->mod_id.'" style="width:100%" name="lib">'.$l->mod_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mod_id.'" name="id"/>
								<input type="hidden" value="'.$l->mod_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champsTaux'.$l->mod_id .'">'.$l->mod_iTaux.'%</span>
							<form id="form-edit-taux'.$l->mod_id.'">
								<input class="cacher taux'.$l->mod_id.'" style="width:100%" value="'.$l->mod_iTaux.'" name="taux"/>
								<input type="hidden" value="'.$l->mod_id.'" name="id"/>
							</form>
						</td>
						
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editModifReductionFinal confirm'.$l->mod_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editModifAnnule annule'.$l->mod_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editMotifReduction clique'.$l->mod_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette activité professionnelle ?")" href="'.site_url("parametre/supprimer_motif_reduction/".$l->mod_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
			</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_motifs_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_motifs($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th>Taux de réduction(%)</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->mod_id.'">'.$l->mod_sLibelle.'</span>
							<form id="form-edit-mod'.$l->mod_id.'">
								<textarea class="cacher input'.$l->mod_id.'" style="width:100%" name="lib">'.$l->mod_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mod_id.'" name="id"/>
								<input type="hidden" value="'.$l->mod_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td>
							<span class="champsTaux'.$l->mod_id .'">'.$l->mod_iTaux.'%</span>
							<form id="form-edit-taux'.$l->mod_id.'">
								<input class="cacher taux'.$l->mod_id.'" style="width:100%" value="'.$l->mod_iTaux.'" name="taux"/>
								<input type="hidden" value="'.$l->mod_id.'" name="id"/>
							</form>
						</td>
						
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editModifReductionFinal confirm'.$l->mod_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editModifAnnule annule'.$l->mod_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mod_id.'" class="editMotifReduction clique'.$l->mod_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette activité professionnelle ?")" href="'.site_url("parametre/supprimer_motif_reduction/".$l->mod_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
				</table>
			   ';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_famille_maladie_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_famille_maladie_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->fma_id.'">'.$l->fma_sLibelle.'</span>
							<form id="form-edit-sal'.$l->fma_id.'>">
								<textarea class="cacher input'.$l->fma_id.'" style="width:100%" name="lib">'.$l->fma_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fma_id.'" name="id"/>
								<input type="hidden" value="'.$l->fma_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFmaFinal confirm'.$l->fma_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFmaAnnule annule'.$l->fma_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFma clique'.$l->fma_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette famille des maladies ?")" href="'.site_url("parametre/supprimer_famille_maladie/".$l->fma_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_famille_maladie_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$resultat=$this->md_parametre->recherche_famille_maladie($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->fma_id.'">'.$l->fma_sLibelle.'</span>
							<form id="form-edit-sal'.$l->fma_id.'>">
								<textarea class="cacher input'.$l->fma_id.'" style="width:100%" name="lib">'.$l->fma_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->fma_id.'" name="id"/>
								<input type="hidden" value="'.$l->fma_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFmaFinal confirm'.$l->fma_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFmaAnnule annule'.$l->fma_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->fma_id.'" class="editFma clique'.$l->fma_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette famille des maladies ?")" href="'.site_url("parametre/supprimer_famille_maladie/".$l->fma_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_maladie_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeCla = $this->md_parametre->liste_classe_actif(); 
			$resultat=$this->md_parametre->liste_maladie_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Classe</th>
						<th>Maladie</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dep'.$l->mal_id.'">'.$l->fma_sLibelle.'</span>
							<form id="form-edit_dep'.$l->mal_id.'">
								<select class="cacher input_dep'.$l->mal_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeCla AS $f){ 
									echo'<option value="'.$f->cla_id.'-/-'.$f->cla_sLibelle.'"';
									if($f->fma_id == $l->cla_id){echo "selected";} echo'>'.$f->cla_sLibelle.'</option>';
									 } 
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->mal_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit-ser'.$l->mal_id.'">
								<textarea class="cacher input_ser'.$l->mal_id.'" style="width:100%" name="lib">'.$l->mal_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mal_id.'" name="id"/>
								<input type="hidden" value="'.$l->mal_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladieFinal confirm_ser'.$l->mal_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladieAnnule annule_ser'.$l->mal_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladie clique_ser'.$l->mal_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette maladie ?")" href="'.site_url("parametre/supprimer_maladie/".$l->mal_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_maladie_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeCla = $this->md_parametre->liste_classe_actif(); 
			$resultat=$this->md_parametre->recherche_maladie($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Classe</th>
						<th>Maladie</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dep'.$l->mal_id.'">'.$l->fma_sLibelle.'</span>
							<form id="form-edit_dep'.$l->mal_id.'">
								<select class="cacher input_dep'.$l->mal_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
								foreach($listeCla AS $f){ 
									echo'<option value="'.$f->cla_id.'-/-'.$f->cla_sLibelle.'"';
									if($f->fma_id == $l->cla_id){echo "selected";} echo'>'.$f->cla_sLibelle.'</option>';
									 } 
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->mal_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit-ser'.$l->mal_id.'">
								<textarea class="cacher input_ser'.$l->mal_id.'" style="width:100%" name="lib">'.$l->mal_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->mal_id.'" name="id"/>
								<input type="hidden" value="'.$l->mal_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladieFinal confirm_ser'.$l->mal_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladieAnnule annule_ser'.$l->mal_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->mal_id.'" class="editMaladie clique_ser'.$l->mal_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette maladie ?")" href="'.site_url("parametre/supprimer_maladie/".$l->mal_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_specification_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeMal = $this->md_parametre->liste_maladie_actifs();
			$resultat=$this->md_parametre->liste_specification_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Maladie</th>
						<th>Spécification</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dep'.$l->sma_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit_dep'.$l->sma_id.'">
								<select class="cacher input_dep'.$l->sma_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
									foreach($listeMal AS $m){ 
									echo'<option value="'.$m->mal_id.'-/-'.$m->mal_sLibelle.'"';
									if($m->mal_id == $l->mal_id){echo "selected";} echo'>'.$m->mal_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->sma_id.'">'.$l->sma_sLibelle.'</span>
							<form id="form-edit-ser'.$l->sma_id.'">
								<textarea class="cacher input_ser'.$l->sma_id.'" style="width:100%" name="lib">'.$l->sma_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->sma_id.'" name="id"/>
								<input type="hidden" value="'.$l->sma_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecificationFinal confirm_ser'.$l->sma_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecificationAnnule annule_ser'.$l->sma_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecification clique_ser'.$l->sma_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette spécification de maladie ?")" href="'.site_url("parametre/supprimer_specification_maladie/".$l->sma_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_specification_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			$listeMal = $this->md_parametre->liste_maladie_actifs(); 
			$resultat=$this->md_parametre->recherche_specification($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Maladie</th>
						<th>Spécification</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_dep'.$l->sma_id.'">'.$l->mal_sLibelle.'</span>
							<form id="form-edit_dep'.$l->sma_id.'">
								<select class="cacher input_dep'.$l->sma_id.'" name="dep" style="width:100%;padding-bottom:10px;padding-top:10px">';
									foreach($listeMal AS $m){ 
									echo'<option value="'.$m->mal_id.'-/-'.$m->mal_sLibelle.'"';
									if($m->mal_id == $l->mal_id){echo "selected";} echo'>'.$m->mal_sLibelle.'</option>';
									}
								echo'</select>
							</form>
						</td>
						<td>
							<span class="champs_ser'.$l->sma_id.'">'.$l->sma_sLibelle.'</span>
							<form id="form-edit-ser'.$l->sma_id.'">
								<textarea class="cacher input_ser'.$l->sma_id.'" style="width:100%" name="lib">'.$l->sma_sLibelle.'</textarea>
								<input type="hidden" value="'.$l->sma_id.'" name="id"/>
								<input type="hidden" value="'.$l->sma_sLibelle.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecificationFinal confirm_ser'.$l->sma_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecificationAnnule annule_ser'.$l->sma_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->sma_id.'" class="editSpecification clique_ser'.$l->sma_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette spécification de maladie ?")" href="'.site_url("parametre/supprimer_specification_maladie/".$l->sma_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_entreprise_convention_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_entreprise_convention_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Entreprise</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->cpa_id.'">'.$l->cpa_sEnseigne.'</span>
							<form id="form-type-examen'.$l->cpa_id.'">
								<textarea class="cacher input_ser'.$l->cpa_id.'" style="width:100%" name="lib">'.$l->cpa_sEnseigne.'></textarea>
								<input type="hidden" value="'.$l->cpa_id.'" name="id"/>
								<input type="hidden" value="'.$l->cpa_sEnseigne.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamenFinal confirm_ser'.$l->cpa_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamenAnnule annule_ser'.$l->cpa_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamen clique_ser<?php echo $l->cpa_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette entreprise ?")" href="'.site_url("parametre/supprimer_convention_entreprise/".$l->cpa_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_entreprise_convention_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_entreprise_convention($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Entreprise</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->cpa_id.'">'.$l->cpa_sEnseigne.'</span>
							<form id="form-type-examen'.$l->cpa_id.'">
								<textarea class="cacher input_ser'.$l->cpa_id.'" style="width:100%" name="lib">'.$l->cpa_sEnseigne.'></textarea>
								<input type="hidden" value="'.$l->cpa_id.'" name="id"/>
								<input type="hidden" value="'.$l->cpa_sEnseigne.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamenFinal confirm_ser'.$l->cpa_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamenAnnule annule_ser'.$l->cpa_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->cpa_id.'" class="editTypeExamen clique_ser<?php echo $l->cpa_id; ?>" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette entreprise ?")" href="'.site_url("parametre/supprimer_convention_entreprise/".$l->cpa_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_fonctionnalite_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_fonctionnalite_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->flt_id.'">'. $l->flt_sLib.'</span>
							<form id=".form-edit-flt'.$l->flt_id.'">
								<textarea class="cacher input'.$l->flt_id.'" style="width:100%" name="lib">'.$l->flt_sLib.'</textarea>
								<input type="hidden" value="'.$l->flt_id.'" name="id"/>
								<input type="hidden" value="'.$l->flt_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'. $l->flt_id.'" class="editFonctionnaliteFinal confirm'.$l->flt_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->flt_id.'" class="editFonctionnaliteAnnule annule'.$l->flt_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->flt_id.'" class="editFonctionnalite clique'.$l->flt_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette fonctionnalité ?")" href="'.site_url("parametre/supprimer_fonctionnalite/".$l->flt_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_fonctionnalite_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_fonctionnalite($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:60px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->flt_id.'">'. $l->flt_sLib.'</span>
							<form id=".form-edit-flt'.$l->flt_id.'">
								<textarea class="cacher input'.$l->flt_id.'" style="width:100%" name="lib">'. $l->flt_sLib.'</textarea>
								<input type="hidden" value="'.$l->flt_id.'" name="id"/>
								<input type="hidden" value="'.$l->flt_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'. $l->flt_id.'" class="editFonctionnaliteFinal confirm'.$l->flt_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->flt_id.'" class="editFonctionnaliteAnnule annule'.$l->flt_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->flt_id.'" class="editFonctionnalite clique'.$l->flt_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette fonctionnalité ?")" href="'.site_url("parametre/supprimer_fonctionnalite/".$l->flt_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody>
						</table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_rubrique_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_rubrique_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
				   
					<thead>
						<tr>
							<th>Désignation</th>
							<th style="width:60px">Action</th>
						</tr>
					</thead>
					<tbody>
				   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->rub_id.'">'.$l->rub_sLib.'</span>
							<form id="form-edit-rub'. $l->rub_id.'">
								<textarea class="cacher input'.$l->rub_id.'" style="width:100%" name="lib">'.$l->rub_sLib.'</textarea>
								<input type="hidden" value="'.$l->rub_id.'" name="id"/>
								<input type="hidden" value="'.$l->rub_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubriqueFinal confirm'.$l->rub_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubriqueAnnule annule'.$l->rub_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubrique clique'.$l->rub_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette rubrique?")" href="'.site_url("parametre/supprimer_rubrique/".$l->rub_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_rubrique_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_rubrique($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
				   
					<thead>
						<tr>
							<th>Désignation</th>
							<th style="width:60px">Action</th>
						</tr>
					</thead>
					<tbody>
				   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->rub_id.'">'.$l->rub_sLib.'</span>
							<form id="form-edit-rub'. $l->rub_id.'">
								<textarea class="cacher input'.$l->rub_id.'" style="width:100%" name="lib">'.$l->rub_sLib.'</textarea>
								<input type="hidden" value="'.$l->rub_id.'" name="id"/>
								<input type="hidden" value="'.$l->rub_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubriqueFinal confirm'.$l->rub_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubriqueAnnule annule'.$l->rub_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->rub_id.'" class="editRubrique clique'.$l->rub_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer cette rubrique?")" href="'.site_url("parametre/supprimer_rubrique/".$l->rub_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_typeacte_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_typeacte_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th style="width:40%">Libellé</th>
						<th style="width:25%">Service(%)</th>
						<th style="width:25%">Administration(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->tya_id.'">'.$l->tya_sLib.'</span>
							<form id="orm-edit-actgpe'.$l->tya_id.'">
								<textarea class="cacher input_ser'.$l->tya_id.'" style="width:100%" name="lib">'.$l->tya_sLib.'</textarea>
								<input type="hidden" value="'.$l->tya_id.'" name="id"/>
								<input type="hidden" value="'.$l->tya_sLib.'" name="nom"/>
							</form>
						</td>									
						<td>
							<span class="champs_ser2'.$l->tya_id.'">'.$l->tya_iSer.'</span>
							<form id="form-edit-actgpe2'.$l->tya_id.'">
								<input type="number" value="'.$l->tya_iSer.'" min="0" rel="'.$l->tya_id.'" class="cacher input_2 input_ser2'.$l->tya_id.'" style="width:100%;height:49px" name="service"/>
								<input type="hidden" value="<?php echo $l->tya_iSer; ?>" name="nom"/>
							</form>
						</td>									
						<td>
							<span class="champs_ser3'.$l->tya_id.'">'.$l->tya_iAdm.'</span>
							<form id="form-edit-actgpe3'.$l->tya_id.'">
								<textarea class="cacher input_ser3'.$l->tya_id.'" style="width:100%" name="admin" readonly>'.$l->tya_iAdm.'</textarea>
								<input type="hidden" value="<?php echo $l->tya_iAdm; ?>" name="nom"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpeFinal confirm_ser'.$l->tya_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpeAnnule annule_ser'.$l->tya_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpe clique_ser'.$l->tya_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_acte_groupe/".$l->tya_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_typeacte_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_typeacte($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th style="width:40%">Libellé</th>
						<th style="width:25%">Service(%)</th>
						<th style="width:25%">Administration(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_ser'.$l->tya_id.'">'.$l->tya_sLib.'</span>
							<form id="orm-edit-actgpe'.$l->tya_id.'">
								<textarea class="cacher input_ser'.$l->tya_id.'" style="width:100%" name="lib">'.$l->tya_sLib.'</textarea>
								<input type="hidden" value="'.$l->tya_id.'" name="id"/>
								<input type="hidden" value="'.$l->tya_sLib.'" name="nom"/>
							</form>
						</td>									
						<td>
							<span class="champs_ser2'.$l->tya_id.'">'.$l->tya_iSer.'</span>
							<form id="form-edit-actgpe2'.$l->tya_id.'">
								<input type="number" value="'.$l->tya_iSer.'" min="0" rel="'.$l->tya_id.'" class="cacher input_2 input_ser2'.$l->tya_id.'" style="width:100%;height:49px" name="service"/>
								<input type="hidden" value="<?php echo $l->tya_iSer; ?>" name="nom"/>
							</form>
						</td>									
						<td>
							<span class="champs_ser3'.$l->tya_id.'">'.$l->tya_iAdm.'</span>
							<form id="form-edit-actgpe3'.$l->tya_id.'">
								<textarea class="cacher input_ser3'.$l->tya_id.'" style="width:100%" name="admin" readonly>'.$l->tya_iAdm.'</textarea>
								<input type="hidden" value="<?php echo $l->tya_iAdm; ?>" name="nom"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpeFinal confirm_ser'.$l->tya_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpeAnnule annule_ser'.$l->tya_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tya_id.'" class="editActegpe clique_ser'.$l->tya_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_acte_groupe/".$l->tya_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_prescripteur_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_prescripteur_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th style="width:40%">Nom</th>
						<th style="width:25%">Prenom</th>
						<th style="width:25%">Titre</th>
						<th style="width:25%">Pourcentage(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_Pre'.$l->pre_id.'">'.$l->pre_sNom.'</span>
							<form id="form-edit-Pre'.$l->pre_id.'">
								<textarea class="cacher input_Pre'.$l->pre_id.'" style="width:100%" name="nom">'.$l->pre_sNom.'</textarea>
								<input type="hidden" value="'.$l->pre_id.'" name="id"/>
								<input type="hidden" value="'.$l->pre_sNom.'" name="nom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Pre2'.$l->pre_id.'">'.$l->pre_sPrenom.'</span>
							<form id="form-edit-Pre2'.$l->pre_id.'">
								<textarea class="cacher input_Pre2'.$l->pre_id.'" style="width:100%" name="prenom">'.$l->pre_sPrenom.'</textarea>
								<input type="hidden" value="'.$l->pre_sPrenom.'" name="prenom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Pre3'.$l->pre_id.'">'.$l->pre_sTitre.'</span>
							<form id="form-edit-Pre3'.$l->pre_id.'">
								<select class="cacher input_Pre3'.$l->pre_id.'" name="titre">
									<option';
									if($l->pre_sTitre="Sans titre"){ echo'selected'; } echo'value="Sans titre">Sans titre</option>
									<option'; if($l->pre_sTitre="Docteur"){ echo'selected'; } echo' value="Docteur">Docteur</option>
									<option '; if($l->pre_sTitre="Professeur"){ echo'selected'; } echo'value="Professeur">Professeur</option>
								</select>
								<input type="hidden" value="'.$l->pre_sTitre.'" name="titre1"/>
							</form>
						</td>
						<td>
							<span class="champs_Pre4'.$l->pre_id.'>">'.$l->pre_iPourcentage.'</span>
							<form id="form-edit-Pre4'.$l->pre_id.'">
								<textarea class="cacher input_Pre3'.$l->pre_id.'" style="width:100%" name="pourcentage" >'.$l->pre_iPourcentage.'</textarea>
								<input type="hidden" value="'.$l->pre_iPourcentage.'" name="pourcentage1"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPreFinal confirm_Pre'.$l->pre_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPreAnnule annule_Pre'.$l->pre_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPre clique_Pre'.$l->pre_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_prescripteur/".$l->pre_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_prescripteur_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_prescripteur($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th style="width:40%">Nom</th>
						<th style="width:25%">Prenom</th>
						<th style="width:25%">Titre</th>
						<th style="width:25%">Pourcentage(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_Pre'.$l->pre_id.'">'.$l->pre_sNom.'</span>
							<form id="form-edit-Pre'.$l->pre_id.'">
								<textarea class="cacher input_Pre'.$l->pre_id.'" style="width:100%" name="nom">'.$l->pre_sNom.'</textarea>
								<input type="hidden" value="'.$l->pre_id.'" name="id"/>
								<input type="hidden" value="'.$l->pre_sNom.'" name="nom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Pre2'.$l->pre_id.'">'.$l->pre_sPrenom.'</span>
							<form id="form-edit-Pre2'.$l->pre_id.'">
								<textarea class="cacher input_Pre2'.$l->pre_id.'" style="width:100%" name="prenom">'.$l->pre_sPrenom.'</textarea>
								<input type="hidden" value="'.$l->pre_sPrenom.'" name="prenom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Pre3'.$l->pre_id.'">'.$l->pre_sTitre.'</span>
							<form id="form-edit-Pre3'.$l->pre_id.'">
								<select class="cacher input_Pre3'.$l->pre_id.'" name="titre">
									<option';
									if($l->pre_sTitre="Sans titre"){ echo'selected'; } echo'value="Sans titre">Sans titre</option>
									<option'; if($l->pre_sTitre="Docteur"){ echo'selected'; } echo' value="Docteur">Docteur</option>
									<option '; if($l->pre_sTitre="Professeur"){ echo'selected'; } echo'value="Professeur">Professeur</option>
								</select>
								<input type="hidden" value="'.$l->pre_sTitre.'" name="titre1"/>
							</form>
						</td>
						<td>
							<span class="champs_Pre4'.$l->pre_id.'>">'.$l->pre_iPourcentage.'</span>
							<form id="form-edit-Pre4'.$l->pre_id.'">
								<textarea class="cacher input_Pre3'.$l->pre_id.'" style="width:100%" name="pourcentage" >'.$l->pre_iPourcentage.'</textarea>
								<input type="hidden" value="'.$l->pre_iPourcentage.'" name="pourcentage1"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPreFinal confirm_Pre'.$l->pre_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPreAnnule annule_Pre'.$l->pre_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->pre_id.'" class="editPre clique_Pre'.$l->pre_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_prescripteur/".$l->pre_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_quotes_parts_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->liste_quotes_parts_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr><th style="width:10%">Titre</th>
						<th style="width:40%">Nom</th>
						<th style="width:25%">Prenom</th>
						<th style="width:30%">Quote part(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_Tqp3'.$l->tqp_id.'">'.$l->per_sTitre.'</span>
							<form id="form-edit-Tqp3'.$l->tqp_id.'">
							<textarea class="cacher input_Tqp2'.$l->tqp_id.'" style="width:100%" name="titre" readonly >'.$l->per_sTitre.'</textarea>
								<input type="hidden" value="'.$l->per_sTitre.'" name="titre1"/>
							</form>
						</td>
						<td>
							<span class="champs_Tqp'.$l->tqp_id.'">'.$l->per_sNom.'</span>
							<form id="form-edit-Tqp'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp'.$l->tqp_id.'" style="width:100%" name="nom" readonly>'.$l->per_sNom.'</textarea>
								<input type="hidden" value="'.$l->tqp_id.'" name="id"/>
								<input type="hidden" value="'.$l->per_sNom.'" name="nom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Tqp2'.$l->tqp_id.'">'.$l->per_sPrenom.'</span>
							<form id="form-edit-Tqp2'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp2'.$l->tqp_id.'" style="width:100%" name="prenom" readonly >'.$l->per_sPrenom.'</textarea>
								<input type="hidden" value="'.$l->per_sPrenom.'" name="prenom1" />
							</form>
						</td>									
						
						<td>
							<span class="champs_Tqp4'.$l->tqp_id.'">'.$l->tqp_iPourcentage.'</span>
							<form id="form-edit-Tqp4'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp4'.$l->tqp_id.'" style="width:100%" name="pourcentage" >'.$l->tqp_iPourcentage.'</textarea>
								<input type="hidden" value="'.$l->tqp_iPourcentage.'" name="pourcentage1"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqpFinal confirm_Tqp'.$l->tqp_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqpAnnule annule_Tqp'.$l->tqp_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqp clique_Tqp'.$l->tqp_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_quota_part/".$l->tqp_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_quotes_parts_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_parametre->recherche_quotes_parts($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr><th style="width:10%">Titre</th>
						<th style="width:40%">Nom</th>
						<th style="width:25%">Prenom</th>
						<th style="width:30%">Quote part(%)</th>
						<th style="width:10%">Actions</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs_Tqp3'.$l->tqp_id.'">'.$l->per_sTitre.'</span>
							<form id="form-edit-Tqp3'.$l->tqp_id.'">
							<textarea class="cacher input_Tqp2'.$l->tqp_id.'" style="width:100%" name="titre" readonly >'.$l->per_sTitre.'</textarea>
								<input type="hidden" value="'.$l->per_sTitre.'" name="titre1"/>
							</form>
						</td>
						<td>
							<span class="champs_Tqp'.$l->tqp_id.'">'.$l->per_sNom.'</span>
							<form id="form-edit-Tqp'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp'.$l->tqp_id.'" style="width:100%" name="nom" readonly>'.$l->per_sNom.'</textarea>
								<input type="hidden" value="'.$l->tqp_id.'" name="id"/>
								<input type="hidden" value="'.$l->per_sNom.'" name="nom1"/>
							</form>
						</td>									
						<td>
							<span class="champs_Tqp2'.$l->tqp_id.'">'.$l->per_sPrenom.'</span>
							<form id="form-edit-Tqp2'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp2'.$l->tqp_id.'" style="width:100%" name="prenom" readonly >'.$l->per_sPrenom.'</textarea>
								<input type="hidden" value="'.$l->per_sPrenom.'" name="prenom1" />
							</form>
						</td>									
						
						<td>
							<span class="champs_Tqp4'.$l->tqp_id.'">'.$l->tqp_iPourcentage.'</span>
							<form id="form-edit-Tqp4'.$l->tqp_id.'">
								<textarea class="cacher input_Tqp4'.$l->tqp_id.'" style="width:100%" name="pourcentage" >'.$l->tqp_iPourcentage.'</textarea>
								<input type="hidden" value="'.$l->tqp_iPourcentage.'" name="pourcentage1"/>
							</form>
						</td>								
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqpFinal confirm_Tqp'.$l->tqp_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqpAnnule annule_Tqp'.$l->tqp_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->tqp_id.'" class="editTqp clique_Tqp'.$l->tqp_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm("Êtes-vous sûr de supprimer ?")" href="'.site_url("parametre/supprimer_quota_part/".$l->tqp_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function recherche_AntecedentObs_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_smi->liste_antecedent_Obstetricaux_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lob_id.'">'.$l->lob_sLib.'</span>
							<form id="form-edit-lob'.$l->lob_id .'">
								<textarea class="cacher input'.$l->lob_id.'" style="width:100%" name="lib">'.$l->lob_sLib.'</textarea>
								<input type="hidden" value="'.$l->lob_id.'" name="id"/>
								<input type="hidden" value="'.$l->lob_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lob_id.'" class="editAnteObsFinal confirm'.$l->lob_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lob_id.'" class="editAnteObsAnnule annule'.$l->lob_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lob_id.' class="editAnteObs clique'.$l->lob_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm(\'Êtes-vous sûr de supprimer cet antécédent personnel ?\')" href="'.site_url("parametre/supprimer_AntecedentObs/".$l->lob_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_AntecedentObs_list()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_smi->recherche_antecedent_Obstetricaux($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lob_id.'">'.$l->lob_sLib.'</span>
							<form id="form-edit-lob'.$l->lob_id .'">
								<textarea class="cacher input'.$l->lob_id.'" style="width:100%" name="lib">'.$l->lob_sLib.'</textarea>
								<input type="hidden" value="'.$l->lob_id.'" name="id"/>
								<input type="hidden" value="'.$l->lob_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lob_id.'" class="editAnteObsFinal confirm'.$l->lob_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lob_id.'" class="editAnteObsAnnule annule'.$l->lob_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lob_id.' class="editAnteObs clique'.$l->lob_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm(\'Êtes-vous sûr de supprimer cet antécédent personnel ?\')" href="'.site_url("parametre/supprimer_AntecedentObs/".$l->lob_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	
	public function liste_source_info_100()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_smi->liste_source_info_100();
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lso_id.'">'.$l->lso_sLib.'</span>
							<form id="form-edit-lob'.$l->lso_id .'">
								<textarea class="cacher input'.$l->lso_id.'" style="width:100%" name="lib">'.$l->lso_sLib.'</textarea>
								<input type="hidden" value="'.$l->lso_id.'" name="id"/>
								<input type="hidden" value="'.$l->lso_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lso_id.'" class="editAnteObsFinal confirm'.$l->lso_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lso_id.'" class="editAnteObsAnnule annule'.$l->lso_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lso_id.' class="editAnteObs clique'.$l->lso_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm(\'Êtes-vous sûr de supprimer cet antécédent personnel ?\')" href="'.site_url("parametre/supprimer_AntecedentObs/".$l->lso_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	
	public function recherche_source_info()
	{
		date_default_timezone_set('Africa/Brazzaville');
		$data = $this->input->post();
		if(empty($data)){
			return redirect();
			// var_dump($data);
		}
		else{
			
			$resultat=$this->md_smi->recherche_source_info($data["search"]);
			$liste="";
			echo'<table class="table table-bordered table-striped table-hover " id="example">
			   
				<thead>
					<tr>
						<th>Désignation</th>
						<th style="width:80px">Action</th>
					</tr>
				</thead>
				<tbody>
			   ';
			foreach($resultat as $l){
				echo '<tr>
						<td>
							<span class="champs'.$l->lso_id.'">'.$l->lso_sLib.'</span>
							<form id="form-edit-lob'.$l->lso_id .'">
								<textarea class="cacher input'.$l->lso_id.'" style="width:100%" name="lib">'.$l->lso_sLib.'</textarea>
								<input type="hidden" value="'.$l->lso_id.'" name="id"/>
								<input type="hidden" value="'.$l->lso_sLib.'" name="nom"/>
							</form>
						</td>
						<td class="text-center">
							<a href="javascript:();" rel="'.$l->lso_id.'" class="editAnteObsFinal confirm'.$l->lso_id.' cacher" title="Modifier" style="text-decoration:underline">Modifier</a>
							<a href="javascript:();" rel="'.$l->lso_id.'" class="editAnteObsAnnule annule'.$l->lso_id.' text-danger cacher" title="Annuler" style="text-decoration:underline">Annuler</a> &nbsp;
							<a href="javascript:();" rel="'.$l->lso_id.' class="editAnteObs clique'.$l->lso_id.'" title="Modifier"><i class="zmdi zmdi-edit" style="font-size:20px"></i></a> &nbsp;
							<a onClick="return confirm(\'Êtes-vous sûr de supprimer cet source d\'information ?\')" href="'.site_url("parametre/supprimer_AntecedentObs/".$l->lso_id).'" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>
						</td>
					</tr>';
			}
			echo'</tbody></table>';
			echo'<script type="text/javascript" src="'.base_url('assets/js/action.js').'"></script>';
			echo '<script src="'.base_url('assets/plugins/jquery-datatable/datatables.min.js').'"></script>';
			echo '<script src="'.base_url('assets/js/pages/tables/data-table.js').'"></script>';
		}
	}
	//RABY
}
