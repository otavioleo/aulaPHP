<?php
if (isset($_REQUEST['submitted'])) {
   if (!empty($_REQUEST['consulta'])) {
      processaPesquisa();
   } else {
      print "<script>alert('Pesquisa não localizada!');javascript:history.back(1);</script>";
   }
} else {
   showHome();
}

function showHome() {
   ?>
   <!DOCTYPE html>
   <html>
       <head>
           <meta charset="ISO-8859-1">
           <title>Site Simples PHP</title>
           <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
           <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
           <script src="bootstrap/js/bootstrap.min.js"></script>
       </head>
       <body>
           <div class="container">
               <table  class="table" border="0" width="700">
                   <tr>
                       <td height="600">
                           <h2>Site Simples PHP</h2>
                           <div>
                               <ul class="list-inline">
                                   <li><a href="index.php?page=Home">Home</a></li>
                                   <li><a href="empresa.php?page=Empresa">Empresa</a></li>
                                   <li><a href="produtos.php?page=Produtos">Produtos</a></li>
                                   <li><a href="servicos.php?page=Serviços">Servi&ccedil;os</a></li>
                                   <li><a href="contato.php?page=Contato">Contato</a></li>
                                   <li>
                                       <form name="frmPesquisa"method="GET" action="menu.php?">
                                           <label for="consulta">Pesquisa:</label>
                                           <input type="text" id="consulta" name="consulta" value='' maxlength="255" />
                                           <input type="submit" id="submitted" name="submitted" value="OK" />
                                       </form>
                                   </li>
                               </ul>
                           </div>
                           <?php
                        }

                        function processaPesquisa() {
                           require_once 'RedBeanPHP\rb.php';
                           require_once 'RedBeanPHP\conecta.php';
                           require_once 'footer.php';
                           showHome();
                           $consulta = $_REQUEST['consulta'];
                           $tabela = $conexao->find('conteudos', ' conteudo LIKE ? ', ["%$consulta%"]);
                           if (!count($tabela)) {
                              print "<script>alert('Pesquisa não localizada!');javascript:history.back(1);</script>";
                              exit;
                           }
                           print "<table width='200' border='0' cellspacing='0' cellpadding='0'>";
                           foreach ($tabela as $b) {
                              $pagina_ = "$b->pagina".".php" ;
                              $pagina = $b->titulo;
                              print "<tr><td nowrap>";
                              print "<a href='$pagina_'>$pagina</a>";
//                              print "<a href='produtos.php?gera_produtos=1&id_produto=$b->id'>$b->produto - $b->descricao</a>";
                              print "</td></tr>";
                           }
                           print "</table>";
                        }
                        