AOS.init();

// ACTIVE ITEMS MENU ESCRITORIO

  var path = window.location.pathname;
  console.log(path);
  switch(path) {
    case "/index.php":
      $(".navbar_desktop").removeClass("navbar_desktop-view");
      $("#navitem-home-desk").addClass("nav_menu--active");
      $("#navitem-home-mobile").addClass("nav_menu--active");
      break;
    case "/about-us.php":
      $("#navitem-about-desk").addClass("nav_menu--active");
      $("#navitem-about-mobile").addClass("nav_menu--active");
      break;
    case "/portfolio.php":
      $("#navitem-portfolio-desk").addClass("nav_menu--active");
      $("#navitem-portfolio-mobile").addClass("nav_menu--active");
      break;
    case "/blog.php":
      $("#navitem-blog-mobile").addClass("nav_menu--active");
      $("#navitem-blog-desk").addClass("nav_menu--active");
      break;
    case "/contacto.php":
      $("#navitem-contacto-desk").addClass("nav_menu--active");
      $("#navitem-contacto-mobile").addClass("nav_menu--active");
      break;
    default:
  }