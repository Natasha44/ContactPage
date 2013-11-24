<!--File Name: index.html
Author Name: Natasha Whitehead
Website Name: Natasha Whitehead's Portfolio Website
File Discription: This is the home page mobile file in which the user will first go to. It shows some of the work I have
done as well as giving the user an idea about what I can do and what the website is about-->

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
		<!----------------------------------------------------LOGIN--------------------------------------------->
		<!------------------------------------------------------------------------------------------------------>

		<!--Header of the page-->
		<div data-role="header" data-position="inline">
			<h1>Login</h1>
			<a href="index.html" data-role="button">Home</a>

		</div>
		<!--Page content-->
		<div data-role="content">
			<!--Logo-->
			<div>
				<img src="img/sunset.jpg" alt="image" style="width: 100%; height: 100px; position: relative;">
			</div>
			<!--Navigation bar-->
			<div data-role="navbar" data-iconpos="top">
				<ul>
					<li>
						<a href="index.html" data-transition="slidefade" data-theme="" data-icon="home"> Home </a>
					</li>
					<li>
						<a href="about.html" data-transition="slidefade" data-theme="" data-icon="star"> About Me </a>
					</li>
					<li>
						<a href="contact.html" data-transition="slidefade" data-theme="" data-icon="info"> Contact Me </a>
					</li>
				</ul>
			</div>
			
			<form action="validate.php" method="POST">
            <div data-role="fieldcontain">
                <label for="textinput1">
                    Username
                </label>
                <input name="username" id="textinput1" placeholder="" value="" type="text">
            </div>
            <div data-role="fieldcontain">
                <label for="textinput2">
                    Password
                </label>
                <input name="password" id="textinput2" placeholder="" value="" type="password">
            </div>
            <input value="Submit" type="submit">
        </form>

		</div>
		
		<!--Footer of the page-->
		<div data-theme="a" data-role="footer" data-position="fixed">
			<h3> &copy; Natasha Whitehead 2013 </h3>
		</div>

	</body>
</html>

    

