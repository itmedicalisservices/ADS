<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php 
	$articleParPage = 500;
	
	/* tout le monde */
	//$articleTotaux  = count($this->md_patient->nb_patients());
	$articleTotaux  = $this->md_patient->nb_patients_hos();
	$pagesTotales = ceil($articleTotaux->nb/$articleParPage);
	if(isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $pagesTotales){
		$_GET['page'] = intval($_GET['page']);
		$pageActuelle = $_GET['page'];
	}else{
		$pageActuelle = 1;
	}
	
	//$liste = $this->md_patient->liste_patients($articleParPage,$pageActuelle);
	 $liste = $this->md_patient->liste_patient();
	
	 $listeEncours = $this->md_patient->liste_hospitalisation_100();

	
	// var_dump($pms);
 ?>
 
 
 


<section class="content home">
    <div class="container-fluid"> 
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active in" id="income">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="card">
							<div class="header">
								<h2>Liste des patients en hospitalisation (<?php echo $articleTotaux->nb;?>)</h2>
								<br><br><input type="text" name="search" id="search" placeholder="Recherche ..." style="width:30%;padding-left:1%;margin-left:1%" oninput="recherche1()" />
								<a style="margin:0px" rel="" href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey" id="" onclick="recherche()"><i class="fa fa-search" ></i></a>
							</div>
							<div class="body table-responsive">
								<table id="" class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th rowspan="2">N° Matricule</th>
											<th rowspan="2">Nom</th>
											<th rowspan="2">Prénom</th>
											<th colspan="4" class="text-center">Localisation</th>
											<th rowspan="2">Disposition</th>
											<th rowspan="2">Début d'hospitalisation</th>
											<th rowspan="2">Action</th>
										</tr>
										<tr>
											<th >Service</th>
											<th >Unité</th>
											<th >Salle</th>
											<th >Lit</th>
										</tr>
									</thead>
								   
									<tbody class="listeHos">
									<?php foreach($listeEncours AS $le){ ?>
										<tr>
											<td><?php echo $le->pat_sMatricule; ?></td>
											<td><?php echo $le->pat_sNom; ?></td>
											<td><?php echo $le->pat_sPrenom; ?></td>
											<td>
												<?php echo $le->ser_sLibelle; ?>
											</td>
											<td>
												<?php echo $le->uni_sLibelle; ?>
											</td>
											<td>
												<?php echo $le->cha_sLibelle; ?>
											</td>
											<td>
												<?php echo $le->lit_sLibelle; ?>
											</td>
											<td><?php echo $le->hos_sType; ?></td>
											<td class="text-center"><?php echo $this->md_config->affDateTimeFr($le->hos_dDate);?></td>
											<td class="text-center"><a style="margin:0px" title="Imprission facture d'admission" rel="" href="<?php echo site_url("impression/facuture_admission/".$le->pat_id); ?>" class="btn btn-sm waves-effect bg-blue-grey" id="" ><i class="fa fa-print mb-2" ></i></a></td>
											
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
                        
                    </div>
                </div>
                          
            </div>
            
            <div role="tabpanel" class="tab-pane page-calendar" id="sales">
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
			
                    </div>
                </div>
            </div>  
			
            <div role="tabpanel" class="tab-pane page-calendar" id="sales2">
               
				
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
			
                     
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.9.1.min.js');?>"></script>
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
			
			if($("#search").val() !=""){
				$.ajax({
					type:"POST",
					url: recherche_patient_hos_list,
					data:"search="+$("#search").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					// alert(retour);
					if(retour == ""){
						$(".listeHos").html('<tr><td colspan="7"><em>Aucun patient trouver</em></td></tr>');
					}else{
						$(".listeHos").html(retour);
					}
					
					
				});
			}
		}
		
		function recherche1(){
			
			if($("#search").val() ==""){
				
				$.ajax({
					type:"POST",
					url: recherche_patient_hos_list_100,
					data:"search="+$("#search").val(),
					async:true,
					error:function(xhr, status, error){
						alert(xhr.responseText);
					}
					
				})
				.done(function(retour){
					 //alert(retour);
					if(retour == ""){
						$(".listeHos").html('<tr><td colspan="7"><em>Aucun patient trouver</em></td></tr>');
					}else{
						$(".listeHos").html(retour);
					}
					
					
				});
			}
			
		}
 
    // $( window ).on( "load", function() {
        // console.log( "window loaded" );
    // });
    </script>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>
 
﻿