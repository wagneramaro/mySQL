<?php
/*
- SELECT
SELECT * FROM usuarios ;
SELECT usuario, senha FROM usuarios WHERE id = 2;

- INSERT
INSERT INTO usuarios SET nome = 'Wagner', senha = '123';
    
padrão universal de vários bancos SQL
INSERT INTO usuario (nome, senha) VALUES ('WAGNER', '123');

- UPDATE
UPDATE usuarios SET senha = '321' WHERE id = '2';

-DELETE 
DELETE FROM usuarios WHERE email = 'teste@gmail.com';

- WHERE (OR, AND)
SELECT * FROM usuarios WHERE id = 1 OR id = 3;
SELECT * FROM usuarios WHERE nome = 'fulano' AND idade = '31';
SELECT * FROM usuarios WHERE (nome = 'fulano' AND senha = '432') OR email = 'teste@teste.com';
