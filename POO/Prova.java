package com.mycompany.prova;

import java.util.Scanner;

public class Prova {

    public static void main(String[] args) {
        Scanner missao = new Scanner (System.in);
        int numeros = 0;
        int m3 = 0;
        int m5 = 0;
        int m3e5 = 0;
        int m0 = 0;
        
        while (numeros < 10) {
            numeros ++;
            System.out.print("digite um numero para verificar se e multiplo de 3 ou 5: ");
            int numero = missao.nextInt();
            
        
        if (numero % 3 == 0 && numero % 5 == 0){
            m3e5++;
            //System.out.println("o numero e multiplo de 3 e 5! \n");
        } else if (numero % 5 == 0){
            m5++;
            //System.out.println("o numero e multiplo de 5! \n");
        } else if (numero % 3 == 0 ){
            m3++;
            //System.out.println("o numero e multiplo de 3! \n");
        } else{
            m0++;
           // System.out.println("o numero nao e multiplo de 3 nem 5 \n");
        }
        }
        System.out.println("numeros que sao multiplos de 3: " + m3);
        System.out.println("numeros que sao multiplos de 5: " + m5);
        System.out.println("numeros que sao multiplos de 3 e 5: " + m3e5);
        System.out.println("numeros que nao sao multiplos de 3 nem 5: " + m0);
        
    }
}
