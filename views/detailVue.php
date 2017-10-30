<?php
include("template/header.php");


 ?>
 <div class="container mt-5 mb-5">

    <div style="background-color:rgba(250,250,250,0.4)" class="card text-center">
      <div style="background-color:rgba(250,250,250,0.4)" class="card-header">
        <?php echo $car->getModel(); ?></p>
      </div>
      <div class="card-block">
        <h4 class="card-title"><?php echo $car->getMark();?></h4>
        <p class="card-text"><?php echo $car->getColor();?></p>

      </div>
    </div>
 </div>

 <?php
 // Include Footer
 include("template/footer.php");
