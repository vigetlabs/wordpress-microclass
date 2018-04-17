<?php
  /*
   * custom post type
   */

  function create_staff() {
    register_post_type('staff',
      array(
        'labels' => array(
          'name' => __( 'Staff' ),
          'singular_name' => __( 'Staff' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'capability_type' => 'page'
      )
    );
  }

  add_action( 'init', 'create_staff' );

  /*
   * register menus
   */

  function register_menu() {
    register_nav_menu('main-navigation', __('Main Navigation'));
  }

  add_action( 'init', 'register_menu' );

  /*
   * Timber
   */

  function add_to_context($context) {
    $context['main_menu'] = new \Timber\Menu('main-navigation');

    return $context;
  }

  add_filter('timber_context', 'add_to_context');
