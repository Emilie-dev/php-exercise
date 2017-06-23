<!DOCTYPE html>
<html>
<head>
	<title>Exercice 5 - Date</title>
</head>
<body>

<?php

$dateTime1 = new DateTime('2016-05-16');
$dateTime2 = new DateTime('2017-06-23');
$interval = $dateTime1->diff($dateTime2); 
echo "Il y a ".$interval->format('%R%a days')." d'interval entre le vendredi 23 juin 2017 et le lundi 16 mai 2016 !";

?>

</body>
</html>