SELECT ClienteNome, YEAR(GETDATE()) - YEAR(ClienteNascimento) AS idade
  FROM Clientes
  WHERE YEAR(GETDATE()) - YEAR(ClienteNascimento) >
    (
      SELECT AVG(YEAR(GETDATE()) -YEAR(ClienteNascimento)) AS IDADE FROM Clientes
    );

SELECT AgenciaNome, COUNT(ClienteCodigo) AS QDTE
FROM Contas INNER JOIN Agencias
  ON Agencias.AgenciaCodigo = Contas.AgenciaCodigo
GROUP BY AgenciaNome
HAVING COUNT(ClienteCodigo) >
  (SELECT COUNT(DISTINCT ClienteCodigo)/
  COUNT(DISTINCT AgenciaCodigo) FROM Contas);

SELECT AgenciaNome, SUM(ContaSaldo) AS TOTAL ,MIN(ContaSaldo) AS MINIMO, MAX(ContaSaldo) AS MAXIMO,
COUNT(Contas.ClienteCodigo) AS QTDE_CLIENTES
FROM Contas INNER JOIN dbo.Agencias ON Agencias.AgenciaCodigo = Contas.AgenciaCodigo
GROUP BY dbo.Agencias.AgenciaNome;

SELECT AgenciaNome, SUM(ContaSaldo) / (SELECT SUM(ContaSaldo) FROM dbo.Contas) * 100 AS PERCENTUAL
FROM Contas INNER JOIN dbo.Agencias ON Agencias.AgenciaCodigo = Contas.AgenciaCodigo
GROUP BY dbo.Agencias.AgenciaNome;

SELECT TOP 2 AgenciaCidade, SUM(ContaSaldo) AS SALDO_TOTAL
FROM Contas INNER JOIN Agencias ON Agencias.AgenciaCodigo = Contas.AgenciaCodigo
GROUP BY AgenciaCidade
ORDER BY 2 DESC;

SELECT TOP 1 AgenciaCidade, Emprestimos.EmprestimoTotal
FROM dbo.Emprestimos INNER JOIN Agencias ON Agencias.AgenciaCodigo = Emprestimos.AgenciaCodigo
ORDER BY 2 DESC;

SELECT MIN(DevedorSaldo) AS MINIMO, MAX(DevedorSaldo) AS MAXIMO, SUM(DevedorSaldo) AS TOTAL
FROM dbo.Devedores;

SELECT TOP 1
ClienteNome
,CASE WHEN dbo.CartaoCredito.ClienteCodigo IS NULL THEN 'NÃO TEM CARTÃO CRÉDITO' ELSE 'TEM CARTÃO CRÉDITO' END AS 'CARTAO'
,DevedorSaldo FROM dbo.Clientes
INNER JOIN dbo.Devedores ON Devedores.ClienteCodigo = Clientes.ClienteCodigo
LEFT JOIN dbo.CartaoCredito ON CartaoCredito.ClienteCodigo = Clientes.ClienteCodigo
ORDER BY 3 DESC;

SELECT Clientes.ClienteNome, DATEDIFF(YEAR,Clientes.ClienteNascimento, GETDATE()) AS IDADE,
ISNULL(Devedores.DevedorSaldo,0) AS DevedorSaldo, ISNULL(Emprestimos.EmprestimoTotal,0) AS EmprestimoTotal,
CASE WHEN CartaoCredito.CartaoCodigo IS NULL THEN 'NÃO TEM' ELSE 'TEM' END AS CARTAOCREDITO
FROM Clientes
LEFT JOIN Devedores ON Devedores.ClienteCodigo = Clientes.ClienteCodigo
LEFT JOIN Emprestimos ON Emprestimos.ClienteCodigo = Clientes.ClienteCodigo
LEFT JOIN CartaoCredito ON CartaoCredito.ClienteCodigo = Clientes.ClienteCodigo
ORDER BY 3 DESC;

SELECT Clientes.ClienteNome, DATEDIFF(YEAR,Clientes.ClienteNascimento, GETDATE()) AS IDADE,
ISNULL(Devedores.DevedorSaldo,0) AS DevedorSaldo, ISNULL(Emprestimos.EmprestimoTotal,0) AS EmprestimoTotal,
CASE WHEN .CartaoCredito.CartaoCodigo IS NULL THEN 'NÃO TEM' ELSE 'TEM' END AS CARTAOCREDITO,
CASE WHEN ClienteNome LIKE '%a' THEN 'FEMININO' ELSE 'MASCULINO' END AS SEXO,
ISNULL((Emprestimos.EmprestimoTotal-DevedorSaldo),0) AS DIFERENÇA
FROM Clientes
LEFT JOIN Devedores ON Devedores.ClienteCodigo = Clientes.ClienteCodigo
LEFT JOIN Emprestimos ON Emprestimos.ClienteCodigo = Clientes.ClienteCodigo
LEFT JOIN CartaoCredito ON CartaoCredito.ClienteCodigo = Clientes.ClienteCodigo
ORDER BY 3 DESC;

