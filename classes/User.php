<?php

class User{
  private $name;
  private $surname;
  private $id;
  private $email;
  private $password;
  private $creditCard;
  protected $discount;

  function __construct($_email, $_password)
  {
    $this->email = $_email;
    $this->password = $_password;
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

  public function setId($_id){
    if(strlen($_id) === 10){
      $this->id = $_id; 
    }
  }

  public function getId(){
    return $this->id;
  }

  public function setEmail($_email){
    if (filter_var($_email, FILTER_VALIDATE_EMAIL)) {
      $this->email = $_email;
    }
  }

  public function getEmail(){
    return $this->email;
  }

  public function setPassword($_password){
    if (strlen($_password) > 6){
      $this->password = $_password;
    }
  }

  public function getPassword(){
    return $this->password;
  }

  public function setCreditCard($_creditCard){
    $this->creditCard = $_creditCard;
  }

  public function getCreditCard(){
    return $this->creditCard;
  }
};