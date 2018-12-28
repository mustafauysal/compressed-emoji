<?php
/*
Plugin Name: Compressed Emoji
Plugin URI: https://github.com/mustafauysal/compressed-emoji
Description: Same emoji, but compressed. It helps to serve emoji via your server.
Author: Mustafa Uysal
Version: 1.1
Author URI: http://uysalmustafa.com
License: GPLv2 (or later)
Text Domain: compressed-emoji
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'emoji_url', 'compressed_emoji_url' );
add_filter( 'emoji_svg_url', 'compressed_emoji_svg_url' );

function compressed_emoji_url() {
	$default_url = plugin_dir_url( __FILE__ ) . 'images/png/';

	return apply_filters( 'compressed_emoji_url', $default_url );
}


function compressed_emoji_svg_url() {
	$default_url = plugin_dir_url( __FILE__ ) . 'images/svg/';

	return apply_filters( 'compressed_emoji_svg_url', $default_url );
}

