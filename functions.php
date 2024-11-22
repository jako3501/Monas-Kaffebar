<?php 

function monas_register_stylesheet() {
     wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
     wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script("script", get_stylesheet_directory_uri() . "/index.js");
}
add_action("wp_enqueue_scripts", "monas_register_stylesheet");

//menu for navigation
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
        )
    );
}

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

add_action( 'init', 'register_my_menus' );

//disable gutenberg editor
function webshop_disable_gutenberg() {
    remove_post_type_support("page", "editor");
}
add_action("init", "webshop_disable_gutenberg");

// enable woocommerce plugin
function shop_enable_woocommerce() {
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce");