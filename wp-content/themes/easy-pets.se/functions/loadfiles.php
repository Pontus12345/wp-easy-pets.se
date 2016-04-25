<?php

/** 
* Load Styles
**/

function loadfiles()
{
	wp_register_style('fonts', 'http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic|Open+Sans:300italic,300,600,700,800|PT+Sans:400,700,400italic,700italic|Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Jura:400,300,600,500', array(), null, 'all' );

	wp_register_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', [], null, 'all' );
	wp_register_style('style', get_template_directory_uri() . '/css/main/main.css', ['bootstrap'], null, 'all' );


		// Load our Styles
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'style' );
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, true);

}

add_action( 'wp_enqueue_scripts', 'loadfiles' );