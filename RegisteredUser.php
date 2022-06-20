<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User
{

  public $creditCard;


  public function __construct($_name, $_lastname, $_creditCard)
  {

    $this->creditCard = $_creditCard;

    parent::__construct($_name, $_lastname);
  }

  public function setDiscount($discount)
  {
    $this->discount = 20;
  }
}

$paolo = new RegisteredUser('Paolo', 'Rossi', 0151515);

var_dump($paolo);