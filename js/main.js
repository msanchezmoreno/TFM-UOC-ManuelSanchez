// MENÚ MÓVIL
(function($) {
  $(function() {
    $('.toggle-overlay').click(function() {
      $('.navbar_mobile').toggleClass('navbar_mobile--open');
    });
  });
})(jQuery);

$(".button_toggle").click(function(){
   $(this).toggleClass("button_toggle--rotate");
})

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
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
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