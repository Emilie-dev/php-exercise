<?php 

if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) {
	
	echo 'Bonjour, voici la date début '.$_GET['dateDebut'].' et voici la date de fin '.$_GET['dateFin'].' .' ;
} else {

	echo "error!";
}

?>