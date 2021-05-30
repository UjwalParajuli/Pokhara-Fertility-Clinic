<?php 

    // Calling custom post type and option page for the theme
    require get_template_directory() . '/inc/custom_post_types.php';
    require get_template_directory() . '/inc/options.php';

    // Setup admin panel styles and scripts
    function pfc_admin_scripts(){
        // Add CSS file to the admin panel page (Option Page)
        wp_register_style('pfc_admin_css', get_template_directory_uri() . '/assets/css/pfc.admin.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('pfc_admin_css');

        // Enqueue media to handle media uploader in option page
        wp_enqueue_media();

        // Add JS file to the admin option page
        wp_register_script('pfc_admin_script', get_template_directory_uri() . '/assets/js/admin.scripts.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('jquery');
        wp_enqueue_script('pfc_admin_script');

    } 
    add_action('admin_enqueue_scripts', 'pfc_admin_scripts');


    // Setup front end styles and scripts
    function pfc_styles(){
        // Adding CSS Files
        wp_register_style('pfc_bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), '1.0.0', 'all');
        wp_register_style('pfc_css', get_template_directory_uri() . '/assets/css/pfc.css', array(), '1.0.0', 'all');

        wp_enqueue_style('pfc_bootstrap_css');
        wp_enqueue_style('pfc_css');

        // Adding JS Files
        wp_register_script('pfc_js', get_template_directory_uri() . '/assets/js/pfc.js', NULL, '1.0.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('pfc_js');

    }
    add_action('wp_enqueue_scripts', 'pfc_styles');


    // Setup Featured Image
    function pfc_setup(){
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'pfc_setup');


    // Setup Menus
    function pfc_menus(){
        register_nav_menus(array(
            'header-menu' => __('Header Menu', 'pfc'),
            'footer-menu' => __('Footer Menu', 'pfc')
        ));

    }
    add_action('init', 'pfc_menus');


    // allow html in category and taxonomy descriptions
    remove_filter( 'pre_term_description', 'wp_filter_kses' );
    remove_filter( 'pre_link_description', 'wp_filter_kses' );
    remove_filter( 'pre_link_notes', 'wp_filter_kses' );
    remove_filter( 'term_description', 'wp_kses_data' );

    // Adding Excerpt in Wordpress Pages
    add_post_type_support( 'page', 'excerpt' );

    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter('upload_mimes', 'cc_mime_types');
      
    
    // Adding SVG Support
    function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
        }
        add_filter('upload_mimes', 'add_file_types_to_uploads');

?>