CREATE TABLE hospital (
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    /* F=Feminino, M=Masculino, N=Nao informar */
    genero VARCHAR(1) NOT NULL,
    especialidade VARCHAR(2) NOT NULL,
    CRM VARCHAR(9) NOT NULL,
    CONSTRAINT pk_hospital PRIMARY KEY (id)
);

