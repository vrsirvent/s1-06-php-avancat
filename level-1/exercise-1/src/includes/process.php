<?php
session_start();

$username = $_POST['username']; 
$location = $_POST['location']; 
$age = $_POST['age']; 
$email = $_POST['email']; 

$_SESSION['username'] = $username;
$_SESSION['location'] = $location;
$_SESSION['age'] = $age;
$_SESSION['email'] = $email;

header("Location: ../data.php");
exit();
?>


