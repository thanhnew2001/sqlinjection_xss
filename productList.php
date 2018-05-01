<?php
session_start();
$conn = new mysqli("localhost", "root", "rmit", "security");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "select * from products";

$result = $conn->query($sql);

echo "<h2>List of products</h2>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<li><a href='product.php?id=".$row["id"]."'>" . $row["name"]. "</a></li>";
    }

	$conn->close();
}

?>

