<?php 
//somehow connect this page to the results
include "config.php"; //including the config file

$sql = "CREATE DATABASE grades"; //creating a query 

//executing the query, perform $sql query on $conn
if (mysqli_query($conn, $sql)) {
// echo "Database created successfully";
} else {
// echo "Error creating database: " . mysqli_error($conn);
}


//selecting a database before making the table 
mysqli_select_db($conn, 'QA');

// sql to create table
$sql = "CREATE TABLE QA (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
dateOfTest date,
score int(5)
)";


if (mysqli_query($conn, $sql)) {
   // echo "Table quizzes created successfully";
} else {
   // echo "Error creating table: " . mysqli_error($conn);
}
/**$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$date = $_POST['dateoftest']; 
	$score = $_POST['score']; 
	//inserting info into table 	
	$sql = "INSERT INTO quizzes (firstname, lastname, dateoftest, score) 
	VALUES ('$firstname','$lastname' , '$date', '$score')";
**/

if (mysqli_query($conn, $sql)) {
  //  echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}		 

echo "Here are all of the values from the table: <br>"; 

$sql = 'SELECT * FROM quizzes';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
   echo "FirstName:  " . $row["firstname"]. "  LastName:" . $row["lastname"]. "  DateOfTest:". $row['dateOfTest']."  Score:" .$row['score']. "<br>";
}
} else {
echo "0 results";
}	
	 
/*
//find all the scores that are less than 70 and print the results that has a student’s first and last name along with the score
echo "<br> Here are all the students with scores less than 70: <br>";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) 
{
	if ($row['score'] < 70)
	{	
		echo "Student: " . $row["firstname"] . $row["lastname"]. " Score: " . $row['score'] . "<br>" ; 
	}
}

//find all the records where the quizzes were taken before Nov. 20, 2018 and print the names of the students
echo "<br> Here are all the students who took their quizzes before November 20th: <br>";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
  	if ($row['dateOfTest'] < '2018-20-18')
	{	
		echo $row["firstname"] . $row["lastname"] . "<br>"; 
	}
}
*/
?>


