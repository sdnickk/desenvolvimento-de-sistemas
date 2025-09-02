CREATE DATABASE Loja;
USE Loja;

CREATE TABLE Clientes (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL
);

CREATE TABLE Vendas (
 id INT PRIMARY KEY AUTO_INCREMENT,
 cliente_id INT,
 valor DECIMAL(10, 2) NOT NULL,
 data_venda DATE,
 FOREIGN KEY (cliente_id) REFERENCES Clientes(id)
);

INSERT INTO Clientes (nome) VALUES
('João Silva'), ('Maria Oliveira'), ('Carlos Souza');
INSERT INTO Vendas (cliente_id, valor, data_venda) VALUES
(1, 150.50, '2023-01-10'),
(1, 200.75, '2023-02-15'),
(2, 300.00, '2023-01-20'),
(3, 50.25, '2023-03-05'),
(3, 120.90, '2023-03-10');

SELECT c.nome, SUM(v.valor) AS total_vendas
FROM Clientes c
JOIN Vendas v ON c.id = v.cliente_id
GROUP BY c.id;