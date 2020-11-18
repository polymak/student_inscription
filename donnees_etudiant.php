<?php
require_once('connexion.php');

$req_see=" SELECT * FROM etudiants";

$donnees=$bddconnexion->query($req_see);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard Etudiant</title>
</head>
<body>
<h2 style="margin-top: 30px;">Tableau des données Etudiants</h2>

<table border="1" style="width: 80%;  padding: 10px; ">
	
	<tr>
		<td style="font-weight: bold;">MATRICULE</td> 
		<td style="font-weight: bold;">NOM</td> 
		<td style="font-weight: bold;">PRENOM</td> 
		<td style="font-weight: bold;">EMAIL</td>
	</tr>
	<?php while ($voir=mysqli_fetch_assoc($donnees)) { ?> 
	<tr>
		<td><?php echo $voir['matricule'] ?></td>
		<td><?php echo $voir['nom'] ?></td>
		<td><?php echo $voir['prenom'] ?></td>
		<td><?php echo $voir['email'] ?></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>