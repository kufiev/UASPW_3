<?php
session_start();
include ('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysqli_query($connect, "select * from user where username = '$username' and password = '$password'");

$xxx=mysqli_num_rows($query);
if($xxx==TRUE){
    $_SESSION['username']=$username;
    header ("location:index.php");
}
else{
    echo "<script>alert('wrong username or password'); location = 'login.php';</script>";
}
?>