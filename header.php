<?php
	echo
	'<!doctype html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>';
			if(isset($_SESSION['currentpage'])){echo $_SESSION['currentpage'];}
			echo
			'</title>
			<script src="js/galerie.js"></script>
			<link href="css/styles.css" rel="stylesheet" />
			<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
		</head>
		<body onload="banner()">
			<div id="main"> <!-- main div contains all other divs -->
			
			<!--
			Site contains 4 main divs:
			1: header
			2: menu
			3: body
			4: footer
			-->
			
				<div id="header">
					<div id="logo">
						<img src="img/logo.png"> 
					</div>
					<div id="banner">
						<div id="connection">';
							if(isset($_SESSION['userisadmin']) && $_SESSION['userisadmin'] == true)
							{
								echo '<p> Bienvenue '.$_SESSION['username'].' <a href="traitementdeconnexion.php">d&eacuteconnexion</a></p>';
							}
							else
							{
								echo '<a href="connexion.php">Connexion</a> <!-- Lien de test pour connexion.php -->';
							}
						echo
						'</div>
						<div id="image">
							<img id="imgimage" src="img/motherboard.png">
						</div>
					</div>
				</div>
				
				<div class="clear"></div>';
?>