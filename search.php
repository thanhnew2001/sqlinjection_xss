<body>
<form method='get' action='search.php'>
<h2>Search</h2>

<input type='text' name='search'/><br/>
<input type='submit' value='Search'/>
</form>

Search for: <?php echo $_GET['search'];?>

</body>