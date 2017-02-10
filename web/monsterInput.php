<?php include 'header.php'; ?>
<?php include 'dbConnect.php'; ?>

<div class="container">
    <h1>Insert Monster</h1>
    
    <form id="monsterForm" action="insertMonster.php" method="POST">
    
        <label for="monster_name">Monster Name</label>
        <input type="text" name="monster_name"></input>
        <br><br>
    
        <select name="class">
            while($myrow = pg_fetch_assoc($result)){
        echo '<option value="' . $myrow['monster_name'] . '"> . $myrow['monster_name'];
        }
        </select>
    </form>
    
</div>

<?php include 'footer.php'; ?>