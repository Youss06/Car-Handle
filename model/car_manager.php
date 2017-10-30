<?php

class CarManager {


  // constructeur

  public function add(vehicule $recovery ){
    $q = $this->getBdd()->prepare('INSERT INTO vehicule(model, mark, color, years)
    VALUES(:model, :mark, :color, :years)');

    // HERE Call Back Getters (getNom...)
    $q->bindValue(':model', $recovery->getModel());
    $q->bindValue(':mark', $recovery->getMark(), PDO::PARAM_INT);
    $q->bindValue(':color', $recovery->getColor(), PDO::PARAM_STR);
    $q->bindValue(':years', $recovery->getYears(), PDO::PARAM_STR);

    $q->execute();
}
