<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Application Web Student</title>
</head>
<body>
	<div>
		<div id="banner">
			<h2 style="color: #fff; text-align: center;">Une Application web pour le Système de Gestion de Base des Données Relationnelles <br/>
			(manipulation SGBDR en distance) </h2>
		</div>


		<div id=zone_body> 
				<div class="zone_gauche">
					
				<?php include("menu.php"); ?>	

			</div>
			<div class="zone_droite">
			
			<?php

			switch ($_GET['page']) {

				case 'page_etudiant':
					include('page_etudiant.php');
					break;	

				case 'page_faculte':
					include('page_faculte.php');
					break;

				case 'page_inscription':
					include('page_inscription.php');
					break;

				case 'page_liste_donnees':
					include('page_liste_donnees.php');
					break;

				default:
				include('page_accueil.php');
				break;
			}

		?>	
			</div>
		</div>
		
	</div>
<footer style="border: 5px solid #252d31; margin-top: 10px; background-color: #252d31; ">
	<h2 class="footer1">Programmé par Polycarpe Makombo</h2>
	<h3 class="footer1">Langage de programmation: HTML-CSS-PHP-MYSQL. Created 2020.</h3>
</footer>

<style> 

#banner{
	 
	margin-bottom: 20px;
	background-color: #c33351;
	border: 3px solid #c33351;

}


a {
	text-decoration: none;
	font-size: 16px;
	background-color: #00BCD4;
	color: #fff;
	border-radius: 300px;
	border-color: #00BCD4;
	border: 1px solid #00BCD4;
	padding: 5px;
	margin-left: 3px;

}



.footer1 {

	text-align: center;
	font-family: roboto;
	font-size: 25px;
	text-shadow: 0px 1px 0px;
	margin-right: 100px;
	margin-left: 100px;
	color: white;
	font-style: italic;

}

#zone_body {

	display: flex;

}

.zone_gauche {

	border: 2px solid #00BCD4;
	margin-left: 20px;
	height: 300px;
	width: 30%;
	background-color: #00BCD4;
	box-shadow: 7px 2px 20px #000000;
}

.zone_droite {

	border: 2px solid white;
	margin-left: 30px;
	width: 100%;
	height: 100%;
	padding-left: 5px;
	background-color: #fff;
	box-shadow: 7px 2px 20px #000000;
}

</style>
</body>
</html>