<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções</title>
</head>

<body>
  <?php

  //função comum
  function breakLine()
  {
    echo '<br/><br/>';
  }


  $toLower = 'TOLOWER';
  $toUpper = 'toupper';
  $ucFirst = 'marcelo';
  $frase = 'Hello World, aprendendo PHP';

  $num1 = 7.77;
  $num2 = 7.13;
  $num3 = 7.5005478953;
  $num4 = 49;

  echo strtolower($toLower);
  breakLine();

  echo strtoupper($toUpper);
  breakLine();

  echo ucfirst($ucFirst);
  breakLine();

  echo (string) strlen($ucFirst);
  echo gettype($ucFirst);
  breakLine();

  echo str_replace('PHP', 'TypeScript', $frase);
  breakLine();

  echo substr($frase, 0, -1);
  breakLine();

  echo ceil($num1);
  breakLine();

  echo floor($num2);
  breakLine();

  echo round($num3);
  breakLine();

  echo rand(0, 1000);
  breakLine();

  echo sqrt($num4);
  breakLine();

  echo date('d/m/Y');

  ?>
</body>

</html>