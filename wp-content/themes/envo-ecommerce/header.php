<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_enqueue_script('jquery'); ?>

        <?php wp_head(); ?>
    </head>
    <body id="blog" <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div class="container">
            <img id="citation1" class="photocitation" src="wp-content/Images/citation1.png">
            <img id="citation2" class="photocitation" src="wp-content/Images/citation2.png">
            <img id="citation3" class="photocitation" src="wp-content/Images/citation3.png">
        </div>

                <div class="page-wrap">
                    <?php get_template_part('template-parts/template-part', 'topnav'); ?>
