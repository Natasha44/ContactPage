<?php

//Access the current session
session_start();

//Evaluate the user id stored in the session that was set on validate.php
if(empty($_SESSION['user_id']))
{
	header('Location: login.html');
}


//Connect to the database
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die(mysqli_error());

//Grab the id from the url
$id = $_GET['id'];

//Write the sql
$sql = "DELETE FROM contacts WHERE id = $id";

//Write the deletion
mysqli_query($conn, $sql);

//Dissconnect
mysqli_close($conn);

//Redirect the user
header('Location: confirm.html');

?>


</body>

</html>
