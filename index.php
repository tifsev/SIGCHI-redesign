<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Puget Sound SigChi </title>
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	
</head>
<body>
<header>
	<img src="images/logo_u80.png" alt="SigChi Logo"/>
	<nav id="top-nav">
		<ul>
			<li><a href="#">Login</a></li>
			<li><a href="#">Members</a></li>
		</ul>
	</nav>
	<nav id="main-nav">
		<ul>
			<li>
				<a href="#">Events</a>
			</li>
			<li>
				<a href="#">About</a>
			</li>
			<li>
				<a href="#">Jobs</a>
			</li>
			<li>
				<a href="#">Volunteer</a>
			</li>
			<li>
				<a href="#">Join</a>
			</li>
		</ul>
	</nav>
</header>

<section id="hero">
	<div id="slideshow">
		<img src="http://placekitten.com/1300/600">
		<img src="http://placekitten.com/1300/599">
		<img src="http://placekitten.com/1300/595">
	</div>

</section>

<section id="cta">

	<div class="col1of3" id="events">
	test
	<br>
	</div>
	<div class="col1of3" id="jobs">
	test
	</div>
	<div class="col1of3" id="about">
	test
	</div>

</section>


<footer>
	This is the footer
</footer>

	<script>
		$(document).ready(function(){
			$("#slideshow img").hide();
			$("#slideshow img:first").show();
			
			setInterval("slide()", 2000);
		});
		
		function slide()
		{
			var currentImg = $("#slideshow img:visible");
			var nextImg;
			
			//if there is no next
			if(currentImg.next().length <= 0)
			{
				nextImg = $("#slideshow img:first");	
			}
			else 
			{
				nextImg = currentImg.next();
			}
			
			currentImg.hide();
			nextImg.show();
		}
	</script>	
</body>
</html>