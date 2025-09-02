/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.parouimpar;

import java.util.Scanner;

public class ParOuImpar {

    public static void main(String[] args) {
      Scanner verificar =  new Scanner(System.in);
      
      System.out.println("Digite um numero: ");
      int numero = verificar.nextInt ();
      
      if (numero%2 ==0){
         System.out.println("O numero" +numero+ "e par");
      
      } else{
         System.out.println("O numero" +numero+ "e impar");
          }
      }
}
