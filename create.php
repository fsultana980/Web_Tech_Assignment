<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['product_name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $display = $_POST['display'];

    $sql = "INSERT INTO products VALUES (NULL, '$name', '$price', '$qty', '$display')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Product</h2>

<form method="post">
    Product Name: <input type="text" name="product_name" required><br>
    Price: <input type="number" step="0.01" name="price" required><br>
    Quantity: <input type="number" name="quantity" required><br>

    Display:
    <select name="display">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select><br>

    <input type="submit" name="submit" value="Save">
</form>

</body>
</html>
