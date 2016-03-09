<?php
require_once 'menu.php';
require_once 'footer.php';
$page = $_REQUEST['page'];
?>
<h4><?php echo $page; ?></h4>
    <div class="row">
        <div class="col-md-2">
            <img src="portao_1.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:150px"> 
        </div>         
        <div class="col-md-2">
            <img src="portao_2.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:150px"> 
        </div>         
    </div>
    <br>
    <div class="row">
        <div class="col-md-2">
            <img src="portao_3.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:150px"> 
        </div>         
        <div class="col-md-2">
            <img src="portao_4.jpg" class="img-responsive" alt="Cinque Terre" style="width:150px;height:150px"> 
        </div>         
    </div>         
<?php showFooter($botao = 0); ?>

