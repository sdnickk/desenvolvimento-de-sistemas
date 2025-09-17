const paragrafo = document.getElementById('paragrafo');
const btnMudarTexto = document.getElementById('mudar-texto');

btnMudarTexto.addEventListener ('click', () => {
    paragrafo.textContent = 'você mudou o texto do paragrafo!';
})