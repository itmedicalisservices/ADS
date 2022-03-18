

$("#addOphta").click(function(){
		var nbError=0;
		$("form#form-ophta .obligatoire").each(function(){
			if($.trim($(this).val()) == ""){
				$(this).parent("div").addClass("has-error");
				$(this).addClass("obligatoire-color");
				nbError++;
			}
			else{
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			}
		});
		
		if(nbError == 0){
			var data = $('form#form-ophta').serialize();
			// alert(data);
			$.ajax({
				type:"POST",
				url: ajoutConsultationOphta,
				data:data,
				async:true,
				error:function(xhr, status, error){
					alert(xhr.responseText);
				}
				
			})
			.done(function(retour){
				if(retour == "ok"){
					location.reload(true);
				}
				else{
					$(".retour-ophta").addClass("alert alert-danger").html(retour);
				}
			});
		}else{
			$(".retour-ophta").addClass("alert alert-danger").html("Veuillez renseigner tout les champs avec étoiles (*) SVP ");
		}
	return false;
});


$("#consult").click(function(){
		var nbError = 0;
		$("form#form-c form-control.obligatoire").each(function(){
			if($.trim($(this).val()) == ""){
				$(this).parent("div").addClass("has-error");
				$(this).addClass("obligatoire-color");
				nbError++;
			}
			else{
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			}
		});
		/*var tab = $("#tbodyHyp").html();
		var tab1 = $("#tbodyRet").html();
		if($.trim(tab)=="" || $.trim(tab1)==""){
			nbError++;
		}*/
		if(nbError == 0){
			var data = $('form#form-c').serialize();
			// alert(data);
			$.ajax({
				type:"POST",
				url: ajoutConsultat,
				data:data,
				async:true,
				error:function(xhr, status, error){
					alert(xhr.responseText);
				}
				
			})
			.done(function(retour){
				// alert(retour);
				if(retour == "ok"){
					location.reload(true);
				}
				else{
					$(".retour-c").addClass("alert alert-danger").html(retour);
				}			
				
			});
		}else{
			$(".retour-c").addClass("alert alert-danger").html("Veuillez renseigner tout les champs avec étoiles (*) SVP ");
		}
	return false;
});


$("#addExamen").click(function(){
		var nbError = 0;
		$("form#form-examen .obligatoire").each(function(){
			if($.trim($(this).val()) == ""){
				$(this).parent("div").addClass("has-error");
				$(this).addClass("obligatoire-color");
				nbError++;
			}
			else{
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			}
		});
		/*var tab = $("#tbodyHyp").html();
		var tab1 = $("#tbodyRet").html();
		if($.trim(tab)=="" || $.trim(tab1)==""){
			nbError++;
		}*/
		if(nbError == 0){
			var data = $('form#form-examen').serialize();
			// alert(data);
			$.ajax({
				type:"POST",
				url: addExamen,
				data:data,
				async:true,
				error:function(xhr, status, error){
					alert(xhr.responseText);
				}
				
			})
			.done(function(retour){
				// alert(retour);
				if(retour == "ok"){
					location.reload(true);
				}
				else{
					$(".retour-examen").addClass("alert alert-danger").html(retour);
				}			
				
			});
		}else{
			$(".retour-examen").addClass("alert alert-danger").html("Veuillez renseigner tout les champs avec étoiles (*) SVP ");
		}
	return false;
});

$("#addPartogramme").click(function(){
		var nbError = 0;
		$("form#form-partogramme .obligatoire").each(function(){
			if($.trim($(this).val()) == ""){
				$(this).parent("div").addClass("has-error");
				$(this).addClass("obligatoire-color");
				nbError++;
			}
			else{
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			}
		});
		/*var tab = $("#tbodyHyp").html();
		var tab1 = $("#tbodyRet").html();
		if($.trim(tab)=="" || $.trim(tab1)==""){
			nbError++;
		}*/
		if(nbError == 0){
			var data = $('form#form-partogramme').serialize();
			// alert(data);
			$.ajax({
				type:"POST",
				url: addPartogramme,
				data:data,
				async:true,
				error:function(xhr, status, error){
					alert(xhr.responseText);
				}
				
			})
			.done(function(retour){
				// alert(retour);
				if(retour == "ok"){
					location.reload(true);
				}
				else{
					$(".retour-partogramme").addClass("alert alert-danger").html(retour);
				}			
				
			});
		}else{
			$(".retour-partogramme").addClass("alert alert-danger").html("Veuillez renseigner tout les champs avec étoiles (*) SVP ");
		}
	return false;
});



/** Antécedents**/
$("#addAntecedents").click(function(){
	alert(1);
	var nbError = 0;
	
	var tabAnt = $("#tbodyAnt").html();
	if($.trim(tabAnt)==""){
		nbError++;
	}
	var tabSource = $("#tbodySource").html();
	if($.trim(tabSource)==""){
		nbError++;
	}
	$("form#form-antecedents .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
		
	alert(nbError);
	if(nbError == 0){
		
		$(".retour-antecedents").removeClass("alert alert-danger").html("");
		var data = $('form#form-antecedents').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addAntecedents,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			location.reload(true);
		});
	}
	else{
		$(".retour-antecedents").addClass("alert alert-danger").html("Renseignez les champs !!!");
	}
	
	return false;
});

