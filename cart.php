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
<h1>View cart</h1>
<a href="index.php?page=products">Go back to products page</a>
<form method="post" action="index.php?page=cart">

<table>

    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Items Price</th>
    </tr>

    <?php

        $sql="SELECT * FROM products WHERE id_product IN (";

                foreach($_SESSION['cart'] as $id => $value) {
                    $sql.=$id.",";
                }

                $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                $query=mysql_query($sql);
                $totalprice=0;
                while($row=mysql_fetch_array($query)){
                    $subtotal=$_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
                    $totalprice+=$subtotal;
                ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
                        <td><?php echo $row['price'] ?>$</td>
                        <td><?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?>$</td>
                    </tr>
                <?php

                }
    ?>
                <tr>
                    <td colspan="4">Total Price: <?php echo $totalprice ?></td>
                </tr>

</table>
<br />
<button type="submit" name="submit">Update Cart</button>
</form>
<br />
<p>To remove an item, set it's quantity to 0. </p>
