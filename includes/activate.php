<?php

function r_activate_plugin(){
  // Make this plugin compatible with 4.5 or higher
  if( version_compare( get_bloginfo( 'version' ) , '4.5', '<' )){
    wp_die( __('You must update Wordpress to use this plugin', 'recipe') );
  }
}