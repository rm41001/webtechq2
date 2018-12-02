<!DOCTYPE html>
<html>
<head>
<style>

</style>
<script>
</script>

<?php  //this is what creates everything!!!
	include "config.php";
	$un = $_POST['username'];
	$pw = $_POST['password'];
	$sql="SELECT * FROM taken WHERE username='$un'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) = 0) {//checks to see if username is not there
		echo "You do not exist, please proceed to the registration page.";
		echo "<a href='notregistered.html' class=button>";
	} 
	else {
		$sql="SELECT * FROM taken WHERE haveTaken='no' AND `username='$un'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) = 0){
			echo "<a href='quiz.html'>";
		}
		else{
			echo "<a href='alreadytaken.html'>";
		}
	}	

?>
</head>
<body>
<h3> Checking your informtion...  </h3>
<button a href="login.html">
</body>
</html>
