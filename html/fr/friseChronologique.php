<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>


<body>


	<?php include("header.php"); ?>

	<section>
		<h2> Frise Chronologique </h2>
		<div class="time_line">



		<!--

		 La time line :

		tl_elem represente un point de la frise.
			
			<span></span> = cercle cliquable
			tl_vline = ligne horizontale
				top_line = ligne horizontale dégradée vers le haut
				bottom_line = ligne horizontale dégradée vers le base
			
			tl_info = boite de dialogue popup
				tl_info_invisible = Fermée de base
				tl_info_visible = visible

			-->


			<div class="tl_elem">

				<h3> Construction </h3>

				<span>
					<div class="tl_vline top_line"></div>                   
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Construction : 1703 - 1757 </h3>
					<p>
						Le château est imaginé, modélisé et fait construire par les architectes Pierre et Baptiste Bullet de Chamblain sous la demande de Charles Renouard de la Touane. Ensuite possédée par Paul Poisson de Bourvallais, Louise de La Vallière puis par Charles François de la Baume le blanc, la demeure voit son décor changer. C'est notamment le cas du salon Chinois (peintures de C. Huhet).
					</p>                    
					<input type="button" value="Fermer">
				</div>



				<p> 1703 - 1757 </p>
			</div>






			<div class="tl_elem">

				<h3> Célébrité </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Célébrité : 1757 - 1759 </h3>
					<p>
						Une nouvelle personne s'installe dans le château pour y vivre et pas des moindres car il sagit de la célèbre marquise de Pompadour.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 1757 - 1759 </p>
			</div>




			<div class="tl_elem">

				<h3> Carelessness </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Carelessness : 1759 - 1895 </h3>
					<p>
						Le dommaine voit se succéder de nombreux propriétaires qui parfois occupent peu d'intérêt à celui-ci. Le parc et la demeure sont notamment détériorés.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 1759 - 1895 </p>
			</div>







			<div class="tl_elem">

				<h3> Restauration </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Restauration : 1895 - 1935 </h3>
					<p>
						La famille Cahen d'Anvers, propriétaire du château de Champs-sur-Marne fait renaître l'ancienne beauté du lieu. Des programmes onéreux de restauration sont mis en place. De plus, le château est remeublé et son décor s'enrichit énormément.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 1895 - 1935 </p>
			</div>




			<div class="tl_elem">

				<h3> Politique </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Politique : 1939 - 1971 </h3>
					<p>
						Cédé à l'Etat par Charles Cahen d'Anvers pour diverses raisons, le général De Gaulle donne au château une dimention politique (acceuil des chefs d'Etat étrangers).
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 1939 - 1971 </p>
			</div>




			<div class="tl_elem">

				<h3> Effacement </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Effacement : 1971 - 2006 </h3>
					<p>
						Dans une période économiquement difficile, le dommaine connaît des difficultés et recommence à se dégrader.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 1971 - 2006 </p>
			</div>





			<div class="tl_elem">

				<h3> Restauration </h3>

				<span>
					<div class="tl_vline"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Restauration : 2006 - 2013 </h3>
					<p>
						Le site entreprends un vaste programme de restauration financé par l'Etat.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 2006 - 2013 </p>
			</div>






			<div class="tl_elem">

				<h3> Tourisme </h3>

				<span>
					<div class="tl_vline bottom_line"></div>                    
				</span>             


				<div class="tl_info tl_info_invisible">             
					<h3>Tourisme : 2013 - Ajd </h3>
					<p>
						Réouvert au tourisme depuis 2013, le site organise de nombreux évènements artistiques, historiques et musicaux ou encore des visites.
					</p>                    
					<input type="button" value="Fermer">
				</div>


				<p> 2013 - Ajd  </p>
			</div>

		</div>









		<div id="tl_text">
			<span > En savoir plus: cliquez sur les différents cercles de la frise chronologique. </span>
		</div>
	</section>


	<?php include("footer.php"); ?>

</body>
</html>