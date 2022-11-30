<?php

    // off admin bar
    add_filter('show_admin_bar','__return_false');

    // remove comments from admin menu
    add_action( 'admin_menu', 'remove_menus' );
    function remove_menus(){
        remove_menu_page( 'edit-comments.php' );
    }

    // Connecting scripts and styles
    add_action( 'wp_enqueue_scripts', 'theme_name_styles' );
    function theme_name_styles() {
        // style.css
        wp_enqueue_style('style', get_stylesheet_uri() );
        // main css
        wp_enqueue_style('main', get_template_directory_uri() . '/app/css/app.min.css');
        // main js
        wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/app/js/app.min.js');
        // icomoon
        wp_enqueue_style('icomoon', get_template_directory_uri() . '/app/libs/icomoon/style.css');
        // magnific popup
        wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/app/libs/magnific-popup/magnific-popup.css');
    }

    // add theme support
    add_theme_support('post-thumbnails');

    // category links
    add_filter('single_template', 'my_single_template');
    function my_single_template($single) {
        global $wp_query, $post;
        foreach((array)get_the_category() as $cat) {
            if(file_exists(get_template_directory() . '/single-' . $cat->slug . '.php')) {
                return get_template_directory() . '/single-' . $cat->slug . '.php';
            } elseif(file_exists('/single-' . $cat->term_id . '.php')) {
                return get_template_directory() . '/single-' . $cat->term_id . '.php';
            }
        }
        return $single;
    }

    // acf option page
    if(function_exists('acf_add_options_page'))
    {
        acf_add_options_page();
    }

    /* Events cpt */
    add_action('init', 'my_custom_init__events');
    function my_custom_init__events(){
        register_post_type('events', array(
            'labels'             => array(
                'name'               => 'Events',
                'singular_name'      => 'Event',
                'add_new'            => 'Add new',
                'add_new_item'       => 'Add new event',
                'edit_item'          => 'Edit event',
                'new_item'           => 'New event',
                'not_found'          => 'No event found',
                'parent_item_colon'  => '',
                'menu_name'          => 'Events'
            ),
            'public'             => false,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_rest'       => false,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'menu_icon'          => 'dashicons-flag', 
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => ['title', 'editor', 'thumbnail'],
        ) );
    }

?>