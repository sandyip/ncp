<?php

function register_resources()
{
    // Enqueue styles

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('slick', "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css", array(), '1.9.0', 'all');
    // wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null);

    wp_enqueue_style(
        'lightgallery-css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lightgallery.min.css',
        [],
        '2.8.3',
    );
    wp_enqueue_style(
        'lightgallery-fullscreen-css',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/css/lg-fullscreen.min.css',
        [],
        '2.8.3',
    );

    wp_enqueue_style('utilites-css', get_template_directory_uri() . '/assets/css/utilities.css', array(), null);
    wp_enqueue_style('critical-css', get_template_directory_uri() . '/assets/css/critical.css', array(), null);
    wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/styles.css', array(), null);

    // Enqueue scripts
    wp_enqueue_script("jQuery", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js", array(), "3.7.1", true);

    wp_enqueue_script("slick", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js", array('jQuery'), '1.9.0', true);
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.6/gsap.min.js", array('jQuery'), "3.12.6", true);
    wp_enqueue_script("scrollTrigger", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.6/ScrollTrigger.min.js", array('jQuery'), "3.12.6", true);
    wp_enqueue_script(
        'lightgallery-js',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js',
        [],
        '2.8.3',
        true,
    );
    wp_enqueue_script(
        'lg-fullscreen',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/plugins/fullscreen/lg-fullscreen.min.js',
        array('lightgallery-js'),
        '2.8.3',
        true,
    );
    wp_enqueue_script(
        'lg-zoom',
        'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/plugins/zoom/lg-zoom.min.js',
        array('lightgallery-js'),
        '2.8.3',
        true,
    );
    wp_enqueue_script("animtion-js", get_template_directory_uri() . "/assets/js/animation.min.js", array('jQuery', 'gsap', 'scrollTrigger', 'slick'), '1.0.0', true);
    wp_enqueue_script("script", get_template_directory_uri() . "/assets/js/script.min.js", array('jQuery', 'slick'), '1.0.0', true);
    wp_enqueue_script("makura", get_template_directory_uri() . "/assets/js/makura.min.js", array('jQuery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'register_resources');

function dashboard_resources()
{
    wp_enqueue_style('dashboard-styles-css', get_template_directory_uri() . '/assets/css/dashboard-style.css', array(), null);
}

add_action('admin_enqueue_scripts', 'dashboard_resources');

function preload_theme_fonts()
{
    $fonts = [
        'ProximaNova-Regular.woff2',
        'ProximaNova-Semibold.woff2',
        'ProximaNova-Bold.woff2',
        'ProximaNova-ExtraBold.woff2',
        'ProximaNova-Black.woff2',
    ];

    foreach ($fonts as $font) {
        printf(
            '<link rel="preload" href="%s/assets/fonts/%s" as="font" type="font/woff2" crossorigin="anonymous">' . "\n",
            get_template_directory_uri(),
            $font,
        );
    }

    // Preload Inter (Google Fonts)
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet"
';
}
add_action('wp_head', 'preload_theme_fonts', 1);


// acf theme options
add_action('acf/init', function() {
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
  }
});

/* Add custom classes to list item "li" */
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);

/* Add custom classes to anchor item "a" */
function add_additional_class_on_a($atts, $item, $args) {
    if (isset($args->add_a_class)) {
        $atts['class'] = $args->add_a_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);

// Event custom post type
  
function event_custom_post_type() {
  
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Our Events', 'Post Type General Name', 'ncp' ),
        'singular_name'       => _x( 'Our Event', 'Post Type Singular Name', 'ncp' ),
        'menu_name'           => __( 'Our Events', 'ncp' ),
        'parent_item_colon'   => __( 'Parent Our Event', 'ncp' ),
        'all_items'           => __( 'All Our Events', 'ncp' ),
        'view_item'           => __( 'View Our Event', 'ncp' ),
        'add_new_item'        => __( 'Add New Our Event', 'ncp' ),
        'add_new'             => __( 'Add New', 'ncp' ),
        'edit_item'           => __( 'Edit Our Event', 'ncp' ),
        'update_item'         => __( 'Update Our Event', 'ncp' ),
        'search_items'        => __( 'Search Our Event', 'ncp' ),
        'not_found'           => __( 'Not Found', 'ncp' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'ncp' ),
    );
      
// Set other options for Custom Post Type
      
    $args = array(
        'label'               => __( 'our events', 'ncp' ),
        'description'         => __( 'Our Events news and reviews', 'ncp' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-archive',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'our_events', $args );
  
}

  
add_action( 'init', 'event_custom_post_type', 0 );