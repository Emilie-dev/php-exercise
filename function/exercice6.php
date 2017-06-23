<!DOCTYPE html>
<html>
<head>
	<title>Exercice 6 - Function</title>
</head>
<body>

<?php

function identity($firstname = "Tralala", $surname = "Toto", $age = 33) {
	echo 'Bonjour '.$firstname.' '.$surname.' , tu as '.$age.' ans.';
}

echo identity();

?>

</body>
</html>