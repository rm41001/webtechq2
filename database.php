<!DOCTYPE html>
<html>
<head>
<style>

</style>
<script>
</script>

<?php  //this is what creates everything!!!
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
	$un= $_POST['username'];
	$pw= $_POST['password'];
	$fn= $_POST['fullname'];
	$si= $_POST['studentid'];

	$sql = "INSERT INTO register (fullname, username, password, haveTaken, gradeGiven)
	VALUES('$fn',$un','$pw','$si')";

	if (mysqli_query($conn, $sql)) {
		echo "<br>New record created successfully";
	} 
	else{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}	

?>
</head>
<body>
<h3> Your information has been created, please go back to the login page :)  </h3>
<button a href="login.html">
</body>
</html>
