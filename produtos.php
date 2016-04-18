<?php
require_once 'RedBeanPHP\rb.php';
require_once 'RedBeanPHP\conecta.php';
require_once 'menu.php';
require_once 'footer.php';
if (isset($_REQUEST['gera_produtos'])) {
   $gera_produtos = $_REQUEST['gera_produtos'];
} else {
   $gera_produtos = '0';
}
switch ($gera_produtos) {
   case 0:
      ?>
      <h4>Produtos</h4>
      <div class="container">
 <p class="text-justify">          
          <table  class="table" border="0" width="700">
              <tr>
                  <td>
                      <div>
                          <ul class="list-group">
                              <?php
                              $tabela = $conexao->findAll('produtos', 'ORDER BY produto ASC');
                              foreach ($tabela as $b) {
                                 print "<li><a href='produtos.php?gera_produtos=1&id_produto=$b->id'>";
                                 echo $b->produto . " - " . $b->descricao;
                                 print "</a></li>";
                              }
                              ?>                   
                          </ul>
                      </div>
                  </td>
                  <td>
                      <div class="row">
                          <div class="col-md-2">
                              <img src="portao_1.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:100px"> 
                          </div>         
                          <div class="col-md-2">
                              <img src="portao_2.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:100px"> 
                          </div>         
                      </div>
                      <br>
                      <div class="row">
                          <div class="col-md-2">
                              <img src="portao_3.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:100px"> 
                          </div>         
                          <div class="col-md-2">
                              <img src="portao_4.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:100px"> 
                          </div>         
                      </div>         
                  </td>
              </tr>
          </table>
      </p>
      </div>
      <?php
      showFooter($botao = 0);
      break;

   case 1:
      $id_produto = $_REQUEST['id_produto'];
     
      ?>
      <h4>Produtos</h4>
      <div class="container">
          <table  class="table" border="0" width="700">
              <tr>
                  <td>
                      <div>
                          <ul class="list-group">
                              <?php
   
                              $tabela = $conexao->load('produtos', $id_produto);
                                 $produto = $tabela->produto;
                                 $descricao = $tabela->descricao;
                                 $imagem = $tabela->imagem;

                                 print "<li>";
                                 echo $produto . " - " . $descricao;
                                 print "</li>";
                              ?>                   
                          </ul>
                      </div>
                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="row">
                          <div class="col-md-2">
                              <img src="<?php echo $imagem; ?>" class="img-responsive" alt="Cinque Terre" style="width:350px;height:100px"> 
                          </div>         
                      </div>         
                  </td>
              </tr>
          </table>
      </div>
      <?php
      break;
}
?>
