package com.mycompany.adivinhacao;

import java.util.Scanner;

public class Adivinhacao {

    public static void main(String[] args) {
        Scanner adivinha = new Scanner (System.in);
        int numeroSecreto = (int) (Math.random() * 100) + 1;
        int tentativa = 0;
        int palpite;
        boolean acertou = false;
        
        System.out.println("adivinhe o numero entre 1 e 100!");
        
        while(!acertou) {
            tentativa++;
            System.out.println("tentativa"  + tentativa + ": ");
            palpite = adivinha.nextInt();
            
            int diferenca = Math.abs(numeroSecreto - palpite);
            
            if(palpite == numeroSecreto){
                System.out.println("Parabens! voce acertou em " + tentativa + " tentativas");
                acertou = true;
            } else if (diferenca >= 50){
                System.out.println("frio! tente novamente");
            } else if (diferenca >=  20){
                System.out.println("morno... esta chegando");
            } else if (diferenca >= 10){
                System.out.println("quente!");
            }else {
                System.out.println("Fervendo!");
            }
        }
    }
}
