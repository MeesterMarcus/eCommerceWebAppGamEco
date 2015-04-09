
<?php
$page_title = 'TRANSACTINON' ;
include ( 'header3.html' ) ;


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php');
  # Initialize an error array.
   $errors = array();
   if ( empty( $_POST[ 'C_id' ] ) ){
     $errors[] = 'Enter a Customer Id.' ; 
   }
   else{ 
     $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'C_id' ] ) ) ; 
   }  


 if ( empty( $errors ) ) 
  {
    $t = "&nbsp;&nbsp;&nbsp;&nbsp;";//couldnt get it to tab so used this
    $q = "SELECT users.user_id, users.first_name, users.last_name, order_contents.order_id, orders.order_date, order_contents.item_id, order_contents.price , shop.item_name 
    FROM ((users JOIN orders ON users.user_id=orders.user_id) JOIN order_contents ON order_contents.order_id=orders.order_id) join shop on shop.item_id=order_contents.item_id where users.user_id = " . $fn;

    $r = @mysqli_query ( $dbc, $q ) ;
    if (mysqli_num_rows( $r ) > 0 ){ 
       echo '<h1>query success</h1><br>';
       while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
        {
        echo '<td><table><strong>' .  "User ID: " .$row['user_id'] . $t .
                               "First Name: ".  $row['first_name'] . $t.
                               "Last Name: " .$row['last_name'] . $t.
                               "Order ID: " . $row['order_id'] . $t.
                               "Order Date" . $row['order_date']. $t.
                               "Game ID: ". $row['item_id'] . $t .
                               "Price: " . $row['price'] . $t .
                               "Game Name: " . $row['item_name'] . $t 
                                                              .  '</strong></table></td><br><br>';
        echo "\r\n";
      }
    }
    else {
    	echo '<h1>try again</h1><br>';
    	echo '<p>There was no customer with that id</p>';
    }
    mysqli_close($dbc); 
    //include ('footer.html'); 
    //exit();
  }
  else {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  } 
// mysqli_close( $dbc );
}
 ?>
 
 
<h1>Search</h1>
<form action="transaction.php" method="post">
<p>Search By Customer Id: <input type="text" name="C_id"> </p>
<p><input type="submit" value="Submit" ></p></form>

<?php
echo '<p><a href ="home.php">Home</a> | <a href="shop.php">Shop</a> | <a href="transaction.php">Transaction_Search</a> | <a href="goodbye.php">Logout</a> </p>';
?>

