<!DOCTYPE html>
<html>
<head>
	<title>Exercice 3 - Date</title>
</head>
<body>

<h3>La date d'aujourd'hui est :</h3>

<?php

setlocale (LC_TIME, 'fr_FR');
strftime("%A %e %B %Y");

?>

</body>
</html>