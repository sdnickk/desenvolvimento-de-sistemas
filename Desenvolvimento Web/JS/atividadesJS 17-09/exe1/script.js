const contadorElemento = document.getElementById('contador');
const btnAumentar = document.getElementById('aumentar');
const btnDiminuir = document.getElementById('diminuir');
let contador = 0;

btnAumentar.addEventListener ('click', () => {
    contador ++;
    contadorElemento.textContent = contador;
})

btnDiminuir.addEventListener ('click', () => {
    contador --;
    contadorElemento.textContent = contador;
})