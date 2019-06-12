<?php 
include('connexion.inc.php') ;

if (isset($_POST["typeImage"]) || isset($_POST["nomImage"])) {

    // Recherche par tags
    if (isset($_POST["nomImage"])) {
        $nom = $_POST["nomImage"];
        $req = "SELECT * FROM projet_photos WHERE name like '%".$nom."%';";

    // Recherche par nom (barre de recherche)
    } else if (isset($_POST["typeImage"])) {
        $serv = $_POST["typeImage"];
        $req = "SELECT * FROM projet_photos WHERE tags like  '%".$serv."%';";
    }

    $result = $bd->query($req);
    $cnt = 0; 
    while($line = $result -> fetch(PDO::FETCH_NUM)){

        if($cnt%2==0)
            print('<div class="contenuTitre2">');

        print('               
        <figure>
            <a href="../../image/photo/'.$line[1].'"><img src="../../image/photo/'.$line[1].'" alt="'.$line[0].'"/></a>
            <figcaption>'.$line[0].'</figcaption>
        </figure>
        ');

        if($cnt%2==1)
            print('</div>');

        $cnt++;
    }
}
?>