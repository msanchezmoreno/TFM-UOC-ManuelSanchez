// MENU STICKY AFTER INITIAL SECTION
$(window).scroll(function() {

  var header = $(document).scrollTop()
  if (header < 700) {
    $(".navbar_desktop").css("display", "none !important");
    $(".navbar_desktop").removeClass("navbar_desktop-view");
  } else {
    $(".navbar_desktop").addClass("navbar_desktop-view");
  }
});