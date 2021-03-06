<!DOCTYPE html>
<html class="no-js" lang="Es">

<head>
  
  <title>Capybara Studio | Blog</title>
    
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Manifest PWA -->
    
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="icon.png">



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
    <!-- Framework Bulma & Normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="css/bulma-extensions.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    
    <!-- Override personalizado -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="icons/capybara-studio-icons.css">
    
</head>

<body id="blog">
    
  <div id="pageloader" class="pageloader is-active c-contact"><span class="title">CapybaraStudio</span></div>
  
  <!-- HEADER -->

  <?php
  include("header.php")
  ?>
    
  <!-- CONTENIDO BLOG -->

  <main id="blog-content" data-namespace="www.capybarastudio.com">
    
    <!-- "Blog" Presentación-->
    <section id="blog1" class="section p-t-xxl p-b-xl blog_presentation">  
      <div class="container">
        <div class="columns is-vcentered is-mobile">
          <div class="column is-full-mobile is-three-quarters-tablet is-two-thirds-desktop is-block c-image-centered">
            <h2 class="is-flex c-horizontal-center m-b-xl low-front" data-aos="fade-down">BLOG</h2>
            <p class="c-t-centered" data-aos="fade-down">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra mauris sem.</p>
              
            <form class="field is-grouped m-t-lg blog_form--search" data-aos="fade-up">
              <p class="control is-expanded">
                <input class="input is-radiusless" type="search" placeholder="Indaga en nuestro blog!">
                <a href="" class="cs-icon-search-glass is-pulled-right"></a>
              </p>
            </form>
                
            <div id="meta" class="field is-grouped-multiline blog-filter__tags" data-aos="fade-up">
              <div class="tags are-medium is-flex c-space-around">
                <a href="#"><span class="tag m-t-md m-b-md">#diseñoweb</span></a>             
                <a href="#"><span class="tag m-t-md m-b-md">#responsive</span></a>
                <a href="#"><span class="tag m-t-md m-b-md">#css</span></a>
                <a href="#"><span class="tag m-t-md m-b-md">#grafico</span></a>
                <a href="#"><span class="tag m-t-md m-b-md">#seo</span></a>
                <a href="#"><span class="tag m-t-md m-b-md">#google</span></a>
                <a href="#"><span class="tag m-t-md m-b-md">#marketing</span></a>               
              </div>    
            </div>
           </div>   
         </div>
      </div>
    </section>
      
    <!-- "Posts" -->
    <section id="blog2" class="section m-b-xl blog_posts">
      <div class="container">
         <div class="columns is-vcentered">
            <div class="column">
               <div class="card" data-aos="flip-right">
                  <div class="card-image">
                     <a href="#">
                        <figure class="image is-4by3 blog_post--headcard">
                           <img src="img/post-blog1.jpg" alt="" class="blog_post--img">
                           <div class="overlay"></div>
                        </figure>
                      </a>
                  </div>
                  <div class="card-content">
                    <a href="#"><h4>Post blog</h4></a>

                    <div class="content">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Phasellus nec iaculis mauris.
                        <br/>
                    <div class="tags are-medium is-flex c-space-around">
                      <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#grafico</span></a>        
                      <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#marketing</span></a>    
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card" data-aos="flip-right">
                  <div class="card-image">
                    <a href="#">
                      <figure class="image is-4by3 blog_post--headcard">
                        <img src="img/post-blog2.jpg" alt="" class="blog_post--img">
                        <div class="overlay"></div>
                      </figure>
                    </a>
                  </div>
                  <div class="card-content">
                    <a href="#"><h4>Post blog</h4></a>
                    <div class="content">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Phasellus nec iaculis mauris.
                      <br/>
                      <div class="tags are-medium is-flex c-space-around">
                        <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#seo</span></a>
                        <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#google</span></a>     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card" data-aos="flip-right">
                  <div class="card-image">
                    <a href="#">
                      <figure class="image is-4by3 blog_post--headcard">
                        <img src="img/post-blog3.jpg" alt="" class="blog_post--img">
                        <div class="overlay"></div>
                      </figure>
                    </a>                  
                  </div>
                  <div class="card-content">
                    <a href="#"><h4>Post blog</h4></a>
                      <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris.
                        <br/>
                        <div class="tags are-medium is-flex c-space-around">
                          <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#diseñoweb</span></a>             
                          <a href="#" class="hastagh_tags--post"><span class="tag hastagh_tag--post m-t-md m-b-md">#responsive</span></a>
                        </div>
                      </div>
                  </div>
                 </div>
               </div>
             </div>  
           </div>

      <a class="is-flex c-horizontal-center is-block m-t-xl" href="#blog1"><i class="cs-icon-scroll-top animated bounce"></i></a>
    
    </section>
      
    <section id="blog3" class="section c-corporativo blog_newsletter">
      <div class="container" data-aos="fade-right">
        <div class="columns is-vcentered">
          <div class="column is-full-mobile is-three-quarters-tablet is-half-desktop is-block c-image-centered">
            <h4 class="c-t-blanco is-flex c-horizontal-center m-b-lg">Suscríbete a nuestro blog!</h4>
            <form class="field is-grouped m-t-lg blog_form--search">
              <p class="control is-expanded">
                <input class="input is-radiusless" type="text" placeholder="Email">
                <label class="checkbox">
                  <input type="checkbox">
                  <small class="c-t-blanco">He leído y acepto la <a href="#">política de privacidad</a></small>
                </label>
              </p>
            </form>
            <a href="#" class="is-pulled-right blog_newsletter--submit low-front">Suscribirme!</a>
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
  <script  src="js/active.js"></script>
  <script  src="js/mobile.js"></script>
    
</body>

</html>
