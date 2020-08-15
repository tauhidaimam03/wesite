<?php
session_start();
include("connection.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = $con->query("select * from user where username = '$user' and password = '$pass'");
$row = $query->num_rows;
if ($row == 1) {
  $fetch = $query->fetch_assoc();
  $_SESSION['user'] = $user;
  $_SESSION['role'] = $fetch['role'];
  header("location:home.php");
}else {
  header("location:index.php".'?error');
}

?>
