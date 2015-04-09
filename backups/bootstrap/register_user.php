<?php


require "connect_to_mysql.php";  

$value1 = $_POST['first_name'];
$value2 = $_POST['last_name'];
$value3 = $_POST['state'];
$value4 = $_POST['city'];
$value5 = $_POST['zip'];
$value6 = $_POST['street'];
$value7 = $_POST['dob'];

mysql_query("INSERT INTO `Person` (`idPerson`,`Fname`,`Lname`,`State`,`City`,`Zip`,`Street`,`DOB`)
VALUES (1,$value1,$value2,$value3,$value4,$value5,$value6,$value7);

?>