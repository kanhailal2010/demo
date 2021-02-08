<?php
/*
Plugin Name: Label Builder
Plugin URI: http://example.com
Description: desc
Version: 4.1.8
Author: Kanhai
Author URI: https://automattic.com/wordpress-plugins/
*/

// function that runs when shortcode is called
function wpb_demo_shortcode() {

// Things that you want to do.
$message = 'Hello world!';

// Output needs to be return
echo "the shortcode content".$message;
echo "<h1>Hello world </h1>";

}
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode');






