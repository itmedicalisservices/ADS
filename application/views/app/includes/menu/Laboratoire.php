						<li class="<?php if ($page == "laboratoire") {
										echo "active";
									} ?>"><a href="javascript:void(0);" class="menu-toggle"><i class="fa fa-flask"></i><span>Laboratoire</span> </a>
							<ul class="ml-menu">
								<li><a <?php if ($page == "laboratoire" and $sousPage == "prevelements") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("laboratoire/prevelements"); ?>">Prelevements</a></li>
								<li><a <?php if ($page == "laboratoire" and $sousPage == "examens") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("laboratoire/examens"); ?>">Examens a faire</a></li>
								<li><a <?php if ($page == "laboratoire" and $sousPage == "examens_faits") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("laboratoire/examens_faits"); ?>">Examens termines</a></li>

								<li><a <?php if ($page == "laboratoire" and $sousPage == "stock") {
											echo "style='color:#fff'";
										} ?> href="<?php echo site_url("laboratoire/stock_accessoire"); ?>">Gestion de stock</a></li>
							</ul>
						</li>