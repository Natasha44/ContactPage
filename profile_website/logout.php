<!--File Name: logout.php
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the projects logout file in which the user session information is cleared and the user is taken back to the home 
	page-->

<?php

//Access the existing session object
session_start();

//Remove all the variables from the existing session
session_unset();

//Get rid of the current session
session_destroy();

//Redirect to the login page

header('Location: login.php');


?>

</body>

</html>
