if ( !defined( 'ABSPATH' ) ) exit;

function twentytwentyfour_child_enqueue_styles() {
    wp_enqueue_style( 'twentytwentyfour-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentytwentyfour-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentytwentyfour-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles' );
