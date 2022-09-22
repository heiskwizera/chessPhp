<?php
error_reporting(0);
include '../dao.php';
$user = $_POST['username'];
$pass = $_POST['password'];



$query = getUser($user, $pass);
$exec = mysqli_query($con, $query);
$vail = mysqli_num_rows($exec);
if ($vail > 0) {
    $row = mysqli_fetch_array($exec);
    session_start();
    $_SESSION['user'] = $row['username'];

    echo "<script>window.location='../home.php'; </script>";
} else {
    echo "<script>alert('Invalid credentials '); window.location='../signin.php'; </script>";
}
