package com.mycompany.multiplofor;

import java.util.Scanner;

public class MultiploFor {

    public static void main(String[] args) {
        Scanner mult = new Scanner (System.in);
        
        System.out.print("digite um numero para descobrir quantos multiplos entre 1 e 100 ele tem: ");
        int num = mult.nextInt();
        int cont = 0;
        for(int i = 1; i <= 100; i++) {
            if(i % num == 0){
                cont++;
            }
        }
        System.out.print("multiplos de "+ num +": " + cont);
    }
}
