CREATE TABLE Veiculos(
    Placa CHAR (7), 
    Modelo VARCHAR (20), 
    Fabricante VARCHAR (20),
    Ano INT,
    Cor VARCHAR(20), 
    Combustivel VARCHAR (20), 
    Preco NUMERIC (10,2)
    PRIMARY KEY (Placa) 
 ); 

 INSERT INTO Veiculos VALUES 
('NCI0584', 'Uno', 'Fiat', 1997, 'Azul', 'Gasolina', 5000.00), 
('ABC1234', 'Gol', 'Volkswagen', 2018, 'Preta', 'Gasolina', 42000.00),
('XYZ5678', 'Corolla', 'Toyota', 2020, 'Prata', 'Etanol', 80000.00), 
('DEF4321', 'Biz', 'Chevrolet', 2021, 'Vermelha', 'Gasolina', 12000.00), 
('MNO7890', 'Palio', 'Fiat', 2007, 'Branca', 'Flex', 25000.00),
('QRS2468', 'Titan', 'Chevrolet', 2022, 'Preta', 'Gasolina', 16000.00), 
('GHI7890', 'Uno', 'Fiat', 1984, 'Vermelha', 'Etanol', 30000.00),
('LKM4321', 'F', 'Yamaha', 2017, 'Azul', 'Gasolina', 18000.00),
('NOP1234', 'Onix', 'Chevrolet', 2022, 'Branca', 'Etanol', 45000.00), 
('RST5678', 'Uno', 'Fiat', 2014, 'Prata', 'Flex', 20000.00),
('PQR9012', 'Ka', 'Ford', 2021, 'Vermelha', 'Flex', 60000.00);

DELETE FROM Veiculos WHERE Modelo LIKE 'Strada'; 

SELECT * FROM Veiculos WHERE Modelo LIKE 'F%'; 

SELECT * FROM Veiculos WHERE Ano >= 2000 AND Ano <= 2008; 

SELECT * FROM Veiculos WHERE Combustivel  LIKE 'Flex'; 

SELECT * FROM Veiculos WHERE Fabricante LIKE 'Chevrolet' AND Ano >= 2001; 

SELECT CAST(AVG(Preco) AS decimal (10,2)) FROM Veiculos; 

SELECT MAX(Preco) AS MaiorPreço FROM Veiculos; 

SELECT MIN(Preco) AS MenorPreco FROM Veiculos; 

UPDATE Veiculos SET Preco = (Preco +(Preco * 0.1)) WHERE Fabricante LIKE 'Fiat'; 
SELECT * FROM Veiculos WHERE Fabricante LIKE 'Fiat'; 

SELECT COUNT(PLACA) as Quantidade_Prata FROM Veiculos WHERE Cor LIKE 'Prata'; 

SELECT CAST(SUM(Preco) AS decimal (10,2)) AS Soma_Preços  FROM Veiculos; 

DELETE FROM Veiculos WHERE Ano < 1985; 

SELECT * FROM Veiculos WHERE Fabricante LIKE ''

SELECT * FROM VEICULOS
WHERE Fabricante LIKE 'Ford'
OR Fabricante LIKE 'Chevrolet'
OR Fabricante LIKE 'Toyota';


SELECT DISTINCT(Fabricante) FROM VEICULOS;