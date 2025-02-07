<?php
// Recupera a página "rodape" pelo slug
$rodape_page = get_page_by_path( 'rodape' );
if ( $rodape_page ) {
    $rodape_id = $rodape_page->ID;
    
    $fotogaleria1   = get_post_meta( $rodape_id, 'fotogaleria1', true );
    $fotogaleria2   = get_post_meta( $rodape_id, 'fotogaleria2', true );
    $fotogaleria3   = get_post_meta( $rodape_id, 'fotogaleria3', true );
    $fotogaleria4   = get_post_meta( $rodape_id, 'fotogaleria4', true );
    $fotogaleria5   = get_post_meta( $rodape_id, 'fotogaleria5', true );
    $fotogaleria6   = get_post_meta( $rodape_id, 'fotogaleria6', true );
    $numerowhatsapp = get_post_meta( $rodape_id, 'numerowhatsapp', true );
    $linkwhatsapp   = get_post_meta( $rodape_id, 'linkwhatsapp', true );
    $nomeinstagram  = get_post_meta( $rodape_id, 'nomeinstagram', true );
    $linkinstagram  = get_post_meta( $rodape_id, 'linkinstagram', true );
    $googlemap      = get_post_meta( $rodape_id, 'googlemap', true );
    
    // Se não houver link explícito, montamos o link com base no número (apenas dígitos)
    if ( empty( $linkwhatsapp ) && !empty( $numerowhatsapp ) ) {
        $whatsapp_digits = preg_replace( '/\D+/', '', $numerowhatsapp );
        $linkwhatsapp    = 'https://wa.me/' . $whatsapp_digits;
    }
}

// Função para obter o ALT da imagem a partir da URL
function get_image_alt_from_url( $image_url, $default_alt ) {
    $attachment_id = attachment_url_to_postid( $image_url );
    $alt_text = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
    return ( !empty( $alt_text ) ) ? $alt_text : $default_alt;
}

// Obtém os textos alternativos para cada imagem
$alt_text1 = get_image_alt_from_url( $fotogaleria1, 'Foto Galeria 1' );
$alt_text2 = get_image_alt_from_url( $fotogaleria2, 'Foto Galeria 2' );
$alt_text3 = get_image_alt_from_url( $fotogaleria3, 'Foto Galeria 3' );
$alt_text4 = get_image_alt_from_url( $fotogaleria4, 'Foto Galeria 4' );
$alt_text5 = get_image_alt_from_url( $fotogaleria5, 'Foto Galeria 5' );
$alt_text6 = get_image_alt_from_url( $fotogaleria6, 'Foto Galeria 6' );
?>

<footer>
  <!-- Galeria de fotos (2 linhas) -->
  <div class="galeria">
    <!-- Primeira linha -->
    <div class="galeria-item item1">
      <img src="<?php echo esc_url( $fotogaleria1 ); ?>" alt="<?php echo esc_attr( $alt_text1 ); ?>">
    </div>
    <div class="galeria-item item2">
      <img src="<?php echo esc_url( $fotogaleria2 ); ?>" alt="<?php echo esc_attr( $alt_text2 ); ?>">
    </div>
    <div class="galeria-item item3">
      <img src="<?php echo esc_url( $fotogaleria3 ); ?>" alt="<?php echo esc_attr( $alt_text3 ); ?>">
    </div>

    <!-- Segunda linha -->
    <div class="galeria-item item4">
      <img src="<?php echo esc_url( $fotogaleria4 ); ?>" alt="<?php echo esc_attr( $alt_text4 ); ?>">
    </div>
    <div class="galeria-item item5">
      <img src="<?php echo esc_url( $fotogaleria5 ); ?>" alt="<?php echo esc_attr( $alt_text5 ); ?>">
    </div>
    <div class="galeria-item item6">
      <img src="<?php echo esc_url( $fotogaleria6 ); ?>" alt="<?php echo esc_attr( $alt_text6 ); ?>">
    </div>
  </div> <!-- .galeria -->

  <!-- Linha de conteúdo 60% / 40% -->
  <div class="footer-linha">
    <div class="linha-grid">
      <!-- Coluna esquerda (60%): Título, Subtítulo, Redes e Nav -->
      <div class="coluna-60">
        <h2 class="logo-like">Paula Rodrigues</h2>
        <p class="subtitulo">Creative Photography</p>

        <div class="redes-sociais">
          <!-- Instagram -->
          <a href="<?php echo !empty( $linkinstagram ) ? esc_url( $linkinstagram ) : '#'; ?>">
            <div class="rede">
              <svg class="socialmedia-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 48 48">
                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#fd5"></stop>
                  <stop offset=".328" stop-color="#ff543f"></stop>
                  <stop offset=".348" stop-color="#fc5245"></stop>
                  <stop offset=".504" stop-color="#e64771"></stop>
                  <stop offset=".643" stop-color="#d53e91"></stop>
                  <stop offset=".761" stop-color="#cc39a4"></stop>
                  <stop offset=".841" stop-color="#c837ab"></stop>
                </radialGradient>
                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#4168c9"></stop>
                  <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
                </radialGradient>
                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
                <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
                <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
              </svg>
              <span><?php echo !empty( $nomeinstagram ) ? esc_html( $nomeinstagram ) : '@Paulilunar.ph'; ?></span>
            </div>
          </a>
          
          <!-- WhatsApp -->
          <a href="<?php echo !empty( $linkwhatsapp ) ? esc_url( $linkwhatsapp ) : 'https://wa.me/5522997234721'; ?>">
            <div class="rede">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="32" height="32" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6	C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z"></path>
                <path fill="#fff" d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z"></path>
                <path fill="#cfd8dc" d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3	L4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z"></path>
                <path fill="#40c351" d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8	l6-1.6l0.6,0.3c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z"></path>
                <path fill="#fff" fill-rule="evenodd" d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0	s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3	c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9	c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8	c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8C20.6,19.3,19.7,17,19.3,16z" clip-rule="evenodd"></path>
              </svg>
              <span><?php echo !empty( $numerowhatsapp ) ? esc_html( $numerowhatsapp ) : '+55 (22) 99723-4721'; ?></span>
            </div>
          </a>
        </div><!-- .redes-sociais -->
        
      </div><!-- .coluna-60 -->

      <!-- Coluna direita (40%): Google Maps -->
      <div class="coluna-40">
        <iframe 
          src="<?php echo !empty( $googlemap ) ? esc_url( $googlemap ) : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.48188235564!2d-42.02731698555614!3d-22.966933945700128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9697f5c9794361%3A0x9d37331ca66baa8a!2sArraial%20do%20Cabo%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1678836634942!5m2!1spt-BR!2sbr'; ?>"
          width="100%"
          height="250"
          style="border:0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div><!-- .coluna-40 -->
    </div><!-- .linha-grid -->
  </div> <!-- .footer-linha -->

  <nav class="footer-nav">
      <ul>
        <li><a href="/">Início</a></li>
        <li><a href="/#sobre-mim">Sobre Mim</a></li>
        <li><a href="/portfolio/#portfolio">Portfólio</a></li>
        <li><a href="<?php echo !empty( $linkwhatsapp ) ? esc_url( $linkwhatsapp ) : 'https://wa.me/5522997234721'; ?>" target="_blank">Contato</a></li>
      </ul>
  </nav>
</footer>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
