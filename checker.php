<!DOCTYPE html>
<html>
	<head>
		<?php  //this is what creates everything!!!
			include "config.php";
			$un = $_POST['username'];
			$pw = md5($_POST['password']);
			mysqli_select_db($conn, 'login');
			$sql="SELECT * FROM register WHERE username='$un'AND password = '$pw'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) == 0) {//checks to see if username is not there
				header("Location: notregistered.php");
				exit;			
			} 
			else {
				$sql="SELECT * FROM register WHERE haveTaken='no' AND username='$un'";
				if(mysqli_num_rows($result) == 1){
					header("Location: quiz.php");
					exit;
				}
				else{
					header("Location: alreadytaken.php");
					exit;
				}
			}
			$cookie_name = "user";
			$cookie_value = "$un";
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
		?>
	</head>
	<body>
		<h3> Checking your information...  </h3>
	</body>
</html>
