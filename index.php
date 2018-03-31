<?php
	session_start();
	$_SESSION['currentpage'] = 'index';
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
					<p class="greeting">Motherboard a fait ses débuts en 2020 en tant que plateforme de communication pour les réfugiés 
					de la mère IA, ne sachant pas que c'était le début de quelque chose de beaucoup plus grand. Aujourd'hui, 
					des centaines de milliards de personnes font confiance à Motherboard pour les garder branchés à leurs 
					tournois de jeux préférés, entre autres choses.</p>
					
					<p class="greeting">Nous nous sommes engagés à fournir un service fiable et facile à utiliser pour la communauté des jeux, 
					et nous sommes constamment en train de construire des améliorations en cours de route.</p>
					
					<p class="greeting">Merci à tous ceux qui nous ont soutenus, et rappelez-vous,</p>

					<p class="greeting" id="motherboard">« Motherboard is watching »</p>

				</div>
			</div>
			
<?php
	include "footer.php";
?>