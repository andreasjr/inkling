<?php
add_action( 'wp_enqueue_scripts', 			'concept_enqueue_scripts');
add_action( 'enqueue_block_editor_assets',  'concept_enqueue_scripts' );


// Enqueue scripts and styles
if (!function_exists('concept_enqueue_scripts')) :
function concept_enqueue_scripts() {
	wp_enqueue_style( 'concept-styles', get_template_directory_uri() . '/style.css', array(), filemtime(get_theme_file_path('/style.css')) );
}
endif;