<?php include('connectionlogin.php') ?>

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

    <h2 style="text-align: center;">Sign Up</h2> 
        
    <div class="form-div">
      <form action = "signup.php" method = "post">
      <?php include('errors.php'); ?>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="First name">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Last name">
          
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
        
        <label for="uname">User Name</label>
        <input type="text" id="uname" name="username" placeholder="User name">
          
        <label for="psw">Password</label>
        <input type="text" id="psw" name="password_1" placeholder="Password">

        <input type="submit" name="btn">
      </form>
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