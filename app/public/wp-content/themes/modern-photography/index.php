<?php get_header(); ?>


    <!-- Section SOBRE MIM -->
    <section class="sobre-mim-section">
      <div class="sobre-mim-container">
        
        <!-- Título (em fundo escuro, pois a seção não tem bg color) -->
        <h2>SOBRE MIM</h2>

        <!-- Grid: Texto (verde) + Imagem (fundo escuro) -->
        <div class="sobre-mim-grid">
          
          <!-- Coluna Esquerda: Texto no fundo verde (#475045) -->
          <div class="text-wrapper">
            <p>
              Me chamo Paula Rodriguez, Nasci na Argentina, e há 8 anos que moro em 
              Arraial do Cabo. Sou fotógrafa profissional, formada na 
              Universidad Nacional de Córdoba Argentina.
            </p>
            <p>
              Atualmente me especializo em fotografia de moda e gastronomia. 
              Gosto de criar imagens que revalorizem a empresa/produto, 
              enfatizando a importância dos detalhes, dando mais sofisticação 
              e qualidade à sua empresa.
            </p>
          </div>
          
          <!-- Coluna Direita: Imagem (sem background verde) -->
          <div class="image-wrapper">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
              alt="Sobre Mim - Foto"
            />
          </div>
          
        </div><!-- /.sobre-mim-grid -->
      </div><!-- /.sobre-mim-container -->
    </section>

    <!-- Section PORTFÓLIO -->
    <section class="portfolio-section">
      <div class="portfolio-container">
        <h2>PORTFÓLIO</h2>
        
        <div class="portfolio-grid">
          <!-- Item 1 -->
          <div class="portfolio-item">
            <h3>Editorial Experimental</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
          
          <!-- Item 2 -->
          <div class="portfolio-item">
            <h3>Gastronomia / Bartenderia</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
          
          <!-- Item 3 -->
          <div class="portfolio-item">
            <h3>Ensaios Praianos</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
          
          <!-- Item 4 -->
          <div class="portfolio-item">
            <h3>Palco / Artistas</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
          
          <!-- Item 5 -->
          <div class="portfolio-item">
            <h3>Eventos Sociais</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
          
          <!-- Item 6 -->
          <div class="portfolio-item">
            <h3>Paisagem</h3>
            <div class="card">
              <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/paisagem.jpg" 
                alt="Banner 1"
              />
            </div>
          </div>
        </div>
        
        <!-- Botão "Ver Mais" -->
        <button class="btn-ver-mais">Ver Mais</button>
      </div>
    </section>

<?php get_footer(); ?>
