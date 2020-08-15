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

<div class="row" style=" height:89%;background-color: cyan;">
<div class="col-md-2" style="border:none; height:100%; padding-left:0px;">

<?php
    include("menu.php");
?>

</div>
<div class="col-md-10" style="border:none; height:100%;background-color: #f4f7fa;">
<div align="right">
	<a href="add_user.php"><button class="btn btn-primary " style="margin-top:1px;" type="button">Edit User</button></a>
</div>
<?php
include("connection.php");
$query = $con->query("select * from user where role = 'Staff'");
$row = $query->num_rows;
if ($row >0) {
?>
<h3>List Of Users</h3>
<table border="1" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	<tr>
		<th>Full Name</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Phone</th>
		
		<th>UPDATE</th>
        <th>DELETE</th>
	</tr>

	<?php
	while ($fetch = $query->fetch_assoc()) {

	?>
<tr>
<td><?php echo $fetch['fullName'];?></td>
<td><?php echo $fetch['gender'];?></td>
<td><?php echo $fetch['address'];?></td>
<td><?php echo $fetch['phone'];?></td>

<td><a href="edit_user.php?id=<?php echo $fetch['username'];?>">Update</a></td>
<td><a href="delete_class.php?username=<?php echo $fetch['username'];?>">Delete</a></td>

</tr>
<?php

}
?>
</table>
<?php

}else {
	echo "no registered user";
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
