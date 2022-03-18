<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $liste = $this->md_parametre->liste_specification_maladie_actifs(); 
$aujourdhui = date("Y-m-d");


$maDateMoinun = strtotime($aujourdhui."- 180 days");
//var_dump($maDateMoinun);
$moinsun = date("Y-m-d",$maDateMoinun);
//var_dump($moinsun);
$maDate611 = strtotime($aujourdhui."- 330 days");
$m611 = date("Y-m-d",$maDate611);

$maDate1223 = strtotime($aujourdhui."- 690 days");
$m1223 = date("Y-m-d",$maDate1223);

$maDate2459 = strtotime($aujourdhui."- 1770 days");
$m2459 = date("Y-m-d",$maDate2459);

$yearDate6 = strtotime($aujourdhui."- 2190 days");
$year6 = date("Y-m-d",$yearDate6);

$yearDate8 = strtotime($aujourdhui."- 2920 days");
$year8 = date("Y-m-d",$yearDate8);

$yearDate918 = strtotime($aujourdhui."- 6570 days");
$year918 = date("Y-m-d",$yearDate918);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Rapport</title>
		<meta charset="UTF-8">
		<style>
			@page { margin:10px 0px 0px 0px; height:100%;}
			body { margin: 0px;}
			table.footer{ position:fixed; bottom:40px; left:0px; right:0px; }
		</style>
	</head>
	<body style="font-family:verdana">
		<div style="width:100%;padding:10px 2px 0px 2px" >
			<!-- En-tête du reçu -->
			
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:25px; height:20px; font-weight:bold" align="center">RAPPORT MENSUEL DE L'HOPITAL DE REFERENCE</td>
				</tr>
			</table>
			<br>
		 <!-- Corps de reçu -->
			<table style="width:100%; font-size:12px">
				<tr> 
					<td style="font-size:15px; height:16px; font-weight:bold" align="center">2.11 PRISE EN CHARGE DES  ENFANTS MALNUTRIS </td>
				</tr>
			</table>
			<br>
			<table style="width:100%; font-size:12px" border="1" cellspacing="0">
				<thead>
					<tr> 
						<th  align="center"  rowspan="3">Ages des enfants (1)</th>
						<th  align="center" style="background:rgb(255,149,149)"  rowspan="3">Fin du mois précédent (2)</th>
						<th  align="center"  colspan="6">Entrée du mois (3)</th>
						<th  align="center"  colspan="14" >Sortie (4)</th>
						<th  align="center" rowspan="2">Reste fin du mois (5   )</th>
					</tr>
					<tr> 
						<th align="center" colspan="2">P/T < 70% OU PB < 11cm </th>
						<th align="center" colspan="2">Oedémes</th>
						<th align="center" colspan="2">Total</th>
						<th align="center" colspan="2">Guéris</th>
						<th align="center" colspan="2">Abandons</th>
						<th align="center" colspan="2">Décès</th>
						<th align="center" colspan="2">Référés</th>
						<th align="center" colspan="2">Critères non atteints</th>
						<th align="center" colspan="2">Erreurs d'admission</th>
						<th align="center" colspan="2">Total Sorties</th>
					</tr>
					<tr> 
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th>M</th>
						<th>F</th>
						<th></th>
					</tr>
				</thead>
				
				<tbody class="corps">
				<?php $cpt=1; 
				$SOMFIN1=0;$SOMFIN2=0;$SOMFIN3=0;$SOMFIN4=0;$SOMFIN5=0;$SOMFIN6=0;
				$SOMPTM1=0;$SOMPTM2=0;$SOMPTM3=0;$SOMPTM4=0;$SOMPTM5=0;$SOMPTM6=0;
				$SOMPTF1=0;$SOMPTF2=0;$SOMPTF3=0;$SOMPTF4=0;$SOMPTF5=0;$SOMPTF6=0;
				$SOMOEM1=0;$SOMOEM2=0;$SOMOEM3=0;$SOMOEM4=0;$SOMOEM5=0;$SOMOEM6=0;
				$SOMOEF1=0;$SOMOEF2=0;$SOMOEF3=0;$SOMOEF4=0;$SOMOEF5=0;$SOMOEF6=0;
				$SOMTotalM1=0;$SOMTotalM2=0;$SOMTotalM3=0;$SOMTotalM4=0;$SOMTotalM5=0;$SOMTotalM6=0;
				$SOMTotalF1=0;$SOMTotalF2=0;$SOMTotalF3=0;$SOMTotalF4=0;$SOMTotalF5=0;$SOMTotalF6=0;
				$SOMGM1=0;$SOMGM2=0;$SOMGM3=0;$SOMGM4=0;$SOMGM5=0;$SOMGM6=0;
				$SOMGF1=0;$SOMGF2=0;$SOMGF3=0;$SOMGF4=0;$SOMGF5=0;$SOMGF6=0;
				$SOMABM1=0;$SOMABM2=0;$SOMABM3=0;$SOMABM4=0;$SOMABM5=0;$SOMABM6=0;
				$SOMABF1=0;$SOMABF2=0;$SOMABF3=0;$SOMABF4=0;$SOMABF5=0;$SOMABF6=0;
				$SOMDEM1=0;$SOMDEM2=0;$SOMDEM3=0;$SOMDEM4=0;$SOMDEM5=0;$SOMDEM6=0;
				$SOMDEF1=0;$SOMDEF2=0;$SOMDEF3=0;$SOMDEF4=0;$SOMDEF5=0;$SOMDEF6=0;
				$SOMREM1=0;$SOMREM2=0;$SOMREM3=0;$SOMREM4=0;$SOMREM5=0;$SOMREM6=0;
				$SOMREF1=0;$SOMREF2=0;$SOMREF3=0;$SOMREF4=0;$SOMREF5=0;$SOMREF6=0;
				$SOMCRIM1=0;$SOMCRIM2=0;$SOMCRIM3=0;$SOMCRIM4=0;$SOMCRIM5=0;$SOMCRIM6=0;
				$SOMCRIF1=0;$SOMCRIF2=0;$SOMCRIF3=0;$SOMCRIF4=0;$SOMCRIF5=0;$SOMCRIF6=0;
				$SOMERM1=0;$SOMERM2=0;$SOMERM3=0;$SOMERM4=0;$SOMERM5=0;$SOMERM6=0;
				$SOMERF1=0;$SOMERF2=0;$SOMERF3=0;$SOMERF4=0;$SOMERF5=0;$SOMERF6=0;
				$SOMTotalSM1=0;$SOMTotalSM2=0;$SOMTotalSM3=0;$SOMTotalSM4=0;$SOMTotalSM5=0;$SOMTotalSM6=0;
				$SOMTotalSF1=0;$SOMTotalSF2=0;$SOMTotalSF3=0;$SOMTotalSF4=0;$SOMTotalSF5=0;$SOMTotalSF6=0;
				$SOMReste1=0;$SOMReste2=0;$SOMReste3=0;$SOMReste4=0;$SOMReste5=0;$SOMReste6=0;
				
				?>
					<tr> 
										
						<td align="center" > < 6 mois</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI98 = $this->md_patient->nb_Prise_en_charge_mois_pre_6moin($moinsun);echo $NBPRI98->nb;$SOMFIN1=$SOMFIN1+$NBPRI98->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI2= $this->md_patient->nb_Prise_en_charge_mois_6moin_PTPB("H",$moinsun); echo $NBPRI2->nb;$SOMPTM1=$SOMPTM1+$NBPRI2->nb;?></td>
						<?php // PTM?>
						<td align="center"><?php $NBPRI3 = $this->md_patient->nb_Prise_en_charge_mois_6moin_PTPB("F",$moinsun); echo $NBPRI3->nb;$SOMPTF1=$SOMPTF1+$NBPRI3->nb;?></td>
						<?php // PTF?>
						<td align="center"><?php $NBPRI4 = $this->md_patient->nb_Prise_en_charge_mois_6moin_OEDEME("H",$moinsun); echo $NBPRI4->nb;$SOMOEM1=$SOMOEM1+$NBPRI4->nb;?></td>
						<?php // OEM?>
						<td align="center"><?php $NBPRI5 = $this->md_patient->nb_Prise_en_charge_mois_6moin_OEDEME("F",$moinsun); echo $NBPRI5->nb;$SOMOEF1=$SOMOEF1+$NBPRI5->nb;?></td>
						<?php // OEF?>
						<td align="center"><?php echo $NBPRI2->nb + $NBPRI4->nb; $SOMTotalM1=$SOMTotalM1+($NBPRI2->nb + $NBPRI4->nb); ?></td>
						<?php // TotalM?>
						<td align="center"><?php echo $NBPRI3->nb + $NBPRI5->nb; $SOMTotalF1=$SOMTotalF1+($NBPRI3->nb + $NBPRI5->nb); ?></td>
						<?php // TotalF?>
						<td align="center"><?php $NBPRI6 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","guerison",$moinsun); echo $NBPRI6->nb;$SOMGM1=$SOMGM1+$NBPRI6->nb;?></td>
						<?php // GM?>
						<td align="center"><?php $NBPRI7 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","guerison",$moinsun); echo $NBPRI7->nb;$SOMGF1=$SOMGF1+$NBPRI7->nb;?></td>
						<?php // GF?>
						<td align="center"><?php $NBPRI8 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","abandons",$moinsun); echo $NBPRI8->nb;$SOMABM1=$SOMABM1+$NBPRI8->nb;?></td>
						<?php // ABM?>
						<td align="center"><?php $NBPRI9 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","abandons",$moinsun); echo $NBPRI9->nb;$SOMABF1=$SOMABF1+$NBPRI9->nb;?></td>
						<?php // ABF?>
						<td align="center"><?php $NBPRI10 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","Décès",$moinsun); echo $NBPRI10->nb;$SOMDEM1=$SOMDEM1+$NBPRI10->nb;?></td>
						<?php // DEM?>
						<td align="center"><?php $NBPRI11 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","Décès",$moinsun); echo $NBPRI11->nb;$SOMDEF1=$SOMDEF1+$NBPRI11->nb;?></td>
						<?php // DEF?>
						<td align="center"><?php $NBPRI12 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","referes",$moinsun); echo $NBPRI12->nb;$SOMREM1=$SOMREM1+$NBPRI12->nb;?></td>
						<?php // REM?>
						<td align="center"><?php $NBPRI13 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","referes",$moinsun); echo $NBPRI13->nb;$SOMREF1=$SOMREF1+$NBPRI13->nb;?></td>
						<?php // REF?>
						<td align="center"><?php $NBPRI14 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","criteres non atteints",$moinsun); echo $NBPRI14->nb;$SOMCRIM1=$SOMCRIM1+$NBPRI14->nb;?></td>
						<?php // CRIM?>
						<td align="center"><?php $NBPRI15 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","criteres non atteints",$moinsun); echo $NBPRI15->nb;$SOMCRIF1=$SOMCRIF1+$NBPRI15->nb;?></td>
						<?php // CRIF?>
						<td align="center"><?php $NBPRI16 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("H","erreurs d'admission",$moinsun); echo $NBPRI16->nb;$SOMERM1=$SOMERM1+$NBPRI16->nb;?></td>
						<?php // ERM?>
						<td align="center"><?php $NBPRI17 = $this->md_patient->nb_Prise_en_charge_6moin_sortie("F","erreurs d'admission",$moinsun); echo $NBPRI17->nb;$SOMERF1=$SOMERF1+$NBPRI17->nb;?></td>
						<?php // ERF?>
						<td align="center"><?php echo $NBPRI6->nb+$NBPRI8->nb+$NBPRI10->nb+$NBPRI12->nb+$NBPRI14->nb+$NBPRI16->nb; $SOMTotalSM1=$SOMTotalSM1+($NBPRI6->nb+$NBPRI8->nb+$NBPRI10->nb+$NBPRI12->nb+$NBPRI14->nb+$NBPRI16->nb); ?></td>
						<?php // TotalSM?>
						<td align="center"><?php  echo $NBPRI7->nb+$NBPRI9->nb+$NBPRI11->nb+$NBPRI13->nb+$NBPRI15->nb+$NBPRI17->nb; $SOMTotalSF1=$SOMTotalSF1+($NBPRI7->nb+$NBPRI9->nb+$NBPRI11->nb+$NBPRI13->nb+$NBPRI15->nb+$NBPRI17->nb);?></td>
						<?php // TotalSF?>
						
						<td align="center"><?php echo ($SOMFIN1+$SOMTotalM1+$SOMTotalF1)-($SOMTotalSM1+$SOMTotalSF1); $SOMReste1 +=($SOMFIN1+$SOMTotalM1+$SOMTotalF1)-($SOMTotalSM1+$SOMTotalSF1); ?></td>
						
					</tr>
					<tr> 
										
						<td align="center" >6-11 mois</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI99 = $this->md_patient->nb_Prise_en_charge_mois_pre($m611,$moinsun);echo $NBPRI99->nb;$SOMFIN2=$SOMFIN2+$NBPRI99->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI18 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("H",$m611,$moinsun); echo $NBPRI18->nb;$SOMPTM2=$SOMPTM2+$NBPRI18->nb;?></td>
						
						<td align="center"><?php $NBPRI19 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("F",$m611,$moinsun); echo $NBPRI19->nb;$SOMPTF2=$SOMPTF2+$NBPRI19->nb;?></td>
						
						<td align="center"><?php $NBPRI20 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("H",$m611,$moinsun); echo $NBPRI20->nb;$SOMOEM2=$SOMOEM2+$NBPRI20->nb;?></td>
						
						<td align="center"><?php $NBPRI21 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("F",$m611,$moinsun); echo $NBPRI21->nb;$SOMOEF2=$SOMOEF2+$NBPRI21->nb;?></td>

						<td align="center"><?php echo $NBPRI18->nb + $NBPRI20->nb; $SOMTotalM2=$SOMTotalM2+($NBPRI18->nb + $NBPRI20->nb); ?></td>
						<td align="center"><?php echo $NBPRI19->nb + $NBPRI21->nb; $SOMTotalF2=$SOMTotalF2+($NBPRI19->nb + $NBPRI21->nb); ?></td>

						<td align="center"><?php $NBPRI22 = $this->md_patient->nb_Prise_en_charge_sortie("H","guerison",$m611,$moinsun); echo $NBPRI22->nb;$SOMGM2=$SOMGM2+$NBPRI22->nb;?></td>
						<td align="center"><?php $NBPRI23 = $this->md_patient->nb_Prise_en_charge_sortie("F","guerison",$m611,$moinsun); echo $NBPRI23->nb;$SOMGF2=$SOMGF2+$NBPRI23->nb;?></td>

						<td align="center"><?php $NBPRI24 = $this->md_patient->nb_Prise_en_charge_sortie("H","abandons",$m611,$moinsun); echo $NBPRI24->nb;$SOMABM2=$SOMABM2+$NBPRI24->nb;?></td>
						<td align="center"><?php $NBPRI25 = $this->md_patient->nb_Prise_en_charge_sortie("F","abandons",$m611,$moinsun); echo $NBPRI25->nb;$SOMABF2=$SOMABF2+$NBPRI25->nb;?></td>

						<td align="center"><?php $NBPRI26 = $this->md_patient->nb_Prise_en_charge_sortie("H","Décès",$m611,$moinsun); echo $NBPRI26->nb;$SOMDEM2=$SOMDEM2+$NBPRI26->nb;?></td>
						<td align="center"><?php $NBPRI27 = $this->md_patient->nb_Prise_en_charge_sortie("F","Décès",$m611,$moinsun); echo $NBPRI27->nb;$SOMDEF2=$SOMDEF2+$NBPRI27->nb;?></td>

						<td align="center"><?php $NBPRI28 = $this->md_patient->nb_Prise_en_charge_sortie("H","referes",$m611,$moinsun); echo $NBPRI28->nb;$SOMREM2=$SOMREM2+$NBPRI28->nb;?></td>
						<td align="center"><?php $NBPRI29 = $this->md_patient->nb_Prise_en_charge_sortie("F","referes",$m611,$moinsun); echo $NBPRI29->nb;$SOMREF2=$SOMREF2+$NBPRI29->nb;?></td>

						<td align="center"><?php $NBPRI30 = $this->md_patient->nb_Prise_en_charge_sortie("H","criteres non atteints",$m611,$moinsun); echo $NBPRI30->nb;$SOMCRIM2=$SOMCRIM2+$NBPRI30->nb;?></td>
						<td align="center"><?php $NBPRI31 = $this->md_patient->nb_Prise_en_charge_sortie("F","criteres non atteints",$m611,$moinsun); echo $NBPRI31->nb;$SOMCRIF2=$SOMCRIF2+$NBPRI31->nb;?></td>

						<td align="center"><?php $NBPRI32 = $this->md_patient->nb_Prise_en_charge_sortie("H","erreurs d'admission",$m611,$moinsun); echo $NBPRI32->nb;$SOMERM2=$SOMERM2+$NBPRI32->nb;?></td>
						<td align="center"><?php $NBPRI33 = $this->md_patient->nb_Prise_en_charge_sortie("F","erreurs d'admission",$m611,$moinsun); echo $NBPRI33->nb;$SOMERF2=$SOMERF2+$NBPRI33->nb;?></td>

						<td align="center"><?php echo $NBPRI22->nb+$NBPRI24->nb+$NBPRI26->nb+$NBPRI28->nb+$NBPRI30->nb+$NBPRI32->nb; $SOMTotalSM2=$SOMTotalSM2+($NBPRI22->nb+$NBPRI24->nb+$NBPRI26->nb+$NBPRI28->nb+$NBPRI30->nb+$NBPRI32->nb); ?></td>
						<td align="center"><?php  echo $NBPRI23->nb+$NBPRI25->nb+$NBPRI27->nb+$NBPRI29->nb+$NBPRI31->nb+$NBPRI33->nb; $SOMTotalSF2=$SOMTotalSF2+($NBPRI23->nb+$NBPRI25->nb+$NBPRI27->nb+$NBPRI29->nb+$NBPRI31->nb+$NBPRI33->nb); ?></td>
						
						
						<td align="center"><?php echo ($SOMFIN2+$SOMTotalM2+$SOMTotalF2)-($SOMTotalSM2+$SOMTotalSF2); $SOMReste2 +=($SOMFIN2+$SOMTotalM2+$SOMTotalF2)-($SOMTotalSM2+$SOMTotalSF2);?></td>
						
					</tr>
					<tr> 
										
						<td align="center" >12-13 mois</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI100 = $this->md_patient->nb_Prise_en_charge_mois_pre($m1223,$m611);echo $NBPRI100->nb;$SOMFIN3=$SOMFIN3+$NBPRI100->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI34 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("H",$m1223,$m611); echo $NBPRI34->nb;$SOMPTM3=$SOMPTM3+$NBPRI34->nb;?></td>
						
						<td align="center"><?php $NBPRI35 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("F",$m1223,$m611); echo $NBPRI35->nb;$SOMPTF3=$SOMPTF3+$NBPRI35->nb;?></td>
						
						<td align="center"><?php $NBPRI36 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("H",$m1223,$m611); echo $NBPRI36->nb;$SOMOEM3=$SOMOEM3+$NBPRI36->nb;?></td>
						
						<td align="center"><?php $NBPRI37 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("F",$m1223,$m611); echo $NBPRI37->nb;$SOMOEF3=$SOMOEF3+$NBPRI37->nb;?></td>

						<td align="center"><?php echo $NBPRI34->nb + $NBPRI36->nb; $SOMTotalM3=$SOMTotalM3+($NBPRI34->nb + $NBPRI36->nb); ?></td>
						<td align="center"><?php echo $NBPRI35->nb + $NBPRI37->nb; $SOMTotalF3=$SOMTotalF3+($NBPRI35->nb + $NBPRI37->nb); ?></td>

						<td align="center"><?php $NBPRI38 = $this->md_patient->nb_Prise_en_charge_sortie("H","guerison",$m1223,$m611); echo $NBPRI38->nb;$SOMGM3=$SOMGM3+$NBPRI38->nb;?></td>
						<td align="center"><?php $NBPRI39 = $this->md_patient->nb_Prise_en_charge_sortie("F","guerison",$m1223,$m611); echo $NBPRI39->nb;$SOMGF3=$SOMGF3+$NBPRI39->nb;?></td>

						<td align="center"><?php $NBPRI40 = $this->md_patient->nb_Prise_en_charge_sortie("H","abandons",$m1223,$m611); echo $NBPRI40->nb;$SOMABM3=$SOMABM3+$NBPRI40->nb;?></td>
						<td align="center"><?php $NBPRI41 = $this->md_patient->nb_Prise_en_charge_sortie("F","abandons",$m1223,$m611); echo $NBPRI41->nb;$SOMABF3=$SOMABF3+$NBPRI41->nb;?></td>

						<td align="center"><?php $NBPRI42 = $this->md_patient->nb_Prise_en_charge_sortie("H","Décès",$m1223,$m611); echo $NBPRI42->nb;$SOMDEM3=$SOMDEM3+$NBPRI42->nb;?></td>
						<td align="center"><?php $NBPRI43 = $this->md_patient->nb_Prise_en_charge_sortie("F","Décès",$m1223,$m611); echo $NBPRI43->nb;$SOMDEF3=$SOMDEF3+$NBPRI43->nb;?></td>

						<td align="center"><?php $NBPRI44 = $this->md_patient->nb_Prise_en_charge_sortie("H","referes",$m1223,$m611); echo $NBPRI44->nb;$SOMREM3=$SOMREM3+$NBPRI44->nb;?></td>
						<td align="center"><?php $NBPRI45 = $this->md_patient->nb_Prise_en_charge_sortie("F","referes",$m1223,$m611); echo $NBPRI45->nb;$SOMREF3=$SOMREF3+$NBPRI45->nb;?></td>

						<td align="center"><?php $NBPRI46 = $this->md_patient->nb_Prise_en_charge_sortie("H","criteres non atteints",$m1223,$m611); echo $NBPRI46->nb;$SOMCRIM3=$SOMCRIM3+$NBPRI46->nb;?></td>
						<td align="center"><?php $NBPRI47 = $this->md_patient->nb_Prise_en_charge_sortie("F","criteres non atteints",$m1223,$m611); echo $NBPRI47->nb;$SOMCRIF3=$SOMCRIF3+$NBPRI47->nb;?></td>

						<td align="center"><?php $NBPRI48 = $this->md_patient->nb_Prise_en_charge_sortie("H","erreurs d'admission",$m1223,$m611); echo $NBPRI48->nb;$SOMERM3=$SOMERM3+$NBPRI48->nb;?></td>
						<td align="center"><?php $NBPRI49 = $this->md_patient->nb_Prise_en_charge_sortie("F","erreurs d'admission",$m1223,$m611); echo $NBPRI48->nb;$SOMERF3=$SOMERF3+$NBPRI49->nb;?></td>

						<td align="center"><?php echo $NBPRI38->nb+$NBPRI40->nb+$NBPRI42->nb+$NBPRI44->nb+$NBPRI46->nb+$NBPRI48->nb; $SOMTotalSM3=$SOMTotalSM3+($NBPRI38->nb+$NBPRI40->nb+$NBPRI42->nb+$NBPRI44->nb+$NBPRI46->nb+$NBPRI48->nb); ?></td>
						<td align="center"><?php  echo $NBPRI39->nb+$NBPRI41->nb+$NBPRI43->nb+$NBPRI45->nb+$NBPRI47->nb+$NBPRI49->nb; $SOMTotalSF3=$SOMTotalSF3+($NBPRI39->nb+$NBPRI41->nb+$NBPRI43->nb+$NBPRI45->nb+$NBPRI47->nb+$NBPRI49->nb); ?></td>
						
						
						<td align="center"><?php echo ($SOMFIN3+$SOMTotalM3+$SOMTotalF3)-($SOMTotalSM3+$SOMTotalSF3); $SOMReste3 +=($SOMFIN3+$SOMTotalM3+$SOMTotalF3)-($SOMTotalSM3+$SOMTotalSF3);?></td>
						
					</tr>
					<tr> 
										
						<td align="center" >24-29 mois</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI101 = $this->md_patient->nb_Prise_en_charge_mois_pre($m2459,$m1223);echo $NBPRI101->nb;$SOMFIN4=$SOMFIN4+$NBPRI101->nb;?></td>

						<?php // fin du mois?>
						<td align="center"><?php $NBPRI50 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("H",$m2459,$m1223); echo $NBPRI50->nb;$SOMPTM4=$SOMPTM4+$NBPRI50->nb;?></td>
						<td align="center"><?php $NBPRI51 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("F",$m2459,$m1223); echo $NBPRI51->nb;$SOMPTF4=$SOMPTF4+$NBPRI51->nb;?></td>
						<td align="center"><?php $NBPRI52 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("H",$m2459,$m1223); echo $NBPRI52->nb;$SOMOEM4=$SOMOEM4+$NBPRI52->nb;?></td>
						
						<td align="center"><?php $NBPRI53 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("F",$m2459,$m1223); echo $NBPRI53->nb;$SOMOEF4=$SOMOEF4+$NBPRI53->nb;?></td>

						<td align="center"><?php echo $NBPRI50->nb + $NBPRI52->nb; $SOMTotalM4=$SOMTotalM4+($NBPRI50->nb + $NBPRI52->nb); ?></td>
						<td align="center"><?php echo $NBPRI51->nb + $NBPRI53->nb; $SOMTotalF4=$SOMTotalF4+($NBPRI51->nb + $NBPRI53->nb); ?></td>

						<td align="center"><?php $NBPRI54 = $this->md_patient->nb_Prise_en_charge_sortie("H","guerison",$m2459,$m1223); echo $NBPRI54->nb;$SOMGM4=$SOMGM4+$NBPRI54->nb;?></td>
						<td align="center"><?php $NBPRI55 = $this->md_patient->nb_Prise_en_charge_sortie("F","guerison",$m2459,$m1223); echo $NBPRI55->nb;$SOMGF4=$SOMGF4+$NBPRI55->nb;?></td>

						<td align="center"><?php $NBPRI56 = $this->md_patient->nb_Prise_en_charge_sortie("H","abandons",$m2459,$m1223); echo $NBPRI56->nb;$SOMABM4=$SOMABM4+$NBPRI56->nb;?></td>
						<td align="center"><?php $NBPRI57 = $this->md_patient->nb_Prise_en_charge_sortie("F","abandons",$m2459,$m1223); echo $NBPRI57->nb;$SOMABF4=$SOMABF4+$NBPRI57->nb;?></td>

						<td align="center"><?php $NBPRI58 = $this->md_patient->nb_Prise_en_charge_sortie("H","Décès",$m2459,$m1223); echo $NBPRI58->nb;$SOMDEM4=$SOMDEM4+$NBPRI58->nb;?></td>
						<td align="center"><?php $NBPRI59 = $this->md_patient->nb_Prise_en_charge_sortie("F","Décès",$m2459,$m1223); echo $NBPRI59->nb;$SOMDEF4=$SOMDEF4+$NBPRI59->nb;?></td>

						<td align="center"><?php $NBPRI60 = $this->md_patient->nb_Prise_en_charge_sortie("H","referes",$m2459,$m1223); echo $NBPRI60->nb;$SOMREM4=$SOMREM4+$NBPRI60->nb;?></td>
						<td align="center"><?php $NBPRI61 = $this->md_patient->nb_Prise_en_charge_sortie("F","referes",$m2459,$m1223); echo $NBPRI61->nb;$SOMREF4=$SOMREF4+$NBPRI61->nb;?></td>

						<td align="center"><?php $NBPRI62 = $this->md_patient->nb_Prise_en_charge_sortie("H","criteres non atteints",$m2459,$m1223); echo $NBPRI62->nb;$SOMCRIM4=$SOMCRIM4+$NBPRI62->nb;?></td>
						<td align="center"><?php $NBPRI63 = $this->md_patient->nb_Prise_en_charge_sortie("F","criteres non atteints",$m2459,$m1223); echo $NBPRI63->nb;$SOMCRIF4=$SOMCRIF4+$NBPRI63->nb;?></td>

						<td align="center"><?php $NBPRI64 = $this->md_patient->nb_Prise_en_charge_sortie("H","erreurs d'admission",$m2459,$m1223); echo $NBPRI64->nb;$SOMERM4=$SOMERM4+$NBPRI64->nb;?></td>
						<td align="center"><?php $NBPRI65 = $this->md_patient->nb_Prise_en_charge_sortie("F","erreurs d'admission",$m2459,$m1223); echo $NBPRI65->nb;$SOMERF4=$SOMERF4+$NBPRI65->nb;?></td>

						<td align="center"><?php echo $NBPRI54->nb+$NBPRI56->nb+$NBPRI58->nb+$NBPRI60->nb+$NBPRI62->nb+$NBPRI64->nb; $SOMTotalSM4=$SOMTotalSM4+($NBPRI54->nb+$NBPRI56->nb+$NBPRI58->nb+$NBPRI60->nb+$NBPRI62->nb+$NBPRI64->nb); ?></td>
						<td align="center"><?php  echo $NBPRI55->nb+$NBPRI57->nb+$NBPRI59->nb+$NBPRI61->nb+$NBPRI63->nb+$NBPRI65->nb; $SOMTotalSF3=$SOMTotalSF3+($NBPRI55->nb+$NBPRI57->nb+$NBPRI59->nb+$NBPRI61->nb+$NBPRI63->nb+$NBPRI65->nb);?></td>
						
						
						<td align="center"><?php echo ($SOMFIN4+$SOMTotalM4+$SOMTotalF4)-($SOMTotalSM4+$SOMTotalSF4); $SOMReste4 +=($SOMFIN4+$SOMTotalM4+$SOMTotalF4)-($SOMTotalSM4+$SOMTotalSF4);?></td>
						
					</tr>
					<tr> 
										
						<td align="center" >6-8 ans</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI102 = $this->md_patient->nb_Prise_en_charge_mois_pre($year8,$year6);echo $NBPRI102->nb;$SOMFIN5=$SOMFIN5+$NBPRI102->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI66 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("H",$year8,$year6); echo $NBPRI66->nb;$SOMPTM5=$SOMPTM5+$NBPRI66->nb;?></td>
						<td align="center"><?php $NBPRI67 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("F",$year8,$year6); echo $NBPRI67->nb;$SOMPTF5=$SOMPTF5+$NBPRI67->nb;?></td>
						<td align="center"><?php $NBPRI68 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("H",$year8,$year6); echo $NBPRI68->nb;$SOMOEM5=$SOMOEM5+$NBPRI68->nb;?></td>
						
						<td align="center"><?php $NBPRI69 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("F",$year8,$year6); echo $NBPRI69->nb;$SOMOEF5=$SOMOEF5+$NBPRI69->nb;?></td>
						<td align="center"><?php echo $NBPRI66->nb + $NBPRI68->nb; $SOMTotalM5=$SOMTotalM5+($NBPRI66->nb + $NBPRI68->nb); ?></td>
						<td align="center"><?php echo $NBPRI67->nb + $NBPRI69->nb; $SOMTotalF5=$SOMTotalF5+($NBPRI67->nb + $NBPRI69->nb); ?></td>

						<td align="center"><?php $NBPRI70 = $this->md_patient->nb_Prise_en_charge_sortie("H","guerison",$year8,$year6); echo $NBPRI70->nb;$SOMGM5=$SOMGM5+$NBPRI70->nb;?></td>
						<td align="center"><?php $NBPRI71 = $this->md_patient->nb_Prise_en_charge_sortie("F","guerison",$year8,$year6); echo $NBPRI71->nb;$SOMGF5=$SOMGF5+$NBPRI71->nb;?></td>

						<td align="center"><?php $NBPRI72 = $this->md_patient->nb_Prise_en_charge_sortie("H","abandons",$year8,$year6); echo $NBPRI72->nb;$SOMABM5=$SOMABM5+$NBPRI72->nb;?></td>
						<td align="center"><?php $NBPRI73 = $this->md_patient->nb_Prise_en_charge_sortie("F","abandons",$year8,$year6); echo $NBPRI73->nb;$SOMABF5=$SOMABF5+$NBPRI73->nb;?></td>

						<td align="center"><?php $NBPRI74 = $this->md_patient->nb_Prise_en_charge_sortie("H","Décès",$year8,$year6); echo $NBPRI74->nb;$SOMDEM5=$SOMDEM5+$NBPRI74->nb;?></td>
						<td align="center"><?php $NBPRI75 = $this->md_patient->nb_Prise_en_charge_sortie("F","Décès",$year8,$year6); echo $NBPRI75->nb;$SOMDEF5=$SOMDEF5+$NBPRI75->nb;?></td>

						<td align="center"><?php $NBPRI76 = $this->md_patient->nb_Prise_en_charge_sortie("H","referes",$year8,$year6); echo $NBPRI76->nb;$SOMREM5=$SOMREM5+$NBPRI76->nb;?></td>
						<td align="center"><?php $NBPRI77 = $this->md_patient->nb_Prise_en_charge_sortie("F","referes",$year8,$year6); echo $NBPRI77->nb;$SOMREF5=$SOMREF5+$NBPRI77->nb;?></td>

						<td align="center"><?php $NBPRI78 = $this->md_patient->nb_Prise_en_charge_sortie("H","criteres non atteints",$year8,$year6); echo $NBPRI78->nb;$SOMCRIM5=$SOMCRIM5+$NBPRI78->nb;?></td>
						<td align="center"><?php $NBPRI79 = $this->md_patient->nb_Prise_en_charge_sortie("F","criteres non atteints",$year8,$year6); echo $NBPRI79->nb;$SOMCRIF5=$SOMCRIF5+$NBPRI79->nb;?></td>

						<td align="center"><?php $NBPRI80 = $this->md_patient->nb_Prise_en_charge_sortie("H","erreurs d'admission",$year8,$year6); echo $NBPRI80->nb;$SOMERM5=$SOMERM5+$NBPRI80->nb;?></td>
						<td align="center"><?php $NBPRI81 = $this->md_patient->nb_Prise_en_charge_sortie("F","erreurs d'admission",$year8,$year6); echo $NBPRI81->nb;$SOMERF5=$SOMERF5+$NBPRI81->nb;?></td>

						<td align="center"><?php echo $NBPRI70->nb+$NBPRI72->nb+$NBPRI74->nb+$NBPRI76->nb+$NBPRI78->nb+$NBPRI80->nb; $SOMTotalSM5=$SOMTotalSM5+($NBPRI70->nb+$NBPRI72->nb+$NBPRI74->nb+$NBPRI76->nb+$NBPRI78->nb+$NBPRI80->nb); ?></td>
						<td align="center"><?php  echo $NBPRI71->nb+$NBPRI73->nb+$NBPRI75->nb+$NBPRI77->nb+$NBPRI79->nb+$NBPRI81->nb;  $SOMTotalSF5=$SOMTotalSF5+($NBPRI71->nb+$NBPRI73->nb+$NBPRI75->nb+$NBPRI77->nb+$NBPRI79->nb+$NBPRI81->nb);?></td>
						
						
						<td align="center"><?php echo ($SOMFIN5+$SOMTotalM5+$SOMTotalF5)-($SOMTotalSM5+$SOMTotalSF5); $SOMReste5 +=($SOMFIN5+$SOMTotalM5+$SOMTotalF5)-($SOMTotalSM5+$SOMTotalSF5); ?></td>
						
					</tr>
					<tr> 
										
						<td align="center" >9-18 ans</td>
						<td  align="center" style="background:rgb(255,149,149)"><?php $NBPRI103 = $this->md_patient->nb_Prise_en_charge_mois_pre($year918,$year8);echo $NBPRI103->nb;$SOMFIN6=$SOMFIN6+$NBPRI103->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI82 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("H",$year918,$year8); echo $NBPRI82->nb;$SOMPTM6=$SOMPTM6+$NBPRI82->nb;?></td>
					
						<td align="center"><?php $NBPRI83 = $this->md_patient->nb_Prise_en_charge_mois_PTPB("F",$year918,$year8); echo $NBPRI83->nb;$SOMPTF6=$SOMPTF6+$NBPRI83->nb;?></td>
						<td align="center"><?php $NBPRI84 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("H",$year918,$year8); echo $NBPRI84->nb;$SOMOEM6=$SOMOEM6+$NBPRI84->nb;?></td>
						
						<?php // fin du mois?>
						<td align="center"><?php $NBPRI85 = $this->md_patient->nb_Prise_en_charge_mois_OEDEME("F",$year918,$year8); echo $NBPRI85->nb;$SOMOEF6=$SOMOEF6+$NBPRI85->nb;?></td>
						<td align="center"><?php echo $NBPRI82->nb + $NBPRI84->nb; $SOMTotalM6=$SOMTotalM6+($NBPRI82->nb + $NBPRI84->nb); ?></td>
						<td align="center"><?php echo $NBPRI83->nb + $NBPRI85->nb;; $SOMTotalF6=$SOMTotalF6+($NBPRI83->nb + $NBPRI85->nb); ?></td>

						<td align="center"><?php $NBPRI86 = $this->md_patient->nb_Prise_en_charge_sortie("H","guerison",$year918,$year8); echo $NBPRI86->nb;$SOMGM6=$SOMGM6+$NBPRI86->nb;?></td>
						<td align="center"><?php $NBPRI87 = $this->md_patient->nb_Prise_en_charge_sortie("F","guerison",$year918,$year8); echo $NBPRI87->nb;$SOMGF6=$SOMGF6+$NBPRI87->nb;?></td>

						<td align="center"><?php $NBPRI88 = $this->md_patient->nb_Prise_en_charge_sortie("H","abandons",$year918,$year8); echo $NBPRI88->nb;$SOMABM6=$SOMABM6+$NBPRI88->nb;?></td>
						<td align="center"><?php $NBPRI89 = $this->md_patient->nb_Prise_en_charge_sortie("F","abandons",$year918,$year8); echo $NBPRI89->nb;$SOMABF6=$SOMABF6+$NBPRI89->nb;?></td>

						<td align="center"><?php $NBPRI90 = $this->md_patient->nb_Prise_en_charge_sortie("H","Décès",$year918,$year8); echo $NBPRI90->nb;$SOMDEM6=$SOMDEM6+$NBPRI90->nb;?></td>
						<td align="center"><?php $NBPRI91 = $this->md_patient->nb_Prise_en_charge_sortie("F","Décès",$year918,$year8); echo $NBPRI91->nb;$SOMDEF6=$SOMDEF6+$NBPRI91->nb;?></td>

						<td align="center"><?php $NBPRI92 = $this->md_patient->nb_Prise_en_charge_sortie("H","referes",$year918,$year8); echo $NBPRI92->nb;$SOMREM6=$SOMREM6+$NBPRI92->nb;?></td>
						<td align="center"><?php $NBPRI93 = $this->md_patient->nb_Prise_en_charge_sortie("F","referes",$year918,$year8); echo $NBPRI93->nb;$SOMREF6=$SOMREF6+$NBPRI93->nb;?></td>

						<td align="center"><?php $NBPRI94 = $this->md_patient->nb_Prise_en_charge_sortie("H","criteres non atteints",$year918,$year8); echo $NBPRI94->nb;$SOMCRIM6=$SOMCRIM6+$NBPRI94->nb;?></td>
						<td align="center"><?php $NBPRI95 = $this->md_patient->nb_Prise_en_charge_sortie("F","criteres non atteints",$year918,$year8); echo $NBPRI95->nb;$SOMCRIF6=$SOMCRIF6+$NBPRI95->nb;?></td>

						<td align="center"><?php $NBPRI96 = $this->md_patient->nb_Prise_en_charge_sortie("H","erreurs d'admission",$year918,$year8); echo $NBPRI96->nb;$SOMERM6=$SOMERM6+$NBPRI96->nb;?></td>
						<td align="center"><?php $NBPRI97 = $this->md_patient->nb_Prise_en_charge_sortie("F","erreurs d'admission",$year918,$year8); echo $NBPRI97->nb;$SOMERF6=$SOMERF6+$NBPRI97->nb;?></td>

						<td align="center"><?php echo $NBPRI86->nb+$NBPRI88->nb+$NBPRI90->nb+$NBPRI92->nb+$NBPRI94->nb+$NBPRI96->nb; $SOMTotalSM6=$SOMTotalSM6+($NBPRI86->nb+$NBPRI88->nb+$NBPRI90->nb+$NBPRI92->nb+$NBPRI94->nb+$NBPRI96->nb); ?></td>
						<td align="center"><?php  echo $NBPRI87->nb+$NBPRI89->nb+$NBPRI91->nb+$NBPRI93->nb+$NBPRI95->nb+$NBPRI97->nb; $SOMTotalSF6=$SOMTotalSF6+($NBPRI87->nb+$NBPRI89->nb+$NBPRI91->nb+$NBPRI93->nb+$NBPRI95->nb+$NBPRI97->nb); ?></td>
						
						
						<td align="center"><?php echo ($SOMFIN6+$SOMTotalM6+$SOMTotalF6)-($SOMTotalSM6+$SOMTotalSF6); $SOMReste6 +=($SOMFIN6+$SOMTotalM6+$SOMTotalF6)-($SOMTotalSM6+$SOMTotalSF6); ?></td>
						
					</tr>

				</tbody>
				<tfoot>
					<tr>
						<td align="center" >Total</td>
						<td align="center" style="font-size:11.5px;font-weight:bold;background:rgb(255,149,149)" ><?php echo $SOMFIN1+$SOMFIN2+$SOMFIN3+$SOMFIN4+$SOMFIN5+$SOMFIN6; ?></td>
						<td align="center"><?php echo $SOMPTM1+$SOMPTM2+$SOMPTM3+$SOMPTM4+$SOMPTM5+$SOMPTM6 ;?></td>
						<td align="center"><?php echo $SOMPTF1+$SOMPTF2+$SOMPTF3+$SOMPTF4+$SOMPTF5+$SOMPTF6; ?></td>
						<td align="center"><?php echo $SOMOEM1+$SOMOEM2+$SOMOEM3+$SOMOEM4+$SOMOEM5+$SOMOEM6 ;?></td>
						
						<td align="center"><?php echo $SOMOEF1+$SOMOEF2+$SOMOEF3+$SOMOEF4+$SOMOEF5+$SOMOEF6 ;?></td>
						<td align="center"><?php echo $SOMTotalM1+$SOMTotalM2+$SOMTotalM3+$SOMTotalM4+$SOMTotalM5+$SOMTotalM6 ;?></td>
						<td align="center"><?php echo $SOMTotalF1+$SOMTotalF2+$SOMTotalF3+$SOMTotalF4+$SOMTotalF5+$SOMTotalF6 ;?></td>
						<td align="center"><?php echo $SOMGM1+$SOMGM2+$SOMGM3+$SOMGM4+$SOMGM5+$SOMGM6 ;?></td>
						<td align="center"><?php echo $SOMGF1+$SOMGF2+$SOMGF3+$SOMGF4+$SOMGF5+$SOMGF6 ;?></td>
						<td align="center"><?php echo $SOMABM1+$SOMABM2+$SOMABM3+$SOMABM4+$SOMABM5+$SOMABM6 ;?></td>
						<td align="center"><?php echo $SOMABF1+$SOMABF2+$SOMABF3+$SOMABF4+$SOMABF5+$SOMABF6 ;?></td>
						<td align="center"><?php echo $SOMDEM1+$SOMDEM2+$SOMDEM3+$SOMDEM4+$SOMDEM5+$SOMDEM6 ;?></td>
						<td align="center"><?php echo $SOMDEF1+$SOMDEF2+$SOMDEF3+$SOMDEF4+$SOMDEF5+$SOMDEF6 ;?></td>
						<td align="center"><?php echo $SOMREM1+$SOMREM2+$SOMREM3+$SOMREM4+$SOMREM5+$SOMREM6 ;?></td>
						<td align="center"><?php echo $SOMREF1+$SOMREF2+$SOMREF3+$SOMREF4+$SOMREF5+$SOMREF6 ;?></td>
						<td align="center"><?php echo $SOMCRIM1+$SOMCRIM2+$SOMCRIM3+$SOMCRIM4+$SOMCRIM5+$SOMCRIM6 ;?></td>
						<td align="center"><?php echo $SOMCRIF1+$SOMCRIF2+$SOMCRIF3+$SOMCRIF4+$SOMCRIF5+$SOMCRIF6 ;?></td>
						<td align="center"><?php echo $SOMERM1+$SOMERM2+$SOMERM3+$SOMERM4+$SOMERM5+$SOMERM6 ;?></td>
						<td align="center"><?php echo $SOMERF1+$SOMERF2+$SOMERF3+$SOMERF4+$SOMERF5+$SOMERF6 ;?></td>
						<td align="center"><?php echo $SOMTotalSM1+$SOMTotalSM2+$SOMTotalSM3+$SOMTotalSM4+$SOMTotalSM5+$SOMTotalSM6 ;?></td>
						<td align="center"><?php echo $SOMTotalSF1+$SOMTotalSF2+$SOMTotalSF3+$SOMTotalSF4+$SOMTotalSF5+$SOMTotalSF6 ;?></td>
						<td align="center"><?php echo $SOMReste1+$SOMReste2+$SOMReste3+$SOMReste4+$SOMReste5+$SOMReste6; ?></td>
						
					</tr>
					<tr>
						<td align="center" >%</td>
						<td align="center" style="font-size:11.5px;font-weight:bold;background:rgb(255,149,149)" ><?php echo ($SOMFIN1+$SOMFIN2+$SOMFIN3+$SOMFIN4+$SOMFIN5+$SOMFIN6)/100 ;?></td>
						<td align="center"><?php echo ($SOMPTM1+$SOMPTM2+$SOMPTM3+$SOMPTM4+$SOMPTM5+$SOMPTM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMPTF1+$SOMPTF2+$SOMPTF3+$SOMPTF4+$SOMPTF5+$SOMPTF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMOEM1+$SOMOEM2+$SOMOEM3+$SOMOEM4+$SOMOEM5+$SOMOEM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMOEF1+$SOMOEF2+$SOMOEF3+$SOMOEF4+$SOMOEF5+$SOMOEF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMTotalM1+$SOMTotalM2+$SOMTotalM3+$SOMTotalM4+$SOMTotalM5+$SOMTotalM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMTotalF1+$SOMTotalF2+$SOMTotalF3+$SOMTotalF4+$SOMTotalF5+$SOMTotalF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMGM1+$SOMGM2+$SOMGM3+$SOMGM4+$SOMGM5+$SOMGM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMGF1+$SOMGF2+$SOMGF3+$SOMGF4+$SOMGF5+$SOMGF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMABM1+$SOMABM2+$SOMABM3+$SOMABM4+$SOMABM5+$SOMABM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMABF1+$SOMABF2+$SOMABF3+$SOMABF4+$SOMABF5+$SOMABF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMDEM1+$SOMDEM2+$SOMDEM3+$SOMDEM4+$SOMDEM5+$SOMDEM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMDEF1+$SOMDEF2+$SOMDEF3+$SOMDEF4+$SOMDEF5+$SOMDEF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMREM1+$SOMREM2+$SOMREM3+$SOMREM4+$SOMREM5+$SOMREM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMREF1+$SOMREF2+$SOMREF3+$SOMREF4+$SOMREF5+$SOMREF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMCRIM1+$SOMCRIM2+$SOMCRIM3+$SOMCRIM4+$SOMCRIM5+$SOMCRIM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMCRIF1+$SOMCRIF2+$SOMCRIF3+$SOMCRIF4+$SOMCRIF5+$SOMCRIF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMERM1+$SOMERM2+$SOMERM3+$SOMERM4+$SOMERM5+$SOMERM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMERF1+$SOMERF2+$SOMERF3+$SOMERF4+$SOMERF5+$SOMERF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMTotalSM1+$SOMTotalSM2+$SOMTotalSM3+$SOMTotalSM4+$SOMTotalSM5+$SOMTotalSM6)/100 ;?></td>
						<td align="center"><?php echo ($SOMTotalSF1+$SOMTotalSF2+$SOMTotalSF3+$SOMTotalSF4+$SOMTotalSF5+$SOMTotalSF6)/100 ;?></td>
						<td align="center"><?php echo ($SOMReste1+$SOMReste2+$SOMReste3+$SOMReste4+$SOMReste5+$SOMReste6)/100;?></td>
						
					</tr>
				</tfoot>
			</table>
			<table style="width:100%; margin-top:30px; font-size:12px">
				<tr> 
					<td style="font-weight:bold;width:80px">Colonne 1 : </td>
					<td style="">Age des enfants</td>
				</tr>
				<tr> 
					<td style="font-weight:bold;width:80px">Colonne 2 : </td>
					<td style="">Incrire le nombre de malnutris du mois précédent selon l'âge.</td>
				</tr>
				<tr> 
					<td style="font-weight:bold;width:80px">Colonne 3 : </td>
					<td style="">Inscrire le nombre total d'enfants pris encharge selon le sexe quelque soit nutritionnel.</b></td>
				</tr>
				<tr> 
					<td style="font-weight:bold;width:80px">Colonne 4 : </td>
					<td style="">Inscrire le nombre d'enfants déchargés.</td>
				</tr>
				<tr> 
					<td style="font-weight:bold;width:80px">Colonne 5 : </td>
					<td style="">Inscrire le nombre total d'enfants bénéficiares à la fin du mois.</td>
				</tr>
				
			</table>
			<table class="footer" style="width:100%; font-weight:bold; font-size:12px">
				<tr>
					<td  align="center" style="width:100%"><span>Email: <span style="color:maroon"><i><u>magasin@medicalis.com</u></i></span></span>
					</td>
				</tr>
				<tr>
					<td style="font-size:12px" align="center">tel:(+242) 06 839 20 56 / 06 888 52 88 / 06 598 58 87</td>
				</tr>
			
			</table>
				
		</div>
	</body>
</html>