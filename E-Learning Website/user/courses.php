<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>E-Learning Platform</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  
</head>

<body>
	<?php
		
		$strconn=mysqli_connect("localhost","root","","proj");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Courses</h1>
				</div>
				<div class="coll">
					<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="../index.php">Log out</a></li>
				 </ul>
				</div>

			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="HTML.php">
						
						<div class="text">
							<h3>HTML</h3>
						</div>
						<div class="pictu">
						<img src="images/html.jpg">
					</div>
					</a>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="CSS.php">
						
						<div class="text">
							<h3>CSS</h3>
							
						</div>
						<div class="pictu">
						<img src="images/css.jpg">
					</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="C.php">
						
						<div class="text">
							<h3>C </h3>
							
						</div>
						<div class="pictu">
						<img src="images/c.jpg">
					</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="C++.php">
						
						<div class="text">
							<h3>C++</h3>
							
						</div>
						<div class="pictu">
						<img src="images/c++.jpg">
					</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="java.php">
						
						<div class="text">
							<h3>Java</h3>
							
						</div>
						<div class="pictu">
						<img src="images/java.jpg">
					</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="foter"><!--footer-->
      <div class="container-fluid"> 
        <p>Copyright 2020<br>Designed By 38 Intake,Faisal Mahmud Rifat</p>
      </div> 
    </div><!--footer-->
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
