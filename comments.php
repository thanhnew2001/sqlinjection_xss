<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = new mysqli("localhost", "root", "rmit", "security");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['comment'])){
	$sql2 = "insert into comments(comment) values('".$_POST['comment']."')";
	echo $sql2;

	$conn->query($sql2);
}

$sql = "select * from comments";
$result = $conn->query($sql);

echo "<h2>Comments</h2>";

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<li>".$row['comment']."<a href='delete.php?id=".$row['id']."'> | Delete</a></li>";
    }


}

$conn->close();
?>
<form method='post' action='comments.php'>
<h2>Submit a comment</h2>
Comment: <input type='text' name='comment'/><br/>
<input type='submit' value='Submit'/>
</form>
