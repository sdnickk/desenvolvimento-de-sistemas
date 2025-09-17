const frases = ["frase1", "frase2", "frase3"];
const btnGerar = document.getElementById('gerar-frase');
const paragrafo = document.getElementById('paragrafo');

btnGerar.addEventListener('click', () => {
    const indiceAleatorio = Math.floor(Math.random() * frases.length);
    paragrafo.textContent = frases[indiceAleatorio];
})