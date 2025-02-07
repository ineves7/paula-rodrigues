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
            $album_images = get_post_meta( get_the_ID(), 'album_images', true );

            // Se houver imagens no álbum, exibe-as
            if ( !empty( $album_images ) && is_array( $album_images ) ) :
                foreach ( $album_images as $image_url ) :

                    // Converte a URL da imagem para o ID do attachment
                    $attachment_id = attachment_url_to_postid( $image_url );

                    // Recupera o texto alternativo cadastrado para a imagem
                    $alt_text = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );

                    // Se não houver alt cadastrado, define um valor padrão
                    if ( empty( $alt_text ) ) {
                        $alt_text = 'Foto do Álbum';
                    }
            ?>
                    <div class="portfolio-item">
                        <div class="card">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>" class="album-thumbnail">
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
    <hr style="width: 44%;">
</section>

<?php get_footer(); ?>
