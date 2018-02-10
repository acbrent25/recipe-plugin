<?php
/**
 * Plugin Name:       Recipe Saver
 * Description:       A simple worpdress plugin that allows you create and save recipes
 * Version:           1.0
 * Author:            Adam Champagne
 * Author URI:        http://adamchampagne.com/
 * Text Domain:       recipe
 */

// Make sure we don't expose any info if called directly
if(!function_exists('add_action')){
  die( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );
}

// Setup



// Includes
include( 'includes/activate.php' );


// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );


// Shortcodes