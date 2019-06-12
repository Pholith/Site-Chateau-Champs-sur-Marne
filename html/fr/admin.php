<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>

<?php
if (isset($_POST["disconnect"])) {
	session_unset(); // détruit les variables de session
}
$badPass = false;
if (isset($_POST["mdp"])) {
	if ($_POST["mdp"] !=  "password here") {
		$badPass = true;
	} else {
		$_SESSION["mdp"] = $_POST["mdp"];
	}
}

?>

<body>

	<section>
		<h1> Page administrateur </h1> 
		<?php 

		// Si l'utilisateur n'est pas connecté
		if (!isset($_SESSION["mdp"])) {
			print('<h2> Accès administrateur uniquement </h2>');
			if ($badPass) {
				print("Mauvais mot de passe");
			}
			print('
			<form method="post" class="admin-choice">
			Mot de passe administrateur: <input type="password" name="mdp">
			<input type="submit" value="Se connecter">
			</form>
			</section>
			</body>
			</html>');
			return;
		} 

		require_once("../../phpFiles/adminClasses.php");
		require_once("../../phpFiles/adminParser.php");

		// Affichage du menu de sélection des fichiers
		//if (!isset($_POST["fileToModifie"])) {
			print('
			<form method="post" class="admin-choice" style="display: inline; ">
			<select name="fileToModifie" style="margin-top: 1.5em;">');

			// On fait la liste des fichiers modifiables
			$impossibleChangeList = array("admin.php", "head.php", "header.php", "footer.php");
			foreach(glob($log_directory.'../*/*.*') as $file) {
				
				$canBeChanged = true;
				for ($i=0; $i < sizeof($impossibleChangeList); $i++) { 
					if (strpos($file, $impossibleChangeList[$i]) != false)  {
						$canBeChanged = false;
						break;
					}
				}
				if (!($canBeChanged)) {
					continue;
				}
				if (isset($_POST["fileToModifie"]) && $_POST["fileToModifie"] == $file) {
					print('<option value="'.$file.'" selected> ' . $file . '</option>');
				}
				print('<option value="'.$file.'"> ' . $file . '</option>');

			}
			print(' 
			</select>');
			// on affiche le bouton que s'il va marcher
			if (isset($_POST["fileToModifie"])) {
				print('<input type="button" onclick="window.location.href=\''.$_POST["fileToModifie"].'\';" value="Voir la page">');
			}
			print('
			<input type="submit" value="Modifier">
			</form>');
			// bouton de déconnection
			print('<form style="display: inline;" method="post" class="admin-choice">
			<input type="hidden" name="disconnect" value="1"> 
			<input type="submit" value="Se déconnecter">
			</form> <hr/>');

		//}

		// Si l'utilisateur à déjà choisi la page et qu'il veut la modifier
		if (isset($_POST["fileToModifie"])) {

			// Lecture de la page html
			$filename = $_POST["fileToModifie"];
			$myfile = fopen($filename, "r") or die ("Unable to open file!");
			$content = fread($myfile, filesize($filename));
			fclose($myfile);

			// Fonctions de parsing du HTML
			$array = detectBalise($content);
			$arrays = buildBalise($array);
			$result = buildBaliseTree($arrays[0], $arrays[1]);

			// Si l'utilisateur a envoyé ses modifications
			if (isset($_POST["modifie"])) {
	
				// Si l'utilisateur a ajouté une balise
				if (isset($_POST["baliseToAdd"])) {
					$newBalise = new Balise($_POST["typeOfBalise"], "Nouvel élément", false);
					if ($_POST["typeOfBalise"] == "img") {
						$newBalise->addAttribute(new Attribute("src","../../image/photo/main.jpg"));
					}

					// on met la balise au bon endroit
					$baliseSelected = Balise::getBaliseWithId($_POST["baliseToAdd"]);
					$baliseParent = Balise::getParentOf($baliseSelected);
					if ($baliseParent != null) {
						$baliseParent->addBalise($newBalise);
					}
				}

				// Si l'utilisateur a supprimé une balise
				if (isset($_POST["baliseToDelete"])) {
					$baliseSelected = Balise::getBaliseWithId($_POST["baliseToDelete"]);
					$baliseParent = Balise::getParentOf($baliseSelected);
					if ($baliseParent != null) {
						$baliseParent->removeBalise($baliseSelected);
					}
				}


				$newPage = "<!DOCTYPE html>\n";
				// On parcourt tous les id possibles
				for ($i=0; $i < sizeof($result); $i++) {
					$balise = Balise::getBaliseWithId($i);
					if ($balise == null) {
						continue;
					}
					// On modifie les balises modifiés
					if (isset($_POST[$i])) {
						$balise->modifieByInput($_POST[$i]);
					}
				}
				$newPage .= $result[0]->toString();
				// écriture de la page (non formatté malheureusement)
				$myfile = fopen($filename, "w") or die ("Unable to open file!");
				fwrite($myfile, $newPage);
			}
			else // Si l'utilsateur est dans la page de modification
			{
				print('<table class="admin-choice">');
				print('<form method="post">');
				print('<tr> <td colspan="2"> <h1 style="border-radius: 15px; padding: 2px; font-size: 1.3em;"> Eléments de la page: </h1> </td> </tr>');
				foreach ($result as $balise) {
					if ($balise->toForm() != "") {
						print('<tr> <td>');
						print($balise->getName());
						print("</td> <td>\n");
						print($balise->toForm());
						print('</tr>  </td>');
						}
				}
				//print($result[0]->toString());


				// Formulaire de confirmation 
				print('<tr> <td colspan="2"> <hr> </td> </tr>
				<tr> <td colspan="2">');

				print('
				<input type="hidden" name="modifie" value="1"> 
				<input type="hidden" name="fileToModifie" value="'.$filename.'">
				<input type="submit" value="Confirmer Modifications">
				<input type="reset" value="Effacer Modifications"> 
				</form>');
		
				print('<form method="post" class="admin-choice" style="display: inline;">
				<input type="submit" value="Retour Menu Sans Modifier">
				</form>');
				
				// Pour rajouter une balise
				print('<tr> <td colspan="2"> <hr> </td> </tr>
				<tr> <td colspan="2">');

				print('<form method="post" class="admin-choice">
				Ajouter un élément <select name="baliseToAdd">');

				foreach ($result as $balise) {
					if ($balise->toForm() != "") {
						print('<option value="'.$balise->getId().'"> Après '.$balise->getName() . '</option>');
					}
				}
				print('</select> de type: 
				<select name="typeOfBalise">');
				$listOfNames = array("p", "h1", "h2", "h3", "h4", "h5", "h6", "li", "figure", "figcaption", "img");
				foreach ($listOfNames as $name) {
					print('<option value="'.$name.'"> '.$name. '</option> ');
				}

				print('</select>
				<input type="hidden" name="modifie" value="1"> 
				<input type="hidden" name="fileToModifie" value="'.$filename.'">
				<input type="submit" value="Ajouter">
				</form>');


				// Pour supprimer une balise
				print('<tr> <td colspan="2"> <hr> </td> </tr>
				<tr> <td colspan="2">');

				print('<form method="post" class="admin-choice">
				Supprimer l\'élément <select name="baliseToDelete">');

				foreach ($result as $balise) {
					if ($balise->toForm() != "") {
						print('<option value="'.$balise->getId().'"> '.$balise->getName() . '</option>');
					}
				}
				print('</select>
				<input type="hidden" name="modifie" value="1"> 
				<input type="hidden" name="fileToModifie" value="'.$filename.'">
				<input type="submit" value="Supprimer">
				</form>');

				// Texte 
				print('<tr> <td colspan="2"> <hr> </td> </tr>
				<tr> <td colspan="2">');
				print('Pour des changements plus précis (menu, bas de page, liens, images, etc.), veuillez contacter le web master.');

				print('</td> </tr> </table>');
				
			}
		}
		?>


	</section>
</body>
</html>