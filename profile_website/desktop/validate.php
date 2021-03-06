<!--File Name: validate.php
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the projects validation file in which the users login information will be validated to see if the username 
	and password are correct or incorrect-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Validate</title>
</head>

<body>

<?php

//Connect to the database
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die('Could not connect: ' . mysqli_error());

//Save the username and password in variables
$username = $_POST['username'];
//Hash the password
$password = sha1($_POST['password']);

//Write the SQL statement
$sql = "SELECT id FROM users WHERE password = '$password' and username = '$username'";

//Excecute query and store the result in a variable
$result = mysqli_query($conn, $sql) or die('Error querying database');

//See if there is results that match the users input
$count = mysqli_num_rows($result);

//If login exist in database, allow user to log in, otherwise, deny access
if($count == 1)
{
	while($row = mysqli_fetch_array($result))
	{
		session_start();
		$_SESSION['user_id'] = $row['id'];
		echo "<script> window.location.replace('contact_table.php'); </script>";
	
		//header("Location: contact_table.php");
	}
}

else
{
	echo '<script>alert("Invalid login")</script>';
	echo "<script> window.location.replace('login.php'); </script>";
}

//Close database connection
mysqli_close($conn);

?>
</body>

</html>
