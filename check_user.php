<?php
session_start();//Starts the session


$user_name = $_POST['username'];
$user_password = $_POST['password'];

$valid_user = "username";
$valid_password = "1234";

if ($user_name == $valid_user && $user_password == $valid_password){

    $_SESSION['logged_in'] = TRUE;
    $_SESSION['username'] = $user_name;
    header('location: index.php');

} else {

    $_SESSION['login_attempt'] = ($_SESSION['login_attempt'] +1);
    $login_attempt = $_SESSION['login_attempt'];
    echo "failed attempt: $login_attempt";

    if ($login_attempt == 2){

        echo "<br /> no. we are locking you out.";
        $_SESSION['locked_out'] = TRUE;

    }
}

/**
 * Created by PhpStorm.
 * User: BMacKenty
 * Date: 06/02/17
 * Time: 14:16
 */
?>​