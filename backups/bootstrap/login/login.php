<?php


require('connect_to_mysql.php');

if(isset($_POST['submit'])){
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$password = md5($pass);

mysql_query("INSERT INTO `Login` (`username`,`password`)
VALUES ($username,$password);

?>