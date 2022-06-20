<?php

require_once __DIR__ . '/Prodotto.php';

class Giochi extends Prodotto
{

  public function __construct($_name, $_price, $_description)
  {

    parent::__construct($_name, $_price, $_description);
  }
}