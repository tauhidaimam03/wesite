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
if ($_SESSION['role'] != "Customer") {
$query = $con->query("select * from dress, orders, user where orders.dressid = dress.id and customer = username and quantity > 0");
$row = $query->num_rows;
if ($row >0) {
?>
<h3>List Of Orders</h3>
<table border="1" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	<tr>
		<th>Customer Name</th>
		<th>Dress Name</th>
		<th>Price</th>
		<th>Quanity</th>
		<th>Total</th>
		<th>Date</th>
		<th>Dress</th>

	</tr>

	<?php
	while ($fetch = $query->fetch_assoc()) {

	?>
<tr>
<td><a href="cutomerDetail.php?id=<?php echo $fetch['username'];?>"><?php echo $fetch['fullName'];?></a></td>
<td><?php echo $fetch['dressname'];?></td>
<td><?php echo $fetch['price'];?></td>
<td><?php echo $fetch['quantities'];?></td>
<td><?php echo $fetch['price'] * $fetch['quantities'] ;?></td>
<td><?php echo $fetch['date'];?></td>
<td>
<img src="data:image/png;base64,
	<?php echo base64_encode($fetch['image']);?>
" width="25%">
</td>

</tr>
<?php

}
?>
</table>
<?php

}else {
	echo "no order have been made";
}
}
else {
	$user = $_SESSION['user'];
	$query = $con->query("select * from dress, orders, user where orders.dressid = dress.id and customer = username and quantity > 0 and username = '$user'");
	$row = $query->num_rows;
	if ($row >0) {
	?>
	<h3>List Of Orders</h3>
	<table border="1" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		<tr>
			<th>My Name</th>
			<th>Dress Name</th>
			<th>Price</th>
			<th>Quanity</th>
			<th>Total</th>
			<th>Date</th>
			<th>Dress</th>

		</tr>

		<?php
		while ($fetch = $query->fetch_assoc()) {

		?>
	<tr>
	<td><?php echo $fetch['fullName'];?></td>
	<td><?php echo $fetch['dressname'];?></td>
	<td><?php echo $fetch['price'];?></td>
	<td><?php echo $fetch['quantities'];?></td>
	<td><?php echo $fetch['price'] * $fetch['quantities'] ;?></td>
	<td><?php echo $fetch['date'];?></td>
	<td>
	<img src="data:image/png;base64,
		<?php echo base64_encode($fetch['image']);?>
	" width ="25%">
	</td>

	</tr>
	<?php

	}
	?>
	</table>
	<?php

	}else {
		echo "you have not make order yet";
	}

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
