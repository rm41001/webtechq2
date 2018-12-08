<!-- Urvi Awasthi and Red Maier; November 29th, 2018; Arrays Exercise -->
<!DOCTYPE html> 
<html>
	<head>
		<!--styling the title, and adding an external style sheet -->
		<title> Quiz </title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	
	<body>
		<h1> Here is the quiz, good luck!  </h1>
		<form action = "results.php" method = "POST">
			<?php
				include "config.php"; 
				mysqli_select_db($conn, 'login');//chooses the database				
				$sql = 'SELECT * FROM questions ORDER BY RAND()';
				$result = mysqli_query($conn, $sql); 
				$i = 1; 
				while($row = mysqli_fetch_assoc($result)) {
					   echo $row['question'].
				   "<br> 
					<input type = 'radio' value = 'correct' name = '$i' checked>". $row['answer']." <br>
					<input type = 'radio' value = 'incorrect' name = '$i'>". $row['ic1'] ."<br>
					<input type = 'radio' value = 'incorrect' name = '$i'>". $row['ic2']." <br>
					<input type = 'radio' value = 'incorrect' name = '$i'> ". $row['ic3']." <br>
					<br>
					   ";
					$i++; 
					}
			?>
			<input type = "submit" value = "submit"> 	<!-- Button to go back to log in -->
		</form>

	</body>
</html>
