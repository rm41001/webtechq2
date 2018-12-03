<?php
	$sql = "CREATE DATABASE login"; //creates database
		if (mysqli_query($conn, $sql)) {
//			echo "Database created successfully";
		}
		else{
//			echo "Error creating database: " . mysqli_error($conn);
		}
	mysqli_select_db($conn, 'login');//chooses the database
		
	// sql to create register table here so that when you register it is already made for you :))))
	$sql = "CREATE TABLE register(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fullname VARCHAR(30) NOT NULL,
		username VARCHAR(30) NOT NULL,
		password VARCHAR(30) NOT NULL,
		haveTaken VARCHAR(3) NOT NULL,
		gradeGiven INT NOT NULL
		)";
		if ($conn->query($sql) === TRUE) {
			//echo "<br>Table register created successfully";
		} 
		else{
			//echo "Error creating table: " . $conn->error;
		}
	mysqli_select_db($conn, 'login');//chooses the database
	//sql to make the questions and answers table
	$sql = "CREATE TABLE questions(
	question VARCHAR(100) NOT NULL,
	answer VARCHAR(100) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "<br>Table taken created successfully";
	} 
	else{
		//echo "Error creating table: " . $conn->error;
	}
	$sql = "INSERT INTO questions (question, answer) 
	VALUES('Who teaches web technologies?', 'Ms. Pandya'), 
	('Who teaches math?', 'Dr. Davis'), 
	('Who teaches english?', 'Ms. Townsend'), 
	('Who teaches orchestra', 'Mrs. McCarthy');";
	if(mysqli_query($conn, $sql)) {
		echo "<br>New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>