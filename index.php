<?php
/**
 * Plugin Name: Youtubee
* Plugin URI: http://www.cubidesigns.co.uk
* Description: Adds youtube videos anywhere on your site using the shortcode generated when the user enters the YouTube URL
* Version: 1.0
* Author: Reece McDonald
* Author URI: http://www.cubidesigns.co.uk
*/
function youtubee_scripts()
{
	wp_enqueue_style('youtubee.css', '/wp-content/plugins/Youtubee/css/youtubee.css');
}
function youtubee_addin()
{
	
	
}
add_action('wp_enqueue_scripts', 'youtubee_scripts');
add_shortcode('youtubee','youtubee_addin');