<?php
  function create_staff() {

    register_post_type('staff',
        array(
          'labels' => array(
            'name' => __( 'Staff' ),
            'singular_name' => __( 'Staff' )
          ),
          'public' => true,
          'has_archive' => true,
          //'rewrite' => array('slug' => 'staff'),
          //'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
          'menu_icon' => 'dashicons-groups',
          'capability_type' => 'page'
        )
    );
  }

  add_action( 'init', 'create_staff' );


  function register_menu() {
    register_nav_menu('main-navigation', __('Main Navigation'));
  }

  add_action( 'init', 'register_menu' );
