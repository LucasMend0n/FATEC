-- Lucas Mendonça da Silva Junior)
CREATE TABLE Produtos (
CodProd INT,
Unidade CHAR(4),
Descricao VARCHAR(20),
Valor_unit NUMERIC(9,2),
DataCad DATETIME
);
INSERT INTO Produtos VALUES
(1, 'Lata', 'Massa corrida', 27.50, '2018100')