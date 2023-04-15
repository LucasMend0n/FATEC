package entities;
public class Conta {
    
    private int id; 
    private Double balance; 
    private String owner;

    public Conta() {
    }

    public Conta(int id, Double balance, String owner) {
        this.id = id;
        this.balance = balance;
        this.owner = owner;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Double getBalance() {
        return balance;
    }

    public void setBalance(Double balance) {
        this.balance = balance;
    }

    public String getOwner() {
        return owner;
    }

    public void setOwner(String owner) {
        this.owner = owner;
    }
    
    public double deposita(double amount){
        return balance += amount;
    }
    public double saca(double amount){
        return balance -= amount; 
    }
    
    public void taxaRendimento(double taxa){
        this.balance += (this.balance * taxa/100);      
    }
    
    
    
    
    
    
    
}
