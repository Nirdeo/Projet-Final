<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LiveQuestion</title>
	<link rel="stylesheet" type="text/css" href="style/connexionStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>
<body>

	<?php require("navbar.php"); ?>

	<?php
	require("PHP/connexion.php");

	session_start();

	$co = connexionBdd();

	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		// $password = hash("sha256", $_POST["password"]);
		$password = $_POST["password"];
		$query = $co->prepare('SELECT * FROM utilisateurs WHERE pseudo=:username and mot_de_passe=:pass');
		$query->bindParam(":username", $username);
		$query->bindParam(":pass", $password);
		$query->execute();
		$result = $query->fetchall();
		$rows = $query->rowCount();
		if ($rows == 1) {
			$_SESSION["username"] = $username;
			echo "<p>Vous vous etes connecter au nom de " . $_SESSION['username'] . "</p>";
		}else {
			$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
	}

	?>

	<div class="loginBox">
		<h1>Se connecter</h1>
		<form action="" method="post" name="login">
			<p>Nom d'Utilisateur</p>
			<input type="text" name="username" placeholder="Enter votre nom d'utilisateur">
			<p>mot de passe</p>
			<input type="password" name="password" placeholder="Enter votre mot de passe">
			<input type="submit" name="submit" value="valider">
			<p>Vous n'avez pas de compte ? <a href="inscription.php"> S'inscrire maintenant !</a></p>
		</form>
	</div>
	<?php
	if (! empty($message)) {
		echo "<p>$message</p>";
	}
	?>

	<?php require("footer.php"); ?>
</body>
</html>