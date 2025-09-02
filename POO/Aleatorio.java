package com.mycompany.aleatorio;


public class Aleatorio {

    public static void main(String[] args) {
        double aleatorio = Math.random();
        int inteiroAleatorio = (int) (Math.random() * 100);
        System.out.println("numero aleatorio " + aleatorio);
        System.out.println("numero inteiro aleatorio " + inteiroAleatorio);
    } 
}
