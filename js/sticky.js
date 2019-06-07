// MENU STICKY AFTER INITIAL SECTION
$(window).scroll(function() {
  //No mobile version
  var header = $(document).scrollTop()

  if($(window).width() > 1087){
    
  if (header < 700) {
    $(".navbar_desktop").removeClass("navbar_desktop-view");
    $(".navbar_desktop").addClass("navbar_desktop-ocultar")
  } else {
    $(".navbar_desktop").removeClass("navbar_desktop-ocultar")
    $(".navbar_desktop").addClass("navbar_desktop-view");
  }
  }
});

$( window ).resize(function() {
  var header = $(document).scrollTop();
  var width = $( window ).width(); 
  console.log(width)
  //Desk header down
  if(width > 1087 && header < 700){
    $(".navbar_desktop").removeClass("navbar_desktop-view");
    $(".navbar_desktop").addClass("navbar_desktop-ocultar")
  }
  //Desk header top
  else if(width > 1087 && header > 700){
    $(".navbar_desktop").removeClass("navbar_desktop-ocultar");
    $(".navbar_desktop").addClass("navbar_desktop-view");
  }
  else if(width < 1087){
    console.log("ocultar en movil")
    $(".navbar_desktop").removeClass("navbar_desktop-view");
    $(".navbar_desktop").addClass("navbar_desktop-ocultar")
  }
});