# CRUD BANCO DE DADOS SQL
### CRIAR TABELAS
```SQL
    CREATE TABLE `lista_de_contatos`.`contatos` (`CODIGO` INT NOT NULL AUTO_INCREMENT,
    `NOME` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `TELEFONE`
    VARCHAR(25) NULL , PRIMARY KEY (`CODIGO`)) ENGINE = InnoDB;
```

### REALIZAR NOVO CADASTRO:
```SQL
    INSERT INTO `contatos` (`CODIGO`, `NOME`, `TELEFONE`) VALUES
    (NULL, 'Pedro Perosa Pedreira', '65999999556');

    /*
        INSERT INTO (Inserir na tabela) `contatos`, nas colunas (`CODIGO`, `NOME`,`TELEFONE`)
        os VALUES (valores)
        ('NULL', 'Pedro Perosa Pedreira','65999999556');     
    */
```

### ATUALIZAR CADASTRO:
```SQL
    UPDATE `contatos` SET `TELEFONE` = '65999899556' WHERE `contatos`.`CODIGO` = 3;
    /*
    UPDATE (atualize na tabela) `contatos` SET (na coluna) `TELEFONE` = (com o valor) '65999899556'
    WHERE (onde) `contatos`.`CODIGO` = 3 (onde o código identificador for igual a 3);
    */
    UPDATE `contatos` SET `NOME` = 'Pedro Gonzalles de La Rosa Silva', `TELEFONE` = '99399999788'
    WHERE `contatos`.`CODIGO` = 2;
    /*
    UPDATE (atualize na tabela) `contatos` SET (nas colunas) `NOME` = (com o valor) 'Pedro Gonzalles de
    La Rosa Silva',( e na coluna) `TELEFONE` = (com o valor) '99399999788',  WHERE (onde) 
    `contatos`.`CODIGO` = 2 (onde o código identificador for igual a 2);
    */
```

### DELETAR CADASTRO:
```SQL
    DELETE FROM `contatos` WHERE `contatos`.`CODIGO` = 3;
    /*
    DELETE FROM (exlua os registros da tabela) `contatos` WHERE
    (onde) `contatos`.`CODIGO` = 3 (onde o código identificador for igual a 2);
    */
```

# FAZENDO CONSULTAS EM BANCOS DE DADOS
## CONSULTA POR ID/CÓDIGO:
```SQL
    SELECT * FROM `contatos` WHERE `CODIGO` = 4;
    /*
    SELECT(selecione) *(todos os registros) FROM (da tabela) `contatos` WHERE(onde)
    `CODIGO` = 4 (o código identificador/ID for igual a 4);
    */
```
## CONSULTANDO POR LETRA INICIAL:
```SQL
    SELECT * FROM `contatos` WHERE `NOME` LIKE 'P%';
    /*
    SELECT(selecione) *(todos os registros) FROM (da tabela) `contatos` WHERE(onde) `NOME`
    (conteúdo da coluna) LIKE 'P%'(seja iniciado com a letra 'P');
    */
```
## CONSULTANDO POR CONTEÚDO QUE CONTENHA DETERMINADA LETRA:
```SQL
    SELECT * FROM `contatos` WHERE `NOME` LIKE '%P%';
    /*
    SELECT(selecione) *(todos os registros) FROM (da tabela) `contatos` WHERE(onde) `NOME`
    (conteúdo da coluna) LIKE '%P%'(contenha a letra 'P');
    */
```

## EXLUINDO TABELA:
```SQL
    DROP TABLE `t_apres`;
    /*
    DROP(exlua) TABLE(a tabela) `t_apres`;
    */
```
