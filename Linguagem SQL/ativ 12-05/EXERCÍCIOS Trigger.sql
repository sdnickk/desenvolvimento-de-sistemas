 CREATE TABLE FUNCIONARIOS
    (
    NOME VARCHAR(10),
    SALARIO MONEY
    )
    SELECT * FROM FUNCIONARIOS
    SELECT * FROM auditFuncionarios

    INSERT FUNCIONARIOS (NOME,SALARIO)
    VALUES ('PEDRO',1000)

    DELETE FROM FUNCIONARIOS WHERE NOME = 'PEDRO'

    UPDATE FUNCIONARIOS SET SALARIO = SALARIO * 10


    CREATE TRIGGER TGR_SALARIO
    ON FUNCIONARIOS
    FOR INSERT
    AS
    INSERT auditFuncionarios
    SELECT *, GETDATE(),'INSERT' FROM inserted



    alter TRIGGER TGR_SALARIO_DEL
    ON FUNCIONARIOS
    FOR DELETE
    AS
    INSERT auditFuncionarios
    SELECT *, GETDATE(),'DELETE' FROM deleted


    create TRIGGER TGR_SALARIO_up
    ON FUNCIONARIOS
    FOR UPDATE
    AS
    INSERT auditFuncionarios
    SELECT *, GETDATE(),'UPD_VELHO' FROM deleted

    INSERT auditFuncionarios
    SELECT *, GETDATE(),'UPD_NOVO' FROM INSERTED
    
    SELECT * FROM dbo.ALUNOS

    SELECT * FROM dbo.MATRICULA


    ALTER TABLE dbo.ALUNOS ADD CURSO CHAR(3)


    CREATE TRIGGER TGR_MATRICULA_ALUNO ON ALUNOS FOR
    INSERT
    AS
    BEGIN


            DECLARE @MATRICULAALUNO INT, @CODIGOCURSO VARCHAR(3)

            SET @MATRICULAALUNO = (SELECT MATRICULA FROM INSERTED)

            SET @CODIGOCURSO = (SELECT CURSO FROM INSERTED)


    INSERT MATRICULA
                            (
                                                            MATRICULA,
                                                            CURSO,
                                                            MATERIA,
                                                            PROFESSOR,
                                                            PERLETIVO

                            )
                            SELECT @MATRICULAALUNO AS MATRICULA, @CODIGOCURSO, SIGLA,PROFESSOR,
                            YEAR(GETDATE()) AS PERLETIVO FROM MATERIAS WHERE CURSO =
                            @CODIGOCURSO

            END



              EXEC sp_MatriculaAluno @NOMEALUNO = 'José', -- varchar(50)
                                                                                               @CURSOALUNO = 'SIS' -- varchar(50)


    CREATE PROCEDURE sp_MatriculaAluno
            (
            @NOMEALUNO VARCHAR(50),
            @CURSOALUNO VARCHAR(50)
            )
            AS
            BEGIN

            INSERT dbo.ALUNOS
            (
                    NOME,CURSO
            )
            VALUES
            (@NOMEALUNO,@CURSOALUNO)
            END;
