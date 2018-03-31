<?php
	session_start();
	$_SESSION['currentpage'] = 'enregistrement';
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
					<form action='traitementenregistrement.php' method='POST'>
						<table class="formtable">
							<tr> 
								<td align="right" class="name">Nom d'événement:</td> <td><input class='inputtext' type="text" name="nom" maxlength='30'></td>
							</tr>
							<tr>
								<td class="error" colspan="2"><?php
									if(isset($_GET['erreurnom']) && !empty($_GET['erreurnom']))
									{
										echo $_GET['erreurnom'];
									}
								?></td>
							</tr>
							
							<tr>
								<td align="right" class="name">Ville:</td> <td><input class='inputtext' type="text" name="ville"></td>
							</tr>
							<tr>
								<td class="error" colspan="2"><?php
									if(isset($_GET['erreurville']) && !empty($_GET['erreurville']))
									{
										echo $_GET['erreurville'];
									}
								?></td>
							</tr>
							
							<tr>
								<td align="right" class="name">Jeu:</td> <td><input class='inputtext' type="text" name="jeu"></td>
							</tr>
							<tr>
								<td class="error" colspan="2"><?php
									if(isset($_GET['erreurjeu']) && !empty($_GET['erreurjeu']))
									{
										echo $_GET['erreurjeu'];
									}
								?></td>
							</tr>

							<tr>
								<td align="right" class="name">Nombre maximum de joueurs:</td> <td><input class="value" type="number" name="joueurs"></td>
							</tr>
							<tr>
								<td class="error" colspan="2"><?php
									if(isset($_GET['erreurjoueurs']) && !empty($_GET['erreurjoueurs']))
									{
										echo $_GET['erreurjoueurs'];
									}
								?></td>
							</tr>
					<!--</table> -->
						<!--<table class="formtable"> -->
							<tr>
								<?php
									include "dateform.php";
								?>
							</tr>
							<tr>
								<td class="error" colspan="3"><?php
									if(isset($_GET['erreurdate']) && !empty($_GET['erreurdate']))
									{
										echo $_GET['erreurdate'];
									}
								?></td>
							</tr>
							<tr><td align="center" colspan="3"><input class="button" type="submit" value="enregistrer"></td></tr>
						</table>
					</form>
				</div>
			</div>
			
<?php
	include "footer.php";
?>