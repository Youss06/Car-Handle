<?php
abstract class Vehicule{
  // Protected
Protected $model;
Protected $mark;
Protected $color;
Protected $years;

  // constructor
  public function __construct(array $data){
      $this->hydrate($data);
    }

  // Hydrate
  public function hydrate(array $data)
    {
      foreach ($data as $key => $value) {
        $method = 'set' . ucfirst($key);
        if (method_exists($this,$method)) {
        $this->$method($value);
        }
      }
}

public function getId()
    {
        return $this->id;
    }

   public function setId($id)
    {
        $id = (int)$id;
          if ($id > 0)
      {
        $this->id = $id;
      }
    }

   public function getModel()
    {
        return $this->model;
    }

   public function setModel($model)
    {
            if (is_string($model))
        {
          $this->model = $model;
        }
    }


   public function getMark()
    {
        return $this->mark;
    }

   public function setMark($mark)
    {
          if (is_string($mark))
      {
        $this->mark = $mark;
      }
    }

   public function getColor()
    {
        return $this->color;
    }

   public function setColor($color)
    {
            if (is_string($color))
        {
          $this->color = $color;
        }
    }


   public function getYears()
    {
        return $this->years;
    }

   public function setYears($years)
    {
            if (is_string($years))
        {
          $this->years = $years;
        }
    }



}
