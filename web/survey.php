<?php include 'header.php'; ?>
	<div class="container">
		<form class="questions" action="survey.php" name="survey" method="POST">
			Who would win in a fight?
			<ul class="questionList">
				<li><input type="radio" name="fight" value="taco">Tacor</li>
				<li><input type="radio" name="fight" value="grilled cheese">Grilled Cheese</li>
			</ul>
			
			What kind of person are you?
			<ul class="questionList">
				<li><input type="radio" name="person" value="Dog">Dog</li>
				<li><input type="radio" name="person" value="Cat">Cat</li>
				<li><input type="radio" name="person" value="Vulcan">Vulcan</li>
			</ul>
			
			Guess.
			<ul class="questionList">
				<li><input type="radio" name="guess" value="Heads">Heads</li>
				<li><input type="radio" name="guess" value="Tails">Tails</li>
			</ul>
			Which one is the best?
			<ul class="questionList">
				<li><input type="radio" name="starTrek" value="original">Star Trek: The Original Series</li>
				<li><input type="radio" name="starTrek" value="generation">Star Trek: The Next Generation</li>
				<li><input type="radio" name="starTrek" value="ds9">Star Trek: Deep Space Nine</li>
				<li><input type="radio" name="starTrek" value="Voyager">Star Trek: Voyager</li>
			</ul>
			<br>
				
		</form>
		</div>
<?php include 'footer.php'; ?>