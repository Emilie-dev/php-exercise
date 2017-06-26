<!DOCTYPE html>
<html>
<head>
	<title>TP - Date</title>
</head>
<body>

<h4>Calendrier :</h4>


<?php

$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

for ($annees = 1900; $annees >= 2030; $annees++) {
		echo $annees;
}

$calendrier = cal_days_in_month(CAL_GREGORIAN, $mois, $annees);
echo $calendrier;


?>

</body>
</html>