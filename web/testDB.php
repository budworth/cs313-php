<?php    
    include 'header.php';
    require 'dbConnect.php';
?>

<h1>Test</h1>
<?php

    $db = get_db();

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

<?php include 'footer.php'?>