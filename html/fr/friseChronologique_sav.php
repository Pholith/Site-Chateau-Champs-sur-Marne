<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>


<body>

    <?php include("header.php"); ?>

        <section>
            <h2> Frise Chronologique </h2>
            <div class="time_line">
                <div class="time_line_elmt" onclick="afficherConstruction()"> 
                        <time datetime="2013">
                            1703 - 1757
                        </time>
                        <h3> Construction </h3>


                        
                        <!--
                        <p>
                            Le château est imaginé, modélisé et fait construire par les architectes Pierre et Baptiste Bullet de Chamblain sous la demande de Charles Renouard de la Touane. Ensuite possédée par Paul Poisson de Bourvallais, Louise de La Vallière puis par Charles François de la Baume le blanc, la demeure voit son décor changer. C'est notamment le cas du salon Chinois (peintures de C. Huhet).
                        </p>   
                        -->
                    </div>

                <div class="time_line_elmt" onclick="afficherCelebrite()" >
                    <time datetime="2013">
                            1757 - 1759
                    </time>
                    <h3> Célébrité </h3>
                    <!--
                    <p>
                        Une nouvelle personne s'installe dans le château pour y vivre et pas des moindres car il sagit de la célèbre marquise de Pompadour.
                    </p>    
                    -->
                </div>

                <div class="time_line_elmt" onclick="afficherDeterioration()">
                    <time datetime="2013">
                            1759 - 1895
                    </time>
                    <h3>
                        Carelessness
                    </h3>
                    <!--
                    <p>
                        Le dommaine voit se succéder de nombreux propriétaires qui parfois occupent peu d'intérêt à celui-ci. Le parc et la demeure sont notamment détériorés.
                    </p>
                    -->
                </div>

                <div class="time_line_elmt" onclick="afficherRestauration()">
                    <time datetime="2013">
                        1895 - 1935
                     </time>
                    <h3>
                        Restauration
                    </h3>
                    <!--
                    <p>
                        La famille Cahen d'Anvers, propriétaire du château de Champs-sur-Marne fait renaître l'ancienne beauté du lieu. Des programmes onéreux de restauration sont mis en place. De plus, le château est remeublé et son décor s'enrichit énormément.
                    </p>
                    -->
                </div>
            </div>
 
            <div class="time_line">
                <div class="time_line_elmt" onclick="afficherPolitique()">
                    <time datetime="2013">
                            1939 - 1971
                    </time>
                    <h3>
                            Politique
                    </h3>
                    <!--
                    <p>
                        Cédé à l'Etat par Charles Cahen d'Anvers pour diverses raisons, le général De Gaulle donne au château une dimention politique (acceuil des chefs d'Etat étrangers).
                    </p>
                    -->
                </div>

                <div class="time_line_elmt" onclick="afficherDeterioration2()">
                        <time datetime="2013">
                            1971 - 2006
                        </time>
                        <h3>
                            Effacement
                        </h3>
                        <!--
                        <p>
                            Dans une période économiquement difficile, le dommaine connaît des difficultés et recommencer à se dégrader
                        </p>
                        -->
                    </div>

                <div class="time_line_elmt" onclick="afficherRestauration2()">
                    <time datetime="2013">
                        2006 - 2013
                    </time>
                    <h3>
                        Restauration
                    </h3>
                    <!--
                    <p>
                        Le site entreprends un vaste programme de restauration financé par l'Etat.
                    </p>
                    -->
                </div>

                <div class="time_line_elmt" onclick="afficherTourisme()">
                    <time datetime="2013">
                        2013 - Ajd
                    </time>
                    <h3>
                        Tourisme
                    </h3>
                        <!--
                        <p>
                            Réouvert au tourisme depuis 2013, le site organise de nombreux évènements artistiques, historiques et musicaux ou encore des visites.
                        </p>
                        -->
                </div>
            </div>

            <div id="text-time_line">
                <span > En savoir plus: cliquez sur les différentes dates de la frise chronologique. </span>
            </div>
        </section>


        <?php include("footer.php"); ?>

</body>
</html>