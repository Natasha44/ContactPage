<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
</head>
<body>


<h2 class="demoHeaders">Dialog</h2>



<!---Link for creating a new page------>
<div id="links">
<ul>
<li><a href="pages_table.php">View/ Edit Pages</a></li>
<li> | </li>
<li><a href="image.php">Edit logo</a></li>
<li> | </li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>

<?php
//Access the current session
session_start();

//Evaluate the user id stored in the session that was set on validate.php
if(empty($_SESSION['user_id']))
{
	header('Location: login.php');
}

else
{
//Write the sql command to get the list of users
$sql = "SELECT * FROM contacts ORDER BY firstName";

//Connect to the database
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die(mysqli_error());

//Execute the query an store the results in a variable
$result = mysqli_query($conn, $sql);
//echo '<script type="text/javascript">';
//Loop through the results from our query and output them one at a time to the page
while($row = mysqli_fetch_array($result))
{
 $message = 'Position: ' . $row['position']  . '\nEmail: ' . $row['email'] . '\nAddress: ' . $row['address'] . '\nPhone Number: ' .$row['phoneNumber'];
//echo $message;

   echo '<input type="button" value="' . $row['firstName'] . '" onClick="alert(\'' . $message . '\');">';
	echo '<a href="tel:'.$row['phoneNumber'].'">Call ' . $row['firstName'] . '</a>';
}

//echo '</script>';
//echo "\'Complete Sale?\'#
//echo '<input type="button" value="' . $row['firstName'] . '" onClick="confirm(' .  $message . ')">';
///echo '<script type="text/javascript">alert("Data has been submitted to ' . $message . '");</script>';
//echo '<a onClick="test('<?php echo $message 
//echo '<input type="button" VALUE="'.$row['firstName'] . '" onClick="alert("' .$message. '")"';
//echo '<input type="button" VALUE="'.$row['firstName'] . '" onClick="alert(\''.$message.'\')"'; 
//echo '<INPUT TYPE="button" VALUE="'.$row['firstName'] . '" onClick="echoHello()"';
//echo '<INPUT TYPE="button" VALUE="'.$row['firstName'] . ' ' . $row['lastName'] . '" onClick="var text = '<?php echo $name;
//echo '<INPUT TYPE="button" VALUE="'.$row['firstName'] . $row['lastName'] . '" onClick="alert('. $row['position'] . $row['phoneNumber'] . $row['email'] . $row['address'] . $row['phoneNumber'] .')">';




//Dissconnect from the database
mysqli_close($conn);
}
?>


</body>

</html>
