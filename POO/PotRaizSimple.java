package com.mycompany.potraizsimple;

import java.util.Scanner;

public class PotRaizSimple {

    public static void main(String[] args) {
        Scanner raizPot = new Scanner (System.in);
        
        double base, expoente, raiz;
        
        System.out.print("digite um numero para ser a base de um potenciacao: ");
        base = raizPot.nextDouble();
        System.out.print("digite um numero para ser o expoente de um potenciacao: ");
        expoente = raizPot.nextDouble();
        System.out.print("digite um numero para descobrir a raiz quadrada dele: ");
        raiz = raizPot.nextDouble();
        
        System.out.println(base + " elevado a " + expoente + ": " + Math.pow(base, expoente));
        System.out.println("raiz quadrada de " + raiz + ": " + Math.sqrt(raiz));
    }
}
