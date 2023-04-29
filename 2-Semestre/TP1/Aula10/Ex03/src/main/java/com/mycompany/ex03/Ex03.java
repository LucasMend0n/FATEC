package com.mycompany.ex03;

import java.util.Scanner;

public class Ex03 {

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.println("---------------");
        System.out.println("CALCULADORA");
        System.out.println("---------------");
        System.out.println("Digite o número 1: ");
        double n1 = sc.nextDouble(); 
        System.out.println("Digite o número 2: ");
        double n2 = sc.nextDouble();
        System.out.println("Digite a operação: ");
        char operation = sc.next().charAt(0);
        
        Calculadora calc = new Calculadora(n1, n2, operation);
        
        calc.calcular(); 
        
        sc.close();

    }
}
