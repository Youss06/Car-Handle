<?php
require ("../model/car_manager.php");


function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$VehiculeManager = new CarManager();

// recupere le vehiucule selon id

if (isset($_GET['id'])) {
  # code...
  //manger recupere le vehicul grace a id
  $id = $_GET['id'];
  $car = $VehiculeManager->recoveryCars($id);

  if (isset($get) && $post && $post && $post)
  {
    // rempli mon $car avec les post

    // enregistre
  }
// affiche ta vue.
require("../views/formUpdate.php");
}
