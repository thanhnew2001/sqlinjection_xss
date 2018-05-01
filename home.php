<?php
session_start();
echo $_SESSION['USERNAME'];

if(!isset($_SESSION['USERNAME']) || $_SESSION['USERNAME']==''){
	echo "<script>alert('You have not logined')</script>";
	echo "<script>document.location ='login.php'</script>";
}

?>
<h2>Welcome to home page</h2>
You have logged in successfully <br/>

<a href='productList.php'>View all products</a>

<a href='search.php'>Search a product</a>