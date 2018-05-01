<?php
session_start();
$conn = new mysqli("localhost", "root", "rmit", "security");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "select * from products where id=".$_GET['id'];
echo $sql;

$result = $conn->query($sql);

echo "<h2>Details of product</h2>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "ID: ".$row["id"];
        echo ", Name: ".$row["name"];
        echo "<br/>";
    }

	$conn->close();
}

?>

