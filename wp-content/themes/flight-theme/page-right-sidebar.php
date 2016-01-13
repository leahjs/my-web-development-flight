<?php
/*
  Template Name: Right Sidebar
*/
 ?>

<?php get_header(); ?>

    <section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
          <!-- Primary Column -->
          <div class="small-12 medium-4 medium-pull-8 columns">
            <div class="primary">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>

              <?php endwhile; else : ?>

                <p><?php _e( 'Sorry No Pages' ); ?></p>

              <?php endif ?>
            </div>
          </div>

          <!-- Secondary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="secondary">
              <h2 class="module-heading">Sidebar</h2>
            </div>
          </div>
        </div>
    </section>

<?php get_footer(); ?>






<section>
  <?php //dynamic_sidebars( 2, array( 'name' => 'Spending %d' ) ); ?>

</section>
<section class="row">

   <?php// if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
   <h2><?php //the_title(); ?></h2>
   <?php// the_content(); ?>
   <?php// endwhile; ?>

</section>

<?php get_footer(); ?>
