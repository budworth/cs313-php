<?php    
    include 'header.php';
    require 'dbConnect.php';

    $db = get_db();
?>

<div class="container">

    <h1>Test</h1>

    <?php

        $statement = $db->prepare("SELECT * FROM Monster");
        $statement->execute();
        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
	       // The variable "row" now holds the complete record for that
	       // row, and we can access the different values based on their
	       // name
	       echo '<p>';
	       echo '<strong>' . $row['monster_name'];
        }

    ?>
</div>

<?php include 'footer.php'?>