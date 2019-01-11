<?php
session_start();
include("db.php");
$conn = new mysqli($HOST, $USER, $PASSWORD, $DB);

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

