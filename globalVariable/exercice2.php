<!DOCTYPE html>
<html>
<head>
	<title>Exercice 2 - GlobalVAriable</title>
</head>
<body>

<h2>Exercice sur les sessions : </h2>

<?php

session_start();

$_SESSION['nom'] = 'Tralala';
$_SESSION['prenom'] = 'Toto';
$_SESSION['age'] = 32;

?>

<a href="session.php">Clique-moi !</a>



</body>
</html>