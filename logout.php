<?php
 session_start();
 session_destroy();

 echo "로그아웃";
 sleep(2);
 header('Location: ./menu.php');
?>
