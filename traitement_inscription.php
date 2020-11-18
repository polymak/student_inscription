<?php 

require_once('connexion.php');

$matricule=$_POST['matricule'];
$faculte=$_POST['faculte'];
$dateinscription=$_POST['dateinscription'];
$montantinscription=$_POST['montantinscription'];
$sql = "INSERT INTO inscription (matricule,faculte,dateinscription, montantinscription)
VALUES ('$matricule','$faculte','$dateinscription','$montantinscription')";

if (mysqli_query($bddconnexion, $sql)) {
  echo "Enregistrement avec succès";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($bddconnexion);
}
header("location:index.php?page=page_inscription");
mysqli_close($bddconnexion);
?>