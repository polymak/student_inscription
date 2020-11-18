<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Etudiant</title>
</head>
<body>
<h2>Page Etudiant</h2>

<form action="traitement_etudiant.php" method="post" style="width: 100%">
	
	<label>NOM:</label>
	<input type="text" name="nom"  required>
	<label>PRENOM:</label>
	<input type="text" name="prenom" required>
	<label>EMAIL:</label>
	<input type="email" name="email" required>
	<input type="submit" value="ENREGISTRER">

</form>
</body>
</html>

<?php

include('donnees_etudiant.php');

?>