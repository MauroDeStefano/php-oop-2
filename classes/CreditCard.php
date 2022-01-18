<?php 

class CreditCard{

  private $name;
  private $surname;
  private $number;
  private $expireDate;
  private $cvv;

  function __construct($_name, $_surname, $_number, $_expireDate, $_cvv)
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->number = $_number;
    $this->expireDate = $_expireDate;
    $this->cvv = $_cvv;
  }

  public function setName($_name){
    $this->name = $_name;
  }

  public function getName(){
    return $this->name;
  }

  public function setSurname($_surname){
    $this->surname = $_surname;
  }

  public function getSurname(){
    return $this->surname;
  }

  public function setNumber($_number){
    $this->number = $_number;
  }

  public function getNumber(){
    return $this->number;
  }

  public function setExpireDate($_expireDate){
    $this->expireDate = $_expireDate;
  }

  public function getExpireDate(){
    return $this->expireDate;
  }

  public function setCvv($_cvv){
    $this->cvv = $_cvv;
  }

  public function getCvv(){
    return $this->cvv;
  }
}