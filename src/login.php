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

if(isset($_GET['action']) && $_GET['action'] == 'end')
{
	$_SESSION = array();
	session_destroy();

	echo ' YOU HAVE LOGGED OUT <br><br>';
}

echo ' Input User Name <br> <br>
		
	<form action="content1.php" 
	method="POST">

	<input type="text" name="username">
	<input type="submit">

	</form>';


?>


<?php 	//close html doc tags

echo '
</body>
</html>'

?>