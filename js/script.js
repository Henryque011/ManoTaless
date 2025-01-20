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
// document.addEventListener('DOMContentLoaded', function () {
//     const corte = document.getElementById('corte');
//     const tranca = document.getElementById('tranca');
//     // const missao = document.getElementById('missao');
//     const img_corte = document.getElementById('img_corte');
//     const img_tranca = document.getElementById('img_tranca');
//     // const img_missao = document.getElementById('img_missao');

//     corte.addEventListener('click', function () {
//         img_corte.classList.add('ativo');
//         img_tranca.classList.remove('ativo');
//         // img_missao .classList.remove('ativo');
//     });

//     tranca.addEventListener('click', function () {
//         img_corte.classList.remove('ativo');
//         img_tranca.classList.add('ativo');
//         // img_missao.classList.remove('ativo');
//     });

//     // missao.addEventListener('click', function () {
//     //     img_vi.classList.remove('ativo');
//     //     img_valores.classList.remove('ativo');
//     //     img_missao.classList.add('ativo');
//     // });
// });

document.addEventListener('DOMContentLoaded', function () {
    const todos = document.getElementById('todos');
    const cortes = document.getElementById('cortes');
    const trancas = document.getElementById('trancas');
    
    // Seleciona todas as imagens de cortes e tranças
    const imagensCortes = document.querySelectorAll('.imagemCorte');
    const imagensTrancas = document.querySelectorAll('.imagemTranca');

    // Função para mostrar todas as imagens
    function mostrarTodos() {
        imagensCortes.forEach(img => img.style.display = 'block');
        imagensTrancas.forEach(img => img.style.display = 'block');
    }

    // Função para mostrar apenas as imagens de cortes
    function mostrarCortes() {
        imagensCortes.forEach(img => img.style.display = 'block');
        imagensTrancas.forEach(img => img.style.display = 'none');
    }

    // Função para mostrar apenas as imagens de tranças
    function mostrarTrancas() {
        imagensCortes.forEach(img => img.style.display = 'none');
        imagensTrancas.forEach(img => img.style.display = 'block');
    }

    // Eventos dos botões
    todos.addEventListener('click', mostrarTodos);
    cortes.addEventListener('click', mostrarCortes);
    trancas.addEventListener('click', mostrarTrancas);
});