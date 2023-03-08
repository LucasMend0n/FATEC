package com.mycompany.ex02;

import java.util.Scanner;

public class Ex02 {
    
    public static double currentBalance(int accNumber, double balance, double debit, double credit){
        double currentBalance = balance - debit + credit; 
        return currentBalance;
    }

 public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite o número da conta: ");
        int numeroConta = sc.nextInt(); 
        
        System.out.println("Digite seu saldo: ");
        double saldo = sc.nextInt(); 
        
        System.out.println("Digite o quanto você deve: ");
        double debit = sc.nextDouble();
        
        System.out.println("Digite o quanto você tem de crédito: ");
        double credit = sc.nextDouble(); 
        
        double totalBalance = currentBalance(numeroConta, saldo, debit, credit); 
        
        System.out.println("Número da conta: " + numeroConta);
        System.out.printf("O saldo de ua conta é: %.2f \n",totalBalance);
        
        if(totalBalance >= 0)
        {
            System.out.println("SALDO POSITIVO!");
        }
        else
        {
            System.out.println("SALDO NEGATIVO!");
        }
        
        
        
        sc.close(); 
        
        
    }
}


