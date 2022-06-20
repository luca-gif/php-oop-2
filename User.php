<?php

class User
{
  private $name;
  private $lastname;
  protected $discount = 0;

  public function __construct($_name, $_lastname)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
  }

  public function setName($_name)
  {
    $this->name = $_name;
  }

  public function setLastame($_lastname)
  {
    $this->lastname = $_lastname;
  }

  public function setCreditCard($_creditCard)
  {
    $this->creditCard = $_creditCard;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getlastname()
  {
    return $this->lastname;
  }

  public function getCreditCard()
  {
    return $this->creditCard;
  }
}