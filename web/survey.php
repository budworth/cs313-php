<?php include 'header.php'; ?>
	<div class="container">
		<form class="questions" action="survey.php" name="survey" method="POST">
			Who would win in a fight?
			<br>
			<input type="radio" name="fight" value="taco">Tacor<br>
			<input type="radio" name="fight" value="grilled cheese">Grilled Cheese<br>
			
			What kind of person are you?
			<br>
			<input type="radio" name="person" value="Dog">Dog<br>
			<input type="radio" name="person" value="Cat">Cat<br>
			<input type="radio" name="person" value="Vulcan">Vulcan<br>
			
			Guess.
			<input type="radio" name="guess" value="Heads">Heads or
			<input type="radio" name="guess" value="Tails">Tails<br>
			
			Which one is the best?
			<ul>
				<li><input type="radio" name="starTrek" value="original">Star Trek: The Original Series</li>
				<li><input type="radio" name="starTrek" value="generation">Star Trek: The Next Generation</li>
				<li><input type="radio" name="starTrek" value="ds9">Star Trek: Deep Space Nine</li>
				<li><input type="radio" name="starTrek" value="Voyager">Star Trek: Voyager</li>
			</ul>
			<br>
				
		</form>
		</div>
<?php include 'footer.php'; ?>