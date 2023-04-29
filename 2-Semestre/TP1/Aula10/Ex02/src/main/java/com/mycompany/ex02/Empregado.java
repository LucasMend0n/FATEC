package com.mycompany.ex02;
public class Empregado {
    
    private String primeiroNome; 
    private String sobreNome; 
    private double salarioMensal; 

    public Empregado(String primeiroNome, String sobreNome, double salarioMensal) {
        this.primeiroNome = primeiroNome;
        this.sobreNome = sobreNome;
        this.salarioMensal = salarioMensal > 0 ? salarioMensal : 0;
    }

    public Empregado() {
    }

    public String getPrimeiroNome() {
        return primeiroNome;
    }

    public void setPrimeiroNome(String primeiroNome) {
        this.primeiroNome = primeiroNome;
    }

    public String getSobreNome() {
        return sobreNome;
    }

    public void setSobreNome(String sobreNome) {
        this.sobreNome = sobreNome;
    }

    public double getSalarioMensal() {
        return salarioMensal;
    }

    public void setSalarioMensal(double salarioMensal) {
        this.salarioMensal = salarioMensal;
    }
    
    
    
}
