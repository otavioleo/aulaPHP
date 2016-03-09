<?php

function showFooter($botao) {
   ?>
   <footer>
       <?php if ($botao == '0') { ?>
          <br>
          <form>
              <input type = 'button' id = "btsair" name = "btsair" value = 'Voltar' onclick = "location.href = 'index.php'"/>
          </form>
       <?php } ?>
   </footer>
   </td>
   </tr>
   <tr>
       <td>
           <p><font size="1">
               Todos os direitos reservados - <?php
               $ANO = date('Y');
               echo $ANO;
               ?>
               </font>
           </p>

       </td>
   </tr>
   </table>
   </div>
   </body>
   </html>
   <?php
}
