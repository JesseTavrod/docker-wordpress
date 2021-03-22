<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>
        <?php
        if (is_home()) :

            bloginfo('name');

        elseif (is_category()) :

            single_cat_title();
            echo ' - ';
            bloginfo('name');
            

        elseif (is_single()) :

            single_post_title();
            echo ' - ';
            bloginfo('name');

        elseif (is_page()) :

            single_post_title();
            echo ' - ';
            bloginfo('name');

        else :

            wp_title('', true);

        endif;

        ?>
    </title>
    <meta name="robots" content="index, follow">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/style.css" media="screen" />

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    


    <?php wp_head(); ?>

</head>

<body>
    
    <?php wp_body_open(); ?>

    <header>
        <div class="container">

            <div class="block-header">
                <?php if ( has_custom_logo()) : ?>	
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'  => 'primary',
                                        'menu_class'      => 'menu-wrapper',
                                        'container_class' => 'primary-menu-container',
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                        'fallback_cb'     => false,
                                    )
                                );
                                ?>
                        </nav>
                <?php endif; ?>

            </div>

        </div>
    </header>
    