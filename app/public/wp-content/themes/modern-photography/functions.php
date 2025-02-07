<?php
function meu_tema_enqueue_styles() {
    // Carrega o style.css principal do tema
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri()
    );

    // Carrega o arquivo header.css (na pasta css do tema)
    wp_enqueue_style(
        'header-style',
        get_template_directory_uri() . '/css/header.css',
        array('theme-style'), // Dependendo do estilo principal
        '1.0',
        'all'
    );

    // Carrega o arquivo footer.css (na pasta css do tema)
    wp_enqueue_style(
        'footer-style',
        get_template_directory_uri() . '/css/footer.css',
        array('theme-style'), // Dependendo do estilo principal
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_styles');

function criar_cpt_albuns() {
    $labels = array(
        'name'               => 'Álbuns',
        'singular_name'      => 'Álbum',
        'menu_name'          => 'Portfólio',
        'name_admin_bar'     => 'Álbum',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Álbum',
        'new_item'           => 'Novo Álbum',
        'edit_item'          => 'Editar Álbum',
        'view_item'          => 'Ver Álbum',
        'all_items'          => 'Todos os Álbuns',
        'search_items'       => 'Pesquisar Álbuns',
        'not_found'          => 'Nenhum Álbum encontrado.',
        'not_found_in_trash' => 'Nenhum Álbum encontrado na lixeira.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'rewrite'            => array( 'slug' => 'portfolio' ),
    );

    register_post_type( 'album', $args );
}
add_action( 'init', 'criar_cpt_albuns' );

add_action( 'cmb2_admin_init', 'register_album_metabox' );
function register_album_metabox() {
    $cmb = new_cmb2_box( array(
        'id'           => 'album_images_metabox',
        'title'        => 'Imagens do Álbum',
        'object_types' => array( 'album' ), // O post type "album"
    ));

    $cmb->add_field( array(
        'id'          => 'album_images',
        'type'        => 'file_list',
        'name'        => 'Imagens',
        'description' => 'Adicione as imagens para este álbum',
        'preview_size' => array( 100, 100 ), // Tamanho do preview no admin
    ));
}

add_action ('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
    $cmb2 = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Home',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb2->add_field([
        'name' => 'Banner',
        'id' => 'fotobanner',
        'type' => 'file',
    ]);

    $cmb2->add_field([
        'name' => 'Texto-Banner',
        'id' => 'textobanner',
        'type' => 'text',
    ]);

    $cmb2->add_field([
        'name' => 'Sobre-Mim',
        'id' => 'sobremim',
        'type' => 'textarea',
    ]);

    $cmb2->add_field([
        'name' => 'Sobre-Mim-2',
        'id' => 'sobremim2',
        'type' => 'textarea',
    ]);
    $cmb2->add_field([
        'name' => 'Foto-Sobre-Mim',
        'id' => 'fotosobremim',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
};


function cmb2_fields_footer() {
    $cmb2 = new_cmb2_box([
        'id' => 'footer_box',
        'title' => 'Rodape',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-footer.php',
        ],
    ]);
    $cmb2->add_field([
        'name' => 'Foto-1-Galeria',
        'id' => 'fotogaleria1',
        'type' => 'file',   
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Foto-2-Galeria',
        'id' => 'fotogaleria2',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Foto-3-Galeria',
        'id' => 'fotogaleria3',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Foto-4-Galeria',
        'id' => 'fotogaleria4',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Foto-5-Galeria',
        'id' => 'fotogaleria5',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Foto-6-Galeria',
        'id' => 'fotogaleria6',
        'type' => 'file',
        'save_id' => true, // Salva apenas o ID do anexo
    ]);
    $cmb2->add_field([
        'name' => 'Numero-Whatsapp',
        'id' => 'numerowhatsapp',
        'type' => 'text'
    ]);
    $cmb2->add_field([
        'name' => 'Link-Whatsapp',
        'id' => 'linkwhatsapp',
        'type' => 'text'
    ]);
    $cmb2->add_field([
        'name' => 'Nome-Instagram',
        'id' => 'nomeinstagram',
        'type' => 'text'
    ]);
    $cmb2->add_field([
        'name' => 'Link-Instagram',
        'id' => 'linkinstagram',
        'type' => 'text'
    ]);
    $cmb2->add_field([
        'name' => 'Google-Map',
        'id' => 'google-map',
        'type' => 'text'
    ]);

}
    add_action ('cmb2_admin_init', 'cmb2_fields_footer'); 
