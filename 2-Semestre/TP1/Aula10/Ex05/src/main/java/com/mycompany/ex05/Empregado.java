package com.mycompany.ex05;
public class Empregado extends Pessoa {
    
    private double salario;

    public Empregado() {
    }

    public Empregado(double salario) {
        this.salario = salario;
    }

    public Empregado(double salario, String nome, int idade, double altura, String sexo) {
        super(nome, idade, altura, sexo);
        this.salario = salario;
    }
    

    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }
    
    public double obterLucros(){
        return salario; 
    }
    
}
