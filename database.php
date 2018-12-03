<!DOCTYPE html>
<html>
<head>
<style>

</style>
<script>
</script>

<?php  //this is what creates everything!!!
	include "config.php";

mysqli_select_db($conn, 'login');//chooses the database
	// sql to create table
	$un= $_POST['username'];
	$pw= $_POST['password'];
	$fn= $_POST['fullname'];

	$sql = "INSERT INTO register (fullname, username, password, haveTaken, gradeGiven)
	VALUES('$fn','$un','$pw','no', '0')";

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
<button>		
		<form action = "login.php">
				<input type = "submit" value = "Go back to login"> 	<!-- Button to go back to log in -->
		</form>
</body>
</html>
