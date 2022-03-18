
<?php include(dirname(__FILE__) . '/../includes/header.php'); ?>
<section class="content home" style="min-height:550px">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Paramètres</h2>
            <small class="text-muted">CIM-10</small>
        </div>
        
        <div class="row clearfix">
			
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="<?php echo site_url("parametre/chapitre");?>"><i class="zmdi zmdi-settings col-blue-grey"></i><br>Administrer</a></div>
                    <div class="content">
                        <div class="text">Chapitres</div>
                        <div class="number"><?php echo $this->md_parametre->nb_chapitre_actifs()->nb;?></div>
                    </div>
                </div>
            </div>
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="<?php echo site_url("parametre/classe");?>"><i class="zmdi zmdi-settings col-blue-grey"></i><br>Administrer</a></div>
                    <div class="content">
                        <div class="text">Classes</div>
                        <div class="number"><?php echo $this->md_parametre->nb_classe_actifs()->nb;?></div>
                    </div>
                </div>
            </div>  
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="<?php echo site_url("parametre/maladie");?>"><i class="zmdi zmdi-settings col-blue-grey"></i><br>Administrer</a></div>
                    <div class="content">
                        <div class="text">Maladie</div>
                        <div class="number"><?php echo $this->md_parametre->nb_maladie_actifs()->nb;?></div>
                    </div>
                </div>
            </div>  
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="<?php echo site_url("parametre/sous_maladie_1");?>"><i class="zmdi zmdi-settings col-blue-grey"></i><br>Administrer</a></div>
                    <div class="content">
                        <div class="text">Sous Maladie niveau 1 </div>
                        <div class="number"><?php echo $this->md_parametre->nb_SousMaladie1_actifs()->nb;?></div>
                    </div>
                </div>
            </div>  
			<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"><a href="<?php echo site_url("parametre/sous_maladie_2");?>"><i class="zmdi zmdi-settings col-blue-grey"></i><br>Administrer</a></div>
                    <div class="content">
                        <div class="text">Sous Maladie niveau 2 </div>
                        <div class="number"><?php echo $this->md_parametre->nb_SousMaladie2_actifs()->nb;?></div>
                    </div>
                </div>
            </div>  
			
			
        </div>
        
	</div>

</section>
<?php include(dirname(__FILE__) . '/../includes/footer.php'); ?>