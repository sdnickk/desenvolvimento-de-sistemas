package com.mycompany.conversornotas;

import java.util.Scanner;

public class ConversorNotas {

    public static void main(String[] args) {
        Scanner notas = new Scanner (System.in);
        
        System.out.print("Digite a nota (0 a 100): ");
        int nota = notas.nextInt();
        String conceito;
        
        if (nota >= 90){
            conceito = "A";
        } else if (nota >= 80){
            conceito = "B";
        } else if (nota >= 70) {
            conceito = "C";
        } else if (nota >= 60) {
            conceito = "D";
        } else {
            conceito = "F";
        }
        System.out.println("conceito: " + conceito);
    }
}
