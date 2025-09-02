-- Criação do banco de dados
CREATE DATABASE sistema_rh;
USE sistema_rh;
-- Criação da tabela funcionarios
CREATE TABLE funcionarios (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 cargo VARCHAR(50) NOT NULL,
 salario_base DECIMAL(10,2) NOT NULL,
 data_admissao DATE NOT NULL,
 departamento VARCHAR(50),
 ativo BOOLEAN DEFAULT TRUE
);
-- Inserção de dados
INSERT INTO funcionarios (nome, cargo, salario_base, data_admissao, departamento, ativo) VALUES
('Ana Souza', 'Gerente', 8500.00, '2018-06-15', 'Administrativo', TRUE),
('Carlos Mendes', 'Desenvolvedor', 6200.00, '2020-03-10', 'TI', TRUE),
('Mariana Oliveira', 'Analista', 4800.00, '2021-11-22', 'Financeiro', TRUE),
('Pedro Santos', 'Assistente', 3200.00, '2022-05-30', 'RH', TRUE),
('Juliana Costa', 'Desenvolvedor', 5800.00, '2019-08-12', 'TI', FALSE),
('Ricardo Pereira', 'Diretor', 12000.00, '2017-02-05', 'Administrativo', TRUE);
-- Resolução: Consultas com funções de conversão e condicionais

-- 1. Classificar salários em faixas
SELECT
 nome,
 cargo,
 salario_base,
 CASE
 WHEN salario_base < 4000 THEN 'Até R$ 4.000'
 WHEN salario_base BETWEEN 4000 AND 7000 THEN 'Entre R$ 4.000 e
R$ 7.000'
 WHEN salario_base BETWEEN 7000 AND 10000 THEN 'Entre R$ 7.000
e R$ 10.000'
 ELSE 'Acima de R$ 10.000'
 END AS faixa_salarial
FROM funcionarios
WHERE ativo = TRUE;

-- 2. Calcular tempo de empresa em anos e meses
SELECT
 nome,
 data_admissao,
 CONCAT(
 TIMESTAMPDIFF(YEAR, data_admissao, CURRENT_DATE()), ' anos e '
,
 TIMESTAMPDIFF(MONTH, data_admissao, CURRENT_DATE()) % 12, ' me
ses'
 ) AS tempo_empresa
FROM funcionarios;

-- 3. Calcular bônus anual (5% do salário para +3 anos, 3% para outros)
SELECT
 nome,
 salario_base,
 TIMESTAMPDIFF(YEAR, data_admissao, CURRENT_DATE()) AS anos_empresa,
 CASE
 WHEN TIMESTAMPDIFF(YEAR, data_admissao, CURRENT_DATE()) >= 3 THEN ROUND(salario_base * 0.05, 2)
 ELSE ROUND(salario_base * 0.03, 2)
 END AS bonus_anual
FROM funcionarios
WHERE ativo = TRUE;

-- 4. Converter status ativo para texto
SELECT
 nome,
 cargo,
 IF(ativo, 'Ativo', 'Inativo') AS status_funcionario
FROM funcionarios;

-- 5. Calcular salário líquido estimado (desconto de 27.5% para > R$ 5.000, 20% para outros)
SELECT
 nome,
 salario_base AS salario_bruto,
 CASE
 WHEN salario_base > 5000 THEN ROUND(salario_base * 0.725, 2)
 ELSE ROUND(salario_base * 0.80, 2)
 END AS salario_liquido_estimado
FROM funcionarios
WHERE ativo = TRUE;