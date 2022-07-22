
<header>

<style>

header{

  background-color:#acc099;
  font-size:18px;


}
</style>

 

<nav class="navbar navbar-expand-lg navbar-light">
<nav class="navbar navbar-light">
  <a class="navbar-brand" href="index.php">
    <img src="./content/logo.png" width="220" height="100" alt="">
  </a>
</nav>
 
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Produtos
        </a>
        
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
    <?php
      foreach ($categoria as $key => $value) {
    ?>
            
          <li><a class="dropdown-item" href="produtos-cate.php?id=<?php echo $key;?>&tipo=promocao"><?php echo $value ['nome'];?></a></li>
          <li><hr class="dropdown-divider"></li> 
         <?php
}
    ?>     
      </ul>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="contato.php">Contato<span class="sr-only">(current)</span></a>
</li>
        </ul>
      </li>
    </ul>
  </div>
</nav>





</header>






