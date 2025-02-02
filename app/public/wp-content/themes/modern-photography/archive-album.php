<?php
get_header();
?>

<!-- Section PORTFÓLIO -->
<section class="portfolio-section">
    <div class="portfolio-container">
        <h2>PORTFÓLIO</h2>
        
        <div class="portfolio-grid">
            <?php
            // Query para obter os álbuns do CPT 'album'
            $args = array(
                'post_type'      => 'album',
                'posts_per_page' => -1, // Exibe todos os álbuns
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $albuns = new WP_Query($args);

            if ($albuns->have_posts()) :
                while ($albuns->have_posts()) : $albuns->the_post();

                    // Obtém a lista de imagens cadastradas no CMB2
                    $album_images = get_post_meta(get_the_ID(), 'album_images', true);
                    $album_cover = '';

                    // Se houver imagens cadastradas, pega a primeira
                    if (!empty($album_images) && is_array($album_images)) {
                        $album_cover = reset($album_images); // Primeira imagem cadastrada
                    }

                    // Se não houver imagem no CMB2, usa a imagem destacada do post
                    if (!$album_cover) {
                        if (has_post_thumbnail()) {
                            $album_cover = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        } else {
                            // Se não houver imagem cadastrada nem thumbnail, usa uma imagem padrão
                            $album_cover = get_template_directory_uri() . '/assets/img/paisagem.jpg';
                        }
                    }
            ?>
                    <div class="portfolio-item">
                        <h3><?php the_title(); ?></h3>
                        <a href="<?php the_permalink(); ?>" class="a-permalink-width">
                            <div class="card">
                                <img src="<?php echo esc_url($album_cover); ?>" alt="<?php the_title(); ?>" class="album-thumbnail">
                            </div>
                        </a>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Nenhum álbum encontrado.</p>';
            endif;
            ?>
        </div>
        
        <!-- Botão "Ver Mais" -->
        <button class="btn-ver-mais">Ver Mais</button>
    </div>
</section>

<?php get_footer(); ?>
