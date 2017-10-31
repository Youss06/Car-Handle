<?php
// Include Header
include("template/header.php");

?>
<form class="" action="../controllers/index.php" method="post" enctype="multipart/form-data">
      <!-- <div class="form-group">
        <label for="exampleInputEmail1">Type de véhicule</label>
        <input type="text" class="form-control" name="model" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Camion, Moto, Berline...">
        <small id="emailHelp" class="form-text text-muted">Veuillez insérer le modèle de votre véhicule.</small>
      </div> -->

      <input type="radio" name="model" value="camion"> Camion<br>
      <input type="radio" name="model" value="moto"> Moto<br>
      <input type="radio" name="model" value="voiture"> Voiture<br>

      <div class="form-group">
        <label for="exampleInputEmail1">Couleur du véhicule</label>
        <input type="text" class="form-control" name="color" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Bleu, Rouge, Vert...">
        <small id="emailHelp" class="form-text text-muted">La couleur de votre véhicule.</small>
      </div>



      <form class="" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Marque du véhicule</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="mark" aria-describedby="emailHelp" placeholder="Inserez la marque de votre véhicule">
          <small id="emailHelp" class="form-text text-muted">Veuillez insérer la de votre véhicule.</small>
        </div>

        <form class="" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Année du véhicule</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="years" aria-describedby="emailHelp" placeholder="Inserez la marque de votre véhicule">
            <small id="emailHelp" class="form-text text-muted">Veuillez insérer l'année de votre véhicule.</small>
          </div>



      <button type="submit" name="send" class="btn btn-primary">Envoyer</button>
      <a href="" class="btn btn-primary tonbou">Créer</a>
      <a href="" class="btn btn-primary tonbou">Modifier</a>
      <a href="" class="btn btn-primary tonbou">Supprimer</a>
    </form>

<?php
// Include Footer
include("template/footer.php");

 ?>
