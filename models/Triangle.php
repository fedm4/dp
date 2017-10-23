<?php
require_once("models/Shape.php");
class Triangle extends Shape{

  function __construct(){
    /** Generate random float height **/
    $this->setHeight(mt_rand(100, 10000) / 100);
    /** Generate random float base **/
    $this->setBase(mt_rand(100, 10000) / 100);

    /** Get area **/
    $this->setArea(($this->getHeight() * $this->getBase()) / 2);

    /** Set the name **/
    $this->setGeoShape("triangle");

    $this->setDiameter(null);
  }

}
