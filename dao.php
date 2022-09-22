<?php
$con = mysqli_connect('localhost', 'root', '', 'chessapp');



function getUser($username, $password)
{
    return "SELECT * FROM users where username='$username' and password='$password'";
}


function createAccount($username, $password, $email)
{
    return "INSERT into users VALUES (null,'$email','$username','$password')";
}
