package com.mycompany.ex03;

import java.util.Scanner;

public class Ex03 {
    
    public static boolean isTriangle(double x, double y, double z){
        if(x < z+y || y < x+z || z < x+y){
            return true; 
        }
        return false; 
    }
    
    public static String typeOfTriangle(double x, double y, double z){
        if( x == y && x == z){
            return "Equilatero"; 
        }
        else if((x == y && y !=z) || (y == z && z!=x) || (x == z && z!= y)){
            return "Isósceles"; 
        }
        else{
            return "Escaleno"; 
        }
    }

    public static void main(String[] args) {
        
        Scanner sc = new Scanner(System.in); 
        
        System.out.println("Digite o valor X: ");
        double x = sc.nextDouble();
        
        System.out.println("Digite o valor Y: ");
        double y = sc.nextDouble(); 
        
        System.out.println("Digite o valor Z: ");
        double z = sc.nextDouble(); 
        
        if(!isTriangle(x, y, z)){
            System.out.println("Valores não são triângulos");
        }
        else{
            System.out.println("Valores formam um triângulo " + typeOfTriangle(x, y, z));
        }
        
        sc.close();
    }
}
