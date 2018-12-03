<!-- Urvi Awasthi and Red Maier; November 29th, 2018; Arrays Exercise -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Login Page </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
<?php 
	include "config.php";
//	include "quizqs.php"; //we need to make quiz questions
	$sql = "CREATE DATABASE login"; //creates database
		if (mysqli_query($conn, $sql)) {
//			echo "Database created successfully";
		}
		else{
//			echo "Error creating database: " . mysqli_error($conn);
		}
	mysqli_select_db($conn, 'login');//chooses the database
	// sql to create table here so that when you register it is already made for you :))))
	$sql = "CREATE TABLE register(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		fullname VARCHAR(30) NOT NULL,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL,
		haveTaken VARCHAR(3) NOT NULL,
		gradeGiven INT NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
//			echo "<br>Table register created successfully";
		} 
		else{
//			echo "Error creating table: " . $conn->error;
		}
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