<?php

require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Cuccia.php';
require_once __DIR__ . '/Giochi.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/RegisteredUser.php';

$paolo = new RegisteredUser('Paolo', 'Rossi', 151515);
$martina = new RegisteredUser('Martina', 'Verdi', 151515);
$giacomo = new User('Giacomo', 'de Giacomi');
$marta = new User('Marta', 'de Rossi');
$osso = new Gioco('Osso', '3€', 'Osso morbido per animali');
$palla = new Gioco('Palla', '4€', 'Palla per cani');
$cucciaCani = new Cuccia('Cuccia morbida', '15€', 'Cuccia morbida per cani di taglia media');
$cucciaGatti = new Cuccia('Cuccia morbida', '15€', 'Cuccia morbida per gatti');
$crocchette = new Cibo('Crocchette', '8€', 'Crocchette per cani');
$carne = new Cibo('Carne in scatola', '3€', 'Carne in scatola per cani');


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  if ($paolo->cardValidity === true) {
    echo "{$paolo->getName()} ha messo nel carrello {$crocchette->getName()} per un prezzo di {$crocchette->getPrice()} ed ha uno sconto di {$paolo->getDiscount()}€";
  } else {
    echo 'Mi dispiace, la tua carta è scaduta';
  }

  ?>

  <br>

  <?= "{$marta->getName()} ha messo nel carrello {$cucciaGatti->getName()} per un prezzo di {$cucciaGatti->getPrice()} ed ha uno sconto di {$marta->getDiscount()}€"; ?>

</body>

</html>