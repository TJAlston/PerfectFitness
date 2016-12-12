<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

<div class="container" />

  <header class="site-header">

    <div class="hd-search">
      <?php get_search_form(); ?>
    </div>

    <h1><a href="<?php echo home ?>">
      <img class='pflogo' src="http://localhost:8888/wordpress/wp-content/uploads/2016/12/pfhorizontal.png" />
    </a></h1>
    <h5><?php bloginfo('description'); ?><?php if (is_page('group-classes')) { ?>
      Thank you for viewing our page!
    <?php } ?></h5>

    <nav class="site-nav">
      <?php

      $args = array(
        'theme_location' => 'primary'
      );

      ?>
      <?php wp_nav_menu( $args ); ?>
    </nav>

  </header>
