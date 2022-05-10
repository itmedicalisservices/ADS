
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<?php $liste = $this->md_pharmacie->Liste_medicaments(); ?>

<?php $listeFam = $this->md_parametre->liste_famille_produit_actifs(); ?>
<?php $listeCat = $this->md_parametre->liste_categorie_produit_actifs(); ?>
<?php $listeFor = $this->md_parametre->liste_forme_produit_actifs(); ?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2 class=" pull-left">liste des produits paramétrés</h2><button type="button" class="btn bg-blue-grey waves-effect ajout_service pull-right" style="color:#fff"><i class="fa fa-plus"></i> <b> nouveau</b></button>
                    </div>
                    <div class="body table-responsive"> 
						<table id="example" class="table table-bordered table-striped table-hover">
						   
							<thead>
								<tr>
									<th>Nom commercial</th>
									<th>Caractéristiques</th>
									<th>Conditionement</th>
									<?php //var_dump($liste)?>
									<th style="width:60px">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($liste AS $l){ ?>
								<tr>
									<th class="text-success"><?=$l->med_sNc;?></th>
									<td><?=$l->for_sLibelle." ".$l->med_iDosage.$l->med_sUnite;?></td>
									<td><?=$l->med_sConditionment;?></td>
									<td class="text-center">
										<a href="<?php echo site_url("pharmacie/modifier_produit/".$l->med_id); ?>" class="delete" title="modifier"><i class="fa fa-edit text-success" style="font-size:20px"></i></a>&nbsp;&nbsp;
										<a onClick="return confirm('Êtes-vous sûr de supprimer ce produit ?')" href="<?php echo site_url("pharmacie/supprimer_produit/".$l->med_id); ?>" class="delete" title="Supprimer"><i class="zmdi zmdi-delete text-danger" style="font-size:20px"></i></a>&nbsp;&nbsp;
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Large Size -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:20px;max-width:80%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body" style="max-height:500px; overflow:auto;">
			
				 <div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<div class="header">
							<h2>Ajoutez un nouveau produit</h2>
							
						</div>
						<div class="body table-responsive">
							<form id="form-produit">
							<div class="col-lg-12 col-md-12 col-sm-12 retour"></div>
								<table class="table table-bordered table-striped table-hover">
									<thead>
										<tr>
											<th style="">Nom commercial *</th>
											<th style="">Dosage </th>
											<th style="">Unité </th>
										</tr>
										<tr>
											<td>
												<input type="text" name="nc" class="obligatoire" placeholder="" style="width:100%;" />
											</td>
													
											<td>
												<input type="number" min="0"  class="" name="dos" placeholder=""  style="width:100%;"/>
											</td>			
											<td>
												<input type="text" class="" name="uni" placeholder=""  style="width:100%;" />
											</td>
										</tr>										
										<tr>
											
											<th >Forme *</th>
											<th colspan="2">Conditionement *</th>
										</tr>
										<tr>
											<td>	
												<select name="fors" id="fors" class=" obligatoire" style="width:100%; height:30px;">
													<option value="">-- Forme * --</option>
													<?php foreach($listeFor AS $listeFors){ ?>
													<option value="<?php echo $listeFors->for_id ;?>"><?php echo $listeFors->for_sLibelle?></option>
													<?php } ?>
												</select>
											</td>
											<td colspan="2">
												<input type="text" class="obligatoire" name="condi" placeholder=""  style="width:100%;"/>
											</td>	
											
										</tr>
									</thead>
								 </table>	
							</form>
							
						</div>
					</div>
				</div>
			
			</div>
            <div class="modal-footer">
                <a href="javascript:();" class="btn btn-success waves-effect addProduit" style="color:#fff"><i class="fa fa-check"></i> Enregistrer</a>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<button style="display:none" type="button" class="btn bg-blue-grey waves-effect finish" id="finish">BLUE GREY</button>
<!-- For Material Design Colors -->
<div class="modal fade" id="mdModal" tabindex="-1" role="dialog">
	
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h4 class="modal-title" style="margin-left:70px" id="defaultModalLabel">SERVICE DES RESSOURCES HUMAINES</h4>
            </div>
            <div class="modal-body text-center"> Opération effectuée avec succès <br><img src="<?php echo base_url("assets/images/icons8-attendance-50.png");?>"/></div>
            <div id="refresh"></div>
        </div>
    </div>
</div>

<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>