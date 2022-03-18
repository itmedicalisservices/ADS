<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	$articleParPage = 12;
	
	/* tout le monde */
	$articleTotaux  = $this->md_patient->nb_patients();
	$pagesTotales = ceil($articleTotaux->nb/$articleParPage);
	if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pagesTotales){
		$_GET['page'] = intval($_GET['page']);
		$pageActuelle = $_GET['page'];
	}else{
		$pageActuelle = 1;
	}
	
	//$listes = $this->md_patient->liste_patients($articleParPage,$pageActuelle);
	//$liste = $this->md_patient->liste_patient();
	$liste = $this->md_patient->liste_patient_100();
	
	
	 //var_dump($liste);
 ?>
 
 
 
 
<section class="content home">
    <div class="container-fluid"> 
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Rechercher le dossier patient (<?php echo $articleTotaux->nb;?>)</h2>
								<br><br><input type="text" name="search" id="search" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
								<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
								<?php //var_dump($liste);?>
							</div>
							<div class="body table-responsive">
								<table  id="" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th>N° Matricule</th>
											<th>Photo</th>
											<th>Nom</th>
											<th>Prénom</th>
											<th>Age</th>
											<th>Téléphone</th>
											<th>Adresse</th>
											<th style="width:60px">Consulter</th>
										</tr>
									</thead>
								   
									<tbody class="listePat">
									<?php foreach($liste AS $l){ ?>
										<tr>
											<td><?php echo $l->pat_sMatricule; ?></td>
											<td><a href="#" class="p-profile-pix"><img src="<?php echo base_url($l->pat_sAvatar); ?>" width="40" height="40" alt="user" class="img-thumbnail img-fluid"></a></td>
											<td><a href="<?php echo site_url("patient/voir/".$l->pat_id); ?>"><?php echo $l->pat_sNom; ?> </a> </td>
											<td><?php echo $l->pat_sPrenom; ?></td>
											<td><?php $ageAnnee= $this->md_config->ageAnnee($l->pat_dDateNaiss); if($ageAnnee>1){echo $ageAnnee." ans";}else if($ageAnnee ==1){echo $ageAnnee." an";}else{echo $this->md_config->ageMois($l->pat_dDateNaiss)." mois";} ?></td>
											<td><?php if(!is_null($l->pat_sTel)){echo $l->pat_sTel;}else{echo "<i>Non renseigné</i>";} ?></td>
											<td><?php if(!is_null($l->pat_sAdresse)){echo $l->pat_sAdresse;}else{echo "<i>Non renseignée</i>";} ?></td>
											<td><a href="<?php echo site_url("impression/dossier_medical_passage/".$l->pat_id); ?>" class="btn bg-blue-grey waves-effect btn-sm" style="color:#fff">le dossier</a></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
                        
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>

<script>
   /* $( document ).ready(function() {
        // console.log( "document loaded" );
		$('#search').keyup(function(){
			search_table($(this).val());
		});
		
		function search_table(value){
			$('#patient_table tr').each(function(){
				var found = 'false';
				$(this).each(function(){
					if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
					{
						found = 'true';
					}
				});
				if(found == 'true'){
					$(this).show();
				}else{	
					$(this).hide();
				}
			});
		}
    });*/
	
	
	
	
		function recherche(){
			alert(1);
			if($("#search").val() !=""){
				$.ajax({
					type:"POST",
					url: recherche_patient_list,
					data:"search="+$("#search").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".listePat").html('<tr><td colspan="7"><em>Aucun patient trouver</em></td></tr>');
					}else{
						$(".listePat").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_patient_list_100,
					data:"search="+$("#search").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".listePat").html('<tr><td colspan="7"><em>Aucun patient trouver</em></td></tr>');
					}else{
						$(".listePat").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
 
