<?php 

require_once('connexion.php');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];

$req1="INSERT INTO etudiants (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";

$sqlreq = $bddconnexion->query($req1);

header("location:index.php?page=page_etudiant");

?>