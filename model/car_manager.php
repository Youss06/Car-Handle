<?php

class CarManager {


  // constructeur

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=cars', 'root', 'root');
   return $bd;
  }

  public function add(chat $c ){
    $q = $this->getBdd()->prepare('INSERT INTO vehicule(type, mark, color, years)
    VALUES(:type, :mark, :color, :years)');
}
