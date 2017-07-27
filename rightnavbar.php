
        <div class="col-sm-2 col-md-2">

<?php
if (isset($_SESSION['Identifiant']))
{ ?>

<!--barre de navigation utilisateur-->

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h4 class="panel-title">
						<a  href="votreCompte.php">Votre Compte</a>
				      	</h4>
                    
                	</div>
           		 </div>	

                 <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h4 class="panel-title">
						<a  href="panier.php">Panier</a>
				      	</h4>
                    
                	</div>
           		 </div>	

                 <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h4 class="panel-title">
						<a  href="portail.php">portail</a>
				      	</h4>
                    
                	</div>
           		 </div>	

                 <div class="panel panel-default">
                    <div class="panel-heading">
                    	<h4 class="panel-title">
						<a  href="deco.php">Deconnexion</a>
				      	</h4>
                    
                	</div>
           		 </div>	
             </div>
        </div>

<?php


}

else
{ 

if(isset($_GET["error"]))
{
	echo "<script>alert('Mauvais identifiant ou mot de passe'); </script>";
}


?>

<!--Barre de login-->

<div class="panel panel-default">
			  	<div class="panel-heading">
			  	<h3 class="panel-title">CONNEXION</h3>
			  	</div>
			  	<div class="panel-body">
				<form class="login" method="post" action="log.php" align="center">
					<fieldset>
			    	  	<div class="form-group">
			    	  		<input class="form-control" type="text" name="Identifiant" placeholder="Votre identifiant" required>
			    	  	</div>
			    		<div class="form-group">
							<input class="form-control" placeholder="Mot de passe" type="password" name="Mdp">
						</div>
		<input type="submit" name="submit" value="Connexion" class="btn btn-success btn-block">
		<input type="button" name="inscri" value="Pas encore inscrit ?" onclick="location.href='formInscription.php'" class="btn  btn-info btn-block">
			    	</fieldset>
			      	</form>
			    </div>
			</div> <?php  }?>

</div>