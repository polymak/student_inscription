<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page d'Inscription</title>
</head>
<body>
<h2>Page Inscription</h2>
<form action="traitement_inscription.php" method="post" style="width: 100%">
	
	
	<p><label>CODE MATRICULE: 
	<input type="text" name="matricule" required>
	</label> </p>

	<p><label>CODE FACULTE: 
	<input type="text" name="faculte" required>
	</label> </p>

	<p><label>DATE INSCRIPTION: 
	<input type="text" name="dateinscription" required>
	</label> </p>

	<p><label>MONTANT INSCRIPTION
	<input type="text" name="montantinscription" required>
	</label> <p>
	
	<input type="submit" value="ENREGISTRER">

</form>
</body>
</html>