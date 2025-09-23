//Exercício 1
function calculadora() {
    const num1input = document.getElementById('num1');
    const num2input = document.getElementById('num2');
    const resultadoCalc = document.getElementById('resultadoCalc');

    function calcular(operacao) {
        const num1 = Number(num1input.value);
        const num2 = Number(num2input.value);
        let resultado;

        switch (operacao) {
            case 'somar':
                resultado = num1 + num2;
                resultadoCalc.textContent = `O resultado da soma é: ${resultado}`;
                break;
            case 'subtrair':
                resultado = num1 - num2;
                resultadoCalc.textContent = `O resultado da subtração é: ${resultado}`;
                break;
            case 'multiplicar':
                resultado = num1 * num2;
                resultadoCalc.textContent = `O resultado da multiplicação é: ${resultado}`;
                break;
            case 'dividir':
                if (num2 === 0) {
                    resultadoCalc.textContent = "Erro: divisão por zero";
                } else {
                    resultado = num1 / num2;
                    resultadoCalc.textContent = `O resultado da divisão é: ${resultado}`;
                }
                break;
        }
    }

    document.getElementById('somar').addEventListener('click', () => calcular('somar'));
    document.getElementById('subtrair').addEventListener('click', () => calcular('subtrair'));
    document.getElementById('multiplicar').addEventListener('click', () => calcular('multiplicar'));
    document.getElementById('dividir').addEventListener('click', () => calcular('dividir'));
} calculadora();

//exercício 2
function parImpar() {
    const numInput = document.getElementById('numero');
    const verificarBtn = document.getElementById('verificar');
    const resultado = document.getElementById('resultadoPouI');

    verificarBtn.addEventListener('click', () => {
        const num = Number(numInput.value);
        if (num % 2 == 0) {
            resultado.textContent = "o número é par";
        } else {
            resultado.textContent = "o número é ímpar"
        }
    })
} parImpar();

//exercicio 3
function contVogais() {
    const stringInput = document.getElementById('string');
    const resultado = document.getElementById('resultadoVog');
    const vogais = "aeiou";

    function verifica() {
        let contador = 0;
        const texto = stringInput.value.toLowerCase();

        for (let char of texto) {
            if (vogais.includes(char)) {
                contador++;
            }
        }

        resultado.textContent = "A palavra/frase possui " + contador + " vogais.";
    }

    document.getElementById('verificarString').addEventListener('click', verifica);
} contVogais();

//exercício 4
function calcIMC() {
    const inputPeso = document.getElementById('peso');
    const inputAltura = document.getElementById('altura');
    const btnCalcular = document.getElementById('calcular');
    const resultadoElemento = document.getElementById('resultado');

    btnCalcular.addEventListener('click', () => {
        const peso = Number(inputPeso.value);
        const alturaCm = Number(inputAltura.value);
        if (peso === 0 || alturaCm === 0) {
            resultadoElemento.textContent = "Por favor, preencha todos os campos.";
            return;
        }

        const alturaM = alturaCm / 100;
        const imc = peso / (alturaM * alturaM);
        const imcArredondado = imc.toFixed(2);
        let classificacao = '';

        if (imc < 18.5) {
            classificacao = 'Abaixo do peso';
        } else if (imc >= 18.5 && imc <= 24.9) {
            classificacao = 'Peso normal';
        } else if (imc >= 25 && imc <= 29.9) {
            classificacao = 'Sobrepeso';
        } else {
            classificacao = 'Obesidade';
        }
        resultadoElemento.textContent = `Seu IMC é ${imcArredondado} (${classificacao}).`;
    });
} calcIMC();

//exercício 5
function invString (){
    const palavra = document.getElementById('stringInv');
    const resultado = document.getElementById('resultadoInv');

    function inverte(){
        let invertida = ""; 
        const text = palavra.value;
        for (let i = text.length - 1; i >= 0; i--){
        invertida += text[i];
    }
    resultado.textContent = "sua palavra invertida é " + invertida;
  }
  document.getElementById('inverter').addEventListener('click', inverte);
}invString();

//exercício 6 
    function maiorNumero(array) {
        if (!Array.isArray(array) || array.length === 0) {
            return "Array vazio";
        }
        let maior = array[0];
        for (let i = 1; i < array.length; i++) {
            if (array[i] > maior) {
            maior = array[i];
            }
        }
        return maior;
        }
    function iniciar() {
      const input = document.getElementById('arrayInput');
      const resultado = document.getElementById('resultadoMaior');

      document.getElementById('verificarMaior').addEventListener('click', () => {
        const array = input.value.split(',').map(num => Number(num.trim()));
        const maior = maiorNumero(array);
        resultado.textContent = "O maior número é: " + maior;
      });
    } iniciar();

//exercício 7
 function fatorialCompleto() {
      const input = document.getElementById('numeroFatorial');
      const resultado = document.getElementById('resultadoFatorial');
      const botao = document.getElementById('calcularFatorial');

      botao.addEventListener('click', () => {
        const num = Number(input.value);
        
        if (num < 0) {
          resultado.textContent = "Não existe fatorial de números negativos";
          return;
        }
        if (num === 0 || num === 1) {
          resultado.textContent = `${num}! = 1`;
          return;
        }

        let fatorial = 1;
        let detalhado = [];
        for (let i = num; i > 0; i--) {
          fatorial *= i;
          detalhado.push(i);
        }
        resultado.textContent = `${num}! = ${detalhado.join(' × ')} = ${fatorial}`;
      });
    }fatorialCompleto(); 

//exercício 8 
function verificaPalindromo(){
      const input = document.getElementById('textoPalindromo');
      const resultado = document.getElementById('resultadoPalindromo');
      const botao = document.getElementById('verificarPal');

      botao.addEventListener('click', () => {
        const texto = input.value;
        const normalizado = texto.toLowerCase().replace(/[^a-z0-9]/g, '');
        const len = normalizado.length;
        let ehPalindromo = true;

        for (let i = 0; i < len / 2; i++) {
          if (normalizado[i] !== normalizado[len - 1 - i]) {
            ehPalindromo = false;
            break;
          }
        }

        resultado.textContent = ehPalindromo 
          ? `"${texto}" é um palíndromo!` 
          : `"${texto}" não é um palíndromo.`;
      });
    } verificaPalindromo();

//exercício 9 
function gerarTabuada (){
     const input = document.getElementById('numeroTabuada');
      const resultado = document.getElementById('resultadoTabuada');
      const botao = document.getElementById('gerarTabuada');

      botao.addEventListener('click', () => {
        const num = Number(input.value);

        if (isNaN(num)) {
          resultado.textContent = "Por favor, insira um número válido";
          return;
        }

        let saida = "";
        for (let i = 1; i <= 10; i++) {
          saida += num + " x " + i + " = " + (num * i) + "\n";
        }
        resultado.textContent = saida;
      });
    } gerarTabuada();

    //exercício 10
    function contadorPalavras() {
      const texto = document.getElementById('textoContador');
      const resultado = document.getElementById('resultadoContador');
      const botao = document.getElementById('contarPalavras');

      botao.addEventListener('click', () => {
        const conteudo = texto.value.trim();
        const palavras = conteudo.split(' ');
        const filtradas = palavras.filter(palavra => palavra.length > 0);
        resultado.textContent = "Total de palavras: " + filtradas.length;
      });
    }; contadorPalavras();