/** Information de naissance de l'enfant **/
$("#addInfoNais").click(function(){
	//alert(1);
	var nbError = 0;
	
	
	$("form#form-nais .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
		
	//alert(nbError);
	if(nbError == 0){
		
		$(".retour-nais").removeClass("alert alert-danger").html("");
		var data = $('form#form-nais').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addInfoNais,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			location.reload(true);
		});
	}
	else{
		$(".retour-nais").addClass("alert alert-danger").html("Renseignez les champs !!!");
	}
	
	return false;
});

/** observations cliniques **/
$("#addObservations").click(function(){
	//alert(1);
	var nbError = 0;
	
	
	$("form#form-observations .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
		
	//alert(nbError);
	if(nbError == 0){
		
		$(".retour-observations").removeClass("alert alert-danger").html("");
		var data = $('form#form-observations').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addObservations,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			location.reload(true);
		});
	}
	else{
		$(".retour-observations").addClass("alert alert-danger").html("Renseignez les champs !!!");
	}
	
	return false;
});



/** Vaccination Femme**/
$("#addVaccinationE").click(function(){
	//alert(1);
	var nbError = 0;
	
	$("form#form-vaccinationE .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	//alert(nbError);
	if(nbError == 0){
		$("form#form-vaccinationE .obligatoire").each(function(){
			
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			
		});
		
		$(".retour-vaccinationE").removeClass("alert alert-danger").html("");
		var data = $('form#form-vaccinationE').serialize();
		alert(data);
		$.ajax({
			type:"POST",
			url: addVaccinationEnfant,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			//alert(retour);
			if(retour == "prochain"){
				$(".prochain").parent("div").addClass("has-error");
				$(".prochain").addClass("obligatoire-color");
				$(".retour-vaccinationE").addClass("alert alert-danger").html("La date du prochain rendez-vous ne doit pas être inférieur à la date du jour !!!");
			}else{
				location.reload(true);
			}
		});
	}
	else{
		$(".retour-vaccinationE").addClass("alert alert-danger").html("Renseignez Tout les champs obligatoires !!!");
	}
	
	return false;
});


/** Vaccination Femme**/
$("#addVaccinationPre").click(function(){
	//alert(1);
	var nbError = 0;
	
	$("form#form-vaccination .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	//alert(nbError);
	if(nbError == 0){
		$("form#form-vaccination .obligatoire").each(function(){
			
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			
		});
		
		$(".retour-vaccination").removeClass("alert alert-danger").html("");
		var data = $('form#form-vaccination').serialize();
		alert(data);
		$.ajax({
			type:"POST",
			url: addVaccinationFemme,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			//alert(retour);
			location.reload(true);
			
		});
	}
	else{
		$(".retour-vaccination").addClass("alert alert-danger").html("Renseignez Tout les champs obligatoires !!!");
	}
	
	return false;
});



/** Suivi de la femme enciente**/
$("#addSuiviFemme").click(function(){
	//alert(1);
	var nbError = 0;
	
	$("form#form-suivi-femme .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	//alert(nbError);
	if(nbError == 0){
		$("form#form-suivi-femme .obligatoire").each(function(){
			
				$(this).parent("div").removeClass("has-error");
				$(this).removeClass("obligatoire-color");
			
		});
		
		$(".retour-suivi-femme").removeClass("alert alert-danger").html("");
		var data = $('form#form-suivi-femme').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addSuiviFemme,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			//alert(retour);
			if(retour =='poids'){
				$(".poids").parent("div").addClass("has-error");
				$(".poids").addClass("obligatoire-color");
				$(".retour-suivi-femme").addClass("alert alert-danger").html("Le poids ne peut être inférieur ou egal à zéro !!!");
			}else if(retour =='semaine'){
				$(".semaine").parent("div").addClass("has-error");
				$(".semaine").addClass("obligatoire-color");
				$(".retour-suivi-femme").addClass("alert alert-danger").html("Le nombre de semaine ne peut être inférieur ou egal à zéro !!!");
			}else{
				location.reload(true);
			}
			
		});
	}
	else{
		$(".retour-suivi-femme").addClass("alert alert-danger").html("Renseignez Tout les champs obligatoires !!!");
	}
	
	return false;
});


/** planning familliale**/
$("#addPlanning").click(function(){
	//alert(1);
	var nbError = 0;
	
	$("form#form-planning .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	//alert(nbError);
	if(nbError == 0){
		
		$(".retour-planning").removeClass("alert alert-danger").html("");
		var data = $('form#form-planning').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addPlanningFamilliale,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			location.reload(true);
		});
	}
	else{
		$(".retour-planning").addClass("alert alert-danger").html("Renseignez les methodes contraceptives adoptées !!!");
	}
	
	return false;
});




/** Facrteur de risque**/
$("#addFacteur").click(function(){
	
	var nbError = 0;
	
	$("form#form-facteur .form-control").each(function(){
		if($.trim($(this).val()) != ""){
			
			nbError++;
		}
	});
	
	//alert(nbError);
	if(nbError != 0){
		
		$(".retour-facteur").removeClass("alert alert-danger").html("");
		var data = $('form#form-facteur').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addFacteurRisque,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour =="age"){
				$(".age").parent("div").addClass("has-error");
				$(".age").addClass("obligatoire-color");
				$(".retour-facteur").addClass("alert alert-danger").html("L'age ne peut être inférieur à zéro !!!");
			}else if(retour =="taille"){
				$(".taille").parent("div").addClass("has-error");
				$(".taille").addClass("obligatoire-color");
				$(".retour-facteur").addClass("alert alert-danger").html("La taille ne peut être inférieur à zéro !!!");
			}else if(retour =="poids"){
				$(".poids").parent("div").addClass("has-error");
				$(".poids").addClass("obligatoire-color");
				$(".retour-facteur").addClass("alert alert-danger").html("Le poids ne peut être inférieur à zéro !!!");
			}else{
				location.reload(true);
			}
			
		});
	}
	else{
		$(".retour-facteur").addClass("alert alert-danger").html("Renseignez au moins un champs !!!");
	}
	
	return false;
});



