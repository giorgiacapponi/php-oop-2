
<div class="card" style="width: 18rem;">
  <img src="<?php echo $product->img?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><?php echo $product->name?></h3>
    <h5> <?php echo $product->brand?></h5>
    <div>&euro;<?php echo $product->getPrice();?></div>
    <div> <?php echo $product->Category->animal?> <?php echo $product->Category->weight?></div>
    <p class="card-text"><?php echo $product->showInfo()?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>