CREATE DATABASE cartour;

USE cartour;

CREATE TABLE VEICULOS(
  id_veiculo INT(11) AUTO_INCREMENT PRIMARY KEY,
  tipoVeiculo VARCHAR(5),
  marca VARCHAR(17),
  modelo VARCHAR(10),
  anoFabricacao INT(4),
  anoModelo INT(4),
  cambio VARCHAR(15),
  portas INT(1),
  combustivel VARCHAR(15),
  km FLOAT(7,3),
  chassi VARCHAR(17),
  preco FLOAT(7,3)
);