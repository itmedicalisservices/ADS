
<li class="<?php if ($page == "patient") {
				echo "active";
			} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-hospital-o"></i><span>Admission</span> </a>
	<ul class="ml-menu">
		<li><a <?php if ($page == "patient" and $sousPage == "nouveau") {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("patient/nouveau"); ?>">Ajouter un patient</a></li>
		<li><a <?php if ($page == "patient" and $sousPage == "liste_modifier_patient") {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("patient/liste_modifier_patient"); ?>">Modifier un patient</a></li>
		<li><a <?php if ($page == "patient" and $sousPage == "liste") {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("patient/liste"); ?>">Liste des patients</a></li>
		<!--<li>
			<a <?php //if ($page == "patient" and $sousPage == "deces") {
					//echo "style='color:#fff'";
				//} ?> href="<?php// echo site_url("patient/deces"); ?>">Liste des patients décédés
			</a>
		</li>-->
	</ul>
</li>



<li><a <?php if ($page == "admission" and $sousPage == "mes_patients") {
	echo "style='color:#fff'";
} ?> href="<?php echo site_url("admission/liste_patient_hospitaliser"); ?>"><i class="fa fa-user-md"></i><span>Liste des patients hospitalisés</span></a></li>
						
