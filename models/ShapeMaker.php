<?php
require("models/Circle.php");
require("models/Square.php");
require("models/Triangle.php");

class ShapeMaker {

  public function makeShape($shape){
    switch($shape){
      case "circle":
        return new Circle;
        break;
      case "square":
        return new Square;
        break;
      case "triangle":
        return new Triangle;
        break;
      default:
        return null;
    }
    return null;
  }

}
