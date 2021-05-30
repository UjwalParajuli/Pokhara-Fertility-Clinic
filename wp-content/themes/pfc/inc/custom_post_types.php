<?php

    // Custom Post Type for Services
    function pfc_custom_post_services(){
        $labels = array(
            'name' => _x( 'Services', 'pfc'),
            'singular_name' => _x( 'Service', 'post type singular name', 'pfc'),
            'menu_name' => _x('Services', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Services', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Service', 'pfc'),
            'new_item' => __('New Service', 'pfc'),
            'edit_item' => __('Edit Service', 'pfc'),
            'view_item' => __('View Service', 'pfc'),
            'all_items' => __('All Services', 'pfc'),
            'search_items' => __('Search Services', 'pfc'),
            'parent_item_colon' => __('Parent Service:', 'pfc'),
            'not_found' => __('No Services Found', 'pfc'),
            'not_found_in_trash' => __('No Services Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'our-services' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
            'taxonomies' => array( 'category'),
    
        );

        register_post_type('our-services', $args);

    }
    add_action('init', 'pfc_custom_post_services');


    // Custom Post Type for Facilities
    function pfc_custom_post_facilities(){
        $labels = array(
            'name' => _x( 'Facilities', 'pfc'),
            'singular_name' => _x( 'Facility', 'post type singular name', 'pfc'),
            'menu_name' => _x('Facilities', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Facilities', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Facility', 'pfc'),
            'new_item' => __('New Facility', 'pfc'),
            'edit_item' => __('Edit Facility', 'pfc'),
            'view_item' => __('View Facility', 'pfc'),
            'all_items' => __('All Facilities', 'pfc'),
            'search_items' => __('Search Facilities', 'pfc'),
            'parent_item_colon' => __('Parent Facility:', 'pfc'),
            'not_found' => __('No Facilities Found', 'pfc'),
            'not_found_in_trash' => __('No Facilities Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'our-facilities' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 7,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    
        );

        register_post_type('our-facilities', $args);

    }
    add_action('init', 'pfc_custom_post_facilities');


    // Custom Post Type for Testimonials
    function pfc_custom_post_testimonials(){
        $labels = array(
            'name' => _x( 'Testimonials', 'pfc'),
            'singular_name' => _x( 'Testimonial', 'post type singular name', 'pfc'),
            'menu_name' => _x('Testimonials', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Testimonials', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Testimonial', 'pfc'),
            'new_item' => __('New Testimonial', 'pfc'),
            'edit_item' => __('Edit Testimonial', 'pfc'),
            'view_item' => __('View Testimonial', 'pfc'),
            'all_items' => __('All testimonials', 'pfc'),
            'search_items' => __('Search Testimonials', 'pfc'),
            'parent_item_colon' => __('Parent Testimonial:', 'pfc'),
            'not_found' => __('No Testimonials Found', 'pfc'),
            'not_found_in_trash' => __('No Testimonials Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'our-testimonials' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 8,
            'supports' => array( 'title', 'editor', 'thumbnail'),
    
        );

        register_post_type('our-testimonials', $args);

    }
    add_action('init', 'pfc_custom_post_testimonials');


    // Custom Post Type for Doctors
    function pfc_custom_post_specialists(){
        $labels = array(
            'name' => _x( 'Specialists', 'pfc'),
            'singular_name' => _x( 'Specialist', 'post type singular name', 'pfc'),
            'menu_name' => _x('Specialists', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Specialists', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Specialist', 'pfc'),
            'new_item' => __('New Specialist', 'pfc'),
            'edit_item' => __('Edit Specialist', 'pfc'),
            'view_item' => __('View Specialist', 'pfc'),
            'all_items' => __('All Specialists', 'pfc'),
            'search_items' => __('Search Specialists', 'pfc'),
            'parent_item_colon' => __('Parent Specialist:', 'pfc'),
            'not_found' => __('No Specialists Found', 'pfc'),
            'not_found_in_trash' => __('No Specialists Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'our-specialists' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 9,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    
        );

        register_post_type('our-specialists', $args);

    }
    add_action('init', 'pfc_custom_post_specialists');


    // Custom Post Type for Front Page Doctor Skills (Knowledge)
    function pfc_custom_post_doctor_skills(){
        $labels = array(
            'name' => _x( 'Doctor Skills', 'pfc'),
            'singular_name' => _x( 'Doctor Skill', 'post type singular name', 'pfc'),
            'menu_name' => _x('Doctor Skills', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Doctor Skills', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Skill', 'pfc'),
            'new_item' => __('New Skill', 'pfc'),
            'edit_item' => __('Edit Skill', 'pfc'),
            'view_item' => __('View Skill', 'pfc'),
            'all_items' => __('All Skills', 'pfc'),
            'search_items' => __('Search Skills', 'pfc'),
            'parent_item_colon' => __('Parent Skill:', 'pfc'),
            'not_found' => __('No Skills Found', 'pfc'),
            'not_found_in_trash' => __('No Skills Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'doctor-skills' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 10,
            'supports' => array( 'title', 'editor', 'thumbnail'),
    
        );

        register_post_type('doctor-skills', $args);

    }
    add_action('init', 'pfc_custom_post_doctor_skills');


    // Custom Post Type for Why Choose PFC
    function pfc_custom_post_why_pfc(){
        $labels = array(
            'name' => _x( 'Why PFC', 'pfc'),
            'singular_name' => _x( 'Why PFC', 'post type singular name', 'pfc'),
            'menu_name' => _x('Why PFC', 'admin menu', 'pfc'),
            'name_admin_bar' => _x('Why PFC', 'add new on admin bar', 'pfc'),
            'add_new' => _x('Add New', 'book', 'pfc'),
            'add_new_item' => __('Add New Reason', 'pfc'),
            'new_item' => __('New Reason', 'pfc'),
            'edit_item' => __('Edit Reason', 'pfc'),
            'view_item' => __('View Reason', 'pfc'),
            'all_items' => __('All Reasons', 'pfc'),
            'search_items' => __('Search Reasons', 'pfc'),
            'parent_item_colon' => __('Parent Reason:', 'pfc'),
            'not_found' => __('No Reasons Found', 'pfc'),
            'not_found_in_trash' => __('No Reasons Found in Trash', 'pfc')
        );
    
        $args = array(
            'labels' => $labels,
            'description' => __('Description.', 'pfc'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'why-pfc' ),
            'capability_type' => 'post',
            'has_archive' => false,
            'hierarchical' => false,
            'menu_position' => 11,
            'supports' => array( 'title', 'editor', 'thumbnail'),
    
        );

        register_post_type('why-pfc', $args);

    }
    add_action('init', 'pfc_custom_post_why_pfc');

?>