<!DOCTYPE html>
<html lang="es">
<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>

        <section>
            <h2>
                Photo gallery
            </h2>

            <div id="searchBar">
                <form method="post">
                    Type: <select name="typeImage">

                        <option value=""> All </option>
                        <option value="interieur"> Inside </option>
                        <option value="exterieur"> Outside </option>
                        <option value="personnalites"> Personalities </option>
                        <option value="statues"> Statues </option>
                        <option value="habits"> Clothes </option>
                        <option value="tableaux"> Tables </option>
                    </select>

                    <input type="submit" name="submit" value="Validate">
                </form>
                <form method="post">
                    Search <input type="text" name="nomImage"> 
    
                    <input type="submit" name="submit" value="Search">
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