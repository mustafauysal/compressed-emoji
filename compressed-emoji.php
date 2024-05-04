<?php
/*
Plugin Name: Compressed Emoji
Plugin URI: https://github.com/mustafauysal/compressed-emoji
Description: Same emoji, but compressed. It helps to serve emoji via your server.
Author: Mustafa Uysal
Version: 1.6
Author URI: https://uysalmustafa.com
License: GPLv2 (or later)
Text Domain: compressed-emoji
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'plugins_loaded', 'compressed_emoji_init' );

function compressed_emoji_init() {
	add_filter( 'emoji_url', 'compressed_emoji_url' );
	add_filter( 'emoji_svg_url', 'compressed_emoji_svg_url' );
}

function compressed_emoji_url() {
	$base_url = plugins_url( 'images/png/', __FILE__ );

	return apply_filters( 'compressed_emoji_url', $base_url );
}

function compressed_emoji_svg_url() {
	$base_url = plugins_url( 'images/svg/', __FILE__ );

	return apply_filters( 'compressed_emoji_svg_url', $base_url );
}
