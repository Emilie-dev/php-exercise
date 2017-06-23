<!DOCTYPE html>
<html>
<head>
	<title>Exercice 1 - Date</title>
</head>
<body>

<p>Bonjour, aujourd'hui nous sommes le :</p>

<?php 

$date = DateTime::createFromFormat('d/m/Y', '23/06/2017');
echo $date->format('d/m/Y');

?>

</body>
</html>

