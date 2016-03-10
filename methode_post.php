<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 
			//Traitement du POST
				if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
				echo "Votre nom : ".$_POST["nom"]."<br>";
				echo "Votre mot de passe (hasché en sha1) : ".sha1($_POST["password"])."<br>";
				if(isset($_POST["ckRemember"]))
					echo "Mémorisation des infos : ".(($_POST["ckRemember"]=="on")?"oui":"non");
			}
			else {
			//Affichage du Formulaire
			?>
			<div>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
					<fieldset style="vertical-align: middle;"><legend>Connexion :</legend>
						<label for="nom">Nom : </label><input type="text" name="nom" id="nom">
						<label for="password">Mot de passe : </label><input type="password" name="password" id="password">
						<input type="submit" value="Valider">
						<hr>
						<div id="remember"><input type="checkbox" id="ckRemember" name="ckRemember"><label for="ckRemember">Mémoriser mes informations de connexion</label></div>
					</fieldset>
				</form>
			</div>
		
			<?php }?>