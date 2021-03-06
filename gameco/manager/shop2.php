<?php # DISPLAY COMPLETE PRODUCTS PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Shop' ;
include ( 'header2.html' ) ;

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve items from 'shop' database table.
$q = "SELECT * FROM shop" ;
$r = mysqli_query( $dbc, $q ) ;

//<button type="submit" name ="definintion" value ="x">SORTS</button>;


$sql = "SELECT * FROM MyTable";

if ($_GET['sort'] == 'name')
{
    $q = "SELECT * FROM shop ORDER BY item_name ASC" ;
    $r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'price')
{
    $q = "SELECT * FROM shop ORDER BY item_price DESC" ;
    $r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'PS4'){
	$q = "SELECT * FROM shop WHERE platform = 'PS4'";
	$r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'Xbox'){
	$q = "SELECT * FROM shop WHERE platform = 'Xbox'";
	$r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'Nintendo'){
	$q = "SELECT * FROM shop WHERE platform = 'Nintendo'";
	$r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'PC'){
	$q = "SELECT * FROM shop WHERE platform = 'PC'";
	$r = mysqli_query( $dbc, $q ) ;
}
elseif ($_GET['sort'] == 'showall'){
	$q = "SELECT * FROM shop" ;
	$r = mysqli_query( $dbc, $q ) ;
}

/*
elseif ($_GET['sort'] == 'recorded')
{
    $sql .= " ORDER BY DateRecorded";
}
elseif($_GET['sort'] == 'added')
{
    $sql .= " ORDER BY DateAdded";
}*/

if ( mysqli_num_rows( $r ) > 0 )
{
  # Display body section.
  //echo '<table><tr>';
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
    echo '<td><strong>' . $row['item_name'] .'</strong><br><span style="font-size:smaller">'. $row['item_desc'] . '</span><br><img src='. $row['item_img'].'><br>$' . $row['item_price'] . '</td><br><br>';
    echo "\r\n";
  }
 // echo '</tr></table>';
  # Close database connection.
  mysqli_close( $dbc ) ; 
}

# Or display message.
else { echo '<p>There are currently no items in this shop.</p>' ; }

# Create navigation links.
echo '<p><a href ="home.php">Home</a> | <a href="shop.php">Shop</a> | <a href="transaction.php">Transaction_Search</a> | <a href="goodbye.php">Logout</a> </p>';

# Display footer section.
include ( 'footer.html' ) ;

?>