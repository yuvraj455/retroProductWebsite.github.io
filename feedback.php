<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="About page of the Retro Website">  <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">  <!--external css file for basic structure-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>About us</title>  <!--title of the page-->
	</head>  <!--end of head-->


	<!--body-->
	<body>

		<header>   <!--header-->

			<section class="header-image">  <!--section-->

				<div class="start">
					<a>+1 905-537-0601</a>  <!--phone number-->
					<a>fax@gmail.com</a>  <!--email-->
				</div>  <!--end of start-->

				<div class="logo">  
					<p>FAX</p>  <!--logo-->
				</div>  <!--end of logo-->

				<div class="top-nav">  <!-- global-nav file linked-->
					<?php
						include("includes/global_nav.php");
					?>
				</div>  <!--end of top-nav-->
				
				<div class="imagetext">  <!-- for text over the image at the top-->
					<p>FAX</P>
					<h1><b>DELIVER YOUR MESSAGES</b></h1>
					<div class="button">  <!-- for the buttons-->
							<!--The below button also include a simple java script code that makes an alert when the user presses read more button-->
							<BUTTON onclick = "alert('You will be redirected to a new tab')" class="active1"><a href="https://en.wikipedia.org/wiki/Fax" target="_blank">READ MORE</a></BUTTON>
							<BUTTON><a href="contact-us.php">CONTACT US</a></BUTTON>
					</div>  <!-- end of button-->
				</div>  <!--end of imagetext-->
			</section>  <!-- end of section header-image-->
		</header>   <!-- end of header-->

    <?php
    /* All form elements are checked - that required information is present and that all form data
    is in the correct format. Security checks are made before database queries are made */

	//$_GET is used to get the information regarding the element defined in the square brackets['']

	//will get the feedback written
	$feedback = $_GET['feedback'];

	//gets the name filled
     $name = $_GET['name'];

	//Outputs a friendly message to confirm that everything went well, including the $name
	echo('<p>Thank You,<strong>'.$name.'</strong>, Thank you so much for taking the time to 
	send this! Everyone here loves to know that our customers enjoy what we do.
    </p>');
	
     //below code is used to output the feedback written 
	echo('<p>The Feedback you provided:  </p>');
    echo($feedback);
    echo('<p>is very valuable to us.</p>');
	?>

		<footer>  <!--footer-->
				
				<br><br><br><br><br><br>

					<p>Copyright & copy2020 All rights reserved &nbsp;&nbsp;&nbsp;
						Fax2016  51 Uxbridge Road, San Francisco W7 3PX  &nbsp;&nbsp;&nbsp; 
						Tel: +1 905-537-0601
					</p>  <!--copyright, address and telephone information-->

					<p>Copyright © 2016 FAX.inc</p>
					<p>Inc. created by Yuvraj Jindal, Ravinder Singh, and Muskan Dhingra</p>

		</footer>  <!--end of footer-->

	</body>  <!--end of body-->

<!--end of the html file-->
</html>