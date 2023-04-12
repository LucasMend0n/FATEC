-- Lucas Mendonça da Silva Junior

CREATE TABLE PRODUTOS 
(CodProd int, 
Unidade CHAR(4), 
Descricao varchar (20),
Valor_unit numeric(9,2), 
Data_cad datetime);

insert into PRODUTOS VALUES 
(2, 'Lata', 'Tinta Branca', 160.00, '20230411'),
(3, 'UN', 'Lixa Fina', 1.50, '20230411'),
(4, 'UN', 'Lixa Grossa', 1.20, '20230411')
;



