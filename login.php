<?php include('connectionLogin.php') ?>
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
    <link rel="stylesheet" href="stylesignup.css">
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
            <li class="nav-item">
              <a class="nav-link" href="homepage.php"> Home</a>
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

    <div class="home">
  	 <h2>Login</h2>
    </div> 
        
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input1">
            <label>Username</label>
            <input type="text" name="username" >
        </div>
        <div class="input1">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input1">
            <button type="submit" class="button" name="login">Login</button>
        </div>
        <p>
            Not yet a member? <a href="signup.php">Sign up</a>
        </p>
    </form>
      
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