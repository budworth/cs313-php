<?php include 'header.php'; ?>
<!-- Welcome -->
	<div class="container">
		<div class="jumbotron text-center">
			<h1>About the Author<h1>
		</div>
	</div>
		
<!-- This is where my information goes -->
<div class="container information">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="Profile Pic.jpg" alt="Bud's Family">
				 <div class="carousel-caption">
					<h3>My Family</h3>
					<p>This is my little family. Me, my wife Lyla, and Celeste.</p>
				</div>
			</div>

			<div class="item">
				<img class="temple" src="2015-03-12 16.44.41.jpg" alt="Logan Temple">
				<div class="carousel-caption">
					<h3>Logan Temple</h3>
					<p>My wife and I eloped and were sealed in the temple a year later.</p>
				</div>
			</div>

			<div class="item">
				<img src="File Jan 14, 6 25 01 PM.jpeg" id="celeste" alt="Celeste">
				<div class="carousel-caption">
					<h3>Little Gamer</h3>
					<p>I love technology and video games. Celeste loves them too.</p>
				</div>
			</div>
		</div>

<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
			
		<h2>Hi</h2>
		<p>My name is Bud Wortham and I live in Bafield, CO with my little family.
		I am working on getting a degree in software engineering and I can't wait to start working.
		<p>
</div>
<?php include 'footer.php'?>
