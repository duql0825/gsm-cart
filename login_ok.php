<?php
  include_once("./include/dbcon.php");

  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $pass = md5($pw);

  $query = "select * from member where member_id = '$id'";
  $result = mysqli_query($conn,$query);
  echo " 로그인에 실패하셨습니다.";
  sleep(1);
  while($row = mysqli_fetch_array($result)){

    if($id == $row[2]){

      if($pass == $row[3]){
        $_SESSION['id'] = $id;
        $_SESSION['state'] = "login";
        header('Location: /GSMCart/menu.php');

      }else{
        echo "비밀번호가 틀렸습니다.";
      }
    }else{
      echo "아이디를 확인하세요";
    }
  }

?>
