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
    const visao = document.getElementById('visao');
    const valores = document.getElementById('valores');
    const missao = document.getElementById('missao');