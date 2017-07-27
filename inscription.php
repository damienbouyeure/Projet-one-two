<?php  
$Identifiant=$_POST["Identifiant"];
$Mdp=$_POST["Mdp"];
$Mail=$_POST["Mail"];
$Nom=$_POST["Nom"];
$Adresse=$_POST["Adresse"];
$CP=$_POST["CP"];
$Ville=$_POST["Ville"];
$Tel=$_POST["Tel"];
require "connection.php";

$inscri="INSERT inTO franchise (Identifiant, Mdp, Mail, Nom, Adresse, CP, Ville, Tel) VALUES ( :Identifiant, :Mdp, :Mail, :Nom, :Adresse, :CP, :Ville, :Tel) ";
  $req = $conn->prepare($inscri);
  $req->execute(array(
  	'Identifiant'=> $Identifiant,
  	'Mdp'=> $Mdp,
  	'Mail'=> $Mail,
  	'Nom'=> $Nom,
  	'Adresse'=> $Adresse,
  	'CP'=> $CP,
  	'Ville'=> $Ville,
  	'Tel'=> $Tel));


header("location:accueil.php?login=1 & Id=$Id");

?>	