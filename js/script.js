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
    // Botões
    const todos = document.getElementById('todos');
    const cortes = document.getElementById('cortes');
    const trancas = document.getElementById('trancas');
    const barbas = document.getElementById('barbas');
    
    // Imagens
    const imagensCorte = document.querySelectorAll('.imagemCorte'); // Seleciona todas as imagens de corte
    const imagensTranca = document.querySelectorAll('.imagemTranca'); // Seleciona todas as imagens de tranças
    const imagensBarba = document.querySelectorAll('.imagemBarba');
    
    // Exibe todas as imagens
    todos.addEventListener('click', function () {
        // Exibe todas as imagens de corte
        imagensCorte.forEach(imagem => imagem.classList.add('ativo'));
        // Exibe todas as imagens de trança
        imagensTranca.forEach(imagem => imagem.classList.add('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.add('ativo'));
    });

    // Exibe apenas as imagens de corte
    cortes.addEventListener('click', function () {
        // Exibe todas as imagens de corte
        imagensCorte.forEach(imagem => imagem.classList.add('ativo'));
        // Esconde as imagens de trança
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));

    });

    // Exibe apenas as imagens de tranças
    trancas.addEventListener('click', function () {
        // Esconde as imagens de corte
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        // Exibe todas as imagens de trança
        imagensTranca.forEach(imagem => imagem.classList.add('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));
    });

    barbas.addEventListener('click', function() {
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.add('ativo'));
    })
});
