<!-- Menu: NE PAS MODIFIER -->
<div id="main">

<!-- Cette checkbox sert à faire une menu sans javascript sur mobile -->
<input type="checkbox" id="menu-checkbox" class="menu-checkbox">
<label for="menu-checkbox" class="menu-toggle"> <h1> ≡ Menu </h1> </label>

	<nav>
		<ul> 
			<li><a id="first" href="main.php"> Accueil </a></li>
			<li><a href="#"> Infos pratiques </a> 

				<ul>
					<li><a href="tarif.php"> Tarifs </a></li>
					<li><a href="horaire.php"> Horaires </a></li>
					<li><a href="visite.php"> Visites </a></li>
					<li><a href="localisation.php"> Accès </a></li>
				</ul>
			</li>
			<li><a href="#"> Parcours </a> 
				<ul>
					<li><a href="interieur.php"> Intérieur </a></li>
					<li><a href="exterieur.php"> Extérieur </a></li>
					<li><a href="batimentEspace.php"> Bâtiments </a></li>
					<li><a href="salleNonVisitable.php"> Espaces non visitables </a></li>
				</ul>
			</li>
			<li><a href="#"> Histoire </a> 
				<ul>
					<li><a href="histoire.php"> Point historique </a></li>
					<li><a href="personnalite.php"> Personnalités </a></li>
					<li><a href="friseChronologique.php"> Frise Chronologique </a></li>
				</ul>
			</li>
			<li> <a href="#"> Arts </a> 
				<ul>
					<li><a href="citations.php"> L'art du voyage  </a></li>
					<li><a href="cinema.php"> Monde cinématographique </a></li>
				</ul>
			</li>
			<li><a href="galeriePhoto.php"> Galerie photo </a> </li>
			<li><a href="architecture.php"> Architecture </a></li>
			<li><a href="modelisation.php"> Rallye culturel </a></li> <!-- Projet de l'IMAC -->
			<li><a href="jeux.php"> Jeux & Docs </a></li>
			<li><a href="quiz.php"> Quiz </a></li>
		</ul>
	</nav>


<!-- Header générique -->
<header>                 
	<!-- Photo du background --> 

	<div class="toolbar">
			
		<ul class="languagepicker">
			<a href="#"> <li><img src="../../image/logo/french.png" alt="logo fr"/> Français </li></a>
		    <a href="../en/main.php"> <li><img src="../../image/logo/english.png" alt="logo en"/> English </li></a>
		    <a href="../es/main.php"> <li><img src="../../image/logo/espagnol.png" alt="logo es"/> Español </li></a>
		</ul>

		<form method="post">
			<ul class="languagepicker themepicker">
			<a> <li>Thème</li></a>
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
		<h1> Chateau de champs-sur-marne </h1>
	</div>
</header>
