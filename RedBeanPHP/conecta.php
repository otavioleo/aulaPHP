<?php
$conexao = new R();
$conexao->setup("mysql:host=localhost;dbname=pdo", "bd_pdo", "pdobdpdo");
// Check connection
if (mysqli_connect_errno()) {
   echo "FALHA NA CONEX�O: " . mysqli_connect_error();
}
