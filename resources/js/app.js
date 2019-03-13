//On charge lodash, popper (nécessaire pour certains composants de Bootstrap), JQuery et les librairies de Bootstrap.

window._ = require('lodash');
window.Popper = require('popper.js').default;
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all.js');
} catch (e) {}

var main = {
	init: function() {
	console.log('Test du dom');
	var mySidebar = $('#mySidebar');
	// J'intercepte l'event "submit" du formulaire de login

	$('.declarationEnfantButton ').on('click', main.changeStyleEnfant);
    $('.declarationAdulteButton ').on('click', main.changeStyleAdulte);
   
    

	$('#formLogin').on('submit', main.submitFormLogin);
	$('#buttonRecu').on('click', main.changeClassRecu);
	$('#UserProfilUpdate').on('submit', main.profileUpdateForm);
	$('#sendMessage').on('submit', main.submitMessage);
	$('#formLoginMed').on('submit', main.submitFormLoginMed);
	$('#formLoginCmpea').on('submit', main.submitFormLoginCmpea);
	$('#formLoginCreche').on('submit', main.submitFormLoginCreche);
	$('#ouverture').on('click', main.openSideBar);
	$('#fermeture').on('click', main.closeSideBar);
	$('#fermeture2').on('click', main.closeSideBar);
	$('.family').on('click', main.showFamily);
	$('.particulierStat').on('click', main.showParticulier);
	$('.creche').on('click', main.showCreche);
	$('.medecin').on('click', main.showMedecin);
	$('.declaration').on('click', main.showDeclaration);
	$('.particulierTotal').on('click', main.showTotalUser);
	$('.viewGenre').on('click', main.showGenreChart);
	$('.viewJob').on('click', main.showJobChart);
	$('.viewNumberDeclaration').on('click', main.showJobNumberDeclarationChart);
	$('.ville').on('click', main.showVille);
	$('#familySearch').on('keyup', main.filterTableFamily);
	$('#particulierSearch').on('keyup', main.filterTableParticulier);
	$('#crecheSearch').on('keyup', main.filterTableCreche);
	$('#medecinSearch').on('keyup', main.filterTableMedecin);
	$('#declarationSearch').on('keyup', main.filterTableDeclaration);
	$('#villeSearch').on('keyup', main.filterTableVille);
	$('.decoButton').on('click', main.showDecoMessage);
	$('.declarationEnfantButton').on('click', main.showFormDeclarationEnfant);
	$('.declarationAdulteButton').on('click', main.showFormDeclarationAdulte);
	// $('#buttonRecu').on('click', main.showRecuDiv);
	$('.buttonTraitement').on('click', main.showTraitementDiv);
	$('.buttonTraiter').on('click', main.showTraiterDiv);
	$('.medecinRadio').on('click', main.showInputMed);
	$('.crecheRadio').on('click', main.showInputCreche);
	$('.particulierRadio').on('click', main.showInputParticulier);
	$('.familyRadio').on('click', main.showInputFamily);
	$('#confirmationS').on('click', main.showConfirmation);


	// $(':radio').on('click', main.change);


	// Adding smooth scrolling to all links
	$('a').on('click', main.smoothCroll);
},


changeStyleEnfant: function(){
	console.log('Affiche moi');
	if ($(this).hasClass('choixDeclaration') ){
		$(this).removeClass('choixDeclaration');
		$(this).addClass('activedChoix');
		if ($(this).siblings().hasClass('choixDeclaration')) {
			$(this).siblings().removeClass('choixDeclaration');
			$(this).siblings().addClass('disabledChoix');
		}
	}
	else if ($(this).hasClass('disabledChoix')) {
		$(this).removeClass('disabledChoix');
		$(this).addClass('activedChoix');
		if ($(this).siblings().hasClass('activedChoix')) {
			$(this).siblings().removeClass('activedChoix');
			$(this).siblings().addClass('disabledChoix');
		}
	}

},

changeStyleAdulte: function(){
	console.log('Affiche moi');
	if ($(this).hasClass('choixDeclaration') ){
		$(this).removeClass('choixDeclaration');
		$(this).addClass('activedChoix');
		if ($(this).siblings().hasClass('choixDeclaration')) {
			$(this).siblings().removeClass('choixDeclaration');
			$(this).siblings().addClass('disabledChoix');
		}
	}
	else if ($(this).hasClass('disabledChoix')) {
		$(this).removeClass('disabledChoix');
		$(this).addClass('activedChoix');
		if ($(this).siblings().hasClass('activedChoix')) {
			$(this).siblings().removeClass('activedChoix');
			$(this).siblings().addClass('disabledChoix');
		}
	}

},


showConfirmation: function(){
	$('#successDeconnexion').fadeIn(3000);
	$('#successDeconnexion').fadeOut(3000);

},

showInputMed: function(){
	$('.inputPar').hide();
	$('.inputCreche').hide();
	$('.inputFamily').hide();
	$('.inputMed').fadeIn(1000);
},
showInputCreche: function(){
	$('.inputFamily').hide();
	$('.inputMed').hide();
	$('.inputPar').hide();
	$('.inputCreche').fadeIn(1000);
},
showInputParticulier: function(){
	$('.inputFamily').hide();
	$('.inputMed').hide();
	$('.inputCreche').hide();
	$('.inputPar').fadeIn(1000);
},
showInputFamily: function(){
	$('.inputMed').hide();
	$('.inputPar').hide();
	$('.inputCreche').hide();
	$('.inputFamily').fadeIn(1000);

},

// showRecuDiv: function(){
//
// 	$('#showRecu').show();
// },
// showTraitementDiv: function(){
//
// 	$('.showTraitement').show();
// },
// showTraiterDiv: function(){
//
// 	$('.showTraiter').show();
// },

showFormDeclarationEnfant: function(){
	$('.Enfant').fadeIn(1000);
	$('.formDeclaration').fadeIn(1000);
	$('.Adulte').hide();
},

showFormDeclarationAdulte: function(){
	$('.Adulte').fadeIn(1000);
	$('.formDeclaration').fadeIn(1000);
	$('.Enfant').hide();
},

showDecoMessage: function(){
	$('#successDeconnexion').show();
},

showFamily: function(){
	$('.tableFamily').toggle(1000);
},
showParticulier: function(){
	$('.tableParticulier').toggle(1000);
},
showCreche: function(){
	$('.tableCreche').toggle(1000);
},
showMedecin: function(){
	$('.tableMedecin').toggle(1000);
},
showDeclaration: function(){
	$('.tableDeclaration').toggle(1000);
},

showTotalUser: function(){
	$('.tableParticulierTotal').toggle(1000);
},
showGenreChart: function(){
	$('.genreChart').toggle(1000);
},
showJobChart: function(){
	$('.jobChart').toggle(1000);
},
showJobNumberDeclarationChart: function(){
	$('.NumberDeclaration').toggle(1000);
},


showVille: function(){
	$('.tableVille').toggle(1000);
},
smoothCroll: function(){
	// Make sure this.hash has a value before overriding default behavior
 if (this.hash !== "") {
	 // Prevent default anchor click behavior
	 event.preventDefault();

	 // Store hash
	 var hash = this.hash;

	 // Using jQuery's animate() method to add smooth page scroll
	 // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	 $('html, body').animate({
		 scrollTop: $(hash).offset().top
	 }, 800, function(){

		 // Add hash (#) to URL when done scrolling (default click behavior)
		 window.location.hash = hash;
	 });
 }
},
openSideBar: function() {
	if (mySidebar.style.display === 'block') {
			mySidebar.style.display = 'none';
	} else {
			mySidebar.style.display = 'block';
			mySidebar.style.width = '75%';
	}
},
// Close the sidebar with the close button
closeSideBar: function() {
    mySidebar.style.display = "none";
},



// Methode permettant de mettre la profile utilisateur à jour



changeClassRecu: function() {


	var status =	$('.statutDemande').val();
	console.log(status);


},


filterTableFamily: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableFamily tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},
filterTableParticulier: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableParticulier tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},
filterTableCreche: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableCreche tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},
filterTableMedecin: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableMedecin tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},
filterTableDeclaration: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableDeclaration tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},
filterTableVille: function () {

	 var value = $(this).val().toLowerCase();
	 $("#tableVille tr").filter(function() {
		 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	 });
},

};

$(main.init);