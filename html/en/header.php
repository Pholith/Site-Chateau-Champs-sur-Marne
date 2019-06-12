<!-- Menu: NE PAS MODIFIER -->
<div id="main">

<!-- Cette checkbox sert à faire une menu sans javascript sur mobile -->
<input type="checkbox" id="menu-checkbox" class="menu-checkbox">
<label for="menu-checkbox" class="menu-toggle"> <h1> ≡ Menu </h1> </label>

	<nav>
		<ul> 
			<li><a id="first" href="main.php"> Home </a></li>
			<li><a href="#"> Practical informations </a> 

				<ul>
					<li><a href="tarif.php"> Price </a></li>
					<li><a href="horaire.php"> Opening hours </a></li>
					<li><a href="visite.php"> Calendar </a></li>
					<li><a href="localisation.php"> Access </a></li>
				</ul>
			</li>
			<li><a href="#"> Visit </a> 
				<ul>
					<li><a href="interieur.php"> Room by room visit </a></li>
					<li><a href="exterieur.php"> Walk in the garden </a></li>
					<li><a href="batimentEspace.php"> The building </a></li>
					<li><a href="salleNonVisitable.php"> Inaccessible rooms </a></li>
				</ul>
			</li>
			<li><a href="#"> History </a> 
				<ul>
					<li><a href="histoire.php"> Historical point </a></li>
					<li><a href="personnalite.php"> Famous people </a></li>
					<li><a href="friseChronologique.php"> Timeline </a></li>
				</ul>
			</li>
			<li> <a href="#"> Arts </a> 
				<ul>
					<li><a href="gravure.php"> Engravings  </a></li>
					<li><a href="cinema.php"> Film world </a></li>
				</ul>
			</li>
			<li><a href="galeriePhoto.php"> Pictures gallery </a> </li>			
			<li><a href="architecture.php"> Architecture </a></li>
			<li><a href="modelisation.php"> Rally </a></li> <!-- Projet de l'IMAC -->
			<li><a href="jeux.php"> Games & Docs </a></li>
			<li><a href="quiz.php"> Quiz </a></li>
		</ul>
	</nav>


<!-- Header générique -->
<header>                 
	<!-- Photo du background --> 

	<div class="toolbar">
			
		<ul class="languagepicker">
			<a href="#"> <li><img src="../../image/logo/english.png" alt="logo en" /> English </li></a>
			<a href="../fr/main.php"> <li><img src="../../image/logo/french.png" alt="logo fr"/> Français </li></a>
			<a href="../es/main.php"> <li><img src="../../image/logo/espagnol.png" alt="logo es"/> Español </li></a>
		</ul>

		<form method="post">
			<ul class="languagepicker themepicker">
			<a> <li>Theme</li></a>
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
		<h1> Champs-sur-marne Castle</h1>
	</div>
</header>
