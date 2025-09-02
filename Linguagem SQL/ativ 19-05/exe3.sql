CREATE DATABASE Empresa;
USE Empresa;
CREATE TABLE Funcionarios (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 departamento VARCHAR(50) NOT NULL
);
INSERT INTO Funcionarios (nome, departamento) VALUES
('João', 'TI'), ('Maria', 'RH'), ('Carlos', 'TI'), ('Ana', 'Vendas'),
('Pedro', 'TI');
-- Consulta: Departamentos com mais de 2 funcionários
SELECT departamento, COUNT(*) AS qtd_funcionarios
FROM Funcionarios
GROUP BY departamento
HAVING COUNT(*) > 2;