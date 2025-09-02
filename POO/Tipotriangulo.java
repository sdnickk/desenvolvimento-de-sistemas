package com.mycompany.tipotriangulo;
import java.util.Scanner;


public class Tipotriangulo {

    public static void main(String[] args) {
        Scanner triangulo = new Scanner (System.in);
        
        System.out.println("digite o primeiro lado: ");
        int lado1 = triangulo.nextInt();
        
        System.out.println("digite o segundo lado: ");
        int lado2 = triangulo.nextInt();
        
        System.out.println("digite o terceiro lado: ");
        int lado3 = triangulo.nextInt();
        
        if (lado1 == lado2 && lado2 == lado3){
            System.out.println("o triangulo e equilatero");
        } else if (lado1 == lado2 || lado2 == lado3 || lado1 == lado3){
            System.out.println("o triangulo e isosceles");
        } else {
            System.out.println("o triangulo e escaleno");
        }
    }
}
