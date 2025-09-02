CREATE DATABASE cadastro_clientes;
USE cadastro_clientes;
-- Criação da tabela clientes
CREATE TABLE clientes (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome_completo VARCHAR(100) NOT NULL,
 email VARCHAR(100),
 telefone VARCHAR(20),
 data_nascimento DATE,
 cpf VARCHAR(14)
);

-- Inserção de dados
INSERT INTO clientes (nome_completo, email, telefone, data_nascimento,
cpf) VALUES
('Maria da Silva', 'maria.silva@email.com', '(11) 98765-4321', '1985-05-15', '123.456.789-00'),
('João Oliveira', 'joao.oliveira@email.com', '(21) 91234-5678', '1990-08-22', '987.654.321-00'),
('Ana Paula Santos', 'ana.santos@email.com', '(31) 99876-5432', '1988-11-30', '456.789.123-00'),
('Carlos Eduardo Pereira', 'carlos.pereira@email.com', '(41) 92345-6789', '1995-03-10', '789.123.456-00');

-- Resolução: Consultas com funções de string
-- 1. Extrair primeiro nome dos clientes
SELECT
 nome_completo,
 SUBSTRING_INDEX(nome_completo, ' ', 1) AS primeiro_nome
FROM clientes;

-- 2. Formatar CPF para exibição (remover pontos e traço)
SELECT
 nome_completo,
 REPLACE(REPLACE(cpf, '.', ''), '-', '') AS cpf_sem_formatacao
FROM clientes;

-- 3. Criar email alternativo para clientes sem email
SELECT
 nome_completo,
 COALESCE(email, CONCAT(LCASE(REPLACE(SUBSTRING_INDEX(nome_completo
, ' ', 1), ' ', '')), '@empresa.com')) AS email_utilizado
FROM clientes;

-- 4. Contar número de caracteres nos nomes
SELECT
 nome_completo,
 LENGTH(nome_completo) AS tamanho_nome
FROM clientes;

-- 5. Extrair DDD do telefone
SELECT
 nome_completo,
 telefone,
 SUBSTRING(telefone, 2, 2) AS ddd
FROM clientes;