<?php session_start(); ?>
<?php include 'header.php'; ?>

<!-- Welcome -->
	<div class="container">
		<div class="jumbotron text-center">
			<h1>Results<h1>
		</div>
	</div>

<div class ="container information">
<?php 

echo $_POST["fight"];
echo $_POST["person"]; 
echo $_POST["guess"];
echo $_POST["starTrek"];


?>
</div>

<?php include 'footer.php'; ?>