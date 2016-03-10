<!doctype html>
<html>
	<!--<?php
		$nbLignes = Null;
		$nbCols = Null;
	?>-->
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
				<fieldset style="vertical-align: middle;"><legend>Connexion :</legend>
					<label for="lignes">Lignes : </label><input type="number_format" name="lignes" id="lignes" value="<?php echo($nbLignes) ?>">
					<label for="colonnes">Colonnes : </label><input type="number_format" name="colonnes" id="colonnes" value="<?php echo($nbCols) ?>">
					<input type="submit" value="Créer le tableau"></label>
					</br></br>
				<?php
					if(array_key_exists("lignes",$_POST)) {
						$nbLignes = $_POST["lignes"];
						$nbCols = $_POST["colonnes"];
					}
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