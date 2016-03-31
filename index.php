<?php
$rotas = ['index', 'home', 'empresa', 'servicos', 'contato'];
$url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$url = substr($url['path'], 1);
$url = explode('/', $url);
$url = $url[1];
$url = str_replace(".php", "", $url);

if (empty($url)) {
   $url = "index";
}

if (in_array($url, $rotas)) {
   if (file_exists($url . ".php")) {
      $pagina = $url . ".php";
      require_once 'menu.php';
      require_once 'footer.php';
   } else {
      $pagina = "erro404.php";
   }
} else {
   $pagina = "erro404.php";
}

require_once($pagina);

if ($pagina == 'index.php') {
   ?>
   <div class="row">
       <div class="col-md-4">
           <img src="logo.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:250px"> 
       </div>         
   </div>         
   <?php
}