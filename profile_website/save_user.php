<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<?php

//Set complete flag to check if the page is valid
$complete = true;

//Check the username
if(empty($_POST['username']))
{
	echo 'Enter your username<br />';
	$complete = false;
}

//Check the password
if(empty($_POST['password']))
{
	echo 'Enter your password<br />';
	$complete = false;
}

//Compare passwords
if($_POST['password'] != $_POST['confirm_password'])
{
	echo 'Enter matching passwords<br />';
	$complete = false;
}

//Check the email
if(empty($_POST['email']))
{
	echo 'Enter your email<br />';
	$complete = false;
}


//Check our completion flag and if true connect and save to the database
if ($complete)
{
	//Connect
	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die('Could not connect: ' . mysqli_error());
	
	//Hash the password and save it to a valriable
	$password = sha1($_POST['password']);
	
	//Write our SQL connect to add the new admin user
	$sql = "INSERT INTO admins (username, password, email) VALUES 
			('$_POST[username]' , '$password' , '$_POST[email]')";
			echo $sql;
			
	//Run the SQL
	$result = mysqli_query($conn, $sql);
	
	//Dissconnect from the database
	mysqli_close($conn);
	
	echo 'Registration saved.';
}
header('Location: user_table.php');
?>

</body>
</html>