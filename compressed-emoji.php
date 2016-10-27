<?php
/*
Plugin Name: Compressed Emoji
Plugin URI: https://github.com/mustafauysal/compressed-emoji
Description: You know emoji,
Author: Mustafa Uysal
Version: 1.0
Author URI: http://uysalmustafa.com
License: GPLv2 (or later)
*/

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

