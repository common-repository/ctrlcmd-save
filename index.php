<?php
/*
Plugin Name: CTRL/CMD Save for WordPress
Description: Save your posts with the all-known shortcut CTRL + S (Windows) or CMD + S (Mac)
Author: wp-hotline.com ~ Stefan
Author URI: https://wp-hotline.com
Version: 1.1
*/

function ctrlsave_load_scripts($hook) {

  if ( 'post-new.php' != $hook and 'post.php' != $hook ) { return; }
  wp_enqueue_script( 'ctrlsave_load_scripts-admin-js', plugins_url('script.js', __FILE__) );

}
add_action( 'admin_enqueue_scripts', 'ctrlsave_load_scripts' );



?>
