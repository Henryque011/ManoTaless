// carrossel de trabalhos
$(document).ready(function () {
    $('.box_carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true
    });
});

// carrossel videos
$(document).ready(function () {
    $('.box_video').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true
    });
});





