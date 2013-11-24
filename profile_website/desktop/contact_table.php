<!--File Name: contact_table.php
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the projects contact table file in which the all the busines contacts are shown and have attached information-->	

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Natasha Whitehead's Portfolio Website</title>
                <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/logo_font.css">
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    	<link rel="stylesheet" href="css/bjqs.css">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'> 

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
   		<link rel="stylesheet" href="demo.css">
   	<!-- Google fonts for the header and the body -->
    	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'> 
    <!-- load jQuery and the plugin -->
    	<script src="js/jquery-1.7.1.min.js"></script>
    	<script src="js/bjqs-1.3.min.js"></script>
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
         
        <link href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' rel='stylesheet' type='text/css'> 
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<!--Logo and Name-->
        <div class="header-container">
            <header class="wrapper clearfix">
            	<img src="img/logo.png" id="img" alt="Logo"/>
                <h1 class="title">Natasha Whitehead</h1>
            </header>
        </div>
        
        <div id="contacts">
        <div id="people">
        <h2 class="demoHeaders">Business Contacts</h2>

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

	$name = $row['firstName'] . ' ' . $row['lastName'];
 $message = 'Position: ' . $row['position']  . '\nEmail: ' . $row['email'] . '\nAddress: ' . $row['address'] . '\nPhone Number: ' .$row['phoneNumber'];
   	echo '<input type="button" value="' . $name . '" onClick="alert(\'' . $message . '\');">';
}



//Dissconnect from the database
mysqli_close($conn);
}
?>
<!--logout links-->
<div id="links">
<ul>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>

</div>
</div>


		<!--Footer and Copyright -->
        <div class="footer-container">
            <footer class="wrapper">
                <h3>&copy; Natasha Whitehead 2013</h3>
            </footer>
        </div>


</body>

</html>
