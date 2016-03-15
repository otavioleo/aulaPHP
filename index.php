<?php
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path_ = substr($rota['path'],1);
$path = explode('/',$path_);
$path = str_replace(".php", "", $path[1]);

if(empty($path))
   $path = "index";

require_once 'menu.php';
require_once 'footer.php';
?>
<section>
    <div class="row">
<!--        <?php require_once ("menu.php"); ?>
    </div>         
    <div>-->
        <?php // require_once ($path.".php"); ?>
        <?php require_once ($path.".php"); ?>
    </div>         
    <div class="row">
        <div class="col-md-4">
            <img src="logo.jpg" class="img-responsive" alt="Cinque Terre" style="width:350px;height:250px"> 
        </div>         
    </div>         
</section>
<?php
showFooter($botao = 1);
?>
