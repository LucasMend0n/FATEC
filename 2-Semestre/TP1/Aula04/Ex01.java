
package com.mycompany.ex01;

import java.util.Scanner;

public class Ex01 {
    
    public static double valorAPagar(String name, int quantity, double price){
        double finalValue = 0; 
        if(quantity <= 10){
             finalValue = (quantity * price); 
             return finalValue; 
        }
        else if(quantity > 10 && quantity <20){
             finalValue = (quantity * price) * 0.9; 
             return finalValue; 
        }
        else if(quantity > 20 && quantity <50){
            
            finalValue = (quantity * price) * 0.8; 
             return finalValue; 
        }
        else{
            finalValue = (quantity * price) * 0.75; 
            return finalValue;
        }
        
       
    }

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite o nome do prouto: ");
        String nome = sc.nextLine(); 
        
        System.out.println("Digite a quantidade do produto comprado: ");
        int qtd = sc.nextInt(); 
        
        System.out.println("Digite preço do produto comprado: ");
        double preço = sc.nextDouble(); 
        
        double subtotal = valorAPagar(nome, qtd, preço); 
        
        System.out.printf("O valor a pagar é: %.2f", subtotal);
        
        
        
        sc.close(); 
        
        
    }
}
