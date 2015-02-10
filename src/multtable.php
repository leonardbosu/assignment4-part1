<?php

echo '<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="utf-8" />
<title> Mult Table </title>
</head>
<body>';

//?min-multiplicand=1&max-multiplicand=1&min-multiplier=1&max-multiplier=1 


echo 'This is a test <br><br>';

echo '<table border ="1"';

foreach ($_GET as $key => $value) {
	echo  '<tr><td>' . $key . '<td>' . $value;
	
}

echo '</table>
</head>
</html>';

?>

