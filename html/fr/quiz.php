<!DOCTYPE html>
<html lang="fr">

<?php 
    include("head.php"); 

    ?>

<body>

    <?php include("header.php"); ?>

        <!-- ======  DEBUT DE LA PARTIE A MODIFIER  ======= -->

        <section>
            <?php
            
            include("../../phpFiles/connexion.inc.php");

            if (isset($_POST["choix1"])) {
                //Gestion des réponses du formulaire
                $req = "SELECT COUNT(*) AS `nbQuestions` FROM QUESTION;";//Nombre total de questions
                $res = $bd->query($req);
                if ($res) {
                    print('<h2>Quiz culturel</h2>
                    <form method="POST" action="quiz.php">');
                    $ligne = $res-> fetch(PDO::FETCH_ASSOC);
                    $nombreDeQuestions = $ligne["nbQuestions"];
                    $nbBonneReponses = 0;
                    $i=0;
                    while ($i<$nombreDeQuestions) {//Pour chaque questions
                        $numQuestion = $_POST["choix".$i][0];
                        $question = "SELECT intituleQ FROM QUESTION WHERE idQ = ".$numQuestion.";";//Récupération de l'intitulé de la question
                        $question = $bd->query($question);
                        if ($question) {
                            $questionPosee = $question-> fetch(PDO::FETCH_ASSOC);
                            print("
                            <div>
                                <legend>".$questionPosee["intituleQ"]."</legend>
                                ");

                                $reponses = "SELECT idR, intituleR, bonneReponse FROM REPONSE WHERE idQ = ".$numQuestion.";";//Récupération des réponses à la question
                                $reponses = $bd->query($reponses);
                                if ($reponses) {
                                    while ($reponsesAQuestion = $reponses-> fetch(PDO::FETCH_ASSOC)) {//Pour toutes réponses à la question
                                        if ($reponsesAQuestion["bonneReponse"] == 1) {//Bonne réponse
                                            print('
                                            <input type="radio">
                                            <label style="color: green;">'.$reponsesAQuestion["intituleR"].'</label>
                                            <br/>
                                                ');
                                            $nbBonneReponses++;
                                        } else if ($reponsesAQuestion["idR"] % 4 == $numQuestion) {//Mauvaise réponse de l'utilisateur
                                            print('
                                            <input type="radio">
                                            <label style="color: red;">'.$reponsesAQuestion["intituleR"].'</label>
                                            <br/>
                                                ');
                                            $nbBonneReponses--;
                                        } else {//Mauvaise réponse non sélectionnée par l'utilisateur
                                            print('
                                            <input type="radio">
                                            <label>'.$reponsesAQuestion["intituleR"].'</label>
                                            <br/>
                                                ');
                                        }
                                    }
                                    $reponses -> closeCursor();
                                }

                                print("
                                </div>
                                    ");
                            $question -> closeCursor();
                        }
                        $i++;
                    }
                    print('
                    </form>
                    <p> 
                        Vous avez '.$nbBonneReponses.' bonnes reponses sur '.$i.'.
                    </p>
                        ');
                    $res -> closeCursor();
                }
            } else {
                //Gestion de l'affichage du formulaire
                $req = "SELECT * FROM QUESTION;";//Toutes les questions
                $result = $bd->query($req);
                if ($result) {
                    $i=0;//Numéro de question
                    print('<h2>Quiz culturel</h2>
                    <form method="POST" action="quiz.php">');
                    while ($ligne = $result-> fetch(PDO::FETCH_ASSOC)) {
                        print("
                            <div>
                                <legend>".$ligne["intituleQ"]."</legend>
                                ");
                        $req2 = "SELECT intituleR FROM REPONSE R NATURAL JOIN QUESTION WHERE R.idQ = ".$ligne["idQ"].";";//Toutes les réponses à la question
                        //Toutes les réponses associées
                        $result2 = $bd->query($req2);
                        if ($result2) {
                            $j=0;//Numéro de réponses
                            while ($ligne2 = $result2-> fetch(PDO::FETCH_ASSOC)) {//Pour toutes les réponses
                                print('
                                <input type="radio" name="choix'.$i.'" value="'.$i.'_'.$j.'" id="'.$i.'_'.$j.'">
                                <label for="'.$i.'_'.$j.'">'.$ligne2["intituleR"].'</label>
                                <br/>
                                    ');
                                $j++;
                            }
                            $result2 -> closeCursor();
                        }
                        print("
                            </div>
                                ");
                        $i++;
                    }
                    print('<input type="submit" value="Envoyer les réponses" id="form-send">
                    </form>
                        ');
                    $result -> closeCursor();
                }
            }
            ?>
        </section>

        <?php include("footer.php"); ?>

</body>

</html>