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
	answer VARCHAR(100) NOT NULL,
	ic1 VARCHAR(100) NOT NULL,
	ic2 VARCHAR(100) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "<br>Table taken created successfully";
	} 
	else{
		//echo "Error creating table: " . $conn->error;
	}
	$sql = "INSERT INTO questions (question, answer) 
	VALUES('Who teaches web technologies?', 'Ms. Pandya', 'Dr. Kind', 'Dr. Davis'), 
	('Who teaches math?', 'Dr. Davis', 'Ms. Pandya', 'Dr. Kind'), 
	('Who teaches english?', 'Ms. Townsend', 'Madame', 'Wang Laoshi'),	
	('Who teaches french?', 'Monseuir Marshall', 'Dr. Dong', 'Sensei'),	
	('Who teaches spanish?', 'Senora De Avila', 'Ms. Cooley', 'Dr. Carlston'),	
	('Who teaches chinese?', 'Wang Laoshi', 'Dr. Thurmond', 'Dr. Ahrendt'),	
	('Who teaches german?', 'Frau Michalak', 'Ms. Pandya', 'Ms. Townsend'),	
	('Who teaches ModPhys?', 'Dr. Dong', 'Dr. Madon', 'Dr. Pierrehumbert'), 
	('Who teaches choir?', 'Ms. Cooley', 'Dr. Amacher', 'Dr. Patankar'), 
	('Who teaches orchestra', 'Mrs. McCarthy', 'Mr. Loo', 'Mr. Brummet');";
	if(mysqli_query($conn, $sql)) {
		echo "<br>New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>
