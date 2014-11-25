<?php
/**
 * Plugin Name: Youtubee
* Plugin URI: http://www.cubidesigns.co.uk
* Description: Adds youtube videos anywhere on your site using the shortcode generated when the user enters the YouTube URL
* Version: 1.0
* Author: Reece McDonald
* Author URI: http://www.cubidesigns.co.uk
*/
function youtubee_scripts() //function to call all the scripts and stylesheets required by the plugin
{
	wp_enqueue_style('youtubee.css', '/wp-content/plugins/Youtubee/css/youtubee.css'); //enqueue's stylesheet for Youtubee
}
function youtubee_admin_menu() //function to add option page to wordpress
{
	add_options_page(
		'Youtubee Options', 	//Page Title
		'Youtubee',				//Menu Title
		'manage_options',		//Capability based on roles of current user
		'youtubee_options',		//Plugin Slug
		'youtubee_admin_page'	//Function which outputs user options
	);
}
function youtubee_admin_page() //function used to output on option page seen in function above youtubee_admin_menu
{
	if (!current_user_can( 'manage_options'))
	{
		wp_die(__('You do not have sufficient permissions to access this page.')); //If the current user doesn't have sufficient admin access display this message
	}
	//The following is displayed when the Youtubee Options page is accessed, "Hello World!" has been outputted for testing purposes
	echo '<div class="youtubee_wrapper">'; 
	echo '<p>Hello World!</p>';
	echo '</div>';
}
add_action('admin_menu','youtubee_admin_menu'); // Action adds menu option to wordpress through settings>>Youtubee outputting from function youtubee_admin_menu
add_action('wp_enqueue_scripts', 'youtubee_scripts'); // Actions allows wordpress to access function youtubee_scripts to import require stylesheets and scripts