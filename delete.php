<?php
session_start();
require("db.php");

echo $_SESSION['USERNAME'];

if(!isset($_SESSION['USERNAME']) || $_SESSION['USERNAME']==''){
	exit;
}


$conn = new mysqli($HOST, $USER, $PASSWORD, $DB);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_GET['id'])){
	$sql = "delete from comments where id=".$_GET['id'];

	echo $sql;

	$conn->query($sql);

	echo "<script>document.location='comments.php'</script>";
}

?>