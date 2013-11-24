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
