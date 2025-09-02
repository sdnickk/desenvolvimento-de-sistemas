package com.mycompany.login2;

import java.util.Scanner;


public class Login2 {

    public static void main(String[] args) {
       Scanner login = new Scanner (System.in);
       String usuarioCorreto = "admin";
       String senhaCorreta = "1234";
       int tentativas = 3;
       
       while (tentativas > 0) {
           System.out.print("usuario: ");
           String usuario = login.nextLine();
           
           System.out.print("senha: ");
           String senha = login.nextLine();
           
           if(usuario.equals(usuarioCorreto) && senha.equals(senhaCorreta)) {
               System.out.println("Login bem-sucedido");
               break;
           } else {
               tentativas --;
               System.out.println("usuario ou senha incorretos. Tentativas restantes: " + tentativas);
           }
       }
       if (tentativas == 0 ){
           System.out.println("numero maximo de tentativas excedido. Acesso bloqueado.");
       }
    }
}
