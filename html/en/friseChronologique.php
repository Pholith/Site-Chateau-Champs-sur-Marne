<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>


<body>

    <?php include("header.php"); ?>

    <section>
        <h2>
            Chronological Frieze
        </h2>


        <div class="time_line">



        <!--

         La time line :

        tl_elem represente un point de la frise.
            
            <span></span> = cercle cliquable
            tl_vline = ligne horizontale
                top_line = ligne horizontale dégradée vers le haut
                bottom_line = ligne horizontale dégradée vers le base
            
            tl_info = boite de dialogue popup
                tl_info_invisible = Fermée de base
                tl_info_visible = visible

            -->







            <div class="tl_elem">

                <h3> Construction </h3>

                <span>
                    <div class="tl_vline top_line"></div>                   
                </span>             


                <div class="tl_info tl_info_invisible">             
                    <h3>Construction : 1703 - 1757 </h3>
                    <p>
                        The castle was designed, modelled and built by the architects Pierre and Baptiste Bullet de Chamblain at the request of Charles Renouard de la Touane. Then owned by Paul Poisson de Bourvallais, Louise de La Vallière and Charles François de la Baume le Blanc, the residence saw its decor change. This is particularly the case of the Chinese salon (paintings by C. Huhet).
                    </p>                    
                    <input type="button" value="Fermer">
                </div>



                <p> 1703 - 1757 </p>
            </div>






            <div class="tl_elem">

                <h3> Celebrite </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Celebrite : 1757 - 1759 </h3>
                    <p>
                        A new person settles in the castle to live there and not the least because it is about the famous Marquise de Pompadour.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 1757 - 1759 </p>
            </div>




            <div class="tl_elem">

                <h3> Deterioration </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Deterioration : 1759 - 1895 </h3>
                    <p>
                        The dominean sees a succession of many owners who sometimes occupy little interest in it. In particular, the park and the house are deteriorated.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 1759 - 1895 </p>
            </div>







            <div class="tl_elem">

                <h3> Restauration </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Restauration : 1895 - 1935 </h3>
                    <p>
                        The Cahen family of Antwerp, owner of the castle of Champs-sur-Marne, brings back to life the ancient beauty of the place. Expensive restoration programs are being implemented. In addition, the castle has been refurbished and its decor has been greatly enriched.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 1895 - 1935 </p>
            </div>




            <div class="tl_elem">

                <h3> Political </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Political : 1939 - 1971 </h3>
                    <p>
                        Surrendered to the State by Charles Cahen of Antwerp for various reasons, General De Gaulle gave the castle a political dimension (reception of foreign heads of state).
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 1939 - 1971 </p>
            </div>




            <div class="tl_elem">

                <h3> Deterioration 2 </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Deterioration 2 : 1971 - 2006 </h3>
                    <p>
                        In an economically difficult period, the domineering one experiences difficulties and starts to deteriorate again.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 1971 - 2006 </p>
            </div>





            <div class="tl_elem">

                <h3> Restauration 2 </h3>

                <span>
                    <div class="tl_vline"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Restauration 2 : 2006 - 2013 </h3>
                    <p>
                        The site is undertaking a major state-funded restoration programme.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 2006 - 2013 </p>
            </div>






            <div class="tl_elem">

                <h3> Tourism </h3>

                <span>
                    <div class="tl_vline bottom_line"></div>                    
                </span>             
                

                <div class="tl_info tl_info_invisible">             
                    <h3>Tourism : 2013 - Ajd </h3>
                    <p>
                        Reopened to tourism in 2013, the site organizes many artistic, historical and musical events or even visits.
                    </p>                    
                    <input type="button" value="Fermer">
                </div>


                <p> 2013 - Ajd  </p>
            </div>
        </div>




        <div id="text-time-line">
            To know more: click on the different dates of the timeline.
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>
</html>