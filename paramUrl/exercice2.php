<?php 

if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age'])) {

	echo 'Bonjour '.$_GET['nom'].' ' .$_GET['prenom'].'agé de' .$_GET['age'].' !';

} else {

	echo 'Veuillez renseigner nom, prénom et âge !';

}

?>