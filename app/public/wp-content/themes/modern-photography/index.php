<?php get_header(); ?>

    <div class="banner">
    <!-- 
      Substitua "banner.jpg" pelo caminho/URL da sua imagem 
      ou remova este <img> se quiser usar somente background no CSS.
    -->
    <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/img/banner1.png" 
        alt="Banner 1"
    />

    <div class="banner-content">
      <h1>Meu Título</h1>
      <p>Descrição breve do banner, facilmente editável.</p>
    </div>
  </div>

    <section class="section-grid">
        <div class="text-container">
            <h1>Sobre Mim</h1>
            <p>
            Me chamo Paula Rodriguez, Nascí na Argentina, e há 8 anos que moro em Arraial do Cabo. Sou fotógrafa profissional. Formada na Universidad Nacional de Córdoba Argentina.
            Actualmente me especializo en fotografia de moda e gastronomia. Gosto de criar imagens que revalorizem a empresa/produto, enfatizando a importância dos detalhes, dando mais sofisticação e qualidade à sua empresa.
            </p>
        </div>
    
        <div class="image-container">
            <!-- Substituir 'sua-imagem.jpg' pelo arquivo real -->
            <img src="sua-imagem.jpg" alt="Exemplo de imagem" />
        </div>
    </section>

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
