$(document).ready(function(){

$(".navbar-nav a").on("click", function(){
    $(".navbar-nav").find(".active").removeClass("active");
    $(this).addClass("active");
 });

 if ($(".text-slider").length == 1) {
              
    var typed_strings = 
        $(".text-slider-items").text();

    var typed = new Typed(".text-slider", {
        strings: typed_strings.split(", "),
        typeSpeed: 80,
        loop: true,
        backDelay: 900,
        backSpeed: 40,
    });
    }
});

