<?php
require_once("models/Shape.php");
class Square extends Shape{

  function __construct(){
    /** Generate random float side(height = side) **/
    $this->setHeight(mt_rand(100, 10000) / 100);

    /** Get area **/
    $this->setArea(pow($this->getHeight(), 2));

    /** Set the name **/
    $this->setGeoShape("square");

    $this->setDiameter(null);
    $this->setBase(null);
  }

}
