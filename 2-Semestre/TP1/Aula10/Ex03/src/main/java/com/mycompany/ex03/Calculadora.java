package com.mycompany.ex03;

public class Calculadora {

    private double n1;
    private double n2;
    private char operation;

    public Calculadora(double n1, double n2, char operation) {
        this.n1 = n1;
        this.n2 = n2;
        this.operation = operation;
    }

    public Calculadora() {
    }

    public double getN1() {
        return n1;
    }

    public void setN1(double n1) {
        this.n1 = n1;
    }

    public double getN2() {
        return n2;
    }

    public void setN2(double n2) {
        this.n2 = n2;
    }

    public char getOperation() {
        return operation;
    }

    public void setOperation(char operation) {
        this.operation = operation;
    }

    public void calcular() {
        switch (operation) {
            case '+':
                System.out.println(n1 + n2);
                break;
            case '-':
                System.out.println(n1 - n2);
                break;
            case '*':
                System.out.println(n1 * n2);
                break;
            case '/':
                if (n2 == 0) {
                    System.out.println("ERRO, IMPOSSIVEL DIVIDIR POR 0");
                    break;
                } else {
                    System.out.println(n1 / n2);
                    break;
                }

        }

    }

}
