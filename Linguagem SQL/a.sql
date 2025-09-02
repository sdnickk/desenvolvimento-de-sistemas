use escola;

create table turmas (
	id int primary key auto_increment,
    nome_turma varchar(50),
    ano int
);

create table alunos (
	id int primary key auto_increment,
    nome varchar (80),
    idade int,
    email varchar(100),
    turma_id int,
    foreign key(turma_id) references turmas(id)
);

drop table alunos;
drop table turmas;

select a.nome, t.nome_turma as turma from alunos a inner join turmas t on a.turma_id = t.id;
