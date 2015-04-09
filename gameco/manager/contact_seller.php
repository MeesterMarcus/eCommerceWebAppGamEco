<!DOCTYPE HTML>
<html lang ="en">
<head>
<meta charset ="UTF-8">
<title>Contact Seller</title>
<link rel ="stylesheet" href="includes/style.css">
</head>

<body>
<center>
<header><h1>Make An Order</h1></header>

<form action="submit_seller.php" method="post">
<fieldset style="width:30%">
<p> Title: <input  type="text" name="title" maxlength="50" size="30"> </p>
<p> Description: <input type="text" name="desc" maxlength="50" size="30"></p>
<p> Developer: <input type="text" name="dev" maxlength="50" size="30"></p>
<p> Image: <input type="file" name="gameimg" maxlength="50" size="30"></p>
<p> Item ID: <input  type="text" name="itemid" maxlength="10" size="10"> </p>
<p>
Platform:
<select name="platform">
<option value="PC">PC</option>
<option value="Xbox">Xbox One</option>
<option value="PS4">Playstation 4</option>
<option value="Nintendo">Nintendo</option>
</select> 
</p>

<p> Price: <input type="text" name="price" maxlength="10" size="5"></p>
<p> Key: <input type="text" name="key" maxlength="30" size="20"></p>
<p> Quantity: <input  type="text" name="quantity" maxlength="6" size="6"> </p>
<p><input type="submit" value="Submit" ></p>

</fieldset>
</form>
</center>
</body>
<p><a href ="home.php">Home</a> | <a href="shop.php">Shop</a> | <a href="transaction.php">Transaction</a> | <a href="goodbye.php">Logout</a></p>

</html>
