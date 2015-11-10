<?php
/**
 * Muir Lake functions and definitions
 *
 * @package Muir Lake
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}
// Minimize css
define('CSS_MIN', true);
define('CSS_PRODUCTION', true);
/*
Custom menu item
*/
/*add_filter( 'wp_nav_menu_items', 'your_custom_menu_item' );
function your_custom_menu_item ( $items ) {
    $items .= '<li><a href="http://muirlakealliance.ca/sermons">Sermons</a></li>'; */
/*	$items .= '<ul>';
        $items .= '<li><a href="http://muirlakealliance.ca/sermons/how-he-speaks-part-1/">How He Speaks: Part 1</a></li>';
    $items .= '</ul>';
    return $items;
} */
if ( ! function_exists( 'muir_lake_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function muir_lake_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Muir Lake, use a find and replace
     * to change 'muir-lake-church' to the name of your theme in all the template files
     */
    load_theme_textdomain( 'muir-lake-church-church', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    //add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'muir-lake-church-church' ),
    ) );

    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'muir_lake_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );

    // Enable support for HTML5 markup.
    add_theme_support( 'html5', array(
        'comment-list',
        'search-form',
        'comment-form',
        'gallery',
    ) );
}
endif; // muir_lake_setup
add_action( 'after_setup_theme', 'muir_lake_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function muir_lake_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'muir-lake-church-church' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'muir_lake_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function muir_lake_scripts() {
    // cdn jquery, fastclick, lazysizes
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdn.jsdelivr.net/g/jquery@2.1.4,fastclick@1.0.6,lazysizes@1.3.1');
    wp_enqueue_script('jquery');
/*    wp_enqueue_style( 'muir-lake-church-style', get_stylesheet_uri() ); */
/* pre process the css with css-crush */
    if (CSS_PRODUCTION) {
        wp_enqueue_style( 'muir-lake-church-style', get_template_directory_uri() . '/style.crush.css' );
    } else {
        if (WP_DEBUG or !CSS_MIN) {
            wp_enqueue_style( 'muir-lake-church-style', 'http://' . $_SERVER['HTTP_HOST'] . csscrush_file(get_template_directory() . '/style.css' , array('minify' => 'false' , 'formatter' => 'block' ) ));
        } else {
            wp_enqueue_style( 'muir-lake-church-style', 'http://' . $_SERVER['HTTP_HOST'] . csscrush_file(get_template_directory() . '/style.css' ));
        }
    }

    wp_deregister_script('themename-style');
    wp_enqueue_script( 'muir-lake-church-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'muir-lake-church-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
/* include the css crush pre processor*/
require_once 'css-crush/CssCrush.php';
add_action( 'wp_enqueue_scripts', 'muir_lake_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
 /*
require get_template_directory() . '/inc/extras.php';
*/
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
    $mime_types['opus'] = 'audio/opus'; //Adding opus files
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );

/**
 * Load Jetpack compatibility file.
 */
/*
require get_template_directory() . '/inc/jetpack.php';
*/
