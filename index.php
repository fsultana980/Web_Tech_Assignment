<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Product List</h2>

<a href="create.php">Add New Product</a><br><br>

<input type="text" id="search" placeholder="Search product...">

<table border="1">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Action</th>
    </tr>

    <?php
    $sql = "SELECT * FROM products WHERE display='Yes'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['product_name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>

<div id="result"></div>

<script src="search.js"></script>
</body>
</html>
