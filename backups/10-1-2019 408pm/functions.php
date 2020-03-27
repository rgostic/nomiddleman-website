<?php
add_action('init', 'OM_register_nav_menus');

function OM_register_nav_menus() {
    register_nav_menus([
        'om-main-menu'   => 'Main Menu',
	    'om-footer-menu' => 'Footer Menu',
    ]);
}
