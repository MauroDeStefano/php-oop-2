<?php

class Product {

  private $name;
  private $category;
  private $barCode;
  private $id;

  function __construct($_name, $_barcode, $_id)
  { 
    $this->name = $_name;
    $this->barcode = $_barcode;
    $this->id = $_id;
  }

  public function setName($_name){
    $this->name = $_name;
  }

  public function getName(){
    return $this->name;
  }

  public function setCategory($_category){
    $this->category = $_category;
  }

  public function getCategory(){
    return $this->category;
  }

  public function setBarCode($_barCode){
    $this->barCode = $_barCode;
  }

  public function getBarCode(){
    return $this->barCode;
  }

  public function getId(){
    return $this->id;
  }

  public function setEmail($_email){
    if (filter_var($_email, FILTER_VALIDATE_EMAIL)) {
      $this->email = $_email;
    }
  }
}