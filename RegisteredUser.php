<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User
{

  private $cardNumber;
  public $cardValidity = true;


  public function __construct($_name, $_lastname, $_cardNumber)
  {

    $this->cardNumber = $_cardNumber;

    $this->setDiscount();

    parent::__construct($_name, $_lastname);
  }

  public function setDiscount()
  {
    $this->discount = 20;
  }

  public function setcardNumber($_cardNumber)
  {
    $this->cardNumber = $_cardNumber;
  }

  public function getcardNumber()
  {
    $this->cardNumber;
  }
}