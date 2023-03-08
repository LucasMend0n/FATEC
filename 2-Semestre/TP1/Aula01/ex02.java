
package exercicios;

import java.util.Scanner;

public class ex02 {
    
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        final double salarioMinimo = 1302.00;
        
        System.out.println("Digite quanto você ganha: ");
        double salario = sc.nextDouble(); 
        
        
        double qtdSalarios = salario / salarioMinimo; 
        
        System.out.printf("Você ganha: %.2f salários mínimos!",qtdSalarios);
        
        
        
        sc.close();
        
        
        
    }
    
}
