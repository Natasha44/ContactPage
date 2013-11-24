<!--File Name: index.html
	Author Name: Natasha Whitehead
	Website Name: Natasha Whitehead's Portfolio Website
	File Discription: This is the home page file in which the user will first go to. It shows some of the work I have
	done as well as a welcome statement, personal tagline and a mission statement to give the user an idea of what I
	can do and what the website is about-->
	

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login</title>
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

        <div class="main-container">
            <div class="main wrapper clearfix">
            					<nav>
                    <ul>
                        <li><a href="index.html"><div class="icon-home">Home</div></a></li>
                        <li><a href="about.html"><div class="icon-user">About Me</div></a></li>
                        <li><a href="projects.html"><div class="icon-book-open">Projects</div></a></li>
                        <li><a href="services.html"><div class="icon-doc-text-inv">Services</div></a></li>
                        <li><a href="contact.html"><div class="icon-mail-alt">Contact Me</div></a></li>
                        <li><a href="https://github.com/Natasha44"><div class="icon-github"> GitHub</div></a></li>
                        <li><a href="login.php" class="active"><div class="icon-cog">Login</div></a></li>
                    </ul>
				</nav>
                <article>
                    <!--Login-->         
                    <footer>
                    	
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
</div>

                    </footer>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

		<!--Footer and Copyright -->
        <div class="footer-container">
            <footer class="wrapper">
                <h3>&copy; Natasha Whitehead 2013</h3>
            </footer>
        </div>
        
		
    </body>
</html>