/** Premier examen **/
$("#addPremier").click(function(){
	 //alert(1);
	var nbError = 0;
	
	$("form#form-premier .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	
	if(nbError == 0){
		$("form#form-premier .form-control").each(function(){
			
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
			
		});
		$(".retour-premier").html("");
		var data = $('form#form-premier').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addPremierExamen,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			
			location.reload(true);
			
		});
	}
	else{
		$(".retour-premier").addClass("alert alert-danger").html("Renseignez tout les champs obligatoires !!!");
	}
	
	return false;
});


/** Interogatoire **/
$("#addIntero").click(function(){
	 //alert(1);
	var nbError = 0;
	
	$("form#form-intero .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	
	if(nbError == 0){
		$("form#form-intero .form-control").each(function(){
			
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
			
		});
		$(".retour-intero").html("");
		var data = $('form#form-intero').serialize();
		//alert(data);
		$.ajax({
			type:"POST",
			url: addInterogatoire,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			//alert(retour);
			if(retour == 'regle'){
				$(".regle").parent("div").addClass("has-error");
				$(".regle").addClass("obligatoire-color");
				$(".retour-intero").addClass("alert alert-danger").html("La date des derniers regles ne peut pas être supérieur à la date du jour !!!");
			}else if(retour == 'terme'){
				$(".terme").parent("div").addClass("has-error");
				$(".terme").addClass("obligatoire-color");
				$(".retour-intero").addClass("alert alert-danger").html("La date du terme de la grossesse ne peut pas être inférieur à la date du jour !!!");
			}else{
				location.reload(true);
			}
			
		});
	}
	else{
		$(".retour-intero").addClass("alert alert-danger").html("Renseignez tout les champs obligatoires !!!");
	}
	
	return false;
});



/** gestation antérieur**/
$("#addGestation").click(function(){
	 //alert(1);
	var nbError = 0;
	
	$("form#form-gestation .form-control").each(function(){
		$(this).parent("div").removeClass("has-error");
		$(this).removeClass("obligatoire-color");
	});
	if(nbError == 0){

		var data = $('form#form-gestation').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: addGestation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			if(retour =="grossesse"){
				$(".nbgro").parent("div").addClass("has-error");
				$(".nbgro").addClass("obligatoire-color");
				$(".retour-gestation").addClass("alert alert-danger").html("Le nombre de grossesse ne peut être inférieur à zéro !!!");
			}else if(retour =="fausse"){
				$(".nbfausse").parent("div").addClass("has-error");
				$(".nbfausse").addClass("obligatoire-color");
				$(".retour-gestation").addClass("alert alert-danger").html("Le nombre de fausse chouche ne peut être inférieur à zéro !!!");
			}else if(retour =="enfant"){
				$(".nbenfant").parent("div").addClass("has-error");
				$(".nbenfant").addClass("obligatoire-color");
				$(".retour-gestation").addClass("alert alert-danger").html("Le nombre d'enfant vivant ne peut être inférieur à zéro !!!");
			}else if(retour =="decede"){
				$(".nbdecede").parent("div").addClass("has-error");
				$("..nbdecede").addClass("obligatoire-color");
				$(".retour-gestation").addClass("alert alert-danger").html("Le nombre d'enfant décédé ne peut être inférieur à zéro !!!");
			}else{
				location.reload(true);
			}
			
		});
	}
	else{
		$(".retour-gestation").addClass("alert alert-danger").html("Renseignez tout les champs obligatoires !!!");
	}
	
	return false;
});



/** Add information du conjoint**/
$("#addConjoint").click(function(){
	 //alert(1);
	var nbError = 0;
	$("form#form-conjoint .obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError == 0){

		var data = $('form#form-conjoint').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: addInfoConjoint,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			
			location.reload(true);
		});
	}
	else{
		$(".retour-conjoint").addClass("alert alert-danger").html("Renseignez les champs obligatoires !!!");
	}
	
	return false;
});


$(".addAvis").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyAvis").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){

		var data = $('form#form-avis').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutAvisGeneraliste,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueOrd").click();
			// $("#tbodyOrd").html("");
			// $(".retour-ord").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-ord').fadeIn('fast',function(){
				// $('.retour-ord').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



$(".addRdv").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyRdv").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){

		var data = $('form#form-rdv').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: prendreRendezVousConsultation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$("#dentaire").click(function(){
// alert();
	var nbError = 0;
	
	$("form#form-dentaire textarea.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError==0){
		$(".retour-consul").removeClass("alert alert-danger").html('');
		var data = $('form#form-dentaire').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutDentaire,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);

				location.reload(true);
			
		});
	}
	else{
		$(".retour-consul").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});

	
	
$("#mat").click(function(){
	var nbError1 = 0;
	
	$("form#form-hos input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-hos select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-hos textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError1 == 0){

		$(".retour-hos").removeClass("alert alert-danger").html('');
		var data = $('form#form-hos').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutMaternite,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.href=voirAdmission
		});
		
	}
	else{
		$(".retour-hos").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});


