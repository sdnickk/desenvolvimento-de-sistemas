package com.mycompany.arredondavalor;

import java.util.Scanner;

public class ArredondaValor {

    public static void main(String[] args) {
        Scanner arredonda = new Scanner (System.in);
        System.out.print("digite um valor: ");
        double valor = arredonda.nextDouble();
        
        System.out.println("arredonda normal: " + Math.round(valor));
        System.out.println("arredonda pra cima: " + Math.ceil(valor));
        System.out.println("arredonda pra baixo: " + Math.floor(valor));
    }
}
