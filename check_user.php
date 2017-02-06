<?php
session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$validUser = "username";
$validPassword = "1234";

if ($username == $validUser && $password == $validPassword){
    $_SESSION['logged_in'] = TRUE;
    header('location: index.php');

} else {

    $_SESSION['login_attempt'] = $SESSION['login_attempt'] + 1;

    if($_SESSION['login_attempt'] < 3){
        echo "Wrong Password or Username";
    } else {
        echo "YOU HAVE BEEN LOCKED OUT, PLEASE TRY AGAIN LATER";
        $_SESSION['login_block'] = TRUE;

    }

}



/**
 * Created by PhpStorm.
 * User: 18zyzanski_m
 * Date: 03/02/17
 * Time: 09:12
 */
