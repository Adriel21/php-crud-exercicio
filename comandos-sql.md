# Exercícios
```sql
CREATE DATABASE crud_escola_adriel CHARACTER SET utf8mb4;

CREATE TABLE alunos(
     id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     nome VARCHAR(30) NOT NULL,
     primeira DECIMAL (3,1) NOT NULL,
     segunda  DECIMAL (3,1) NOT NULL,
    media DECIMAL(3,1) NOT NULL,
    situacao VARCHAR(15) NOT NULL
 );
```

