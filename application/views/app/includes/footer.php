
	<div class="theme-bg" style="text-shadow: 5px 4px 3px black;color:#fff;margin-left:18%"><?=$info->str_sCopy;?></div>
	<div class="color-bg"></div>
	<!-- Jquery Core Js --> 
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-3.1.0.min.js');?>"></script> <!-- Lib Scripts Plugin Js -->
	<script src="<?php echo base_url('assets/bundles/libscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js -->
	<script src="<?php echo base_url('assets/bundles/morphingsearchscripts.bundle.js');?>"></script> <!-- morphing search Js --> 
	<script src="<?php echo base_url('assets/bundles/vendorscripts.bundle.js');?>"></script> <!-- Lib Scripts Plugin Js --> 
	<script src="<?php echo base_url('assets/plugins/jquery-datatable/datatables.min.js');?>"></script><!-- Jquery DataTable Plugin Js -->
	<script src="<?php echo base_url('assets/plugins/jquery-sparkline/jquery.sparkline.min.js');?>"></script> <!-- Sparkline Plugin Js -->
	<script src="<?php echo base_url('assets/plugins/chartjs/Chart.bundle.min.js');?>"></script> <!-- Chart Plugins Js --> 
	<script src="<?php echo base_url('assets/bundles/fullcalendarscripts.bundle.js');?>"></script><!--/ calender javascripts --> 
	<script src="<?php echo base_url('assets/plugins/autosize/autosize.js');?>"></script> <!-- Autosize Plugin Js --> 
	<script src="<?php echo base_url('assets/plugins/momentjs/moment.js');?>"></script> <!-- Moment Plugin Js --> 
	<script src="<?php echo base_url('assets/plugins/dropzone/dropzone.js');?>"></script> <!-- Dropzone Plugin Js -->
	<!-- Bootstrap Material Datetime Picker Plugin Js --> 
	<script src="<?php echo base_url('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js');?>"></script> 

	<script src="<?php echo base_url('assets/plugins/bootstrap-notify/bootstrap-notify.js');?>"></script> <!-- Bootstrap Notify Plugin Js -->
	<script src="<?php echo base_url('assets/plugins/sweetalert/sweetalert.min.js');?>"></script> <!-- SweetAlert Plugin Js --> 
	<script src="<?php echo base_url('assets/js/pages/ui/notifications.js');?>"></script> <!-- Custom Js --> 

	<script src="<?php echo base_url('assets/plugins/waitme/waitMe.js');?>"></script> <!-- Wait Me Plugin Js -->
	<script src="<?php echo base_url('assets/plugins/jquery-countto/jquery.countTo.js');?>"></script> <!-- Jquery CountTo Plugin Js -->
	<script src="<?php echo base_url('assets/js/pages/widgets/infobox/infobox-1.js');?>"></script> 

	<script src="<?php echo base_url('assets/bundles/mainscripts.bundle.js');?>"></script><!-- Custom Js -->
	<script src="<?php echo base_url('assets/bundles/morphingscripts.bundle.js');?>"></script><!-- morphing search page js --> 
	<script src="<?php echo base_url('assets/js/pages/cards/basic.js');?>"></script> <!-- Custom Js -->
	<script src="<?php echo base_url('assets/js/pages/charts/chartjs.js');?>"></script>
	<script src="<?php echo base_url('assets/js/pages/ui/modals.js');?>"></script> 
	<script src="<?php echo base_url('assets/js/pages/forms/basic-form-elements.js');?>"></script>
	<script src="<?php echo base_url('assets/js/morphing.js');?>"></script><!-- Custom Js -->  
	<script src="<?php echo base_url('assets/js/pages/tables/data-table.js');?>"></script>
	<script src="<?php echo base_url('assets/js/pages/index.js');?>"></script>
	<script src="<?php echo base_url('assets/js/pages/charts/sparkline.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/pages/calendar/calendar.js');?>"></script>
	
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/codemirror.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/xml.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/froala_editor.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/align.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/code_beautifier.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/code_view.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/draggable.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/image.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/image_manager.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/link.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/lists.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/paragraph_format.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/paragraph_style.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/table.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/video.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/url.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/editeur/js/plugins/entities.min.js');?>"></script>
  
  <script type="text/javascript" src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
  
	<script>
		var value="";
		var Total=0;
		$( document ).ready(function(){
			var check = $("input[type=checkbox]:checked");
				//alert(check.length);
				value="";
				var i=0;
				Total=0;
				check.each(function(){
					i++;
					value=value+$(this).val();
					Total =Total + parseInt($(".champs"+$(this).val()).val());
					if(i< check.length){
						value=value+"-";
					}
					
				});
				//alert(value);
				if(check.length >= 1){
					//$("#enssembleExam").removeClass("cacher");
					
					$("#showRecouvrement").attr("href","/ads/index.php/impression/recouvrement_assureur/"+value);
					$(".total").html(Total);
				}else{
					$("#showRecouvrement").attr("href","#");
					$(".total").html(0);
				}
		});
	
	</script>
	  <script>
	  
		$(".select2").select2({
			placeholder: "-- Sélection de l'acte médical * --",
			allowClear: true
		});	
		
		//RABY
		$(".selectord").select2({
			placeholder: "-- Sélection de le produit * --",
			allowClear: true
		});	
		
		$(".selectDir").select2({
			placeholder: "-- Choisissez la direction du service * --",
			allowClear: true
		});
		
		$(".selectAlle").select2({
			placeholder: "-- Choisir * --",
			allowClear: true
		});
		
		$(".selectLap").select2({
			placeholder: "-- Choisir * --",
			allowClear: true
		});
		
		
		$(".selectMed").select2({
			placeholder: "----- Prescription * -----",
			allowClear: true
		});
		
		$(".selectAnte").select2({
			placeholder: "-- Choisir * --",
			allowClear: true
		});
		
		$(".selectDia").select2({
			placeholder: "-- Sélectionner * --",
			allowClear: true
		});

		$(".selectBloc").select2({
			placeholder: "-- Choisissez le bloc opératoire * --",
			allowClear: true
		});
		
		$(".selectAgent").select2({
			placeholder: "-- Choisissez l'agent * --",
			allowClear: true
		});
	//RABY
		
		$(".selectFonc").select2({
			placeholder: "-- Choisissez la fonctionnalité * --",
			allowClear: true
		});	
		
		$(".selectSer").select2({
			placeholder: "-- Choisissez le service * --",
			allowClear: true
		});	
		
		$(".selectUni").select2({
			placeholder: "-- Choisissez l'unité * --",
			allowClear: true
		});	
		
		$(".selectExam").select2({
			placeholder: "-- Choisissez l'unité * --",
			allowClear: true
		});	
		$(".selectReact").select2({
			placeholder: "-- Choisissez l'unité * --",
			allowClear: true
		});	
		
		$(".selectMedecin").select2({
			placeholder: "Sélectionner le médecin",
			allowClear: true
		});	
		
		$(".fraisDivers").select2({
			placeholder: "-- Sélectionner l'acte/frais divers--",
			allowClear: true
		});	
		
		$(".medPrst").select2({
			placeholder: "-- Sélectionner le médecin prescripteur --",
			allowClear: true
		});	
		
		$(".selectPersonnel").select2({
			placeholder: "-- Sélectionner --",
			allowClear: true
		});
	  
