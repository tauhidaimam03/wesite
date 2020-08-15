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


  <div class="row">
  <div class="col-md-4"></div>

  <div class="col-md-4"  style="background-color:grey; margin-top:30px; border-radius:20px; padding-top:15px;">
    <h5 align="center" style="color:yellow;"><i>DRESS</i></H5>
  <form action="dressScript.php" method="post" enctype="multipart/form-data">

    <input type="text" name="name" class="form-control" placeholder="Dress Name" style="margin-bottom: 12px;" required>

    <input type="number" name="price" class="form-control" placeholder="Price" style="margin-bottom: 12px;" required>

		<input type="number" name="quantity" class="form-control" placeholder="Quantity" style="margin-bottom: 12px;" required>

    <center> <input type="file"  name="image" style="margin-bottom: 12px;"></center>


     <center><button class="btn form-control" value="login" name="login"  style="background: pink; margin-top:12px;">Save</button></center>
     <center><font color="white">
     <?php
     if(isset($_GET['error'])){
       echo "failed to add dress";
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
