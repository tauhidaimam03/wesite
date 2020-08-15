<?php
session_start();
include("connection.php");

if(isset($_POST['btnsubmit'])){

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$id = $_POST['id'];


$query = $con->query("UPDATE  user SET username='$user', passwor='$pass',staff='Staff',name='$name',address='$address', gender='$gender',phone= '$phone' WHERE username='$id'");

if ($query) {

  header("location:view_user.php");
}else {
  header("location:add_user.php".'?error');
}
}
else{
	 header("location:add_user.php");
}
?>
