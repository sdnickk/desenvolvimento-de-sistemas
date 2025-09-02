CREATE DATABASE loja_construcao;
USE loja_construcao;

-- Criação da tabela produtos
CREATE TABLE produtos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 preco_custo DECIMAL(10,2) NOT NULL,
 margem_lucro DECIMAL(5,2) NOT NULL,
 quantidade_estoque DECIMAL(10,3) NOT NULL,
 unidade_medida VARCHAR(10)
);
-- Inserção de dados
INSERT INTO produtos (nome, preco_custo, margem_lucro, quantidade_estoque, unidade_medida) VALUES
('Cimento CP II 32kg', 28.50, 30.00, 150.000, 'sacos'),
('Tijolo Cerâmico', 0.85, 50.00, 5000.000, 'un'),
('Areia Média', 45.00, 25.00, 12.500, 'm³'),
('Brita 1', 60.00, 20.00, 8.750, 'm³'),
('Tubo PVC 100mm', 22.40, 40.00, 120.000, 'un'),
('Argamassa', 15.80, 35.00, 80.000, 'sacos');

-- Resolução: Consultas com funções matemáticas
-- 1. Calcular preço de venda (preço custo + margem de lucro)
SELECT
 nome,
 preco_custo,
 margem_lucro,
 ROUND(preco_custo * (1 + margem_lucro / 100), 2) AS preco_venda
FROM produtos;

-- 2. Calcular valor total em estoque por produto
SELECT
 nome,
 quantidade_estoque,
 unidade_medida,
 preco_custo,
 ROUND(quantidade_estoque * preco_custo * (1 + margem_lucro / 100),
2) AS valor_total_estoque
FROM produtos;

-- 3. Aplicar desconto de 10% para produtos com mais de 100 unidades
SELECT
 nome,
 ROUND(preco_custo * (1 + margem_lucro / 100), 2) AS preco_original,
 ROUND(preco_custo * (1 + margem_lucro / 100) * 0.9, 2) AS preco_com_desconto
FROM produtos
WHERE
 (unidade_medida = 'un' AND quantidade_estoque > 100) OR
 (unidade_medida != 'un' AND quantidade_estoque > 10);
 
-- 4. Arredondar quantidade em estoque para inteiros quando aplicável
SELECT
 nome,
 quantidade_estoque,
 CASE
 WHEN unidade_medida = 'un' THEN ROUND(quantidade_estoque)
 ELSE quantidade_estoque
 END AS quantidade_ajustada
FROM produtos;

-- 5. Calcular preço por kg para produtos vendidos em sacos
SELECT
 nome,
 preco_custo,
 ROUND(preco_custo * (1 + margem_lucro / 100) / 32, 3) AS preco_por_kg
FROM produtos
WHERE nome LIKE '%kg%';