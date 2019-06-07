//SPINNER

function showAndHideSpinner(){
  setTimeout ("", 1500); 
  $("#pageloader").removeClass("is-active");
}

$(window).on("load",function(){
  showAndHideSpinner();
});