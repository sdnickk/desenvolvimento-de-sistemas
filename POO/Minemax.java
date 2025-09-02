package com.mycompany.minemax;

import java.util.Scanner;


public class Minemax {

    public static void main(String[] args) {
        Scanner minemax = new Scanner (System.in);
        int a, b;
        
        System.out.print("digite um numero: ");
        a = minemax.nextInt();
        
        System.out.print("digite um segundo numero: ");
        b = minemax.nextInt();

        
        System.out.println("maior numero: " + Math.max(a, b));
        System.out.println("menor numero: " + Math.min(a, b));
    }
}
