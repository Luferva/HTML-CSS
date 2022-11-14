/* Base de dados para consulta de interação medicamentosa */

DROP TABLE IF EXISTS `farmaco`;
CREATE TABLE `farmaco` (
  `id_classe` int(6) NOT NULL,
  `nome_classe` varchar(30) DEFAULT NULL,
  `medicamento` varchar(30) DEFAULT NULL,
  `intera_com` varchar(30) DEFAULT NULL,
  `tipo_interacao` varchar(45) DEFAULT NULL,
  `composicao` varchar(21) DEFAULT NULL,
  `serve_para` varchar(18)DEFAULT NULL,
  `interacao` varchar(8),
  PRIMARY KEY (`id_classe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `farmaco` VALUES 
(1,'antimicrobiano','anticoncepcional','Tetraciclinas','Reduz eficácia Anticoncepcional','Estrogenio x progesterona','antibiotico','negativa'),
(2,'antimicrobiano','anticoncepcional','Rifampicina','Reduz eficácia Anticoncepcional','Estrogenio x progesterona','antibiotico','negativa'),





