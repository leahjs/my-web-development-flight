<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
   <head>

      <!-- Basic Page Needs
      ================================================== -->
      <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Mobile Specific Metas
      ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">

      <!-- Pingback
      ================================================== -->
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

      <!-- Favicons
      ================================================== -->
      <?php include(get_stylesheet_directory() . '/includes/favicons.php'); ?>

      <!-- WP Head
      ================================================== -->
      <?php wp_head(); ?>

   </head>

   <body <?php body_class(); ?>>

   	<!-- <div class="site"> -->
      <header class="row no-max pad main">
      	 <!-- <div class="site-header__logo"><a href="<?php// bloginfo('url'); ?>/" title="<?php// bloginfo('name'); ?>"><?php// bloginfo('name'); ?></a></div> -->
        <h1 class="open"><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <a href="" class="nav-toggle"><span></span>Menu</a>

  <nav>

    <!-- <h1 class="open"><a class='current' href="<?php //bloginfo('url'); ?>"><?php// bloginfo('name'); ?></a></h1> -->


    <?php

    $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => 'no-bullet'
      );

    wp_nav_menu( $defaults );

    ?>
         <?php //if (has_nav_menu( 'primary' )) : ?>
         <?php //wp_nav_menu(
				// array(
				// 	'container_class' => 'primary-nav-container',
				// 	'depth' => 2,
				// 	'theme_location' => 'primary',
				// 	'link_before' => '<span>',
				// 	'link_after' => '</span>',
				// 	'menu_class' => 'primary-nav',
        //   'menu_class' => 'no-bullet'
				// )
			// ); ?>


		<?php// else : ?>

			<!-- <p>Please set Primary Navigation bar</p> -->

		<?php // endif; ?>
</nav>
      </header>

      <main>
