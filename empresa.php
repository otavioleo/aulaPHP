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
                Ol�, seja bem vindo � nossa loja!
            </p>
            <p class="text-justify">
                Voc� chegou at� nosso site porque est� buscando facilidade, e encontrou! 
                Conhe�a alguns de nossos produtos clicando aqui.
            </p>
            <p class="text-justify">
                Fundado no ano de 2016, o Site possui o objetivo de facilitar a sua vida e aperfei�oar o seu tempo.
                Isso mesmo, oferecemos aqui solu��es objetivas, econ�micas e de qualidade para facilitar o que um dia, 
                j� foi simples, o ato de entrar ou sair da casa ou empresa, sem ter que se preocupar com desagrad�veis abordagens.
            </p>
            <p class="text-justify">
                Trabalhamos com toda linha de equipamento de seguran�a eletr�nica residencial, comercial e industrial, 
                desde c�meras com vis�o infravermelhas, motores para port�o at� itens de inova��o do dia a dia.
            </p>
            <p class="text-justify">
                Possu�mos estrutura f�sica com loja aberta para atendimento aos clientes, 
                composto por um time fant�stico de vendedores e t�cnicos especializados. 
                Por isso n�o hesite, fique a vontade em nos contatar.
            </p>
        </td>
    </tr>
</table>

<?php
showFooter($botao = 0);
?>
