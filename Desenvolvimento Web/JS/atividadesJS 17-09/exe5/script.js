const num1Input = document.getElementById('num1');
const num2Input = document.getElementById('num2');
const btnSoma = document.getElementById('somar');
const resultado = document.getElementById('resultado');

btnSoma.addEventListener('click', () => {
    const num1 = Number(num1Input.value);
    const num2 = Number(num2Input.value);
    const soma = num1 + num2;
    resultado.textContent = soma
})