$(".exaEcho").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamEcho,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".examSeno").on("click", function () {

	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({

			type: "POST",
			url: recupExamSenologique,
			data: "id=" + data,
			async: true,
			error: function (xhr, status, error) {
				alert(xhr.responseText);
			}

		})
		.done(function (retour) {
			// alert(retour);
			$("#recepConsultation").html(retour);
		});

	return false;
});

$(".exaVaginal").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamVaginal,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".examAbdominal").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamabdominal,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".examPelvien").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExampelvien,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".examperineal").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamperineal,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".examrectal_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamrectal,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".echoa_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupEchoa,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".echob_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupEchob,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".echoc_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupEchoc,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".echod_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupEchod,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".echoe_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupEchoe,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});




$(".cardio_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupCardiologie,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


// $('.retour-constFinal').hide();
// $('.retour-consulFinal').fadeOut(6000)
$("#enregistrerHospi").click(function(){
	var nbError1 = 0;
	
	$("form#form-hos input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-hos select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-hos textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError1 == 0){

		$(".retour-hos").removeClass("alert alert-danger").html('');
		var data = $('form#form-hos').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutHospitalisation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);

			// $(".retour-hos").removeClass("alert alert-danger").html('');
			// $(".retour-hosFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-hosFinal').fadeIn('fast',function(){
				// $('.retour-hosFinal').fadeOut(6000);
			// });
			//location.href=voirConsultation+"/"+retour;
			location.href=voirAdmission
			
		});
		
	}
	else{
		$(".retour-hos").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});


$("#enregistrerDemande").click(function(){
	var nbError1 = 0;
	
	$("form#form-demande input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-demande select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-demande textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError1 == 0){

		$(".retour-demande").removeClass("alert alert-danger").html('');
		var data = $('form#form-demande').serialize();
		 //alert(data);
		$.ajax({
			type:"POST",
			url: ajoutDemande,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			if(retour == "echec"){
				$(".retour-demande").removeClass("alert alert-danger").html('La demande déjà envoyer');
				/*$(".retour-demandeFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				$('.retour-demandeFinal').fadeIn('fast',function(){
				$('.retour-demandeFinal').fadeOut(6000);*/
			
			}else{
				$(".retour-demande").removeClass("alert alert-danger").html('');
				$(".retour-demandeFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				$('.retour-demandeFinal').fadeIn('fast',function(){
					$('.retour-demandeFinal').fadeOut(6000);
				});
			}
			
			//location.href=voirConsultation+"/"+retour;
			
		});
		
	}
	else{
		$(".retour-demande").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});

$("#enregistrerDemandeMAT").click(function(){
	var nbError1 = 0;
	
	$("form#form-demande input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-demande select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	$("form#form-demande textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError1++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	if(nbError1 == 0){

		$(".retour-demande").removeClass("alert alert-danger").html('');
		var data = $('form#form-demande').serialize();
		 //alert(data);
		$.ajax({
			type:"POST",
			url: ajoutDemandeMAT,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);

			if(retour=="echec"){
				$(".retour-demande").addClass("alert alert-danger").html('La demande déjà envoyer');
				/*$(".retour-demandeFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				$('.retour-demandeFinal').fadeIn('fast',function(){
				$('.retour-demandeFinal').fadeOut(6000);*/
			
			}else{
				location.reload(true);
			}
			
			//location.href=voirConsultation+"/"+retour;
			
		});
		
	}
	else{
		$(".retour-demande").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});

