<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>
    <div class="pagina-tempero">
        <!-- 0. Título -->
        <h1 class="titulo-tempero"><?php the_title(); ?></h1>
        

        <!-- 1. Categoria -->
        <?php 
        $categoria = get_the_term_list(get_the_ID(), 'categoria_tempero', '', '/ ');
        if ($categoria) {
            echo '<p class="categoria-tempero">' . $categoria  . '</p>';
        }
        ?>

        <!-- 2. Imagem 1 -->
        <?php 
        $imagem_1 = get_post_meta(get_the_ID(), 'imagem_1_tempero', true);
        if ($imagem_1) {
            echo '<div><img class="imagem-tempero" src="' . esc_url($imagem_1) . '" alt="Imagem 1"></div>';
        }
        ?>

        <!-- 3. Descrição -->
        <div class="conteudo-tempero">
            <?php the_content(); ?>
        </div>



        <!-- 4. Origem -->
        <?php 
        $origem = get_the_term_list(get_the_ID(), 'origem_tempero', '', ', ');
        if ($origem) {
            echo '<p><strong>Origem:</strong> ' . $origem . '</p>';
        }
        ?>

        <!-- 5. Sabor -->
        <?php 
        $sabores = get_the_term_list(get_the_ID(), 'sabores_tempero', '', ', ');
        if ($sabores) {
            echo '<p><strong>Sabores:</strong> ' . $sabores . '</p>';
        }
        ?>

        <!-- 6. Aroma -->
        <?php 
        $aromas = get_the_term_list(get_the_ID(), 'aromas_tempero', '', ', ');
        if ($aromas) {
            echo '<p><strong>Aromas:</strong> ' . $aromas . '</p>';
        }
        ?>
    </div>

<?php
endwhile;
endif;

get_footer();