</script>
	  
	  
<script>
    (function () {
       new FroalaEditor('.edit');
       new FroalaEditor('#edit');
       new FroalaEditor('#edit_2');
       new FroalaEditor('#edit_3');
       new FroalaEditor('#indication');
    })();
	
	$(function () {
    new Chart(document.getElementById("contante").getContext("2d"), getChartJs('line'));
	});
	
	

	function getChartJs(type) {
		var config = null;
		
		var tension = document.getElementsByClassName("tension");
		var temperature = document.getElementsByClassName("temperature");
		var prise = document.getElementsByClassName("prise");
		
		var donneeTension = new Array();
		var donneeTemp = new Array();
		var donneePrise = new Array();
		
		for(var i=0; i<tension.length; i++){
			donneeTension.push(tension[i].value);
		}
		
		for(var j=0; j<temperature.length; j++){
			donneeTemp.push(temperature[j].value);
		}
		
		for(var k=0; k<prise.length; k++){
			donneePrise.push(prise[k].value);
		}
		
		
		if (type === 'line') {
			config = {
				type: 'line',
				data: {
					labels: donneePrise,
					datasets: [{
						label: "Prise de tension",
						data: donneeTension,
						borderColor: 'rgba(0, 188, 212, 0.75)',
						backgroundColor: 'rgba(0, 188, 212, 0.3)',
						pointBorderColor: 'rgba(0, 188, 212, 0)',
						pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
						pointBorderWidth: 1
					}, {
							label: "Prise de température",
							data: donneeTemp,
							borderColor: 'rgba(233, 30, 99, 0.75)',
							backgroundColor: 'rgba(233, 30, 99, 0.3)',
							pointBorderColor: 'rgba(233, 30, 99, 0)',
							pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
							pointBorderWidth: 1
						}]
				},
				options: {
					responsive: true,
					legend:  {
						display: true,
						labels: {
							fontColor: 'rgb(0, 0, 0)'
						}
					}
				}
			}
		}
		
		return config;
	}
