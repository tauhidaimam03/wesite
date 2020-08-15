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

	<?php
	    include("connection.php");
			$id = $_GET['id'];
			$query = $con->query("select * from user where username = '$id'");
	  	$fetch = $query->fetch_assoc();
	?>

	<div class="row" style="margin-top:35px;">
		<div class="col-md-12" align="center">
				Customer Details
		</div>
	</div>
	<div class="row" style="margin-top:35px;">

		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<b>Full name</b>
		</div>
		<div class="col-md-3">
			<?php
			  	echo $fetch["fullName"];
			?>
		</div>
	</div>

	<div class="row" style="margin-top:35px;">

		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<b>Gender</b>
		</div>
		<div class="col-md-3">
			<?php
			  	echo $fetch["gender"];
			?>
		</div>
	</div>

	<div class="row" style="margin-top:35px;">

		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<b>Address</b>
		</div>
		<div class="col-md-3">
			<?php
			  	echo $fetch["address"];
			?>
		</div>
	</div>

	<div class="row" style="margin-top:35px;">

		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<b>Phone</b>
		</div>
		<div class="col-md-3">
			<?php
			  	echo $fetch["phone"];
			?>
		</div>
	</div>

	<div class="row" style="margin-top:35px;">

		<div class="col-md-3">

		</div>
		<div class="col-md-3">
				<b>Username</b>
		</div>
		<div class="col-md-3">
			<?php
			  	echo $fetch["username"];
			?>
		</div>
	</div>

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
