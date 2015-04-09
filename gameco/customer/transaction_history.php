
<?php
$page_title = 'CUSTOMER TRANSACTINON RESULTS' ;
include ( 'header.html' ) ;

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }
$fn = $_SESSION['user_id'];
# Open database connection.
require ( 'connect_db.php' ) ;
$t = "&nbsp;&nbsp;&nbsp;&nbsp;";//couldnt get it to tab so used this
$q = "SELECT users.user_id, users.first_name, users.last_name, order_contents.order_id, orders.order_date, order_contents.item_id, order_contents.price , shop.item_name 
    FROM ((users JOIN orders ON users.user_id=orders.user_id) JOIN order_contents ON order_contents.order_id=orders.order_id) join shop on shop.item_id=order_contents.item_id where users.user_id = " . $fn;

$r = @mysqli_query ( $dbc, $q ) ;
if (mysqli_num_rows( $r ) > 0 ){ 
       echo '<h1>Purchase History</h1><br>';
       while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
        {
        echo '<td><table><strong>' .  "User ID: " .$row['user_id'] . $t .
                               "First Name: ".  $row['first_name'] . $t.
                               "Last Name: " .$row['last_name'] . $t.
                               "Order ID: " . $row['order_id'] . $t.
                               "Order Date: " . $row['order_date']. $t.
                               "Game ID: ". $row['item_id'] . $t .
                               "Price: " . $row['price'] . $t .
                               "Game Name: " . $row['item_name'] . $t 
                                                              .  '</strong></table></td><br><br>';
        echo "\r\n";
        }
}
mysqli_close( $dbc );
echo '<p><a href ="home.php">Home</a> | <a href="shop.php">Shop</a> | <a href="transaction_history.php">Transaction_Search</a> | <a href="goodbye.php">Logout</a> </p>';
?>