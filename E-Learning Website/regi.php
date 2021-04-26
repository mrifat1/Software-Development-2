<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login</title>

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

<div class="ttt"><!--header-->

      <div class="container"><!--mainmenu-->
        <div class="row">
          <div class="col-md-1 col-xs-12">
            
          </div>
          <div class="col-md-5 col-md-offset-6 col-xs-12">
            <div class="headright"> 
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Login.php">Courses</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!--/mainmenu-->
    </div><!--/header-->
   
   <div class="to">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Registration</h1>
                </div>
            </div>
        </div>
    </div>
	<form method="POST" action="" id="regform">
		<table border=0 align="center">
			<tr>
				<td><label>Enter Your First Name :</label></td>
				<td><input type="text" class="form-control" name="fname" placeholder="First Name"></td>
			</tr>
			<tr>
				<td><label>Enter Your Last Name :</label></td>
				<td><input type="text" class="form-control" name="lname" placeholder="Last Name"></td>
			</tr>
			<div class="checkbox">
				<tr>
					<td><label>Gender :</label></td>
					<td><input type="radio" name="gender" value="male">Male &nbsp; <input type="radio" name="gender" value="female">Female</td>
				</tr>
			</div>
			<tr>
				<td><label>Email address :</label></td>
				<td><input type="email" class="form-control" name="email" placeholder="Email ID"></td>
			</tr>
			<tr>
				<td><label>Enter Your User Name :</label></td>
				<td><input type="text" class="form-control" name="username" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter Your Password :</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
			</tr>
			<tr>
				<td><label>Confirm Password :</label></td>
				<td><input type="password" class="form-control" name="pass1" placeholder="Confirm Password"><br></td>
				
				<br>

			</tr>

			<tr>

				<br><td colspan="2" align="center"><button class="btn btn-block" name="btn">Register</button></td>
			</tr>
			
		</table>
	</form>
	<?php
	if(!empty($_POST['fname'])&&!empty($_POST['lname']))
	{
		if(isset($_POST['btn']))
		{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$query = "INSERT INTO user_info(Firstname,Lastname,Gender,Email_id,Username,Password) VALUES('$fname','$lname','$gender','$email','$username','$password')";
		$result = mysqli_query($strconn,$query);
		if($result)
		{
			echo "<div class='alert alert-success' role='alert'>Sign up successful</div>";
			header( "Location: Login.php" );
			
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Username or Email already registered</div>";
		}
		}
	}
	?>
	<br>
	<br>
	<br>
	<br>

    <div class="foter"><!--footer-->
      <div class="container-fluid"> 
        <p>Copyright 2020<br>Designed By 38 Intake,Faisal Mahmud Rifat</p>
      </div> 
    </div><!--footer-->
   
  </body>
</html>
 