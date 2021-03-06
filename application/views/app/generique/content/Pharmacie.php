
<?php $liste = $this->md_pharmacie->liste_entrees(); ?>
<?php $listeassurance = $this->md_parametre->liste_assureurs_actifs(); ?>
<?php $listetype = $this->md_parametre->liste_type_couverture_assurance_actifs(); ?>
<?php $listeRE = $this->md_pharmacie->liste_recu_caisse2(); ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        <div class="row clearfix">
			
            <div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
                    <div class="header">
                        <h2>Disponsation des medicaments</h2>
                        <?php //var_dump($liste); ?>
                    </div>
					<div class="body table-responsive"> 
						<table id="example" class="table table-bordered table-striped table-hover" style="font-size:12px">
							<thead>
								<tr>
									<th>Produit</th>
									<th>Quantit?</th>
									<th>Patient</th>
									<th style="width:60px">Action</th>
								</tr>
							</thead>
						   
							<tbody>
							<?php foreach($listeRE AS $l){ ?>
								<tr>
									<td>
										<?php echo $l->med_sNc." ".$l->for_sLibelle; ?>
									</td>
									<td>
										<?php echo $l->elf_iQte; ?>
									</td>
									<td>
										<?php echo $l->pat_sNom." ".$l->pat_sPrenom; ?>
									</td>
									
									<td class="text-center">
										<a  href="<?=site_url("pharmacie/dispenser/".$l->fac_id."/".$l->med_id);?>" class="btn bg-blue-grey waves-effect pull-right" style="color:#fff"> <b>DISPONSER</b></button>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
                    </div>
					
                    <!--<div class="body table-responsive">
						<form id="form-vendre">
							<div id="reception"></div>
							<table class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th colspan="4">Code ? barre du produit *</th>
										<th colspan="2" style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
									</tr>
									<tr>
										<td colspan="4">
											<input style="width:100%" type="text" name="" id="libCode" />
											<span style="color:red" id="retour" class="retour"></span>
											<input style="" type="hidden" name="" id="prod" />
											<input style="" type="hidden" name="" id="seuil" />
											<input style="" type="hidden" name="" id="pu" />
											<input style="" type="hidden" name="" id="ach" />
										</td>
									
										<td colspan="2" class="text-center">
											<a href="javascript:();" class="btn btn-sm waves-effect bg-blue-grey cacher" id="addFictif"><i class="fa fa-plus"></i></a>
										</td>
									</tr>									
									<tr>
										<th>Produit *</th>
										<th style="width:100px" class="text-center">PU (Fcfa) *</th>
										<th style="width:100px" class="text-center">Quantit? *</th>
										<th style="width:200px"  class="text-center">Montant (Fcfa) </th>
										<th style="width:60px"  class="text-center"><i class="fa fa-wrench"></i></th>
									</tr>
								</thead>
							   
								<tbody id="tbody"></tbody>
								<tfoot>
									<tr>
										<td colspan="6" class="text-right">
											<strong>Total ? payer:</strong> <input type="text" id="tfooter" name="montantTotal" placeholder="0"  readonly />										
										</td>
									</tr>										
									<tr>
										<td colspan="6" class="text-right">
											<strong>Type de paiement:</strong> 
											<select name="typePaie" id="select" style="width:180px;padding-top:5px;padding-bottom:5px;">
												<option value="comptant">comptant</option>
												<option value="bonpharmacie">bon pharmacie</option>
												<option value="assurance">assurance</option>
											</select>										
										</td>
									</tr>									
									<tr id="assu" class="cacher">
										<td colspan="6" class="text-right">
											<select name="ass" style="width:180px;padding-top:5px;padding-bottom:5px;">
												<option value="">----- assureur -----</option>
												<?php foreach($listeassurance AS $la){?>
												<option value="<?=$la->ass_id;?>"><?=$la->ass_sLibelle;?></option>
												<?php }?>
											</select>								
											
											<select name="tas" id="type" style="width:180px;padding-top:5px;padding-bottom:5px;">
												<option value="">----- Type d'assurance -----</option>
												<?php foreach($listetype AS $t){?>
												<option value="<?=$t->tas_id."-/-".$t->tas_iTaux;?>"><?=$t->tas_sLibelle;?></option>
												<?php }?>
											</select><br>
											<span id="mess"></span>
											 <input type="hidden" id="montantAss" name="montantAss" />									
										</td>
									</tr>	
									
									<tr id="client" class="cacher">
										<td colspan="6" class="text-right">
											<strong>N? de Bon de pharmacie:</strong> <input type="text" id="bon" name="bon" />
											<br>
											<span class="retourBon" style="color:red"></span>
										</td>
									</tr>
									<tr id="paye">
										<td colspan="6" class="text-right">
											<strong>Montant pay?:</strong> <input type="text" name="montantPaye" placeholder="0" />										
										</td>
									</tr>
								</tfoot>
							</table>
						</form>
						<a href="javascript:();" class="btn btn-success waves-effect vendre pull-right" style="color:#fff"><i class="fa fa-check"></i> Valider</a>
                    </div>-->
                
				</div>
			</div>
        </div>
		<button style="display:none" type="button" class="btn bg-blue-grey waves-effect finish" id="finish">BLUE GREY</button>
    </div>
</section>

<div class="modal fade" id="modalDisponser" role="dialog">
    <div class="modal-dialog modal-lg" role="document" style="margin-top:5px;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
			<form action="" method="POST" id="form-caisse" style="border:1px solid black; margin-top:-30px">
				<div class="modal-body" style="max-height:600px; overflow:auto;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="card">
							<div class="body table-responsive">
								<div class="col-md-12" id="recepDisponser"></div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="modal-footer">
					<button id="btn-encaiss" onclick="this.style.display='none'" type="submit" class="btn btn-success waves-effect " id="disponser" style="color:#fff"><i class="fa fa-check"></i> Encaisser</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Fermer</button>
				</div>
			</form>
        </div>
    </div>
</div>
