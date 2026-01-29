<?php
include 'db.php';

$q = $_GET['q'];

$sql = "SELECT * FROM products 
        WHERE product_name LIKE '%$q%' 
        AND display='Yes'";

$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['product_name']}</td>
            <td>{$row['price']}</td>
            <td>{$row['quantity']}</td>
          </tr>";
}
echo "</table>";
?>
