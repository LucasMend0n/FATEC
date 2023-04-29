
package com.mycompany.ex01;

import java.util.Scanner;

public class Ex01 {

  public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in);
        
        try {
            System.out.println("---------------");
            System.out.println("Digite o número do item a ser faturado: ");
            int id = sc.nextInt(); 
            
            System.out.println("Digite a quantidade do item: ");
            int qtd = sc.nextInt();
            
            System.out.println("Digite o valor do item: ");
            double preco = sc.nextDouble(); 
            
            System.out.println("Digite a descrição do Item: ");
            String desc = sc.next(); 
            
            System.out.println("---------------");
            
            Faturar fatura = new Faturar(id, desc, qtd,preco);
            
            
            System.out.println("FATURA");
            System.out.println("---------------");
            System.out.println("ID: " + fatura.getId());
            System.out.println("QUANTIDADE: " + fatura.getQuantidade());
            System.out.println("Preço unitário: " + fatura.getPrice());
            System.out.println("Descrição: " + fatura.getDescription());
            System.out.println("SUBTOTAL: " + fatura.getFaturarTotal());
            System.out.println("---------------");

        } catch (Exception e) {
            System.out.println("ERRO AO INSERIR INFORMAÇÕES");
        }
        finally{
            sc.close();

        }
        

        
        
        
    }
}
