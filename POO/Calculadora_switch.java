package com.mycompany.calculadora_switch;

import java.util.Scanner;

public class Calculadora_switch {

    public static void main(String[] args) {
        Scanner escolher = new Scanner (System.in);
        int opcao = 0;
        
        while (opcao != 5){
            System.out.println("\n calculadora");
            System.out.println("1 - soma");
            System.out.println("2 - subtracao");
            System.out.println("3 - multiplicacao");
            System.out.println("4 - divisao");
            System.out.println("5 - sair");
            System.out.print("escolha uma operacao: ");
            opcao = escolher.nextInt();
            
            if (opcao >= 1 && opcao <=4 ){
                System.out.print("digite o primeiro numero: ");
                double num1 = escolher.nextDouble();
                
                System.out.print("digite o segundo numero: ");
                double num2 = escolher.nextDouble();
                
                switch(opcao) {
                    case 1:
                        System.out.println("resultado: " + (num1 + num2));
                        break;
                        
                    case 2:
                        System.out.println("resultado: " + (num1 - num2));
                        break;
                    
                    case 3:
                        System.out.println("resultado: " + (num1 * num2));
                        break;
                        
                    case 4:
                        if(num2 != 0){
                        System.out.println("resultado: " + (num1 / num2));
                    } else {
                            System.out.println("erro: divisao por zero");
                        }
                        break;
                }
            }else if (opcao == 5) {
                System.out.println(" saindo da calculadora. que os codigos estejam com voce!");
            } else {
                System.out.println("opcao invalida. tente novamente.");
            }
        }
    }
}
