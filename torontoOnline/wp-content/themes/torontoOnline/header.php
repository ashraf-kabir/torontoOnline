<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WP Theme</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="page">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
                    </a>
                </div> <!--.logo -->

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
                </nav>

            </div> <!--.container -->

        </header>

        <div class="container content">