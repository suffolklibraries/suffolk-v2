<?php

	// Enqueue parent and child style sheets

	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/foundation.css' );
	    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );

	}


	// Add webfont loader for Typekit fonts

	add_action( 'wp_enqueue_scripts', 'child_add_scripts' );

	function child_add_scripts() {
	    wp_register_script(
	        'webfont-loader',
	        get_stylesheet_directory_uri() . '/js/webfont.js',
	        false,
	        '1.0',
	        true
	    );

	    wp_enqueue_script( 'webfont-loader' );

	}


	// Add another menu slot in the sidebar

	function register_my_menu() {
		  register_nav_menu('sidebar-menu',__( 'Sidebar menu' ));
		}
		add_action( 'init', 'register_my_menu' );

?>