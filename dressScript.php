<?php
session_start();
include("connection.php");

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image = $_FILES['image']['tmp_name'];
$image = addslashes(file_get_contents($image));


$query = $con->query("insert into dress values ('','$name',$price,'$image',$quantity)");

if ($query) {

  header("location:view_dress.php");
}else {
  header("location:add_dress.php".'?error');
}

?>
