CREATE DATABASE concessionaria;
USE concessionaria;

CREATE TABLE carros(id INT AUTO_INCREMENT, marca VARCHAR(255), nodelo VARCHAR(255), ano INT(4), preco FLOAT, foto VARCHAR(255), cor VARCHAR(255), descricao VARCHAR(255), PRIMARY KEY (id));