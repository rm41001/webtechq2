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
		<form action = "results.html" method = "POST">
			<?php
				$sql = 'SELECT * FROM products ORDER BY RAND()';
				$result = mysqli_query($conn, $sql); 
					while($row = mysqli_fetch_assoc($result)) {
					   echo "	
					$row['question']: 
					<input type = 'radio' value = 'correct' checked> $row['answer']; 
					<input type = 'radio' value = 'incorrect'> $row['ic1']; 
					<input type = 'radio' value = 'incorrect'> $row['ic2'];
					<input type = 'radio' value = 'incorrect'> $row['ic3']; 
					   ";
					}
			?>
			<input type = "submit" value = "submit"> 	<!-- Button to go back to log in -->
		</form>

	</body>
</html>