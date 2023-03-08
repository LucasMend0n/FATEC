package exercicios;

import java.util.Scanner;

public class ex01 {
    
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in); 
        
        String name; 
        double unitValue;
        
        System.out.println("Enter the product name: ");
        name = sc.nextLine(); 
        
        System.out.println("Enter the product value: ");
        unitValue = sc.nextDouble(); 
        
        double discountedValue = unitValue - (unitValue * 0.09);
        System.out.println("The product's " + name + " value is : " + discountedValue);
        
        sc.close();
        
    }
    
}
