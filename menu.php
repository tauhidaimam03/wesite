

<div class="dropdown">

<?php if ($_SESSION['role'] == "Admin"){
?>
<a href="home.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Home</button></a>
<a href="profile.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Profile</button></a>
<a href="view_user.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View User</button></a>
<a href="view_customer.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Customer</button></a>
<a href="view_dress.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Dressing</button></a>
<a href="view_order.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Order</button></a>
<a href="logout.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Logout</button></a>
<?php
}else if ($_SESSION['role'] == "Staff"){
?>
<a href="home.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Home</button></a>
<a href="profile.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Profile</button></a>
<a href="view_customer.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Customer</button></a>
<a href="view_dress.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Dressing</button></a>

<a href="view_order.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Order</button></a>
<a href="logout.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Logout</button></a>
<?php
}else {
?>
<a href="home.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Home</button></a>
<a href="profile.php"><a href="profile.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Profile</button></a>
<a href="view_dress.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Dressing</button></a>
<a href="view_order.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">View Order</button></a>
<a href="logout.php"><button class="btn btn-primary " style="width:106%; margin-top:1px;" type="button">Logout</button></a>
<?php
}
?>
</div>
