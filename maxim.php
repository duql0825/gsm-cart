<?php
  require("include/connections.php");
  include_once("./include/dbcon.php");
  mysql_query("set session character_set_connection=utf8;");
  mysql_query("set session character_set_results=utf8;");
  mysql_query("set session character_set_client=utf8;");
  $id = $_SESSION['id'];
  $cnt = $_POST['개수'];
  $sql_load="SELECT * FROM member WHERE member_id='$id'";
  $cart_load = mysql_query($sql_load);
  $cart_row = mysql_fetch_row($cart_load);
  $sql_product = "SELECT * FROM products WHERE id_product = 1";
  $product_load = mysql_query($sql_product);
  $product_row = mysql_fetch_row($product_load);
  echo $cart_row[6];
  echo $product_row[1];
  $new_cart = $product_row[1].$cnt."개";
  $sql_update="UPDATE member SET cart='$new_cart' WHERE member_id='$id'";
  $log_update=mysql_query($sql_update);
  echo "<script>window.location.replace('Gproduct.php');</script>";

 ?>
