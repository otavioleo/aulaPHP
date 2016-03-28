<?php
require_once 'menu.php';
require_once 'footer.php';
if (isset($_POST['submitted'])) {
   processaForm();
} else {
   showForm();
}

function showForm() {
   ?>
   <h4>Contato</h4>
   <form class="form-horizontal" role="form" name="frmContato" action="contato.php" method="POST">
       <div class="form-group">
           <label class="control-label col-sm-1" for="nome">Nome:</label>
           <div class="col-sm-10">
               <input type="text" class="form-control" id="nome" name="nome" style = "width:200px;" value = "" required />
           </div>
       </div>
       <div class="form-group">
           <label class="control-label col-sm-1" for="email">Email:</label>
           <div class="col-sm-10">
               <input type="email" class="form-control" id="email" name="email" style = "width:200px;" value = "" required />
           </div>
       </div>
       <div class="form-group">
           <label class="control-label col-sm-1" for="assunto">Assunto:</label>
           <div class="col-sm-10">
               <input type="text" class="form-control" id="assunto" name="assunto" style = "width:200px;" value = "" required />
           </div>
       </div>
       <div class="form-group">
           <label class="control-label col-sm-1" for="mensagem">Mensagem:</label><br>
           <textarea class="form-control" rows="3" style = "width:500px;" name="mensagem" value = "" required></textarea>
       </div>
       <div class="form-group"> 
           <div class="col-sm-offset-1 col-sm-10">
               <input type="submit" id="submitted" name="submitted" value="Enviar" />
               <input type='button' id="btsair" name="btsair" value='Voltar' onclick="location.href = 'index.php'"/>
           </div>
       </div>
   </form>
   <?php
   showFooter($botao = 1);
}

function processaForm() {
   echo "<h4>Contato</h4>";
   echo "<br><br>";
   echo "Dados enviados com sucesso.";
   echo "<br><br>";
   echo "Nome = $_REQUEST[nome]";
   echo "<br><br>";
   echo "Email = $_REQUEST[email]";
   echo "<br><br>";
   echo "Assunto = $_REQUEST[assunto]";
   echo "<br><br>";
   echo "Mensagem = $_REQUEST[mensagem]";
   echo "<br><br>";
   showFooter($botao = 0);
}
