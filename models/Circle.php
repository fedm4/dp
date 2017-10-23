<?php
require_once("models/Shape.php");
class Circle extends Shape{

  function __construct(){
    /** Generate random float diameter **/
    $this->setDiameter(mt_rand(100, 10000) / 100);

    /** Get area **/
    $this->setArea(pow($this->getDiameter() / 2, 2) * pi());

    /** Set the name **/
    $this->setGeoShape("circle");

    $this->setHeight(null);
    $this->setBase(null);
  }

}