INSERT Clientes (ClienteNome, ClienteRua, ClienteCidade, ClienteNascimento) VALUES  ('Silvio Santos', 'Rua João Colin, 1234', 'Joinville','1980-01-01' );

SELECT @@IDENTITY

INSERT Contas (AgenciaCodigo ,ContaNumero , ClienteCodigo , ContaSaldo , ContaAbertura)
VALUES (5,'C-999',14,500,'2016-01-01');

INSERT CartaoCredito ( AgenciaCodigo , ClienteCodigo , CartaoCodigo , CartaoLimite)
VALUES  (5,14,'1234-1234-1234-1234',5000);

UPDATE dbo.Clientes SET ClienteRua = 'Rua da Univille' WHERE ClienteNome = 'Ana';

DECLARE @ClienteCodigo INT = (SELECT ClienteCodigo FROM dbo.Clientes WHERE ClienteNome = 'Vânia')

DELETE FROM dbo.Emprestimos WHERE ClienteCodigo = @ClienteCodigo
DELETE FROM dbo.Devedores WHERE ClienteCodigo = @ClienteCodigo
DELETE FROM dbo.Depositantes WHERE ClienteCodigo = @ClienteCodigo
DELETE FROM dbo.CartaoCredito WHERE ClienteCodigo = @ClienteCodigo
DELETE FROM dbo.Contas WHERE ClienteCodigo = @ClienteCodigo
DELETE FROM dbo.Clientes WHERE ClienteCodigo = @ClienteCodigo

USE MinhaCaixa_Beta
GO
SELECT
CASE WHEN ClienteSexo = 'M' THEN 'Sr. ' + dbo.Clientes.ClienteNome + ' ' + dbo.Clientes.ClienteSobrenome
ELSE 'Sra. ' + dbo.Clientes.ClienteNome + ' ' + dbo.Clientes.ClienteSobrenome END AS Cliente
FROM dbo.Clientes
Mostre os bairros que tem mais clientes.
USE MinhaCaixa_Beta
GO
SELECT COUNT(dbo.Clientes.ClienteCodigo) AS Quantidade,
dbo.Clientes.ClienteBairro
FROM dbo.Clientes
GROUP BY dbo.Clientes.ClienteBairro
ORDER BY 1 desc
Mostre a renda de cada cliente convertida em dólar.
USE MinhaCaixa_Beta
GO
SELECT ClienteNome +' ' + ClienteSobrenome AS Cliente,
CONVERT(DECIMAL(10,2),Clientes.ClienteRendaAnual / 3.25) AS RENDADOLAR
FROM dbo.Clientes

    USE MinhaCaixa_Beta
GO
SELECT TOP 15
ClienteNome +' ' + ClienteSobrenome AS Cliente, Contas.ContaNumero,
SUM(MovimentoValor*MovimentoTipo) AS Saldo
FROM dbo.Clientes INNER JOIN dbo.Contas ON Contas.ClienteCodigo = Clientes.ClienteCodigo
INNER JOIN dbo.Movimentos ON Movimentos.ContaNumero = Contas.ContaNumero
GROUP BY ClienteNome + ' ' + ClienteSobrenome , Contas.ContaNumero
ORDER BY 3 DESC

USE MinhaCaixa_Beta
GO
SELECT TOP 5 DAY(Movimentos.MovimentoData) AS DIA,
SUM(dbo.Movimentos.MovimentoValor*dbo.Movimentos.MovimentoTipo) AS VALOR
FROM dbo.Movimentos
GROUP BY DAY(Movimentos.MovimentoData)
ORDER BY 2 DESC

CREATE TABLE Notas
(
Matricula INT,
Materia CHAR (3),
Ano INT,
Nota1 FLOAT,
Nota2 FLOAT,
Nota3 FLOAT,
Nota4 FLOAT,
TotalPontos FLOAT,
MediaFinal FLOAT
);
INSERT Notas (Matricula, Materia, Ano, Nota1, Nota2, Nota3, Nota4) VALUES  (1,'BDA',2016,7,7,7,7);

CREATE TABLE Notas
(
Matricula INT,
Materia CHAR (3),
Ano INT,
    Aulas1 INT,
    Aulas2 INT,
    Aulas3 INT,
    Aulas4 INT,
Nota1 FLOAT,
Nota2 FLOAT,
Nota3 FLOAT,
Nota4 FLOAT,
    Falta1 INT,
    Falta2 INT,
    Falta3 INT,
    Falta4 INT,
TotalPontos FLOAT,
    TotalFaltas INT,
    TotalAulas INT,
MediaFinal FLOAT,
    PercentualFrequencia float,
    Resultado char(1)
);