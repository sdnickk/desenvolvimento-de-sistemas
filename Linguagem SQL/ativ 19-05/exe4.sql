CREATE DATABASE Supermercado;
USE Supermercado;
CREATE TABLE Produtos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 preco DECIMAL(10, 2) NOT NULL
);
INSERT INTO Produtos (nome, preco) VALUES
('Arroz', 25.90), ('TV', 1200.00), ('Leite', 5.50), ('Notebook', 3500.00);
-- Consulta: Classificação e contagem
SELECT
 CASE
 WHEN preco > 100 THEN 'Caro'
 ELSE 'Barato'
 END AS categoria,
 COUNT(*) AS quantidade
FROM Produtos
GROUP BY categoria;