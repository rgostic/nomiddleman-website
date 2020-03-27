<?php
define('OM_VERSION', '1.0.0');
define('OM_DIR', get_template_directory_uri());
define('OM_UPLOADS_DIR', get_site_url() . '/wp-content/uploads/');

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

//add_action('init', 'NMM_register_nav_menus');

//function NMM_register_nav_menus() {
//    register_nav_menus([
//        'nmm-main-menu'   => 'Main Menu',
//	    'nmm-footer-menu' => 'Footer Menu',
//    ]);
//}

if (class_exists('Woocommerce')){
//    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
//function OM_add_woocommerce_support() {
//	add_theme_support( 'woocommerce' );
//}
//add_action( 'after_setup_theme', 'OM_add_woocommerce_support' );


// Enqueue scripts
add_action('wp_enqueue_scripts', 'OM_enqueue_scripts');
add_action('wp_enqueue_scripts', 'OM_enqueue_styles');
add_action('wp_enqueue_scripts', 'OM_load_dashicons_front_end');

function OM_enqueue_styles() {
	wp_enqueue_style('main-style', OM_DIR . '/css/app.css', '', OM_VERSION);
}

function OM_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', OM_DIR . '/bower_components/jquery/dist/jquery.min.js', '', OM_VERSION, true);
    wp_enqueue_script('om-main', OM_DIR . '/js/main.js', array('jquery'), OM_VERSION, true);
    wp_enqueue_script('what-input', OM_DIR . '/bower_components/what-input/dist/what-input.min.js', '', OM_VERSION, true);
    wp_enqueue_script('foundation', OM_DIR . '/bower_components/foundation-sites/dist/js/foundation.min.js', '', OM_VERSION, true);
}



function OM_load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}