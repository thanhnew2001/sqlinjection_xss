<?php
session_start();
include("db.php");
$conn = new mysqli($HOST, $USER, $PASSWORD, $DB);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username = $_POST['username'];
$password = $_POST['password'];


if(isset($username) && isset($password)){

$sql = "select * from users where username='".$username."' and password='".$password."'";
echo $sql;

$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["username"]. "<br>";
    // }

		$_SESSION['USERNAME'] = $username;
		echo "<script>alert('Login successfully'); document.location='home.php';</script>";
		


	} 
	else{
		$_SESSION['USERNAME'] = '';
		echo "<script>alert('Login failed')</script>";
		
	}

	$conn->close();
}

?>

<form method='post' action='login.php'>
<h2>Login</h2>
Username: <input type='text' name='username'/><br/>
Password: <input type='text' name='password'/>
<input type='submit' value='Login'/>
</form>
