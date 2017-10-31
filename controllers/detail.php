<?php

require ("../model/car_manager.php");

function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");


// Foreach to Show detail page

$VehiculeManager = new CarManager();


if (isset($_GET['id'])) {
  # code...
  $id = $_GET['id'];
  $detailVehicule = $VehiculeManager->recoveryCars($id);
  //transformer $datailVehicule [] -> object car_manager
  $car = new Car($detailVehicule);
}





//var_dump($car);
require("../views/detailVue.php");
