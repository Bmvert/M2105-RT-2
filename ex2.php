<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
				<fieldset style="vertical-align: middle;"><legend>Connexion :</legend>
					<label for="lignes">Lignes : </label><input type="number_format" name="lignes" id="lignes">
					<label for="colonnes">Colonnes : </label><input type="number_format" name="colonnes" id="colonnes">
					<input type="submit" value="Créer le tableau"></label>
					</br></br>
				<?php 
					$nbLignes = $_POST["lignes"];
					$nbCols = $_POST["colonnes"]; 
					function createHtmlTable($nbLignes, $nbCols) {
						echo "<table border = '1' ";
							for ($i = 0; $i < $nbLignes ; $i++){
							echo "<tr>";
							for ($j = 0; $j < $nbCols; $j++){
								echo "<td>{$i} - {$j}</td>";
							}
							echo "</tr>";
						}
						echo "</table>";
					}
					echo createHtmlTable($nbLignes, $nbCols);
			?>
				</fieldset>
			</form>
		</div>