<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Accueil</title>
	<?php require "stylesheet.php" ?>
</head>
<body>
	<!--bandeau d'en tete -->
	<header>
		<?php require "header.php" ?>




	</header>


	<!--barre de navigation-->
<?php require "leftnavbar.php" ?>


<!--corps centrale du site-->
<?php require "corpscentral.php" ?>

	<div id="signupbox"  >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                            	Formulaire d'inscription	
                            </div>
	<div class="panel-body" >
    <form  method="post" action="inscription.php" class="form-horizontal">


    <div class="form-group">
       <label for="Identifiant" class="col-md-3 control-label">Identifiant :</label>
       <div class="col-md-9">
       <input type="text" name="Identifiant" placeholder="Identifiant" class="form-control" required>
         </div>
      <label for="MotdePasse" class="col-md-3 control-label">Mot de passe :</label>
      <div class="col-md-9">
       <input type="password" name="Mdp" placeholder="Mot de passe" class="form-control" required>
      </div>


       <label for="email" class="col-md-3 control-label">Email :</label>
        <div class="col-md-9">
        <input type="email" name="Mail" placeholder="mail@mail.com" class="form-control" required>
        </div>


      <label for="Nom" class="col-md-3 control-label">Nom :</label>
      <div class="col-md-9">
      <input type="text" name="Nom" placeholder="Votre nom" class="form-control" required>
      </div>

      <label for="Adresse" class="col-md-3 control-label">Adresse :</label>
      <div class="col-md-9">
      <input type="text" name="Adresse"  placeholder="Votre adresse" class="form-control" required>
      </div>  


      <label for="Ville" class="col-md-3 control-label">Ville :</label>
       <div class="col-md-9">
       			<input type="text" name="Ville" placeholder="votre ville" class="form-control" required>
       	</div>
       	<label for="CodePostal" class="col-md-3 control-label">Code Postal :</label>
       	       <div class="col-md-9">
       			<input type="text" name="CP"  maxlength="5" placeholder="Code Postal" class="form-control" required>
		</div>
      
<label for="tel" class="col-md-3 control-label">Telephone :</label>
       	       <div class="col-md-9">
 <input type="text" name="Tel" maxlength="10" placeholder="N° de Tel" class="form-control" required>
 		</div> 
       <div class="col-md-12">&nbsp</div>  

      <div class="form-group ">
      <div class=" col-md-10"></div>	                                
     <div class="col-md-2">

	<input type="submit" name="valider" value="Accepter" class="btn btn-success">

<input type="reset" name="annuler" value="annuler" onclick="location.href='accueil.php'" class="btn btn-info">
</div></div>
                            </form>
                         </div>
                    </div>                    </div>                    </div>
    </div>
     </div> 
	<!--barre de navigation Droite-->
	<?php require "rightnavbar.php" ?>


        </div>
         
      <!--pied de page -->
    <?php require "footer.php" ?>    
</body>

</html>