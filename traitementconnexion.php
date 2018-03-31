<?php
	session_start();

	$chemin = "data/admins.txt";
	if(is_file($chemin))
	{
		$tableaulogins= file($chemin);

		foreach($tableaulogins as $value)
		{
			$index = array_search($value, $tableaulogins);
			$value= trim($value);
			$tableaulogins[$index] = explode("|",$value);
		}	
	}

		
	
	if(isset($_POST['username']) && !empty(($_POST['username']))) /* Vérifie si il y a un username*/
	{
		if(isset($_POST['password']) && !empty(($_POST['password']))) /* Vérifie si il y a un password*/
		{
			foreach($tableaulogins as $value)
			{
				if( $value[0] == $_POST['username'])
				{
					if($value[1] == $_POST['password'])
					{
						$_SESSION['userisadmin'] = true;
						$_SESSION['username'] = $value[0];
						header("Location:confirmationadmin.php");
						break;
					}
					else
					{
						header("Location:connexion.php?passworderror=Mot de passe invalide.");
						break;
					}
				}
				else
				{
					header("Location:connexion.php?usernameerror=Nom d'utilisateur invalide.");
				}
			}
		}
		else
		{
			header("Location:connexion.php?passworderror=Auncun mot de passe detecté.");
		}
	}
	else
	{
		header("Location:connexion.php?usernameerror=Auncun nom d'utilisateur detecté.");
	}

?>