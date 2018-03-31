<?php
	$currentpage = "";

	if(isset($_SESSION['currentpage']))
	{
		$currentpage = $_SESSION['currentpage'];
	}
		echo '
		<div id="menu">
			<ul>';
			if($currentpage == 'index')
			{
				echo '
				<li class="active"><a href="index.php">Accueil</a></li>';
			}
			else
			{
				echo '
				<li><a href="index.php">Accueil</a></li>';
			}
			if($currentpage == 'avenir')
			{
				echo '
				<li class="active"><a href="avenir.php">Tournois a&#768; venir</a></li>';
			}
			else
			{
				echo '
				<li><a href="avenir.php">Tournois a&#768; venir</a></li>';
			}
			if($currentpage == 'recherche')
			{
				echo '
				<li class="active"><a href="recherche.php">Rechercher</a></li>';
			}
			else
			{
				echo '
				<li><a href="recherche.php">Rechercher</a></li>';
			}
			if(isset($_SESSION['userisadmin']) && $_SESSION['userisadmin'] == true)
			{
				if($currentpage == 'enregistrement')
				{
					echo '
					<li class="active"><a href="enregistrement.php">Enregistrer un tournoi</a></li>';
				}
				else
				{
					echo '
					<li><a href="enregistrement.php">Enregistrer un tournoi</a></li>';
				}
				
			}
			echo
			'</ul>
		</div>';
?>