<?php
require ('mydatabase.php');

class UserDomain
{
    
    private $db;

    function __construct()
    {
        $this->db = new Database();
    }
    
    // to add user in DB
    function add_user($fname, $lname, $email, $uname, $psw)
    {
        $randomUserId = rand(10000,99999);//to generate a random integer       
        $_SESSION["session_uId"] = $randomUserId;
        
        $query = "INSERT INTO users(userId, firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?, ?)";
        
        //create prepared statement
        $stmt = mysqli_prepare($this
            ->db
            ->get_dbc() , $query);
        
        //bind values to the parameter
        mysqli_stmt_bind_param($stmt, 'ssssss', $randomUserId, $fname, $lname, $email, $uname, $psw);
        
        // execute query 
        $result = mysqli_stmt_execute($stmt);
        
        return $result;
    }
}
?>
