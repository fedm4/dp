<?php
require_once("interfaces/iMethods.php");

class Shape implements iMethods{

  public $diameter;
  public $base;
  public $area;
  public $height;
  public $geoShape;

  /** Setters **/
  public function setArea($val){
    $this->area = $val;
  }
  public function setBase($val){
    $this->base = $val;
  }
  public function setHeight($val){
    $this->height = $val;
  }
  public function setDiameter($val){
    $this->diameter = $val;
  }
  public function setGeoShape($val){
    $this->geoShape = $val;
  }
  /** Getters **/
  public function getArea(){
    return $this->area;
  }
  public function getBase(){
    return $this->base;
  }
  public function getHeight(){
    return $this->height;
  }
  public function getDiameter(){
    return $this->diameter;
  }
  public function getGeoShape(){
    return $this->geoShape;
  }

}
