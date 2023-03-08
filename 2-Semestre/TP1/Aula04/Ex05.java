
package com.mycompany.ex05;

import java.util.Scanner;

public class Ex05 {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Digite o ano do seu carro: ");
        int year = sc.nextInt(); 
         System.out.println("Digite o valor do seu carro: ");
        double value = sc.nextDouble();
        
        System.out.printf("Você irá pagar R$ %.2f para transferir", calcCarTransfer(year, value));
        
        sc.close();
        
    }
    public static double calcCarTransfer(int carYear, double carValue){
            if (carYear < 1990) {
                    return carValue * 0.010;
            } else {
                    return carValue * 0.015;
            }
    }
}
