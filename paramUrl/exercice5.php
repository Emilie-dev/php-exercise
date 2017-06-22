<?php 

if (isset($_GET['semaine'])) {
	
	echo 'Bonjour, nous sommes à la semaine '.$_GET['semaine'].' .' ;
} else {

	echo "error!";
}

?>