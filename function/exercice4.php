<!DOCTYPE html>
<html>
<head>
	<title>Exercice 4 - Function</title>
</head>
<body>

<?php

function operators ($num1 = 12, $num2 = 7) {

	if ($num1 > $num2) {
		echo "Le premier nombre est plus grand.";
	} elseif($num1 < $num2) {
		echo "Le premier est plus petit.";
	} else {
		echo "Les deux nombres sont identiques.";
	}
}

echo operators();

?>

</body>
</html>