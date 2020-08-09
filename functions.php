<?php
define('NMM_VERSION', '1.0.1');
define('NMM_DIR', get_template_directory_uri());
define('NMM_UPLOADS_DIR', get_site_url() . '/wp-content/uploads/');

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

// Enqueue scripts and styles
add_action('wp_enqueue_scripts', 'NMM_enqueue_styles');
add_action('wp_enqueue_scripts', 'NMM_load_dashicons_front_end');

function NMM_enqueue_styles() {
	wp_enqueue_style('main-style', NMM_DIR . '/css/app.css', '', NMM_VERSION);
}

function NMM_load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}