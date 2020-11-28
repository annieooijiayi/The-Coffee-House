<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="coffee.css">
<script src="https://kit.fontawesome.com/fe193ed585.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
      <title>The Coffee House</title>
  </head>
  <body>
	<!----Header=====---->
	<header>
		<!----Navbar=====---->
		<nav class="navbar navbar-expand-lg fixed-top nav-menu">
			<a href="#"><i class="fas fa-mug-hot fa-3x"></i></a>
	<button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbar">
	<div class="bg-light bar1"></div>
	<div class="bg-light bar2"></div>
	<div class="bg-light bar3"></div>
	</button>
<div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="navbar">
<ul class="navbar-nav">
	<li class="nav-item">
		<a href="index.html" class="nav-link m-2 menu">Home</a>
	</li>
	
	<li class="nav-item">
		<a href="AboutUs.html" class="nav-link m-2 menu">About Us</a>
	</li>
	
	<li class="nav-item">
		<a href="Menu.html" class="nav-link m-2 menu">Menu</a>
	</li>
	
	<li class="nav-item">
		<a href="index.html#best-seller" class="nav-link m-2 menu">Best Seller</a>
	</li>
	
	<li class="nav-item">
		<a href="index.html#contact" class="nav-link m-2 menu">Contact Us</a>
	</li>
	
	<li class="nav-item">
		<a href="contact_db.php" class="nav-link m-2 menu">Inbox</a>
	</li>
</ul>
</div>
		</nav>
		<!----End of Navbar=====---->
		<!----Banner=====---->
		<div class="text-light text-right banner">
			<h1 class="display-4 text-center font-weight-bold heading">
				The Coffee House
			</h1>
			
			<p class="main text-center">Est. Since 2020</p>
		</div>
		
		<!----End of Banner=====---->
	</header>
	<!------End of Header====--->
	<!----Inbox===---->
	<section class="inbox p-5">
		<div class="container-fluid">
			<!---Title---->
			<div class="row">
				<div class="col text-center py-5">
					<h1>INBOX</h1>
				</div>
			</div>
		</div>
	</section>
	<?php
		$dbc = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($dbc, 'contact_us');
	
		$query = 'SELECT * FROM contact ORDER BY date_entered DESC';
	
		if ($r = mysqli_query($dbc, $query)){
			while ($row = mysqli_fetch_array($r)){
				print "<p><h3>{$row['message']}</h3><br />{$row['email']}<br />{$row['date_entered']}</p><hr />\n";
			}
		}
		else{
			print '<p style="color:red;">Could not retrieve the data because: <br />'.mysqli_error($dbc).
				'.</p><p>The query being run was: ' .$query. '</p>';
		}
		mysqli_close($dbc);
	?>
		
	<!---End of Inbox===-->
<!-----Footer=====---->
<footer>
	<div class="text-center">
		<h4 class="font-weight-bold">Follow Us</h4>
		<div class="d-flex flex-row justify-content-center">
			<span><i class="fab fa-facebook fa-2x"></i></span>
			<span><i class="fab fa-twitter fa-2x"></i></span>
			<span><i class="fab fa-instagram fa-2x"></i></span>
		</div>
		<p>&copy; Copyright The Coffee House</p>
		<div class="top">
			<a href="#"><i class="fas fa-arrow-circle-up fa-2x"></i></a>
		</div>
	</div>
</footer>
<!----End of Footer====--->
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>