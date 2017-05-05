<?php
/*
Plugin Name: Plupload Fix v2.3.1
Description: Plupload fix for: https://goo.gl/G6ZEJ3
Version: 1.0
*/

add_action('init', 'fix_plupload');
function fix_plupload() {
  wp_deregister_script('plupload');
  wp_register_script('plupload', plugins_url('plupload.full.min.js', __FILE__), array(), '2.3.1');
}
