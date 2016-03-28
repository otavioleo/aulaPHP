<?php
$rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$rota_ = dirname(__FILE__) . "/";
$path_ = substr($rota['path'], 1);
$path = explode('/', $path_);
$path = str_replace(".php", "", $path[1]);
if (empty($path)) {
   $path = "index";
}
$path = $path . ".php";
//echo $path; die();
if (file_exists($rota_ . $path)) {
   require_once 'menu.php';
   require_once 'footer.php';
   ?>
   <section>
       <div class="row">
           <?php require_once($path); ?>
       </div>
       <?php if ($path == 'index.php') { ?>
          <div class="row">
              <div class="col-md-4">
                  <img src="logo.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:250px"> 
              </div>         
          </div>         
       <?php } ?>
   </section>
   <?php
} else {
   ?>   

   <div id="page">
       <h1>Página não encontrada</h1>
       <p>Pedimos desculpa, mas a página que acessou não está mais disponível! Poderá ter sido removida ou alterada.</p>
       <p>Já verificou na barra de endereço do seu browser de internet se o URL está correto?.</p>
       <p>Se desejar, poderá ir para a nossa <a href="index.php">home page</a></p>
   </div>
<?php } ?>