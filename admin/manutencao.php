<?php
require_once("verificaLogin.php");
require_once '..\RedBeanPHP\rb.php';
require_once '..\RedBeanPHP\conecta.php';

if (isset($_REQUEST['acao'])) {
   $array_form = $_REQUEST;
   showSalva($conexao, $array_form);
}

if (isset($_POST['submitted'])) {
   $id = $_REQUEST['id_conteudo'];
   processaManu($conexao, $id);
} else {
   showManu($conexao);
}

// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function showManu($conexao) {

   $tabela = $conexao->findAll('conteudos', 'ORDER BY titulo ASC');
   ?>
   <html>
       <head>
           <title>Login</title>
       </head>
       <body>
       <center>  
           <p>&nbsp;</p>
           <h2>Área Administrativa Site Simples PHP</h2>

           <form action="manutencao.php" method="POST">

               <p align='center'><font face='Times New Roman' size='3'>Selecione a Página</p>
               <p><select class='campo3' name='id_conteudo'><font size='2'>
                       <?php
                       foreach ($tabela as $b) {
                          print "<option value='" . $b->id . "'>$b->titulo</option>";
                       }
                       ?>
                   </select><br></font></p>


               <p><input type="submit" name="submitted" value="Confirma" /></p>
           </form>
       </center>
   </body>
   </html>
   <?php
}

function processaManu($conexao, $id) {
   $tabela = $conexao->load('conteudos', $id);
   $conteudo = $tabela->conteudo;
   $titulo = $tabela->titulo;
   ?>
   <div>
       <form name="frmAltera" action="manutencao.php?acao=salvar" method="POST">
           <h2>Área Administrativa Site Simples PHP</h2>
           <table>
               <thead>
                   <tr>
                       <th colspan='3' align="left">Alterar Conteúdo - <?php echo $titulo; ?></th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>
                           <fieldset>
                               <legend>Conteúdo</legend>
                               <textarea rows = "3" cols = "110" id="conteudo" name = "conteudo"><?php echo $conteudo; ?></textarea>
                               <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                           </fieldset>
                       </td>
                   </tr>                
               </tbody>
           </table>
           <input type="submit" id="submitted" name="submitted" class="btn btn-primary" value="Salvar">
           <input type='button' id="btsair" name="btsair" value='Voltar' onclick="location.href = 'manutencao.php'"/>
       </form>
   </div>
   <?php
}

function showSalva($conexao, $array_form) {
//   print_r($array_form);
//   echo "<br>";
   $id = $array_form[id];
   $conteudo = $array_form[conteudo];

   $tabela = $conexao->load('conteudos', $id);

   $tabela->conteudo = $conteudo;
   $conexao->store($tabela);

   header('Location: manutencao.php');
   exit;
}
