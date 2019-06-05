<!DOCTYPE html>
<html class="no-js" lang="Es">

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Manifest PWA -->
    
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="icon.png">

  <title>Capybara Studio | Contacto</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-steps@2.2.1/dist/css/bulma-steps.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-pageloader@2.1.0/dist/css/bulma-pageloader.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    
    <!-- Override personalizado -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="icons/capybara-studio-icons.css">
  
</head>

<body id="contacto">
    
  <div id="pageloader" class="pageloader is-active"><span class="title">CapybaraStudio</span></div>
  
  <!-- HEADER -->

  <?php
  include("header.php")
  ?>
    
  <!-- CONTENIDO -->

  <main id="contacto-content" data-namespace="www.capybarastudio.com">
    
    <!-- "Blog" Presentación-->
    <section id="contacto1" class="section is-medium contact_presentation">
        
        <div class="container">          
          <div class="columns">
            <div class="column contact_form">
              <h2 class="is-flex c-horizontal-center m-b-xl low-front" data-aos="fade-down">CONTACTO</h2>
              <p class="c-t-centered" data-aos="fade-down">Hola! ¿En qué te podemos ayudar?</p>
            </div>   
          </div>
          <div class="columns m-t-lg">
            <div class="column is-7">
              <form class="p-r-md p-l-md" data-aos="fade-up-right">    
                <div class="field">
                  <div class="control">
                    <input class="input is-radiusless" type="text" placeholder="Nombre y apellidos">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <input class="input is-radiusless" type="email" placeholder="Email" value="">
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <textarea class="textarea has-fixed-size is-radiusless" placeholder="Cuéntenos!"></textarea>
                  </div>
                </div>

                <div class="field">
                  <div class="control">
                    <a class="is-pulled-right contact_form--send low-front m-r-lg">Enviar</a>
                  </div>
                </div>
              </form>
            </div>  
              
            <div class="column contact_information c-space-between p-t-lg" data-aos="fade-left">
              <p class="contact_information--item "><i class="cs-icon-map"></i> Madrid (Madrid), España</p>
              <p class="contact_information--item"><i class="cs-icon-phone"></i> +34 910 000 000</p>
              <p class="contact_information--item"><i class="cs-icon-email"></i> contact@capybarastudio.com</p>
            </div>   
         </div>
        </div>
 
    </section>

    <!-- Guided form -->
      
    <section id="contacto2" class="section hero is-medium c-corporativo">
      <div class="container">    
        <div class="steps columns" id="stepsDemo" data-aos="fade-right">    
          <div class="steps-content guided-form--content">
            <div class="step-content has-text-centered is-active is-success">  
              <h4 class="c-t-blanco m-b-lg">¿En qué está interesado?</h4>
              <ul class="column guided-form__items c-space-around c-space-around-column">
                 <li value="0" class="field guided-form__item-box p-t-none p-r-sm p-b-md p-l-sm m-r-sm m-b-lg first-item">Diseño web</li>
                 <li value="1" class="field guided-form__item-box p-t-none p-r-sm p-b-md p-l-sm m-r-sm m-b-lg first-item">Desarrollo de software</li>
                 <li value="2" class="field guided-form__item-box p-t-none p-r-sm p-b-md p-l-sm m-r-sm m-b-lg first-item">Diseño gráfico</li>
                 <li value="3" class="field guided-form__item-box p-t-none p-r-sm p-b-md p-l-sm m-r-sm m-b-lg first-item">Analítica web</li>
                 <li value="4" class="field guided-form__item-box p-t-none p-r-sm p-b-md p-l-sm m-r-sm m-b-lg first-item">Marketing Digital</li>
              </ul>
              <input class="interes" type="hidden" name="interested"/>
            </div>        
              
            <div class="column is-full-mobile is-two-thirds-tablet is-half-desktop step-content c-image-centered is-active">
              <h4 class="c-t-blanco m-b-lg has-text-centered">Pónganos en situación</h4>
              <p class="c-t-blanco m-b-lg">¿En qué consiste? ¿Qué plazos manejamos? ¿Estado de maduración?... o cualquier otra cosa que considere relevante ;)</p>
              <div class="field">
                <div class="control">
                    <textarea class="textarea  has-fixed-size is-radiusless" name="message" id="message" placeholder="¿En qué consiste el proyecto?" autofocus data-validate="require"></textarea>
                </div>
              </div>  
            </div> 
              
            <div class="column is-full-mobile is-two-thirds-tablet is-half-desktop step-content c-image-centered is-active">
              <h4 class="c-t-blanco m-b-lg has-text-centered">Para contactar</h4>
              <p class="c-t-blanco m-b-lg">¿Qué método de contacto prefiere?</p>
              <div class="field">
                <div class="control"><input class="input is-radiusless m-b-md" name="name" id="name" type="text" placeholder="Nompre y apellidos" data-validate="require"></div>
                <div class="control"><input class="input is-radiusless m-b-md" name="email" id="email" type="text" placeholder="email" data-validate="require"></div>
                <div class="control"><input class="input is-radiusless m-b-md" name="phone" id="phone" type="text" placeholder="phone" data-validate="require"></div>
              </div>
            </div>
              
            <div class="step-content has-text-centered">
              <h4 class="c-t-blanco m-b-lg">Fenomenal! :)</h4>
              <p class="c-t-blanco">Ya solo queda enviar y nos pondremos en contacto :)</p>
              <form class="field is-blocl has-text-centered m-t-lg m-b-lg blog_form--search">
                <label class="checkbox">
                  <input type="checkbox">
                  <small class="c-t-blanco">He leído y acepto la <a href="#">política de privacidad</a></small>
                </label>
               </form>
               <a href="#" class="guided_form--submit low-front">Enviar!</a>
            </div>
              
          </div>
          <div class="column is-one-quarter c-space-around c-image-centered step_level--marker m-b-lg m-t-lg">
            <div class="step-item is-active">
              <div class="step-marker"></div>
            </div>
            <div class="step-item">
              <div class="step-marker"></div>
            </div>
            <div class="step-item">
              <div class="step-marker"></div>
            </div>
            <div class="step-item">
              <div class="step-marker"></div>
            </div>
          </div>
          <div class="steps-actions">
            <div class="steps-action">
              <a href="#" data-nav="previous" class="button is-light">Anterior</a>
            </div>
            <div class="steps-action">
              <a href="#" data-nav="next" class="button is-light">Siguiente</a>
            </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bulma-steps@2.2.1/dist/js/bulma-steps.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bulma-extensions@6.2.7/dist/js/bulma-extensions.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script  src="js/spinner.js"></script>
  <script  src="js/sticky.js"></script>
  <script  src="js/active.js"></script>
  <script  src="js/mobile.js"></script>
  <script  src="js/guided-form.js"></script>

    
</body>

</html>
