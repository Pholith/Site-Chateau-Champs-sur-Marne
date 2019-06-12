<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>

        <section>
            <h2>
                Galerie photo
            </h2>

            <div id="searchBar">
                <form method="post">
                    Type: <select name="typeImage">

                        <option value=""> Tout </option>
                        <option value="interieur"> Interieur </option>
                        <option value="exterieur"> Exterieur </option>
                        <option value="personnalites"> Personnalites </option>
                        <option value="statues"> Statues </option>
                        <option value="habits"> Habits </option>
                        <option value="tableaux"> Tableaux </option>
                    </select>

                    <input type="reset" name="reset" value="Effacez"> 
                    <input type="submit" name="submit" value="Validez">
                </form>
                <form method="post">
                    Rechercher <input type="text" name="nomImage"> 
    
                    <input type="reset" name="reset" value="Effacez"> 
                    <input type="submit" name="submit" value="Rechercher">
                </form>
            </div>

            <?php
                include('../../phpFiles/galerieScriptPhp.php') ;
            ?>

        </section>

        <?php include("footer.php"); ?>

    </div>
</body>
</html>