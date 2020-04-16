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

- LIKE (usado em buscas onde se sabe apenas parte da informação)
SELECT * FROM usuarios WHERE email LIKE '%gmail%';

- BETWEEN
SELECT * FROM usuarios WHERE data_nascimento BETWEEN '2016-12-01' AND '2017-03-15';

- IN
SELECT * FROM usuarios WHERE id IN (2, 3, 5, 7, 11);

- ALIAS (será criado uma coluna temporária chamada soma onde exibirá o valor do id + 10)
SELECT *, (id+10) as soma FROM usuarios

- HAVING (para filtrar alias)
SELECT *, (id + 10) as soma FROM usuarios HAVING soma < 12;

- ORDER BY (ASC, DESC)
SELECT * FROM usuarios ORDER BY nome DESCS
SELECT * FROM usuarios WHERE nome LIKE '%Oliveira%' ORDER BY nome ASC;


- LIMIT (SEMPRE NO FINAL DA QUERY)
SELECT id FROM usuarios LIMIT 1,3; //SALTA O PRIMEIRO RESULTADO E EXIBE MAIS TRÊS

- GROUPY BY
SELECT COUNT(*) as contagem, faixa_salarial FROM  usuarios GROUP BY faixa_salarial

- JOIN (INNER, LEFT, RIGHT)
SELECT usuarios.nome, faixas.titulo FROM usuarios INNER JOIN faixas ON faixas.id = usuarios.faixa_salarial;


