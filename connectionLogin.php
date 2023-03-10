<?php
session_start();

$username = "";
$email = "";
$fname = "";
$lname = "";
$errors = [];

// connect to the database
$db = mysqli_connect("localhost", "root", "", "backendgroupproject");

// REGISTER USER
if (isset($_POST["btn"])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST["fname"]);
    $lname = mysqli_real_escape_string($db, $_POST["lname"]);
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password_1 = mysqli_real_escape_string($db, $_POST["password_1"]);
   

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fname)) {
        array_push($errors, "Firstname is required");
    }
    if (empty($lname)) {
        array_push($errors, "Lastname is required");
    }

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $usercheckquery = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $usercheckquery);
    $users = mysqli_fetch_assoc($result);

    if ($users) {
        // if user exists
        if ($users["username"] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($users["email"] === $email) {
            array_push($errors, "email already exists");
        }
    }

    //  register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (firstname, lastname, username, email, password) 
  			  VALUES('$fname', '$lname','$username', '$email', '$password_1')";
        mysqli_query($db, $query);
        $_SESSION["username"] = $username;
        $_SESSION["success"] = "You are now logged in";
        header("location: home.php");
    }
}

// LOGIN USER
if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($db, $_POST["username"]);
    $password = mysqli_real_escape_string($db, $_POST["password"]);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        //$password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["success"] = "You are now logged in";
            header("location: course.php");
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>