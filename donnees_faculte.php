<?php
require_once('connexion.php');

$req_see=" SELECT * FROM facultes";

$donnees=$bddconnexion->query($req_see);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard Faculte</title>
</head>
<body>
<h2 style="margin-top: 30px;">Tableau des données Facultées</h2>

<table border="1" style="width: 40%; padding: 10px; ">
	
	<tr>
		<td style="font-weight: bold;">CODEFACULTE</td> 
		<td style="font-weight: bold;">FACULTE</td> 
	</tr>
	<?php while ($voir=mysqli_fetch_assoc($donnees)) { ?> 
	<tr>
		<td><?php echo $voir['codefaculte'] ?></td>
		<td><?php echo $voir['faculte'] ?></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>