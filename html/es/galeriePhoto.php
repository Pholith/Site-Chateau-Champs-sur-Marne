<!DOCTYPE html>
<html lang="es">
<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>

        <section>
            <h2>
            Galería de fotos
            </h2>

            <div id="searchBar">
                <form method="post">
                Tipo: <select name="typeImage">

                        <option value=""> Todo </option>
                        <option value="interieur"> Interior </option>
                        <option value="exterieur"> Exterior </option>
                        <option value="personnalites"> Personalidades </option>
                        <option value="statues"> Estatuas </option>
                        <option value="habits"> Ropa </option>
                        <option value="tableaux"> Tablas </option>
                    </select>

                    <input type="reset" name="reset" value="Borrar"> 
                    <input type="submit" name="submit" value="Confirmar">
                </form>
                <form method="post">
                Buscar <input type="text" name="nomImage"> 
    
                    <input type="reset" name="reset" value="Borrar"> 
                    <input type="submit" name="submit" value="Buscar">
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