<!DOCTYPE html>
<html class="no-js" lang="Es">

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Manifest PWA -->
    
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="icon.png">

  <title>Capybara Studio | Home</title>

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

<body id="home">
    
  <div id="pageloader" class="pageloader is-active c-corporativo"><span class="title">CapybaraStudio</span></div>
  
  <!-- HEADER -->

  <?php
  include("header.php")
  ?>
    
  <!-- CONTENIDO -->

  <main id="homepage-content" class="main-container" data-namespace="www.capybarastudio.com">

    <!-- INICIO-->
    <section id="home1" class="section hero is-fullheight section__presentation-home">
        
      <div class="hero-head">
        <div class="container">
          <div class="tabs is-centered">
            <img src="img/logo-capybarastudio.svg" class="hero_inicial__logo is-block" width="300" alt="Logo Capybara Studio">
          </div>
        </div>
      </div>
        
      <div class="hero-body is-paddingless">
        <div class="container">
          <div class="columns is-vcentered c-row-reverse-tablet">
            <div class="column is-7">
              <div class="columns is-mobile m-t-md">
                <div class="column is-half hero-initial__capybara">
                <!-- CAPYBARA Empresario SVG -->
                  <img class="hero-initial__capybara-empresario is-pulled-right float" src="img/cs_empresario.svg" alt="Capybara empresario señalando las diferentes páginas que componen la página web" width="400" data-aos="fade-up"/>
                </div>
                <div class="column" data-aos="fade-left">
                <!-- NAV Hero Section -->
                  <nav class="menu-hero__initial">
                      <ul>
                        <li><a class="menu-hero__initial-item" href="#home3">Home</a></li>
                        <li><a class="menu-hero__initial-item" href="about-us.php">¿Qué hacemos?</a></li>
                        <li><a class="menu-hero__initial-item" href="portfolio.php">Portfolio</a></li>
                        <li><a class="menu-hero__initial-item" href="blog.php">Blog</a></li>
                        <li><a class="menu-hero__initial-item" href="contacto.php">Contacto</a></li>
                      </ul>
                  </nav>
                </div>
              </div>    
            </div>
            <div class="column p-r-lg p-l-lg" data-aos="fade-right">
                <p>Lorem ipsum <span class="c-acento c-t-corporativo">dolor sit amet</span>, consectetur adipiscing elit. Sed pharetra mauris sem, sed vehicula dui accumsan id. Etiam lobortisa.</p>
            </div>
        </div>
       </div>
     </div>
     <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#home2"><i class="cs-icon-scroll-down animated bounce"></i></a></li>
            </ul>
          </div>
        </div>
    </div>
    </section>

    
    <!-- "¿QUÉ HACEMOS?"-->
    <section id="home2" class="section hero is-fullheight">
        
      <div class="hero-body is-paddingless">
        <div class="container">
          <div class="columns is-vcentered c-row-reverse-tablet">
            <div class="column">
              <img src="img/cs_informatico.svg" class="hero-section__capybara-informatico is-flex c-image-centered float" alt="Capybara informático en una mesa con su ordenador y el smartphone" data-aos="fade-up-left">
            </div>    
            <div class="column p-r-lg p-l-lg" data-aos="fade-up">
              <p>Lorem ipsum dolor sit amet, <span class="c-acento c-t-about">consectetur adipiscing</span> elit. Sed pharetra mauris sem, sed vehicula dui accumsan id. Etiam lobortis, libero fermentum consectetur egestas, dolor ante placerat eros, in sollicitudin nibh orci in urna.</p>
              <p><a href="about-us.php" class="c-t-centered is-block bt-home c-about-button m-t-lg">¿Qué hacemos?</a></p>
            </div>
         </div>
        </div>
      </div>
      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#home3"><i class="cs-icon-scroll-down animated bounce"></i></a></li>
            </ul>
          </div>
        </div>
      </div>  
    </section>
      
    <!-- "PORTFOLIO"-->
    <section id="home3" class="section hero is-fullheight">
        
      <div class="hero-body is-paddingless">
        <div class="container">
          <div class="columns is-vcentered">
            <div class="column is-7">
              <img src="img/cs_pintor.svg" class="hero-section__capybara-pintor is-flex c-image-centered float" alt="Capybara pintor pintando un cuadra de la Mona Lisa Capybara" data-aos="fade-up-right">
            </div> 
            <div class="column p-r-lg p-l-lg" data-aos="fade-up">
              <p>Lorem ipsum dolor sit amet, <span class="c-acento c-t-portfolio">consectetur adipiscing</span> elit. Sed pharetra mauris sem, sed vehicula dui accumsan id. Etiam lobortis, libero fermentum consectetur egestas.</p>
              <p><a href="portfolio.php" class="is-pulled-right bt-home c-portfolio-button m-t-lg m-r-xl">Portfolio</a></p>
            </div>   
         </div>
        </div>
      </div>
      <div class="hero-foot">
        <div class="container">
          <div class="tabs is-centered">
            <ul>
              <li><a href="#home2"><i class="cs-icon-scroll-top animated bounce"></i></a></li>
            </ul>
          </div>
        </div>
      </div> 
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
  <script  src="js/sticky.js"></script>
  <script  src="js/active.js"></script>
  <script  src="js/mobile.js"></script>
    
</body>

</html>
