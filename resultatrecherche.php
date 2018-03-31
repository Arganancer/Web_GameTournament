<?php
		session_start();
?>

<?php
	include('header.php');
?>

<?php
	include "menu.php";

			echo'<div id="body">';
			
				include("banner.php");
					
				echo'<div id="content">';					
						
						echo'<table id="resultatrecherche"> 
									<tr>
										<th>Évenement</th>
										<th>Date</th>
										<th>Ville</th>
										<th>Pays</th>
										<th>Jeu</th>
										<th>Nombre maximum de joueurs</th>
									</tr>
								';
						
						foreach($_SESSION['tabresultatrecherche'] as $evenement)
						{
							echo'<tr>';
							foreach($evenement as $info)
							{
								echo'<td>'.$info.'</td>';
							}
							echo'</tr>';
						}
						echo' 
							</table>'
							;
			    
				echo'	
				</div>
			</div>
			';
?>

<?php
	include("footer.php");
?>