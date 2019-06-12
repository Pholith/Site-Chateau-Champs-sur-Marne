<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>


<body>

    <?php include("header.php"); ?>

        <section>
            <h2>Les salles non visitables</h2>
            <h3>
                Espace réservé au personnel
            </h3>
            <div class="contenuTitre2">
                <img src="../../image/photo/sans_credit/batiment1.jpg" alt="espace dédié au personnel">
                <div>
                    <p>
                        Une partie non visitable du domaine est réservée au personnel du château. Il s’agit en fait d’une ancienne écurie vastement restaurée.
                    </p>
                    <button class="enSavoirPlus" onclick="enSavoirPlus(this);" >En savoir plus <span class="arrow"></span></button>
                    <p class="contenuPlus">
                        Des chevaux étaient présents autrefois pour accueillir les visiteurs venant en carrosse ou encore loger ceux utilisés pour la chasse.
                    </p>
                </div>
            </div>
            <div class="contenuTitre2">
                <p>
                    Un pigeonnier seigneurial datant du XVème siècle est notamment présent dans la cour de la ferme.
                </p>
                <img src="../../image/photo/espaceNonVisitable.jpg" alt="pigeonnier seigneurial">
            </div>
            <h3>
                Le laboratoire de recherche des monuments historique
            </h3>
            <div class="contenuTitre2">
                <img src="../../image/photo/LMRH.jpg" alt="logo du laboratoire de recherche des monuments historiques">
                <div>
                    <p>
                        La laboratoire de recherche des monuments historiques se situe juste à côté du château de Champs-sur-Marne.
                    </p>
                    <button class="enSavoirPlus" onclick="enSavoirPlus(this);" >En savoir plus <span class="arrow"></span></button>
                    <p class="contenuPlus">
                        Celui-ci est utilisé notamment pour la restauration de pièces historiques (recherche de méthodes et applications).
                    </p>
                </div>
            <!-- https://upload.wikimedia.org/wikipedia/commons/3/3b/Logo_LRMH_hauteur_600dpi_HD.jpg -->
            </div>
            <div class="contenuTitre2">
                <div>
                    <p>
                        Un autre espace non visitable sauf évènement spéciaux est la cuisine du château. 
                    </p>
                    <button class="enSavoirPlus" onclick="enSavoirPlus(this);" >En savoir plus <span class="arrow"></span></button>
                    <p class="contenuPlus">
                        C'est la que les plats étaient préparés par les domestiques du domaine, destinés aux propriétaires ainsi qu'aux invités de marques.
                    </p>
                </div>
                <img src="../../image/photo/cuisineChateau.jpg" alt="la cuisine du chateau">
            </div>
        </section>


        <?php include("footer.php"); ?>

</body>
</html>