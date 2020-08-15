
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>
<body>
   <div class="container">
		 <div class="row">
		 <div class="col-md-4"></div>

		 <div class="col-md-4"  style="background-color:grey; margin-top:130px; border-radius:20px; padding-top:15px;">
       <h5 align="center" style="color:yellow;"><i>HIJAB SELLING DRESS DESIGN</i></H5>
     <form action="loginScript.php" method="post">


				<input type="text" name="user" class="form-control" placeholder="username" style="margin-bottom: 12px;" required>

				<input type="Password" name="pass" class="form-control" placeholder="Password"  style="margin-bottom: 12px;" required>

				<center><button class="btn form-control" value="login" name="login"  style="background: pink; margin-top:12px;">login</button></center>
        <center><font color="white" size="2">
          <br><a href="customer.php" style="color:white;">Register if you dont have an accout (Customer) </a>
				<?php
				if(isset($_GET['error'])){
					echo "incorrect username or password";
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
