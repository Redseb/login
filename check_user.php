<?php
session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$validUser = "username";
$validPassword = "1234";

echo "You have passed username: $username and a password of : $password";

if ($username == $validUser && $password == $validPassword){
    $_SESSION['logged_in'] = TRUE;
    header('location: index.php');

} else {
    echo "Wrong Password or Username";
}



/**
 * Created by PhpStorm.
 * User: 18zyzanski_m
 * Date: 03/02/17
 * Time: 09:12
 */