$("#enregistrerConstante").click(function(){
	var nbError = 0;
	
	var dia = $('form#form-constante input.dia').val();
	var sys = $('form#form-constante input.sys').val();
	
	if(dia=="" && sys!=""){
		$('form#form-constante input.dia').addClass("has-error");
		$('form#form-constante input.sys').removeClass("has-error");
		$("form#form-constante input.temperature").parent("div").removeClass("has-error");
		$("form#form-constante input.poids").parent("div").removeClass("has-error");
		$("form#form-constante input.taille").parent("div").removeClass("has-error");
		nbError++;
	}
	else if(dia!="" && sys==""){
		$('form#form-constante input.dia').removeClass("has-error");
		$('form#form-constante input.sys').addClass("has-error");
		$("form#form-constante input.temperature").parent("div").removeClass("has-error");
		$("form#form-constante input.poids").parent("div").removeClass("has-error");
		$("form#form-constante input.taille").parent("div").removeClass("has-error");
		nbError++;
	}
	else{
		$('form#form-constante input.dia').removeClass("has-error");
		$('form#form-constante input.sys').removeClass("has-error");
		$("form#form-constante input.temperature").parent("div").removeClass("has-error");
		$("form#form-constante input.poids").parent("div").removeClass("has-error");
		$("form#form-constante input.taille").parent("div").removeClass("has-error");
	}
	
	if(nbError == 0){
		$(".retour-const").removeClass("alert alert-danger").html('');
		var data = $('form#form-constante').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutConstante,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			if(retour=="ok"){	
				// $(".retour-const").removeClass("alert alert-danger").html('');
				// $(".temperature").parent("div").removeClass("has-error");
				// $(".ta").parent("div").removeClass("has-error");
				// $(".poids").parent("div").removeClass("has-error");
				// $(".taille").parent("div").removeClass("has-error");
				// $(".retour-constFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				// $('.retour-constFinal').fadeIn('fast',function(){
					// $('.retour-constFinal').fadeOut(6000);
				// });
				location.reload(true);
				
			}
			else if(retour=="temperature"){
				$(".retour-const").addClass("alert alert-danger").html('Erreur des valeurs');
				$(".temperature").parent("div").addClass("has-error");
				$(".dia").parent("div").removeClass("has-error");
				$(".sys").parent("div").removeClass("has-error");
				$(".poids").parent("div").removeClass("has-error");
				$(".taille").parent("div").removeClass("has-error");
			}
			else if(retour=="sys"){
				$(".retour-const").addClass("alert alert-danger").html('Erreur des valeurs');
				$(".temperature").parent("div").removeClass("has-error");
				$(".sys").parent("div").addClass("has-error");
				$(".dia").parent("div").removeClass("has-error");
				$(".poids").parent("div").removeClass("has-error");
				$(".taille").parent("div").removeClass("has-error");
			}
			else if(retour=="dia"){
				$(".retour-const").addClass("alert alert-danger").html('Erreur des valeurs');
				$(".temperature").parent("div").removeClass("has-error");
				$(".dia").parent("div").addClass("has-error");
				$(".sys").parent("div").removeClass("has-error");
				$(".poids").parent("div").removeClass("has-error");
				$(".taille").parent("div").removeClass("has-error");
			}
			else if(retour=="poids"){
				$(".retour-const").addClass("alert alert-danger").html('Erreur des valeurs');
				$(".temperature").parent("div").removeClass("has-error");
				$(".dia").parent("div").removeClass("has-error");
				$(".sys").parent("div").removeClass("has-error");
				$(".poids").parent("div").addClass("has-error");
				$(".taille").parent("div").removeClass("has-error");
			}
			else if(retour=="taille"){
				$(".retour-const").addClass("alert alert-danger").html('Erreur des valeurs');
				$(".temperature").parent("div").removeClass("has-error");
				$(".dia").parent("div").removeClass("has-error");
				$(".sys").parent("div").removeClass("has-error");
				$(".poids").parent("div").removeClass("has-error");
				$(".taille").parent("div").addClass("has-error");
			}
			else{
				$(".retour-const").addClass("alert alert-danger").html(retour);
				$(".temperature").parent("div").addClass("has-error");
				$(".dia").parent("div").addClass("has-error");
				$(".sys").parent("div").addClass("has-error");
				$(".poids").parent("div").addClass("has-error");
				$(".taille").parent("div").addClass("has-error");
			}
		});
	}
	else{
		$(".retour-const").addClass("alert alert-danger").html('Les deux valeurs de la tension doivent être renseignées');
	}
	
	return false;
});

$("#enregistrerInformation").click(function(){

		var data = $('form#form-complement').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutInformation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			if(retour == "ok"){
				location.reload(true);
			}
			else{
				$(".retour-complement").addClass("alert alert-danger").html(retour);
			}			
			
		});
	
	return false;
});


$("#enregistrerConsultation").click(function(){
	var nbError = 0;
	
	$("form#form-consultation textarea.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	var tab = $("#tbodyHyp").html();
	var tab1 = $("#tbodyRet").html();
	if($.trim(tab)=="" || $.trim(tab1)==""){
		nbError++;
	}
	
	if(nbError==0){
		$(".retour-consul").removeClass("alert alert-danger").html('');
		var data = $('form#form-consultation').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutConsultation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			if(retour=="ok"){
				// $("a.cliqueConsul").click();
				// $(".retour-consulFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				// $('.retour-consulFinal').fadeIn('fast',function(){
					// $('.retour-consulFinal').fadeOut(6000);
				// });
				location.reload(true);
			}
			
		});
	}
	else{
		$(".retour-consul").addClass("alert alert-danger").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	return false;
});


$(".effectuer").click(function(){
	var nbError = 0;
	
	if($.trim($("form#form-imagerie textarea").val()) == ""){
		$("#compte").html("<em>(Veuillez renseigner le compte rendu)</em>").addClass("text-danger");
		nbError++;
	}
	else{
		$("#compte").html("").removeClass("text-danger");
	}
	
	// if($.trim($("form#frmFileUpload input[type=file]").val()) == ""){
		// $("#image").html("<em>(Veuillez renseigner au moins une image de la radio)</em>").addClass("text-danger");
		// nbError++;
	// }
	// else{
		// $("#image").html("").removeClass("text-danger");
	// }
	
	if(nbError==0){
		var form = $('form#form-imagerie').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: ajoutCompteRendu,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			location.href=listeActeImagerie;
			// if(retour=="ok"){
				// $("a.cliqueConsul").click();
				// $(".retour-consulFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				// $('.retour-consulFinal').fadeIn('fast',function(){
					// $('.retour-consulFinal').fadeOut(6000);
				// });
			// }
			
		});
		
	}
	
	return false;
});


$(".effectuerCardio").click(function(){
	var nbError = 0;
	
	// if($.trim($("form#frmFileUpload input[type=file]").val()) == ""){
		// $("#image").html("<em>(Veuillez renseigner au moins une image de la radio)</em>").addClass("text-danger");
		// nbError++;
	// }
	// else{
		// $("#image").html("").removeClass("text-danger");
	// }
	
	if(nbError==0){
		var form = $('form#form-cardiologie').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: ajoutCompteRenduCardiologie,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			location.href=listeActeCardiologique;
			// alert(retour);
		});
		
	}
	
	return false;
});


