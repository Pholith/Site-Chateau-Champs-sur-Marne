<!-- Menu: NE PAS MODIFIER -->
<div id="main">

<!-- Cette checkbox sert à faire une menu sans javascript sur mobile -->
<input type="checkbox" id="menu-checkbox" class="menu-checkbox">
<label for="menu-checkbox" class="menu-toggle"> <h1> ≡ Menu </h1> </label>

	<nav>
		<ul> 
			<li><a id="first" href="main.php"> Pagina de inicio </a></li>
			<li><a href="#"> Información práctica  </a> 

				<ul>
					<li><a href="tarif.php"> Tarifa </a></li>
					<li><a href="horaire.php"> Horarios </a></li>
					<li><a href="visite.php"> Visitar </a></li>
					<li><a href="localisation.php"> Acudir </a></li>
				</ul>
			</li>
			<li><a href="#"> Curso </a> 
				<ul>
					<li><a href="interieur.php"> Interior </a></li>
					<li><a href="exterieur.php"> Exterior </a></li>
					<li><a href="batimentEspace.php"> Edificios </a></li>
					<li><a href="salleNonVisitable.php"> Zonas no visitables </a></li>
				</ul>
			</li>
			<li><a href="#"> Historia </a> 
				<ul>
					<li><a href="histoire.php"> Historia </a></li>
					<li><a href="personnalite.php"> Personalidades </a></li>
				</ul>
			</li>
			<li> <a href="#"> Artes </a> 
				<ul>
					<li><a href="citations.php"> Viajero  </a></li>
					<li><a href="cinema.php"> Mundo cinematográfico </a></li>
				</ul>
			</li>
			<li><a href="galeriePhoto.php"> Galería de fotos </a> </li>
			<li><a href="architecture.php"> Arquitectura </a></li>
		</ul>
	</nav>


<!-- Header générique -->
<header>                 
	<!-- Photo du background --> 

	<div class="toolbar">
			
		<ul class="languagepicker">
			<a href="#"> <li><img src="../../image/logo/espagnol.png" alt="logo es" /> Español </li></a>
		    <a href="../fr/main.php"> <li><img src="../../image/logo/french.png" alt="logo fr"/> Français </li></a>
		    <a href="../en/main.php"> <li><img src="../../image/logo/english.png" alt="logo en"/> English </li></a>
		</ul>

		<form method="post">
			<ul class="languagepicker themepicker">
			<a> <li>Tema</li></a>
			<a> <li><button class="colorPicker" type="submit" name="colorChanging" value="1" > Orange </button></li></a>
			<a> <li><button class="colorPicker" type="submit" name="colorChanging" value="2" > Light </button></li></a>
		</form>

	</div>


    <div>
		<div class="background-image">
			<!-- Photo chateau de champs (clicable ?)-->
			<?php 
			
			$current_file_name = basename($_SERVER['SCRIPT_FILENAME']);
			// Trouve le nom du fichier qui inclut header.php, enlève l'extension php à la fin et rajoute jpg pour l'afficher
			print('<img src="../../image/photo/'.substr($current_file_name, 0, -3).'jpg" alt="chateau de champs">');

			?>
			<img id="logo" src="../../image/logo/logo_MCN_original.png" alt="logo MCN"> 
		</div>
		<h1> Castillo de Champs-sur-marne </h1>
	</div>
</header>
