<?php
try{

  require("models/ShapeMaker.php");

  $shapeMaker = new ShapeMaker();

  $circle = $shapeMaker->makeShape("circle");
  echo $circle->getGeoShape();
  echo "<br />Diameter: <br />";
  var_dump($circle->getDiameter());
  echo "<br />Area: <br />";
  var_dump($circle->getArea());
  echo "<br />Height: <br />";
  var_dump($circle->getHeight());
  echo "<br />Base: <br />";
  var_dump($circle->getBase());
  echo "<br /><br /><br />";

  $square = $shapeMaker->makeShape("square");
  $square->getGeoShape();
  echo "<br />Height: <br />";
  var_dump($square->getHeight());
  echo "<br />Area: <br />";
  var_dump($square->getArea());
  echo "<br />Base: <br />";
  var_dump($square->getBase());
  echo "<br />Diameter: <br />";
  var_dump($square->getDiameter());
  echo "<br /><br /><br />";

  $triangle = $shapeMaker->makeShape("triangle");
  echo $triangle->getGeoShape();
  echo "<br />Height: <br />";
  var_dump($triangle->getHeight());
  echo "<br />Base: <br />";
  var_dump($triangle->getBase());
  echo "<br />Area: <br />";
  var_dump($triangle->getArea());
  echo "<br />Diameter: <br />";
  var_dump($triangle->getDiameter());

}catch(Throwable $e){
  printf($e->getMessage());
}
