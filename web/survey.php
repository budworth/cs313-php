<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Survey</title>
		
		<!-- My stylesheet -->
		<link href="template.css" type="text/css" rel="stylesheet" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div class="container">
		<form action="survey.php" name="survey" method="POST">
			Who would win in a fight?
			<input type="radio" name="fight" value="taco">Tacor or
			<input type="radio" name="fight" value="grilled cheese">Grilled Cheese<br>
			
			What kind of person are you?
			<input type="radio" name="person" value="Dog">Dog or
			<input type="radio" name="person" value="Cat">Cat or
			<input type="radio" name="person" value="Vulcan">Vulcan<br>
			
			
		</form>
		</div>
	</body>
</html>