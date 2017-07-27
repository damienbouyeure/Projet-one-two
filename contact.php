	<!DOCTYPE html>
	<html>
	<head>
		
		<meta charset="utf-8">
		<title>Accueil</title>
		<?php require "stylesheet.php" ?>
		
	</head>
	<body>
		<!--bandeau d'en tete -->
		<?php require "header.php" ?>
		<?php require "connection.php" ?>

		<!--barre de navigation gauche-->
		<?php require "leftnavbar.php" ?>


		<!--corps centrale du site-->
		<?php require "corpscentral.php" ?>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<h3><u>Nous contacter</u></h3>
				</div>
				<div class="panel-body" >
					<div class="col-sm-4 col-md-4">

						<p><h4><span class="glyphicon glyphicon-pencil"></span>Par courrier :</h4></p>
						<div class="pull-right" align="right">
						<p><h5>OverCraft</h5> </p>
						<p>25 Rue Claude Tillier</p>
						<p>75012 - Paris</p>
						</div>
						<div class="row">
							<hr style="width: 100%; color: black; height: 1px; background-color:black;">
						</div>	
						<p><h4><span class="glyphicon glyphicon-phone"></span> Par telephone :	</h4></p>
						<div class="pull-right">
						<p>(+33) 01 23 45 67 89 </p>
						
						</div>
						<div class="row">
							<hr style="width: 100%; color: black; height: 1px; background-color:black;">
						</div>	
						<p><h4><span class="glyphicon glyphicon-envelope"></span>Par mail :	</h4></p>
						<div class="pull-right">
						<p><a href="maitto:contact@overcraft.com">contact@overcraft.com</a></p>
						</div>

					</div>
					<div class="col-sm-2 col-md-2">
					&nbsp
					</div>
					<div class="col-sm-6 col-md-6">

						<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.5076723287343!2d2.3861542158337516!3d48.84852890935488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720cce5cd70d%3A0x5852de9c03b61b3f!2s25+Rue+Claude+Tillier%2C+75012+Paris%2C+France!5e0!3m2!1sen!2sus!4v1496934422322"></iframe>
					</div>  	

				</div>

			</div></div>
		</div>
		<!--barre de navigation Droite-->
		<?php require "rightnavbar.php" ?>


	</div>
	<!--pied de page -->
	<?php require "footer.php" ?>     

</body>
</html>