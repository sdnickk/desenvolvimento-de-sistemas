create database lojaa;
use lojaa;

CREATE TABLE Categorias (
    id INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produtos (
    id INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade_estoque INT NOT NULL,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categorias(id)
);

INSERT INTO Categorias (id, nome) VALUES
(1, 'Eletrônicos'),
(2, 'Roupas'),
(3, 'Alimentos');

INSERT INTO Produtos (id, nome, preco, quantidade_estoque, categoria_id) VALUES
(1, 'Smartphone', 1500.00, 10, 1),
(2, 'Notebook', 3000.00, 5, 1),
(3, 'TV LED', 1200.00, 7, 1),
(4, 'Camiseta', 50.00, 100, 2),
(5, 'Geladeira', 800.00, 3, 1),
(6, 'Biscoito', 5.00, 200, 3),
(7, 'Fone de Ouvido', 200.00, 25, 1);

select p.nome, p.preco, p.quantidade_estoque as quantidade, c.nome as categoria from produtos p join categorias c on p.categoria_id = c.id where preco > 500;
