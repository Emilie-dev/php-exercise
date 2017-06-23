<?php

//sub 22 days
$date = new DateTime('23-06-2017');
$date->sub(new DateInterval('P22D'));
echo "Il y a 22 jours de cela nous étions le : ".$date->format('d-m-Y'). " .";//01-06-2017

?>
