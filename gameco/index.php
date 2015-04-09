<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
$page_title = 'Login Type' ;
include ( 'header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->


<form action="redirect_user.php" method="post">
Who Are You?:<br>
<select name="logintype">
<option value="customer">Customer</option>
<option value="manager">Manager</option>
<p><input type="submit" value="Go To Login" ></p>
</select> <br>
</form>

<?php 

# Display footer section.
include ( 'footer.html' ) ; 

?>
