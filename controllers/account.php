<?php
error_reporting(0);
include '../dao.php';
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$conf = $_POST['confirm'];




if (strlen($pass) < 6) {
    echo "<script>alert('Password is too short '); window.location='../register.php'; </script>";
} elseif ($pass != $conf) {
    echo "<script>alert('Confirmation of password is not matching '); window.location='../register.php'; </script>";
} else {
    $query = createAccount($user, $pass, $email);
    $exc = mysqli_query($con, $query) or die(mysqli_error($con));
    if ($exc) {
        echo "<script>alert('Account created successfully '); window.location='../signin.php'; </script>";
    }
}
