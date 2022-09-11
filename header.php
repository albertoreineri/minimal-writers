<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ?>
    <main id="swup" class="transition-fade">
        <header class="mt-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <?php

                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="brand-img"  width="50">';
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/img/logo.png' . '" alt="' . get_bloginfo('name') . '" class="brand-img"  width="50">';
                        }
                        ?>
                        <p class="navbar-brand" id="brand">
                            <?php echo get_bloginfo('name'); ?>
                        </p>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                        $args = array(
                            'theme_location' => 'primary',
                            'depth'      => 2,
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto ulmenu',
                            'add_li_class'  => 'nav-item',
                            'link_class'   => 'nav-link',
                            'walker'     => new Bootstrap_Walker_Nav_Menu()
                        );
                        wp_nav_menu($args); ?>
                    </div>
                </div>
            </nav>
        </header>