						<li class="<?php if ($page == "statistique") {
										echo "active";
									} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-line-chart"></i><span>Statistique</span></a>
							<ul class="ml-menu">
								<li><a <?php if ($page == "statistique" and $sousPage == "finances_par_rubrique_cprincipal"){
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/finances_par_rubrique_cprincipal"); ?>">Finances par rubrique</a>
								</li>
								<li><a <?php if ($page == "statistique" and $sousPage == "finances_par_type_cprincipal"){
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/finances_par_type_cprincipal"); ?>">Finances quotes-parts</a>
								</li>
								<li><a <?php if ($page == "statistique" and $sousPage == "finances_service_cprincipal") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/finances_service_cprincipal"); ?>">Finances par service</a>
								</li>
								<li><a <?php if ($page == "statistique" and $sousPage == "finance_par_acte_cprincipal") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/finance_par_acte_cprincipal"); ?>">Finances par acte</a>
								</li>
								<li><a <?php if ($page == "statistique" and $sousPage == "finance_par_medecin") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/finance_par_medecin"); ?>">Finances par médecin</a></li>
								<li><a <?php if ($page == "statistique" and $sousPage == "ristourne_des_medecin") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/ristourne_des_medecin"); ?>">Ristorne des medecins préscirpteurs</a></li>
								<li><a <?php if ($page == "statistique" and $sousPage == "quotes_parts_medecins") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("statistique/quotes_parts_medecins"); ?>">Quotes parts des medecins</a></li>
							</ul>
						</li>
						<li class="<?php if ($page == "facture") {
										echo "active";
									} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-dollar"></i><span>Factures</span> </a>
							<ul class="ml-menu">
								<!--<li><a <?php if ($page == "facture" and (!isset($sousPage) or $sousPage == "index")) {
												echo "style='color:#fff'";
											} ?> href="<?php //echo site_url("facture");
																																							?>">Factures de caisse</a></li>-->
								<li><a <?php if ($page == "facture" and $sousPage == "non_assures") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("facture/non_assures"); ?>">Patients non assurés</a></li>
								<li><a <?php if ($page == "facture" and $sousPage == "assures") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("facture/assures"); ?>">Patients assurés</a></li>
								<li><a <?php if ($page == "facture" and $sousPage == "frais_divers") {
									echo "style='color:#fff'";
								} ?> href="<?php echo site_url("facture/frais_divers"); ?>">Actes/Frais Divers</a>
								</li>
								<li><a <?php if ($page == "facture" and $sousPage == "ensemble_facture") {
									echo "style='color:#fff'";
								} ?> href="<?php echo site_url("facture/ensemble_facture"); ?>">Ensemble factures</a>
								</li>
								<li>
									<a <?php if ($page == "facture" and $sousPage == "rapport_facture_annulee") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("facture/rapport_facture_annulee"); ?>"> Rapport annutions
									</a>
								</li>
								<!--<li><a <?php// if ($page == "facture" and $sousPage == "liste") {
											//echo "style='color:#fff'";
										//} ?> href="<?php// echo site_url("facture/liste"); ?>">Factures annulées</a>
								</li>-->
							</ul>
						</li>
						<li class="<?php if ($sousPage == "recu_caisse" or $sousPage == "recu_caisse_bon" or $sousPage == "recu_caisse_impaye" or $sousPage == "recu_caisse_assure" or $sousPage == "recu_caisse_non_assure" ) {
										echo "active";
									} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-dollar"></i><span>Facture Pharmacie</span> </a>
							<ul class="ml-menu">
								
								<li><a <?php if ($page == "pharmacie" and $sousPage == "recu_caisse") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pharmacie/recu_caisse"); ?>">Facture de caisse</a></li>
								<li><a <?php if ($page == "pharmacie" and $sousPage == "recu_caisse_non_assure") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pharmacie/recu_caisse_non_assure"); ?>">Factures non assurées</a></li>
								<li><a <?php if ($page == "pharmacie" and $sousPage == "recu_caisse_assure") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pharmacie/recu_caisse_assure"); ?>">Factures par assurance</a></li>
								<li><a <?php if ($page == "pharmacie" and $sousPage == "recu_caisse_bon") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pharmacie/recu_caisse_bon"); ?>">Factures par bon</a></li>
								<li><a <?php if ($page == "pharmacie" and $sousPage == "recu_caisse_impaye") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("pharmacie/recu_caisse_impaye"); ?>">Factures impayées</a></li>
							</ul>
						</li>
						<li class="<?php if ($sousPage == "journal_encaissement") {
									echo "active";
								} ?>"><a href="<?php echo site_url("caisse/journal_encaissement"); ?>"><i class="fa fa-file"></i><span>Jrnl. caisse/encaiss.</span><span style="background:red;color:white" class="label-count" id=""></span></a>
						</li>