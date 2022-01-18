<?php

class Sell{

  private $user;
  private $product;
  private $total;

  function __construct($_user, $_product)
  {
    $this->user = $_user;
    $this->product = $_product;
  }

  public function setUser($_user){
    $this->user = $_user;
  }

  public function getUser(){
    return $this->user;
  }

  public function setProduct($_product){
    $this->product = $_product;
  }

  public function getProduct(){
    return $this->product;
  }

  public function setTotal($_total){
    $this->total = $_total;
  }

  public function getTotal(){
    return $this->total;
  }

}