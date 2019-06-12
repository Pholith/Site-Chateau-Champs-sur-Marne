const list = document.querySelectorAll('h2');
for (var i = 0; i < list.length; i++) {
    const elt = list[i];
    // ajoute un évènement de clic sur la balise
    elt.addEventListener('click', function(event) {

        elementToTest = elt;
        var eltList = new Array();
        // prend tout les éléments tant que ce ne sont pas des h2
        while (elementToTest.nextElementSibling != null && elementToTest.nextElementSibling.nodeName != "H2") {
            elementToTest = elementToTest.nextElementSibling;
            eltList.push(elementToTest);
        }
        
        // si le tag active est sur la balise
        for (var i = 0; i < eltList.length; i++) {
            
            if (eltList[i].classList.contains('active')) {
                eltList[i].classList.remove('active');
                elt.style.textDecoration = "none";

                // on retire le hr une seule fois
            } else {
                eltList[i].classList.add('active');
                elt.style.textDecoration = "underline";
            }
        }
        event.stopPropagation();
    });
}