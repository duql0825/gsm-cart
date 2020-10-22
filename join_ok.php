<?php

  include_once("./include/dbcon.php");

  
  $id = $_POST['id'];
  $pw = $_POST['pw'];
  $pw2 = $_POST['pw2'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  if($pw == $pw2){
    $pass = md5($pw);
    $query = "insert into member values('','$name','$id','$pass','$phone','$address')";
    $result = mysqli_query($conn,$query);
    //sleep(5);

     header('Location:/GSMCart/login.php');


  }else {
    echo "<script>alert('회원가입중 오류가 발생하였습니다!')</script>";
  }

?>
