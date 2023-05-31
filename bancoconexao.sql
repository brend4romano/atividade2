create database Site3;
use Site3;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL
);
INSERT INTO users (nome, email, senha)
VALUES ('Usuário 1', 'usuario1@example.com', 'senha123');

select * from users;


