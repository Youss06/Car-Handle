<?php

class CarManager {

  public function getBdd(){
    $bd = new PDO('mysql:host=localhost;dbname=cars', 'root', 'root');
   return $bd;
  }
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

    public function getAllCars(){
    // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.

   $q = $this->getBdd()->query('SELECT * FROM vehicule');
   $donnees = $q->fetchAll(PDO::FETCH_ASSOC);

   return $donnees;
  }

  public function recoveryCars($id){
      $q = $this->getBdd()->prepare ('SELECT * FROM vehicule WHERE id = :id');

      $q->execute(array('id' => $id));
      $data = $q->fetch();
      return $data;
}

public function delete($id)
      {
        $q = $this->getBdd()->prepare('DELETE FROM vehicule WHERE vehicule.id = :id');
        $q->bindValue(':id', $id, PDO::PARAM_INT);

        $q->execute();
      }

}
