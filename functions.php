<?php
add_action( 'wp_enqueue_scripts', 			'inkling_enqueue_scripts');
add_action( 'enqueue_block_editor_assets',  'inkling_enqueue_scripts' );


// Enqueue scripts and styles
if (!function_exists('inkling_enqueue_scripts')) :
function inkling_enqueue_scripts() {
	wp_enqueue_style( 'inkling-styles', get_template_directory_uri() . '/style.min.css', array(), filemtime(get_theme_file_path('/style.min.css')) );
}
endif;