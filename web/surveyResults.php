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

echo $_SESSION["fight"];
echo $_SESSION["person"]; 
echo $_SESSION["guess"];
echo $_SESSION["starTrek"];


?>
</div>

<?php include 'footer.php'; ?>