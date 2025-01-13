// carrossel de trabalhos
$(document).ready(function () {
    $('.box_carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 2000,
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
        autoplaySpeed: 2000,
        dots: true
    });
});

// botão upper 
const btnScrollTop = document.querySelector(".btn-scroll-top");

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
    btnScrollTop.classList.add("show-btn-scroll-top");
    } else {
    btnScrollTop.classList.remove("show-btn-scroll-top");
    }
});

btnScrollTop.addEventListener("click", () => {
    window.scrollTo({
    top: 0,
    behavior: "smooth",
    });
});