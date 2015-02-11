<?php

//setup for HTML output; error checking

error_reporting(E_ALL);
ini_set('dsiplay_errors', 'On');

echo '<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="utf-8" />
<title> Mult Table </title>
</head>
<body>';
?>

<?php 

//store form data and validate
//?min-multiplicand=1&max-multiplicand=1&min-multiplier=1&max-multiplier=1 

$minMultiplicand = null;
$maxMultiplicand = null;
$minMultiplier = null;
$maxMultiplier = null;
$ready = 'true';

echo 'This is a Dynamic Multiplication Table<br><br>';

foreach ($_GET as $key => $value) {
	//echo  '<tr><td>' . $key . '<td>' . $value;
	
	if ($key == 'min-multiplicand')
	{
		$minMultiplicand = $value;
	}
	if ($key == 'max-multiplicand')
	{
		$maxMultiplicand = $value;
	}
	if ($key == 'min-multiplier')
	{
		$minMultiplier = $value;
	}
	if ($key == 'max-multiplier')
	{
		$maxMultiplier = $value;
	}

}

if (is_null($minMultiplicand))
{
	echo '<p> Missing parameter: min_Multiplicand.';
	$ready = 'false';
}
else if (!is_numeric($minMultiplicand))
{
	echo '<p> min_Multiplicand must be an integer.';
	$ready = 'false';
} 

if (is_null($maxMultiplicand))
{
	echo '<p> Missing parameter: max_Multiplicand.';
	$ready = 'false';
}
else if (!is_numeric($maxMultiplicand))
{
	echo '<p> max_Multiplicand must be an integer.';
	$ready = 'false';
} 

if (is_null($minMultiplier))
{
	echo '<p> Missing parameter: min_Multiplier.';
	$ready = 'false';
}
else if (!is_numeric($minMultiplier))
{
	echo '<p> min_Multiplier must be an integer.';
	$ready = 'false';
} 

if (is_null($maxMultiplier))
{
	echo '<p> Missing parameter: max_Multiplier.';
	$ready = 'false';
}
else if (!is_numeric($maxMultiplier))
{
	echo '<p> max_Multiplier must be an integer.';
	$ready = 'false';
} 

if ($minMultiplicand > $maxMultiplicand)
{
	echo '<p> min_Multiplicand larger than maximum';
	$ready = 'false';
}
if ($min_Multiplier > $maxMultiplier)
{
	echo '<p. min_Multiplier greater than maximum';
}

?>

<?php

//building HTML table
if ($ready == 'true')
{
	echo '<table border="1">
	<tr><td>';

	for ($i = 0; $i < ($maxMultiplier - $minMultiplier +1); ++$i)
	{
		echo '<td>' . ($minMultiplier + $i);
	}


	for ($i = 0; $i < ($maxMultiplicand - $minMultiplicand +1); ++$i)
	{
		echo '<tr><td>' . ($minMultiplicand + $i);
		for ($j = 0; $j < ($maxMultiplier - $minMultiplier +1); ++$j)
			{
				echo '<td>' . ((minMultiplicand + $i +1) * (minMultiplier + $j +2));
			}
	}

}

?>

<?php

//closing html tags

echo '</body>
</html>';

?>

