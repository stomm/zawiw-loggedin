<?php
/*
Plugin Name: ZAWiW Login
Plugin URI:
Description: Show and hide content for logged in users
Version: 1.0
Author: Steffen Tomm
Author URI: http://svolpert.eu
License: MIT
*/

// Defines the zawiw-loggedin shortcode
add_shortcode( 'zawiw-loggedin', 'zawiw_loggedin_shortcode' );

function zawiw_loggedin_shortcode( $atts, $content="" ) {
	return is_user_logged_in() ? $content : "";
}

// Defines the zawiw-loggedout shortcode
add_shortcode( 'zawiw-loggedout', 'zawiw_loggedout_shortcode' );

function zawiw_loggedout_shortcode( $atts, $content="" ) {
	return is_user_logged_in() ? "" : $content;
}


?>