$(".effectuerExp").click(function(){
	var nbError = 0;
	
	if($.trim($("form#form-exploration textarea").val()) == ""){
		$("#compte").html("<em>(Veuillez renseigner le compte rendu)</em>").addClass("text-danger");
		nbError++;
	}
	else{
		$("#compte").html("").removeClass("text-danger");
	}
	
	// if($.trim($("form#frmFileUpload input[type=file]").val()) == ""){
		// $("#image").html("<em>(Veuillez renseigner au moins une image de la radio)</em>").addClass("text-danger");
		// nbError++;
	// }
	// else{
		// $("#image").html("").removeClass("text-danger");
	// }
	
	if(nbError==0){
		var form = $('form#form-exploration').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: ajoutCompteRenduExp,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			location.href=listeActeExploration;
			// if(retour=="ok"){
				// $("a.cliqueConsul").click();
				// $(".retour-consulFinal").addClass("alert alert-success").html('Données enregistrées avec succès');
				// $('.retour-consulFinal').fadeIn('fast',function(){
					// $('.retour-consulFinal').fadeOut(6000);
				// });
			// }
			
		});
		
	}
	
	return false;
});


$(".plan_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupPlanification,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".Partogramme_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupPartogramme,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		$("#recepPartogramme").html(retour);
	});
	
	return false;
});


$(".const_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupConstante,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".gestation_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupGestationAnterieur,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});



$(".conjoint_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupInfoConjoint,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".examen_clinique_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupExamenClinique,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});



$(".vaccinationE_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupVaccinationE,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".info_Nais_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupInfoNais,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".observation_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupObservation,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".intero_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupInterogatoire,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".premier_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupPremierExamen,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".facteur_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupFacteurRisque,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".planning_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupPlanningFamiliale,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".antecedents_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupAntecedents,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".suivi_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupSuiviFemme,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".vaccination_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupVaccinationFemme,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".deces_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupDeces,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".const_sej_2").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupConstante2,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".info_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupInformation,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".consuStoma_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupConsultationStoma,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".consu_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupConsultation,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".consu_ophta_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupConsultationOphta,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".hospitalisation_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupHospitalisation,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});



$(".soins_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupSoinsInfim,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".imagerie_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupActeImagerie,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".exp_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupActeExp,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".ordo_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupOrdonnance,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".ordo_acm").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupOrdonnance_Smi,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});



/*$('.addOrd').click (function(){
  // alert('tata');
  var nbError = 0;
  var tab = $ ('#tbodyOrd').html ();
  if ($.trim (tab) == '') {
    nbError++;
  }

  if (nbError == 0) {
    // return true;
    var data = $ ('form#form-ord').serialize ();
    // alert(data);
    $.ajax ({
      type: 'POST',
      url: ajoutOrdonnance,
      data: data,
      async: true,
      error: function (xhr, status, error) {
        alert (xhr.responseText);
      },
    }).done (function (retour) {
      // alert(retour);
      // $("a.cliqueOrd").click();
      // $("#tbodyOrd").html("");
      // $(".retour-ord").addClass("alert alert-success").html('Données enregistrées avec succès');
      // $('.retour-ord').fadeIn('fast',function(){
      // $('.retour-ord').fadeOut(6000);
      // });
      location.reload (true);
    });
  } else {
    alert ('La liste à enregistrer est vide');
  }

  return false;
});*/
//RABY


$ ('.addOrd2').click (function () {
  // alert('tata');
  /*var nbError = 0;
  var ordo = $ ('#ordo').val();
  if ($.trim (ordo) == '') {
    nbError++;
  }

  if (nbError == 0) {
    // return true;
    var data = $ ('form#form-ord2').serialize ();
    // alert(data);
    $.ajax ({
      type: 'POST',
      url: ajoutOrdonnance,
      data: data,
      async: true,
      error: function (xhr, status, error) {
        alert (xhr.responseText);
      },
    }).done (function (retour) {
      // alert(retour);
      location.reload (true);
    });
  } else {
    alert ('Veuillez saisir les produits à prescrire');
  }*/
  
  
   // alert('tata');
  var nbError = 0;
  var tab = $ ('#tbodyOrd2').html ();
  if ($.trim (tab) == '') {
    nbError++;
  }

  if (nbError == 0) {
    // return true;
    var data = $ ('form#form-ord2').serialize ();
    // alert(data);
    $.ajax ({
      type: 'POST',
      url: ajoutOrdonnance,
      data: data,
      async: true,
      error: function (xhr, status, error) {
        alert (xhr.responseText);
      },
    }).done (function (retour) {
      // alert(retour);
      // $("a.cliqueOrd").click();
      // $("#tbodyOrd").html("");
      // $(".retour-ord").addClass("alert alert-success").html('Données enregistrées avec succès');
      // $('.retour-ord').fadeIn('fast',function(){
      // $('.retour-ord').fadeOut(6000);
      // });
      location.reload (true);
    });
  } else {
    alert ('La liste à enregistrer est vide');
  }


  return false;
});


$ ('.addOrd').click (function () {
  // alert('tata');
  var nbError = 0;
  var tab = $ ('#tbodyOrd').html ();
  if ($.trim (tab) == '') {
    nbError++;
  }

  if (nbError == 0) {
    // return true;
    var data = $ ('form#form-ord').serialize ();
    // alert(data);
    $.ajax ({
      type: 'POST',
      url: ajoutOrdonnance,
      data: data,
      async: true,
      error: function (xhr, status, error) {
        alert (xhr.responseText);
      },
    }).done (function (retour) {
      // alert(retour);
      // $("a.cliqueOrd").click();
      // $("#tbodyOrd").html("");
      // $(".retour-ord").addClass("alert alert-success").html('Données enregistrées avec succès');
      // $('.retour-ord').fadeIn('fast',function(){
      // $('.retour-ord').fadeOut(6000);
      // });
      location.reload (true);
    });
  } else {
    alert ('La liste à enregistrer est vide');
  }

  return false;
});
//RABY

