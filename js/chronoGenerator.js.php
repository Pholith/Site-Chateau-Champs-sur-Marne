<?php
///// Ce fichier génère une balise javascript adapté à la langue de la page

$path = $_SERVER['SCRIPT_NAME'];



print('
<script type="text/javascript">
');

// objet qui contient les différentes parties du texte
if (strpos($path, "html/fr/frise") !== false) {
	print('
	var contenu = {
		construction : "Le château est imaginé, modélisé et fait construire par les architectes Pierre et Baptiste Bullet de Chamblain sous la demande de Charles Renouard de la Touane. Ensuite possédée par Paul Poisson de Bourvallais, Louise de La Vallière puis par Charles François de la Baume le blanc, la demeure voit son décor changer. C\'est notamment le cas du salon Chinois (peintures de C. Huhet).",
		celebrite : " Une nouvelle personne s\'installe dans le château pour y vivre et pas des moindres car il sagit de la célèbre marquise de Pompadour.",
		deterioration : "Le dommaine voit se succéder de nombreux propriétaires qui parfois occupent peu d\'intérêt à celui-ci. Le parc et la demeure sont notamment détériorés.",
		restauration : "La famille Cahen d\'Anvers, propriétaire du château de Champs-sur-Marne fait renaître l\'ancienne beauté du lieu. Des programmes onéreux de restauration sont mis en place. De plus, le château est remeublé et son décor s\'enrichit énormément.",
		politique : "Cédé à l\'Etat par Charles Cahen d\'Anvers pour diverses raisons, le général De Gaulle donne au château une dimention politique (acceuil des chefs d\'Etat étrangers).",
		deterioration2 : "Dans une période économiquement difficile, le dommaine connaît des difficultés et recommence à se dégrader.",
		restauration2 : "Le site entreprends un vaste programme de restauration financé par l\'Etat.",
		tourisme : "Réouvert au tourisme depuis 2013, le site organise de nombreux évènements artistiques, historiques et musicaux ou encore des visites."
	}');
} else {
	print('
	var contenu = {
		construction: "The castle was designed, modelled and built by the architects Pierre and Baptiste Bullet de Chamblain at the request of Charles Renouard de la Touane. Then owned by Paul Poisson de Bourvallais, Louise de La Vallière and Charles François de la Baume le Blanc, the residence saw its decor change. This is particularly the case of the Chinese salon (paintings by C. Huhet).",
		celebrite: "A new person settles in the castle to live there and not the least because it is about the famous Marquise de Pompadour.",
		deterioration: "The dominean sees a succession of many owners who sometimes occupy little interest in it. In particular, the park and the house are deteriorated.",
		restauration: "The Cahen family of Antwerp, owner of the castle of Champs-sur-Marne, brings back to life the ancient beauty of the place. Expensive restoration programs are being implemented. In addition, the castle has been refurbished and its decor has been greatly enriched.",
		politique: "Surrendered to the State by Charles Cahen of Antwerp for various reasons, General De Gaulle gave the castle a political dimension (reception of foreign heads of state).",
		deterioration2: "In an economically difficult period, the domineering one experiences difficulties and starts to deteriorate again.",
		restauration2: "The site is undertaking a major state-funded restoration programme.",
		tourisme: "Reopened to tourism in 2013, the site organizes many artistic, historical and musical events or even visits."
	}');

}


// fonction principal qui change la zone de texte
print('
function changerLeTexte(contenu) {
	texte = document.getElementById("text-time-line");
	texte.innerHTML = contenu ;
}

// fonctions secondaires qui sont appellées en cliquant
function afficherConstruction() {
	changerLeTexte(contenu.construction);	
}

function afficherCelebrite() {
	changerLeTexte(contenu.celebrite);	
}

function afficherDeterioration() {
	changerLeTexte(contenu.deterioration);	
}

function afficherRestauration() {
	changerLeTexte(contenu.restauration);	
}

function afficherPolitique() {
	changerLeTexte(contenu.politique);	
}

function afficherDeterioration2() {
	changerLeTexte(contenu.deterioration2);	
}

function afficherRestauration2() {
	changerLeTexte(contenu.restauration2);	
}

function afficherTourisme() {
	changerLeTexte(contenu.tourisme);	
}
</script>

    ');

?>