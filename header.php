<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--	<title>Testing</title>-->


    <!--    <script type="text/javascript" src="-->
    <?php //echo get_template_directory_uri(); ?><!--/dist/js/vendor.js'"></script>-->

    <!--    <script type="text/javascript" src="-->
    <?php //echo get_template_directory_uri(); ?><!--/dist/js/custom.js'"></script>-->


    <?php wp_head(); ?>
</head>
<body>

<div class="container">
    <header id="header" class="header">
        <div class="row">
            <div class="col-md-3">
                <div class="logo"
                     style="background: url('<?php echo get_field('image', 'options'); ?>');background-repeat:no-repeat;height:60px;width:96px">

                </div>
            </div>
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg ">

                    <?php
                    wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'bs-example-navbar-collapse-1',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker())

                    ); ?>

                </nav>
            </div>
            <div class="col-md-3">
                <div class="contacts">
                    <p><?php the_field('phone', 'options'); ?></p>
                    <p><?php the_field('phone_2', 'options'); ?></p>
                    <a href="#"><?php the_field('send_button', 'option'); ?></a>
                </div>
            </div>
        </div>

    </header>
</div>

