<?php
include 'db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $display = $_POST['display'];

    $sql = "UPDATE products 
            SET product_name='$name', price='$price', quantity='$qty', display='$display'
            WHERE id=$id";

    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>
