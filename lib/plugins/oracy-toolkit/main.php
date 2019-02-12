<?php
/**
 * @package oracy Helper
 * @version 1.0
 */
/*
Plugin Name: oracy-toolkit
Plugin URI: http://perthizweb.com.au/plugin
Description: This is a helper plugin for all oracy
Version: 1.0
Author Name: Fajle Rabbi
Author URI: http:/perthbizweb.com.au/
Text Domain: oracy
*/


function oracy_toolkit_scripts(){
	wp_enqueue_style( 'owl-carousel', plugins_url( '/assets/css/owl.carousel.min.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'animate-css', plugins_url( '/assets/css/animate.css', __FILE__ ), array(), 'v2.2.1', 'all' );
	wp_enqueue_style( 'oracy-toolkit', plugins_url( '/assets/css/oracy-toolkit.css', __FILE__ ), array(), '1.0', 'all' );

	wp_enqueue_script( 'owl-carousel', plugins_url( '/assets/js/owl.carousel.min.js', __FILE__ ), array('jquery'), 'v2.2.1', true );
	wp_enqueue_script( 'main-script', plugins_url( '/assets/js/main.js', __FILE__ ), array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'oracy_toolkit_scripts' );








include_once('inc/oracy-shortcodes.php');
include_once('inc/oracy-kc-addons.php');

