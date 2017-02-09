<?php include 'header.php';
    require 'dbConnect.php';
?>

<div class='container'>

<h1>Enter New Monster</h1>

<form id="mainForm" action="insertMonster.php" method="POST">

	<input type="text" id="txtBook" name="monster_name"></input>
	<label for="monster_name">Monster Name</label>
	<br /><br />

    <select name="class">
    <?php
        $query = 'SELECT monster_class FROM class'; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        }

        while($myrow = pg_fetch_assoc($result)) { 
            
            printf ("<select name="monster_name"><option value="$s">$s<option></select>", htmlspecialchars($myrow['monster_name']), htmlspecialchars($myrow['monster_name']));
        } 
    ?>
    </select>
    
	<input type="text" id="txtChapter" name="txtChapter"></input>
	<label for="txtChapter">Chapter</label>
	<br /><br />

	<input type="text" id="txtVerse" name="txtVerse"></input>
	<label for="txtVerse">Verse</label>
	<br /><br />

	<label for="txtContent">Content:</label><br />
	<textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
	<br /><br />

	<label>Topics:</label><br />

</div>

<?php include 'footer.php;' ?>