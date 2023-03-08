package com.mycompany.ex04;

import java.util.Scanner;

public class Ex04 {
      public static Scanner sc = new Scanner(System.in);

    public static void idealWheight(double heigth, String sexo){
        
       double idealWheight = 0; 
        switch (sexo) {
            case "homem":
                idealWheight = ((72.7 * heigth) - 58);
                System.out.println("Seu peso ideal é: " + idealWheight);
                break;
            case "mulher":
                idealWheight = ((62.1 * heigth) - 44.7);
                System.out.println("Seu peso ideal é: " + idealWheight);
        }
        
        sc.close();
    }
    
    public static void main(String[] args) {
        
        System.out.println("Digite sua altura: ");
        double heigth = sc.nextDouble(); 
        System.out.println("Digite seu sexo: ");
        String sex = sc.next();
        
        idealWheight(heigth, sex);
        
    }
}
