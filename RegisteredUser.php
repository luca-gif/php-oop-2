<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User
{

  private $cardNumber;
  private $cardValidity;


  public function __construct($_name, $_lastname, $_cardNumber, $_cardValidity)
  {

    $this->cardNumber = $_cardNumber;
    $this->cardValidity = $_cardValidity;

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

$paolo = new RegisteredUser('Paolo', 'Rossi', 0151515, '12-02-2024');

var_dump($paolo);