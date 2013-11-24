<?php

	//Connect to the database
	
	//Access the current session
session_start();

//Evaluate the user id stored in the session that was set on validate.php
if(empty($_SESSION['user_id']))
{
	header('Location: login.php');
}

else
{
	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die(mysqli_error());

	//Grab the selected id number from a URL using GET
  	$sql = "SELECT * FROM contacts WHERE id = $_GET[id]";
  	$result = mysqli_query($conn, $sql) or die('Error querying database.');

 	 while ($row = mysqli_fetch_array($result)) {
		$username =  $row['username'];
		$password =  $row['password'];
		$id = $row['id'];
	} 

	//Close database connection
 	mysqli_close($conn);
}
?>

<div id="form">
<br />
<!----Form for the useer to enter their information---->
<form method="post" action="update_user.php">

<div>
	<label>Username</label>
	<input name="username" value="<?php echo $username; ?>" />
</div>
<div>
	<label>Password</label>
	<input name="password" value="<?php echo $password; ?>" />
</div>

<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" value="Save" />

</form>
</div>
</body>

</html>
