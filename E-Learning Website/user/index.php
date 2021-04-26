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
    session_start();
    if(isset($_SESSION["username"]))
    {
      $username=$_SESSION["username"];
    }
    else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

    }
  ?>


    <div class="tt"><!--header-->

      <div class="container"><!--mainmenu-->
        <div class="row">
          <div class="col-md-5 col-md-offset-6 col-xs-12">
            <div class="headright"> 
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="courses.php">Courses</a></li>
                
                <li><a href="contact.php">Contact</a></li>
                <li><a href="../index.php">Log Out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!--/mainmenu-->
    </div><!--/header-->
   <header id="head" class="secondary">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1>Welcome <?php echo $username;?></h1>
        </div>
      </div>
    </div>
  </header>
  <div id="courses">
    <section class="container">
      <h2>Online Courses</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="featured-box">
          <a href="courses.php">
              
            <div class="text">
              <h3>Courses</h3>
              
            </div>
            <div class="pict">
                  <img src="images/picture8.jpg">
          </div>
          </a>
          </div>
          
        </div>
        
        <div class="col-md-4">
          <div class="featured-box">
          <a href="manage.php">
           
            <div class="text">
              <h3>Manage Profile</h3>
              
            </div>
             <div class="pict">
                  <img src="images/manage.jpg">
          </div>
          </a>
          </div>
                   
        </div>
      </div>
    </section>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  

    <div class="foter"><!--footer-->
      <div class="container-fluid"> 
        <p>Copyright 2020<br>Designed By 38 Intake,Faisal Mahmud Rifat</p>
      </div> 
    </div><!--footer-->
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="assets/js/modernizr-latest.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.cslider.js"></script>
  <script src="assets/js/custom.js"></script>
  </body>
</html>