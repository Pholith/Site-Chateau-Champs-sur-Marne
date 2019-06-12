
/*Frise chronologique */


var savedNode = undefined;

/*  Activer/Desactiver le point selectionné (savedNode) ainsi que son texte */
function ToggleSavedNode(){
    if(savedNode != undefined){
       savedNode.toggleClass('scrolled_to');
       savedNode.next().toggleClass('tl_info_visible');
       savedNode.next().toggleClass('tl_info_invisible');
   }
}


/*  Quand un point est cliqué : On déselectionne l'ancien et on selectionne le nouveau */
$('span').click(function() {
    ToggleSavedNode();
    savedNode = $(this);
    ToggleSavedNode();
});


/*  Quand un boutton "close" est cliqué : On déselectionne le point actuel */
$('input').click(function() {
    ToggleSavedNode();
    savedNode = undefined;
});





