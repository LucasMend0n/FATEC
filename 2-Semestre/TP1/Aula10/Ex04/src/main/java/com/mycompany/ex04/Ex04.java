package com.mycompany.ex04;

import java.util.Scanner;

public class Ex04 {

    public static void main(String[] args) {
         Scanner sc = new Scanner(System.in);

        System.out.println("---------------");
        System.out.println("DATA");
        System.out.println("---------------");
        System.out.println("DIGITE o DIA: ");
        int day = sc.nextInt(); 
        System.out.println("DIGITE O MES: ");
        int month = sc.nextInt();
        System.out.println("DIGITE O ANO: ");
        int year = sc.nextInt();
        
        Data date = new Data(day, month, year);
        
        System.out.println(date.toString());
        
        sc.close();
    }
}
