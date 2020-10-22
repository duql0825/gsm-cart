<?php
  include_once("./include/dbcon.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link rel="stylesheet" href="option.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="background">
      <div class="background2">
        <div>
            <img src="./img/logo.png" alt="" class="Project-Logo">
            <a href="./GSMCart/GIndex.php">
              <img src="./img/clear.png" alt="" class="Clear-Icon" align ="right">
            </a>
        </div>
        <div class="a">
          <hr class="Line">
          <img src="./img/shopping-bag.png" alt="" class="shopping-bag">
          <div class="store">
            스토어
          </div>
        </div>
        <hr class="Line">
        <?php
          if(@$_SESSION['id'] == NULL){
        ?>
        <div class="b">
          <a href="./login.php"><img src="./img/Sign in button.png" alt="" class="Sign-in-button"></a>
          <a href="./join.php">
            <img src="./img/signup.png" alt="" class="Sign-up-button">
          </a>
        </div>
        <?php
          }else{
        ?>
        <div class="b">
          <a href="./logout.php"><img src="./img/Signout.png" alt="" style="width:300px;"></a><br>
          <h1>사용자 프로필</h1>
          사용자 : <?= @$_SESSION['id']?>
        </div>
        <?php
          }
        ?>
      </div>
    </div>

  </body>
</html>
