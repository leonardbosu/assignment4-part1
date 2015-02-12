<?php 
session_start();	

//setup html doc tags

echo ' <!DOCTYPE = html>
<html lang="eng">
<meta charset="utf-8"/>
<head> <title> Login </title>
<body>';

?>

<?php 	//hand user login



//below code snippet taken from example at http://php.net/manual/en/session.idpassing.php

if (!isset($_SESSION['views']))
{
	$_SESSION['views'] = 1;
}
else
{
	$_SESSION['views']++;
}

if (!isset($_SESSION['user_name']))
{
	if ($_POST["username"] == null || $_POST["username"] == "")
	{
		echo 'A Username MUST be entered <br> <br> 
			Click <a href="login.php?action=end"> HERE </a> to return to the login screen';

	}
	else
	{
		$_SESSION['user_name'] = $_POST["username"];
		echo ' Hello ' . $_SESSION['user_name'] . '! You have visited this page ' . $_SESSION['views'] . ' times before. <br> <br> Click <a href="login.php?action=end"> HERE </a> to logout.';
		echo ' Click <a href="content2.php"> HERE </a> to content2.';
	}
}
else
{
	echo ' Hello ' . $_SESSION['user_name'] . '! You have visited this page ' . $_SESSION['views'] . ' times before. <br> <br> Click <a href="login.php?action=end"> HERE </a> to logout.';
	echo ' Click <a href="content2.php"> HERE </a> to content2.';
}

?>


<?php 	//close html doc tags

echo '
</body>
</html>'

?>