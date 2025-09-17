const inputNovoItem = document.getElementById('novo-item');
const btnAdicionar = document.getElementById('adicionar');
const lista = document.getElementById('lista');
btnAdicionar.addEventListener('click', () => {
    const textoItem = inputNovoItem.value;
    if (textoItem.trim() !== '') {
        const novoLi = document.createElement('li');
        novoLi.textContent = textoItem;
        lista.appendChild(novoLi);
        inputNovoItem.value = '';
        // Bônus: Remover item ao clicar
        novoLi.addEventListener('click', () => {
            novoLi.remove();
        });
    }
});