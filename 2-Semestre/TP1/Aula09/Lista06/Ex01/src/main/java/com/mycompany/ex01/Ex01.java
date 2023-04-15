

package com.mycompany.ex01;

import entities.Conta;
import java.util.Scanner;

public class Ex01 {

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in); 
         String titular = "";
         Integer id = null;
         Double amount = null; 
         Double taxa = null;
        
        try {
            System.out.println("DIGITE O TITULAR DA CONTA: ");
            titular = sc.nextLine(); 
            System.out.println("DIGITE O NÚMERO DA CONTA: ");
            id = Integer.parseInt(sc.nextLine()); 
            System.out.println("DIGITE O VALOR INICIAL DA CONTA: ");
            amount = Double.parseDouble(sc.nextLine()); 
        } catch (Exception e) {
            System.out.println("ERRO AO INSERIR INFORMAÇÕES");
        }
        
        Conta acc = new Conta(id, amount, titular); 
        
        int option = 60;
        
        while(option !=0){
            System.out.println("-----------------------------");
            System.out.println("BANCO DAORA");
            System.out.println("Conta: " + acc.getId());
            System.out.println("Titular: " + acc.getOwner());
            System.out.println("Saldo inicial:" + acc.getBalance());
            System.out.println("-----------------------------");
            System.out.println("1) DEPÓSITO");
            System.out.println("2) SAQUE");
            System.out.println("3) SIMULAR RENDIMENTO A PARTIR DA TAXA");
            System.out.println("0) ENCERRAR PROGRAMA");
            option = Integer.parseInt(sc.nextLine()); 
            
            switch(option){
                case 1:
                    System.out.println("Digite o valor a ser depositado: ");
                    amount = Double.parseDouble(sc.nextLine());
                    acc.deposita(amount); 
                    System.out.println("Saldo atual: " + acc.getBalance());
                    break;
                case 2:
                    System.out.println("Digite o valor a ser sacado: ");
                    amount = Double.parseDouble(sc.nextLine());
                    acc.saca(amount); 
                    System.out.printf("Saldo atual: " + acc.getBalance());
                    break;
                case 3: 
                    System.out.println("Digite o valor da taxa de rendimento: ");
                    amount = Double.parseDouble(sc.nextLine());
                    acc.taxaRendimento(amount); 
                    System.out.println("Saldo simulado com rendimento: " + acc.getBalance());
                    break;
            }            
        }
        System.out.println("FIM DO PROGRAMA");
        sc.close();
        
    }
}
