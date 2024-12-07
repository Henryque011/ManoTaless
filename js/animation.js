document.querySelector(".abrirMenu").onclick = function () {
    document.documentElement.classList.add("menuAtivo");
}
document.querySelector(".fecharMenu").onclick = function() {
    document.documentElement.classList.remove("menuAtivo");
}
