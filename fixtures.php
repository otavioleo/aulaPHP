<?php

require_once 'RedBeanPHP\rb.php';
require_once 'RedBeanPHP\conecta.php';

echo "#### Executando fixtures ####<br>";

echo "Removendo a tabela";
$tabela = $conexao->exec("DROP TABLE IF EXISTS teste");
echo " - Ok<br>";

echo "Criando a tabela";
$tabela = $conexao->exec("CREATE TABLE pdo.teste (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  email VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  assunto VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  mensagem VARCHAR(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 0
AVG_ROW_LENGTH = 630
CHARACTER SET utf8
COLLATE utf8_general_ci");
echo " - Ok<br>";

echo "Inserindo dados na tabela";
for ($i = 0; $i <= 9; $i++) {
$tabela = $conexao->dispense('teste');
   $tabela->nome = "Chico Silva_$i";
   $tabela->email = "chico.Silva_$i@teste.com";
   $tabela->nota = "$i";
   $conexao->store($tabela);
}
echo " - Ok<br>";
echo "#### Concluído ####<br>";
