<?php

//add 20 days 
$date = new DateTime('23-06-2017');
$date->add(new DateInterval('P20D'));
echo "Dans 2O jours ne serons le : ".$date->format('d-m-Y'). " ."; 
//13-07-2017

?>