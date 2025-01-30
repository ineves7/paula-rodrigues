<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
   
        <!-- Wordpress Header -->
        <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <a href="/">
            <h1 id="logo">Paula Rodrigues</h1>
        </a>
        <nav id="nav">
            <button aria-label="Abrir Menu"id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburguer"></span>
            </button>
            <ul id="menu" role="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/">Sobre Mim</a></li>
                <li><a href="/">Portfólio</a></li>
                <li><a href="/">Contato</a></li>
            </ul>
        </nav>
    </header>
    </div>