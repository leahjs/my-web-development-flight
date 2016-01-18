<?php get_header(); ?>
<p>
  this is page.php
</p>
<section>
  <?php //dynamic_sidebars( 2, array( 'name' => 'Spending %d' ) ); ?>

</section>


<section class="row">

   <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
   <h2><?php the_title(); ?></h2>
   <?php the_content(); ?>
   <?php endwhile; ?>

</section>

<?php get_footer(); ?>
