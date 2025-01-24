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

// fotos 
document.addEventListener('DOMContentLoaded', function () {
    const todos = document.getElementById('todos');
    const cortes = document.getElementById('cortes');
    const trancas = document.getElementById('trancas');

    const imagemCorte = document.getElementById('imagemCorte');
    const imagemTranca = document.getElementById('imagemTranca');

    todos.addEventListener('click', function () {
        imagemCorte.classList.add('ativo');
        imagemTranca.classList.add('ativo');
    });

    cortes.addEventListener('click', function () {
        imagemCorte.classList.add('ativo');
        imagemTranca.classList.remove('ativo');
    });

    trancas.addEventListener('click', function () {
        imagemCorte.classList.remove('ativo');
        imagemTranca.classList.add('ativo');
    });
});




