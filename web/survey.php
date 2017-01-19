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
<?php include 'footer.php'; ?>