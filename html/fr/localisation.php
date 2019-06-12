<!DOCTYPE html>
<html lang="fr">
<?php include("head.php"); ?>

<body>

	<?php include("header.php"); ?>
		<!-- ============= Fin de menu ============== -->

		
		<!-- Le contenu de la page-->

		<section>
			<h2>
				Se rendre au chateau
			</h2>
			<div class="info">
				<p class="tarif">Adresse</p>
				<div>
					<div class="contenuTitre2">
						<img src="../../image/photo/CourChateau_Grand.jpg" alt="Château de Champs-sur-Marne">
						<p>
							Château de Champs-sur-Marne<br/>
							31, rue de Paris<br/>
							77420 Champs-sur-Marne<br/>
							Latitude : 48.8524<br/>
							Longitude : 2.6049<br/>
						</p>
					</div>
				</div>
				<hr/>

				<p class="tarif">Map</p>
				<div id="streetMap">
				<script  src='https://static.citymapper.com/js/embed/widget.js' data-slug='2ubgkvo4wd' data-width=800 ></script>
			</div>

				<div>
					<p class="right"><a href="https://www.google.fr/maps/dir//48.8524,2.6049/@48.852451,2.5351107,12z/data=!3m1!4b1" target=_blank title="Rendez-vous au château via Google Maps">Calculez votre itinéraire</a></p>
				</div>
				<hr/>
				<p class="tarif">En RER</p>
				<div>
					<p>
						Ligne A, descendre à Noisiel le Luzard puis prendre le bus n°220 (8 minutes) direction Bry-sur-Marne, arrêt mairie de Champs ou 20 minutes à pied de la gare.
					</p>
					<p class="right"><a href="../image/pdf/champs_plan_transport.pdf" download="champs_plan_transport.pdf">Carte RER de Champs-sur-Marne</a></p>
				</div>
				<hr/>
				<p class="tarif">En voiture</p>
				<div>
					<p>
						<ul>
							<li>De Paris : A4, sortie n°10 Champs, suivre le fléchage "château de Champs", 30 min de trajet.</li>
							<li>De province : A4, sortie Noisiel suivre le fléchage.</li>
						</ul>
					</p>
					<p class="right"><a href="../image/pdf/champs_plan_general.pdf" download="champs_plan_general.pdf">Carte de Champs-sur-Marne</a></p>
				</div>
			</div>
		</section>

		<?php include("footer.php"); ?>

</body>
</html>