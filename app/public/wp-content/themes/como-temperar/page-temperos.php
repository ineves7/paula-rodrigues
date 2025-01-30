<?php
/*
Template Name: Temperos
*/
get_header(); 
?>

<h1 class="titulo-pagina">Temperos</h1>

<div class="lista-de-temperos">
    <?php
    // Query para buscar todos os posts do tipo 'temperos'
    $args = array(
        'post_type' => 'temperos',
        'posts_per_page' => -1 // Mostra todos os temperos
    );
    $temperos = new WP_Query($args);

    // Loop para exibir os temperos
    if ($temperos->have_posts()) :
        while ($temperos->have_posts()) : $temperos->the_post();
            ?>
            <div class="tempero-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="tempero-thumb">
                            <?php the_post_thumbnail('medium'); // Tamanho da imagem de miniatura ?>
                        </div>
                    <?php endif; ?>
                    <h2 class="titulo-temperos"><?php the_title(); ?></h2>
                </a>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>Nenhum tempero encontrado.</p>';
    endif;

    // Reseta o post data
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>