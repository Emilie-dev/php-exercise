<?php 

if (isset($_GET['langage']) AND isset($_GET['serveur'])) {
	
	echo 'Le langage utilisé est '.$_GET['langage'].' et le serveur utilisé est un serveur '.$_GET['serveur'].' .' ;
} else {

	echo "error!";
}

?>