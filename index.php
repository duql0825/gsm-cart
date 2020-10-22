<?php
    require("include/connections.php");
    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    if(isset($_GET['action']) && $_GET['action']=="add"){

        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }else{

            $sql_s="SELECT * FROM products
                WHERE id_product={$id}";
            $query_s=mysql_query($sql_s);
            if(mysql_num_rows($query_s)!=0){
                $row_s=mysql_fetch_array($query_s);

                $_SESSION['cart'][$row_s['id_product']]=array(
                        "quantity" => 1,
                        "price" => $row_s['price']
                    );


            }else{

                $message="This product id it's invalid!";

            }

        }

    }

?>
    <h1>Product List</h1>
    <?php
        if(isset($message)){
            echo "<h2>$message</h2>";
        }

    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php

            $sql= "SELECT * FROM products ORDER BY id_product ASC";
            $query = mysql_query($sql);

            while ($row = mysql_fetch_array($query)) {

        ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?>원</td>
                <td><a href="index.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td>
            </tr>
        <?php

            }

        ?>

    </table>
    <h1>Cart</h1>
<?php
      include_once("./include/dbcon.php");
    if(isset($_GET['id']))
    {
      $gid = $_GET['id'];
      $id = $_SESSION['id'];
      $sql_load="SELECT * FROM member WHERE member_id='$id'";
      $cart_load = mysql_query($sql_load);
      $cart_row = mysql_fetch_row($cart_load);
      $sql_product = "SELECT * FROM products WHERE id_product = '$gid'";
      $product_load = mysql_query($sql_product);
      $product_row = mysql_fetch_row($product_load);
      echo $cart_row[6];
      echo $product_row[1];
      $new_cart = $cart_row[6]." ".$product_row[1];
      $sql_update="UPDATE member SET cart='$new_cart' WHERE member_id='$id'";
      $log_update=mysql_query($sql_update);
    }
    if(isset($_SESSION['cart'])){

        $sql="SELECT * FROM products WHERE id_product IN (";

        foreach($_SESSION['cart'] as $id => $value) {
            $sql.=$id.",";
        }

        $sql=substr($sql, 0, -1).") ORDER BY name ASC";
        $query=mysql_query($sql);
        while($row=mysql_fetch_array($query)){

        ?>
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p>
        <?php

        }
    ?>
        <hr />
        <a href="index.php?page=cart">Go to cart</a>
    <?php

    }else{

        echo "<p>Your Cart is empty. Please add some products.</p>";

    }

?>
