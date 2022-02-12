<?php
require "connection.php";

$fullname = $_POST['form_name'];
$email = $_POST['form_email'];
$password = $_POST['form_password'];
$address = $_POST['form_message'];


$query = "INSERT INTO users(`fullname`, `email`, `password`, `address`) VALUES('$fullname', '$email', '$password', '$address')";

mysqli_query($con, $query);

header('location:index.php');
?>