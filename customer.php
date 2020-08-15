
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>
<body>
   <div class="container">
		 <div class="row">
		 <div class="col-md-4"></div>

		 <div class="col-md-4"  style="background-color:grey; margin-top:100px; border-radius:20px; padding-top:15px;">
			 <h5 align="center" style="color:yellow;"><i>Customer Form</i></H5>
	   <form action="customerScript.php" method="post">

	     <input type="text" name="name" class="form-control" placeholder="Full Name" style="margin-bottom: 12px;" required>

	     <select name="gender" class="form-control" style="margin-bottom: 12px;">
	       <option hidden>Slect Gender</option>
	       <option>Male</option>
	       <option>Female</option>
	     </select>

	     <input type="text" name="address" class="form-control" placeholder="Address" style="margin-bottom: 12px;" required>

	     <input type="number" name="phone" class="form-control" placeholder="Phone" style="margin-bottom: 12px;" required>

	      <input type="text" name="user" class="form-control" placeholder="username" style="margin-bottom: 12px;" required>

	      <input type="Password" name="pass" class="form-control" placeholder="Password"  style="margin-bottom: 12px;" required>

	      <center><button class="btn form-control" value="login" name="login"  style="background: pink; margin-top:12px;">Register</button></center>
	      <center><font color="white">
	      <?php
	      if(isset($_GET['error'])){
	        echo "failed to register";
	      }
	      ?>
	      </font>
        </center>
				</div>
		</div>

	</div>

			 </form>
			</div>

			  <div class="col-md-4"></div>

	</div>
</div>

</body>
</html>
