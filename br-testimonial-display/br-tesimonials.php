<?php
/*
 * Plugin Name:       BR Testimonials
 * Plugin URI:        https://fenwaytrilogymedia.com/isotope/
 * Description:       This will create a custom post type of testimonials. Enter person's name in title field, testimonial in the body text and tagg the company or orgnization if appropriate. Shortcodes for use are [show_primary_testimonials] and [show_secondary_testimonials] and [show_testimonials]. Designed to be used in conjuntion with BR Child Theme.
 * Version:           1.8
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Brian Rabuffetti
 * Author URI:        https://fenwaytrilogymedia.com/
 * License:           GPL v2 or later

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License with this program. If not, visit: https://www.gnu.org/licenses/
 
 */

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// include plugin dependencies: admin and public second one is a test
	require_once plugin_dir_path( __FILE__ ) . '/enqueue-public-pages.php';

// default plugin options
function brtestimonials_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}
 /*functions go here to create a post type and shortcode*/ 

function testimonials_post_type()
{
	$labels = array('name' => 'Testimonials', 'singular_name'=> 'Testimonial');
	$supports = array ('title','excerpt', 'editor', 'thumbnail', 'show_in_quick_edit', 'description', 'slug');
	$taxonomies = array ('featured_image', 'category', 'post_tag', 'post_type',);
	$args=array(
		'labels' => $labels,
		'supports' => $supports,
		'taxonomies' => $taxonomies,
		'public' => true,
		'has_archive'=>true);
		register_post_type('testimonials',$args);
}	
	add_action('init', 'testimonials_post_type');

/// different shortcodes crearted here

function showSecondaryTestimonials()
{
	$tax = array('taxonomy'=>'category', 'field'=>'slug', 'terms'=>'mass');
	$args = array('posts_per_page'=>'-1', 'post_type'=>'Testimonials', 'category_name' => 'secondary',); 
	$results = new WP_Query($args);
	$s = "";
	while($results->have_posts()):
	$results->the_post();

$s .="<div class='mySlides'><p>" . get_the_content('','',false) ."</p>
<p class='author'>" . the_title('','',false) ."</p></div>";
	endwhile;
	wp_reset_postdata();
	return "<div class='alignwide testimonial-box'> <div class='slideshow-container'>" .$s ."<a class='prev' onclick='plusSlides(-1)'>
	&laquo;</a>
	<a class='next' onclick='plusSlides(1)'>&raquo;</a>

<div class='dot-container'>
  <span class='dot' onclick='currentSlide(1)'></span> 
  <span class='dot' onclick='currentSlide(2)'></span> 
  <span class='dot' onclick='currentSlide(3)'></span> 
  <span class='dot' onclick='currentSlide(4)'></span> 
 </div>
</div>
</div>";
}
	
add_shortcode('show_secondary_testimonials', 'showSecondaryTestimonials');
// 

function showPrimaryTestimonials()
{
	$tax = array('taxonomy'=>'category', 'field'=>'slug', 'terms'=>'mass');
	$args = array('posts_per_page'=>'-1', 'post_type'=>'Testimonials', 'category_name' => 'primary',); 
	$results = new WP_Query($args);
	$s = "";
	while($results->have_posts()):
	$results->the_post();

$s .="<div class='mySlides'><p>" . get_the_content('','',false) ."</p>
<p class='author'>" . the_title('','',false) ."</p></div>";

	endwhile;
	wp_reset_postdata();
	return "<div class='alignwide testimonial-box'> <div class='slideshow-container'>" .$s ."<a class='prev' onclick='plusSlides(-1)'>
	&laquo;</a>
	<a class='next' onclick='plusSlides(1)'>&raquo;</a>

<div class='dot-container'>
  <span class='dot' onclick='currentSlide(1)'></span> 
  <span class='dot' onclick='currentSlide(2)'></span> 
  <span class='dot' onclick='currentSlide(3)'></span> 
  <span class='dot' onclick='currentSlide(4)'></span> 
 </div>
</div>
</div>";
}
	
add_shortcode('show_primary_testimonials', 'showPrimaryTestimonials');
// 

function showTestimonials()
{
	$tax = array('taxonomy'=>'category', 'field'=>'slug', 'terms'=>'mass');
	$args = array('posts_per_page'=>'-1', 'post_type'=>'Testimonials'); 
	$results = new WP_Query($args);
	$s = "";
	while($results->have_posts()):
	$results->the_post();

$s .="<div class='box-parent-one box-style'><p>" . get_the_content('','',false) ."</p>
<p>" . the_title('','',false) ."</p></div>";
	endwhile;
	wp_reset_postdata();
	return "<div class='alignwide'> <div>" .$s ."

</div>
</div>";
}
	
add_shortcode('show_testimonials', 'showTestimonials');
// 

?>