CREATE DATABASE IF NOT EXISTS catalogo;
USE catalogo;
DROP TABLE IF EXISTS 'categorias';
CREATE TABLE 'categorias' (
    'id' int(10) unsigned NOT NULL auto_increment,
    'nome' varchar(45) NOT NULL,
    'descricao' text NOT NULL,
    PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS 'produtos';
CREATE TABLE 'produtos' (
    'id' int(10) unsigned NOT NULL auto_increment,
    'categoria' int(10) unsigned NOT NULL,
    'nome' varchar(45) NOT NULL,
    'foto' varchar(45) NOT NULL,
    'preco' decimal(9,2) NOT NULL,
    'descricao' text NOT NULL,
    PRIMARY KEY ('id')
    KEY 'FK_produtos_Categoria' ('categoria'),
    CONSTRAINT 'FK_produtos_Categoria' FOREIGN KEY ('categoria') REFERENCES 'categorias' ('id')
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
