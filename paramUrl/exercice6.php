<?php 

if (isset($_GET['batiment']) AND isset($_GET['salle'])) {
	
	echo 'Bonjour, vous êtes attendu au bâtiment n° '.$_GET['batiment'].' à la salle n° '.$_GET['salle'].' .' ;
} else {

	echo "error!";
}

?>