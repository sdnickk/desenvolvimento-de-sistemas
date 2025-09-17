const btnAlternar = document.getElementById('alternar-visibilidade');
const conteudo = document.getElementById('conteudo');
btnAlternar.addEventListener('click', () => {
    if (conteudo.style.display === 'none') {
        conteudo.style.display = 'block';
    } else {
        conteudo.style.display = 'none';
    }
});
