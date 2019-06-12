<?php
//Renvoie true s'il sagit d'une balise php
function isPhp(String $string) {
    $size = strlen($string);
    if ($size > 7) {
        if ($string[0] == "<" && $string[1] == "?" && $string[2] == "p" && $string[3] == "h" && $string[4] == "p" && $string[$size - 2] == "?" && $string[$size - 1] == ">") {
            return true;
        }
    }
    return false;
}

//Renvoie true s'il sagit d'une balise orphan
function isorphan(String $string) {
    $size = strlen($string);
    if ($size > 6) {
        if ($string[0] == "<" && $string[1] == "i" && $string[2] == "m" && $string[3] == "g" && $string[$size - 1] == ">") {
            return true;
        }
    }
    if ($size > 8) {
        if ($string[0] == "<" && $string[1] == "i" && $string[2] == "n" && $string[3] == "p" && $string[4] == "u" && $string[5] == "t" && $string[$size - 1] == ">") {
            return true;
        }
    }
    if (isPhp($string)) {
        return true;
    }
    if ($size > 3) {
        return  ($string[0] == "<" && $string[$size - 2] == "\\" && $string[$size - 1] == ">") || ($string == "<br/>" || $string == "<hr/>" || $string == "<img/>");
    }
}

//Renvoie true s'il s'agit d'une balise fermante
function isClosedBalise(String $string) {
    $size = strlen($string);
    if ($size > 3) {
        return $string[0] == "<" && $string[1] == "/" && $string[$size - 1] == ">";
    }
}

// Prend en paramètre une string de balise fermante html et renvoie son name
function nameClosedBalise(String $string) {
    return trim(substr($string, 2, - 1));
}

//Renvoie un tableau de toutes les balises et contenus détectés dans l'ordre
function detectBalise(String $string) {
    //Decommenter le code
    $tab = preg_split("/(?=<!--)([\s\S]*?)-->/", $string); // match aussi les commentaires multilines omg
    $string = "".join($tab);

    $array = array(); //Liste de balises / contenu
    $arrayIndice = -1; //Indice de l'array actuel pour concaténer les lettres
    $catchBalise = false; //true -> balise, false -> contenu
    $php = false; //true -> balise + contenu php détecté

    for ($i=0; $i<strlen($string); $i++) {
        $letter = $string[$i];
        if ($letter == "<" && !$php) {//début de balise
            if ($string[$i + 1] == "?" && $string[$i + 2] == "p" && $string[$i + 3] == "h" && $string[$i + 4] == "p") {
                $php = true;
            }
            $catchBalise = true;
            array_push($array, "");
            $arrayIndice++;
        }
        /*if ($catchBalise) {
            print("<em>$letter</em>");
        } else {
            print("<strong>$letter</strong>");
        }*/
        $array[$arrayIndice] .= $letter;
        if ($letter == ">" && !$php) {//fin de balise
            $catchBalise = false;
            array_push($array, "");
            $arrayIndice++;
        }
        if ($letter == "?" && $php) {
            if ($string[$i + 1] == ">") {//fin de balise php
                $php = false;
            }
        } 
    }
    // Pour retirer le <DOCTYPE html> 
    $array = array_slice($array, 2);
    // On nettoie les whitespaces avec trim
    for ($i=0; $i < sizeof($array); $i++) { 
        $array[$i] = trim($array[$i]);
    }
    return $array;
}
// Split une balise
// Prend en paramètre une balise html
// Renvoie un tableau contenant les différentes parties de la balise
function cutBalise(String $string) {
    $size = strlen($string);
    if ($string[0] == "<" && $string[$size - 1] == ">") {
        if ($string[1] == "/") {
            $min = 2;
        } else {
            $min = 1;
        }
        if ($string[$size - 2] == "/") {
            $size--;
        }
        $contenuBalise = "";
        for ($i=$min; $i<$size-1; $i++) {
            $contenuBalise .= $string[$i];
        }
        $contenuBalise = preg_split ('/=?"/', $contenuBalise);
        if (sizeof($contenuBalise) != 0) {
            $result = explode(" ", $contenuBalise[0]);
            for ($i=1; $i<sizeof($contenuBalise); $i++) {
                array_push($result, $contenuBalise[$i]);
            }
        }
        return $result;
    }
}

