<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Faculte</title>
</head>
<body>
<h2>Page Faculté</h2>
<form action="traitement_faculte.php" method="post" style="width: 100%">
	
	<label>FACULTE:</label>
	<input type="text" name="faculte"  required>
	
	<input type="submit" value="ENREGISTRER">

</form>
</body>
</html>

<?php

include('donnees_faculte.php');

?>