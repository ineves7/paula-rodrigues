<?php

// Remover links e funcionalidades desnecessárias do wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilita Menu

add_theme_support('menus');

// 1. REGISTRAR O CUSTOM POST TYPE "TEMPEROS"
function custom_post_type_temperos() {
    register_post_type('temperos', array(
        'label' => 'Temperos',
        'description' => 'Cadastro de temperos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-carrot',
        'rewrite' => array('slug' => 'temperos', 'with_front' => true),
        'supports' => array('title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Temperos',
            'singular_name' => 'Tempero',
            'add_new' => 'Adicionar Novo Tempero',
            'add_new_item' => 'Adicionar Novo Tempero',
            'edit_item' => 'Editar Tempero',
            'new_item' => 'Novo Tempero',
            'view_item' => 'Ver Tempero',
            'search_items' => 'Procurar Temperos',
            'not_found' => 'Nenhum Tempero Encontrado',
            'not_found_in_trash' => 'Nenhum Tempero Encontrado no Lixo',
        )
    ));
}
add_action('init', 'custom_post_type_temperos');

// 2. REGISTRAR TAXONOMIAS PERSONALIZADAS (CATEGORIA, ORIGEM, SABOR E AROMA)
function custom_taxonomies_temperos() {
    register_taxonomy('categoria_tempero', 'temperos', array(
        'label' => 'Categoria',
        'rewrite' => array('slug' => 'categoria-tempero'),
        'hierarchical' => false,
    ));

    register_taxonomy('origem_tempero', 'temperos', array(
        'label' => 'Origem',
        'rewrite' => array('slug' => 'origem-tempero'),
        'hierarchical' => false,
    ));

    register_taxonomy('sabores_tempero', 'temperos', array(
        'label' => 'Sabores',
        'rewrite' => array('slug' => 'sabores-tempero'),
        'hierarchical' => false,
    ));

    register_taxonomy('aromas_tempero', 'temperos', array(
        'label' => 'Aromas',
        'rewrite' => array('slug' => 'aromas-tempero'),
        'hierarchical' => false,
    ));

    register_taxonomy('beneficios_tempero', 'temperos', array(
        'label' => 'Beneficios',
        'rewrite' => array('slug' => 'beneficios-tempero'),
        'hierarchical' => false,
    ));
}
add_action('init', 'custom_taxonomies_temperos');

// 3. ADICIONAR CAMPOS PERSONALIZADOS COM CMB2 E EXIBIR TAXONOMIAS
add_action('cmb2_admin_init', 'cmb2_fields_temperos');

function cmb2_fields_temperos() {
    $cmb = new_cmb2_box(array(
        'id'           => 'temperos_metabox',
        'title'        => 'Detalhes do Tempero',
        'object_types' => array('temperos'), // Aplica ao Custom Post Type "Temperos"
    ));

    $cmb->add_field(array(
        'name'    => 'Origem',
        'id'      => 'origem_tempero',
        'taxonomy' => 'origem_tempero', // Associa com a taxonomia de "Origem"
        'type'    => 'taxonomy_multicheck', // Permite múltiplas seleções
        'remove_default' => 'true', // Remove o metabox padrão da taxonomia
        'options' => array('add_term' => true),
    ));

    $cmb->add_field(array(
        'name'    => 'Categoria',
        'id'      => 'categoria_tempero',
        'taxonomy' => 'categoria_tempero', // Associa com a taxonomia de "Categoria"
        'type'    => 'taxonomy_multicheck',
        'remove_default' => 'true',
        'options' => array('add_term' => true),
    ));

    $cmb->add_field(array(
        'name'    => 'Sabores',
        'id'      => 'sabores_tempero',
        'taxonomy' => 'sabores_tempero', // Associa com a taxonomia de "Sabores"
        'type'    => 'taxonomy_multicheck',
        'remove_default' => 'true',
        'options' => array('add_term' => true),
    ));

    $cmb->add_field(array(
        'name'    => 'Aromas',
        'id'      => 'aromas_tempero',
        'taxonomy' => 'aromas_tempero', // Associa com a taxonomia de "Aromas"
        'type'    => 'taxonomy_multicheck',
        'remove_default' => 'true',
        'options' => array('add_term' => true),
    ));
    
    $cmb->add_field(array(
        'name'    => 'Beneficios',
        'id'      => 'beneficios_tempero',
        'taxonomy' => 'beneficios_tempero', // Associa com a taxonomia de "Beneficios"
        'type'    => 'taxonomy_multicheck',
        'remove_default' => 'true',
        'options' => array('add_term' => true),
    ));


    $cmb->add_field(array(
        'name' => 'Imagem 1',
        'id'   => 'imagem_1_tempero',
        'type' => 'file',
    ));

    $cmb->add_field(array(
        'name' => 'Imagem 2',
        'id'   => 'imagem_2_tempero',
        'type' => 'file',
    ));

    $cmb->add_field(array(
        'name' => 'Tags',
        'id'   => 'tags_tempero',
        'type' => 'text',
        'repeatable' => true,   // Permite adicionar várias tags
    ));
}
