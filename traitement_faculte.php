<?php 

require_once('connexion.php');

$faculte=$_POST['faculte'];

$req1="INSERT INTO facultes (faculte) VALUES ('$faculte')";

$sqlreq = $bddconnexion->query($req1);


header("location:index.php?page=page_faculte");
?>