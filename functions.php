<?php 

function monas_register_stylesheet() {
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js");
}
add_action("wp_enqueue_scripts", "monas_register_stylesheet");