// Prend en paramètre la liste du contenu de la page web splité
// Renvoie une liste d'objets de la classe Balise
// Renvoie aussi une liste des names des balises dans l'ordre
function buildBalise(Array $array) {
    $listeBalise = array();
    $listeOrdonneenameBalise = array();

    // Pour toutes les balises (index paires)
    for ($i=0; $i < sizeof($array); $i+=2) {

        // Si c'est une balise d'ouverture, on créé la balise selon le type 
        if (!isClosedBalise($array[$i])) {
            if (isPhp($array[$i])) {
                $baliseToPush = new Balise("php", $array[$i], false);
                array_push($listeBalise, $baliseToPush);
                array_push($listeOrdonneenameBalise, "php");
                continue;
            }

            // construction des attributs
            $baliseArray = cutBalise($array[$i]);
            if (sizeof($baliseArray) != 0) {
                $orphan = isOrphan($array[$i]);
                $baliseToPush = new Balise($baliseArray[0], $array[$i + 1], $orphan);

                if ($orphan) {
                    array_push($listeOrdonneenameBalise, "|".$baliseArray[0]);
                } else {
                    array_push($listeOrdonneenameBalise, $baliseArray[0]);
                }
                $attributes = array();
                for ($j=1; $j < sizeof($baliseArray); $j+=2) { //Pour chaque attribut
                    if ($baliseArray[$j] != "" && sizeof($baliseArray) > $j + 1) { //pas sur
                        $baliseToPush->addAttribute(new Attribute($baliseArray[$j], $baliseArray[$j + 1]));
                    }
                }
                array_push($listeBalise, $baliseToPush);
            }
        } else {
            array_push($listeOrdonneenameBalise, "/".nameClosedBalise($array[$i]));

            // S'il y a du texte qui ne devrait pas être là derrière la balise fermante, 
            // on le met dans une balise span et on l'ajoute à la dernière balise ajouté
            if ($i +1 <= sizeof($array) && sizeof($listeBalise) > 0 && $array[$i+1] != "") {
                $listeBalise[sizeof($listeBalise) -1 ]->addBalise(new Balise("span", $array[$i+1], false));
            }
        }
    }

    $result = array();
    array_push($result, $listeBalise);
    array_push($result, $listeOrdonneenameBalise);
    return $result;
}
// Appel d'une fonction récursive pour finaliser le tableau de balise
// Renvoie le tableau de balise utilisable
function buildBaliseTree(Array $listeBalise, Array $listenameBalise) {
    buildBaliseTreeRec($listeBalise, $listenameBalise, 0, 1);

    //print($listeBalise[0]->toString());
    return $listeBalise;
}

// Fonction récursive qui ajoute les balises dans les balises
function buildBaliseTreeRec(Array $listeBalise, Array $listenameBalise, $indiceDebutLigne, $indiceBalise) {
    $nameBaliseARechercher = "/".$listenameBalise[$indiceDebutLigne];
    $indiceBaliseDepart = $indiceBalise - 1;
    for ($indice = $indiceDebutLigne + 1; $indice < sizeof($listenameBalise); $indice++) { //Pour chaque name de balise
        //print("($nameBaliseARechercher) --> ".$listenameBalise[$indice].", $indiceBalise -- ");
        if ($listenameBalise[$indice] != $nameBaliseARechercher) {
            if ($listenameBalise[$indice][0] == "|" || $listenameBalise[$indice] == "php") {//orphan ou php
                $listeBalise[$indiceBaliseDepart]->addBalise($listeBalise[$indiceBalise]);
                $indiceBalise++;
            } else if ($listenameBalise[$indice][0] == "/") {
                
            } else {
                $array = buildBaliseTreeRec($listeBalise, $listenameBalise, $indice, $indiceBalise + 1);
                $listeBalise[$indiceBaliseDepart]->addBalise($array[0]);
                $indice = $array[1];
                $indiceBalise = $array[2];
            }
        } else {
            $array = array();
            array_push($array, $listeBalise[$indiceBaliseDepart]);
            array_push($array, $indice);
            array_push($array, $indiceBalise);
            return $array;
        }
    }
}
?>