</script>

  <?php if(isset($listeobservations)) { ?>
<script>
    (function () {
       new FroalaEditor('.edit');
       new FroalaEditor('#edit');
       new FroalaEditor('#edit_2');
       new FroalaEditor('#edit_3');
       new FroalaEditor('#indication');
    })();
	
	$(function () {
		Etat = new Chart(document.getElementById("etat").getContext("2d"), getChartJs('line'));
	});
	
	

	function getChartJs(type) {
		var configEtat = null;
		
		var age = document.getElementsByClassName("age");
		var poids = document.getElementsByClassName("Poids");
		var poidsMax = document.getElementsByClassName("PoidsMax");
		var poidsMin = document.getElementsByClassName("PoidsMin");
		
		
		var donneeAge = new Array();
		var donneePoids = new Array();
		var donneePoidsMax = new Array();
		var donneePoidsMin = new Array();
		
		for(var i=0; i<age.length; i++){
			donneeAge.push(age[i].value);
		}
		
		for(var j=0; j<poids.length; j++){
			donneePoids.push(poids[j].value);
			
		}
		for(var j=0; j<poidsMax.length; j++){
			donneePoidsMax.push(poidsMax[j].value);
			
		}
		for(var j=0; j<poidsMin.length; j++){
			donneePoidsMin.push(poidsMin[j].value);
			
		}
		
		
		if (type === 'line') {
			configEtat = {
				type: 'line',
				data: {
					labels: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,,35,36],
					datasets: [{
							label: "TA",
							data: donneePoidsMax,
							borderColor: 'rgba(228, 33, 34, 0.75)',
							backgroundColor: 'rgba(228, 33, 34, 0.3)',
							pointBorderColor: 'rgba(228, 33, 34, 0)',
							pointBackgroundColor: 'rgba(228, 33, 34, 0.9)',
							pointBorderWidth: 1
						},{
						label: "Poids",
						data: donneePoids,
						borderColor: 'rgba(0, 188, 212, 0.75)',
						backgroundColor: 'rgba(0, 188, 212, 0.3)',
						pointBorderColor: 'rgba(0, 188, 212, 0)',
						pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
						pointBorderWidth: 1
					}, {
							label: "",
							data: donneePoidsMin,
							borderColor: 'rgba(233, 30, 99, 0.75)',
							backgroundColor: 'rgba(233, 30, 99, 0.3)',
							pointBorderColor: 'rgba(233, 30, 99, 0)',
							pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
							pointBorderWidth: 1
						}]
				},
				options: {
					responsive: true,
					legend: false
				}
			}
		}
		
		return configEtat;
	}
  </script>
  
  <?php } ?>
  
   <?php if(isset($listePartogramme)) { ?>
  <script>
    (function () {
       new FroalaEditor('.edit');
       new FroalaEditor('#edit');
       new FroalaEditor('#edit_2');
       new FroalaEditor('#edit_3');
       new FroalaEditor('#indication');
    })();
	
	$(function () {
		parto = new Chart(document.getElementById("partogramme").getContext("2d"), getChartJs('line'));
	});
	
	

	function getChartJs(type) {
		var configPartogramme = null;
		
		var rythme = document.getElementsByClassName("rythme");
		var descente = document.getElementsByClassName("descente");
		var contraction = document.getElementsByClassName("contraction");
		var pouls = document.getElementsByClassName("pouls");
		var TA = document.getElementsByClassName("TA");
		
		var donneeRythme = new Array();
		var donneeDescente = new Array();
		var donneeContraction = new Array();
		var donneePouls = new Array();
		var donneeTA = new Array();
		
		for(var i=0; i<descente.length; i++){
			donneeDescente.push(descente[i].value);
		}
		for(var i=0; i<contraction.length; i++){
			donneeContraction.push(contraction[i].value);
		}
		
		for(var i=0; i<rythme.length; i++){
			donneeRythme.push(rythme[i].value);
		}
		
		for(var i=0; i<pouls.length; i++){
			donneePouls.push(pouls[i].value);
		}
		for(var i=0; i<TA.length; i++){
			donneeTA.push(TA[i].value);
		}
		
		if (type === 'line') {
			configPartogramme = {
				type: 'line',
				data: {
					labels:  [1,2,3,4,5,6,7,8,9,10,11,12],
					datasets: [{
						label: "Rythme cardiaque",
						data: donneeRythme,
						borderColor: 'rgba(0, 188, 212, 0.75)',
						backgroundColor: 'rgba(0, 188, 212, 0.3)',
						pointBorderColor: 'rgba(0, 188, 212, 0)',
						pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
						pointBorderWidth: 1
					}, {
							label: "Descente de la tête",
							data: donneeDescente,
							borderColor: 'rgba(233, 30, 99, 0.75)',
							backgroundColor: 'rgba(233, 30, 99, 0.3)',
							pointBorderColor: 'rgba(233, 30, 99, 0)',
							pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
							pointBorderWidth: 1
						}, {
							label: "Nombre de contractions",
							data: donneeContraction,
							borderColor: 'rgba(100, 30, 99, 0.75)',
							backgroundColor: 'rgba(100, 30, 99, 0.3)',
							pointBorderColor: 'rgba(100, 30, 99, 0)',
							pointBackgroundColor: 'rgba(100, 30, 99, 0.9)',
							pointBorderWidth: 1
						}, {
							label: "pouls",
							data: donneePouls,
							borderColor: 'rgba(0, 142, 99, 0.75)',
							backgroundColor: 'rgba(0, 142, 99, 0.3)',
							pointBorderColor: 'rgba(0, 142, 99, 0)',
							pointBackgroundColor: 'rgba(0, 142, 99, 0.9)',
							pointBorderWidth: 1
						}, {
							label: "TA",
							data: donneeTA,
							borderColor: 'rgba(228, 33, 34, 0.75)',
							backgroundColor: 'rgba(228, 33, 34, 0.3)',
							pointBorderColor: 'rgba(228, 33, 34, 0)',
							pointBackgroundColor: 'rgba(228, 33, 34, 0.9)',
							pointBorderWidth: 1
						}]
				},
				options: {
					responsive: true,
					legend:  {
						display: true,
						labels: {
							fontColor: 'rgb(0, 0, 0)'
						}
					}
				}
			}
		}
		
		return configPartogramme;
	}
  </script>
  

   <?php } ?>
  
	
 <script type="text/javascript">
    var IDLE_TIMEOUT = 10 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 1000);
    function CheckIdleTime(){
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
		console.log(_idleSecondsCounter);
        var oPanel = 10;
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= 300) {
            // document.location.href = "logout.php";
			// alert('time to');
			 location.href="/ads/index.php/Authentification/deconnexion/";
        }
    }
 </script>


	
	
	<script src="<?php echo base_url('assets/js/personnel.js');?>"></script>
	<script src="<?php echo base_url('assets/js/profil-avatar.js');?>"></script>
	<script src="<?php echo base_url('assets/js/parametre.js');?>"></script>
	<script src="<?php echo base_url('assets/js/patient.js');?>"></script>
	<script src="<?php echo base_url('assets/js/consultation.js');?>"></script>
	<script src="<?php echo base_url('assets/js/pharmacie.js');?>"></script>
	<script src="<?php echo base_url('assets/js/budget.js');?>"></script>
	<script src="<?php echo base_url('assets/js/rdv.js');?>"></script>
	<script src="<?php echo base_url('assets/js/laboratoire.js');?>"></script>
	<script src="<?php echo base_url('assets/js/chirurgie.js');?>"></script>
	<script src="<?php echo base_url('assets/js/courrier.js');?>"></script>
	<script src="<?php echo base_url('assets/js/stat-pharmacie.js');?>"></script>
	<script src="<?php echo base_url('assets/js/statistiques.js');?>"></script>
	<script src="<?php echo base_url('assets/js/banque.js');?>"></script>
	<script src="<?php echo base_url('assets/js/fonctionnement.js');?>"></script>
</body>
</html>