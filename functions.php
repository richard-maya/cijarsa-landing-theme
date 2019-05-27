<?php
	if(!isset($content_width)){
		$content_width = 660;
	}

	function cijarsawp_setup(){
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		
		// require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		
		// register_nav_menus( array(
		// 	'primary' => __( 'Primary Menu', 'THEMENAME' ),
		// ) );
	}

	add_action('after_setup_theme', 'cijarsawp_setup');

	function cijarsa_scripts(){
		wp_enqueue_style('cijarsa', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('cijarsa', get_template_directory_uri() . '/cijarsa.min.js');
	}

	add_action('wp_enqueue_scripts', 'cijarsa_scripts');
?>