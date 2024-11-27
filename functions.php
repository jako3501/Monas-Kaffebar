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
    remove_post_type_support("om-mona","editor");
}
add_action("init", "webshop_disable_gutenberg");

// enable woocommerce plugin
function shop_enable_woocommerce() {
    add_theme_support("woocommerce");
}
add_action("after_setup_theme", "shop_enable_woocommerce");

function enqueue_cart_counter_script() {
    // Enqueue the script for AJAX
    wp_enqueue_script('cart-counter', get_template_directory_uri() . '/js/cart-counter.js', array('jquery'), null, true);

    // Localize the script to use WordPress AJAX URL
    wp_localize_script('cart-counter', 'cart_counter_obj', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_enqueue_scripts', 'enqueue_cart_counter_script');

// Handle the AJAX request to get the cart item count
function get_cart_item_count() {
    echo WC()->cart->get_cart_contents_count();
    wp_die(); // Always call wp_die() after an AJAX request
}

add_action('wp_ajax_get_cart_item_count', 'get_cart_item_count'); // For logged-in users
add_action('wp_ajax_nopriv_get_cart_item_count', 'get_cart_item_count'); // For non-logged-in users