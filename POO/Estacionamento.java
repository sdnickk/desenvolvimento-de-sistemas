package com.mycompany.estacionamento;

import java.util.Scanner;

public class Estacionamento {

    public static void main(String[] args) {
        Scanner tempo = new Scanner(System.in);
        
        System.out.print("digite o tempo do estacionamento (em horas): ");
        int horas = tempo.nextInt();
        int preco;
        
        if (horas <= 1) {
            preco = 5;
        } else if (horas <= 3) {
            preco = 10;
        } else if (horas <= 6) {
            preco = 15;
        } else {
            preco = 20;
        }
        
        System.out.println("valor a pagar: R$ " + preco);
    }
}
