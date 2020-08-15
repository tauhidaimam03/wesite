<?php
	include("session.php");
  include ('connection.php');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = $con->query("select * from user where username = '$id'");
$fetch = $query->fetch_assoc();
}


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


  <div class="row">
  <div class="col-md-4"></div>

  <div class="col-md-4"  style="background-color:grey; margin-top:30px; border-radius:20px; padding-top:15px;">
    <h5 align="center" style="color:yellow;"><i>User Form</i></H5>
  <form action="editScript.php" method="post">

    <input type="text" name="name" class="form-control" value='<?php echo $fetch['username'];?>' placeholder="Full Name" style="margin-bottom: 12px;" required>

    <select name="gender" class="form-control" style="margin-bottom: 12px;">
      <option value='<?php echo $fetch['gender'];?>'><?php echo $fetch['gender']?></option>
      <option>Male</option>
      <option>Female</option>
    </select>

    <input type="text" name="address" class="form-control" value='<?php echo $fetch['address'];?>' placeholder="Address" style="margin-bottom: 12px;" required>

    <input type="number" name="phone" class="form-control" value='<?php echo $fetch['phone'];?>' placeholder="Phone" style="margin-bottom: 12px;" required>

     <input type="text" name="user" class="form-control" value='<?php echo $fetch['username'];?>'placeholder="user" style="margin-bottom: 12px;" required>

      <input type="hidden" name="id" class="form-control"value='<?php echo $_GET['id'];?>' placeholder="username" style="margin-bottom: 12px;" required>

     <input type="Password" name="pass" class="form-control" value='<?php echo $fetch['password'];?>' placeholder="Password"  style="margin-bottom: 12px;" required>

     <center><button class="btn form-control" value="login" name="btnsubmit"  style="background: pink; margin-top:12px;">Save</button></center>
     <center><font color="white">
     <?php
     if(isset($_GET['error'])){
       echo "failed to add user";
     }
     ?>
     </font>
     </center>
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
