<?php

    

    $logo_width  = 300;
    $logo_height = 100;

    // 
    add_theme_support(
        'custom-logo',
        array(
            'height' => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    // Registrando Menu
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Menu Principal', 'braviSoftware' ),
            'footer'  => __( 'Menu Segundario', 'braviSoftware' ),
        )
	);

    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'app', get_template_directory_uri() . '/dist/js/app.js');
    }

    add_theme_support( 'post-thumbnails' );

    //CUSTOM POST TYPE CONTATOS
    function custom_post_type_contatos()
    {
        register_post_type('contatos', array(
            'label' => 'contatos',
            'description' => 'contatos',
            'public' => true,
            'menu_icon'   => 'dashicons-id-alt',
            'show_ui' => true,
            'show_in_menu' => true,
            'capability_type' => 'page',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => array('slug' => 'contatos', 'with_front' => true),
            'query_var' => true,
            'supports' => array('title', 'editor', 'page-attributes', 'post-formats', 'thumbnail'),
            'menu_position' => 3,
            'labels' => array(
                'name' => 'contatos',
                'singular_name' => 'contato',
                'menu_name' => 'Contatos',
                'add_new' => 'Adicionar contato',
                'add_new_item' => 'Adicionar Novo contato',
                'edit' => 'Editar',
                'edit_item' => 'Editar contato',
                'new_item' => 'Novo contato',
                'view' => 'Ver contato',
                'view_item' => 'Ver contato',
                'search_items' => 'Procurar contato Realizado',
                'not_found' => 'Nenhum contato Encontrado',
                'not_found_in_trash' => 'Nenhum contato Encontrado no Lixo',
            ),
            'taxonomies' => array('category-contatos')
        ));
    }

    add_action('init', 'custom_post_type_contatos');

    // taxonomia de contatos
    function contatos_taxonomy() {  
        register_taxonomy(  
            'category-contatos',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
            'contatos',        //post type name
            array(  
                'hierarchical' => true,  
                'label' => 'Categorias contatos',  //Display name
                'query_var' => true,
                'rewrite' => array(
                    'slug' => 'categoria-contatos', // This controls the base slug that will display before each term
                    'with_front' => false // Don't display the category base before 
                )
            )  
        );  
    }  
    add_action( 'init', 'contatos_taxonomy');


?>
