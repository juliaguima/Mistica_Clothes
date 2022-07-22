<?php
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';



?>
<style>
body{
   background-color: #f8ead7;
   
}
</style>

     
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./content/banner1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Venha conferir</h5>
        <p> Peças exclusivas</p>
      </div>
    </div>
    <div class="carousel-item">
    <a href="produtos-cate.php?id=3&tipo=promocao"><img src="./content/banner2.png" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Venha conferir</h5>
        <p>As calças hippies mais lindas que você vai encontrar</p>
      </div>
    </div>
    <div class="carousel-item">
    <a href="produtos-cate.php?id=1&tipo=promocao"> <img src="./content/banner3.png" class="d-block w-100" alt="..."> </a>
      <div class="carousel-caption d-none d-md-block">
        <h5>Venha conferir</h5>
        <p>Aqui temos os vestidos mais incríveis do Brasil</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
 

<div class= "container">
   <div id="cards"class = "row mt-5 ">     
      

     
<?php
        foreach ($categoria as $key => $value) {
           
     ?>

    <div id="cada"class="card" style="width: 19rem; ">
    <a href="produtos-cate.php?id=<?php echo $key;?>&tipo=promocao"> <img src="./content/<?php echo $value ['imagem'];?>" class="card-img-top" alt="..."</a>
 
    </div>
   

<?php
   }

?>
</div>
</div>



<?php

include_once './includes/_footer.php';
?>
