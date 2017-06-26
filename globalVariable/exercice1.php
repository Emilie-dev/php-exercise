
<!DOCTYPE html>
<html>
<head>
	<title>Exercice 1 - GlobalVariable</title>
</head>
<body>


<?php

echo '<h5>Votre User Agent est : </h5>'.$_SERVER['HTTP_USER_AGENT'].'</br>';
echo '<h5>Votre Adresse IP est : </h5>'.$_SERVER['REMOTE_ADDR'].'</br>';
echo '<h5>Le nom de votre serveur est : </h5>'.$_SERVER['SERVER_NAME'];

?>

</body>
</html>