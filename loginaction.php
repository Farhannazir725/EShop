<?php
session_start();
include 'admin/connection.php';



$email = $_POST['email'];
$pass = $_POST['password'];

$sql = mysqli_query($conn,"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'"); 
$row = mysqli_fetch_array($sql);
$num_row = mysqli_num_rows($sql);
echo $_SESSION['email']= $row['email']; 
 echo $_SESSION['username']= $row['names']; 
 echo $_SESSION['sno']= $row['sno']; 


    if($num_row == 1){
    echo "<script>alert('you are Successfully Login');</script>";
     echo "<script>window.location.href='index.php'</script>";
 }
 
 else{
     echo "<script>alert('Invalid Credentials');</script>";
     echo "<script>window.location.href='login.php';</script>";
 }
?>
