<!--Red and Urvi QUarter Project due Dec. 9th -->
<!DOCTYPE html>
<html>
	<head>
		<?php  //this is what creates everything!!!
			include "config.php";
			$un = $_POST['username'];
			$pw = $_POST['password'];
			$cookie_name = $_POST['username'];
			$cookie_value = "John Doe";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			mysqli_select_db($conn, 'login');
			$sql="SELECT * FROM register WHERE username='$un'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 0) {//checks to see if username is not there
				echo "<h3>Your information does not exist in the database, please proceed to the registration page by clicking the link below.</h3>";
				echo "<a href='notregistered.php'>";
			} 
			else {
				$sql="SELECT * FROM register WHERE haveTaken='no' AND username='$un'";
				if(mysqli_num_rows($result) == 1){
					echo "<h3> You have not taken this quiz yet, please proceed";
					echo "<a href='quiz.php'>";
				}
				else{
					echo "<h3> You have taken this quiz already, please proceed";
					echo "<a href='alreadytaken.php'>";
				}
			}	
	?>
	</head>
	<body>
		<h3> Checking your information...  </h3>
	</body>
</html>
