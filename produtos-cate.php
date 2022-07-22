<?php
include_once './includes/_head.php';
include_once './includes/_dados.php';
include_once './includes/_header.php';

$id = $_GET['id'];

?>

<style>

body{
   background-color: #f8ead7;
   
}


#cardcat{
   box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 8px;
}
</style>

<h2 style="text-align: center; font-size: 50px; margin-bottom:70px; margin-top:70px;" ><?php echo $categoria [$id] ['nome'];?></h2>
<div class= "container">
   <div class= "row">     
      
     

<?php 
   
   foreach ($paginas as $key => $value) {
      
   ?>
      
   <div id="cards"class = "row m-2 "> 
     <div id= "cardcat"class="card m-4 " style="width: 19rem ;">
     <img src="./content/<?php echo $paginas[$id][$key]['imagem'];?>">
     <div class="card-body">
     <h5 class="card-title"><?php echo $paginas[$id][$key]['nome'];?></h5>
     <p class="card-text"><?php echo $paginas[$id][$key]['descricao'];?></p>
     
     <a  style="float:right; background-color: #A87B5C;" href="produto-detalhe.php?cat=<?php echo $id?>&prod=<?php echo $key;?>" class="btn ">Comprar</a>
  </div>
</div>
</div>

<?php
        }
      
?>

</div>
</div>








 

<?php

include_once './includes/_footer.php';

?>
