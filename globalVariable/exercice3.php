<?php

setcookie('login', 'toto', time() + 365*24*3600, null, null, false, true);
setcookie('password', '1234', time() + 365*24*3600, null, null, false, true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Exercice 3 - GlobalVariable</title>
</head>
<body>

	<h2>Exercice sur les cookies :</h2>

	<form method="post" action="exercice4.php">
		<input type="text" name="login" placeholder="login">
		<input type="password" name="password">
		<input type="submit" name="submit" value="OK">
	</form>

</body>
</html>