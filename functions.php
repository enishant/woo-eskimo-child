<?php
function eskimo_child_theme_styles() {
    wp_enqueue_style( 'eskimo-style', get_template_directory_uri() . '/style.css', array( 'bootstrap' ) );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'eskimo-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'eskimo_child_theme_styles');
?>