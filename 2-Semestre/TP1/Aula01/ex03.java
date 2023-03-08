package exercicios;

import java.util.Scanner;

public class ex03 {
    
    public static void main(String[] args) {
    Scanner sc = new Scanner(System.in);
    
        System.out.println("Digite o valor 1: ");
        float v1 = sc.nextFloat(); 
        
        System.out.println("Digite o valor 2: ");
        float v2 = sc.nextFloat(); 
        
        float media = (v1 + v2)/2; 
        
        System.out.println("A media dos valores é: " + media);
    
    sc.close(); 

    }
    
}
