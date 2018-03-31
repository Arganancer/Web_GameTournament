<?php
	session_start();
	$_SESSION['currentpage'] = 'connexion';
?>

<?php 
	include "header.php";
?>

<?php
	include "menu.php";
?>

<div id="body">
	<div id="form">
		<table class="formtable">
			<tr>
			<form action='traitementconnexion.php' method='POST'> 
				<td>Nom d'utilisateur:</td> <td><input type='text'  class='inputtext' name='username' maxlength='8'> <p id='usernameerror'></td>
					<td><p class='error' id='usernameerror'>

					<?php

						if(isset($_GET['usernameerror']) && !empty(($_GET['usernameerror'])))
						{
							echo $_GET['usernameerror'];
						} 
						
					?>
					</p> <!-- message d'erreur en cas de username invalide-->
					</td>
				</tr>		
				<td>Mot de passe:</td> <td><input type='password' class='inputtext' name='password' maxlength='8'></td>
					<td><p class='error' id='passworderror'>
					<?php

						if(isset($_GET['passworderror']) && !empty(($_GET['passworderror'])))
						{
							echo $_GET['passworderror'];
						} 
						
					?>
					</p>
					</td>
					</tr>
					<tr>
				<th><button class="button" type='submit'value='submit'>Connexion</button></th><
				</tr>
			</form>
		</table>
	</div>
</div>

<?php
	include "footer.php";
?>



