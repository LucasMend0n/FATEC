package com.mycompany.ex02;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JFrame;
import java.awt.Dimension;
import java.awt.Toolkit;

public class Telefone extends JFrame{    
    
        
    private JPanel panel;
    private JTextField textField;

    public Telefone() {
        panel = new JPanel();
        add(panel);

        textField = new JTextField(10);
        panel.add(textField);

        adicionarBotoes();
    }

    private void adicionarBotoes() {
        String[] labels = {"1", "2", "3", "4", "5", "6", "7", "8", "9", "*", "0", "#"};

        for (String label : labels) {
            JButton button = new JButton(label);
            button.addActionListener(new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent e) {
                    String text = textField.getText();
                    textField.setText(text + label);
                }
            });
            panel.add(button);
        }

        JButton buttonLimpar = new JButton("Limpar");
        buttonLimpar.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                textField.setText("");
            }
        });
        panel.add(buttonLimpar);
    }
}
