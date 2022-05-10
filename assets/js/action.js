$(".patientconcerne").click(function(){

	var id = $(this).attr('rel');
	// alert(id);
	// return;

	// var data = $('select#acte').val();
	// alert(data);
	$.ajax({
		type:"POST",
		url: recuppatient,
		data:"idpat="+id,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("select#patient").html(retour);
		
	});
	
	return false;
});



$(".checkPatient").click(function(){
	var check = $("input[type=checkbox]:checked");
	if(check.length >= 1){
		$("#facture").removeClass("cacher");
	}
	else{
		$("#facture").addClass("cacher");
	}
});

$(".checkPatientOrd").click(function(){
	var check = $("input[type=checkbox]:checked");
	if(check.length >= 1){
		$("#factureOrd").removeClass("cacher");
	}
	else{
		$("#factureOrd").addClass("cacher");
	}
});

var Total=0;
var value="";
$(".checkRECOU").click(function(){
	//alert(1);
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
		//alert($(".champs"+$(this).val()).val());
	});
	//alert(value);
	if(check.length >= 1){
		//$("#enssembleExam").removeClass("cacher");
		
		$("#showRecouvrement").attr("href","/epiphanie_hgdev/index.php/impression/recouvrement_assureur/"+value);
		$(".total").html(Total);
		
	}
	else{
		$("#showRecouvrement").attr("href","#");
		$(".total").html(0);
	}
});

/** Antécédents obstetricaux ***/

$(".editAnteObs").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAnteObsFinal").click(function(){
	alert(1);
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-lob'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAntecedentObs,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			 alert(retour);
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAnteObsAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** source d'information ***/

