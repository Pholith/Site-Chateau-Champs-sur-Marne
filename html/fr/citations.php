<!DOCTYPE html>
<html lang="fr">

<?php include("head.php"); ?>

<body>

	<?php include("header.php"); ?>

	<section>
		<p>
			Le domaine du château de champs s'inscrit dans une démarche d'invitation au voyage, et plus largement à la découverte. <br/>
			Voyager est tout un art comme en témoignent ces citations de personnalités célèbres.
		</p>

		<h2> Citations sur le voyage de visiteurs du château </h2>

		<!-- Slideshow container -->
		<div class="slideshow_container">

			<!-- Full-width slides/quotes -->
			<div class="slider_elem">
				<q> Les Français, où qu'ils le cherchent, ont besoin de merveilleux.</q>
				<p>- De Gaulle </p>
			</div>
			<div class="slider_elem">
				<q> Le véritable voyage de découverte ne consiste pas à chercher de nouveaux paysages, mais à avoir de nouveaux yeux.</q>
				<p>- Marcel Proust </p>
			</div>

			<div class="slider_elem">
				<q> Rien ne développe l’intelligence comme les voyages.</q>
				<p>- Émile Zola </p>
			</div>

			<div class="slider_elem">
				<q> Si mon père, n’a jamais eu beaucoup de jouets, il avait [...] le parc de tous les chevalier du ciel et de la terre !</q>
				<p>- Cora Bertin </p>
			</div>


			<!-- Next/slide_prev buttons -->
			<a class="slide_prev" onclick="showSlides(this, -1, 0)">&#10094;</a>
			<a class="slide_next" onclick="showSlides(this, 1, 0)">&#10095;</a>
		</div>

		<h2> Citations annexes sur le voyage </h2>

		<!-- Slideshow container -->
		<div class="slideshow_container">

			<div class="slider_elem">
				<q>  L’homme qui veut s’instruire doit lire d’abord, et puis voyager pour rectifier ce qu’il a appris.  </q>
				<p>- Giacomo Casanova</p>
			</div>

			<div class="slider_elem">
				<q> Certes, un rêve de beignet, c’est un rêve, pas un beignet. Mais un rêve de voyage, c’est déjà un voyage.</q>
				<p>- Marek Halter</p>
			</div>
			<div class="slider_elem">
				<q> Les gens ne font pas des voyages, ce sont les voyages qui font les gens. </q>
				<p>- John Steinbeck</p>
			</div>
			<div class="slider_elem">
				<q> Le monde est un livre et ceux qui ne voyagent pas n’en lisent qu’une page. </q>
				<p>- Saint-Augustin</p>
			</div>
			<div class="slider_elem">
				<q> Le véritable voyage, ce n'est pas de parcourir le désert ou de franchir de grandes distances sous-marines, c'est de parvenir en un point exceptionnel où la saveur de l'instant baigne tous les contours de la vie intérieure. </q>
				<p>- Antoine de Saint-Exupéry</p>
			</div>
			
			<!-- Next/slide_prev buttons -->
			<a class="slide_prev" onclick="showSlides(this, -1, 1)">&#10094;</a>
			<a class="slide_next" onclick="showSlides(this, 1, 1)">&#10095;</a>
		</div>

	</section>

	<script>

	</script>

	<?php include("footer.php"); ?>
	<script type="text/javascript"    src="../../js/citations.js"> </script>

</body>
</html>
