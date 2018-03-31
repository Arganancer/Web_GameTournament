<?php
	session_start();
	$_SESSION['currentpage'] = 'recherche';
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
					<div class="form">
						<table class="formtable">
							<tr>
							<form action='traitementrecherche.php' method='POST'>
								<td align="right">Nom d'événement:</td> <td><input type='text'  class='inputtext' name='nomevenement' maxlength='30'></td>
							</tr>
							<tr>
								<td align="right">Année :</td> <td><select name="annee" class="value">
									<option value"2017">2017</option>
									<option value"2015">2015</option>
									<option value"2016">2016</option>
									<option value"2018">2018</option>
									<option value"2019">2019</option>
								</select></td>
							</tr>
							<tr><td align="right">Ville:</td> <td><input type='text'  class='inputtext' name='ville' maxlength='15'></td></tr>
							<tr><td align="right">Jeu:</td><td> <input type='text'  class='inputtext' name='jeu' maxlength='30'></td></tr>
							<tr><th colspan="2"><button class="button" type='submit' value='submit'>Rechercher</button></th></tr>
							<tr><td><p class="error" id="errorrecherche">
								
								<?php
										
									if(isset($_GET['errorrecherche']) && !empty(($_GET['errorrecherche'])))
									{
										echo $_GET['errorrecherche'];
									} 
								
								?></p></td></tr>
								
							</form>
						</table>	
					</div>
				</div>
			</div>
			
<?php
	include "footer.php";
?>