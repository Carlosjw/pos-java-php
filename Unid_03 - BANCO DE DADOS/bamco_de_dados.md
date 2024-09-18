# CRUD BANCO DE DADOS SQL

### REALIZAR NOVO CADASTRO:
```SQL
    INSERT INTO `contatos` (`CODIGO`, `NOME`, `TELEFONE`) VALUES (NULL, 'Pedro Perosa Pedreira', '65999999556');

    /*
        INSERT INTO (Inserir na tabela) `contatos`, nas colunas (`CODIGO`, `NOME`,`TELEFONE`) os VALUES (valores) ('NULL', 'Pedro Perosa Pedreira','65999999556');     
    */
```

### ATUALIZAR CADASTRO:
```SQL
    UPDATE `contatos` SET `TELEFONE` = '65999899556' WHERE `contatos`.`CODIGO` = 3;
    /*
    UPDATE (atualize na tabela) `contatos` SET (na coluna) `TELEFONE` = (com o valor) '65999899556' WHERE (onde) `contatos`.`CODIGO` = 3 (onde o código identificador for igual a 3);
    */
    UPDATE `contatos` SET `NOME` = 'Pedro Gonzalles de La Rosa Silva', `TELEFONE` = '99399999788' WHERE `contatos`.`CODIGO` = 2;
    /*
    UPDATE (atualize na tabela) `contatos` SET (nas colunas) `NOME` = (com o valor) 'Pedro Gonzalles de La Rosa Silva',( e na coluna) `TELEFONE` = (com o valor) '99399999788',  WHERE (onde) `contatos`.`CODIGO` = 2 (onde o código identificador for igual a 2);
    */
```

### DELETAR CADASTRO:
```SQL
    DELETE FROM `contatos` WHERE `contatos`.`CODIGO` = 3;
    /*
    DELETE FROM (exlua os registros da tabela) `contatos` WHERE (onde) `contatos`.`CODIGO` = 3 (onde o código identificador for igual a 2);
    */
```