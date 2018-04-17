<?php
  $context = Timber::get_context();
  $context['post'] = new Timber\Post();

  Timber::render( array( 'home.twig' ), $context );
