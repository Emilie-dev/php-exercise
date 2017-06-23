<?php

if ($_POST['civility'] === null || $_POST['name'] === null || $_POST['surname']=== null) 
{
echo '<form method="post" action="exercice6.php">
		<select name="civility">
			<option value="Mr">Mr</option>
			<option value="Mme">Mme</option>
		</select>
		<p>Votre nom : <input type="text" name="name"/ placeholder="Nom"></p>
		<p>Votre prénom : <input type="text" name="surname" placeholder="Prénom" /></p>
		<p><input type="submit" value="OK"/></p>	
	</form>';
} else {

	echo 'Bonjour '.$_POST['civility']. ' ' .$_POST['name'].' ' .$_POST['surname'];

}

?>