<!DOCTYPE html>
<html lang="en">

	<!--head-->
	<head>
		<meta charset="utf-8">  <!--Character encoding-->
		<meta name="author" content="Yuvraj, Ravinder, Muskan">  <!--author details-->
		<meta name="description" content="Support page of the Retro Website">  <!--page description-->
		<link rel="stylesheet" href="css/styles.css" type="text/css">  <!--external css file for basic structure-->
		<link rel="stylesheet" href="css/support_&_contact_us.css" type="text/css">  <!--external css for body main layout-->
		<link rel="shortcut icon" href="./images/first-fax-machine.png" type="image/x-icon">  <!--Icon of the webpage-->
		<title>Support</title>  <!--title of the page-->
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

	
		<main>	<!--main-->
			<section class="roww">  <!--section roww-->

				<!--below are the frequently asked questions along with the link to appropriate website for answers-->
				<h1>FAQs</h1>  <!--first level heading-->
				<div class="column">  
					<h2>Sending A Fax</h2>
					<br>
					<p><a href="https://faxauthority.com/how-to-send-a-fax/" target="_blank">How Do I Send a Fax?</a></p>
					<p><a href="https://faxauthority.com/faq/how-long-does-it-take-to-send-a-fax/" target="_blank">How Long does it take to Send a Fax?</a></p>
					<p><a href="https://faxauthority.com/faq/how-much-does-it-cost-to-send-a-fax/" target="_blank">How much does it cost to send a Fax?</a></p>
					<p><a href="https://faxauthority.com/faq/do-you-need-a-phone-line-to-fax/" target="_blank">Do you need a phone line to Fax?</a></p>
				</div>  <!--end of column div-->
			
				<div class="column">
					<h2>Receiving A Fax</h2>
					<br>
					<p><a href="https://faxauthority.com/faq/does-someone-have-to-answer-a-fax/" target="_blank">Does someone have to answer a Fax?</a></p>  
					<p><a href="https://faxauthority.com/how-to-receive-a-fax/" target="_blank">How do you answer a Fax?</a></p>
					<p><a href="https://faxauthority.com/how-to-get-a-fax-number/" target="_blank">How do I get a Fax number?</a></p>
					<p><a href="https://faxauthority.com/faq/how-to-cancel-a-fax/" target="_blank">How to Cancel a Fax?</a></p>
				</div>  <!--end of column div-->
			
				<div class="column">
					<h2>Online Faxing</h2>
					<br>
					<p><a href="https://faxauthority.com/email-fax/" target="_blank">How can I email a Fax?</a></p>
					<p><a href="https://faxauthority.com/how-to-fax-a-pdf/" target="_blank">How can I Fax a PDF?</a></p>
					<p><a href="https://faxauthority.com/how-to-fax-from-google/" target="_blank">How can I Fax from Google and Gmail?</a></p>
					<p><a href="https://faxauthority.com/how-to-fax-from-microsoft-office/" target="_blank">How can I Fax from Microsoft Office (including Outlook)?</a></p>
				</div>  <!--end of column div-->
			</section>  <!--end of roww section-->

			<!--form if the person have another query than above mentioned-->
			<form id="faq" action="contact_us_FAQ.php" method="get">
				<div class="align">
					<h1 class="contact-head">Contact us for any further questions</h1>
					<div class="space">
						<label for="name">Name:</label>  <!--for name-->
						<input class="info" type="text" id="fname" name="name" >
						<label for="Phone">Phone:</label>  <!--for phone number-->
						<input class="info" type="number" id="lname" name="phone" >
					</div>  <!--end of space div-->

					<div class="space">
						<label for="email">Email:</label>  <!--for email-->
						<input class="info" type="email" id="lname" name="email" placeholder="name@domain.com" >
						<label for="subject">Subject:</label>  <!--for subject-->
						<input class="info" type="text" id="lname" name="subject" placeholder="eg. Sending, Receiving, Mailing a Fax" >
					</div>  <!--end of space div-->

					<textarea placeholder="Type Your Question"></textarea><BR>  <!--text area-->
					<!--The below javascript code gives an alert saying directed towards confirmation when send button is pressed-->
					<button onclick = "alert('You will be directed towards the confirmation page')" type="submit" class="send">SEND YOUR MESSAGE</button>  <!--submit button-->
				</div> <!--end of div align-->
			</form>  <!--end of form-->

		</main>  <!--end of main-->

		<footer>  <!--footer-->
			
					<br><br><br><br><br><br>

						<p>Copyright & copy2020 All rights reserved &nbsp;&nbsp;&nbsp;
							Fax2016  51 Uxbridge Road, San Francisco W7 3PX  &nbsp;&nbsp;&nbsp; 
							Tel: +1 905-537-0601
						</p>  <!--copyright, address and telephone information-->

						<p>Copyright © 2016 FAX.inc</p>
						<p>Inc. created by Yuvraj Jindal, Ravinder Singh, and Muskan Dhingra</p>
			
		</footer>  <!--end of footer-->

	</body> <!--end of body-->

<!--end of the html file-->
</html>