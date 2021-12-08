<?php

/*
Plugin Name: Visual Composer Addons by Bit14
Plugin URI: http://www.bit14.com
Description: Visual Composer Addons by Bit14
Version: 1.0.4
Author: Bit14
Author URI: http://pagebuilderaddons.com
Text Domain: bit14
*/

//Call Before VC Init
add_action('vc_before_init','bit14_before_vc_init');

function bit14_before_vc_init(){

	$classes = [
		'bit-counter-lists',
		'bit-iconic-list',
		'bit-newsletter-subscriber',
		'bit-testimonial-lists',
	];

	$folder = plugin_dir_path( __FILE__ ) . "classes/";

	foreach ( $classes as $class ) {

		$file = 'class-'.$class.'.php';
		include_once $folder.$file;
	}

}

//enqueue styles and scripts
add_action('wp_enqueue_scripts','bit14_vc_enqueue_scripts');

function bit14_vc_enqueue_scripts(){

	$assets_url = plugin_dir_url(__FILE__) . 'assets/';

	if ( !wp_script_is('slick.js','enqueued') && !wp_script_is('slick.min.js','enqueued') ){
		wp_enqueue_style( 'slick', $assets_url.'css/slick.css', false );
		wp_enqueue_script( 'slick', $assets_url.'js/slick.min.js', array('jquery'), false );
	}

	wp_enqueue_style( 'bit14-vc-addons', $assets_url.'css/style.css', false );
	wp_enqueue_script( 'bit14-vc-addons', $assets_url.'js/script.js', array('jquery'), false );

	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/b844aaf4ff.js');

	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

	wp_enqueue_style( 'bit14-icomoon-icons', $assets_url.'font/style.css' );

}

//enqueue styles and scripts admin
add_action('admin_enqueue_scripts','bit14_vc_admin_enqueue_scripts');
function bit14_vc_admin_enqueue_scripts(){

	$assets_url = plugin_dir_url(__FILE__) . 'assets/';

	wp_enqueue_script( 'bit14-vc-addons', $assets_url.'js/admin.js', array('jquery'), false );
	
	wp_enqueue_style( 'bit14-vc-addons', $assets_url.'css/admin.css');

	wp_localize_script('bit14-vc-addons','assets_url',$assets_url);
}