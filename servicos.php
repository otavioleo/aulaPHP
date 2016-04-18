<?php

require_once 'RedBeanPHP\rb.php';
require_once 'RedBeanPHP\conecta.php';
require_once 'menu.php';
require_once 'footer.php';
print "<h4>Servi&ccedil;os</h4>";
print "<div>";
print "<ul class='list-group'>";
$tabela = $conexao->findAll('servicos', 'ORDER BY produto ASC');
foreach ($tabela as $b) {
   print "<li>";
   echo $b->produto . " - " . $b->tipo;
   print "</li>";
}
print "</ul>";
print "</div>";
showFooter($botao = 0);
