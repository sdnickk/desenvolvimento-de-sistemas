SELECT ClienteNome, ClienteSobrenome, ClienteBairro, MovimentoData, MovimentoValor
  FROM Clientes, Contas, Movimentos
  WHERE Clientes.ClienteCodigo=Contas.ClienteCodigo
  AND Contas.ContaNumero=Movimentos.ContaNumero
  ORDER BY MovimentoData desc;

SELECT ClienteNome, ClienteSobrenome,
   (ClienteRendaAnual / 3.9) AS Dolar, (ClienteRendaAnual / 4.4) AS Euro
       FROM Clientes;

SELECT ClienteNome, ClienteSobrenome, ClienteBairro, ClienteEstadoCivil,
            CASE WHEN ClienteEstadoCivil = 'S' THEN 'Solteiro' ELSE 'Casado' END AS ESTADOCIVILDECRITO,
            ClienteSexo,
            CASE WHEN ClienteSexo = 'M' THEN 'Masculino' ELSE 'Feminino' END AS SEXODESCRITO,
            ClienteRendaAnual,
            CASE WHEN ClienteRendaAnual < 50000 THEN 'C'
            WHEN ClienteRendaAnual < 70000 THEN 'B'
            ELSE 'A'
            END AS 'CLASSIFICAÇÃO'
            FROM Clientes ;

SELECT ClienteNome, ClienteBairro, AgenciaBairro, AgenciaNome FROM Clientes, Agencias
  WHERE ClienteBairro=AgenciaBairro;


SELECT Clientes.ClienteNome, Clientes.ClienteEmail
  FROM dbo.Clientes
  WHERE Clientes.ClienteEmail LIKE '%[0-9]%';

SELECT ClienteRua FROM dbo.Clientes WHERE
  ClienteRua LIKE 'R.%'
  AND ClienteRua NOT LIKE 'RUA%';

SELECT TOP 5 ClienteNome, ClienteRendaAnual
    FROM dbo.Clientes
    ORDER BY ClienteRendaAnual DESC;

SELECT TOP 5 ClienteNome, ClienteRendaAnual
    FROM dbo.Clientes
    ORDER BY ClienteRendaAnual;

SELECT ClienteNome, ClienteRua FROM dbo.Clientes
            WHERE ClienteNumero BETWEEN 300 AND 500;

SELECT * FROM dbo.Clientes WHERE ClienteCodigo NOT IN
            (SELECT ClienteCodigo FROM dbo.CartaoCredito);

SELECT ClienteNome, AgenciaNome, AgenciaBairro, MovimentoValor
    FROM dbo.Clientes, dbo.Agencias, dbo.Contas, dbo.CartaoCredito, dbo.Movimentos
    WHERE clientes.ClienteCodigo=Contas.ClienteCodigo
    AND agencias.AgenciaCodigo=dbo.Contas.AgenciaCodigo
    AND CartaoCredito.ClienteCodigo=Clientes.ClienteCodigo
    AND dbo.Contas.ContaNumero=dbo.Movimentos.ContaNumero
    AND ContaAbertura >= '2008-01-01';

SELECT dbo.Clientes.ClienteNome, dbo.Clientes.ClienteBairro,
            CASE WHEN ClienteBairro IN ('ITINGA','FLORESTA')
            THEN 'SUL' END  AS [REGIÃO]
            FROM Clientes;

SELECT ClienteNome, MovimentoValor, MovimentoTipo , TipoMovimentoDescricao
            FROM Clientes, Contas, Movimentos, TipoMovimento
            WHERE Clientes.ClienteCodigo=Contas.ClienteCodigo
            AND Contas.ContaNumero=dbo.Movimentos.ContaNumero
            AND dbo.Movimentos.MovimentoTipo=dbo.TipoMovimento.TipoMovimentoCodigo
            AND TipoMovimento.TipoMovimentoCodigo=-1;