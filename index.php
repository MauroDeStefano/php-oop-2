<?php 

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Premium.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Sell.php";

$carta = new CreditCard('Mauro', 'De Stefano', '1234567898', 321321, 321);

$mauro = new User('Mauro_De_Stefano@gmail.com', '315621325135');

$mauro->setCreditCard($carta);

var_dump($mauro->getCreditCard());

$prodottoVenduto = new Product('pianoforte', 
3621312, 2222222222);

$transazione1 = new Sell($mauro, $prodottoVenduto);

var_dump($transazione1);


$nomeDaStampare = $mauro->getName();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP-2</title>
</head>
<body>

  <h4><?php echo $nomeDaStampare ?></h4>
</body>
</html>