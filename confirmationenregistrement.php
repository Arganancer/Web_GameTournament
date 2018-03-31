<?php
	session_start();
	$_SESSION['currentpage'] = 'confirmation';
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
					<table class="formtable"><th> Votre tournoi a été enregistré avec succès. </th></table>
				</div>
			</div>
<?php
	include "footer.php";
?>