<!DOCTYPE html>
<html class="no-js" lang="Es">

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Manifest PWA -->
    
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="icon.png">

  <title>Capybara Studio | Portfolio</title>

  <!-- Etiquetas meta -->

  <meta name="description" content="CAPYBARA STUDIO es un estudio especializado en el diseño de páginas web, aplicaciones e identidades, creación de campañas de marketing digital y analítica de datos.">
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="CAPYBARA STUDIO" />
  <meta property="og:description" content="CAPYBARA STUDIO es un estudio especializado en el diseño de páginas web, aplicaciones e identidades, creación de campañas de marketing digital y analítica de datos" />
  <meta property="og:url" content="https://www.capybarastudio.com/" />
  <meta property="og:site_name" content="CAPYBARA STUDIO" />
  <meta name="theme-color" content="#0EA7B3">

  <!-- Canonical -->
    
  <link rel="canonical" href="https://www.capybarastudio.com/" />   
  
  <!-- Favicon -->
 
  <link rel="icon" href="#" type="favicon.png" sizes="72x72">

  <!-- Estilos -->
    <!-- Framework Bulma & Normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-pageloader@2.1.0/dist/css/bulma-pageloader.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    
    <!-- Override personalizado -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="icons/capybara-studio-icons.css">
  
</head>

<body id="portfolio">
    
  <div id="pageloader" class="pageloader is-active c-portfolio"><span class="title">CapybaraStudio</span></div>
    
  <!-- HEADER -->
  <?php
  include("header.php")
  ?>
    
  <!-- CONTENIDO -->

  <main id="portfolio-content" data-namespace="www.capybarastudio.com">
    
    <!-- Presentación -->
    <section id="portfolio1" class="section hero is-fullheight portfolio_presentation">
        
      <div class="hero-body">
        <div class="container">
          <div class="columns is-vcentered">
            <div class="column is-7" data-aos="fade-up-right">
              <h2 class="c-t-centered is-block m-b-xl low-front">Portfolio</h2>
              <img src="img/cs_pintor.svg" class="hero-section__capybara-pintor is-flex c-image-centered float" alt="Capybara pintor pintando un cuadra de la Mona Lisa Capybara">
            </div>
              
            <!-- FILTER TAGS -->
            <div class="column">
              <div id="meta" class="field is-grouped-multiline portfolio-filter__tags" data-aos="fade-down-left">

                <div class="tags are-large c-space-around p-r-md p-l-md">
                  <a href="#"><span onclick="filtrar('dw',this.id);" id="selector-dw" class="tag m-t-md m-b-md">Diseño web</span></a>             
                  <a href="#"><span onclick="filtrar('dg',this.id);" id="selector-dg" class="tag m-t-md m-b-md">Diseño gráfico</span></a>
                  <a href="#"><span onclick="filtrar('md',this.id);" id="selector-md" class="tag m-t-md m-b-md">Marketing digital</span></a>
                  <a href="#"><span onclick="filtrar('ds',this.id);" id="selector-ds" class="tag m-t-md m-b-md">Desarrollo de software</span></a>
                  <a href="#"><span onclick="filtrar('aw',this.id);" id="selector-aw" class="tag m-t-md m-b-md">Analítica web</span></a>
                </div>
                  
            </div>
            </div>   
         </div>
        </div>
      </div>
      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#portfolio2"><i class="cs-icon-scroll-down animated bounce"></i></a></li>
            </ul>
          </div>
        </div>
      </div>    
    </section>
      
    <!-- PROYECTOS -->
    <section id="portfolio2" class="section">
        
        <div class="container dw dg">
          <div class="columns is-vcentered p-t-xl p-b-xl">
            <div class="column" data-aos="zoom-in">
              <h3>Página web</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris sem.</p>
               <div class="tags are-medium m-r-lg">
                  <a href="#"><span class="tag m-r-sm">Diseño web</span></a>             
                  <a href="#"><span class="tag m-r-sm">Diseño gráfico</span></a>
                </div>
            </div>
            <div class="column is-8" data-aos="zoom-in-left">
                <a href="#"><img src="img/portfolio1.png" width="100%" height="auto"></a>
              <a class="is-flex c-horizontal-center m-t-lg low-front portfolio-site__link" href="#">Visitar</a> 
            </div>
          </div>
        </div>
        <div class="container ds">
          <div class="columns is-vcentered c-row-reverse-tablet p-t-xl p-b-xl">
            <div class="column" data-aos="zoom-in">
              <h3>Identidad gráfica</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris sem.</p>
                <div class="tags are-medium">            
                  <a href="#"><span class="tag m-t-md">Desarrollo de software</span></a>
                </div>
            </div>
            <div class="column is-7" data-aos="zoom-in-right">
              <a href="#"><img src="img/portfolio2.png" width="100%" height="auto"></a>
              <a class="is-flex c-horizontal-center m-t-lg low-front portfolio-site__link" href="#">Visitar</a> 
            </div>
          </div>
        </div>
        
        <a class="is-flex c-horizontal-center m-t-lg low-front portfolio-showmore__link c-t-blanco" href="#" data-aos="zoom-in">Ver más</a> 
        <a class="is-flex c-horizontal-center is-block m-t-xl" href="#portfolio1"><i class="cs-icon-scroll-top animated bounce"></i></a>

    </section>

  </main>
      
  <!-- FOOTER -->

  <?php
  include("footer.php")
  ?>
    
  <!-- Scripts --> 
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.7/dist/js/bulma-extensions.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script  src="js/spinner.js"></script>
  <script  src="js/active.js"></script>
  <script  src="js/mobile.js"></script>
  <script  src="js/filter.js"></script>
    
</body>

</html>
