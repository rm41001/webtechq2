<!-- Urvi Awasthi and Red Maier; November 29th, 2018; Arrays Exercise -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Results </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	
	<body>
		<h1> Thank you for finishing the quiz! Here are your results: </h1>
	
		<!--Put results of quiz here later -->
		<?php 
			$score = 0; 
			$i = 1; 
			while ($i < 11)
			{
				$correctanswer = $_POST["$i"];				
				if ($correctanswer == 'correct')
				{
					$score++; 
				}
				$i++; 
			}
			if ($score > 7)
			{
				
				echo "
					Congratulations! You have passed the quiz! Now click on the button to log out. Thank you for your time!
					<form action = 'logout.php' method = 'POST'>
					<input type = 'submit' value = 'Proceed to Logout'><!-- Button to go back to log in -->
					</form>
				";
				include "config.php"; 
				mysqli_select_db($conn, 'login');//chooses the database	
				$sql = "UPDATE register SET haveTaken = 'yes' WHERE `username`='$_COOKIE[user]'"; 
				$result = mysqli_query($conn, $sql);
				if (mysqli_query($conn, $sql)) {
					echo "<br>New record updated successfully";
				} 
				else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				$sql = "UPDATE register SET gradeGiven = '$score' WHERE `username`='$_COOKIE[user]'"; 
				$result = mysqli_query($conn, $sql);
				if (mysqli_query($conn, $sql)) {
					echo "<br>New record updated successfully";
				} 
				else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			else
			{
				echo "
					Sorry. You have failed the quiz. You can either log out through the log out button, or you can log in through the log in button and retake the test.
					<form action = 'logout.php' method = 'POST'>
					<input type = 'submit' value = 'Go to Log Out'><!-- Button to go back to log out -->
					</form>
					
					<form action = 'login.php' method = 'POST'>					
					<input type = 'submit' value = 'Go to Log In'><!-- Button to go back to log in -->
					</form>
					"; 
				include 'config.php';
				mysqli_select_db($conn, 'login');//chooses the database	
				$sql = "UPDATE register SET gradeGiven = '$score' WHERE `username`='$_COOKIE[user]'"; 
				$result = mysqli_query($conn, $sql);
				if (mysqli_query($conn, $sql)) {
					echo "<br>New record updated successfully";
				} 
				else{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
			//setting haveTaken to yes

		?>


	</body>
</html>