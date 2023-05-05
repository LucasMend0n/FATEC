package com.mycompany.ex05;

import java.util.Scanner;

public class Ex05 {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in); 
        System.out.println("---------------");
        System.out.println("FUNCIONARIO");
        System.out.println("---------------");
        System.out.println("DIGITE o NOME DO FUNCIONARIO: ");
        String name = sc.next(); 
        System.out.println("Digite a IDADE DO FUNCIONARIO: ");
        int idade = sc.nextInt();
        System.out.println("DIGITE A ALTURA DO FUNCIONARIO:  ");
        double  altura = sc.nextDouble();
        System.out.println("DIGITE O SEXO DO FUNCIONARIO:  ");
        String sexo = sc.next();
        System.out.println("ATRIBUA UM SALARIO PARA O FUNCIONARIO: ");
        double salario = sc.nextDouble(); 
        
        Empregado juninho = new Empregado(salario, name, idade, altura, sexo); 
       
        System.out.println("---------------");
        System.out.println("EXTRATO FUNCIONARIO");
        System.out.println("---------------");
        System.out.println("NOME: " + juninho.getNome());
        System.out.println("IDADE: " + juninho.getIdade());
        System.out.println("ALTURA: " + juninho.getAltura());
        System.out.println("SEXO: " + juninho.getSexo());
        System.out.println("SALARIO: " + juninho.getSalario());
        System.out.println("---------------");
        sc.close();
    }
}
