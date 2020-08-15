 <?php
    include 'connection.php';
    $sql = "SELECT * from hijab where name=:name";
    $s = $conn->prepare($sql);
    $s->execute(array('user' => $_GET['user']));
    if ($s->rowCount()==1){
       $row=$s->fetch();
    }else{
      header('Location: edit_student.php');
    }
    if(isset($_POST['edithijab'])){
    $fullName=$_POST['Full Name'];
    $gender=$_POST['Gender'];
    $address=$_POST['Address'];
    $phone=$_GET['Phone'];
    $sql="UPDATE hijab set fullName=:Full Name,gender=:Gender,phone=:Phone where fullname=:Full name";
    $run=$conn->prepare($sql);
    $run->execute(array(':Name'=>$name,':Gender'=>$Gender,':phone'=>$Phone));
    header("location:view_user hijab.php");
  }
  ?>