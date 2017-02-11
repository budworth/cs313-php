<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<div class="container">
    <h1>Insert Monster</h1>
    
    <form id="monsterForm" action="insertMonster.php" method="POST">
    
        <label for="monster_name">Monster Name</label>
        <input type="text" name="monster_name"></input>
        <br><br>
    
        <select name="class">
        <?php
            $query ='SELECT * FROM monster';
			
			 $result = pg_query($query); 
			 
			if (!$result) { 
				echo "Problem with query " . $query . "<br/>"; 
				echo pg_last_error(); 
				exit(); 
			}
            
            while($myrow = pg_fetch_assoc($result))
            {
               printf ("<option value=\"%s\">%s</option>", htmlspecialchars($myrow['monster_name']), htmlspecialchars($myrow['monster_name']));
            }
        ?>
        </select>
    </form>
    
</div>

<?php include 'footer.php'; ?>