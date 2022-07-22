<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';





?>

<h2 style="text-align: center;margin-top:50px; margin-bottom:40px;">Cartão</h2> 

<style>
 
 input{
    padding: 10px;
    border: 1px solid #E5E5E5;
    width: 200px;
    color: #999999;
    box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 8px;
    -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
    
}

body{
   background-color: #f8ead7;
   
}


  </style>
  
<div class="row">
<div class="col-md-7 offset-md-5">
<form action="./cartao.php" method="post">
<div id="contato"class="container">
  <div class="row">
    <div class="col-sm-4">
  
    <div class="form-group">
    <label for="txtNumero"><strong>Numero do cartão</strong></label>
    <input type="text" class="form-control" name="txtNumero" id="txtNumero"  placeholder="0000-0000-0000" required>
  </div>
  <div class="form-group">
    <label for="txtNome"><strong>Nome do titular</strong></label>
    <input type="text" class="form-control" name="txtNome" id="txtNome" placeholder="Nome com está no cartão"required>
  </div>
  <div class="form-group">
    <label for="txtValidade"><strong>Data de validade</strong></label>
    <input type="text" class="form-control" name="txtValidade" id="txtValidade" placeholder="MM/AA"required>
  </div>
  <div class="form-group">
    <label for="txtCVV"><strong>CVV/CVC</strong></label>
    <input type="text" class="form-control" type="text" name="txtCVV" id="txtCVV" placeholder="123"required>
  </div>
 <input style= " margin-left: 15px; margin-bottom:70px;"" type="submit" value="Cadastrar">


    
    
  </div>
  </div>
</div>
</form>
</div>
  </div>


<?php

if (isset ( $_POST['txtNumero']) ) {

    $numero = strtoupper( $_POST['txtNumero']);
    $nome = $_POST['txtNome'];
    $validade = $_POST['txtValidade'];
    $cvv= $_POST['txtCVV'];
    echo '<h4  style="margin-bottom:  60px; color:#608a5a; text-align: center; "> Pagamento efetuado, suas compras já estão sendo preparadas para a entrega😊😊</h4>';

}


include_once './includes/_footer.php';
?>
