// carrossel de trabalhos
$(document).ready(function () {
    $('.box_carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        responsive: [
            {
                breakpoint: 481, // para telas com 480px ou menos
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }

            },
            {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// carrossel videos
$(document).ready(function () {
    var $slider = $('.box_video');

    $slider.slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: false
    });

    $slider.on('afterChange', function (event, slick, currentSlide) {
        var $currentSlide = $(slick.$slides[currentSlide]);
        var video = $currentSlide.find('video').get(0);
        if (video) {
            video.currentTime = 0;
            video.play();
        }
    });

    $slider.find('video').on('ended', function () {
        $slider.slick('slickNext');
    });

    // Alteração do som ao clicar no ícone
    $('.toggleSound').click(function () {
        var video = $(this).siblings('video').get(0);
        if (video) {
            video.muted = !video.muted;
            $(this).toggleClass('fa-volume-off fa-volume-high');
        }
    });
});


// $(document).ready(function () {
//     $('.box_video').slick({
//         infinite: true,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 3000,
//         dots: true
//     });
// });





