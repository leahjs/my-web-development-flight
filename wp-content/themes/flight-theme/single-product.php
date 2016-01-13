<?php get_header(); ?>

<section class="row">
  <?php if ( have_posts() ) while ( have_posts()  ) : the_post(); ?>
    <?php the_field('title'); ?>
    <img src="<?php the_field('item_image'); ?>">
    <?php the_field('description'); ?>
    <?php the_field('price'); ?>
    <a href="<?php the_field('add_to_cart'); ?>">Add to cart</a>

  <?php endwhile; ?>

</section>

<?php get_footer(); ?>
