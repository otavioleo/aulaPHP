<?php
require_once 'menu.php';
require_once 'footer.php';
$page = $_REQUEST['page'];
?>
<h4><?php echo $page; ?></h4>
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
<?php
showFooter($botao = 0);
?>
