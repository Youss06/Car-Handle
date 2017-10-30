<?php
require ("../model/car_manager.php");


function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

$VehiculeManager = new CarManager();
if ($_POST) {
  # code...
  $car = new Car(
    ['model' => $_POST['model'],
    'mark' => $_POST['mark'],
    'color' => $_POST['color'],
    'years' => $_POST['years']]);
    $VehiculeManager->add($car);
}


// Foreach to Show

$ShowVehicule = $VehiculeManager->getAllCars();
foreach ($ShowVehicule as $key => $value) {
  $ShowVehicule[$key] = new Car($value);
}

// include Vue
require("../views/indexVue.php");
