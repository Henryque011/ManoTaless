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
    const barbas = document.getElementById('barbas');
    const dreads = document.getElementById('dreads');
    const sobrancelha = document.getElementById('sobrancelha');

    const imagensCorte = document.querySelectorAll('.imagemCorte');
    const imagensTranca = document.querySelectorAll('.imagemTranca');
    const imagensBarba = document.querySelectorAll('.imagemBarba');
    const imagensDread = document.querySelectorAll('.imagemDread');
    const imagensSobrancelha = document.querySelectorAll('.imagemSobrancelha');

    todos.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.add('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.add('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.add('ativo'));
        imagensDread.forEach(imagem => imagem.classList.add('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.add('ativo'));
    });

    cortes.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.add('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));
        imagensDread.forEach(imagem => imagem.classList.remove('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.remove('ativo'));
    });

    trancas.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.add('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));
        imagensDread.forEach(imagem => imagem.classList.remove('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.remove('ativo'));
    });

    barbas.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.add('ativo'));
        imagensDread.forEach(imagem => imagem.classList.remove('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.remove('ativo'));
    })

    dreads.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));
        imagensDread.forEach(imagem => imagem.classList.add('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.remove('ativo'));
    })

    sobrancelha.addEventListener('click', function () {
        imagensCorte.forEach(imagem => imagem.classList.remove('ativo'));
        imagensTranca.forEach(imagem => imagem.classList.remove('ativo'));
        imagensBarba.forEach(imagem => imagem.classList.remove('ativo'));
        imagensDread.forEach(imagem => imagem.classList.remove('ativo'));
        imagensSobrancelha.forEach(imagem => imagem.classList.add('ativo'));
    })
});

//loader 
document.addEventListener('DOMContentLoaded', function () {
    // Seleciona todos os links que não abrem em nova aba (target="_blank")
    var links = document.querySelectorAll('a:not([target="_blank"])');
    var loaderOverlay = document.getElementById('loader-overlay');

    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault(); // Impede a navegação imediata

            // Exibe o overlay com o loader
            loaderOverlay.style.display = 'flex';

            // Opcional: Aguarda um breve momento para que o loader seja visível
            setTimeout(function () {
                window.location.href = link.href;
            }, 1000);
        });
    });
});
