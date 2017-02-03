<?php include 'header.php'; ?>

<div class="container">
        <table border="0" cellspacing="0" cellpadding="0"> 
            <tr> 
                <td> 
                    Friend ID 
                </td> 
                <td> 
                    First Name 
                </td> 
                <td> 
                    Surname 
                </td> 
                <td> 
                    Email Address 
                </td> 
            </tr> 
        <?php 
        $db = pg_connect('host=ec2-54-243-253-17.compute-1.amazonaws.com dbname=dc3qo0omk1t54q user=nhdhvzjtzgcbvw password=31eefdffa2448f164d09f84d772dc775724c18004b049ef92b42400f9f7762bd');

        $query = "SELECT * FROM Monsters"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $myrow['id'], htmlspecialchars($myrow['monster_name']), htmlspecialchars($myrow['class_id']), htmlspecialchars($myrow['monster_description']));
        } 
        ?> 
        </table> 
</div>

<?php include 'footer.php'?>