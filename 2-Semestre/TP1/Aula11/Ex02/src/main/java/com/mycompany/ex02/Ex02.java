package com.mycompany.ex02;

import javax.swing.JFrame;

public class Ex02 {

    public static void main(String[] args) {
        
        Telefone telefone = new Telefone();
        telefone.setSize(170, 225);        
        telefone.setResizable(false);
        telefone.setLocationRelativeTo(null);
        telefone.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        telefone.setVisible(true);
        
    }
}
