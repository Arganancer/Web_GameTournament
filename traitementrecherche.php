<?php
	session_start();

	$chemin = "data/tournois.txt";
	if(is_file($chemin))
	{
		$evenements= file($chemin);

		foreach($evenements as $evenement)
		{
			$index = array_search($evenement, $evenements);
			$evenement= trim($evenement);
			$evenements[$index] = explode("|",$evenement);
			$annee = $evenements[$index][1];
			$annee = date("Y",$annee); 
			$evenements[$index][1] = $annee;
		}	
	}
	$elementsnonvide = array_filter($_POST);
	$evenementsvaliderecherche = array(array());
	
	foreach($evenements as $evenement)
	{
		$elementspresents = array_intersect($elementsnonvide, $evenement);
		if( (count($elementspresents)) == (count($elementsnonvide)))
		{
			$evenementsvaliderecherche[] = $evenement;
		}			
	}
	
	$evenementsvaliderecherche = array_filter($evenementsvaliderecherche);
	if(!empty($evenementsvaliderecherche))
	{
		$_SESSION['tabresultatrecherche'] =$evenementsvaliderecherche;
		header("Location:resultatrecherche.php");	
	}
	else
	{
		header("Location:recherche.php?errorrecherche=Aucun résultat correspondant à la recherche.");
	}
?>


