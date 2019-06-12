<!DOCTYPE html>
<html lang="es">
<?php include("head.php"); ?>

    <body>

        <?php include("header.php"); ?>
            <!-- ============= Fin de menu ============== -->

            <!-- Le contenu de la page-->

            <section>
                <h2>
			Acudir al castillo
			</h2>
                <div class="info">
                    <p class="tarif">Adresse</p>
                    <div>
                        <div class="contenuTitre2">
                            <img src="../../image/photo/CourChateau_Grand.jpg" alt="Château de Champs-sur-Marne">
                            <p>
                                Dirección Castillo de Champs Sur Marne
                                <br/> 31, calle de Paris
                                <br/> 77420 Champs-Sur-Marne
                                <br/> En google Street map
                                <br/> Latitud: 48.8524
                                <br/> Longitud: 2.6049
                            </p>
                        </div>
                    </div>
                    <hr/>

                    <p class="tarif">Map</p>
                    <div id="streetMap">
                        <script src='https://static.citymapper.com/js/embed/widget.js' data-slug='2ubgkvo4wd' data-width=800></script>
                    </div>

                    <div>
                        <p class="right"><a href="https://www.google.fr/maps/dir//48.8524,2.6049/@48.852451,2.5351107,12z?hl=es" target=_blank title="Ir al castillo a través de Google Maps">Calculad vuestro itinerario
En RER</a></p>
                    </div>
                    <hr/>
                    <p class="tarif">En RER</p>
                    <div>
                        <p>
                            Línea A, bajar en Noisiel le Luzard y coger el bus n°220 ( 8 minutos) en dirección de Bry-sur-Marne, parada mairie de Champs o 20 minutos andando desde la estación de tren.
                        </p>
                        <p class="right"><a href="../image/pdf/champs_plan_transport.pdf" download="champs_plan_transport.pdf">Mapa Rer de Champs-Sur-Marne</a></p>
                    </div>
                    <hr/>
                    <p class="tarif">En coche </p>
                    <div>
                        <p>
                            <ul>
                                <li>Desde Paris: A4, salida n°10 Champs, seguir las señales de circulación chateau de Champs, 30 minutos de trayecto.</li>
                                <li>Desde provincia: A4, salida Noisiel y seguir la señales de circulación </li>
                            </ul>
                        </p>
                        <p class="right"><a href="../image/pdf/champs_plan_general.pdf" download="champs_plan_general.pdf">Mapa de Champs-Sur-Marne</a></p>
                    </div>
                </div>
            </section>

            <?php include("footer.php"); ?>

    </body>

</html>