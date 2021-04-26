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


	<div class="con">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Feedback</h1>
				</div>
			</div>
		</div>
	</div>

	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Your Message</h3>
			<form name="sentMessage" id="contactForm"  novalidate method="post" action=""> 
			<div class="control-group">
			<div class="controls">
			<input type="text" class="form-control" 
			placeholder="Full Name" name="name" required
			data-validation-required-message="Please enter your name" />
			<p class="help-block"></p>
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			name="email" required
			data-validation-required-message="Please enter your email" />
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<textarea rows="10" cols="100" class="form-control" 
			placeholder="Message" name="message" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			</div>
			</div> 	
			<br>
			<div id="success"> 
		<?php
		if(isset($_POST['btnsubmit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];
			$strInsert="INSERT INTO feedback(description,name,email) VALUES('$message','$name','$email')";
			if(mysqli_query($strconn,$strInsert))
				echo "<div class='alert alert-success' role='alert'>Thanks for feedback.</div>";
			else
					echo "<div class='alert alert-danger' role='alert'>something wrong.</div>";

		}
		?>
		</div> <!-- For success/fail messages -->
		<br>
			<button type="submit" class="btn btn-primary pull-right" name="btnsubmit" >Send</button><br /><br /><br /><br />
			</form>
			</div>
			</div>
	</div>

	
	 <div class="foter"><!--footer-->
      <div class="container-fluid"> 
        <p>Copyright 2020<br>Designed By 38 Intake,Faisal Mahmud Rifat</p>
      </div> 
    </div><!--footer-->

</body>
</html>
