<?php session_start(); ?>
<?php include 'header.php'; ?>
<!-- Welcome -->
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Survey<h1>
		</div>
	</div>
	
	<div class="container information">
		<form class="questions" action="surveyResults.php" method="POST">
			Who would win in a fight?
			<ul class="questionList">
				<li><input type="radio" name="fight" value="tc">Taco</li>
				<li><input type="radio" name="fight" value="gc">Grilled Cheese</li>
			</ul>
			
			What kind of person are you?
			<ul class="questionList">
				<li><input type="radio" name="person" value="Dog">Dog</li>
				<li><input type="radio" name="person" value="Cat">Cat</li>
				<li><input type="radio" name="person" value="Vulcan">Vulcan</li>
			</ul>
			
			Guess: Heads or Tails?
			<ul class="questionList">
				<li><input type="radio" name="guess" value="Heads">Heads</li>
				<li><input type="radio" name="guess" value="Tails">Tails</li>
			</ul>
			Which one is the best?
			<ul class="questionList">
				<li><input type="radio" name="starTrek" value="or">Star Trek: The Original Series</li>
				<li><input type="radio" name="starTrek" value="gn">Star Trek: The Next Generation</li>
				<li><input type="radio" name="starTrek" value="ds">Star Trek: Deep Space Nine</li>
				<li><input type="radio" name="starTrek" value="vy">Star Trek: Voyager</li>
				<li><input type="radio" name="starTrek" value="py">My Little Pony Fan Fiction</li>
			</ul>
			<br>
			<input type="Submit">
				
		</form>
		</div>
<?php include 'footer.php'; ?>