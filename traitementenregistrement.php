<?php	
	session_start();
	
	$erreurnom = '';
	$erreurdate = '';
	$erreurville = '';
	$erreurjeu = '';
	$erreurjoueurs = '';
	
	$pays = array
	(
		"Tokyo" => "Japon",
		"Vancouver" => "Canada",
		"Nassau" => "Bahamas",
		"Oslo" => "Norvege",
		"Boston" => "USA",
		"Barcelone" => "Espagne",
		"Paris" => "France",
		"Stockholm" => "Suede",
		"Los Angeles" => "USA",
		"Londres" => "UK",
		"New York" => "USA",
		"Longueuil" => "Canada",
		"Shangai" => "Chine",
		"Quebec" => "Canada",
		"Dublin" => "Irlande",
	);
	
	$chemin = "data/tournois.txt"; /* borrowed from traitementrecherche.php */
	if(is_file($chemin))
	{
		$evenements = file($chemin);

		foreach($evenements as $evenement)
		{
			$index = array_search($evenement, $evenements);
			$evenement = trim($evenement);
			$evenements[$index] = explode("|",$evenement);
		}	
	}
	
	if(isset($_POST['nom']) && !empty(($_POST['nom']))) /* validates event name */
	{
		if(strlen($_POST['nom']) <= 30) /* Event name can't be longer than 30 characters */
		{
			foreach($evenements as $evenement)
			{
				if($evenement[0] == $_POST['nom'])
				{
					$erreurnom = 'Ce nom de tournoi existe déjà.';
				}
			}
		}
		else
		{
			$erreurnom = 'Le nom de tournoi ne doit pas dépasser 30 caractères.';
		}
	}
	else
	{
		$erreurnom = 'Le nom de tournoi doit contenir au moins un caractère.';
	}
	
	if(isset($_POST['year']) && !empty(($_POST['year']))) /* check event year */
	{
		if(isset($_POST['month']) && !empty(($_POST['month']))) /* check event month */
		{
			if(isset($_POST['day']) && !empty(($_POST['day']))) /* check event day */
			{
				if($_POST['year'] < date('Y'))
				{
					$erreurdate = "L'événement ne doit pas être dans le passé.";
				}
				else if($_POST['year'] == date('Y'))
				{
					if($_POST['month'] < date('m'))
					{
						$erreurdate = "L'événement ne doit pas être dans le passé.";
					}
					else if($_POST['month'] == date('m'))
					{
						if($_POST['day'] < date('d'))
						{
							$erreurdate = "L'événement ne doit pas être dans le passé.";
						}
					}
				}
			}
			else
			{
				$erreurdate = "La journée doit être inscrite.";
			}
		}
		else
		{
			$erreurdate = "Le mois doit être inscrit.";
		}
	}
	else
	{
		$erreurdate = "L'année doit être inscrite.";
	}

	if(isset($_POST['ville']) && !empty(($_POST['ville'])))
	{
		if(strlen($_POST['nom']) > 15) /* town name can't be longer than 15 characters */
		{
			$erreurville = "Le nom de la ville ne peut pas dépasser 15 caractères.";
		}
	}
	else
	{
		$erreurville = "Le nom de la ville doit contenir au moins un caractère.";
	}
	
	if(isset($_POST['jeu']) && !empty(($_POST['jeu'])))
	{
		if(strlen($_POST['nom']) > 30) /* game name can't be longer than 30 characters */
		{
			$erreurjeu = "Le nom du jeu ne peut pas dépasser 30 caractères.";
		}
	}
	else
	{
		$erreurjeu = "Le nom du jeu doit être inscrit.";
	}
	
	if(!isset($_POST['joueurs']) || empty(($_POST['joueurs'])))
	{
		$erreurjoueurs = "Le nombre de joueurs doit être inscrit.";
	}
	
	if($erreurnom != '' || $erreurdate != '' || $erreurville != '' || $erreurjeu != '' || $erreurjoueurs != '')
	{
		header("Location:enregistrement.php?erreurnom=".$erreurnom."&erreurdate=".$erreurdate."&erreurville=".$erreurville."&erreurjeu=".$erreurjeu."&erreurjoueurs=".$erreurjoueurs);
	}
	else
	{
		/* Determine Country */
		$country = "Unknown";
		foreach ($pays as $ville => $country1)
		{
			if ($_POST['ville'] == $ville)
			{
				$country = $country1;
			}
		}
		
		/* Convert Date */
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		if($day < 10)
		{
			$day = '0' + $day;
		}
		if($month < 10)
		{
			$month = '0' + $month;
		}
		$time = strtotime($day.'/'.$month.'/'.$year);
		
		$data = $_POST['nom'].'|'.$time.'|'.$_POST['ville'].'|'.$country.'|'.$_POST['jeu'].'|'.$_POST['joueurs'];
		$contenu = file_get_contents($chemin);
		$contenu .= "\r\n$data";
		file_put_contents($chemin, $contenu);
		header("Location:confirmationenregistrement.php");
	}
?>