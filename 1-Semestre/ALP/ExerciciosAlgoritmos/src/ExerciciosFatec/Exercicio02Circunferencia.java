package ExerciciosFatec;

import java.util.Scanner;

public class Exercicio02Circunferencia {

    public static void main(String[] args) {
        double radius1;
        double radius2;
        double area1;
        double area2;
        double biggerThat;
        final double pi = 3.14;

        Scanner read = new Scanner(System.in);
        System.out.println("CIRCUFERÊNCIA");
        System.out.println("Digite o raio do circulo 1: ");
        radius1 = read.nextDouble();

        System.out.println("Digite o raio do circulo 2: ");
        radius2 = read.nextDouble();

        area1 = pi * Math.pow(radius1,2.0);
        area2 = pi * Math.pow(radius2, 2.0);

        System.out.println("A área da C1 é em m²: " + area1);
        System.out.println("A área da c2 é em m²: " + area2);

        if (area1 == area2){
            System.out.println("As áreas são iguais");
        } else if (area1>area2) {
            biggerThat = area1/area2;
            System.out.println("A area da circ 1 é maior que de circ2 " + biggerThat + " vezes");
        }else{
            biggerThat = area2/area1;
            System.out.println("A area da circ 2 é maior que de circ1 " + biggerThat + " vezes");
        }


    }
}
