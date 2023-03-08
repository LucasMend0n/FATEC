
package exercicios;

import java.util.Scanner;

public class ex04 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in); 
        
        System.out.println("Digite a temperatura em C°: ");
        double celsius = sc.nextDouble(); 
        
        double farenheit = (9.0 * celsius + 160.0)/5;
        
        System.out.println("A temperatura em F° é: " + farenheit);
        
        sc.close();
        
    }
    
}
