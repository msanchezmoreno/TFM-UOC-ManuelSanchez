<!DOCTYPE html>
<html class="no-js" lang="Es">

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Manifest PWA -->
    
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="icon.png">

  <title>Capybara Studio | ¿Qué hacemos?</title>

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
 
  <link rel="icon" href="img/favicon.png" type="image/x-icon" sizes="72x72">

  <!-- Estilos -->
    <!-- Framework Bulma & Normalize & AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-pageloader@2.1.0/dist/css/bulma-pageloader.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    
    <!-- Override personalizado -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="icons/capybara-studio-icons.css">
  
</head>

<body id="about">
    
  <div id="pageloader" class="pageloader is-active"><span class="title">CapybaraStudio</span></div>
  
  <!-- HEADER -->

  <?php
  include("header.php")
  ?>
    
    
  <!-- CONTENIDO About -->

  <main id="about-content" class="" data-namespace="www.capybarastudio.com">
    
    <!-- "¿QUÉ HACEMOS?" Presentación-->
    <section id="about1" class="section hero is-fullheight">
        
      <div class="hero-body is-paddingless about_presentation">
        <div class="container">
          <div class="columns is-vcentered c-row-reverse-tablet">
            <div class="column">
              <h2 class="is-flex c-horizontal-center m-b-xl is-hidden-tablet low-front">¿Qué hacemos?</h2>
              <img src="img/cs_informatico.svg" class="hero-section__capybara-informatico is-flex c-image-centered float" alt="Capybara informático en una mesa con su ordenador y el smartphone" width="300" data-aos="zoom-out">
            </div> 
            <div class="column p-r-md p-l-md" data-aos="fade-up">
              <h2 class="is-flex c-horizontal-center m-b-xl is-hidden-mobile low-front">¿Qué hacemos?</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris sem, sed vehicula dui accumsan id. Etiam lobortis, placerat eros, in sollicitudin nibh orci in urna.</p>
              <p>Lorem ipsum dolor sit amet, eros, in sollicitudin nibh orci in urna.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris sem, sed vehicula dui accumsan id. Etiam lobortis, libero fermentum consectetur egestas, dolor ante placerat eros.</p>
            </div>   
         </div>
        </div>
      </div>
      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#about2"><i class="cs-icon-scroll-down animated bounce"></i></a></li>
            </ul>
          </div>
        </div>
      </div>  
        
    </section>
      
    <!-- "Servicios" section-->
    <section id="about2" class="section hero is-fullheight">
        
      <div class="hero-body is-paddingless about_services">
        <div class="container">
          <div class="columns is-multiline is-vcentered">
            <div class="column" data-aos="fade-right">
              <h4 class="c-t-centered is-block">DISEÑO WEB</h4>
              <i class="c-t-centered is-block cs-icon-diseno-web about_services--icon"></i>
            </div>
            <div class="column" data-aos="fade-up">
              <h4 class="c-t-centered is-block">DESARROLLO SOFTWARE</h4>
              <i class="c-t-centered is-block cs-icon-desarrollo-software about_services--icon"></i>
            </div>   
            <div class="column" data-aos="fade-left">
              <h4 class="c-t-centered is-block">DISEÑO GRÁFICO</h4>
              <i class="c-t-centered is-block cs-icon-diseno-grafico about_services--icon"></i>
            </div>  
            <div class="column" data-aos="fade-right">
              <h4 class="c-t-centered is-block">ANALÍTICA WEB</h4>
              <i class="c-t-centered is-block cs-icon-analitica-web about_services--icon"></i>
            </div>
            <div class="column" data-aos="fade-up">
              <h4 class="c-t-centered is-block">MARKETING DIGITAL</h4>
              <i class="c-t-centered is-block cs-icon-marketing-digital about_services--icon"></i>
            </div>   
            <div class="column" data-aos="fade-left">
              <a href="portfolio.php" class="c-t-centered is-block low-front  c-portfolio-button m-b-xl">Portfolio</a>
            </div>  
           </div>       
          </div>
      </div>    
      <a class="is-flex c-horizontal-center is-block m-t-lg" href="#about1"><i class="cs-icon-scroll-top animated bounce"></i></a>

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
    
</body>

</html>
