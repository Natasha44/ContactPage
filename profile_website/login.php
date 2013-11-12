<!--File Name: index.html
Author Name: Natasha Whitehead
Website Name: Natasha Whitehead's Portfolio Website
File Discription: This is the home page mobile file in which the user will first go to. It shows some of the work I have
done as well as giving the user an idea about what I can do and what the website is about-->

<!DOCTYPE HTML>
<html>
	<head>
		<title>Home</title>
		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
		<link href='css/style.css' rel='stylesheet'/>
		<link rel="stylesheet" href="themes/purple.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css" />

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>

	</head>
	<body>

    <div id="form">

<form method="post" action="validate.php">

	<div>
	<label>Username: </label>
	<input name="username" />
	</div>
	<div>
	<label>Password:  </label>
	<input name="password" type="password" />
	</div>
	<input type="submit" value="Submit" />

</form>
<a href="default.php">Home Page</a>
</div>

</body>

</html>
