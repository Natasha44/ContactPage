<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Example Page</title>
	<link href="css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
		<script>
	$(function() {
		
		/*$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			"AppleScript",
			"Asp",
			"BASIC",
			"C",
			"C++",
			"Clojure",
			"COBOL",
			"ColdFusion",
			"Erlang",
			"Fortran",
			"Groovy",
			"Haskell",
			"Java",
			"JavaScript",
			"Lisp",
			"Perl",
			"PHP",
			"Python",
			"Ruby",
			"Scala",
			"Scheme"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();*/
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		/*
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});*/
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	<style>
	body{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	/*#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}*/
	</style>
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
$sql = "SELECT * FROM contacts";

//Connect to the database
$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die(mysqli_error());

//Execute the query an store the results in a variable
$result = mysqli_query($conn, $sql);

//Loop through the results from our query and output them one at a time to the page
while($row = mysqli_fetch_array($result))
{
echo '<INPUT TYPE="button" VALUE="'.$row['firstName'] . '" onClick="alert('. $row['phoneNumber'] . ')">';
}



//Dissconnect from the database
mysqli_close($conn);
}
?>






</body>

</html>
