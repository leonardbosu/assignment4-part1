<?php 	
session_start();

//setup html doc tags
echo ' <!DOCTYPE = html>
<html lang="eng">
<meta charset="utf-8"/>
<head> <title> Login </title>
<body>';

?>

<?php 	//user form

if (!isset($_SESSION['user_name']))
{
		echo 'A Username MUST be entered <br> <br> 
		Click <a href="login.php"> HERE </a> to return to the login screen';
}
else
{
	echo ' Hello ' . $_SESSION['user_name'] . ', you are logged in! <br>';
	echo 'Click <a href="login.php"> HERE </a> to return to Login<br>';
	echo 'Click <a href="content1.php"> HERE </a> to return to Content1.';
}
?>


<?php 	//close html doc tags

echo '
</body>
</html>'

?>