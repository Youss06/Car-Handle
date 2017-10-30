<?php
abstract class Vehicule{
  // Protected
Protected $model;
Protected $mark;
Protected $color;
Protected $years;

  // constructeur
  public function __construct(array $data){
      $this->hydrate($data);
    }

  // Hydrateur
  public function hydrate(array $data)
    {
      foreach ($data as $key => $value) {
        $method = 'set' . ucfirst($key);
        if (method_exists($this,$method)) {
        $this->$method($value);
        }
      }
}

}
