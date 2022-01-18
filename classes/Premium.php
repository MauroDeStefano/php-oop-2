<?php

require_once __DIR__ . "/User.php";

class Premium extends User{

  private $vipCode;

  function __construct($_name, $_lastname, $_vipCode)
  {
    parent::__construct($_name, $_lastname);
    $this->vipCode = $_vipCode;
    $this->discount = 10;
  }

  function setVipCode($_vipCode){
    $this->vipCode = $_vipCode;
  }
  
  function getVipCode(){
    return $this->vipCode;
  }

}