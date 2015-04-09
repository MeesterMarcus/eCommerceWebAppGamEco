<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require "connect_to_mysql.php";

$type=$_POST['searchtype'];
$term=$_POST['searchterm'];

if($type == "title"){
	//get results that equal the term
	$sql = "SELECT * FROM Games where Title = '$term'";
} else if ($type == "genre"){
	//get results that equal the term
	$sql = "SELECT * FROM Games where Genre = '$term'";
} else if ($type == "developer"){
	//get results that equal the term
	$sql = "SELECT * FROM Games where Developer = '$term'";
} else {
	print_r("Could not find.");
}

$result = mysql_query($sql);
if (! $result){
   die("Error in result.");
}
$row = mysql_fetch_assoc($result);
print_r($row);
?>