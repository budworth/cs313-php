
<?php 
	
	include 'header.php';
	include 'dbConnect.php'; 

	//Grab items from from
	$monster_name = $_POST['monster_name'];
	$class = $_POST['class'];
	$size = $_POST['size'];
	$description = $_POST['monster_description'];
	$hp = $_POST['hp'];
	$mp = $_POST['mp'];
	$ac = $_POST['ac'];
	$init = $_POST['init'];
	$str = $_POST['str'];
	$dex = $_POST['dex'];
	$con = $_POST['con'];
	$int = $_POST['int'];
	$wis = $_POST['wis'];
	$cha = $_POST['cha'];
	
	
	//Insert into database
	$query =   "INSERT INTO monster 
				( monster_name
				, class_id
				, monster_description
				, size_id
				, hp
				, mp
				, ac
				, init
				, str
				, dex
				, con
				, int
				, wis
				, cha ) 
				VALUES
				( '$monster_name'
				, (SELECT class_id FROM class WHERE monster_class = '$class')
				, '$description'
				, (SELECT size_id FROM size WHERE size_category = '$size')
				, '$hp'
				, '$mp'
				, '$ac'
				, '$init'
				, '$str'
				, '$dex'
				, '$con'
				, '$int'
				, '$wis'
				, 'cha$')";
				
	if (!$result) { 
				echo "Problem with query " . $query . "<br/>"; 
				echo pg_last_error(); 
				exit(); 
			}

?>

<div class="containter">
	<h1>Test</h1>
</div>

<?php include 'footer.php' ?>