package com.mycompany.prova_reajuste;

import java.util.Scanner;

public class Prova_reajuste {

    public static void main(String[] args) {
        Scanner reajuste = new Scanner(System.in);
        int opcao = 0;
        
        System.out.print("digite seu salario atual: ");
        double salario = reajuste.nextInt();
        if(salario > 0){
            
        while (opcao != 4) {
            System.out.println("1- reajuste de 10%");
            System.out.println("2- reajuste de 20%");
            System.out.println("3- reajuste personalizado");
            System.out.println("4- sair");
            System.out.print("opcao: ");
            opcao = reajuste.nextInt();
            if (opcao >= 1 && opcao <4){
            switch(opcao) {
                case 1:
                   salario =  salario + (salario * 0.1);
                    System.out.println("seu novo salario e: "+ salario);
                    break;
                    
                case 2:
                    salario = salario + (salario * 0.2);
                    System.out.println("seu novo salario e: "+ salario);
                    break;
                
                case 3 :
                    System.out.print("digite o valor do reajuste em porcento que deseja adicionar ao salario atual: ");
                    double valor_reajuste = reajuste.nextInt();
                    valor_reajuste = valor_reajuste / 100;
                    salario = salario + (salario * valor_reajuste);
                    System.out.println("seu novo salario e: " + salario);
                    break;
                    
            } 
        } else if (opcao == 4){
                    System.out.println("saindo do programa...");
        } else {
            System.out.println("opcao invalida! Por favor, digite uma opcao valida");
        }
        } 
    } else {
            System.out.println("valor de salario invalido. Encerrando programa...");
        }
  }
}