<?php

class Prodotto
{
  private $name;
  private $price;
  private $description;

  public function __construct($_name, $_price, $_description)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;
  }

  public function setName($_name)
  {
    $this->name = $_name;
  }

  public function setprice($_price)
  {
    $this->price = $_price;
  }

  public function setDescription($_description)
  {
    $this->description = $_description;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getDescription()
  {
    return $this->description;
  }
}