<?php

public function getBdd(){
  $bd = new PDO('mysql:host=localhost;dbname=cars', 'root', 'root');
 return $bd;
}
