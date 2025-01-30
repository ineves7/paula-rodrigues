<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
   
        <!-- Wordpress Header -->
        <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <a href="/">
            <h1>Como Temperar</h1>
        </a>
        <nav id="nav">
            <button aria-label="Abrir Menu"id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburguer"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="/">Home</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('temperos')); ?>">Temperos</a></li>
                <li><a href="/">Receitas</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="/">Noticias</a></li>
                <li><a href="/">Sobre</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </nav>
    </header>
    </div>