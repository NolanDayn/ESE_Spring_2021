<?php
    session_start();

    //temp username and password
    $usernameTemp = 'group3';
    $passwordTemp = 'ESE2021';

//we are not logged in
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = "";
    $password = "";
    $login_err = "";

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $login_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $login_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($login_err)){

        if($password === $passwordTemp && $username === $usernameTemp){
            //Logged In
            session_start();
            $_SESSION["loggedin"] = TRUE;
            $_SESSION["username"] = $username;
            header("Location: member.php");
        }
    }
    else{
        echo $login_err;
    }

}

?>