<?php
get_header();
?>

<!-- Section ÁLBUM -->
<section class="portfolio-section">
    <div class="portfolio-container">
        <h2><?php the_title(); ?></h2> <!-- Exibe o título do álbum -->

        <div class="portfolio-grid">
            <?php
            // Obtém todas as imagens do álbum via CMB2
            $album_images = get_post_meta(get_the_ID(), 'album_images', true);

            // Se houver imagens no álbum, exibe-as
            if (!empty($album_images) && is_array($album_images)) :
                foreach ($album_images as $image_url) :
            ?>
                    <div class="portfolio-item">
                        <div class="card">
                            <img src="<?php echo esc_url($image_url); ?>" alt="Foto do Álbum" class="album-thumbnail">
                        </div>
                    </div>
            <?php
                endforeach;
            else :
                echo '<p>Nenhuma imagem encontrada para este álbum.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