$(".editLSO").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editLSOFinal").click(function(){
	alert(1);
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-lso'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSource,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			 alert(retour);
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editLSOAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Service ***/
$(".editService").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_flt"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(".champs_flt"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editServiceFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-ser'+rel).serialize();
	var data2 = $('form#form-edit_dep'+rel).serialize();
	var data3 = $('form#form-edit_flt'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierService,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_dep"+rel).addClass('cacher');
				$(".input_flt"+rel).addClass('cacher');
				$(".input_ser"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_flt"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_dep"+rel).html(tabRetour[1]);
				$(".champs_flt"+rel).html(tabRetour[2]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".input_flt"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_flt"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editServiceAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".input_flt"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(".champs_flt"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Chapitre ***/
$(".editChapitre").click(function(){
	var rel=$(this).attr('rel');
	$(".input_code"+rel).removeClass('cacher');
	$(".input_chap"+rel).removeClass('cacher');
	$(".confirm_chap"+rel).removeClass('cacher');
	$(".annule_chap"+rel).removeClass('cacher');
	$(".champs_chap"+rel).addClass('cacher');
	$(".champs_code"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editChapitreFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-chap'+rel).serialize();
	var data2 = $('form#form-edit_code'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierChapitre,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_chap"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".annule_chap"+rel).addClass('cacher');
				$(".clique_chap"+rel).removeClass('cacher');
				$(".champs_chap"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".confirm_chap"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_chap"+rel).html(tabRetour[0]);
				$(".champs_code"+rel).html(tabRetour[1]);
				$(".input_chap"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".annule_chap"+rel).addClass('cacher');
				$(".clique_chap"+rel).removeClass('cacher');
				$(".champs_chap"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".confirm_chap"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editChapitreAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_chap"+rel).addClass('cacher');
	$(".input_code"+rel).addClass('cacher');
	$(".confirm_chap"+rel).addClass('cacher');
	$(".clique_chap"+rel).removeClass('cacher');
	$(".champs_chap"+rel).removeClass('cacher');
	$(".champs_code"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** classe ***/
$(".editClasse").click(function(){
	var rel=$(this).attr('rel');
	$(".input_code"+rel).removeClass('cacher');
	$(".input_clas"+rel).removeClass('cacher');
	$(".input_chap"+rel).removeClass('cacher');
	$(".confirm_clas"+rel).removeClass('cacher');
	$(".annule_clas"+rel).removeClass('cacher');
	$(".champs_chap"+rel).addClass('cacher');
	$(".champs_code"+rel).addClass('cacher');
	$(".champs_clas"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editClasseFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-clas'+rel).serialize();
	var data2 = $('form#form-edit_code'+rel).serialize();
	var data3 = $('form#form-edit_chap'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierClasse,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_chap"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_clas"+rel).addClass('cacher');
				$(".annule_clas"+rel).addClass('cacher');
				$(".clique_clas"+rel).removeClass('cacher');
				$(".champs_chap"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_cla"+rel).removeClass('cacher');
				$(".confirm_clas"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_clas"+rel).html(tabRetour[0]);
				$(".champs_code"+rel).html(tabRetour[1]);
				$(".champs_chap"+rel).html(tabRetour[2]);
				$(".input_chap"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_clas"+rel).addClass('cacher');
				$(".annule_clas"+rel).addClass('cacher');
				$(".clique_clas"+rel).removeClass('cacher');
				$(".champs_chap"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_clas"+rel).removeClass('cacher');
				$(".confirm_clas"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editClasseAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_chap"+rel).addClass('cacher');
	$(".input_code"+rel).addClass('cacher');
	$(".input_clas"+rel).addClass('cacher');
	$(".confirm_clas"+rel).addClass('cacher');
	$(".clique_clas"+rel).removeClass('cacher');
	$(".champs_chap"+rel).removeClass('cacher');
	$(".champs_code"+rel).removeClass('cacher');
	$(".champs_clas"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});

/** SousMaladie1 ***/
$(".editSousMaladie1").click(function(){
	var rel=$(this).attr('rel');
	$(".input_code"+rel).removeClass('cacher');
	$(".input_mal"+rel).removeClass('cacher');
	$(".input_sous1"+rel).removeClass('cacher');
	$(".confirm_sous1"+rel).removeClass('cacher');
	$(".annule_sous1"+rel).removeClass('cacher');
	$(".champs_sous1"+rel).addClass('cacher');
	$(".champs_code"+rel).addClass('cacher');
	$(".champs_mal"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editSousMaladie1Final").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-mal'+rel).serialize();
	var data2 = $('form#form-edit-code'+rel).serialize();
	var data3 = $('form#form-edit_sous1'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSousMaladie1,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_mal"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_sous1"+rel).addClass('cacher');
				$(".annule_sous1"+rel).addClass('cacher');
				$(".clique_sous1"+rel).removeClass('cacher');
				$(".champs_mal"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_sous1"+rel).removeClass('cacher');
				$(".confirm_sous1"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_mal"+rel).html(tabRetour[0]);
				$(".champs_code"+rel).html(tabRetour[1]);
				$(".champs_sous1"+rel).html(tabRetour[2]);
				$(".input_sous1"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_mal"+rel).addClass('cacher');
				$(".annule_sous1"+rel).addClass('cacher');
				$(".clique_sous1"+rel).removeClass('cacher');
				$(".champs_mal"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_sous1"+rel).removeClass('cacher');
				$(".confirm_sous1"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editSousMaladie1Annule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_mal"+rel).addClass('cacher');
	$(".input_code"+rel).addClass('cacher');
	$(".input_sous1"+rel).addClass('cacher');
	$(".confirm_sous1"+rel).addClass('cacher');
	$(".clique_sous1"+rel).removeClass('cacher');
	$(".champs_mal"+rel).removeClass('cacher');
	$(".champs_code"+rel).removeClass('cacher');
	$(".champs_sous1"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** SousMaladie2 ***/
$(".editSousMaladie2").click(function(){
	var rel=$(this).attr('rel');
	$(".input_code"+rel).removeClass('cacher');
	$(".input_mal"+rel).removeClass('cacher');
	$(".input_sous2"+rel).removeClass('cacher');
	$(".confirm_sous2"+rel).removeClass('cacher');
	$(".annule_sous2"+rel).removeClass('cacher');
	$(".champs_sous2"+rel).addClass('cacher');
	$(".champs_code"+rel).addClass('cacher');
	$(".champs_mal"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editSousMaladie2Final").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-mal'+rel).serialize();
	var data2 = $('form#form-edit-code'+rel).serialize();
	var data3 = $('form#form-edit_sous2'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSousMaladie2,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_mal"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_sous2"+rel).addClass('cacher');
				$(".annule_sous2"+rel).addClass('cacher');
				$(".clique_sous2"+rel).removeClass('cacher');
				$(".champs_mal"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_sous2"+rel).removeClass('cacher');
				$(".confirm_sous2"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_mal"+rel).html(tabRetour[2]);
				$(".champs_code"+rel).html(tabRetour[1]);
				$(".champs_sous2"+rel).html(tabRetour[0]);
				$(".input_sous2"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".input_mal"+rel).addClass('cacher');
				$(".annule_sous2"+rel).addClass('cacher');
				$(".clique_sous2"+rel).removeClass('cacher');
				$(".champs_mal"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".champs_sous2"+rel).removeClass('cacher');
				$(".confirm_sous2"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editSousMaladie2Annule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_mal"+rel).addClass('cacher');
	$(".input_code"+rel).addClass('cacher');
	$(".input_sous2"+rel).addClass('cacher');
	$(".confirm_sous2"+rel).addClass('cacher');
	$(".clique_sous2"+rel).removeClass('cacher');
	$(".champs_mal"+rel).removeClass('cacher');
	$(".champs_code"+rel).removeClass('cacher');
	$(".champs_sous2"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Unité ***/
$(".editUnite").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".input_uni"+rel).removeClass('cacher');
	$(".confirm_uni"+rel).removeClass('cacher');
	$(".annule_uni"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(".champs_uni"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editUniteFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-uni'+rel).serialize();
	var data2 = $('form#form-edit_dep'+rel).serialize();
	var data3 = $('form#form-edit_ser'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierUnite,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".input_uni"+rel).addClass('cacher');
				$(".annule_uni"+rel).addClass('cacher');
				$(".clique_uni"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_uni"+rel).removeClass('cacher');
				$(".confirm_uni"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_uni"+rel).html(tabRetour[0]);
				$(".champs_ser"+rel).html(tabRetour[1]);
				$(".champs_dep"+rel).html(tabRetour[2]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".input_uni"+rel).addClass('cacher');
				$(".annule_uni"+rel).addClass('cacher');
				$(".clique_uni"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_uni"+rel).removeClass('cacher');
				$(".confirm_uni"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editUniteAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".input_uni"+rel).addClass('cacher');
	$(".confirm_uni"+rel).addClass('cacher');
	$(".clique_uni"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(".champs_uni"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** spécialité ***/
$(".editSpecialite").click(function(){
	var rel=$(this).attr('rel');
	$(".input_tpe"+rel).removeClass('cacher');
	$(".input_pst"+rel).removeClass('cacher');
	$(".input_spt"+rel).removeClass('cacher');
	$(".confirm_spt"+rel).removeClass('cacher');
	$(".annule_spt"+rel).removeClass('cacher');
	$(".champs_spt"+rel).addClass('cacher');
	$(".champs_tpe"+rel).addClass('cacher');
	$(".champs_pst"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editSpecialiteFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-spt'+rel).serialize();
	var data2 = $('form#form-edit_pst'+rel).serialize();
	var data3 = $('form#form-edit_tpe'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSpecialite,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_tpe"+rel).addClass('cacher');
				$(".input_pst"+rel).addClass('cacher');
				$(".input_spt"+rel).addClass('cacher');
				$(".confirm_spt"+rel).addClass('cacher');
				$(".annule_spt"+rel).addClass('cacher');
				$(".clique_spt"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".champs_pst"+rel).removeClass('cacher');
				$(".champs_spt"+rel).removeClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_spt"+rel).html(tabRetour[0]);
				$(".champs_pst"+rel).html(tabRetour[1]);
				$(".champs_tpe"+rel).html(tabRetour[2]);
				$(".input_tpe"+rel).addClass('cacher');
				$(".input_pst"+rel).addClass('cacher');
				$(".input_spt"+rel).addClass('cacher');
				$(".confirm_spt"+rel).addClass('cacher');
				$(".annule_spt"+rel).addClass('cacher');
				$(".clique_spt"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".champs_pst"+rel).removeClass('cacher');
				$(".champs_spt"+rel).removeClass('cacher');


			}
		});
	
	return false;
});

$(".editSpecialiteAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_tpe"+rel).addClass('cacher');
	$(".input_pst"+rel).addClass('cacher');
	$(".input_spt"+rel).addClass('cacher');
	$(".confirm_spt"+rel).addClass('cacher');
	$(".clique_spt"+rel).removeClass('cacher');
	$(".champs_tpe"+rel).removeClass('cacher');
	$(".champs_pst"+rel).removeClass('cacher');
	$(".champs_spt"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** poste ***/
$(".editFonction").click(function(){
	var rel=$(this).attr('rel');
	$(".input_tpe"+rel).removeClass('cacher');
	$(".input_pst"+rel).removeClass('cacher');
	$(".input_fct"+rel).removeClass('cacher');
	$(".confirm_fct"+rel).removeClass('cacher');
	$(".annule_fct"+rel).removeClass('cacher');
	$(".champs_fct"+rel).addClass('cacher');
	$(".champs_tpe"+rel).addClass('cacher');
	$(".champs_pst"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editFonctionFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-fct'+rel).serialize();
	var data2 = $('form#form-edit_pst'+rel).serialize();
	var data3 = $('form#form-edit_tpe'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierFonction,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_tpe"+rel).addClass('cacher');
				$(".input_pst"+rel).addClass('cacher');
				$(".input_fct"+rel).addClass('cacher');
				$(".confirm_fct"+rel).addClass('cacher');
				$(".annule_fct"+rel).addClass('cacher');
				$(".clique_fct"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".champs_pst"+rel).removeClass('cacher');
				$(".champs_fct"+rel).removeClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_fct"+rel).html(tabRetour[0]);
				$(".champs_pst"+rel).html(tabRetour[1]);
				$(".champs_tpe"+rel).html(tabRetour[2]);
				$(".input_tpe"+rel).addClass('cacher');
				$(".input_pst"+rel).addClass('cacher');
				$(".input_fct"+rel).addClass('cacher');
				$(".confirm_fct"+rel).addClass('cacher');
				$(".annule_fct"+rel).addClass('cacher');
				$(".clique_fct"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".champs_fct"+rel).removeClass('cacher');
				$(".champs_fct"+rel).removeClass('cacher');


			}
		});
	
	return false;
});

$(".editFonctionAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_tpe"+rel).addClass('cacher');
	$(".input_pst"+rel).addClass('cacher');
	$(".input_fct"+rel).addClass('cacher');
	$(".confirm_fct"+rel).addClass('cacher');
	$(".clique_fct"+rel).removeClass('cacher');
	$(".champs_tpe"+rel).removeClass('cacher');
	$(".champs_pst"+rel).removeClass('cacher');
	$(".champs_fct"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** Acte médical ***/
$(".editActe").click(function(){
	var rel=$(this).attr('rel');
	$(".input_lac"+rel).removeClass('cacher');
	$(".input_tya"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".input_uni"+rel).removeClass('cacher');
	$(".input_cout"+rel).removeClass('cacher');
	$(".input_duree"+rel).removeClass('cacher');
	$(".confirm_lac"+rel).removeClass('cacher');
	$(".annule_lac"+rel).removeClass('cacher');
	$(".champs_lac"+rel).addClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_tya"+rel).addClass('cacher');
	$(".champs_uni"+rel).addClass('cacher');
	$(".champs_cout"+rel).addClass('cacher');
	$(".champs_duree"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});


$(".editActeFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-lac'+rel).serialize();
	var data2 = $('form#form-edit_ser'+rel).serialize();
	var data3 = $('form#form-edit_uni'+rel).serialize();
	var data4 = $('form#form-edit-cout'+rel).serialize();
	var data5 = $('form#form-edit-duree'+rel).serialize();
	var data6 = $('form#form-edit_tya'+rel).serialize();
	
	
	// return false;
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAct,
			data:data1+"&"+data2+"&"+data3+"&"+data4+"&"+data5+"&"+data6,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
		
		// alert(retour);
			if(retour == "echec"){
				$(".input_ser"+rel).addClass('cacher');
				$(".input_tya"+rel).addClass('cacher');
				$(".input_uni"+rel).addClass('cacher');
				$(".input_lac"+rel).addClass('cacher');
				$(".input_cout"+rel).addClass('cacher');
				$(".input_duree"+rel).addClass('cacher');
				$(".confirm_lac"+rel).addClass('cacher');
				$(".clique_lac"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_tya"+rel).removeClass('cacher');
				$(".champs_uni"+rel).removeClass('cacher');
				$(".champs_lac"+rel).removeClass('cacher');
				$(".champs_duree"+rel).removeClass('cacher');
				$(".champs_cout"+rel).removeClass('cacher');
				$(".annule_lac"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				$(".champs_lac"+rel).html(tabRetour[0]);
				$(".champs_uni"+rel).html(tabRetour[1]);
				$(".champs_ser"+rel).html(tabRetour[2]);
				$(".champs_tya"+rel).html(tabRetour[5]);
				$(".champs_cout"+rel).html(tabRetour[3]+" <small>FCFA</small>");
				$(".champs_duree"+rel).html(tabRetour[4]+" jrs");
				$(".input_ser"+rel).addClass('cacher');
				$(".input_tya"+rel).addClass('cacher');
				$(".input_uni"+rel).addClass('cacher');
				$(".input_lac"+rel).addClass('cacher');
				$(".input_cout"+rel).addClass('cacher');
				$(".input_duree"+rel).addClass('cacher');
				$(".confirm_lac"+rel).addClass('cacher');
				$(".clique_lac"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_tya"+rel).removeClass('cacher');
				$(".champs_uni"+rel).removeClass('cacher');
				$(".champs_lac"+rel).removeClass('cacher');
				$(".champs_duree"+rel).removeClass('cacher');
				$(".champs_cout"+rel).removeClass('cacher');
				$(".annule_lac"+rel).addClass('cacher');


			}
		});
	
	return false;
});

$(".editActeAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_tya"+rel).addClass('cacher');
	$(".input_uni"+rel).addClass('cacher');
	$(".input_lac"+rel).addClass('cacher');
	$(".input_cout"+rel).addClass('cacher');
	$(".input_duree"+rel).addClass('cacher');
	$(".confirm_lac"+rel).addClass('cacher');
	$(".clique_lac"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_tya"+rel).removeClass('cacher');
	$(".champs_uni"+rel).removeClass('cacher');
	$(".champs_lac"+rel).removeClass('cacher');
	$(".champs_duree"+rel).removeClass('cacher');
	$(".champs_cout"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});






/** Domaine ***/
$(".editDomaine").click(function(){
	var rel=$(this).attr('rel');
	$(".input_tpe"+rel).removeClass('cacher');
	$(".input_dom"+rel).removeClass('cacher');
	$(".confirm_dom"+rel).removeClass('cacher');
	$(".annule_dom"+rel).removeClass('cacher');
	$(".champs_dom"+rel).addClass('cacher');
	$(".champs_tpe"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editDomaineFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-dom'+rel).serialize();
	var data2 = $('form#form-edit_tpe'+rel).serialize();
		// alert(data1);
		// alert(data2);
		$.ajax({
			type:"POST",
			url: modifierDomaine,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			if(retour == "echec"){
				$(".input_tpe"+rel).addClass('cacher');
				$(".input_dom"+rel).addClass('cacher');
				$(".annule_dom"+rel).addClass('cacher');
				$(".clique_dom"+rel).removeClass('cacher');
				$(".champs_dom"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".confirm_dom"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_dom"+rel).html(tabRetour[0]);
				$(".champs_tpe"+rel).html(tabRetour[1]);
				$(".input_dom"+rel).addClass('cacher');
				$(".input_tpe"+rel).addClass('cacher');
				$(".annule_dom"+rel).addClass('cacher');
				$(".clique_dom"+rel).removeClass('cacher');
				$(".champs_dom"+rel).removeClass('cacher');
				$(".champs_tpe"+rel).removeClass('cacher');
				$(".confirm_dom"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editDomaineAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dom"+rel).addClass('cacher');
	$(".input_tpe"+rel).addClass('cacher');
	$(".confirm_dom"+rel).addClass('cacher');
	$(".clique_dom"+rel).removeClass('cacher');
	$(".champs_dom"+rel).removeClass('cacher');
	$(".champs_tpe"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** Courbe de croissance ***/
$(".editCourbe").click(function(){
	var rel=$(this).attr('rel');
	$(".input_poidsmax"+rel).removeClass('cacher');
	$(".input_poidsmin"+rel).removeClass('cacher');
	$(".confirm_cou"+rel).removeClass('cacher');
	$(".annule_cou"+rel).removeClass('cacher');
	$(".champs_poidsmax"+rel).addClass('cacher');
	$(".champs_poidsmin"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editCourbeFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-poidsmin'+rel).serialize();
	var data2 = $('form#form-edit-poidsmax'+rel).serialize();
		// alert(data1);
		// alert(data2);
		$.ajax({
			type:"POST",
			url: modifierCourbe,
			data:data1+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			if(retour == "echec"){
				$(".input_poidsmax"+rel).addClass('cacher');
				$(".input_poidsmin"+rel).addClass('cacher');
				$(".annule_cou"+rel).addClass('cacher');
				$(".clique_cou"+rel).removeClass('cacher');
				$(".champs_poidsmax"+rel).removeClass('cacher');
				$(".champs_poidsmin"+rel).removeClass('cacher');
				$(".confirm_cou"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_poidsmax"+rel).html(tabRetour[0]+" Kg");
				$(".champs_poidsmin"+rel).html(tabRetour[1]+" Kg");
				$(".input_poidsmax"+rel).addClass('cacher');
				$(".input_poidsmin"+rel).addClass('cacher');
				$(".annule_cou"+rel).addClass('cacher');
				$(".clique_cou"+rel).removeClass('cacher');
				$(".champs_poidsmin"+rel).removeClass('cacher');
				$(".champs_poidsmax"+rel).removeClass('cacher');
				$(".confirm_cou"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editCourbeAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_poidsmax"+rel).addClass('cacher');
	$(".input_poidsmin"+rel).addClass('cacher');
	$(".confirm_cou"+rel).addClass('cacher');
	$(".clique_cou"+rel).removeClass('cacher');
	$(".champs_poidsmax"+rel).removeClass('cacher');
	$(".champs_poidsmin"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});




/** Assureur ***/
$(".editAssureur").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAssureurFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-ass'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAssureur,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAssureurAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** famille produit ***/



$(".editFamille").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editFamilleFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-fam'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierFamilleProduit,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			//alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editFamilleAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** forme produit ***/



$(".editForme").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editFormeFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-for'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierFormeProduit,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editFormeAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** type fournisseur ***/



$(".editTypeFournisseur").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editTypeFournisseurFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-tfr'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierTypeFournisseur,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editTypeFournisseurAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/*Ajout frais divers*/


$(".editActeFinal2").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-lac2'+rel).serialize();
	var data2 = $('form#form-edit_ser2'+rel).serialize();
	var data3 = $('form#form-edit_uni2'+rel).serialize();
	var data4 = $('form#form-edit-duree'+rel).serialize();
	var data5 = $('form#form-edit_tya2'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierActedivers,
			data:data1+"&"+data2+"&"+data3+"&"+data4+"&"+data5,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_ser2"+rel).addClass('cacher');
				$(".input_tya2"+rel).addClass('cacher');
				$(".input_uni2"+rel).addClass('cacher');
				$(".input_lac2"+rel).addClass('cacher');
				$(".input_cout"+rel).addClass('cacher');
				$(".input_duree"+rel).addClass('cacher');
				$(".confirm_lac2"+rel).addClass('cacher');
				$(".clique_lac2"+rel).removeClass('cacher');
				$(".champs_ser2"+rel).removeClass('cacher');
				$(".champs_tya2"+rel).removeClass('cacher');
				$(".champs_uni2"+rel).removeClass('cacher');
				$(".champs_lac2"+rel).removeClass('cacher');
				$(".champs_duree"+rel).removeClass('cacher');
				$(".champs_cout"+rel).removeClass('cacher');
				$(".annule_lac2"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				$(".champs_lac2"+rel).html(tabRetour[0]);
				$(".champs_duree"+rel).html(tabRetour[1]);
				$(".champs_uni2"+rel).html(tabRetour[2]);
				$(".champs_tya2"+rel).html(tabRetour[3]);
				$(".champs_ser2"+rel).html(tabRetour[4]);
				$(".input_ser2"+rel).addClass('cacher');
				$(".input_tya2"+rel).addClass('cacher');
				$(".input_uni2"+rel).addClass('cacher');
				$(".input_lac2"+rel).addClass('cacher');
				$(".input_cout"+rel).addClass('cacher');
				$(".input_duree"+rel).addClass('cacher');
				$(".confirm_lac2"+rel).addClass('cacher');
				$(".clique_lac2"+rel).removeClass('cacher');
				$(".champs_ser2"+rel).removeClass('cacher');
				$(".champs_uni2"+rel).removeClass('cacher');
				$(".champs_tya2"+rel).removeClass('cacher');
				$(".champs_lac2"+rel).removeClass('cacher');
				$(".champs_duree"+rel).removeClass('cacher');
				$(".champs_cout"+rel).removeClass('cacher');
				$(".annule_lac2"+rel).addClass('cacher');


			}
		});
	
	return false;
});


$(".editActe2").click(function(){
// alert();
	var rel=$(this).attr('rel');
	$(".input_lac2"+rel).removeClass('cacher');
	$(".input_ser2"+rel).removeClass('cacher');
	$(".input_uni2"+rel).removeClass('cacher');
	$(".input_tya2"+rel).removeClass('cacher');
	$(".input_cout"+rel).removeClass('cacher');
	$(".input_duree"+rel).removeClass('cacher');
	$(".confirm_lac2"+rel).removeClass('cacher');
	$(".annule_lac2"+rel).removeClass('cacher');
	$(".champs_lac2"+rel).addClass('cacher');
	$(".champs_ser2"+rel).addClass('cacher');
	$(".champs_uni2"+rel).addClass('cacher');
	$(".champs_tya2"+rel).addClass('cacher');
	$(".champs_cout"+rel).addClass('cacher');
	$(".champs_duree"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});


$(".editActeAnnule2").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser2"+rel).addClass('cacher');
	$(".input_uni2"+rel).addClass('cacher');
	$(".input_tya2"+rel).addClass('cacher');
	$(".input_lac2"+rel).addClass('cacher');
	$(".input_cout"+rel).addClass('cacher');
	$(".input_duree"+rel).addClass('cacher');
	$(".confirm_lac2"+rel).addClass('cacher');
	$(".clique_lac2"+rel).removeClass('cacher');
	$(".champs_ser2"+rel).removeClass('cacher');
	$(".champs_uni2"+rel).removeClass('cacher');
	$(".champs_tya2"+rel).removeClass('cacher');
	$(".champs_lac2"+rel).removeClass('cacher');
	$(".champs_duree"+rel).removeClass('cacher');
	$(".champs_cout"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});





$(".addFrais").click(function(){
	// alert();
	var nbError = 0;
	
		
	$("form#form-fraisdivers .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			nbError++;
		}
		// else{
			// $(this).parent("div").removeClass("has-error");
			// $(this).removeClass("obligatoire-color");
		// }
	});
	
	
	if(nbError == 0){
		var data = $('form#form-fraisdivers').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutFraisDivers,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			if(retour == 'deja'){
				alert("Données déjà enregistrées");
			}else{
				location.reload(true);
			}

		});
	}
	else{
		alert("Veuillez renseigner tous les champs !");
	}
	
	return false;
});



/** salle ***/



$(".editSalle").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editSalleFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-sal'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSalle,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editSalleAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** Motif fin d'hospitalisation ***/



$(".edit_motif_fin_hos").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".edit_motif_fin_hos_Annule").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-motif-fin-hos'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSalle,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".edit_motif_fin_hos_Annule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


$(".editTypeExamen").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editTypeExamenFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-type-examen'+rel).serialize();
	var data2 = $('form#form-edit-lac'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierTypeExamen,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_dep"+rel).addClass('cacher');
				$(".input_ser"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_dep"+rel).html(tabRetour[1]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editTypeExamenAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



//Appareil


$(".editAppareil").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAppareilFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-type-examen'+rel).serialize();
	var data2 = $('form#form-edit-lac'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAppareil,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_dep"+rel).addClass('cacher');
				$(".input_ser"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_dep"+rel).html(tabRetour[1]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAppareilAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Antécédents personnels ***/

$(".editAntePerso").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAntePersoFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-lan'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAntecedentPersonnel,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAntePersoAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Antécédents familiaux ***/

$(".editAnteFam").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAnteFamFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-laf'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAntecedentFamilial,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAnteFamAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** Allergies ***/

$(".editAllergie").click(function(){
	var rel=$(this).attr('rel');
	// alert(rel);
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editAllergieFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-lia'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierAllergie,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editAllergieAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** Activités professionnelles ***/

$(".editActivite").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editActiviteFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-lap'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierActiviteProfessionnelle,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});


$(".editActiviteAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});

/** Modif de réduction ***/

$(".editMotifReduction").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".taux"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(".champsTaux"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editModifReductionFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-mod'+rel).serialize();
	var data2 = $('form#form-edit-taux'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierMotifReduction,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".taux"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".champsTaux"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				var affiche= retour.split("-/-");
				
				$(".champs"+rel).html(affiche[0]);
				$(".champsTaux"+rel).html(affiche[1]+"%");
				$(".input"+rel).addClass('cacher');
				$(".taux"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".champsTaux"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});


$(".editModifAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".taux"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(".champsTaux"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** famille de maladie**/

$(".editFma").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editFmaFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-sal'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierFma,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert();
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editFmaAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/** maladie **/

$(".editMaladie").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".input_code"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_code"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editMaladieFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-ser'+rel).serialize();
	var data2 = $('form#form-edit_dep'+rel).serialize();
	var data3 = $('form#form-edit-code'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierMaladie,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_dep"+rel).addClass('cacher');
				$(".input_ser"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_dep"+rel).html(tabRetour[1]);
				$(".champs_code"+rel).html(tabRetour[2]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".input_code"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".champs_code"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});


$(".editMaladieAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".input_code"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(".champs_code"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/** spsecification maladie **/

$(".editSpecification").click(function(){
	var rel=$(this).attr('rel');
	$(".input_dep"+rel).removeClass('cacher');
	$(".input_ser"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_dep"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editSpecificationFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-ser'+rel).serialize();
	var data2 = $('form#form-edit_dep'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierSpecificationMaladie,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_dep"+rel).addClass('cacher');
				$(".input_ser"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_dep"+rel).html(tabRetour[1]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_dep"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_dep"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});


$(".editSpecificationAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_dep"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_dep"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});



/*fonctionnalités*/


$(".editFonctionnalite").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editFonctionnaliteFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-flt'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierFonctionnalite,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editFonctionnaliteAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});




$(".addFonctionnal").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbody").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-fonctionnal').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutFonctionnalite,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			$("#finish").click();
			$("div.refresh").html("<meta http-equiv='refresh' content='2'>");
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


/*rubriques*/

$(".editRubrique").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).removeClass('cacher');
	$(".confirm"+rel).removeClass('cacher');
	$(".annule"+rel).removeClass('cacher');
	$(".champs"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editRubriqueFinal").click(function(){
	var rel=$(this).attr('rel');
	var data = $('form#form-edit-rub'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifierRubrique,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');
			}
			else{
				$(".champs"+rel).html(retour);
				$(".input"+rel).addClass('cacher');
				$(".annule"+rel).addClass('cacher');
				$(".clique"+rel).removeClass('cacher');
				$(".champs"+rel).removeClass('cacher');
				$(".confirm"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editRubriqueAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input"+rel).addClass('cacher');
	$(".confirm"+rel).addClass('cacher');
	$(".clique"+rel).removeClass('cacher');
	$(".champs"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});




$(".addRubrique").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbody").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-rubrique').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutRubrique,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			$("#finish").click();
			$("div.refresh").html("<meta http-equiv='refresh' content='2'>");
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



/*** actes groupés ***/

$(".addactegpe").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbody").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-actegpe').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActesgroupe,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			$("#finish").click();
			$("#largeModal").modal("hide");
			$("div.refresh").html("<meta http-equiv='refresh' content='2'>");
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".editActegpe").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).removeClass('cacher');
	$(".input_ser2"+rel).removeClass('cacher');
	$(".input_ser3"+rel).removeClass('cacher');
	$(".confirm_ser"+rel).removeClass('cacher');
	$(".annule_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).addClass('cacher');
	$(".champs_ser2"+rel).addClass('cacher');
	$(".champs_ser3"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editActegpeFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-actgpe'+rel).serialize();
	var data2 = $('form#form-edit-actgpe2'+rel).serialize();
	var data3 = $('form#form-edit-actgpe3'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifActesgroupe,
			data:data1+"&"+data2+"&"+data3,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_ser"+rel).addClass('cacher');
				$(".input_ser2"+rel).addClass('cacher');
				$(".input_ser3"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_ser2"+rel).removeClass('cacher');
				$(".champs_ser3"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_ser"+rel).html(tabRetour[0]);
				$(".champs_ser2"+rel).html(tabRetour[1]);
				$(".champs_ser3"+rel).html(tabRetour[2]);
				$(".input_ser"+rel).addClass('cacher');
				$(".input_ser2"+rel).addClass('cacher');
				$(".input_ser3"+rel).addClass('cacher');
				$(".annule_ser"+rel).addClass('cacher');
				$(".clique_ser"+rel).removeClass('cacher');
				$(".champs_ser"+rel).removeClass('cacher');
				$(".champs_ser2"+rel).removeClass('cacher');
				$(".champs_ser3"+rel).removeClass('cacher');
				$(".confirm_ser"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editActegpeAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_ser"+rel).addClass('cacher');
	$(".input_ser2"+rel).addClass('cacher');
	$(".input_ser3"+rel).addClass('cacher');
	$(".confirm_ser"+rel).addClass('cacher');
	$(".clique_ser"+rel).removeClass('cacher');
	$(".champs_ser"+rel).removeClass('cacher');
	$(".champs_ser2"+rel).removeClass('cacher');
	$(".champs_ser3"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});

/*** Prescripteur ***/

$(".addPre").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbody").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-Pre').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutPrescripteur,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			$("#finish").click();
			$("#largeModal").modal("hide");
			$("div.refresh").html("<meta http-equiv='refresh' content='2'>");
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".editPre").click(function(){
	var rel=$(this).attr('rel');
	$(".input_Pre"+rel).removeClass('cacher');
	$(".input_Pre2"+rel).removeClass('cacher');
	$(".input_Pre3"+rel).removeClass('cacher');
	$(".input_Pre4"+rel).removeClass('cacher');
	$(".confirm_Pre"+rel).removeClass('cacher');
	$(".annule_Pre"+rel).removeClass('cacher');
	$(".champs_Pre"+rel).addClass('cacher');
	$(".champs_Pre2"+rel).addClass('cacher');
	$(".champs_Pre3"+rel).addClass('cacher');
	$(".champs_Pre4"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editPreFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-Pre'+rel).serialize();
	var data2 = $('form#form-edit-Pre2'+rel).serialize();
	var data3 = $('form#form-edit-Pre3'+rel).serialize();
	var data4 = $('form#form-edit-Pre4'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modifPrescripteur,
			data:data1+"&"+data2+"&"+data3+"&"+data4,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_Pre"+rel).addClass('cacher');
				$(".input_Pre2"+rel).addClass('cacher');
				$(".input_Pre3"+rel).addClass('cacher');
				$(".input_Pre4"+rel).addClass('cacher');
				$(".annule_Pre"+rel).addClass('cacher');
				$(".clique_Pre"+rel).removeClass('cacher');
				$(".champs_Pre"+rel).removeClass('cacher');
				$(".champs_Pre2"+rel).removeClass('cacher');
				$(".champs_Pre3"+rel).removeClass('cacher');
				$(".champs_Pre4"+rel).removeClass('cacher');
				$(".confirm_Pre"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_Pre"+rel).html(tabRetour[0]);
				$(".champs_Pre2"+rel).html(tabRetour[1]);
				$(".champs_Pre3"+rel).html(tabRetour[2]);
				$(".champs_Pre4"+rel).html(tabRetour[3]);
				$(".input_Pre"+rel).addClass('cacher');
				$(".input_Pre2"+rel).addClass('cacher');
				$(".input_Pre3"+rel).addClass('cacher');
				$(".input_Pre4"+rel).addClass('cacher');
				$(".annule_Pre"+rel).addClass('cacher');
				$(".clique_Pre"+rel).removeClass('cacher');
				$(".champs_Pre"+rel).removeClass('cacher');
				$(".champs_Pre2"+rel).removeClass('cacher');
				$(".champs_Pre3"+rel).removeClass('cacher');
				$(".champs_Pre4"+rel).removeClass('cacher');
				$(".confirm_Pre"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editPreAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_Pre"+rel).addClass('cacher');
	$(".input_Pre2"+rel).addClass('cacher');
	$(".input_Pre3"+rel).addClass('cacher');
	$(".input_Pre4"+rel).addClass('cacher');
	$(".confirm_Pre"+rel).addClass('cacher');
	$(".clique_Pre"+rel).removeClass('cacher');
	$(".champs_Pre"+rel).removeClass('cacher');
	$(".champs_Pre2"+rel).removeClass('cacher');
	$(".champs_Pre3"+rel).removeClass('cacher');
	$(".champs_Pre4"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


/*** Quote part ***/

$(".addTqp").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbody").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-Tqp').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajout_quote_part,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			if(retour =="ok"){
				$("#finish").click();
				$("#largeModal").modal("hide");
				$("div.refresh").html("<meta http-equiv='refresh' content='2'>");
			}else{
				alert("Medecin a déjà un pourcentage de quote part SVP!!!");
			}
			
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".editTqp").click(function(){
	var rel=$(this).attr('rel');
	$(".input_Tqp"+rel).removeClass('cacher');
	$(".input_Tqp2"+rel).removeClass('cacher');
	$(".input_Tqp3"+rel).removeClass('cacher');
	$(".input_Tqp4"+rel).removeClass('cacher');
	$(".confirm_Tqp"+rel).removeClass('cacher');
	$(".annule_Tqp"+rel).removeClass('cacher');
	$(".champs_Tqp"+rel).addClass('cacher');
	$(".champs_Tqp2"+rel).addClass('cacher');
	$(".champs_Tqp3"+rel).addClass('cacher');
	$(".champs_Tqp4"+rel).addClass('cacher');
	$(this).addClass('cacher');
	return false;
});

$(".editTqpFinal").click(function(){
	var rel=$(this).attr('rel');
	var data1 = $('form#form-edit-Tqp'+rel).serialize();
	var data2 = $('form#form-edit-Tqp2'+rel).serialize();
	var data3 = $('form#form-edit-Tqp3'+rel).serialize();
	var data4 = $('form#form-edit-Tqp4'+rel).serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: modif_quote_part,
			data:data1+"&"+data2+"&"+data3+"&"+data4,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour == "echec"){
				$(".input_Tqp"+rel).addClass('cacher');
				$(".input_Tqp2"+rel).addClass('cacher');
				$(".input_Tqp3"+rel).addClass('cacher');
				$(".input_Tqp4"+rel).addClass('cacher');
				$(".annule_Tqp"+rel).addClass('cacher');
				$(".clique_Tqp"+rel).removeClass('cacher');
				$(".champs_Tqp"+rel).removeClass('cacher');
				$(".champs_Tqp2"+rel).removeClass('cacher');
				$(".champs_Tqp3"+rel).removeClass('cacher');
				$(".champs_Tqp4"+rel).removeClass('cacher');
				$(".confirm_Tqp"+rel).addClass('cacher');
			}
			else{
				var tabRetour = retour.split("-/-");
				
				$(".champs_Tqp"+rel).html(tabRetour[0]);
				$(".champs_Tqp2"+rel).html(tabRetour[1]);
				$(".champs_Tqp3"+rel).html(tabRetour[2]);
				$(".champs_Tqp4"+rel).html(tabRetour[3]);
				$(".input_Tqp"+rel).addClass('cacher');
				$(".input_Tqp2"+rel).addClass('cacher');
				$(".input_Tqp3"+rel).addClass('cacher');
				$(".input_Tqp4"+rel).addClass('cacher');
				$(".annule_Tqp"+rel).addClass('cacher');
				$(".clique_Tqp"+rel).removeClass('cacher');
				$(".champs_Tqp"+rel).removeClass('cacher');
				$(".champs_Tqp2"+rel).removeClass('cacher');
				$(".champs_Tqp3"+rel).removeClass('cacher');
				$(".champs_Tqp4"+rel).removeClass('cacher');
				$(".confirm_Tqp"+rel).addClass('cacher');

			}
		});
	
	return false;
});

$(".editTqpAnnule").click(function(){
	var rel=$(this).attr('rel');
	$(".input_Tqp"+rel).addClass('cacher');
	$(".input_Tqp2"+rel).addClass('cacher');
	$(".input_Tqp3"+rel).addClass('cacher');
	$(".input_Tqp4"+rel).addClass('cacher');
	$(".confirm_Tqp"+rel).addClass('cacher');
	$(".clique_Tqp"+rel).removeClass('cacher');
	$(".champs_Tqp"+rel).removeClass('cacher');
	$(".champs_Tqp2"+rel).removeClass('cacher');
	$(".champs_Tqp3"+rel).removeClass('cacher');
	$(".champs_Tqp4"+rel).removeClass('cacher');
	$(this).addClass('cacher');
	return false;
});


