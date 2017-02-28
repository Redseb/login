<?php

// create a connection

$connect = mysqli_connect("localhost","miko","1234","miko");//Opens up a socket

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die;
}

// Perform queries

$new_user_username = $_POST['new_user_username'];
$new_user_password = $_POST['new_user_password'];

$result = mysqli_query($connect,"SELECT * FROM USERS WHERE username LIKE '$new_user_username'");

if(mysqli_num_rows($result) == 0){
    echo "looks like a unique username";
    $insert_new_user = mysqli_query($connect,"INSERT INTO USERS (username,password) VALUES ('$new_user_username','$new_user_password')");

} else {
    echo "looks like an duplicate username";
    die;
}



