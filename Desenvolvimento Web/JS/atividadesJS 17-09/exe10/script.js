const numeroSecreto = Math.floor(Math.random() * 100) + 1;
const palpiteInput = document.getElementById('palpite');
const btnAdivinhar = document.getElementById('adivinhar');
const resultadoParagrafo = document.getElementById('resultado');
btnAdivinhar.addEventListener('click', () => {
    const palpite = Number(palpiteInput.value);
    if (palpite < numeroSecreto) {
        resultadoParagrafo.textContent = "Muito baixo. Tente um número maior!";
    } else if (palpite > numeroSecreto) {
        resultadoParagrafo.textContent = "Muito alto. Tente um número menor!";
    } else {
        resultadoParagrafo.textContent = "Parabéns! Você acertou!";
        btnAdivinhar.disabled = true;
    }
});