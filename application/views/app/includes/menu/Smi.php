<li class="<?php if ($page == "smi" and $sousPage == "mes_patients") {
				echo "active";
			} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-user-md"></i><span>Consultation</span> </a>
	<ul class="ml-menu">
		<!-- <li><a <?php if ($page == "smi" and (!isset($sousPage) or $sousPage == "index")) {
						echo "style='color:#fff'";
					} ?> href="<?php echo site_url("smi"); ?>">Patients orient�s</a></li> -->
		<li><a <?php if ($page == "smi" and $sousPage == "mes_patients") {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("smi/mes_patients"); ?>">Mes patients</a></li>
	</ul>
</li>

<li class="<?php if ($page == "Recherche_dossiers_patients"){
				echo "active";
			} ?>"><a href="<?php echo site_url("Recherche_dossiers_patients/liste_recherche_dossier_patient"); ?>"><i class="zmdi zmdi-folder"></i><span>Rech. Dossiers Patients</span> </a></li>
<li class="<?php if ($page == "hospitalisation") {
				echo "active";
			} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-bed"></i><span>hospitalisation</span> </a>
	<ul class="ml-menu">
		<li><a <?php if ($page == "hospitalisation" and (!isset($sousPage) or $sousPage == "index")) {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("hospitalisation"); ?>">Patients hospitalis�s</a></li>
		<li><a <?php if ($page == "hospitalisation" and $sousPage == "journal") {
					echo "style='color:#fff'";
				} ?> href="<?php echo site_url("hospitalisation/journal"); ?>">journal des passages </a></li>
	</ul>
</li>