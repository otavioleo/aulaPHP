<?php
require_once 'menu.php';
require_once 'footer.php';
$page = $_REQUEST['page'];
?>
<h4><?php echo $page; ?></h4>
<div>
    <ul class="list-group">
        <li><a href="">KIT PORTÃO DESLIZANTE CONDOMÍNIO</a></li>
        <li><a href="">FIOS E CABOS</a></li>
        <li><a href="">GRAVADOR TELEFÔNICO</a></li>
        <li><a href="">INTERFONE</a></li>
        <li><a href="">ALARMES</a></li>
        <li><a href="">CÂMERAS PARA CFTV</a></li>
        <li><a href="">KIT PORTÃO BASCULANTE CONDOMÍNIO</a></li>
        <li><a href="">KIT PORTÃO PIVOTANTE CONDOMÍNIO</a></li>
        <li><a href="">CANCELA ELETRÔNICA BAIXO FLUXO</a></li>
        <li><a href="">CANCELA ELETRÔNICA  ALTO FLUXO</a></li>
    </ul>
</div>
<?php
showFooter($botao = 0);
?>
