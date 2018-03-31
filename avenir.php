<?php
	session_start();
	$_SESSION['currentpage'] = 'avenir';
?>

<?php 
	include "header.php";
?>

<?php
	include "menu.php";
?>
			
			<div id="body">
				<?php
					include "banner.php";
				?>
				<div id="content">
				<?php
						$chemin = "data/tournois.txt";
						if(is_file($chemin))
						{
							$evenements= file($chemin);
							foreach($evenements as $evenement)
							{
								$index = array_search($evenement, $evenements);
								$evenement= trim($evenement);
								$evenements[$index] = explode("|",$evenement);								
							}	
						}
						$elementsnonvide = array_filter($_POST);
						$evenementsvaliderecherche = array(array());
						
						foreach($evenements as $evenement)
						{
							if($evenement[1] > time())
							{
								$annee =$evenement[1];
								$annee = date("Y",$annee); 
								$evenement[1] = $annee;
								$evenementsvaliderecherche[] = $evenement;
							}
						}
						$evenementsvaliderecherche = array_filter($evenementsvaliderecherche);
						if(!empty($evenementsvaliderecherche))
						{
							$_SESSION['tabresultatrecherche'] =$evenementsvaliderecherche;
							header("Location:resultatrecherche.php");
						}
				?>
				</div>
			</div>
			
<?php
	include "footer.php";
?>