$(".reeducation_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupReeducat,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".laboratoire_acm").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupLaboratoire_Smi,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".laboratoire_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupLaboratoire,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});

$(".nouveau_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupNouveau,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".diagnostic_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupDiagnostic,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".avis_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupAvis,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".rdv_sej").on("click",function(){
	
	var data = $(this).attr("rel");
	// alert(data);
	$.ajax({
		type:"POST",
		url: recupRdv,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("#recepConsultation").html(retour);
	});
	
	return false;
});


$(".addReeducation").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyReeducation").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-reeducation').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeReeducation,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueReeducation").click();
			// $("#tbodyReeducation").html("");
			// $(".retour-reeducation").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-reeducation').fadeIn('fast',function(){
				// $('.retour-reeducation').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addReeducation_2").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyReeducation").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-reeducation').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeReeducation2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueReeducation").click();
			// $("#tbodyReeducation").html("");
			// $(".retour-reeducation").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-reeducation').fadeIn('fast',function(){
				// $('.retour-reeducation').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



$(".addMaladie").click(function(){
	// alert('ok');
	var nbError = 0;
	var tab = $("#tbodyMaladie").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-maladie').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutMaladie,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyMaladie").html("");
			// $(".retour-maladie").addClass("alert alert-success").html('Donnée(s) enregistrée(s) avec succès');
			// $('.retour-maladie').fadeIn('fast',function(){
				// $('.retour-maladie').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addLabo").click(function(){
	// alert('ok');
	var nbError = 0;
	var tab = $("#tbodyLabo").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-labo').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutLabo,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyLabo").html("");
			// $(".retour-labo").addClass("alert alert-success").html('Donnée(s) enregistrée(s) avec succès');
			// $('.retour-labo').fadeIn('fast',function(){
				// $('.retour-labo').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addCardio").click(function(){
	// alert('ok');
	var nbError = 0;
	var tab = $("#tbodyCardio").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-cardio').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutCardio,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyLabo").html("");
			// $(".retour-labo").addClass("alert alert-success").html('Donnée(s) enregistrée(s) avec succès');
			// $('.retour-labo').fadeIn('fast',function(){
				// $('.retour-labo').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addLabo_2").click(function(){
	// alert('ok');
	var nbError = 0;
	var tab = $("#tbodyLabo").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-labo').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutLabo2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyLabo").html("");
			// $(".retour-labo").addClass("alert alert-success").html('Donnée(s) enregistrée(s) avec succès');
			// $('.retour-labo').fadeIn('fast',function(){
				// $('.retour-labo').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addSoins").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodySoins").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-soins').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeInfirmier,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueSoins").click();
			// $("#tbodySoins").html("");
			// $(".retour-soins").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-soins').fadeIn('fast',function(){
				// $('.retour-soins').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addSoins_2").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodySoins").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-soins').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeInfirmier2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueSoins").click();
			// $("#tbodySoins").html("");
			// $(".retour-soins").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-soins').fadeIn('fast',function(){
				// $('.retour-soins').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});


$(".addImagerie").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyImagerie").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-imagerie').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeImagerie,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyImagerie").html("");
			// $(".retour-imagerie").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-imagerie').fadeIn('fast',function(){
				// $('.retour-imagerie').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



$(".addImagerie_2").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyImagerie").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-imagerie').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeImagerie2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueImagerie").click();
			// $("#tbodyImagerie").html("");
			// $(".retour-imagerie").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-imagerie').fadeIn('fast',function(){
				// $('.retour-imagerie').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



$(".addexp").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyExp").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-exp').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeExp,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueExp").click();
			// $("#tbodyExp").html("");
			// $(".retour-exp").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-exp').fadeIn('fast',function(){
				// $('.retour-exp').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});



$(".addexp_2").click(function(){
	// alert();
	var nbError = 0;
	var tab = $("#tbodyExp").html();
	if($.trim(tab)==""){
		nbError++;
	}
	
	if(nbError == 0){
		var data = $('form#form-exp').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: ajoutActeExp2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $("a.cliqueExp").click();
			// $("#tbodyExp").html("");
			// $(".retour-exp").addClass("alert alert-success").html('Données enregistrées avec succès');
			// $('.retour-exp').fadeIn('fast',function(){
				// $('.retour-exp').fadeOut(6000);
			// });
			location.reload(true);
		});
	}
	else{
		alert("La liste à enregistrer est vide");
	}
	
	return false;
});





$("select.unitePresc").on("change",function(){
	// alert();
	var data = $('select.unitePresc').val();
	// alert(data);
	$.ajax({
		type:"POST",
		url: listeChambreUniteDispo,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("select.chambrePresc").html(retour);
	});
	
	return false;
});


$("select.chambrePresc").on("change",function(){
	// alert();
	var data = $('select.chambrePresc').val();
	// alert(data);
	$.ajax({
		type:"POST",
		url: listeLitChambreDispo,
		data:"id="+data,
		async:true,
		error:function(xhr, status, error){
			alert(xhr.responseText);
		}
		
	})
	.done(function(retour){
		// alert(retour);
		$("select.litPresc").html(retour);
	});
	
	return false;
});




