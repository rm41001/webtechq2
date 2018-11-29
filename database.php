<?php
	include "config.php";
	$sql = "CREATE DATABASE grades"; //creates database
		if (mysqli_query($conn, $sql)) {
			echo "<br>Database created successfully";
		}
		else{
//			echo "Error creating database: " . mysqli_error($conn);
		}
mysqli_select_db($conn, 'grades');//chooses the database
	// sql to create table
	$sql = "CREATE TABLE quizzes (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		FirstName VARCHAR(30) NOT NULL,
		LastName VARCHAR(30) NOT NULL,
		Date date,
		Score int(3)
		)";

		if ($conn->query($sql) === TRUE) {
			echo "<br>Table quizzes created successfully";
		} 
		else{
//			echo "Error creating table: " . $conn->error;
		}
	$fn= $_POST['FirstName'];
	$ln= $_POST['LastName'];
	$d= $_POST['Date'];
	$s= $_POST['Score'];
	$sql = "INSERT INTO quizzes (FirstName, LastName, Date, Score)
	VALUES('$fn','$ln','$d','$s')"; //fake values

	if (mysqli_query($conn, $sql)) {
		echo "<br>New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
