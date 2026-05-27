CREATE TABLE funcionarios (
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    /* F=Ficção, M=Masculino, N=Nao informar */
    genero VARCHAR(1) NOT NULL,
    setor VARCHAR(2) NOT NULL,
    carga INTEGER NOT NULL,
    CONSTRAINT pk_funcionarios PRIMARY KEY (id)
);