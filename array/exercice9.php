<?php

$HautsDeFrance = array(
	'02' => 'Aisne',
	'59' => 'Nord',
	'60' => 'Oise',
	'62' => 'Pas-de-Calais',
	'80' => 'Somme', 
	);

array_push($HautsDeFrance, array('51' => 'Marne'));
//print_r($HautsDeFrance);


foreach($HautsDeFrance as $Departements){
	echo'- '.$Departements.'<br/>';
}

?>