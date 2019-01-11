<?php
$id = $_GET['id'];
include("db.php");

?>
<body>
<h2>This is a crosssite scripting request forgery</h2>
When users hover their mouse or even onload the page, a request to http://bestlab.us/security/delete.php?id=1 will be made.

If the users have logged in, the delete action will be done.

<img src="<?php echo $HOST?>/sqlinjection_xss/delete.php?id=<?php echo $id?>"/>
</body>