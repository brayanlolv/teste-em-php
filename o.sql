Create table alunos(
    id INT NOT NULL AUTO_INCREMENT,
    nome varchar(80),
    diaSemana varchar(10),
    horario varchar(10),
    instrumento varchar(15),
    professor varchar(50),
    id_user int,

     PRIMARY KEY (id)
);
CREATE TABLE usuarios(

    id INT NOT NULL AUTO_INCREMENT,
    email varchar(80),
    senha varchar(60),

    
     PRIMARY KEY (id)
);