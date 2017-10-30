<?php

class CarManager {


  // constructeur

  public function add(chat $c ){
    $q = $this->getBdd()->prepare('INSERT INTO vehicule(model, mark, color, years)
    VALUES(:model, :mark, :color, :years)');
}
