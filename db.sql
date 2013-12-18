CREATE DATABASE IF NOT EXISTS `#3 bimestre` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `#3 bimestre`;

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `razao` varchar(200) DEFAULT NULL,
  `nomefantasia` varchar(200) DEFAULT NULL
);