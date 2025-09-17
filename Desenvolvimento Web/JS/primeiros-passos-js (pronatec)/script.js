console.log("Olá, mundo!");
console.log("Este texto aparece no console do navegador.");

const botao = document.getElementById("meuBotao")

botao.addEventListener("click", function() {
    console.log("o botão foi clicado!");

    botao.textContent = "botão clicado!";
});