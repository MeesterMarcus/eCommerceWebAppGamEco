<?php
require ('connect_db.php'); 

//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
$image = "none";

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  //require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();
   
  # Check for a first name.
  if ( empty( $_POST[ 'title' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  {$title = $_POST['title']  ; }
  
    if ( empty( $_POST[ 'desc' ] ) )
  { $errors[] = 'Enter a description.' ; }
  else
  {$description = $_POST['desc'] ; }
  
    if ( empty( $_POST[ 'dev' ] ) )
  { $errors[] = 'Enter a developer.' ; }
  else
  {$developer = $_POST['dev'] ; }
  
    if ( empty( $_POST[ 'gameimg' ] ) )
  { $errors[] = 'Enter a game img.' ; }
  else
  {$image = $_POST['gameimg'] ; }
  
    if ( empty( $_POST[ 'platform' ] ) )
  { $errors[] = 'Enter a platrom.' ; }
  else
  {$platform = $_POST['platform']; }
  
    if ( empty( $_POST[ 'price' ] ) )
  { $errors[] = 'Enter a price.' ; }
  else
  {$price = $_POST['price']; }
  
    if ( empty( $_POST[ 'key' ] ) )
  { $errors[] = 'Enter a key.' ; }
  else
  {$keycode = $_POST['key'] ; }
  
  if ( empty( $_POST[ 'quantity' ] ) )
  { $errors[] = 'Enter a quantity.' ; }
  else
  {$qty = $_POST['quantity']; }
  
    if ( empty( $_POST[ 'itemid' ] ) )
  { $errors[] = 'Enter a item id.' ; }
  else
  {$itemid = $_POST['itemid']; }


if($platform == "Xbox") {
	$image = "pics/xbox/".$image;
} else if ($platform == "PS4"){
	$image = "pics/ps4/".$image;
} else if ($platform == "PC"){
	$image = "pics/pc/".$image;
}  else if ($platform == "Nintendo"){
	$image = "pics/nintendo/".$image;
}
if ( empty( $errors ) ) 
{
$q = "INSERT INTO shop (item_id,item_name,item_desc,item_img,item_price,item_key,developer,platform,available) VALUES ('$itemid','$title','$description','$image','$price','$keycode','$developer','$platform','$qty')";
$x = "INSERT INTO gameK (item_ids, gameKey) values ('$itemid','$keycode')"; 
$r = @mysqli_query ( $dbc, $q ) ;
$y = @mysqli_query ( $dbc, $x ) ;
    if ($r && $y )
    { echo '<h1>Order Placement Successful</h1>'; }
    else
	echo 'Error: The item_id or item_key already exists.';
}
else{
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    //mysqli_close( $dbc );
  }  
}
	
echo '<p><a href ="home.php">Home</a> | <a href="shop.php">Shop</a> | <a href="transaction.php">Transaction_Search</a> | <a href="goodbye.php">Logout</a> </p>';

?>