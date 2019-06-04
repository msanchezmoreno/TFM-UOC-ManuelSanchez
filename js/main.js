AOS.init();

// INCLUDES HTML
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Página no encontrada.";}
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      return;
    }
  }
};

// MENU STICKY AFTER INITIAL SECTION

$(window).scroll(function() {
  var header = $(document).scrollTop();
  var headerHeight = $(".navbar_desktop").outerHeight();
  var firstSection = $(".main-container section:nth-of-type(1)").outerHeight();
  
  if (header < firstSection) {
    $(".navbar_desktop").addClass("navbar_desktop-view");
  } else {
    $(".navbar_desktop").removeClass("navbar_desktop-view");
  }
});


$("#selector-dw").click(ocultar);

function ocultar(){
    $(".dw").css({"display":"none"});
}


//SPINNER

function showAndHideSpinner(){
  setTimeout ("", 1500); 
  $("#pageloader").removeClass("is-active");
}

// ACTIVE ITEMS MENU ESCRITORIO

$(window).on('load', function(){ 
  showAndHideSpinner();
  var path = window.location.pathname;
  switch(path) {
    case "index.html":
      $("#navitem-home-desk").addClass("nav_menu--active");
      break;
    case "about-us.html":
      $("#navitem-about-desk").addClass("nav_menu--active");
      break;
    case "portfolio.html":
      $("#navitem-portfolio-desk").addClass("nav_menu--active");
      break;
    case "blog.html":
      $("#navitem-blog-desk").addClass("nav_menu--active");
      break;
    case "contacto.html":
      $("#navitem-contacto-desk").addClass("nav_menu--active");
      break;
        case "index.html":
      $("#navitem-home-mobile").addClass("nav_menu--active");
      break;
    case "about-us.html":
      $("#navitem-about-mobile").addClass("nav_menu--active");
      break;
    case "portfolio.html":
      $("#navitem-portfolio-mobile").addClass("nav_menu--active");
      break;
    case "blog.html":
      $("#navitem-blog-mobile").addClass("nav_menu--active");
      break;
    case "contacto.html":
      $("#navitem-contacto-mobile").addClass("nav_menu--active");
      break;
    default:
  }

});




