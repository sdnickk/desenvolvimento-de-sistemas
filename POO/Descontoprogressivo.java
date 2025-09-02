package com.mycompany.descontoprogressivo;

import java.util.Scanner;


public class Descontoprogressivo {

    public static void main(String[] args) {
        Scanner desc = new Scanner (System.in);
        
        System.out.print("digite o valor da compra: R$ ");
        double valorCompra = desc.nextDouble();
        double desconto;
        
        if (valorCompra >= 500) {
            desconto = 0.20;
        } else if (valorCompra >= 200){
            desconto = 0.10;
        } else {
            desconto = 0.05;
        } 
        double valorFinal = valorCompra - (valorCompra * desconto);
        System.out.println("valor final com desconto: R$ " + valorFinal);
    }
}
