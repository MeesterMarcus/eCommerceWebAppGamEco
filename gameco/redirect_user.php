<?php

$user = $_POST['logintype'];
if($user == "customer"){
//go to customer login
echo "<script>window.location = 'customer/index.php'</script>";
} else if ($user == "manager"){
//go to manager login
echo "<script>window.location = 'manager/index.php'</script>";
} else {
	die("Error Wrong User"); 
}