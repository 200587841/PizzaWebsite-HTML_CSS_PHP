<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>NSD Pizza</title>
		<meta name="author" content="Natalia Selestrini Dias" />
		<meta name="description" content="HTML, CSS, and JS Fundamentals - Assignment 1 - Pizza website">
		<link rel="shortcut icon" href="favicon.png" type="x-icon" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
		<!-- Page-level header -->
		<header>
			<h1 id="h1header">Well done!</h1>
		</header>
		
		<!-- Page-level main content -->
		<main>
			<article id="orderArt">
				<h1>Your order is being prepared and will be ready soon.</h1>
				<br><br>
						
				<!-- Print First+Last Name + Print Phone Number -->
				<?php

					$fname = $_GET['fname'];
					$lname = $_GET['lname'];
					echo('<h5>Thank you for choosing us, '.$fname.'+ '.$lname.'!</h5>');

					$phone = $_GET['phone'];
					echo('<h5>If needed, we will contact you on '.$phone.'.</h5>');		
				?>
			</article>
			
			<article id="orderArt">
				<div id="morepizza"><a href="index.php">I want more Pizza!</a>
				</div>
			</article>

		</main>
		<!-- Page-level footer -->
		<footer>
			<p><small>© Natalia Selestrini Dias</small></p>
		</footer>
	</body>
</html>
