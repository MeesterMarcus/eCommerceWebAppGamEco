<?php # DISPLAY CHECKOUT PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Checkout' ;
include ( 'header.html' ) ;

# Check for passed total and cart.
if ( isset( $_GET['total'] ) && ( $_GET['total'] > 0 ) && (!empty($_SESSION['cart']) ) )
{
  # Open database connection.
  require ('connect_db.php');
  
  # Store buyer and order total in 'orders' database table.
  $q = "INSERT INTO orders ( user_id, total, order_date ) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW() ) ";
  $r = mysqli_query ($dbc, $q);
  
  # Retrieve current order number.
  $order_id = mysqli_insert_id($dbc) ;
  
  # Retrieve cart items from 'shop' database table.
  $q = "SELECT * FROM shop WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($dbc, $q);

  # Store order contents in 'order_contents' database table.
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO order_contents ( order_id, item_id, quantity, price )
    VALUES ( $order_id, ".$row['item_id'].",".$_SESSION['cart'][$row['item_id']]['quantity'].",".$_SESSION['cart'][$row['item_id']]['price'].")" ;
    $result = mysqli_query($dbc,$query);
  }
 
  # Close database connection.
  mysqli_close($dbc);

  # Display order number. 
  if (!empty($_SESSION['cart']))
  {
  # Connect to the database.
  require ('connect_db.php');
  
  # Retrieve all items in the cart from the 'shop' database table.
  $q = "SELECT * FROM shop WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($dbc, $q);
  //echo "<p>Thanks for your order. Your Order Number Is #".$order_id."</p>";
  # Display body section with a form and a table.
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
  	
   $idFromGame = $row['item_id'];

    $z = "SELECT * from gameK where item_ids = $idFromGame limit 1";
    $x = mysqli_query($dbc,$z) or die(mysql_error());
    $row2 = mysqli_fetch_array($x, MYSQLI_ASSOC);
    //echo "This is the key we should be using " . $row2['gameKey'] . "\n";
    $del = $row2['gameKey'];
  	
    echo "<fieldset style=\"width:30%\">";
    echo "<p>Your key is : ";

    # Display the row/s:
    echo "<tr>{$row2['gameKey']}</tr></p>";
    echo "<p>For your game : ";
    echo "<tr>{$row['item_name']}</tr></p>";

    echo "<p>Your game id was: ";
    echo "<tr>{$row['item_id']}</tr></p>";
    echo "</fieldset>";

    if (mysqli_num_rows($x) > 0){
         echo "<p>Thanks for your order. Your Order Number Is #".$order_id."</p>";
         //echo "<p>we still have some left\n</p>";

         $a = "DELETE from gameK where gameKey = '$del'";
         //$b = mysqli_query($dbc,$a) or die(mysql_error());
         if($dbc->query($a) === TRUE){
         //echo "<p>Deletion was Successful</p>";
         //echo mysqli_num_rows($x);
         //echo "<p>this is what the rows show" . mysqli_num_rows($x) . "</p>"; 
       }
    } 
    else{
      echo "<p>Sorry we ran out, please select another game from the shop.</p>";
      //echo "<p> the id we are trying to update is " . $idFromGame . "</p>";
      $xx = "UPDATE shop SET available = '0' WHERE item_id = $idFromGame";
      if($dbc->query($xx) === TRUE){
        //echo "<p>UPDATE was Successful</p>";
      }
    }   
  }
  include ( 'redeem.html');
  # Close the database connection.
  mysqli_close($dbc); 
  
}
  # Remove cart items.  
  $_SESSION['cart'] = NULL ;
}
# Or display a message.
else { echo '<p>There are no more items in your cart.</p>' ; }

# Create navigation links.
echo '<p><a href="shop.php">Shop</a> |  <a href="home.php">Home</a> | <a href="goodbye.php">Logout</a></p>' ;

# Display footer section.

include ( 'footer.html' ) ;
?>

