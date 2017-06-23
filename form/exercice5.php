<!DOCTYPE html>
<html>
<head>
	<title>Exercice 5 - Form</title>
</head>
<body>

<p>Veuillez vous identifier :</p>

<form method="post" action="exercice5.php">

	<select name="civility">
		<option value="Mr">Mr</option>
		<option value="Mme">Mme</option>
	</select>
	<p>Votre nom : <input type="text" name="name"/ placeholder="Nom"></p>
	<p>Votre prénom : <input type="text" name="surname" placeholder="Prénom" /></p>
	<p><input type="submit" value="OK"/></p>	

</form>

<?php
echo 'Bonjour '.$_POST['civility']. ' ' .$_POST['name'].' ' .$_POST['surname'].' .</br>';
?>

</body>
</html>