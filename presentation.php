<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Qui sommes nous?</title>
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
				<h3><u>Qui sommes nous?</u></h3>
				</div>
				<div class="panel-body" >
					<div class="col-sm-4 col-md-4">
						<p>Nous sommes la société OverCraft, nous sommes une centrale d'achat de produit informatique pour notre groupe de franchisé et particulier.</p>
						<p>Notre société propose deux solution differentes informatique:</p>
						<li>Notre premiere solution est une solution bureautique</li>
						<li>La deuxieme une solution professionnel, adapté a votre entreprise et votre corps de metiers, avec les logiciels de votre choix!</li>

					</div>
					<div class="col-sm-8 col-md-8">
					<img src="logoOverCraft.png" class="img-responsive">
						
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