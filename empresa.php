<?php
require_once 'menu.php';
require_once 'footer.php';
$page = $_REQUEST['page'];
?>
<h4><?php echo $page; ?></h4>

<table  class="table" border="1" width="70%">
    <tr>
        <td>
            <p class="text-justify">
                Olá, seja bem vindo à nossa loja!
            </p>
            <p class="text-justify">
                Você chegou até nosso site porque está buscando facilidade, e encontrou! 
                Conheça alguns de nossos produtos clicando aqui.
            </p>
            <p class="text-justify">
                Fundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfeiçoar o seu tempo.
                Isso mesmo, oferecemos aqui soluções objetivas, econômicas e de qualidade para facilitar o que um dia, 
                já foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagradáveis abordagens.
            </p>
            <p class="text-justify">
                Trabalhamos com toda linha de equipamento de segurança eletrônica residencial, comercial e industrial, 
                desde câmeras com visão infravermelhas, motores para portão até itens de inovação do dia a dia.
            </p>
            <p class="text-justify">
                Possuímos estrutura física com loja aberta para atendimento aos clientes, 
                composto por um time fantástico de vendedores e técnicos especializados. 
                Por isso não hesite, fique a vontade em nos contatar.
            </p>
        </td>
    </tr>
</table>

<?php
showFooter($botao = 0);
?>
