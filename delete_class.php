<?php
     $sername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "hijab";
     $pdo = new PDO("mysql:host=$sername;dbname=$dbname",$username,$password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $sql="DELETE FROM user WHERE username=:username";
	 $stmt = $pdo->prepare($sql);
     $stmt->execute(array(':username'=>$_GET['username']));

    header('location:view_user.php');


?>