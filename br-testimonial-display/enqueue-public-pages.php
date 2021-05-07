<?php

// enqueue public style
function myplugin_enqueue_style_public() {

	/*
		wp_enqueue_style(
			string           $handle,
			string           $src = '',
			array            $deps = array(),
			string|bool|null $ver = false,
			string           $media = 'all'
		)
	*/

	$src = plugin_dir_url( __FILE__ ) .'public/css/br-public.css';

	wp_enqueue_style( 'myplugin-public', $src, array(), null, 'all' );

}
add_action( 'wp_enqueue_scripts', 'myplugin_enqueue_style_public' );


// enqueue public script
function myplugin_enqueue_script_public() {

	/*
		wp_enqueue_script(
			string           $handle,
			string           $src = '',
			array            $deps = array(),
			string|bool|null $ver = false,
			bool             $in_footer = false
		)
	*/

	$src = plugin_dir_url( __FILE__ ) .'public/js/brtestimonials.js';

	wp_enqueue_script( 'myplugin-public', $src, array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'myplugin_enqueue_script_public' );




