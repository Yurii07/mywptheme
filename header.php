<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<title>Testing</title>-->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Exo+2:300,400" rel="stylesheet">

<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/dist/js/vendor.js'"></script>-->

<!--    <script type="text/javascript" src="--><?php //echo get_template_directory_uri(); ?><!--/dist/js/custom.js'"></script>-->


	<?php wp_head(); ?>
</head>
<body>

<header>
<div class="container">
  <nav class="navbar navbar-expand-lg ">

  <?php the_custom_logo(); ?>

                      <?php
                      wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())

                        );  ?>

</nav>
</div>
</header>