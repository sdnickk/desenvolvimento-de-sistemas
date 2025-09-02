CREATE DATABASE loja_eletronicos;
USE loja_eletronicos;

-- Criação da tabela produtos
CREATE TABLE produtos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 categoria VARCHAR(50),
 preco DECIMAL(10,2) NOT NULL,
 estoque INT NOT NULL,
 data_cadastro DATE
);
-- Inserção de dados
INSERT INTO produtos (nome, categoria, preco, estoque, data_cadastro)
VALUES
('Smartphone X', 'Celulares', 2999.90, 50, '2023-01-15'),
('Notebook Pro', 'Computadores', 5499.90, 30, '2023-02-20'),
('Tablet Lite', 'Tablets', 1299.90, 75, '2023-03-10'),
('Fone Bluetooth', 'Acessórios', 299.90, 120, '2023-01-25'),
('Smart TV 55"', 'Televisores', 3999.90, 25, '2023-04-05'),
('Mouse Gamer', 'Acessórios', 249.90, 80, '2023-02-15');

-- Resolução: Consultas com funções de agregação
-- 1. Preço médio dos produtos
SELECT AVG(preco) AS preco_medio FROM produtos;

-- 2. Produto mais caro
SELECT MAX(preco) AS maior_preco FROM produtos;

-- 3. Soma do valor total em estoque por categoria
SELECT categoria, SUM(preco * estoque) AS valor_total_estoque
FROM produtos
GROUP BY categoria;

-- 4. Contagem de produtos por categoria
SELECT categoria, COUNT(*) AS quantidade_produtos
FROM produtos
GROUP BY categoria;

-- 5. Preço mínimo entre os produtos com estoque
SELECT MIN(preco) AS menor_preco FROM produtos WHERE estoque > 0;