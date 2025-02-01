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
?>