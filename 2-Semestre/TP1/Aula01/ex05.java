package exercicios;

import java.util.Scanner;

public class ex05 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite o raio da lata de óleo:  ");
        double raio = sc.nextDouble(); 
        
        System.out.println("Digite a altura da lata de óleo: ");
        double altura = sc.nextDouble(); 
        
        double volume = 3.14159 * Math.pow(raio, 2); 
        
        System.out.printf("O valor do volume da lata de óleo é: %.2f", volume);
        sc.close();
        
    }
    
}
