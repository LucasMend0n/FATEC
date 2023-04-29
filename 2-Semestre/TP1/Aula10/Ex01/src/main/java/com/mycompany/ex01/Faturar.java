package com.mycompany.ex01;
public class Faturar {
    
    private int id; 
    private String description; 
    private int quantidade;
    private double price;
    
    public Faturar(){
        
    }

    public Faturar(int id, String description, int quantidade, double price) {
        
        this.quantidade = quantidade > 0 ? quantidade : 0;
        this.price = price > 0 ? price : 0; 
        this.id = id;
        this.description = description;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(int quantidade) {
        this.quantidade = quantidade;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }
    
    public double getFaturarTotal(){
        return quantidade * price; 
    }
    
    
}
