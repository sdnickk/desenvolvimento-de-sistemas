CREATE DATABASE biblioteca;
USE biblioteca;
-- Criação da tabela emprestimos
CREATE TABLE emprestimos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 id_livro INT NOT NULL,
 id_usuario INT NOT NULL,
 data_emprestimo DATETIME NOT NULL,
 data_devolucao_prevista DATE NOT NULL,
 data_devolucao_efetiva DATE,
 multa DECIMAL(10,2) DEFAULT 0.00
);
-- Inserção de dados
INSERT INTO emprestimos (id_livro, id_usuario, data_emprestimo, data_devolucao_prevista, data_devolucao_efetiva, multa) VALUES
(101, 1, '2023-05-01 10:30:00', '2023-05-15', '2023-05-14', 0.00),
(102, 2, '2023-05-03 14:15:00', '2023-05-17', '2023-05-18', 5.00),
(103, 3, '2023-05-05 09:00:00', '2023-05-19', NULL, 0.00),
(104, 1, '2023-05-10 16:45:00', '2023-05-24', '2023-05-25', 3.50),
(105, 4, '2023-05-12 11:20:00', '2023-05-26', '2023-05-26', 0.00);
-- Resolução: Consultas com funções de data
-- 1. Calcular dias de atraso para empréstimos devolvidos
SELECT
 id,
 DATEDIFF(data_devolucao_efetiva, data_devolucao_prevista) AS dias_atraso
FROM emprestimos
WHERE data_devolucao_efetiva > data_devolucao_prevista;

-- 2. Empréstimos que ainda não foram devolvidos e estão atrasados
SELECT
 id,
 DATEDIFF(CURRENT_DATE(), data_devolucao_prevista) AS dias_atraso
FROM emprestimos
WHERE data_devolucao_efetiva IS NULL
AND CURRENT_DATE() > data_devolucao_prevista;

-- 3. Duração real do empréstimo em dias
SELECT
 id,
 DATEDIFF(data_devolucao_efetiva, DATE(data_emprestimo)) AS dias_emprestimo
FROM emprestimos
WHERE data_devolucao_efetiva IS NOT NULL;

-- 4. Empréstimos realizados no mês atual
SELECT
 id,
 DATE_FORMAT(data_emprestimo, '%d/%m/%Y %H:%i') AS data_formatada
FROM emprestimos
WHERE MONTH(data_emprestimo) = MONTH(CURRENT_DATE())
AND YEAR(data_emprestimo) = YEAR(CURRENT_DATE());

-- 5. Calcular multa proporcional ao atraso (R$ 1,00 por dia)
SELECT
 id,
 GREATEST(0, DATEDIFF(data_devolucao_efetiva, data_devolucao_prevista)) AS dias_atraso,
 GREATEST(0, DATEDIFF(data_devolucao_efetiva, data_devolucao_prevista)) * 1.00 AS multa_calculada
FROM emprestimos
WHERE data_devolucao_efetiva IS NOT NULL;