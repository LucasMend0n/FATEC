-- Lucas Mendonça da Silva Junior
CREATE TABLE Funcionarios (
FunCodigo INT,
FunNome VARCHAR(40),
FunCargo VARCHAR(30)
);
ALTER TABLE Funcionarios
ADD FunIdade INT;
ALTER TABLE Funcionarios
DROP COLUMN FunIdade;
ALTER TABLE Funcionarios
ALTER COLUMN FunCodigo CHAR(2);
DROP TABLE Funcionarios