<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    Product Name:
    <input type="text" name="product_name" value="<?= $data['product_name'] ?>"><br>

    Price:
    <input type="number" step="0.01" name="price" value="<?= $data['price'] ?>"><br>

    Quantity:
    <input type="number" name="quantity" value="<?= $data['quantity'] ?>"><br>

    Display:
    <select name="display">
        <option <?= $data['display']=="Yes"?"selected":"" ?>>Yes</option>
        <option <?= $data['display']=="No"?"selected":"" ?>>No</option>
    </select><br>

    <input type="submit" name="update" value="Update">
</form>

</body>
</html>
