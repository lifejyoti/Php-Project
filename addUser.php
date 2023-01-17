<?php
    // started session
    session_start();
    require ('userDomain.php');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    $errors = [];
    
    //basic validation
    if(!empty($fname)){
        $fname = $fname;  
    } else {
        $fname = null;
        $errors[] = "<p> First Name is required!!</p>";
    }

    if(!empty($lname)){
        $lname = $lname;  
    } else {
        $lname = null;
        $errors[] = "<p> Last Name is required!!</p>";
    }
    
    if(!empty($email)){
        $email = $email;  
    } else {
        $email = null;
        $errors[] = "<p> Email is required!!</p>";
    }

    if(!empty($uname)){
        $uname = $uname;  
    } else {
        $uname = null;
        $errors[] = "<p> User Name is required!!</p>";
    }

    if(!empty($psw)){
        $psw = $psw;  
    } else {
        $psw = null;
        $errors[] = "<p> Password is required!!</p>";
    }

    if(count($errors) == 0){
        // creating object of class UserDomain
        $userDomain = new UserDomain();

        $result = $userDomain->add_user($fname, $lname, $email, $uname, $psw);

        if ($result)
        {
            echo 'User saved successfully !!';
            // Setting session variables
            $_SESSION["session_uname"] = $uname;
            $_SESSION['session_email'] = $email;
            $_SESSION['session_fname'] = $fname;
            $_SESSION['session_lname'] = $lname;
            header("Location: login.php");
        } else {
            echo 'Failure!';
        }
    } else {
        foreach($errors as $error){
            echo $error;
        }
        echo '<a href="homepage.php"><button>Take me to homepage</button></a>';  
    }   
?>
