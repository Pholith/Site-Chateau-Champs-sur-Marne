




 // Recuperation de la langue de la page
 var language = $('html').attr('lang');



 // Definition du texte des bouttons, en fonction de la langue (a modifier en cas de nouvelles langues)

 var textVisible; 
 var textInvisible; 

switch(language){

	case "fr":
		textVisible = 'En savoir moins ' +'<span class="arrow"> </span>';
		textInvisible = 'En savoir plus '  +'<span class="arrow"> </span>';
	break;

	case "en":
		textVisible = 'See less' +'<span class="arrow"> </span>';
		textInvisible = 'See more'  +'<span class="arrow"> </span>';
	break;

	case "es":
		textVisible = 'Saber menos' +'<span class="arrow"> </span>';
		textInvisible = 'Saber más'  +'<span class="arrow"> </span>';
	break;
}

 	// Selection de tout les bouttons "en savoir plus" et modification de leur texte au démarage

 	var y = document.getElementsByClassName("enSavoirPlus");
 	var i;

 	for (i = 0; i < y.length; i++) {
 		y[i].innerHTML = textInvisible;
 	}






//Quand un bouttons "en savoir plus" du contenu est cliqué
$('button').click(function() {

	//Si le boutton est bien un bouton "en savoir plus"
	if(this.parentNode.tagName != 'DIV')
		return;

 	// Récupère le parent du boutton, puis la dernière balise de ce conteneur
 	var contenuPlus = this.parentNode.lastElementChild;

 	// Change l'état de visiblité du texte
 	$(contenuPlus).toggleClass('visible');


 	// Change le texte du boutton
 	this.innerHTML =  ($(contenuPlus).hasClass("visible"))?  textVisible : textInvisible;

 });





