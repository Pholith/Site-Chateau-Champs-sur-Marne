<!DOCTYPE html>
<html lang="es">

<?php include("head.php"); ?>

<body>

	<?php include("header.php"); ?>

	<section>
		<p>
		El dominio del castillo de Champs se inscribe en un planteamiento de invitación al viaje y más ampliamente al descubrimiento. Viajar es todo un arte como testiguan estas citaciones de estos famosos personajes.
		</p>

		<h2> Citations sur le voyage de visiteurs du château </h2>

		<!-- Slideshow container -->
		<div class="slideshow_container">

			<!-- Full-width slides/quotes -->
			<div class="slider_elem">
				<q>Los franceses allá donde están, necesitan lo maravilloso.</q>
				<p>- De Gaulle </p>
			</div>
			<div class="slider_elem">
				<q>El verdadero viaje de descubrimiento no consiste en buscar nuevos paisajes, sino tener nuevos ojos</q>
				<p>- Marcel Proust </p>
			</div>

			<div class="slider_elem">
				<q>Nada desarrolla la inteligencia como los viajes</q>
				<p>- Émile Zola </p>
			</div>

			<div class="slider_elem">
				<q>Si mi padre no ha tenido muchos juguetes, tenía (…) el parque de todos los caballeros del cielo y la tierra!</q>
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
				<q>El hombre que quiere aprender debe leer primero, y luego viajar para corregir lo que aprendió</q>
				<p>- Giacomo Casanova</p>
			</div>

			<div class="slider_elem">
				<q>Vale, el sueño de una rosquilla, es un sueño, pero no es una rosquilla. Pero el sueño de un viaje, ya es un viaje de por sí</q>
				<p>- Marek Halter</p>
			</div>
			<div class="slider_elem">
				<q>La gente no hace viajes, los viajes hacen a la gente</q>
				<p>- John Steinbeck</p>
			</div>
			<div class="slider_elem">
				<q>El mundo es un libro y los que no viajan solo leen una pagina</q>
				<p>- Saint-Augustin</p>
			</div>
			<div class="slider_elem">
				<q>El verdadero viaje, no es el hecho de cruzar el desierto o atravesar grandes distancias submarinas, pero llegar en un punto excepcional donde el sabor de el instante baña todos los contornos de la vida interior</q>
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
