<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$prod = $_GET['prod'];
$cat = $_GET['cat'];
$produto = $paginas[$cat][$prod];

?>


<style>

header{
  margin-bottom: 150px;
}
body{
   background-color: #f8ead7;
   
}
</style>

    <div class= "container">
      <div class="col">     
      <img src="./content/<?php echo $produto['imagem'];?>" style= "float: left;" height=400px; widht=300px;  alt="...">
      </div> 
      <div class= "container mt-5">
      <div class= "row">
      <div class="col ml-5"> 
      <h1><strong><?php echo $produto['nome'];?></strong></h1>
      <p style="margin-top:40px; font-size:20px;"><strong>Preço:</strong> R$<?php echo $produto['preco'];?>
      <p style="margin-top:70px; font-size:20px;"><?php echo $produto['descricao'];?></p>
      <a style=" margin-top:50px; background-color: #A87B5C;padding: 13px 200px;" href="pagamento.php" class="btn">Comprar<img src="./content/carrinho.png" width="45" height="25" alt=""></a>
      </p>
      </div>
      </div>
      </div>
      </div>
             
      
          

          
          
          
      

<?php

include_once './includes/_footer.php';

?>
