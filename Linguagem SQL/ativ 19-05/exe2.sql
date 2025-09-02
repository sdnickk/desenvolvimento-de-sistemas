CREATE DATABASE Escola;
USE Escola;
CREATE TABLE Alunos (
 id INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(100) NOT NULL,
 nota DECIMAL(3, 1) NOT NULL
);

INSERT INTO Alunos (nome, nota) VALUES
('Ana', 8.5), ('Bruno', 5.0), ('Clara', 7.0), ('Daniel', 6.5);

-- Consulta: Média das notas dos aprovados
SELECT AVG(nota) AS media_aprovados
FROM Alunos
WHERE nota >= 6;