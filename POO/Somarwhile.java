package com.mycompany.somarwhile;

import java.util.Scanner;

public class Somarwhile {

    public static void main(String[] args) {
        Scanner num = new Scanner (System.in);
        int soma = 0;
        int numero;
        
        System.out.println("digite numeros postivos para somar (digite um numero negativo para sair)");
        
        while (true) {
            System.out.print("digite um numero: ");
            numero = num.nextInt();
            
            if (numero < 0){
                System.out.println("numero negativo detectado! Encerrando...");
                break;
            }
            soma += numero;
            System.out.println("soma atual: " + soma);
        }
        System.out.println("soma final: " + soma);
    }
}
