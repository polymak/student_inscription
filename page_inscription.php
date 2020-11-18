<?php
require_once('connexion.php');
$reqEtudiant="SELECT * FROM etudiants";
$reqFaculte="SELECT * FROM facultes";
$resultatEtudiant=$bddconnexion->query($reqEtudiant);
$resultatFaculte=$bddconnexion->query($reqFaculte);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page d'Inscription</title>
</head>
<body>
<h2>Page Inscription</h2>
<form action="traitement_inscription.php" method="post" style="width: 100%">
	
	<p><label>NOM ETUDIANT:
		<select  name="matricule">
			<?php
			while ($resvoir=mysqli_fetch_array($resultatEtudiant)) 
			{?>
			
				<option value="<?php echo $resvoir['matricule'];?>"><?php echo $resvoir['nom'] ." ". $resvoir['prenom']; ?></option>

			<?php
			}
			?>
		</select>
	</label></p>

		<p><label>FACULTE:
		<select name="faculte">
			<?php
			while ($resvoir=mysqli_fetch_array($resultatFaculte)) 
			{?>
			
				<option value="<?php echo $resvoir['codefaculte'];?>"><?php echo $resvoir['faculte']; ?></option>

			<?php
			}
			?>
		</select>
	</label></p>

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

<?php
include('donnees_inscription.php');
?>