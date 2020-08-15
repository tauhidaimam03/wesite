<?php
session_start();
include("connection.php");

$q = $_POST['quanity'];
$id = $_POST['id'];
$qty = $_POST['qty'];
$user = $_SESSION['user'];
$date = date("d/m/y");

if ($qty < $q) {
  $e = "Too many dress ordered";
  header("location:view_dress.php".'?error='.$e);

}else {

$query = $con->query("insert into orders values ('',$id,'$date','$user',$q)");
if ($query) {
  echo $newQ = $qty - $q;
  $query = $con->query("update dress set quantity = $newQ where id = $id ");

  header("location:view_order.php");
}else {
  header("location:view_dress.php");
}

}
?>
