<!DOCTYPE html>
<html>
<head>
	<title>Exercice 2 - Date</title>
</head>
<body>

<?php 

$date = DateTime::createFromFormat('d-m-y', '23-06-17');
echo '<p>Date : ' .$date->format('d-m-y').'</p>';

?>

</body>
</html>