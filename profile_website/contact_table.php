<!--File Name: contact_table.php
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the projects contact table file in which the all the busines contacts are shown and have attached information-->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
		<link href='style.css' rel='stylesheet'/>
		<link rel="stylesheet" href="themes/purple.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

	</head>
	<body>

		<!------------------------------------------------------------------------------------------------------>
		<!---------------------------------------------------CONTACTS------------------------------------------->
		<!------------------------------------------------------------------------------------------------------>

		<!--Header of the page-->
		<div data-role="header" data-position="inline">
			<h1>Contacts</h1>
			<a href="index.html" data-role="button">Home</a>

		</div>
		<!--Page content-->
		<div data-role="content">
			<!--Logo-->
			<div>
				<img src="img/sunset.jpg" alt="image" style="width: 100%; height: 100px; position: relative;">
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

//Loop through the results from our query and output them one at a time to the page
while($row = mysqli_fetch_array($result))
{
//Display contact information
$name = $row['firstName'] . ' ' . $row['lastName'];
 $message = 'Position: ' . $row['position']  . '\nEmail: ' . $row['email'] . '\nAddress: ' . $row['address'] . '\nPhone Number: ' .$row['phoneNumber'];
	echo '<div class="ui-grid-a">';
   	echo '<div class="ui-block-a" id="info"><input type="button" value="' . $name . '" onClick="alert(\'' . $message . '\');"></div>';
	echo '<div class="ui-block-b"><a href="tel:'.$row['phoneNumber'].'" id="number" data-role="button">Call ' . $row['firstName'] . '</a></div>';
	echo '</div>';
}

//Dissconnect from the database
mysqli_close($conn);
}
?>

			<!---Link for loging out------>
<div id="links">
<a href="logout.php" data-role="button">Log Out</a>
</div>
	
		</div>
		
		<!--Footer of the page-->
		<div data-theme="a" data-role="footer" data-position="fixed">
			<h3> &copy; Natasha Whitehead 2013 </h3>
		</div>

	</body>
</html>
