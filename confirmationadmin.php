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
					<table class="formtable"><th> Vous pouvez maintenant enregistrer des tournois dans le système. </th></table>
				</div>
			</div>
<?php
	include "footer.php";
?>