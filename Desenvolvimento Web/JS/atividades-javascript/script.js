// 1. Encontrar os elementos na página HTML
const contadorElemento = document.getElementById("contador-numero");
const btnAumentar = document.getElementById("btn-aumentar");
const btnDiminuir = document.getElementById("btn-diminuir");

// 2. Criar a variável para guardar o valor do contador
let contador = 0;

// 3. O que fazer quando os botões são clicados?
// Lógica para o botão Aumentar
btnAumentar.addEventListener("click", function() {
 // Aumenta o contador em 1
 contador = contador + 1;

 // Atualiza o texto do parágrafo com o novo valor
 contadorElemento.textContent = contador;
 console.log("O contador foi aumentado para: " + contador);
});

// Lógica para o botão Diminuir
btnDiminuir.addEventListener("click", function() {
 // Diminui o contador em 1
 contador = contador - 1;
 
 // Atualiza o texto do parágrafo com o novo valor
 contadorElemento.textContent = contador;
 console.log("O contador foi diminuído para: " + contador);
});