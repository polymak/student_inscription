<?php
require_once('connexion.php');

$req_see=" SELECT * FROM inscription ";

$donnees=$bddconnexion->query($req_see);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard Inscription</title>
</head>
<body>
<h2 style="margin-top: 30px;">Tableau des données d'Inscription</h2>

<table border="1" style="width: 100%; padding: 10px; ">
	
	<tr>
		<td style="font-weight: bold;">CODE MATRICULE</td> 
		<td style="font-weight: bold;">CODE FACULTE</td> 
		<td style="font-weight: bold;">DATE INSCRIPTION</td> 
		<td style="font-weight: bold;">MONTANT D'INSCRIPTION</td>
	</tr>
	<?php while ($voir=mysqli_fetch_assoc($donnees)) { ?> 
	<tr>
		<td><?php echo $voir['matricule'] ?></td>
		<td><?php echo $voir['faculte'] ?></td>
		<td><?php echo $voir['dateinscription'] ?></td>
		<td><?php echo $voir['montantinscription'] ?></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>