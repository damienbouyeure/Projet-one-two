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
          Modifier votre compte
        </div>
        <div class="panel-body" >
          <?php
          require "connection.php";

          $Id_client=$_SESSION["Id_client"];

          if (isset($_POST["Modifier"])) {
            $bdd= mysqli_connect("localhost","root","","overcraft");
            $Identifiant=$_POST["Identifiant"];
            $Mdp=$_POST["Mdp"];
            $Mail=$_POST["Mail"];
            $Nom=$_POST["Nom"];
            $Adresse=$_POST["Adresse"];
            $CP=$_POST["CP"];
            $Ville=$_POST["Ville"];
            $Tel=$_POST["Tel"];


            $modif = "update franchise set Identifiant=:Identifiant, Mdp=:Mdp, Mail=:Mail, Nom=:Nom, Adresse=:Adresse, CP=:CP, Ville=:Ville, Tel=:Tel where id_client=:Id_client" ;
            $req = $conn->prepare($modif);
            $req->execute(array(
              'Identifiant'=> $Identifiant,
              'Mdp'=> $Mdp,
              'Mail'=> $Mail,
              'Nom'=> $Nom,
              'Adresse'=> $Adresse,
              'CP'=> $CP,
              'Ville'=> $Ville,
              'Tel'=> $Tel,
              'Id_client' => $Id_client));


            $_SESSION["Identifiant"]=$Identifiant;
            $_SESSION["Id_client"]=$Id_client;


// header("location:accueil.php");
 
          }


          $recup="select * from franchise where id_client=:Id_client";
          $query = $conn->prepare($recup);
          $query->execute(array('Id_client'=>$Id_client));
          $ligne=$query->fetchall(PDO::FETCH_ASSOC);

          ?>
          <form  method="post" action="votreCompte.php" class="form-horizontal">
            <div class="form-group">
             <label for="Identifiant" class="col-md-3 control-label">Identifiant :</label>
             <div class="col-md-9">
               <input type="text" name="Identifiant"  value="<?php echo $ligne[0]["Identifiant"]; ?>"  class="form-control">

             </div>
             <label for="MotdePasse" class="col-md-3 control-label">Mot de passe :</label>
             <div class="col-md-9"><input type="password" name="Mdp"  value="<?php echo $ligne[0]["Mdp"]; ?>"  class="form-control">

             </div>


             <label for="email" class="col-md-3 control-label">Email :</label>
             <div class="col-md-9">
              <input type="email" name="Mail" value="<?php echo $ligne[0]["Mail"]; ?>" class="form-control">              
            </div>

            <label for="Nom" class="col-md-3 control-label">Nom :</label>
            <div class="col-md-9">
              <input type="text" name="Nom"  value="<?php echo $ligne[0]["Nom"]; ?>" class="form-control"> </div>

              <label for="Adresse" class="col-md-3 control-label">Adresse :</label>
              <div class="col-md-9">
                <input type="text" name="Adresse"  value="<?php echo $ligne[0]["Adresse"]; ?>" class="form-control"></div>

                <label for="Ville" class="col-md-3 control-label">Ville :</label>
                <div class="col-md-9">
                 <input type="text" name="Ville"  value="<?php echo $ligne[0]["Ville"]; ?>" class="form-control">
               </div>
               <label for="CodePostal" class="col-md-3 control-label">Code Postal :</label>
               <div class="col-md-9">

                 <input type="text" name="CP" maxlength="5" value="<?php echo $ligne[0]["CP"]; ?>" class="form-control">
               </div>
               <label for="tel" class="col-md-3 control-label">Telephone :</label>

               <div class="col-md-9">
                 <input type="text" name="Tel" maxlength="10" value="<?php echo $ligne[0]["Tel"]; ?>" class="form-control"></div>
                 <div class="col-md-12">&nbsp</div>  

                 <div class="form-group">
                  <div class=" col-md-10"></div>	                                
                  <div class="col-md-2">	      


                    <input type="submit" name="Modifier" value="Modifier" class="btn btn-success">

                    <input type="reset" name="supprimer" value="supprimer" onclick="location.href='supprimer.php'" class="btn btn-danger">
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