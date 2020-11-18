<?php
require_once('connexion.php');
$sql="SELECT etudiants.nom, etudiants.prenom, etudiants.email, facultes.faculte, inscription.dateinscription, inscription.montantinscription FROM etudiants, facultes, inscription WHERE(etudiants.matricule=inscription.matricule) AND (inscription.faculte=facultes.codefaculte)";
$resultatList=$bddconnexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste des Données</title>
</head>
<body>
<h2 style="margin-top: 30px;">Liste des données pour les 3 tables relationnelles</h2>

<table border="1" style="width: 80%;  padding: 10px; ">
	
	<tr>
		<td style="font-weight: bold;">NOM</td> 
		<td style="font-weight: bold;">PRENOM</td> 
		<td style="font-weight: bold;">FACULTE</td> 
		<td style="font-weight: bold;">DATE INSCRIPTION</td>
		<td style="font-weight: bold;">MONTANT INSCRIPTION</td>
	</tr>
	<?php while ($voirlist=mysqli_fetch_assoc($resultatList)) { ?> 
	<tr>
		<td><?php echo $voirlist['nom'] ?></td>
		<td><?php echo $voirlist['prenom'] ?></td>
		<td><?php echo $voirlist['faculte'] ?></td>
		<td><?php echo $voirlist['dateinscription'] ?></td>
		<td><?php echo $voirlist['montantinscription'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>