<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$info = $this->md_parametre->info_structure(); 
$fac = $this->md_patient->detail_facture($id); 
$elt = $this->md_patient->element_facture1($id);
$user = $this->md_connexion->personnel_connect();
if(is_null($fac->per_iPrsct)){
	$personne = 'ANONYME';
	$specialite = '';
}else{
	$per = $this->md_personnel->recup_prescripteur($fac->per_iPrsct);
	if($per->pre_sTitre =="Docteur"){ $personne = "Dr.".$per->pre_sNom.' '.$per->pre_sPrenom; } 
	if($per->pre_sTitre =="Professeur"){ $personne = "Pr.".$per->pre_sNom.' '.$per->pre_sPrenom; } 
	//$per = $this->md_personnel->recup_personnel($fac->per_iPrsct);
	//$spt = $this->md_parametre->recup_specialite($per->spt_id);
	
	//$specialite = $spt->spt_sLibelle;
}

$facdivers = $this->md_patient->detail_facture_divers($id);


// if(!is_null($facdivers->loc_id)){
	// $locataire = $this->md_parametre->recup_locataire($facdivers->loc_id);
// }
// $actedivers = $this->md_parametre->recup_acte_divers($facdivers->fdi_id); 

 //var_dump($elt);

// return ;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Réçu</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0;font-family:'helvetica', sans-serif; font-size:4pt;}
			table.footer{ position:fixed; bottom:40; left:0; right:0}
		

		</style>
		<!--<script type="text/javascript" src="assets/js/imprimer.js')"></script>-->
	</head>
	
	<body >
		<!--<div style="width:300px; border:1px solid black; padding:5px 10px 0px 10px" class="recu">-->
		<div style=" padding:-3px 15px 0px 15px" class="recu">
			<!-- En-tête du reçu -->
			<!--<table style="width:100%; height:50px" >
				<tr>
					<td  align="center" ><span style="font-weight:bold;font-size:8pt">RECU D'ENCAISSEMENT</span></td>
				</tr>
			</table>-->
			<div style="height:45%;font-size:4px" class="recu">
				<table style="width:100%; height:2px;">
					<tr>
						<td  align="center" style="width:25%">
							<div align="center">
								<span style="font-weight:bold;font-size:3pt">ARMEE DU SALUT<span></br>
								<span>**************</span></br>
								<span style="font-size:2pt">Service de sante</span></br>
								<span >****************<span></br>
								<span style="font-size:2pt"><?php echo $info->str_sEnseigne  ;?></span>
							</div>
						</td>
						<td align="center"   style="width:50%"></td>
						<td  align="right" ><img src="<?php echo base_url($info->str_sLogo) ;?>" style="width:60px; height:20px" border="0" /></td>
					</tr>
				</table>			
				<table style="width:100%; height:2px;">
					<tr>
						<td  align="center" ><span style="font-weight:bold;font-size:4pt">RECU DE CAISSE</span></td>
					</tr>
				</table>		
				<table style="width:100%; height:20px;margin-top:-5px">
					<tr>
						<td  style="width:50%"><span style="font-weight:bold">Patient:</span> <?php echo $fac->pat_sNom.' '.$fac->pat_sPrenom  ;?></td>
						<td align="center" style="width:50%"> <span style="text-align:right"><?=$personne;?></span><br><span style="text-align:right"><?php //echo $specialite;?></span></td>
						<td align="right" style="width:50%"><span style="font-weight:bold">Date:</span> <span style="text-align:right"><?php echo $this->md_config->affDateFrNum($fac->fac_dDatePaie) ; ?></span></td>
					</tr>
					<tr>
						<td  style="width:50%;padding-top:-2px"><span style="font-weight:bold">ID:</span> <?php echo $fac->pat_sMatricule ;?>  </td>	
						<td align="center"   style="width:50%;padding-top:-2px"></td>
						<td align="right"   style="width:50%;padding-top:-2px"><span style="font-weight:bold">N° :</span> <span style="text-align:right"><?php echo $fac->fac_sNumero ;?></span></td>
					</tr>				
					<tr>
						<td  style="width:50%;padding-top:-2px"><span style="font-weight:bold">Mode de paiement:</span> <span style="font-weight:normal"><?php if(is_null($fac->ass_id)){echo 'comptant';}else{echo 'Par assurance';} ;?></span></td>	
						<td align="center"   style="width:50%;padding-top:-2px"></td>
						<td align="right"   style="width:50%;padding-top:-2px"><span style="font-weight:bold"><?php if(!is_null($fac->ass_id)){echo 'Assureur:';} ;?> </span> <span style="text-align:right"><?php if(!is_null($fac->ass_id)){echo $fac->ass_sLibelle;} ;?></span></td>
					</tr>
				</table>

				<!--width:100%;border-collapse:collapse;border:1px dotted #000;margin-top:-5px-->
				<table class="list" style="width:100%;margin-top:-2px" >
					<thead style="text-transform:uppercase;width:100%;border-collapse:collapse;border-top:1px dotted #000;border-left:1px dotted #000;border-right:1px dotted #000">
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'Produit';}else{echo 'Produit';};?></td>
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'Quantité';}else{echo 'Quantité';};?></td>
						<?php if(!is_null($fac->ass_id)){?>
						<td style="font-weight:bold" align="center">Couverture assurance</td>
						<?php }?>
						
						<?php if(!is_null($fac->acm_iHosId)){?>
							<td style="font-weight:bold" align="center">Période</td>
						<?php }?>
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'montants';}else{echo 'montant';};?></td>
					</thead>
					<tbody class="corps"  style="width:100%;border-collapse:collapse;border-left:1px dotted #000;border-right:1px dotted #000;border-bottom:1px dotted #000;">
						<?php //var_dump($elt)?>
						<?php $verif=0; foreach($elt AS $e){?>
							<tr>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->med_sNc)){echo $e->med_sNc;}?>
								</td>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->elf_iQte)){echo $e->elf_iQte;}else{echo 0;}?>
								</td>
								
								<?php if(!is_null($fac->ass_id)){?>
								<td align="center" style="padding-top:-2px;">
									<?php //$recup = $this->md_parametre->recup_acte_couvert($e->lac_id,$fac->tas_id);?>
									<?php if($verif!=0){echo '';}else{ echo 'L\'assureur couvre '. $fac->tas_iTaux.' % du montant de la facture';};?> 
								</td>
								<?php } ?>							
								
								<?php if(!is_null($fac->acm_iHosId)){ ?>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->hos_dDateSortie)){?>
										<?php echo 'du '. $this->md_config->affDateTimeFr($e->hos_dDate, 'date').' - '.$this->md_config->affDateTimeFr($e->hos_dDateSortie, 'date') ;?>
									<?php }else{ ?>
										<?php echo 'depuis '. $this->md_config->affDateTimeFr($e->hos_dDate) ;?>
									<?php } ?>
								</td>
								<?php } ?>	
								<td align="center" style="padding-top:-2px;"><?php echo number_format($e->elf_iCout,0,",",".") ; ?> XAF</td>
							</tr>	
						<?php $verif+=1;}?>
					</tbody>					
					
					<tbody class="corps">
						<tr>
							<td <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> style="font-weight:bold" align="right">TOTAL</td>
							<td style="font-weight:bold" align="center"><?php echo number_format($fac->fac_iMontant,0,",",".") ;?> XAF</td>
						</tr>				
						<?php if(!is_null($fac->ass_id)){ ;?>
							<tr>
								<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Montant payé par l'assureur</span>
								<td  style="padding-top:-1px;"align="center"><?php echo number_format($fac->fac_iMontantAss,0,",",".") ;?> XAF</td>
							</tr>
						<?php }?>					
						<?php if($fac->fac_iMontantReduc ==0 || is_null($fac->fac_iMontantReduc)){}else{ ?>
							<tr>
								<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Réduction</td>
								<td style="padding-top:-1px;" align="center"><?php echo number_format($fac->fac_iMontantReduc,0,",",".")   ;?> XAF</td>
							</tr>
						<?php }?>
						<tr>
							<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Montant payé</td>
							<td style="padding-top:-1px;" align="center"><?php echo number_format($fac->fac_iMontantPaye,0,",",".")   ;?> XAF</td>
						</tr>
					</tbody>
				</table>				
				
				<table style="width:100%;margin-top:10px">
					<tr>
						<td  style="width:50%;padding-top:-2px;"><span style="font-weight:bold"><?php if($user->per_sSexe=='H'){echo 'CAISSIER';}else{echo 'CAISSIERE';};?>:</span> <?php echo $user->per_sNom . ' ' . $user->per_sPrenom; ?></td>
					</tr>
				</table>				
			
			</div>			
			<div style="border-top:1px dotted #000;width:100%;height:10px;margin-top:2.2%"></div>
			<div style="height:45%;font-size:4px" class="recu">
				<table style="width:100%; height:2px;">
					<tr>
						<td  align="center" style="width:25%">
							<div align="center">
								<span style="font-weight:bold;font-size:3pt">ARMEE DU SALUT<span></br>
								<span>**************</span></br>
								<span style="font-size:2pt">Service de sante</span></br>
								<span >****************<span></br>
								<span style="font-size:2pt"><?php echo $info->str_sEnseigne  ;?></span>
							</div>
						</td>
						<td align="center"   style="width:50%"></td>
						<td  align="right" ><img src="<?php echo base_url($info->str_sLogo) ;?>" style="width:60px; height:20px" border="0" /></td>
					</tr>
				</table>			
				<table style="width:100%; height:2px;">
					<tr>
						<td  align="center" ><span style="font-weight:bold;font-size:4pt">RECU DE CAISSE</span></td>
					</tr>
				</table>		
				<table style="width:100%; height:20px;margin-top:-5px">
					<tr>
						<td  style="width:50%"><span style="font-weight:bold">Patient:</span> <?php echo $fac->pat_sNom.' '.$fac->pat_sPrenom  ;?></td>
						<td align="center" style="width:50%"> <span style="text-align:right"><?=$personne;?></span><br><span style="text-align:right"><?php //echo $specialite;?></span></td>
						<td align="right" style="width:50%"><span style="font-weight:bold">Date:</span> <span style="text-align:right"><?php echo $this->md_config->affDateFrNum($fac->fac_dDatePaie) ; ?></span></td>
					</tr>
					<tr>
						<td  style="width:50%;padding-top:-2px"><span style="font-weight:bold">ID:</span> <?php echo $fac->pat_sMatricule ;?>  </td>	
						<td align="center"   style="width:50%;padding-top:-2px"></td>
						<td align="right"   style="width:50%;padding-top:-2px"><span style="font-weight:bold">N° :</span> <span style="text-align:right"><?php echo $fac->fac_sNumero ;?></span></td>
					</tr>				
					<tr>
						<td  style="width:50%;padding-top:-2px"><span style="font-weight:bold">Mode de paiement:</span> <span style="font-weight:normal"><?php if(is_null($fac->ass_id)){echo 'comptant';}else{echo 'Par assurance';} ;?></span></td>	
						<td align="center"   style="width:50%;padding-top:-2px"></td>
						<td align="right"   style="width:50%;padding-top:-2px"><span style="font-weight:bold"><?php if(!is_null($fac->ass_id)){echo 'Assureur:';} ;?> </span> <span style="text-align:right"><?php if(!is_null($fac->ass_id)){echo $fac->ass_sLibelle;} ;?></span></td>
					</tr>
				</table>

				<!--width:100%;border-collapse:collapse;border:1px dotted #000;margin-top:-5px-->
				<table class="list" style="width:100%;margin-top:-2px" >
					<thead style="text-transform:uppercase;width:100%;border-collapse:collapse;border-top:1px dotted #000;border-left:1px dotted #000;border-right:1px dotted #000">
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'Produit';}else{echo 'Produit';};?></td>
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'Quantité';}else{echo 'Quantité';};?></td>
						<?php if(!is_null($fac->ass_id)){?>
						<td style="font-weight:bold" align="center">Couverture assurance</td>
						<?php }?>
						
						<?php if(!is_null($fac->acm_iHosId)){?>
							<td style="font-weight:bold" align="center">Période</td>
						<?php }?>
						<td style="font-weight:bold" align="center"><?php if(count($elt) > 1){echo 'montants';}else{echo 'montant';};?></td>
					</thead>
					<tbody class="corps"  style="width:100%;border-collapse:collapse;border-left:1px dotted #000;border-right:1px dotted #000;border-bottom:1px dotted #000;">
						<?php //var_dump($elt)?>
						<?php $verif=0; foreach($elt AS $e){?>
							<tr>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->med_sNc)){echo $e->med_sNc;}?>
								</td>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->elf_iQte)){echo $e->elf_iQte;}else{echo 0;}?>
								</td>
								
								<?php if(!is_null($fac->ass_id)){?>
								<td align="center" style="padding-top:-2px;">
									<?php //$recup = $this->md_parametre->recup_acte_couvert($e->lac_id,$fac->tas_id);?>
									<?php if($verif!=0){echo '';}else{ echo 'L\'assureur couvre '. $fac->tas_iTaux.' % du montant de la facture';};?> 
								</td>
								<?php } ?>							
								
								<?php if(!is_null($fac->acm_iHosId)){ ?>
								<td align="center" style="padding-top:-2px;">
									<?php if(!is_null($e->hos_dDateSortie)){?>
										<?php echo 'du '. $this->md_config->affDateTimeFr($e->hos_dDate, 'date').' - '.$this->md_config->affDateTimeFr($e->hos_dDateSortie, 'date') ;?>
									<?php }else{ ?>
										<?php echo 'depuis '. $this->md_config->affDateTimeFr($e->hos_dDate) ;?>
									<?php } ?>
								</td>
								<?php } ?>	
								<td align="center" style="padding-top:-2px;"><?php echo number_format($e->elf_iCout,0,",",".") ; ?> XAF</td>
							</tr>	
						<?php $verif+=1;}?>
					</tbody>					
					
					<tbody class="corps">
						<tr>
							<td <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> style="font-weight:bold" align="right">TOTAL</td>
							<td style="font-weight:bold" align="center"><?php echo number_format($fac->fac_iMontant,0,",",".") ;?> XAF</td>
						</tr>				
						<?php if(!is_null($fac->ass_id)){ ;?>
							<tr>
								<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Montant payé par l'assureur</span>
								<td  style="padding-top:-1px;"align="center"><?php echo number_format($fac->fac_iMontantAss,0,",",".") ;?> XAF</td>
							</tr>
						<?php }?>					
						<?php if($fac->fac_iMontantReduc ==0 || is_null($fac->fac_iMontantReduc)){}else{ ?>
							<tr>
								<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Réduction</td>
								<td style="padding-top:-1px;" align="center"><?php echo number_format($fac->fac_iMontantReduc,0,",",".")   ;?> XAF</td>
							</tr>
						<?php }?>
						<tr>
							<td style="padding-top:-1px;" <?php if(!is_null($fac->ass_id)){echo 'colspan="2"';};?> align="right">Montant payé</td>
							<td style="padding-top:-1px;" align="center"><?php echo number_format($fac->fac_iMontantPaye,0,",",".")   ;?> XAF</td>
						</tr>
					</tbody>
				</table>				
				
				<table style="width:100%;margin-top:10px">
					<tr>
						<td  style="width:50%;padding-top:-2px;"><span style="font-weight:bold"><?php if($user->per_sSexe=='H'){echo 'CAISSIER';}else{echo 'CAISSIERE';};?>:</span> <?php echo $user->per_sNom . ' ' . $user->per_sPrenom; ?></td>
						
					</tr>
				</table>
			</div>			
			<!--<table class="" style="width:100%;">
				<tr>
					<td  align="center" style="width:100%">
						<span>Tél: <span style="color:maroon"><u><?php //echo $info->str_sTel;?></u></span></span>
						<span>Email: <span style="color:maroon"><u><?php //echo $info->str_sEmail;?></u></span></span>
					</td>
				</tr>
				<tr>
					<td align="center">Tel:<?php //echo $info->str_sTel;?></td>
				</tr>
			</table>-->
		</div>
	</body>
</html>