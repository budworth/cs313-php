<?php session_start(); ?>
<?php include 'header.php'; ?>

<!-- Welcome -->
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Results<h1>
		</div>
	</div>

<!-- PHP code -->
<?php
	//Variable defined
	$fight = $person = $guess = $starTrek = "";
	
	//For the Fight Question
	if ($_POST["fight"] == "tc") {
		$fight = "Tacos are spicy. I see your point.";
	} else {
		$fight = "Grilled Cheese is a good bet in a fight. They have been thoroughly grilled.";
	}

	//For the Personality
	if ($_POST["person"] == "dog") {
		$person = "Dog is the correct answer. Great Job!";
	} else if ($_POST["person"] == "cat") {
		$person = "You have chosen cat. I am sorry to inform you that you are wrong.";
	} else {
		$person = "Vulcan, that is the logical choice.";
	}
	
	//Coin Toss
	if ($_POST["guess"] == "heads") {
		if(mt_rand(0,1) == 0) {
			$guess = "Heads, You Win!";
		} else {
			$guess = "Tails, You Lose!";
		}
	} else{
		if(mt_rand(0,1) == 1) {
			$guess = "Tails, You Win!";
		} else {
			$guess = "Heads, You Lose!";
		}
	}
	
	//Switch for Star Trek Series
	switch ($_POST["starTrek"]) {
    case "or":
        $starTrek = "You can't go wrong with Star Trek: The Original Series.";
        break;
    case "gn":
        $starTrek = "Star Trek: The Next Generations really defined Star Trek.";
        break;
    case "ds":
        $starTrek = "Star Trek: Deep Space Nine was a great example of how different cultures can work together.";
        break;
	case "vy":
        $starTrek = "Star Trek: Voyager was a great adventure into the unknown.";
        break;
	case "py":
        $starTrek = "My Little Pony Fan Fiction shows us that there is no hope for humanity.";
        break;
		
}

?>	

<!-- Results -->
<div class ="container information">
	<div class="questions">
	<?php 
		echo $fight;
		echo "<br>";
		echo $person;
		echo "<br>";
		echo $guess;
		echo "<br>"
		echo $starTrek;
	?>
	
	</div>
</div>

<?php include 'footer.php'; ?>