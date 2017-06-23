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
echo $interval->format('%R%a days');

?>

</body>
</html>