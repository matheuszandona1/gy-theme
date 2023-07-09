$(".pr-operating__slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    dots: true,
    prevArrow: $(".prev-arrow"),
    nextArrow: $(".next-arrow")
});
$(document).ready(function() {
    // Verifica se a seção ".cases" está presente
    if ($(".cases").length) $(".newsletter").css("margin-top", "-320px");
    else $(".newsletter").css("margin-top", "0");
});
$(".hero-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    prevArrow: $(".prev-arrow"),
    nextArrow: $(".next-arrow")
});
$(".clientes-slider").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    dots: true,
    prevArrow: $(".prev-arrow-clientes"),
    nextArrow: $(".next-arrow-clientes")
});

//# sourceMappingURL=index.js.map
