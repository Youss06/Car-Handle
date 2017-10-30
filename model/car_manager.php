<?php

class CarManager {


  // constructeur

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=cars', 'root', 'root');
   return $bd;
  }

  public function add(chat $c ){
    $q = $this->getBdd()->prepare('INSERT INTO vehicule(model, mark, color, years)
    VALUES(:model, :mark, :color, :years)');
}
