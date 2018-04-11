<?php get_header(); ?>

<?php if (have_posts()) { ?>

  <h1>Staff</h1>

  <ul>
    <?php while (have_posts()) { ?>
      <?php the_post(); ?>

      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

    <?php } ?>
  </ul>

<?php } ?>

<?php get_footer(); ?>
