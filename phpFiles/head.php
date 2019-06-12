
<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}



// Gestion des couleurs
if (isset($_POST["colorChanging"])) {
	$_SESSION["color"] = $_POST["colorChanging"];
}

?>
