<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';





?>




<h2 style="text-align: center; margin-top:50px; margin-bottom:40px;">Contato</h2>

<style>
 
 input{
    padding: 10px;
    border: 1px solid #E5E5E5;
    width: 200px;
    color: #999999;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    -moz-box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 8px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    
}


body{
   background-color: #f8ead7;
   
}
</style>

  <div class="row">
  <div class="col-md-7 offset-md-5">
   

<form  action="./contato.php" method="post">
<div id="contato"class="container">
  <div class="row">
    <div class="col-sm-4">
  
    <div class="form-group">
    <label for="txtNome"><strong>Nome Completo</strong></label>
    <input type="text" class="form-control" name="txtNome" id="txtNome"  placeholder="Digite seu nome completo" required>
  </div>
  <div class="form-group">
    <label for="txtEmail"><strong>Email</strong></label>
    <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="name@example.com"required>
  </div>
  <div class="form-group">
    <label for="txtTelefone"><strong>Telefone</strong></label>
    <input type="text" class="form-control" type="text" name="txtTelefone" id="txtTelefone" placeholder="(00) 00000-0000"required>
  </div>
  
  <div class="form-group">
    <label for="txtMensagem"><strong>Mensagem<strong></label>
    <textarea class="form-control" name="txtMensagem" id="txtMensagem" rows="3" placeholder="Digite sua mensagem" required></textarea>
  </div>

<input style="  margin-left: 15px; margin-bottom:70px;" type="submit" value="Cadastrar">


    
    
  </div>
  </div>
</div>
</form>
</div>
</div>


<?php

if (isset ( $_POST['txtNome']) ) {

    $nome = strtoupper( $_POST['txtNome']);
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo '<h4  style="margin-bottom:  60px; color:#608a5a; text-align: center; "> Muito bem!!! Obrigada pelo contato senhor(a) <strong>'.$nome.' </strong>, retornaremos o mais breve possível.😊😊</h4>';

}



include_once './includes/_footer.php';

?>