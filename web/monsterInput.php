<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<div class="container">
    <h1>Insert Monster</h1>
    
    <form id="monsterForm" action="insertMonster.php" method="POST">
    
        <label for="monster_name">Monster Name</label>
        <input type="text" name="monster_name"></input>
        <br><br>
		
		<label for="hp">Monster HP</label>
        <input type="number" name="hp"></input>
        <br><br>
		
		<label for="mp">Monster MP</label>
        <input type="number" name="mp"></input>
        <br><br>
		
		<label for="ac">Monster Armor Class</label>
        <input type="number" name="ac"></input>
        <br><br>
		
		<label for="init">Monster Initiative</label>
        <input type="number" name="init"></input>
        <br><br>
		
		<label for="str">Monster Strength</label>
        <input type="number" name="str"></input>
        <br><br>
		
		<label for="dex">Monster Dexterity</label>
        <input type="number" name="dex"></input>
        <br><br>
		
		<label for="con">Monster Constitution</label>
        <input type="number" name="con"></input>
        <br><br>
		
		<label for="int">Monster Intelligence</label>
        <input type="number" name="int"></input>
        <br><br>
		
		<label for="wis">Monster Wisdom</label>
        <input type="number" name="wis"></input>
        <br><br>
		
		<label for="cha">Monster Charisma</label>
        <input type="number" name="cha"></input>
        <br><br>
    
		<label for="class">Monster Class</label>
        <select name="class">
        <?php
            $query ='SELECT * FROM class';
			
			 $result = pg_query($query); 
			 
			if (!$result) { 
				echo "Problem with query " . $query . "<br/>"; 
				echo pg_last_error(); 
				exit(); 
			}
            
            while($myrow = pg_fetch_assoc($result))
            {
               printf ("<option value=\"%s\">%s</option>", htmlspecialchars($myrow['monster_class']), htmlspecialchars($myrow['monster_class']));
            }
        ?>
        </select>
		<br><br>
    </form>
    
</div>

<?php include 'footer.php'; ?>