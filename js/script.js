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

// Menu
const menuToggle = document.getElementById('menu-toggle');
const menuLateral = document.getElementById('menu-lateral');
const body = document.querySelector('body');
const btnSair = document.querySelector('.btn-sair');

menuToggle.addEventListener('click', () => {
    menuLateral.classList.toggle('ativo');
    body.classList.toggle('body-ativo');
});

btnSair.addEventListener('click', () => {
    menuLateral.classList.remove('ativo');
    body.classList.remove('body-ativo');
});

//estilos 
document.addEventListener('DOMContentLoaded', function () {
    const corte = document.getElementById('corte');
    const tranca = document.getElementById('tranca');
    // const missao = document.getElementById('missao');
    const img_corte = document.getElementById('img_corte');
    const img_tranca = document.getElementById('img_tranca');
    // const img_missao = document.getElementById('img_missao');

    corte.addEventListener('click', function () {
        img_corte.classList.add('ativo');
        img_tranca.classList.remove('ativo');
        // img_missao .classList.remove('ativo');
    });

    tranca.addEventListener('click', function () {
        img_corte.classList.remove('ativo');
        img_tranca.classList.add('ativo');
        // img_missao.classList.remove('ativo');
    });

    // missao.addEventListener('click', function () {
    //     img_vi.classList.remove('ativo');
    //     img_valores.classList.remove('ativo');
    //     img_missao.classList.add('ativo');
    // });
});