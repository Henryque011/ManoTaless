
// Seleciona o botão do menu e a navegação
const menuButton = document.querySelector('.menu');
const navMenu = document.querySelector('nav');

// Adiciona um evento de clique ao botão
menuButton.addEventListener('click', () => {
    navMenu.classList.toggle('active'); // Alterna a classe 'active'
});

