						<li class="<?php if ($page == "pediatrie") {
										echo "active";
									} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-user-md"></i><span>Consultation</span> </a>
							<ul class="ml-menu">
								<!-- <li><a <?php if ($page == "pediatrie" and (!isset($sousPage) or $sousPage == "index")) {
												echo "style='color:#fff'";
											} ?> href="<?php echo site_url("pediatrie"); ?>">Patients orient�s</a></li> -->
								<li><a <?php if ($page == "pediatrie" and $sousPage == "mes_patients") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pediatrie/mes_patients"); ?>">Mes patients</a></li>
								<li><a <?php if ($page == "admission" and $sousPage == "liste_demande_hospitalition") {
										echo "style='color:#fff'";
									} ?> href="<?php echo site_url("admission/liste_demande_hospitalition"); ?>">Liste des demandes d'hospitalisation</a></li>
								<li><a <?php if ($page == "consultation" and $sousPage == "demande_avis") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("consultation/demande_avis"); ?>">Demande d'avis</a></li>
								<!--<li><a <?php /*if($page=="pediatrie" AND $sousPage=="hostirique_de_mes_patients"){echo "style='color:#fff'";} */ ?> href="<?php /*echo site_url("pediatrie/hostirique_de_mes_patients");*/ ?>">Mes dossiers patients</a></li>
                        <li><a <?php /*if($page=="pediatrie" AND $sousPage=="hostorique_actes"){echo "style='color:#fff'";} */ ?> href="<?php /*echo site_url("pediatrie/hostorique_actes");*/ ?>">Historique du service</a></li>-->
							</ul>
						</li>
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
						<li class="<?php if ($page == "rdv" and  $sousPage == "mesRdv") {
								echo "active";
							} ?> open"><a href="<?php echo site_url("rdv/mesRdv"); ?>"><i class="zmdi zmdi-calendar-check"></i><span>Mes rendez-vous</span><span id="alert-rdv"> </span></a>
						</li>