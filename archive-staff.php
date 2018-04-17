<?php
  $context = Timber::get_context();

  $args = array(
    'post_type' => 'staff',
    'order' => 'ASC',
    'orderby' => 'title',
  );
  $context['posts'] = new Timber\PostQuery($args);

  Timber::render( array( 'archive-staff.twig' ), $context );
