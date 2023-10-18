<?php
include 'admin/connection.php';

$name = $_POST['name'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpass = $_POST['cpassword'];

$sql = mysqli_query($conn, "INSERT INTO `eshop`.`user` (`names`, `email`, `password`) VALUES ('$name', '$email', '$password')");
?>
<script>alert("Create Account Successfully");</script>
<script>window.location.href='login.php';</script>