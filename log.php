<?php  

	session_start();
require "connection.php"; 
if(isset($_POST["submit"]))
{
	$Identifiant=$_POST["Identifiant"];
	$Mdp=$_POST["Mdp"];

$sql = "SELECT * FROM franchise WHERE Identifiant=? AND 
  Mdp=? ";
    $query = $conn->prepare($sql);
    $query->execute(array($Identifiant,$Mdp));
$row=$query->fetchall(PDO::FETCH_ASSOC);


$id_client=$row[0]['id_client'];



 if($query->rowCount() >= 1) {
		$_SESSION["Identifiant"]=$Identifiant;
		$_SESSION["Id_client"]=$id_client;

	header("location:accueil.php");
}
else
{
	header("location:accueil.php?error=1");
}
}
?>