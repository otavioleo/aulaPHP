<?php
require_once 'menu.php';
require_once 'footer.php';
$page = $_REQUEST['page'];
?>
<h4><?php echo $page; ?></h4>
<div class="container">
    <table  class="table" border="0" width="700">
        <tr>
            <td>
                <div>
                    <ul class="list-group">
                        <li><a href="">KIT PORT�O DESLIZANTE CONDOM�NIO</a></li>
                        <li><a href="">FIOS E CABOS</a></li>
                        <li><a href="">GRAVADOR TELEF�NICO</a></li>
                        <li><a href="">INTERFONE</a></li>
                        <li><a href="">ALARMES</a></li>
                        <li><a href="">C�MERAS PARA CFTV</a></li>
                        <li><a href="">KIT PORT�O BASCULANTE CONDOM�NIO</a></li>
                        <li><a href="">KIT PORT�O PIVOTANTE CONDOM�NIO</a></li>
                        <li><a href="">CANCELA ELETR�NICA BAIXO FLUXO</a></li>
                        <li><a href="">CANCELA ELETR�NICA  ALTO FLUXO</a></li>
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
</div>
<?php
showFooter($botao = 0);
?>
