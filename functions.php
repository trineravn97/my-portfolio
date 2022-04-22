<?php

function innocloud_register_stylesheet() {
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "innocloud_register_stylesheet");

function innocloud_register_menu_location() {
    register_nav_menu("header-menu-location", "Header Menu Location");
}
add_action("after_setup_theme", "innocloud_register_menu_location");

?>