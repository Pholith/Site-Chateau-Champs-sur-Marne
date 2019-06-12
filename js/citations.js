          





              // JavaScript pour le slider
              var numSlider = 1;

              // Id des citations selectionnés
              var slidesId = [-1, -1];


              // Selection de tout les sliders
              var slide_prev = document.getElementsByClassName("slideshow_container");

              // Selection de la citation 0 pour chaque slider
              showSlides(slide_prev[0], 1, 0);
              showSlides(slide_prev[1], 1, 1);


              // Fonction appelée 
              function showSlides(node, n, numSlider) {


              	var lst =  slide_prev[numSlider].getElementsByClassName("slider_elem");


					// Change l'état de visiblité du texte
					if(slidesId[numSlider] >= 0)
						$(lst[slidesId[numSlider]]).toggleClass('visible');
					
					
					slidesId[numSlider] = (slidesId[numSlider] + n +  lst.length) % lst.length;


					$(lst[slidesId[numSlider]]).toggleClass('visible');


					console.log(slidesId[numSlider]);

				}