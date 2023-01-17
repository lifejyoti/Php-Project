<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tech Greek</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script>
      $(document).ready(function() {
        $("ul.navbar-nav > li").click(function(e) {
          $("ul.navbar-nav > li").removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>
  </head>
  <body>
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="logo" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="course.php">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="login.php">
                <span class="glyphicon glyphicon-log-in"></span> Login </a>
            </li>
            <li>
              <a href="signup.php">
                <span class="glyphicon glyphicon-user"></span> Sign Up </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="logout.php?logout='1'" style="color: darkgreen;">logout</a> </p>
    <?php endif ?>
</div>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slider1.jpg" alt="Image" />
          <div class="carousel-caption">
            <h3 style="color: Black;"></h3>
            <p style="color: Black;"></p>
          </div>
        </div>
        <div class="item">
          <img src="img/slider2.jpg" alt="Image" />
          <div class="carousel-caption">
            <h3 style="color: Black;"></h3>
            <p style="color: Black;"></p>
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
    
    <div class="container text-center">
      <h3>What We Do</h3>
      <br />
      <div class="row">
        <div class="col-sm-4">
          <img src="img/onlinetraning.jpg" class="img-responsive" style="width: 100%;" alt="Image" />
          <p>Computer Science Courses</p>
        </div>
        <div class="col-sm-4">
          <img src="img/course.jpg" class="img-responsive" style="width: 100%;" alt="Image" />
          <p>Come learn with Us</p>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h3 style="color: Black;">Explore Computer Science Courses</h3>
            <p style="color: Black;">Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics to data visualizations and interactive elements.Job-ready technologies like C++,C, Python, Javascript, Data Structure, Perl, XML, etc. Create job-ready talent to accelerate innovation that fuels growth.</p>
          </div>
        </div>
      </div>
    </div>
    <br />
    <!-- footer here -->
    <section class="footer">
      <div class="social">
        <a href="">
          <i class="fa fa-instagram"></i>
        </a>
        <a href="">
          <i class="fa fa-snapchat"></i>
        </a>
        <a href="">
          <i class="fa fa-whatsapp"></i>
        </a>
        <a href="">
          <i class="fa fa-facebook-f"></i>
        </a>
      </div>
      <ul class="list">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Course</a>
        </li>
        <li>
          <a href="#">Sign Up</a>
        </li>
        <li>
          <a href="#">login</a>
        </li>
      </ul>
      <p class="copyright"> © 2022 Copyright: <a class="acopyright" href="/"> TechGreek.com</a>
      </p>
    </section>
  </body>
</html>