package com.mycompany.ex06;

import java.util.Scanner;

public class Ex06 {

    public static int calcSumMultTable(int value) {
        int newValue = 0;
        for (int i = 1; i < 11; i++) {
            newValue += i * value;
        }

        return newValue;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Inisira o valor: ");
        int value = sc.nextInt(); 
        
        System.out.println("A soma dos valores é: " + calcSumMultTable(value));
        
        sc.close();
    }
}
