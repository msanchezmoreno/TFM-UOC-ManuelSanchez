bulmaSteps.attach();

$(function(){
    var values = ["Diseño web","Desarrollo de software","Diseño gráfico","Analítica web","Marketing Digital" ];
    $(".first-item").on("click", function(){
        $(".first-item").removeClass("guided-form__box-active");
        $(this).addClass("guided-form__box-active");
        var value = $(this).val();
        $("input[name='interested']").val([values[value]]);
    })
});