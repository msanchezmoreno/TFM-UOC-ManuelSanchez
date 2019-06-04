// FILTRADO

function filtrar(tag,item){
    var values = ["dw","dg","ds","aw","md"];
    values.forEach(function(element) {
      console.log()
      if (tag.localeCompare(element) == 0){
        $("."+element).css({"display":"block"});
      }
      else{
        $("."+element).css({"display":"none"});
      }
    });
    //Todos normales
    $(".tag").css({"background-color":""});
    //Marcamos
    $("#"+item).css({"background-color":"#E965C6"}); 
}