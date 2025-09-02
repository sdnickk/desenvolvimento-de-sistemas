create database exe2;
use exe2;

CREATE TABLE Clientes (
    id INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Pedidos (
    id INT PRIMARY KEY,
    cliente_id INT,
    data_pedido DATE NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES Clientes(id)
);

CREATE TABLE ItensPedido (
    id INT PRIMARY KEY,
    pedido_id INT,
    produto VARCHAR(100),
    preco DECIMAL(10,2),
    quantidade INT,
    FOREIGN KEY (pedido_id) REFERENCES Pedidos(id)
);

INSERT INTO Clientes (id, nome) VALUES
(1, 'João Silva'),
(2, 'Maria Souza');

INSERT INTO Pedidos (id, cliente_id, data_pedido) VALUES
(1, 1, '2025-03-01'),
(2, 1, '2025-05-01'),
(3, 2, '2024-10-01');  

INSERT INTO ItensPedido (id, pedido_id, produto, preco, quantidade) VALUES
(1, 1, 'Notebook', 2000.00, 1),
(2, 2, 'Mouse', 150.00, 2),
(3, 3, 'Celular', 3000.00, 1);

select c.nome, sum(i.preco * i.quantidade) as total_gasto, count(distinct p.id) as quantidade_pedidos from clientes c 
join pedidos p on c.id = p.cliente_id 
join itenspedido i on p.id = i.pedido_id
where p.data_pedido >= curdate() - interval '6 month'
group by c.id, p.id
having sum (i.preco * i.quantidade) > 1000;