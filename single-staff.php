<?php
  $context = Timber::get_context();
  $context['post'] = new Timber\Post();

  $staffList = new WP_Query([
    'post_type' => 'staff',
    'numberposts' => -1,
    'post__not_in' => array($post->ID),
    'order' => 'ASC',
    'orderby' => 'title'
  ]);

  $context['staff_list'] = Timber::get_posts($staffList);

  Timber::render( array( 'single-staff.twig' ), $context );
