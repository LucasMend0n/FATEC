
package com.mycompany.ex02;

import java.util.Scanner;

public class Ex02 {

    public static void main(String[] args) {
      
        Scanner sc = new Scanner(System.in);
        
        try {
            System.out.print("DIGITE O NOME DO FUNCIONARIO 1: ");
            String n1 = sc.next(); 
            
            System.out.print("DIGITE O SOBRENOME DO FUNCIONARIO 1:  ");
            String s1 = sc.next();
            
            System.out.print("DIGITE O NOME DO FUNCIONARIO 2: ");
            String n2 = sc.next(); 
            
            System.out.print("DIGITE O SOBRENOME DO FUNCIONARIO 2:  ");
            String s2 = sc.next();
            
            System.out.println("DIGITE O VALOR DO SALARIO DO EMPREGADO 1: ");
            double sal1 = sc.nextDouble(); 
            System.out.println("DIGITE O VALOR DO SALARIO DO EMPREGADO 2: ");
            double sal2 = sc.nextDouble();
            
            
            
            Empregado emp1 = new Empregado(n1,s1,sal1);
            Empregado emp2 = new Empregado(n2,s2,sal2);
            
            System.out.println("---------------");
            System.out.println("EMPREGADO 01");
            System.out.println("---------------");
            System.out.println("NOME: " + emp1.getPrimeiroNome());
            System.out.println("NOME: " + emp1.getPrimeiroNome());
            System.out.println("SALARIO SEM AUMENTO: " + emp1.getSalarioMensal());
            emp1.setSalarioMensal(sal1 + (sal1 *0.1));
            System.out.println("SALARIO COM 10% de AUMENTO: " + emp1.getSalarioMensal());
            System.out.println("---------------");
            
            System.out.println("---------------");
            System.out.println("EMPREGADO 02");
            System.out.println("---------------");
            System.out.println("NOME: " + emp2.getPrimeiroNome());
            System.out.println("NOME: " + emp2.getPrimeiroNome());
            System.out.println("SALARIO SEM AUMENTO: " + emp2.getSalarioMensal());
            emp2.setSalarioMensal(sal2 + (sal2 *0.1));
            System.out.println("SALARIO COM 10% de AUMENTO: " + emp2.getSalarioMensal());
            System.out.println("---------------");
            

        } catch (Exception e) {
            System.out.println("ERRO AO INSERIR INFORMAÇÕES");
        }
        finally{
            sc.close();

        }
    }
}
