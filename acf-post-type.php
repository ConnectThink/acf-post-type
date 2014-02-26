<?php 
/**
 * Plugin Name: Advanced Custom Fields: Post Type Field
 * Plugin URI: https://github.com/ConnectThink/acf-post-type
 * Description: Adds a Post Type field option to Advanced Custom Fields
 * Version: 1.0
 * Author: Connect Think
 * Author URI: http://connectthink.com
 * License: GPLv3
 */

// only include add-on once
if( !function_exists('acf_register_post_type_field') ):


// add action to include field
add_action('acf/register_fields', 'acf_register_post_type_field');

function acf_register_post_type_field()
{
	include_once('post-type.php');
}


endif; // class_exists check

?>
