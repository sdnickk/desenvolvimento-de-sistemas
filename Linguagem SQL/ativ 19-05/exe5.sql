CREATE DATABASE RH;
USE RH;
CREATE TABLE Funcionarios (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 departamento VARCHAR(50) NOT NULL,
 salario DECIMAL(10, 2) NOT NULL
);
INSERT INTO Funcionarios (nome, departamento, salario) VALUES
('João', 'TI', 5000.00),
('Maria', 'RH', 3500.00),
('Carlos', 'TI', 4500.00),
('Ana', 'Vendas', 3000.00);
-- Consulta: Estatísticas salariais por departamento
SELECT
 departamento,
 AVG(salario) AS media_salarial,
 MAX(salario) AS maior_salario,
 MIN(salario) AS menor_salario
FROM Funcionarios
GROUP BY departamento;