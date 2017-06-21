<!DOCTYPE html>
<html>
<head>
	<title>Exercice 7 - Function</title>
</head>
<body>

<?php

function selection($age, $gender = "femme" || "homme") {

	if ($age > 18 && $gender = homme || femme) {
		echo 'Vous êtes un(e) '.$gender.' et vous êtes majeur.';
	} else {
		echo 'Vous êtes un(e) '.$gender.' et vous êtes mineur.';
	} 
}

echo selection(12, "homme");
?>

</body>
</html>