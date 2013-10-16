<?php
add_action( 'wp', array( 'ACLUtils', 'checkLogin' ) );
class ACLUtils
{
function checkLogin()
{
	if(is_user_logged_in()) return;
	header( 'Location: ' . get_bloginfo( 'wpurl' ) . '/wp-login.php?redirect_to=' . $_SERVER['REQUEST_URI'] );
}
};
?>