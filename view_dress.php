<?php
	include("session.php");
?>

<html>
<head>
<title>Hijab</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="border:none; background:#458ab6;">
<div class="row">

	<div class="col-md-12">
		<h3 align="center" style=" color:yellow; padding-top:1px"><i>HIJAB SELLING DRESS DESIGN</i></h3>
	</div>


</div>
</div>
</div>

<div class="row" style=" height:115%;background-color: cyan;">
<div class="col-md-2" style="border:none; height:100%; padding-left:0px;">

<?php
    include("menu.php");
?>

</div>
<div class="col-md-10" style="border:none; height:100%;background-color: #f4f7fa;">
	<?php
	if ($_SESSION['role'] == "Admin") {

	 ?>
<div align="right">
	<a href="add_dress.php"><button class="btn btn-primary " style="margin-top:1px;" type="button">Add Dress</button></a>
</div>
<?php
}
if (isset($_GET['error'])) {

 ?>
<div align="right">
	<?php
echo $_GET['error'];

 ?>
</div>
<?php

	}
include("connection.php");
$query = $con->query("select * from dress where quantity > 0");
$row = $query->num_rows;
if ($row >0) {
?>
<h3>List Of Dress</h3>
<table border="1" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	<tr>
		<th>Dress Name</th>
		<th>Price</th>
		<th>Quanity</th>
		<th>Dress</th>
		<?php
		if ($_SESSION['role'] == "Customer") {
		 ?>
		 <th>How Many?</th>
		<th>Make Order</th>
		<?php
		}

		 ?>
	</tr>

	<?php
	while ($fetch = $query->fetch_assoc()) {

	?>
<tr>
<td><?php echo $fetch['dressname'];?></td>
<td><?php echo $fetch['price'];?></td>
<td><?php echo $fetch['quantity'];?></td>
<td>
<img src="data:image/png;base64,
	<?php echo base64_encode($fetch['image']);?>
" width= "20%">
</td>
<?php
if ($_SESSION['role'] == "Customer") {

 ?>
 <form class="" action="orderScript.php" method="post">

	<td>
		<input type="hidden" name="id" class="form-control" value="<?php echo $fetch['id'];?>" style="margin-bottom: 12px;" >
		<input type="hidden" name="qty" class="form-control" value="<?php echo $fetch['quantity'];?>" style="margin-bottom: 12px;" >
		<input type="text" name="quanity" class="form-control" placeholder="Quanity" style="margin-bottom: 12px;" required>
	</td>

	<td><button class="btn form-control" style="background: pink;">Order</button></td>

 </form>
<?php
}

 ?>
</tr>
<?php

}
?>
</table>
<?php

}else {
	echo "no registered dress";
}
?>

</div>

</div>

<div class="row">
<div class="col-md-12" style="border:none; color:white; height:30px; background:#458ab6;">
	<center></center>
</div>
</div>

</div>

</body>
</html>