$("#AddDeces_2").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-deces input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


	$("form#form-deces select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	$("form#form-deces textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});
	
	
	if(nbError == 0){
		
		$(".retour-deces").html('');
		var data = $('form#form-deces').serialize();
		// alert(data);
		$.ajax({
			type:"POST",
			url: casDeces_2,
			data:data,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			alert(retour);
			// $(".retour-new-deces").addClass("alert alert-success").html("Patient déclaré décédé!").removeClass("danger");
			// $("form#form-deces input.obligatoire").val('');
			// $("form#form-deces textarea.obligatoire").val('');
			// $('.retour-new-ne').fadeIn('fast',function(){
				// $('.retour-new-deces').fadeOut(6000);
			// });
			location.href=voirHospitalisation+"/"+retour;
		});
		
	}
	else{
		$(".retour-deces").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	
	
	return false;
});



$("#AddCharge").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-charge input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


$("form#form-charge select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-charge").html('');
		var form = $('form#form-charge').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: priseEnCharge,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-charge").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});



function finHospitalisation(){
	// alert('ok');
	var nbError = 0;
	
	$("form#motif-fin select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
		}
	});
	
	if(nbError == 0){
		var data1 = $('form#motif-fin').serialize();
		var data2 = $('form#fin-hos').serialize();
		// alert(fin_hospitalisation);
		$.ajax({
			type:"POST",
			url: fin_hospitalisation,
			data:data1+"&"+data2,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}	
		})
		.done(function(retour){
			// alert(retour);
			// $(".retour-new-deces").addClass("alert alert-success").html("Patient déclaré décédé!").removeClass("danger");
			// $("form#form-deces input.obligatoire").val('');
			// $("form#form-deces textarea.obligatoire").val('');
			// $('.retour-new-ne').fadeIn('fast',function(){
				// $('.retour-new-deces').fadeOut(6000);
			// });
			location.href=voirHospitalisation+"/"+retour;
		});
		
	}
	
	return false;
}



$("select.type").on("change",function(){

	var choix = $('select.type').val();
	// alert(choix);
	if(choix == "choix_a"){
		$("div.goupea").removeClass("cacher");
		$("div.goupeb").addClass("cacher");
		$("div.goupec").addClass("cacher");
		$("div.gouped").addClass("cacher");
		$("div.goupee").addClass("cacher");
	}
	else if (choix == "choix_b"){
		$("div.goupea").addClass("cacher");
		$("div.goupeb").removeClass("cacher");
		$("div.goupec").addClass("cacher");
		$("div.gouped").addClass("cacher");
		$("div.goupee").addClass("cacher");
	}
	else if (choix == "choix_c"){
		$("div.goupea").addClass("cacher");
		$("div.goupeb").addClass("cacher");
		$("div.goupec").removeClass("cacher");
		$("div.gouped").addClass("cacher");
		$("div.goupee").addClass("cacher");
	}
	else if (choix == "choix_d"){
		$("div.goupea").addClass("cacher");
		$("div.goupeb").addClass("cacher");
		$("div.goupec").addClass("cacher");
		$("div.gouped").removeClass("cacher");
		$("div.goupee").addClass("cacher");
	}
	else if (choix == "choix_e"){
		$("div.goupea").addClass("cacher");
		$("div.goupeb").addClass("cacher");
		$("div.goupec").addClass("cacher");
		$("div.gouped").addClass("cacher");
		$("div.goupee").removeClass("cacher");
	}
	else {
		$("div.goupea").addClass("cacher");
		$("div.goupeb").addClass("cacher");
		$("div.goupec").addClass("cacher");
		$("div.gouped").addClass("cacher");
		$("div.goupee").addClass("cacher");
	}
	
});


$("#AddEchoa").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-echoa input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	$("form#form-echoa textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


	$("form#form-echoa select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-echoa").html('');
		var form = $('form#form-echoa').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: echograohieA,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-echoa").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});


$("#AddEchob").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-echob input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	$("form#form-echob textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


	$("form#form-echob select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-echob").html('');
		var form = $('form#form-echob').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: echograohieB,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-echob").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});

$("#AddEchoc").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-echoc input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	$("form#form-echoc textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


	$("form#form-echoc select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-echoc").html('');
		var form = $('form#form-echoc').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: echograohieC,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-echoc").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});

$("#AddEchod").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-echod input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	$("form#form-echod textarea.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});


	$("form#form-echod select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-echod").html('');
		var form = $('form#form-echod').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: echograohieD,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-echod").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});


$("#AddEchoe").click(function(){
	// alert('ok');
	var nbError = 0;
	
	$("form#form-echoe input.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});

	$("form#form-echoe select.form-control.obligatoire").each(function(){
		if($.trim($(this).val()) == ""){
			$(this).parent("div").addClass("has-error");
			$(this).addClass("obligatoire-color");
			nbError++;
		}
		else{
			$(this).parent("div").removeClass("has-error");
			$(this).removeClass("obligatoire-color");
		}
	});	
	
	if(nbError == 0){
		
		$(".retour-echoe").html('');
		var form = $('form#form-echoe').get(0);
		var formData = new FormData(form);
		// alert(formData);
		$.ajax({
			type:"POST",
			url: echograohieE,
			contentType:false,
			processData:false,
			data:formData,
			async:true,
			error:function(xhr, status, error){
				alert(xhr.responseText);
			}
			
		})
		.done(function(retour){
			// alert(retour);
			location.reload(true);
		});
		
	}
	else{
		$(".retour-echoe").html('Veuillez SVP renseigner tous les champs obligatoires!');
	}
	return false;
});