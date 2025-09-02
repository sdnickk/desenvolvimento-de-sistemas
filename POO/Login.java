package com.mycompany.login;

import java.util.Scanner;

public class Login {

    public static void main(String[] args) {
        Scanner login = new Scanner (System.in);
        
        String usuarioCorreto = "admin";
        String senhaCorreta = "1234";
        
        System.out.print("digite seu usuario: ");
        String usuario = login.next();
        
        System.out.print("digite sua senha: ");
        String senha = login.next();
        
        if(usuario.equals(usuarioCorreto) && senha.equals(senhaCorreta)) {
            System.out.println("login bem-sucedido!");
        } else {
            System.out.println("usuario ou senha incorretos.");
        }
    }
}
