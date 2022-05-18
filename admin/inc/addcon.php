<?php 
include("connect.php");
connect();
if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cPassword = $_POST["cpassword"];
    $hash = md5($password);
    if (empty($username)) {
        $error = "please enter your username";
    } elseif (empty($email)) {
        $error = "please enter your email";
    } elseif (empty($password)) {
        $error = "please enter your password";
    } elseif (empty($cPassword)) {
        $error = "please enter your confirmed Password";
    }
    // }elseif ($cPassword != $password) {
    //     $error = "please enter your check your Password";
    // }
    else {
         $insert = mysqli_query($con, "INSERT INTO admin (username,email,password) 
         VALUES ('$username','$email','$hash')");

    // close connection
     mysqli_close($con);
    }
    };
    header('location:../register.php');
