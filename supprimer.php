
<?php
session_start();
$Id_client=$_SESSION["Id_client"];
require "connection.php";
$sql = "DELETE FROM franchise WHERE Id_client=? ";
 $query = $conn->prepare($sql);
	$query->execute(array($Id_client));
session_destroy();

header("location:accueil.php");
?>
