<?php
session_start();
include("connection.php");

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$query = $con->query("insert into user values ('$user','$pass','Staff','$name','$address','$gender',$phone)");

if ($query) {

  header("location:view_user.php");
}else {
  header("location:add_user.php".'?error');
}

?>
