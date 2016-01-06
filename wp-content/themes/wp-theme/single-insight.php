<?php get_header(); ?>

<section class="row">

   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
     <img src="<?php the_field('hero');  ?>">

     <?php the_field('wysiwyg');  ?>

<?php endwhile; ?>

</section>

<?php get_footer(); ?>
