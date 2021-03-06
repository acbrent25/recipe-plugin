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
define('RECIPE_PLUGIN_URL', __FILE__ );



// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/init.php' );
include( 'process/save-post.php' );
include( 'process/filter-content.php');
include( 'includes/front/enqueue.php');

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );
add_action( 'init', 'recipe_init' );
add_action( 'admin_init', 'recipe_admin_init' );
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 );
add_filter( 'the_content', 'r_filter_recipe_content');
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts',  100);


// Shortcodes