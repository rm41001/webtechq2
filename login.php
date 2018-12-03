<!-- Urvi Awasthi and Red Maier; November 29th, 2018; Arrays Exercise -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Login Page </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
<?php 
	include "config.php";
	include "createdatabases.php"; //we need to make quiz questions

?>
	</head>
	
	<body>

		<h1> Log In  </h1>
		<!-- Form to Log In -->
		<form action = "checker.php" method = "POST">
			<!-- this first form asks for the user's name and the password-->
			<h2>
				Username: 
				<input type = "text" name = "username"><br>
				Password:  
				<input type = "text" name = "password"> <br>
				<input type = "submit" value = "Submit">
			</h2>
		</form>

		
	</body>
</html>