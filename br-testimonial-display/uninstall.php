<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

function tesitmonials_delete_plugin() {
	global $wpdb;

	delete_option( 'brtestimonials' );

	$posts = get_posts(
		array(
			'numberposts' => -1,
			'post_type' => 'testimonials_post_type',
			'post_status' => 'any',
		)
	);

	foreach ( $posts as $post ) {
		wp_delete_post( $post->ID, true );
	}

	$wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
		$wpdb->prefix . 'brtestimonials' ) );
}

tesitmonials_delete_plugin();
