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

    <?php wp_head(); ?>
</head>

<body>
    
    <?php wp_body_open(); ?>

    <header>
        wordpress
    </header>
    